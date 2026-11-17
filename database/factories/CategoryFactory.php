<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition(): array
    {
        $name = fake()->unique()->words(2, true);
        $slug = Str::slug($name);

        return [
            'name' => ucwords($name),
            'slug' => $slug,
            'description' => fake()->sentence(),
            'image' => null,
            'parent_id' => null,
            'is_active' => true,
            'sort_order' => fake()->numberBetween(1, 100),
        ];
    }
}
