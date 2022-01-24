<?php

namespace App\Http\Controllers;

use App\BahanPokok;
use Illuminate\Http\Request;

class BahanPokokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bahanpokoks = BahanPokok::all();

     return view('index', compact('bahanpokoks'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'sumber' => 'required|alpha_num',
            'stok' => 'required|numeric',
            'harga' => 'required|numeric',
        ]);
        $bahanpokoks = BahanPokok::create($validatedData);
   
        return redirect('/bahanpokoks')->with('success', 'Bahan Pokok is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bahanpokoks = BahanPokok::findOrFail($id);

    return view('edit', compact('bahanpokoks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'sumber' => 'required|alpha_num',
            'stok   ' => 'required|numeric',
            'harga' => 'required|numeric',
        ]);
        BahanPokok::whereId($id)->update($validatedData);

        return redirect('/bahanpokoks')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bahanpokoks = BahanPokok::findOrFail($id);
        $bahanpokoks->delete();

        return redirect('/bahanpokoks')->with('success', 'Data is successfully deleted');
    }
}
