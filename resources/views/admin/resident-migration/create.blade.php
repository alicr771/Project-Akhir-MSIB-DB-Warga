@extends('layouts.app')

@section('title', 'Tambah Penduduk')

@section('content')
  <div class="bg-body-tertiary col-md-6 container mx-0 rounded p-4 shadow">
    <form action="">
      <div class="input-group mb-3">
        <span class="input-group-text text-secondary">Tanggal</span>
        <input class="form-control" type="date">
      </div>
      <div class="mb-3">
        <input class="form-control" placeholder="Dari kota" type="text">
      </div>
      <div class="mb-3">
        <input class="form-control" placeholder="Ke kota" type="text">
      </div>
      <div class="mb-3">
        <textarea class="form-control" placeholder="Alasan" rows="5"></textarea>
      </div>
      <div class="mb-3">
        <select class="form-select">
          <option selected>Status</option>
          <option value="">Status 1</option>
          <option value="">Status 2</option>
        </select>
      </div>
      <div class="d-flex gap-3">
        <a class="btn btn-secondary flex-grow-1" href="{{ route('resident.index') }}">Kembali</a>
        <button class="btn btn-dark flex-grow-1" type="submit">Tambah mutasi</button>
      </div>
    </form>
  </div>
@endsection
