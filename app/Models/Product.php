<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'category_id',
        'author_id',
        'publisher_id',
        'title',
        'slug',
        'subtitle',
        'isbn',
        'sku',
        'description',
        'short_description',
        'cover_image',
        'gallery_images',
        'price',
        'compare_at_price',
        'cost_price',
        'stock_quantity',
        'low_stock_threshold',
        'weight',
        'dimensions',
        'format',
        'language',
        'pages',
        'publish_date',
        'is_featured',
        'is_bestseller',
        'is_new_arrival',
        'status',
        'deleted_at',
    ];

    protected $casts = [
        'gallery_images' => 'array',
        'dimensions' => 'array',
        'price' => 'decimal:2',
        'compare_at_price' => 'decimal:2',
        'cost_price' => 'decimal:2',
        'is_featured' => 'boolean',
        'is_bestseller' => 'boolean',
        'is_new_arrival' => 'boolean',
        'publish_date' => 'date',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }

    public function publisher(): BelongsTo
    {
        return $this->belongsTo(Publisher::class);
    }

    public function variants(): HasMany
    {
        return $this->hasMany(ProductVariant::class);
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(ProductReview::class)->where('is_approved', true);
    }

    public function defaultVariant()
    {
        return $this->hasOne(ProductVariant::class)->where('is_default', true);
    }

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopeBestseller($query)
    {
        return $query->where('is_bestseller', true);
    }

    public function scopeNewArrival($query)
    {
        return $query->where('is_new_arrival', true);
    }

    public function scopeInStock($query)
    {
        return $query->whereColumn('stock_quantity', '>', 0);
    }

    public function getRatingAttribute(): float
    {
        $avg = $this->reviews()->avg('rating');
        return $avg ? round((float) $avg, 1) : 0.0;
    }

    public function getReviewCountAttribute(): int
    {
        return (int) $this->reviews()->count();
    }

    public function getIsInStockAttribute(): bool
    {
        return $this->stock_quantity > 0;
    }

    public function getDiscountPercentageAttribute(): ?float
    {
        if (!$this->compare_at_price || $this->compare_at_price <= $this->price) {
            return null;
        }
        return round((($this->compare_at_price - $this->price) / $this->compare_at_price) * 100, 0);
    }
}
