<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;

class produkcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data= produk::all();        
        return view('tampilproduk',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tambahproduk');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valid= $request->validate([
            'namaproduk'=>'required|string',
            'foto'=>'required|string',
            'harga'=>'required|integer',
            'descproduk'=>'required|integer',
        ]);
        produk::create($valid);
        return redirect('produk');
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
        return view('editkategori');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $valid= $request->validate([
            'namaproduk'=>'required|string',
            'foto'=>'required|string',
            'harga'=>'required|integer',
            'descproduk'=>'required|integer',
        ]);
        produk::find($id)->update($valid);
        return redirect('produk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        produk::find($id)->delete($id);
        return redirect('produk');
    }
}
