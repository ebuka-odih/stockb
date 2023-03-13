<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\PurchasedStock;
use Illuminate\Http\Request;

class AdminPurchasedStock extends Controller
{
    public function purchasedStocks()
    {
        $p_stocks = PurchasedStock::all();
        return view('admin.transactions.purchased-stocks', compact('p_stocks'));
    }

    public function deletePurchasedStock($id)
    {
        $p_stock = PurchasedStock::findOrFail($id);
        $p_stock->delete();
        return redirect()->back();
    }

}
