@extends('layouts.app')

@section('title', 'Tambah RT')

@section('content')
  <div class="bg-body-tertiary col-md-6 container mx-0 rounded p-4 shadow">
    <form  action="{{ route('neighborhood.store') }}" method="POST">
      @csrf
      <div class="mb-3">
        <input type="text" class="form-control" id="head" name="head" placeholder="Kepala RT" required>
                @error('head')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
      </div>
      <div class="mb-3">
        <input type="text" class="form-control" id="name" name="name" placeholder="Nama RT" required>
                @error('name')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
      </div>
      <div class="d-flex gap-3">
        <a class="btn btn-secondary flex-grow-1" href="{{ route('neighborhood.index') }}">Kembali</a>
        <button class="btn btn-dark flex-grow-1" type="submit">Submit</button>
      </div>
    </form>
  </div>
@endsection
