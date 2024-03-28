<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
//    echo "This is Product model";

    public function index()
    {
        $products = Product::all(); // fetch all the products from DB
        return view('product.list', ['products' => $products]);
    }

    public function create(){
        return view('product.add');
    }


}
