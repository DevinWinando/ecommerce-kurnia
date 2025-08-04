<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::with(['products' => function ($query) {
            $query->limit(10)->orderBy('created_at', 'desc');
        }])->limit(10)->get();

        return response()->json($categories->map(function ($category) {
            return [
                'id' => $category->id,
                'name' => $category->name,
                'products' => $category->products->map(function ($product) {
                    return [
                        'id' => $product->id,
                        'code' => $product->code,
                        'name' => $product->name,
                        'price' => $product->price,
                        'qty' => $product->qty,
                        'image' => $product->image,
                        'is_active' => $product->is_active,
                    ];
                }),
            ];
        }));
    }

    public function categories()
    {
        $categories = Category::get();

        return response()->json($categories->map(function ($category) {
            return [
                'id' => $category->id,
                'name' => $category->name,
            ];
        }));
    }

    public function getProductByCategory($id)
    {
        $categories = Category::with(['products' => function ($query) {
            $query->orderBy('created_at', 'desc');
        }])->where('id', $id)->get();

        return response()->json($categories->map(function ($category) {
            return [
                'id' => $category->id,
                'name' => $category->name,
                'products' => $category->products->map(function ($product) {
                    return [
                        'id' => $product->id,
                        'code' => $product->code,
                        'name' => $product->name,
                        'price' => $product->price,
                        'qty' => $product->qty,
                        'image' => $product->image,
                        'is_active' => $product->is_active,
                    ];
                }),
            ];
        }));
    }

    public function search(Request $request)
    {
        $query = $request->input('q');
        $products = Product::where('name', 'like', '%' . $query . '%')
            ->orWhere('code', 'like', '%' . $query . '%')
            ->whereHas('category', function ($q) use ($query) {
                $q->where('name', 'like', '%' . $query . '%');
            })
            ->get();

        return response()->json($products->map(function ($product) {
            return [
                'id' => $product->id,
                'code' => $product->code,
                'name' => $product->name,
                'price' => $product->price,
                'qty' => $product->qty,
                'image' => $product->image,
                'is_active' => $product->is_active,
            ];
        }));
    }
}
