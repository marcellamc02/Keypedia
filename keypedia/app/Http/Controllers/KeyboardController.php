<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Keyboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class KeyboardController extends Controller
{
    public function showKeyboardCategory(Request $request,$categoryId)
    {
        $categoryList = Category::all();
        if($request->type == 'name'){
            $keyboardCategory = DB::table('categories')
            ->join('keyboard', 'categories.id', '=', 'keyboard.categories_id')
            ->where('categories.id', 'LIKE', $categoryId)
            ->where('keyboard.name','LIKE','%'.$request->search.'%')
            ->paginate(8);
        }
        else if($request->type == 'price'){
            $keyboardCategory = DB::table('categories')
            ->join('keyboard', 'categories.id', '=', 'keyboard.categories_id')
            ->where('categories.id', 'LIKE', $categoryId)
            ->where('keyboard.price','=',$request->search)
            ->paginate(8);
        }
        else{
            $keyboardCategory = DB::table('categories')
            ->join('keyboard', 'categories.id', '=', 'keyboard.categories_id')
            ->where('categories.id', 'LIKE', $categoryId)
            ->paginate(8);
        }
        $categoryName = Category::find($categoryId)->name;

        return view('category',['keyboardCategories' => $keyboardCategory , 'categoryName' => $categoryName, 'categories'=>$categoryList, 'categoryId'=>$categoryId]);
    }

    // public function search(Request $request, $categoryId){
    //     $categoryList = Category::all();
    //     $keyboardCategory = DB::table('categories')
    //                             ->join('keyboard', 'categories.id', '=', 'keyboard.categories_id')
    //                             ->where('categories.id', 'LIKE', $categoryId)
    //                             ->where('keyboard.name','LIKE','%'.$request->search.'%')
    //                             ->paginate(8);
    //     $categoryName = Category::find($categoryId)->name;
    //     dd($keyboardCategory,$request->search,$categoryId);

    //     return view('category',['keyboardCategories' => $keyboardCategory , 'categoryName' => $categoryName, 'categories'=>$categoryList, 'categoryId'=>$categoryId]);
    // }

    public function showAddKeyboard()
    {
        $showCategories = Category::all();

        return view('addKeyboard', ['categories' => $showCategories]);
    }

    public function showManageCategory()
    {
        $showCategories = Category::all();

        return view('manageCategories', ['categories' => $showCategories]);
    }

    public function showUpdateCategory($categoryId)
    {
        $showCategories = Category::all();
        $categoryDetails = DB::table('categories')->where('categories.id', 'LIKE', $categoryId)->get();
        $categorydName = Category::find($categoryId)->name;

        return view('updateCategory', ['categories' => $showCategories , 'categoryDetails' => $categoryDetails , 'categoryName' => $categorydName]);
    }

    // for MANAGER
    public function addKeyboard(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'categories_id' => 'required',
            'name' => 'required|min:5',
            'price' => 'required|integer|min:30',
            'description' => 'required|min:20',
            'imgPath' => 'required'
        ]);

        if($validator->fails())
            return back()->withErrors($validator);

        $keyboard = new Keyboard;
        $keyboard->categories_id = $request->categories_id;
        $keyboard->name = $request->name;
        $keyboard->price = $request->price;
        $keyboard->description = $request->description;
        $keyboard->imgPath = $request->imgPath;
        $keyboard->save();

        return redirect('/home')->with('success', 'Item successfully added.');
    }

    public function deleteKeyboard(Request $request)
    {
        $selected = Keyboard::find($request->id);
        if($selected == null)
        {
            return back(404);
        }

        if(File::exists($selected->imgPath)) {
            File::delete($selected->imgPath);
        }
        $selected->delete();

        return redirect('/home')->with('success', 'Item successfully deleted');
    }

    public function updateKeyboard(Request $request)
    {
        $selected = Keyboard::find($request->id);
        if($selected == null)
        {
            return back(404);
        }

        $selected->categories_id = $request->categories_id;
        $selected->name = $request->name;
        $selected->price = $request->price;
        $selected->description = $request->description;
        $selected->imgPath = $request->imgPath;
        $selected->save();

        return back()->with('success', 'Item successfully updated.');
    }

    public function updateCategory(Request $request)
    {
        $selected = Category::find($request->id);
        if($selected == null)
        {
            return back(404);
        }

        $selected->name = $request->name;
        $selected->imgPath = $request->imgPath;

        return back()->with('success', 'Category successfully updated.');
    }

    public function deleteCategory(Request $request)
    {
        $selected = Category::find($request->id);
        if($selected == null)
        {
            return back(404);
        }

        if(File::exists($selected->imgPath)) {
            File::delete($selected->imgPath);
        }

        $selected->delete();

        return back()->with('success', 'Category successfully deleted.');
    }
}
