<?php

namespace App\Http\Controllers;

use App\Deposit;
use App\PurchasedCrypto;
use App\PurchasedStock;
use App\Stock;
use App\Withdrawal;
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

    public function myAccount()
    {
        $user = Auth::user();
        $deposit = Deposit::whereUserId('status', 1)->select('amount')->sum('amount');
        $withdrawal = Withdrawal::whereUserId('status', 1)->select('amount')->sum('amount');
        $stock = PurchasedStock::whereUserId(\auth()->id())->select('amount')->sum('amount');
        $crypto = PurchasedCrypto::whereUserId(\auth()->id())->select('amount')->sum('amount');

        $stock_count = PurchasedStock::whereUserId(\auth()->id())->count();
        $crypto_count = PurchasedCrypto::whereUserId(\auth()->id())->count();
        return view('dashboard.user.account', compact('user', 'deposit', 'withdrawal', 'stock', 'crypto', 'stock_count', 'crypto_count'));
    }
}
