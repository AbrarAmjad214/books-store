<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\ProductReview;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductReviewFactory extends Factory
{
    protected $model = ProductReview::class;

    public function definition(): array
    {
        return [
            'product_id' => Product::inRandomOrder()->first()?->id ?? Product::factory()->create()->id,
            'user_id' => User::inRandomOrder()->first()?->id ?? User::factory()->create()->id,
            'rating' => fake()->numberBetween(1, 5),
            'title' => fake()->sentence(),
            'comment' => fake()->paragraph(),
            'is_approved' => true,
        ];
    }
}
