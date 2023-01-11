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

            $news = new Stock();
            $news->name = $request->name;
            $news->description = $request->description;
            $news->logo = $input['imagename'];
            $news->save();
            return redirect()->route('admin.stocks.index');
        }
        $news = new Stock();
        $news->name = $request->name;
        $news->description = $request->description;
        $news->save();
        return redirect()->route('admin.stocks.index');
    }

    public function edit($id)
    {
        $stock = Stock::findOrFail($id);
        return view('admin.stocks.edit-stock', compact('stock'));
    }

    public function update(Request $request, $id)
    {
        $stock = Stock::findOrFail($id);
        $data = $this->getData($request);
        $stock->update($data);
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
