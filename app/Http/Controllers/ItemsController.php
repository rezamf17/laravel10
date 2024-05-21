<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::all();
        return view('items.List', compact('items'));;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('items.AddList');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // print_r($request->all());exit();
        $request->validate([
            'item_name' => 'required',
            'quantity' => 'required|numeric',
            'items_type' => 'required',
            'item_description' => 'required',
        ]);
        Item::create($request->all());
        return redirect()->route('items.index')->with('success', 'Item created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
