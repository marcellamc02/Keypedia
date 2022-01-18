<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Category;

class KeyboardController extends Controller
{
    public function showKeyboardCategory($categoryId)
    {
        $keyboardCategory = DB::table('categories')
                                ->join('keyboard', 'categories.id', '=', 'keyboard.categories_id')
                                ->where('categories.id', 'LIKE', $categoryId)
                                ->get();
        $categoryName = Category::find($categoryId)->name;

        return view('category',['keyboardCategories' => $keyboardCategory , 'categoryName' => $categoryName]);
    }
}
