<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\produk;
use Illuminate\Http\Request;

class postcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=post::all();
        return view('tampilpost',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        produk::all();
        return view('tambahpost',compact('produk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valid=$request->validate([
            'judul'=>'required|string',
            'isi'=>'required|string',
            'tanggaldibuat'=>'required|date',
        ]);
        post::create($valid);
        return view('post');
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
        produk::all();
        return view('editkategori',compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $valid=$request->validate([
            'judul'=>'required|string',
            'isi'=>'required|string',
            'tanggaldibuat'=>'required|date',
        ]);
        post::find($id)->update($valid);
        return view('post');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        post::find($id)->delete($id);
        return view('post');
    }
}
