<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $products = Products::latest()->paginate(9);
        $categories = Category::all();
        return view('home')->with('products', $products, 'categories', $categories);
    }
}
