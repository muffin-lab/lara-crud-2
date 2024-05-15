<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        return view("products.list");
    }

    public function create() {
        return view("products.create");
    }

    public function store(Request $request) {
        $rules = [
            "name"=> "required|min:5",
            "sku"=> "required|min:3",
            "price"=> "required|numeric"
        ];

        $validator = Validator::make($request->all(), $rules)->validate();

        if ($validator->fails()) {
            return redirect()->route("product.create")->withErrors($validator)->withInput();
        }

        $product = new Product();
        $product->name = $request->name;
        $product->sku = $request->sku;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();

        return redirect()->route("product.index")->with("success","Product added Successfully.");
    }

    public function edit() {

    }

    public function update() {

    }

    public function destroy() {

    }
}
