@extends('layouts.app')

@section('title', 'Tambah RW')

@section('content')
  <div class="bg-body-tertiary col-md-6 container mx-0 rounded p-4 shadow">
    <form action="{{ route('community-unit.store') }}" method="POST">
      @csrf
      <div class="mb-3">
        <input class="form-control" name="head" placeholder="Kepala Keluarga" type="text" required>
      </div>
      <div class="mb-3">
        <input class="form-control" name="name" placeholder="Nama" type="text" required>
      </div>
      <div class="d-flex gap-3">
        <a class="btn btn-secondary flex-grow-1" href="{{ route('community-unit.index') }}">Kembali</a>
        <button class="btn btn-dark flex-grow-1" type="submit">Submit</button>
      </div>
    </form>
  </div>
@endsection
