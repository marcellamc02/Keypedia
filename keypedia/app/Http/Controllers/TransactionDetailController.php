<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Cart;
use App\Models\Keyboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TransactionDetailController extends Controller
{
    public function showTransactionDetail()
    {
        // $transactionDetail = Keyboard::join('keyboard', 'keyboard.id', '=', 'cart.keyboardId')
        //                             ->join('')
    }
}
