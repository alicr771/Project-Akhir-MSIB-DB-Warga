@extends('layouts.app')

@section('title', 'Tambah Dokumen')

@section('content')
  <div class="bg-body-tertiary col-md-6 container mx-0 rounded p-4 shadow">
    <form action="">
      <div class="mb-3">
        <input class="form-control" placeholder="Tipe" type="text">
      </div>
      <div class="mb-3">
        <input class="form-control" placeholder="Nomor" type="text">
      </div>
      <div class="mb-3">
        <input class="form-control" placeholder="Jalur" type="text">
      </div>
      <div class="d-flex mb-3 gap-3">
        <div class="input-group">
          <span class="input-group-text text-secondary">Tanggal Diterbitkan</span>
          <input class="form-control" type="date">
        </div>
      </div>
      <div class="d-flex mb-3 gap-3">
        <div class="input-group">
          <span class="input-group-text text-secondary">Tanggal Berakhir</span>
          <input class="form-control" type="date">
        </div>
      </div>
      <div class="mb-3">
        <textarea class="form-control" placeholder="Catatan" rows="5"></textarea>
      </div>
      <div class="d-flex gap-3">
        <a class="btn btn-secondary flex-grow-1" href="{{ route('document.index') }}">Kembali</a>
        <button class="btn btn-dark flex-grow-1" type="submit">Tambah document</button>
      </div>
    </form>
  </div>
@endsection
