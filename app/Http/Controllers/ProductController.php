<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getAllProducts(){
        $products = Product::paginate(20);

        return view('products', compact('products'));
    }
}
