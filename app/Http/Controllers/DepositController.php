<?php

namespace App\Http\Controllers;

use App\Deposit;
use App\Mail\AdminDepositAlert;
use App\Mail\BankDeposit;
use App\PaymentMethod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class DepositController extends Controller
{
    public function deposit()
    {
        $payment_m = PaymentMethod::all();
        return view('dashboard.deposit.deposit', compact('payment_m'));
    }

    public function processCrypto(Request $request)
    {
        $request->validate([
            'amount' => 'required'
        ]);
        if ($request->amount < 100){
            return redirect()->back()->with('declined', "Entered Amount is Less Than $100.00");
        }
        $deposit = new Deposit();
        $deposit->amount = $request->amount;
        $deposit->payment_method_id = $request->payment_method_id;
        $deposit->user_id = Auth::id();
        $deposit->save();

        return redirect()->route('user.crypto', $deposit->id);

    }

    public function bankTransfer($id)
    {
        $deposit = Deposit::findOrFail($id);
        return view('dashboard.deposit.bank-info', compact('deposit'));
    }
    public function processBank(Request $request)
    {
        $request->validate([
            'amount' => 'required'
        ]);
        if ($request->amount < 100){
            return redirect()->back()->with('declined', "Entered Amount is Less Than $100.00");
        }
        $deposit = new Deposit();
        $deposit->amount = $request->amount;
        $deposit->payment_method_id = $request->payment_method_id;
        $deposit->user_id = Auth::id();
        $deposit->save();
        Mail::to(auth()->user()->email)->send(new BankDeposit($deposit));
        return redirect()->route('user.bankTransfer', $deposit->id);
    }

    public function crypto($id)
    {
        $deposit = Deposit::findOrFail($id);
        return view('dashboard.deposit.crypto', compact('deposit'));
    }
    public function processPayment(Request $request)
    {
        $request->validate([
                'reference' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:7048',
            ]
        );
        if ($request->hasFile('reference')){
            $image = $request->file('reference');
            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/proof');
            $image->move($destinationPath, $input['imagename']);

            $id = $request->deposit_id;
            $deposit = Deposit::findOrFail($id);
            $deposit->update(['reference' => $input['imagename'] ]);
            Mail::to('admin@whalescorp.io')->send(new AdminDepositAlert($deposit));
            return redirect()->back()->with('success', "Transaction Sent, Awaiting Approval ");
        }
        return redirect()->back()->with('declined', "Please Upload Your Payment Screenshot ");

    }




}
