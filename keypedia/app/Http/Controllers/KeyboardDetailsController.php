<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Keyboard;

class KeyboardDetailsController extends Controller
{
    public function showKeyboardDetails($keyboardId)
    {
        $keyboardDetails = DB::table('keyboard')->where('keyboard.id', 'LIKE', $keyboardId)->get();
        $keyboardName = Keyboard::find($keyboardId)->name;

        return view('detailsKeyboard',['keyboardDetails' => $keyboardDetails , 'keyboardName' => $keyboardName]);
    }
}
