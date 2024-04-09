@extends('template')
@section('header')
Tambah Post
@endsection
@section('body')
<form action="{{route('post.update',$data->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Judul</label>
        <input type="text" class="form-control" name="judul" value="{{$data->judul}}">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">isi</label>
        <textarea class="form-control" rows="3" name="isi" value="">{{$data->judul}}</textarea>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">tanggal dibuat</label>
        <input type="date" class="form-control" name="tanggaldibuat" value="{{$data->tanggaldibuat}}">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Nama Produk</label>
        <input type="text" class="form-control" name="produk_id" value="{{$data->produk_id}}">
      </div>
    
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
@endsection