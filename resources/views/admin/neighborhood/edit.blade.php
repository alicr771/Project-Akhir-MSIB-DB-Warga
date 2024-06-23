@extends('layouts.app')

@section('title', 'Edit Penduduk RT')

@section('content')
  <div class="bg-body-tertiary col-md-6 container mx-0 rounded p-4 shadow">
    <form action="{{ route('neighborhood.update', $neighborhood->id) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <input class="form-control" placeholder="Kepala keluarga" type="text" name="head" value="{{ old('head', $neighborhood->head) }}">
        @error('head')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <input class="form-control" placeholder="Nama" type="text" name="name" value="{{ old('name', $neighborhood->name) }}">
        @error('name')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="d-flex gap-3">
        <a class="btn btn-secondary flex-grow-1" href="{{ route('neighborhood.index') }}">Kembali</a>
        <button class="btn btn-dark flex-grow-1" type="submit">Edit penduduk RT</button>
      </div>
    </form>
  </div>
@endsection
