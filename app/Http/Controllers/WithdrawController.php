<?php

namespace App\Http\Controllers;

use App\WithdrawMethod;
use Illuminate\Http\Request;

class WithdrawController extends Controller
{
    //
    public function withdraw()
    {
        $wallet = WithdrawMethod::whereUserId(auth()->id())->get();
        return view('dashboard.withdraw.withdraw', compact('wallet'));
    }
}
