@extends('layouts.app')

@section('content')

<div class="jumbotron">
  <h3> Apakah Anda Yakin Menghapus Lomba "{{$lomba->nama}}"?</h3>

  <p class="lead">
    <a class="btn btn-danger btn-lg" href="/lomba/{{$lomba->id}}/confirmdelete" role="button">YA</a>
    <a class="btn btn-primary btn-lg" href="#" role="button">TIDAK</a>
  </p>
</div>

@endsection