<?php

namespace App\Http\Controllers\Admin;

use App\Deposit;
use App\Http\Controllers\Controller;
use App\PaymentMethod;
use App\Stock;
use App\User;
use App\Withdrawal;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $users = User::where('admin', 0)->count();
        $deposits = Deposit::where('status', 1)->select('amount')->sum('amount');
        $with = Withdrawal::where('status', 1)->select('amount')->sum('amount');
        $stocks = Stock::count();
        return view('admin.index', compact('users', 'deposits', 'with', 'stocks'));
    }

    public function setting()
    {
        return view('admin.site-setting');
    }

    public function addDeposit()
    {
        $users = User::all();
        $payment_m = PaymentMethod::all();
        return view('admin.user.add-deposit', compact('users', 'payment_m'));
    }

    public function adminProDeposit(Request $request)
    {
        $deposit = new Deposit();
        $deposit->amount = $request->amount;
        $deposit->user_id = $request->user_id;
        $deposit->payment_method_id = $request->payment_method_id;
        $deposit->save();
        return redirect()->back()->with('success', "Deposited Successfully");
    }
}
