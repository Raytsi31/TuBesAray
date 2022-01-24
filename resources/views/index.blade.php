@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
  <form action="{{ route('bahanpokoks.create')}}" >
                  <button class="btn btn-danger" type="submit">Add Data</button>
                </form>
    <thead>
        <tr>
          <td>ID</td>
          <td>Nama Bahan Pokok</td>
          <td>Sumber</td>
          <td>Jumlah</td>
          <td>Harga</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($bahanpokoks as $bahanpokok)
        <tr>
            <td>{{$bahanpokok->id}}</td>
            <td>{{$bahanpokok->nama}}</td>
            <td>{{$bahanpokok->sumber}}</td>
            <td>{{$bahanpokok->stok}}</td>
            <td>{{$bahanpokok->harga}}</td>
            <td><a href="{{ route('bahanpokoks.edit',$bahanpokok->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('bahanpokoks.destroy', $bahanpokok->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach