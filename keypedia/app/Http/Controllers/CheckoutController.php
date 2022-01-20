<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Cart;
use App\Models\Keyboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CheckoutController extends Controller
{
    public function showCheckout()
    {
        $showCategory = Category::all();
        $showCart = Cart::where('userId', '=', Auth()->id())->get();
        $keyboard = collect();
        $total = 0;

        foreach($showCart as $sc)
        {
            $key = Keyboard::find($sc->keyboardId);
            $keyboard->push($key);
            $total += $key->price * $sc->quantity;
        }

        $params['carts'] = $showCart;
        $params['categories'] = $showCategory;
        $params['keyboard'] = $keyboard;
        $params['totalPrice'] = $total;
        
        return view('/checkout', $params);
    }
}
