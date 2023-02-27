<?php

namespace App\Http\Controllers;

use App\Deposit;
use App\PurchasedCrypto;
use App\PurchasedStock;
use App\Stock;
use App\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboard()
    {
        $stocks = PurchasedStock::whereUserId(\auth()->id())->latest()->paginate(4);
        $crypto = PurchasedCrypto::whereUserId(\auth()->id())->latest()->paginate(4);
        $user = Auth::user();
        return view('dashboard.index', compact('user', 'stocks','crypto'));
    }

    public function myAccount()
    {
        $user = Auth::user();
        $deposit = Deposit::whereUserId(\auth()->id())->where('status', 1)->select('amount')->sum('amount');
        $withdrawal = Withdrawal::whereUserId(\auth()->id())->where('status', 1)->select('amount')->sum('amount');
        $stock = PurchasedStock::whereUserId(\auth()->id())->select('amount')->sum('amount');
        $crypto = PurchasedCrypto::whereUserId(\auth()->id())->select('amount')->sum('amount');

        $stock_count = PurchasedStock::whereUserId(\auth()->id())->count();
        $crypto_count = PurchasedCrypto::whereUserId(\auth()->id())->count();
        return view('dashboard.user.account', compact('user', 'deposit', 'withdrawal', 'stock', 'crypto', 'stock_count', 'crypto_count'));
    }

    public function profile()
    {
        $user = Auth::user();
        return view('dashboard.user.profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {

        $user = Auth::user();
        $data = $this->getData($request);
        $user->update($data);

        return redirect()->back()->with('success', "Profile Data Updated Successfully");
    }

    protected function getData(Request $request)
    {
        $rules = [
            'name' => 'nullable',
            'phone' => 'nullable',
            'address' => 'nullable',
            'date_of_birth' => 'nullable',
            'telegram' => 'nullable',
            'city' => 'nullable',
            'state' => 'nullable',
            'country' => 'nullable',
        ];
        return $request->validate($rules);
    }

    public function security()
    {
        return view('dashboard.user.security');
    }
}
