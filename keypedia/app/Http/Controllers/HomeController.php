<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showHome()
    {
        $categoryList = Category::all();
        return view('home',['categories'=>$categoryList]);
    }
}
