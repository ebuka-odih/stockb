<?php

namespace App\Http\Controllers\Admin;

use App\Crypto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminCrypto extends Controller
{
    public function index()
    {
        $crypto = Crypto::latest()->get();
        return view('admin.crypto.list', compact('crypto'));
    }

    public function create()
    {
        return view('admin.crypto.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
        ]);
        if ($request->hasFile('logo')){
            $image = $request->file('logo');
            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/files');
            $image->move($destinationPath, $input['imagename']);

            $stock = new Crypto();
            $stock->name = $request->name;
            $stock->description = $request->description;
            $stock->logo = $input['imagename'];
            $stock->save();
            return redirect()->route('admin.crypto.index');
        }
        $stock = new Crypto();
        $stock->name = $request->name;
        $stock->description = $request->description;
        $stock->save();
        return redirect()->route('admin.crypto.index');
    }

    public function edit($id)
    {
        $crypto = Crypto::findOrFail($id);
        return view('admin.crypto.edit', compact('crypto'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
        ]);
        $stock = Crypto::findOrFail($id);
        if ($request->hasFile('logo')){
            $image = $request->file('logo');
            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/files');
            $image->move($destinationPath, $input['imagename']);

            $stock->update(['name' => $request->name, 'description' => $request, 'logo' => $input['imagename']]);
            return redirect()->route('admin.stocks.index');
        }
        $stock->update(['name' => $request->name, 'description' => $request]);
        return redirect()->route('admin.crypto.index');

    }

    public function destroy($id)
    {
        $package = Crypto::findOrFail($id);
        $package->delete();
        return redirect()->back();
    }


}
