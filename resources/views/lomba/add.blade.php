@extends('layouts.app')

@section('css')

@endsection

@section('content')

<form action="/lomba" method="post">
        {{csrf_field()}}
  <div class="form-group">
    <label for="nama">Nama</label>
    <input name="nama" type="text" class="form-control" id="nama"  placeholder="Masukkan Nama Lomba" required>

    </div>
  <div class="form-group">
    <label for="deskripsi">Deskripsi</label>
    <input name="deskripsi" type="text" class="form-control" id="deskripsi"  placeholder="Masukkan Deskripsi" reuired>
    </div>

    <div class="form-group">
    <label for="poster">Url Poster</label>
    <input name="poster" type="text" class="form-control" id="deskripsi"  placeholder="Masukkan Poster" required>

    <div class="form-group">
    <label for="tanggal">Tanggal Penutupan Lomba</label>
    <input name="tanggal" type="date" class="form-control" id="tanggal"  placeholder="Masukkan Tanggal Penutupan" required>

  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection

@section('js')

@endsection