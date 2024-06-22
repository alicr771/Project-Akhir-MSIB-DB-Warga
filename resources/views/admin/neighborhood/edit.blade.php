@extends('layouts.app')

@section('title', 'Edit Penduduk RT')

@section('content')
  <div class="bg-body-tertiary col-md-6 container mx-0 rounded p-4 shadow">
    <form action="">
      <div class="mb-3">
        <input class="form-control" placeholder="Kepala keluarga" type="text" value="{{ $neighborhood->head }}">
      </div>
      <div class="mb-3">
        <input class="form-control" placeholder="Nama" type="text" value="{{ $neighborhood->name }}">
      </div>
      <div class="d-flex gap-3">
        <a class="btn btn-secondary flex-grow-1" href="{{ route('neighborhood.index') }}">Kembali</a>
        <button class="btn btn-dark flex-grow-1" type="submit">Edit penduduk RT</button>
      </div>
    </form>
  </div>
@endsection
