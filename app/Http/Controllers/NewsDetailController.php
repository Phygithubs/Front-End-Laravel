<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class NewsDetailController extends Controller
{
    public function index($id){
        $product = Product::findOrFail($id);
        // dump($product);
        return view('product-detail', compact('product'));
    }
}
