<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Category;
use App\Models\Product;
use App\Models\Publisher;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

/**
 * International demo catalogue: genre categories, sample authors/publishers
 * and books using the Ebukz theme's cover images.
 *
 *   php artisan db:seed --class=StoreCatalogSeeder
 *
 * Older categories not in this list are deactivated and their books archived
 * (nothing is deleted).
 */
class StoreCatalogSeeder extends Seeder
{
    public function run(): void
    {
        $tree = [
            'Fiction' => ['Literary Fiction', 'Romance', 'Mystery & Thriller', 'Fantasy', 'Science Fiction'],
            'Non-Fiction' => ['Biography & Memoir', 'Business & Economics', 'Self-Help', 'History'],
            'Children & Teens' => ['Picture Books', 'Middle Grade', 'Young Adult'],
            'Science & Tech' => ['Popular Science', 'Computing'],
            'Lifestyle & Arts' => ['Cookbooks', 'Art & Photography', 'Travel'],
        ];

        $keep = [];
        $sort = 0;
        foreach ($tree as $rootName => $children) {
            $root = Category::updateOrCreate(
                ['slug' => Str::slug($rootName)],
                ['name' => $rootName, 'parent_id' => null, 'is_active' => true, 'sort_order' => $sort++]
            );
            $keep[] = $root->id;

            foreach ($children as $i => $childName) {
                $child = Category::updateOrCreate(
                    ['slug' => Str::slug($childName)],
                    ['name' => $childName, 'parent_id' => $root->id, 'is_active' => true, 'sort_order' => $i]
                );
                $keep[] = $child->id;
            }
        }

        // Retire everything that isn't part of the international catalogue
        Category::whereNotIn('id', $keep)->update(['is_active' => false]);
        Product::whereNotIn('category_id', $keep)->where('status', 'active')->update(['status' => 'archived']);

        $publishers = collect(['Northwind Press', 'Bluehill Books', 'Harbor & Crane', 'Lantern House'])
            ->map(fn ($name) => Publisher::firstOrCreate(['slug' => Str::slug($name)], ['name' => $name, 'is_active' => true]));

        $authors = collect([
            'Amelia Hart', 'Daniel Okafor', 'Sofia Marquez', 'Kenji Watanabe', 'Clara Lindqvist', 'Marcus Bell',
            'Priya Raman', 'Elena Rossi', 'James Whitaker', 'Nora Fitzgerald', 'Lucas Moreau', 'Hannah Becker',
        ])->mapWithKeys(fn ($name) => [$name => Author::firstOrCreate(
            ['slug' => Str::slug($name)],
            ['name' => $name, 'bio' => "{$name} is an award-winning author whose books have been translated into more than twenty languages.", 'is_active' => true]
        )]);

        // [title, category slug, author, price, format, flags]
        $books = [
            ['The Lighthouse Keeper\'s Daughter', 'literary-fiction', 'Amelia Hart', 18.99, 'hardcover', ['bestseller', 'featured']],
            ['Rivers of Quiet Light', 'literary-fiction', 'Clara Lindqvist', 16.50, 'paperback', ['new']],
            ['The Last Orchard', 'literary-fiction', 'Elena Rossi', 15.99, 'paperback', []],
            ['A Summer in Lisbon', 'romance', 'Sofia Marquez', 12.99, 'paperback', ['bestseller']],
            ['Letters to Paris', 'romance', 'Nora Fitzgerald', 11.99, 'paperback', ['new']],
            ['Love, Unwritten', 'romance', 'Amelia Hart', 13.50, 'paperback', []],
            ['The Silent Witness', 'mystery-thriller', 'James Whitaker', 17.99, 'hardcover', ['bestseller', 'featured']],
            ['Midnight at Hollow Creek', 'mystery-thriller', 'Marcus Bell', 14.99, 'paperback', ['new']],
            ['The Glass Alibi', 'mystery-thriller', 'Hannah Becker', 15.50, 'paperback', []],
            ['Cold Harbour', 'mystery-thriller', 'James Whitaker', 16.99, 'paperback', ['bestseller']],
            ['The Ember Throne', 'fantasy', 'Lucas Moreau', 19.99, 'hardcover', ['bestseller', 'featured']],
            ['Song of the Forgotten Sea', 'fantasy', 'Kenji Watanabe', 17.50, 'paperback', ['new']],
            ['The Witch of Ashwood', 'fantasy', 'Nora Fitzgerald', 16.99, 'paperback', []],
            ['Stars Beyond Orion', 'science-fiction', 'Kenji Watanabe', 18.50, 'paperback', ['new', 'featured']],
            ['The Mars Protocol', 'science-fiction', 'Daniel Okafor', 17.99, 'paperback', ['bestseller']],
            ['Echoes of Tomorrow', 'science-fiction', 'Priya Raman', 15.99, 'paperback', []],
            ['Becoming Brave', 'biography-memoir', 'Priya Raman', 21.99, 'hardcover', ['bestseller']],
            ['A Life in Colour', 'biography-memoir', 'Elena Rossi', 19.50, 'hardcover', []],
            ['The Startup Mindset', 'business-economics', 'Daniel Okafor', 24.99, 'hardcover', ['bestseller', 'featured']],
            ['Money, Simply Explained', 'business-economics', 'Marcus Bell', 19.99, 'paperback', ['new']],
            ['Leading Without Fear', 'business-economics', 'Hannah Becker', 22.50, 'hardcover', []],
            ['Small Habits, Big Life', 'self-help', 'Clara Lindqvist', 16.99, 'paperback', ['bestseller']],
            ['The Calm Mind', 'self-help', 'Priya Raman', 14.99, 'paperback', ['new']],
            ['Empires of the Silk Road', 'history', 'James Whitaker', 26.99, 'hardcover', ['featured']],
            ['The Age of Explorers', 'history', 'Lucas Moreau', 23.50, 'hardcover', []],
            ['Benny the Brave Bear', 'picture-books', 'Nora Fitzgerald', 9.99, 'hardcover', ['bestseller']],
            ['Goodnight, Little Star', 'picture-books', 'Amelia Hart', 8.99, 'hardcover', ['new']],
            ['The Secret Treehouse Club', 'middle-grade', 'Marcus Bell', 11.99, 'paperback', ['bestseller']],
            ['Max and the Time Machine', 'middle-grade', 'Daniel Okafor', 10.99, 'paperback', ['new']],
            ['The Girl Who Chased the Wind', 'young-adult', 'Sofia Marquez', 13.99, 'paperback', ['bestseller', 'featured']],
            ['Shadows of Elmwood High', 'young-adult', 'Hannah Becker', 12.99, 'paperback', []],
            ['The Universe in a Teacup', 'popular-science', 'Kenji Watanabe', 18.99, 'paperback', ['new']],
            ['How Brains Learn', 'popular-science', 'Priya Raman', 20.50, 'hardcover', []],
            ['Code for Curious Minds', 'computing', 'Daniel Okafor', 29.99, 'paperback', ['new', 'featured']],
            ['AI for Everyone', 'computing', 'Clara Lindqvist', 27.50, 'paperback', ['bestseller']],
            ['Kitchen Stories', 'cookbooks', 'Elena Rossi', 28.99, 'hardcover', ['bestseller']],
            ['Plant-Based Every Day', 'cookbooks', 'Sofia Marquez', 24.99, 'hardcover', ['new']],
            ['The Photographer\'s Eye', 'art-photography', 'Lucas Moreau', 32.99, 'hardcover', []],
            ['Wanderlust: 50 Journeys', 'travel', 'Nora Fitzgerald', 26.50, 'hardcover', ['new', 'featured']],
            ['Hidden Corners of Europe', 'travel', 'Hannah Becker', 22.99, 'paperback', []],
        ];

        $covers = collect(range(1, 6))->flatMap(fn ($row) => collect(range(1, $row === 3 || $row === 5 ? 12 : 6))
            ->map(fn ($n) => "assets/img/product/product-img-{$row}-{$n}.jpg"))->values();

        foreach ($books as $index => [$title, $categorySlug, $authorName, $price, $format, $flags]) {
            $category = Category::where('slug', $categorySlug)->first();
            $onSale = $index % 4 === 1;

            Product::updateOrCreate(
                ['slug' => Str::slug($title)],
                [
                    'category_id' => $category->id,
                    'author_id' => $authors[$authorName]->id,
                    'publisher_id' => $publishers[$index % $publishers->count()]->id,
                    'title' => $title,
                    'subtitle' => null,
                    'isbn' => '978' . str_pad((string) (1000000000 + $index * 7919), 10, '0', STR_PAD_LEFT),
                    'sku' => 'BK-' . str_pad((string) ($index + 1), 4, '0', STR_PAD_LEFT),
                    'short_description' => "A {$category->name} title by {$authorName}.",
                    'description' => "<p><strong>{$title}</strong> by {$authorName} is one of our most-loved {$category->name} titles — a book readers around the world keep recommending to friends.</p><p>Beautifully produced in {$format} edition, it makes a perfect addition to your shelf or a thoughtful gift for a fellow reader.</p>",
                    'cover_image' => $covers[$index % $covers->count()],
                    'price' => $price,
                    'compare_at_price' => $onSale ? round($price * 1.25, 2) : null,
                    'stock_quantity' => 40 + ($index * 7) % 120,
                    'format' => $format,
                    'language' => 'English',
                    'pages' => 180 + ($index * 37) % 320,
                    'publish_date' => now()->subMonths(($index * 3) % 30)->startOfMonth(),
                    'is_featured' => in_array('featured', $flags),
                    'is_bestseller' => in_array('bestseller', $flags),
                    'is_new_arrival' => in_array('new', $flags),
                    'status' => 'active',
                ]
            );
        }
    }
}
