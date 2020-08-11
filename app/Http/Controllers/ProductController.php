<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){

        $products = Product::with('classification')->get();

        return view('product.index',compact('products'));

    }
}
