<?php

namespace App\Http\Controllers\Admin;

use App\Crypto;
use App\Http\Controllers\Controller;
use App\Stock;
use Illuminate\Http\Request;

class AdminStock extends Controller
{

    public function index()
    {
        $stocks = Stock::latest()->get();
        return view('admin.stocks.list', compact('stocks'));
    }

    public function create()
    {
        return view('admin.stocks.create');
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

            $stock = new Stock();
            $stock->name = $request->name;
            $stock->description = $request->description;
            $stock->logo = $input['imagename'];
            $stock->save();
            return redirect()->route('admin.stocks.index');
        }
        $stock = new Stock();
        $stock->name = $request->name;
        $stock->description = $request->description;
        $stock->save();
        return redirect()->route('admin.stocks.index');
    }

    public function edit($id)
    {
        $stock = Stock::findOrFail($id);
        return view('admin.stocks.edit', compact('stock'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
        ]);
        $stock = Stock::findOrFail($id);
        if ($request->hasFile('logo')){
            $image = $request->file('logo');
            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/files');
            $image->move($destinationPath, $input['imagename']);

            $stock->update(['name' => $request->name, 'description' => $request, 'logo' => $input['imagename']]);
            return redirect()->route('admin.stocks.index');
        }
        $stock->update(['name' => $request->name, 'description' => $request]);
        return redirect()->route('admin.stocks.index');

    }

    public function destroy($id)
    {
        $package = Stock::findOrFail($id);
        $package->delete();
        return redirect()->back();
    }

    protected function getData(Request $request)
    {
        $rules = [
            'name' => 'required',
            'description' => 'nullable',
        ];
        return $request->validate($rules);
    }

}
