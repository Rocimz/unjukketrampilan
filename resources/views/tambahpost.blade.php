@extends('template')
@section('header')
Tambah Post
@endsection
@section('body')
<form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Judul</label>
        <input type="text" class="form-control" name="judul">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Isi</label>
        <textarea class="form-control" rows="3" placeholder="Enter ..." name="isi"></textarea>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Tanggal Dibuat</label>
        <input type="date" class="form-control" name="tanggaldibuat">
      </div>
      <div class="form-group">
        <label for="foto">Nama produk</label>
        <div class="form-control">
            <select class="custom-select form-control-border" name="produk_id">
            @foreach ($data as $item )
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