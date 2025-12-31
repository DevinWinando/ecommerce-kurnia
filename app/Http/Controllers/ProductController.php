<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Warehouse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        // Always use warehouse 24 for ecommerce
        $warehouse24 = Warehouse::where('pos_id', 24)->first();
        $warehouseId = $warehouse24 ? $warehouse24->id : null;

        $categories = Category::with(['products.unit', 'products.warehouses' => function ($query) use ($warehouseId) {
            if ($warehouseId) {
                $query->where('warehouses.id', $warehouseId);
            }
        }])->whereHas('products', function ($query) use ($warehouseId) {
            $query->where('is_active', true);

            if ($warehouseId) {
                $query->whereHas('warehouses', function ($q) use ($warehouseId) {
                    $q->where('warehouses.id', $warehouseId)
                      ->where('product_warehouse.qty', '>', 0);
                });
            }
        })->limit(10)->get();

        return response()->json($categories->map(function ($category) use ($warehouseId) {
            return [
                'id' => $category->id,
                'name' => $category->name,
                'products' => $category->products->map(function ($product) use ($warehouseId) {
                    // Get qty from warehouse 24
                    $qty = $product->qty ?? 0;
                    $stockStatus = 'out_of_stock';

                    if ($warehouseId) {
                        $warehouse = $product->warehouses
                            ->where('id', $warehouseId)
                            ->first();
                        if ($warehouse) {
                            $qty = $warehouse->pivot->qty;
                        }
                    }

                    // Determine stock status
                    if ($qty > 10) {
                        $stockStatus = 'in_stock';
                    } elseif ($qty > 0) {
                        $stockStatus = 'low_stock';
                    } else {
                        $stockStatus = 'out_of_stock';
                    }

                    return [
                        'id' => $product->id,
                        'code' => $product->code,
                        'name' => $product->name,
                        'price' => $product->price,
                        'stock' => [
                            'qty' => $qty,
                            'status' => $stockStatus,
                            'available' => $qty > 0,
                        ],
                        'unit' => $product->unit ? [
                            'id' => $product->unit->id,
                            'name' => $product->unit->name,
                            'short_name' => $product->unit->short_name ?? $product->unit->name,
                        ] : null,
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

    public function getProductByCategory($id, Request $request)
    {
        // Always use warehouse 24 for ecommerce
        $warehouse24 = Warehouse::where('pos_id', 24)->first();
        $warehouseId = $warehouse24 ? $warehouse24->id : null;

        $categories = Category::with(['products.unit', 'products.warehouses' => function ($query) use ($warehouseId) {
            if ($warehouseId) {
                $query->where('warehouses.id', $warehouseId);
            }
        }])->where('id', $id)
        ->whereHas('products', function ($query) use ($warehouseId) {
            $query->where('is_active', true);

            if ($warehouseId) {
                $query->whereHas('warehouses', function ($q) use ($warehouseId) {
                    $q->where('warehouses.id', $warehouseId)
                      ->where('product_warehouse.qty', '>', 0);
                });
            }
        })->get();

        return response()->json($categories->map(function ($category) use ($warehouseId) {
            return [
                'id' => $category->id,
                'name' => $category->name,
                'products' => $category->products->map(function ($product) use ($warehouseId) {
                    // Get qty from warehouse 24
                    $qty = $product->qty ?? 0;
                    $stockStatus = 'out_of_stock';

                    if ($warehouseId) {
                        $warehouse = $product->warehouses
                            ->where('id', $warehouseId)
                            ->first();
                        if ($warehouse) {
                            $qty = $warehouse->pivot->qty;
                        }
                    }

                    // Determine stock status
                    if ($qty > 10) {
                        $stockStatus = 'in_stock';
                    } elseif ($qty > 0) {
                        $stockStatus = 'low_stock';
                    } else {
                        $stockStatus = 'out_of_stock';
                    }

                    return [
                        'id' => $product->id,
                        'code' => $product->code,
                        'name' => $product->name,
                        'price' => $product->price,
                        'stock' => [
                            'qty' => $qty,
                            'status' => $stockStatus,
                            'available' => $qty > 0,
                        ],
                        'unit' => $product->unit ? [
                            'id' => $product->unit->id,
                            'name' => $product->unit->name,
                            'short_name' => $product->unit->short_name ?? $product->unit->name,
                        ] : null,
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

        // Always use warehouse 24 for ecommerce
        $warehouse24 = Warehouse::where('pos_id', 24)->first();
        $warehouseId = $warehouse24 ? $warehouse24->id : null;

        $products = Product::with(['unit', 'warehouses' => function ($query) use ($warehouseId) {
            if ($warehouseId) {
                $query->where('warehouses.id', $warehouseId);
            }
        }])
        ->where(function ($q) use ($query) {
            $q->where('name', 'like', '%' . $query . '%')
              ->orWhere('code', 'like', '%' . $query . '%');
        })
        ->where('is_active', true)
        ->whereHas('category', function ($q) use ($query) {
            $q->where('name', 'like', '%' . $query . '%');
        });

        if ($warehouseId) {
            $products->whereHas('warehouses', function ($q) use ($warehouseId) {
                $q->where('warehouses.id', $warehouseId)
                  ->where('product_warehouse.qty', '>', 0);
            });
        }

        $products = $products->get();

        return response()->json($products->map(function ($product) use ($warehouseId) {
            // Get qty from warehouse 24
            $qty = $product->qty ?? 0;
            $stockStatus = 'out_of_stock';

            if ($warehouseId) {
                $warehouse = $product->warehouses
                    ->where('id', $warehouseId)
                    ->first();
                if ($warehouse) {
                    $qty = $warehouse->pivot->qty;
                }
            }

            // Determine stock status
            if ($qty > 10) {
                $stockStatus = 'in_stock';
            } elseif ($qty > 0) {
                $stockStatus = 'low_stock';
            } else {
                $stockStatus = 'out_of_stock';
            }

            return [
                'id' => $product->id,
                'code' => $product->code,
                'name' => $product->name,
                'price' => $product->price,
                'stock' => [
                    'qty' => $qty,
                    'status' => $stockStatus,
                    'available' => $qty > 0,
                ],
                'unit' => $product->unit ? [
                    'id' => $product->unit->id,
                    'name' => $product->unit->name,
                    'short_name' => $product->unit->short_name ?? $product->unit->name,
                ] : null,
                'image' => $product->image,
                'is_active' => $product->is_active,
            ];
        }));
    }
}
