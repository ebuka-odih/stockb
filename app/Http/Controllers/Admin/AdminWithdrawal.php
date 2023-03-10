<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Withdraw;
use Illuminate\Http\Request;

class AdminWithdrawal extends Controller
{
    public function withdrawals()
    {
        $withdrawal = Withdraw::all();
        return view('admin.transactions.withdrawals', compact('withdrawal'));
    }
}
