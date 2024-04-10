<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Models\produk;
use Illuminate\Http\Request;

class kategoricontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data= kategori::all();        
        return view('tampilkategori',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data=produk::all();
        return view('tambahkategori',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valid=$request->validate([
            'namakatageri'=>'required|string',
            'desckatagori'=>'required|integer',
            'produk_id'=>'required|integer',
        ]);
        kategori::create($valid);
        return redirect('kategori');
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
        $produk=produk::all();
        $data=kategori::find($id);
        return view('editkategori',compact('produk','data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $valid=$request->validate([
            'namakatageri'=>'required|string',
            'desckatagori'=>'required|string',
            'produk_id'=>'required|integer',
        ]);
        kategori::find($id)->update($valid);
        return redirect('kategori');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        kategori::find($id)->delete($id);
        return redirect('kategori');
    }
}
