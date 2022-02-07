<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Http\ProductShow;
use Illuminate\Http\Request;

class ProductShowController extends Controller
{
    public function index()
    {
        //$products = Product::with(['categories', 'tags', 'media'])->get();
        $products = Product::inRandomOrder()->take(9)->get();

        return view('frontend.products.show', compact('products'));
    }

}
