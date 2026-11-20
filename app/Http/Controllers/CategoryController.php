<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __invoke(Request $request, Category $category)
    {
        abort_unless($category->is_active, 404);

        $category->load('children');

        // Books in this category and its direct subcategories
        $categoryIds = $category->children->pluck('id')->push($category->id);

        $products = ShopController::applyFilters(
            ShopController::baseQuery()->whereIn('category_id', $categoryIds),
            $request
        )->paginate(12)->withQueryString();

        $breadcrumbs = [];
        $current = $category;
        while ($current) {
            $breadcrumbs[] = $current;
            $current = $current->parent;
        }
        $breadcrumbs = array_reverse($breadcrumbs);

        // Sidebar: subcategories, or siblings when this is a leaf category
        $sidebarCategories = $category->children->isNotEmpty()
            ? $category->children
            : ($category->parent ? $category->parent->children : Category::root()->active()->get());

        return view('shop.category', compact('category', 'products', 'breadcrumbs', 'sidebarCategories'));
    }
}
