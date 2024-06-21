@extends('layouts.app')

@section('title', 'Edit Mutasi')

@section('content')
  <div class="bg-body-tertiary col-md-6 container mx-0 rounded p-4 shadow">
    <form action="">
      <div class="input-group mb-3">
        <span class="input-group-text text-secondary">Tanggal</span>
        <input class="form-control" type="date" value="{{ $migration->date }}">
      </div>
      <div class="mb-3">
        <input class="form-control" placeholder="Dari kota" type="text" value="{{ $migration->from }}">
      </div>
      <div class="mb-3">
        <input class="form-control" placeholder="Ke kota" type="text" value="{{ $migration->to }}">
      </div>
      <div class="mb-3">
        <textarea class="form-control" placeholder="Alasan" rows="5">{{ $migration->cause }}</textarea>
      </div>
      <div class="mb-3">
        <select class="form-select text-capitalize">
          @foreach ($statuses as $status)
            <option {{ $status == $migration->status ? 'selected' : '' }} class="text-capitalize"
              value="{{ $status }}">{{ $status }}
            </option>
          @endforeach
        </select>
      </div>
      <div class="d-flex gap-3">
        <a class="btn btn-secondary flex-grow-1" href="{{ route('resident-migration.index') }}">Kembali</a>
        <button class="btn btn-dark flex-grow-1" type="submit">Ubah mutasi</button>
      </div>
    </form>
  </div>
@endsection
