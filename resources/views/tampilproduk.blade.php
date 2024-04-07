@extends('template')
@section('header')
<h1>Kategori</h1>
@endsection
@section('body')
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Produk</th>
        <th scope="col">Foto</th>
        <th scope="col">Harga</th>
        <th scope="col">Diskon Produk</th>
        <th scope="col">Action</th>
      </tr>
    </thead>    
    <tbody>
        @foreach ($data as $item)
      <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$item->namaproduk}}</td>
        <td>{{$item->foto}}</td>
        <td>{{$item->harga}}</td>
        <td>{{$item->descproduk}}</td>
        <td>ss</td>
      </tr> 
      @endforeach     
    </tbody>
  </table>
@endsection
