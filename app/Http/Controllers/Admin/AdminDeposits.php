<?php

namespace App\Http\Controllers\Admin;

use App\Deposit;
use App\Funding;
use App\Http\Controllers\Controller;
use App\Mail\ApproveDeposit;
use App\Mail\FundingMail;
use App\User;
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
        $user = User::findOrFail($deposit->user_id);
        $user->balance += $deposit->amount;
        $user->save();
        Mail::to($deposit->user->email)->send(new ApproveDeposit($deposit));
        return redirect()->back();
    }

    public function deleteDeposit($id)
    {
        $deposit = Deposit::findOrFail($id);
        $deposit->delete();
        return redirect()->back();
    }

    public function fundingHistory()
    {
        $funding = Funding::all();
        return view('admin.transactions.fundings', compact('funding'));
    }

    public function fund()
    {
        $users = User::all();
        return view('admin.user.fund', compact('users'));
    }
    public function sendFund(Request $request)
    {
        $data = $this->getData($request);
        $data['user_id'] = $request->user_id;
        $data['status'] = 1;
        $data = Funding::create($data);
        if ($data['type'] == 'Referral-Bonus'){
            $user = User::findOrFail($data->user_id);
            $user->ref_bonus += $request->amount;
            $user->balance += $request->amount;
            $user->save();
        }
        $user = User::findOrFail($data->user_id);
        $user->balance += $request->amount;
        $user->save();
        Mail::to($data->user->email)->send(new FundingMail($data));
        return redirect()->back()->with('success', "Fund sent successfully");
    }

    protected function getData(Request $request)
    {
        $rules = [
            'type' => 'required',
            'amount' => 'required',
        ];
        return $request->validate($rules);
    }

    public function deleteFunding($id)
    {
        $funding = Funding::findOrFail($id);
        $funding->delete();
        return redirect()->back();
    }

}
