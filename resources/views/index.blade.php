@extends('layout')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>  
<nav class="navbar navbar-expand-lg navbar-white bg-dark">
  <a class="navbar-brand" href="#">Pendataan Bahan Pokok</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('home')}}">Home <span class="sr-only">(current)</span></a>
      </li>

    </ul>
  </div>
</nav>

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
            <td>Rp. {{$bahanpokok->harga}}</td>
            <td><a href="{{ route('bahanpokoks.edit',$bahanpokok->id)}}" class="btn btn-info">Edit</a>
          </td>
            <td>
                <form action="{{ route('bahanpokoks.destroy', $bahanpokok->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-warning" type="submit">Delete</button>
                </form>
                </td>
        </tr>
        @endforeach