<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Category;
use App\Models\Product;
use App\Models\Publisher;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        $title = fake()->unique()->sentence(3);
        $slug = Str::slug($title);
        $price = fake()->randomFloat(2, 10, 150);
        $compareAt = fake()->randomElement([null, $price + fake()->randomFloat(2, 5, 30)]);

        return [
            'category_id' => Category::inRandomOrder()->first()?->id ?? Category::factory()->create()->id,
            'author_id' => Author::inRandomOrder()->first()?->id ?? Author::factory()->create()->id,
            'publisher_id' => Publisher::inRandomOrder()->first()?->id ?? Publisher::factory()->create()->id,
            'title' => $title,
            'slug' => $slug,
            'subtitle' => fake()->sentence(),
            'isbn' => '978-' . fake()->numerify('##########'),
            'sku' => 'BK-' . Str::upper(Str::random(8)),
            'description' => fake()->paragraphs(3, true),
            'short_description' => fake()->sentence(),
            'cover_image' => 'https://images.unsplash.com/photo-1544947950-fa07a98d237f?w=600&q=80',
            'gallery_images' => null,
            'price' => $price,
            'compare_at_price' => $compareAt,
            'cost_price' => round($price * 0.6, 2),
            'stock_quantity' => fake()->numberBetween(0, 100),
            'low_stock_threshold' => 5,
            'weight' => fake()->randomFloat(2, 0.2, 2),
            'dimensions' => null,
            'format' => fake()->randomElement(['paperback', 'hardcover', 'ebook']),
            'language' => 'English',
            'pages' => fake()->numberBetween(100, 500),
            'publish_date' => fake()->dateTimeBetween('-2 years', 'today')->format('Y-m-d'),
            'is_featured' => fake()->boolean(20),
            'is_bestseller' => fake()->boolean(15),
            'is_new_arrival' => fake()->boolean(25),
            'status' => 'active',
        ];
    }
}
