<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class MainController extends Controller
{
    public function welcome()
    {
        $welcome = Category::get();
        return view('welcome', compact('welcome'));
    }

    public function category($code)
    {
        $category = Category::where('code', $code)->first();
        return view('category', compact('category'));
    }


}
