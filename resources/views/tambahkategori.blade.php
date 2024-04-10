@extends('template')
@section('header')
Tambah Post
@endsection
@section('body')
<form action="{{route('kategori.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card-body"> 
      <div class="form-group">
        <label for="exampleInputEmail1">Nama Kategori</label>
        <input type="text" class="form-control" name="namakatageri">
      </div>
      
      <div class="form-group">
        <label for="exampleInputPassword1">Diskon Produk</label>
        <input type="number" class="form-control" name="desckatagori">
      </div>
      
      <div class="form-group">
        <label for="exampleInputPassword1">Nama Produk</label>
          <select class="custom-select form-control" name="produk_id">
            @foreach ($data as $item)
            <option value="{{$item->id}}">{{$item->namaproduk}}</option>
            @endforeach
          </select>
      </div>
    </div>
    
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
@endsection