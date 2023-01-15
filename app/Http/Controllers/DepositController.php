<?php

namespace App\Http\Controllers;

use App\Deposit;
use App\Mail\BankDeposit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class DepositController extends Controller
{
    public function deposit()
    {
        return view('dashboard.deposit.deposit');
    }

    public function process(Request $request)
    {
        $request->validate([
            'amount' => 'required'
        ]);
        if ($request->amount < 100){
            return redirect()->back()->with('declined', "Entered Amount is Less Than $100.00");
        }
        $deposit = new Deposit();
        $deposit->amount = $request->amount;
        $deposit->user_id = Auth::id();
        $deposit->save();
        if ($request->deposit_method == 'Bank-Transfer'){
            Mail::to(auth()->user()->email)->send(new BankDeposit($deposit));
            return redirect()->route('user.bankTransfer');
        }
        return redirect()->route('user.crypto', $deposit->id);
    }

    public function bankTransfer($id)
    {
        $deposit = Deposit::findOrFail($id);
        return view('dashboard.deposit.bank-info', compact('deposit'));
    }

    public function crypto($id)
    {
        $deposit = Deposit::findOrFail($id);
        return view('dashboard.deposit.crypto', compact('deposit'));
    }




}
