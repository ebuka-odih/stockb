<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\PurchasedCrypto;
use Illuminate\Http\Request;

class AdminPurchasedCrypto extends Controller
{
    public function purchasedCrypto()
    {
        $p_crypto = PurchasedCrypto::all();
        return view('admin.transactions.purchased-crypto', compact('p_crypto'));
    }

    public function deletePurchasedCrypto($id)
    {
        $p_crypto = PurchasedCrypto::findOrFail($id);
        $p_crypto->delete();
        return redirect()->back();
    }
}
