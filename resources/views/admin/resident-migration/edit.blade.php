@extends('layouts.app')

@section('title', 'Edit Mutasi')

@section('content')
<div class="bg-body-tertiary col-md-6 container mx-0 rounded p-4 shadow">
    <form action="{{ route('resident-migration.update', $migration->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <select class="form-select" name="resident_id" required>
                <option selected disabled>Pilih Penduduk</option>
                @foreach ($residents as $resident)
                    <option value="{{ $resident->id }}" {{ $migration->resident_id == $resident->id ? 'selected' : '' }}>{{ $resident->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text text-secondary">Tanggal</span>
            <input class="form-control" type="date" name="date" value="{{ $migration->date }}" required>
        </div>
        <div class="mb-3">
            <input class="form-control" placeholder="Dari kota" type="text" name="from" value="{{ $migration->from }}" required>
        </div>
        <div class="mb-3">
            <input class="form-control" placeholder="Ke kota" type="text" name="to" value="{{ $migration->to }}" required>
        </div>
        <div class="mb-3">
            <textarea class="form-control" placeholder="Alasan" rows="5" name="cause" required>{{ $migration->cause }}</textarea>
        </div>
        <div class="mb-3">
          <select class="form-select" name="status" required>
              @foreach ($statuses as $status)
                  <option value="{{ $status }}" {{ $migration->status == $status ? 'selected' : '' }}>{{ $status }}</option>
              @endforeach
          </select>
      </div>
        <div class="d-flex gap-3">
            <a class="btn btn-secondary flex-grow-1" href="{{ route('resident-migration.index') }}">Kembali</a>
            <button class="btn btn-dark flex-grow-1" type="submit">Simpan perubahan</button>
        </div>
    </form>
</div>
@endsection
