<?php

namespace App\Http\Controllers;

use App\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{

    public function stocks()
    {
        $stocks = Stock::all();
        return view('dashboard.stocks.stocks', compact('stocks'));
    }
}
