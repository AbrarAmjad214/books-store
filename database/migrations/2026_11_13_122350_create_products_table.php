<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->foreignId('author_id')->constrained()->onDelete('cascade');
            $table->foreignId('publisher_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('subtitle')->nullable();
            $table->string('isbn')->nullable()->unique();
            $table->string('sku')->unique();
            $table->text('description');
            $table->text('short_description')->nullable();
            $table->string('cover_image')->nullable();
            $table->json('gallery_images')->nullable();
            $table->decimal('price', 12, 2);
            $table->decimal('compare_at_price', 12, 2)->nullable();
            $table->decimal('cost_price', 12, 2)->nullable();
            $table->integer('stock_quantity')->default(0);
            $table->integer('low_stock_threshold')->default(5);
            $table->decimal('weight', 8, 2)->nullable();
            $table->json('dimensions')->nullable();
            $table->string('format')->default('paperback'); // paperback, hardcover, ebook
            $table->string('language')->default('English');
            $table->integer('pages')->nullable();
            $table->date('publish_date')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_bestseller')->default(false);
            $table->boolean('is_new_arrival')->default(false);
            $table->string('status')->default('active'); // draft, active, archived
            $table->timestamps();
            $table->softDeletes();

            $table->index('category_id');
            $table->index('author_id');
            $table->index('publisher_id');
            $table->index('status');
            $table->index('is_featured');
            $table->index('is_bestseller');
            $table->index('is_new_arrival');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
