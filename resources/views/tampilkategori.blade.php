@extends('template')
@section('header')
<h1>Kategori</h1>
@endsection
@section('body')
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Kategori</th>
        <th scope="col">Diskon Kategori</th>
        <th scope="col">Nama Produk</th>
        <th scope="col">Action</th>
      </tr>
    </thead>    
    <tbody>
        @foreach ($data as $item)
      <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$item->namakatageri}}</td>
        <td>{{$item->desckatagori}}</td>
        <td>ss</td>
        <td>as</td>
      </tr> 
      @endforeach     
    </tbody>
  </table>
@endsection
