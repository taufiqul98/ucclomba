@extends('layouts.app')

@section('css')

@endsection

@section('content')

<form action="/lomba/{{$lomba->id}}/edit" method="post">
        {{csrf_field()}}
  <div class="form-group">
    <label for="nama">Nama</label>
    <input name="nama" type="text" class="form-control" id="nama"  placeholder="Masukkan Nama Lomba" value="{{$lomba->nama}}" required>

    </div>
  <div class="form-group">
    <label for="deskripsi">Deskripsi</label>
    <input name="deskripsi" type="text" class="form-control" id="deskripsi"  placeholder="Masukkan Deskripsi" value="{{$lomba->deskripsi}}" reuired>
    </div>

    <div class="form-group">
    <label for="poster">Url Poster</label>
    <input name="poster" type="text" class="form-control" id="poster"  placeholder="Masukkan Poster" value="{{$lomba-> poster}}" required>

    <div class="form-group">
    <label for="tanggal">Tanggal Penutupan Lomba</label>
    <input name="tanggal" type="date" class="form-control" id="tanggal"  placeholder="Masukkan Tanggal Penutupan" value="{{$lomba->tanggal_tutup}}"required>

  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection

@section('js')

@endsection