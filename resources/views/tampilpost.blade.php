@extends('template')
@section('header')
<h1>Kategori</h1>
@endsection
@section('body')
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Judul</th>
        <th scope="col">Isi</th>
        <th scope="col">Tanggal Dibuat</th>
        <th scope="col">Action</th>
      </tr>
    </thead>    
    <tbody>
        @foreach ($data as $item)
      <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$item->judul}}</td>
        <td>{{$item->isi}}</td>
        <td>{{$item->tanggaldibuat}}</td>
        <td class="no-wrap-text"> 
          <div class="btn-group" role="group" aria-label="Basic example">
              <a href="{{route('post.edit',$item->id)}}" class="btn btn-warning">Edit</a>&nbsp&nbsp
              <form action="{{route('post.destroy',$item->id)}}" method="POST">
                  @csrf
                  @method('delete')
                  <button type="submit" class="btn btn-danger">Hapus</button>
              </form>
          </div>
      </tr> 
      @endforeach     
    </tbody>
  </table>
@endsection
