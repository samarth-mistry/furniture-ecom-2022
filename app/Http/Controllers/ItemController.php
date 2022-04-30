<?php

namespace App\Http\Controllers;

use DataTables;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function data(){
        $items = Item::all();
        return DataTables::of($items)
            ->addColumn('actions', function ($item) {
                return view('admins.items.action', ['item' => $item]);
            })
            ->rawColumns(['actions'])
            ->make(true);
    }

    public function index()
    {
        return view('admins.items.index');
    }

    public function create()
    {
        return view('admins.items.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'details' => 'required',
            'price' => 'required',
            'type_id' =>'required'
        ]);

        $continent = new Item();
        if ($logo = $request->file('logo_image')) {
            $logo_name = $request->file('logo_image')->getClientOriginalName();

            $target_path = public_path('/dist/img/fur/');

            if ($logo->move($target_path, $logo_name)) {
                $continent->img = $logo_name;
            }
        }
        $continent->name = $request->name;
        $continent->type_id = $request->type_id;
        $continent->details = $request->details;
        $continent->price = $request->price;
        $continent->remarks = $request->remarks;
        $continent->save();

        return redirect()->route('item.index')->with('message', 'Item created successfully!');
    }

    public function show(Item $item)
    {
        //
    }

    public function edit($id)
    {
        $item = Item::find($id);
        return view('admins.items.edit',compact('item'));
        
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'details' => 'required',
            'price' => 'required',
            'type_id' =>'required'
        ]);

        $continent = Item::find($id);
        if ($logo = $request->file('logo_image')) {
            $logo_name = $request->file('logo_image')->getClientOriginalName();

            $target_path = public_path('/dist/img/fur/');

            if ($logo->move($target_path, $logo_name)) {
                $continent->img = $logo_name;
            }
        }
        $continent->name = $request->name;
        $continent->type_id = $request->type_id;
        $continent->details = $request->details;
        $continent->price = $request->price;
        $continent->remarks = $request->remarks;
        $continent->save();

        return redirect()->route('item.index')->with('message', 'Item updated successfully!');
    }

    public function destroy(Item $item)
    {
        //
    }
}
