<?php

namespace App\Services;

use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Support\Str;

class ProductService
{
    /**
     * Get all products
     */
    public function getAllProducts()
    {
        return Product::all();
    }

    /**
     * Get all categories
     */
    public function getCategories()
    {
        return Category::where('is_parent', 1)->get();
    }

    /**
     * Get all brands
     */
    public function getBrands()
    {
        return Brand::all();
    }

    /**
     * Get a single product by ID
     */
    public function getProductById($id)
    {
        return Product::find($id);
    }

    /**
     * Store a new product
     */
    public function storeProduct($data)
    {
        $slug = Str::slug($data['title']);
        $count = Product::where('slug', $slug)->count();
        if ($count > 0) {
            $slug = $slug . '-' . date('ymdis') . '-' . rand(0, 999);
        }
        $data['slug'] = $slug;
        $data['is_featured'] = isset($data['is_featured']) ? $data['is_featured'] : 0;

        $size = isset($data['size']) ? implode(',', $data['size']) : '';
        $data['size'] = $size;

        return Product::create($data);
    }

    /**
     * Update an existing product
     */
    public function updateProduct($id, $data)
    {
        $product = Product::findOrFail($id);
        $size = isset($data['size']) ? implode(',', $data['size']) : '';
        $data['size'] = $size;

        return $product->fill($data)->save();
    }

    /**
     * Delete a product
     */
    public function deleteProduct($id)
    {
        $product = Product::findOrFail($id);
        return $product->delete();
    }
}
