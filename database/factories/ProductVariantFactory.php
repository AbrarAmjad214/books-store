<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductVariantFactory extends Factory
{
    protected $model = ProductVariant::class;

    public function definition(): array
    {
        $price = fake()->randomFloat(2, 10, 150);

        return [
            'product_id' => Product::inRandomOrder()->first()?->id ?? Product::factory()->create()->id,
            'title' => fake()->randomElement(['Paperback', 'Hardcover', 'Kindle Edition']),
            'sku' => 'VAR-' . Str::upper(Str::random(8)),
            'price' => $price,
            'compare_at_price' => fake()->randomElement([null, $price + 10]),
            'stock_quantity' => fake()->numberBetween(0, 100),
            'is_default' => false,
        ];
    }
}
