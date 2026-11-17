<?php

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AuthorFactory extends Factory
{
    protected $model = Author::class;

    public function definition(): array
    {
        $name = fake()->name();
        $slug = Str::slug($name);

        return [
            'name' => $name,
            'slug' => $slug,
            'bio' => fake()->paragraph(),
            'image' => null,
            'is_active' => true,
        ];
    }
}
