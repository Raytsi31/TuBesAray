@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Data
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
      <form method="post" action="{{ route('bahanpokoks.store') }}">
          <div class="form-group">
              @csrf
              <label for="nama">Nama:</label>
              <input type="text" class="form-control" name="nama"/>
          </div>
          <div class="form-group">
              <label for="sumber">Sumber Bahan pokok :</label>
              <input type="text" class="form-control" name="sumber"/>
          </div>
          <div class="form-group">
              <label for="stok">Jumlah:</label>
              <input type="text" class="form-control" name="stok"/>
          </div>
          <div class="form-group">
              <label for="harga">harga:</label>
              <input type="text" class="form-control" name="harga"/>
          </div>
          <button type="submit" class="btn btn-primary">Add Data</button>
      </form>
  </div>
</div>
@endsection