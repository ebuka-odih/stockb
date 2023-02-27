<?php

namespace App\Http\Controllers;

use App\PurchasedStock;
use App\Stock;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StockController extends Controller
{

    public function stocks()
    {
        $stocks = Stock::all();
        return view('dashboard.stocks.stocks', compact('stocks'));
    }

    public function invest($id)
    {
        $stock = Stock::findOrFail($id);
        return view('dashboard.stocks.invest', compact('stock'));
    }

    public function investStock(Request $request)
    {
        if ($request->amount > \auth()->user()->balance || $request->amount < 100){
            return redirect()->back()->with('failed', 'Insufficient Balance');
        }
        $id = $request->stock_id;
        $invest = new PurchasedStock();
        $invest->amount = $request->amount;
        $invest->user_id = Auth::id();
        $invest->stock_id = $id;
        $invest->status = 1;
        $invest->save();
        $user = User::findOrFail($invest->user_id);
        $user->balance -= $request->amount;
        $user->investment_acct += $request->amount;
        $user->save();
        return redirect()->route('user.success', $invest->id);
    }

    public function success($id)
    {
        $stock = PurchasedStock::findOrFail($id);
        return view('dashboard.stocks.success', compact('stock'));
    }

}
