<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shopIndex()
    {
        $products = Product::paginate(25); // Fetch 25 products per page
        return view('shop', compact('products'));
    }
}
