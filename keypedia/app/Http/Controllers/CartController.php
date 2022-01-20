<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Cart;
use App\Models\Keyboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    public function showCart()
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

        return view('/Cart', $params);
    }

    public function addToCart(Request $request)
    {
        $keyboard = Keyboard::find($request->id);

        if($keyboard == null)
            return back(404);

        $validator = Validator::make($request->all(), [
            'quantity' => 'required'
        ]);

        if($validator->fails())
            return back()->withErrors($validator);
        
        $keyboard->save();

        $carts = Cart::firstWhere('keyboardId', '=', $request->id);

        if($carts == null)
        {
            $cart = new Cart;
            $cart->userId = Auth()->id();
            $cart->keyboardId = $request->id;
            $cart->quantity = $request->quantity;
            $cart->save();
        }else{
            $carts->quantity += $request->quantity;
            $carts->save();
        }

        session()->flash('success', 'Keyboard is Added to Cart');

        return redirect('/Cart');
    }

    public function updateQuantityCart(Request $request)
    {
        $quantityCart = Cart::firstWhere('id', '=', $request->id);
        if($quantityCart == null)
            return back(404);
        $quantityCart->quantity = $request->quantity;
        $quantityCart->save();

        session()->flash()('success', 'Quantity Cart is updated');

        return back();
    }
}
