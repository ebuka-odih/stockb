<?php

namespace App\Http\Controllers;

use App\PurchasedCrypto;
use App\PurchasedStock;
use App\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboard()
    {
        $stocks = PurchasedStock::whereUserId(\auth()->id())->latest()->paginate(4);
        $crypto = PurchasedCrypto::whereUserId(\auth()->id())->latest()->paginate(4);
        $user = Auth::user();
        return view('dashboard.index', compact('user', 'stocks','crypto'));
    }
}
