@extends('layouts.app')

@section('title', 'Tambah Penduduk')

@section('content')
  <div class="bg-body-tertiary col-md-6 container mx-0 rounded p-4 shadow">
    <form action="">
      <div class="mb-3">
        <input class="form-control" placeholder="NIK" type="number">
      </div>
      <div class="mb-3">
        <input class="form-control" placeholder="Nama" type="text">
      </div>
      <div class="d-flex mb-3 gap-3">
        <input class="form-control" placeholder="Tempat lahir" type="text">
        <div class="input-group">
          <span class="input-group-text text-secondary">Tanggal lahir</span>
          <input class="form-control" placeholder="Tanggal lahir" type="date">
        </div>
      </div>
      <div class="mb-3">
        <select class="form-select">
          <option selected>Gender</option>
          <option value="laki-laki">Laki-laki</option>
          <option value="perempuan">Perempuan</option>
        </select>
      </div>
      <div class="mb-3">
        <select class="form-select">
          <option selected>Pendidikan terakhir</option>
          <option value="sd">SD</option>
          <option value="smp">SMP</option>
          <option value="sma">SMA</option>
          <option value="diploma">Diploma</option>
          <option value="sarjana">Sarjana</option>
        </select>
      </div>
      <div class="mb-3">
        <select class="form-select">
          <option selected>Kewarganegaraan</option>
          <option value="wni">WNA (Wargna Negara Indonesia)</option>
          <option value="wna">WNI (Wargna Negara Asing)</option>
        </select>
      </div>
      <div class="mb-3">
        <select class="form-select">
          <option selected>Status pernikahan</option>
          <option value="sd">Menikah</option>
          <option value="sma">Belum menikah</option>
        </select>
      </div>
      <div class="d-flex gap-3">
        <a class="btn btn-secondary flex-grow-1" href="{{ route('resident.index') }}">Kembali</a>
        <button class="btn btn-dark flex-grow-1" type="submit">Tambah penduduk</button>
      </div>
    </form>
  </div>
@endsection
