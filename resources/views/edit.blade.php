@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Data
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('bahanpokoks.update', $bahanpokoks->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="nama">Name:</label>
              <input type="text" class="form-control" name="nama" value="{{$bahanpokoks->nama}}"/>
          </div>
          <div class="form-group">
              <label for="sumber">Sumber Bahan pokok :</label>
              <input type="text" class="form-control" name="sumber" value="{{$bahanpokoks->sumber}}"/>
          </div>
          <div class="form-group">
              <label for="stok">Stok:</label>
              <input type="text" class="form-control" name="stok" value="{{$bahanpokoks->stok}}"/>
          </div>
          <div class="form-group">
              <label for="harga">Harga :</label>
              <input type="text" class="form-control" name="harga" value="{{$bahanpokoks->harga}}"/>
          </div>
          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
  </div>
</div>
@endsection