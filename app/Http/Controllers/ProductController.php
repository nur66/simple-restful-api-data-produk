<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function post(Request $request) {
        // $product = new Product;
        // $product->name = $request->name;
        // $product->price = $request->price;
        // $product->quantity = $request->quantity;
        // $product->active = $request->active;
        // $product->description = $request->description;

        // $product->save();
        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'active' => $request->active,
            'description' => $request->description,
        ]);

        return
            response()->json([
                "message" => "post method success",
            ]);
    }
}
