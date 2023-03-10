<?php

namespace App\Http\Controllers\Admin;

use App\Deposit;
use App\Http\Controllers\Controller;
use App\Mail\ApproveDeposit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdminDeposits extends Controller
{
    //
    public function deposits()
    {
        $deposits = Deposit::all();
        return view('admin.transactions.deposits', compact('deposits'));
    }

    public function approveDeposit($id)
    {
        $deposit = Deposit::findOrFail($id);
        $deposit->status = 1;
        $deposit->save();
        Mail::to($deposit->user->email)->send(new ApproveDeposit($deposit));
        return redirect()->back();
    }

    public function deleteDeposit($id)
    {
        $deposit = Deposit::findOrFail($id);
        $deposit->delete();
        return redirect()->back();
    }
}
