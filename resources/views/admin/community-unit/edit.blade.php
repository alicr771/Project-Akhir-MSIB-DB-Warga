@extends('layouts.app')

@section('title', 'Edit Penduduk RW')

@section('content')
  <div class="bg-body-tertiary col-md-6 container mx-0 rounded p-4 shadow">
    <form action="{{ route('community-unit.update', $communityUnit->id) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <input class="form-control" placeholder="Kepala RW" type="text" name="head" value="{{ $communityUnit->head }}">
      </div>
      <div class="mb-3">
        <input class="form-control" placeholder="Nama RT" type="text" name="name" value="{{ $communityUnit->name }}">
      </div>
      <div class="d-flex gap-3">
        <a class="btn btn-secondary flex-grow-1" href="{{ route('community-unit.index') }}">Kembali</a>
        <button class="btn btn-dark flex-grow-1" type="submit">Simpan perubahan</button>
      </div>
    </form>
  </div>
@endsection
