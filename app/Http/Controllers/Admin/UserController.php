<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function users()
    {
        $users = User::where('admin',0)->latest()->paginate(10);
        return view('admin.user.list', compact('users'));
    }

    public function viewUser($id)
    {
        $user = User::findOrFail($id);
        $total_invest = InvestStock::whereUserId($id)->where('status', 1)->sum('amount');
        return view('admin.user.personal', compact('user', 'total_invest'));
    }

    public function verifyUser($id)
    {
        $user = User::findOrFail($id);
        $user->email_verified_at = Carbon::now();
        $user->save();
        return redirect()->back()->with('success', "User Verified Successfully");
    }

    public function userWithdrawMethod($id)
    {
        $user = User::findOrFail($id);
        $user_withdraw_method = User::with('withdrawal')->findOrFail($id);
        return view('admin.user.user-withdraw-method', compact('user_withdraw_method', 'user'));
    }
    public function userWithdrawMethodDetails($id)
    {
        $user_withdraw_method = WithdrawMethod::findOrFail($id);
        $user = User::findOrFail($user_withdraw_method->user_id);
        return view('admin.user.user-withdraw-details', compact('user_withdraw_method', 'user'));
    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back();
    }


    public function wallet()
    {
        return view('admin.user.wallet');
    }


}
