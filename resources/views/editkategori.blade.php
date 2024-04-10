@extends('template')
@section('header')
Tambah Post
@endsection
@section('body')
<form action="{{route('kategori.update',$data->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Nama kategori</label>
        <input type="text" class="form-control" name="namakatageri" value="{{$data->namakatageri}}">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Diskon Kategori</label>
        <input type="number" class="form-control" name="desckatagori" value="{{$data->desckatagori}}">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Nama Produk</label>
          <select class="custom-select form-control" name="produk_id">
            @foreach ($produk as $item)
            <option value="{{$item->id}}" @selected($data->produk_id==$item->id)>{{$item->namaproduk}}</option>
            @endforeach
          </select>
      </div>
    
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
@endsection