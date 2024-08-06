<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $productCount = Product::count();
        $categoryCount = Category::count();
        $totalViews = Product::sum('views'); 

        return view('admin.dashboard', compact('productCount', 'categoryCount', 'totalViews'));
    }
}

