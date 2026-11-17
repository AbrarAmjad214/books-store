<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Category;
use App\Models\Product;
use App\Models\Publisher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CatalogSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $publishers = Publisher::factory()->count(6)->create();
        $authors = Author::factory()->count(10)->create();

        $rootCategories = [
            'Pre School' => [
                'Early Learners & Workbook',
                'Rhymes Books',
                'Qurani Qaidas',
                'Writing Copies',
            ],
            'Primary & Secondary' => [
                'English',
                'Mathematics',
                'Science',
                'General Knowledge',
                'Social Studies',
                'Urdu',
                'Islamiat',
            ],
            'Matriculation' => [
                'Physics',
                'Chemistry',
                'Biology',
                'Computer',
                'Mathematics',
                'English',
                'Urdu',
                'Islamiyat',
            ],
            'Activity & Art' => [
                'Arts & Activity',
                'Drawing Concepts',
                'Table Books',
            ],
            'Reference' => [
                'Dictionaries',
                'Know your Aptitude',
                'Step by Step Grammar',
            ],
        ];

        foreach ($rootCategories as $rootName => $children) {
            $rootSlug = Str::slug($rootName);
            $root = Category::factory()->create([
                'name' => $rootName,
                'slug' => $rootSlug,
                'parent_id' => null,
                'sort_order' => 1,
            ]);

            foreach ($children as $index => $childName) {
                $childSlug = $rootSlug . '-' . Str::slug($childName);
                Category::factory()->create([
                    'name' => $childName,
                    'slug' => $childSlug,
                    'parent_id' => $root->id,
                    'sort_order' => $index + 1,
                ]);
            }
        }

        $categories = Category::all();

        Product::factory()->count(60)->create()->each(function ($product) use ($authors, $publishers, $categories) {
            $product->author_id = $authors->random()->id;
            $product->publisher_id = $publishers->random()->id;
            $product->category_id = $categories->whereNull('parent_id')->random()->id;
            $product->save();

            \App\Models\ProductVariant::factory()->count(2)->create([
                'product_id' => $product->id,
            ])->each(fn ($v) => $v->update(['is_default' => $v->id === 1]));

            \App\Models\ProductReview::factory()->count(fake()->numberBetween(1, 5))->create([
                'product_id' => $product->id,
            ]);
        });
    }
}
