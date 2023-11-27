<?php

namespace App\Http\Controllers\API;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit', 6);
        $name = $request->input('name');
        $description = $request->input('description');
        $price_from = $request->input('price_from');
        $price_to = $request->input('price_to');
        $tags = $request->input('tags');
        $category = $request->input('category');

        if ($id) {
            $product = Product::with('galleries')->find($id);

            if ($product) {
                return ResponseFormatter::success(
                    $product,
                    'Product Data Found'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Product Data Not Found',
                    404
                );
            }
        }

        $product = Product::with('category', 'galleries');

        if ($name) {
            $product->where('name', 'like', '%' . $name . '%');
        }

        if ($description) {
            $product->where('description', 'like', '%' . $description . '%');
        }

        if ($price_from) {
            $product->where('price', '>=', $price_from);
        }

        if ($price_to) {
            $product->where('price', '<=', $price_to);
        }

        if ($tags) {
            $product->where('tags', 'like', '%' . $tags . '%');
        }

        return ResponseFormatter::success(
            $product->paginate($limit),
            'Product Data List Found'
        );
    }
}
