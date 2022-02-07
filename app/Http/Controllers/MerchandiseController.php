<?php

namespace App\Http\Controllers;
use App\merchandise;
use Illuminate\Http\Request;

class MerchandiseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::inRandomOrder()->take(9)->get();

        return view('frontend.products.index')->with('products');
    }

}