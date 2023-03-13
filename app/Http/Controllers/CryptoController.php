<?php

namespace App\Http\Controllers;

use App\Crypto;
use App\PurchasedCrypto;
use App\PurchasedStock;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CryptoController extends Controller
{
    public function crypto()
    {
        $crypto = Crypto::all();
        return view('dashboard.crypto.crypto', compact('crypto'));
    }

    public function invest($id)
    {
        $crypto = Crypto::findOrFail($id);
        return view('dashboard.crypto.invest', compact('crypto'));
    }

    public function investCrypto(Request $request)
    {
        if ($request->amount > \auth()->user()->balance || $request->amount < 100){
            return redirect()->back()->with('failed', 'Insufficient Balance');
        }
        $id = $request->crypto_id;
        $invest = new PurchasedCrypto();
        $invest->amount = $request->amount;
        $invest->user_id = Auth::id();
        $invest->crypto_id = $id;
        $invest->status = 1;
        $invest->save();
        $user = User::findOrFail($invest->user_id);
        $user->balance -= $request->amount;
        $user->investment_acct += $request->amount;
        $user->save();
        return redirect()->route('user.crypto.success', $invest->id);
    }

    public function success($id)
    {
        $crypto = PurchasedCrypto::findOrFail($id);
        return view('dashboard.crypto.success', compact('crypto'));
    }

}
