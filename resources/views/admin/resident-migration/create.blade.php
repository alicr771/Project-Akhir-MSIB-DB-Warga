@extends('layouts.app')

@section('title', 'Tambah Mutasi')

@section('content')
<div class="bg-body-tertiary col-md-6 container mx-0 rounded p-4 shadow">
    <form action="{{ route('resident-migration.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <select class="form-select" name="resident_id" required>
                <option selected disabled>Pilih Penduduk</option>
                @foreach ($residents as $resident)
                    <option value="{{ $resident->id }}">{{ $resident->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text text-secondary">Tanggal</span>
            <input class="form-control" type="date" name="date" required>
        </div>
        <div class="mb-3">
            <input class="form-control" placeholder="Dari kota" type="text" name="from" required>
        </div>
        <div class="mb-3">
            <input class="form-control" placeholder="Ke kota" type="text" name="to" required>
        </div>
        <div class="mb-3">
            <textarea class="form-control" placeholder="Alasan" rows="5" name="cause" required></textarea>
        </div>
        <div class="mb-3">
            <select class="form-select" name="status" required>
                <option selected disabled>Status</option>
                <option value="pindah">Pindah</option>
                <option value="datang">Datang</option>
            </select>
        </div>
        <div class="d-flex gap-3">
            <a class="btn btn-secondary flex-grow-1" href="{{ route('resident-migration.index') }}">Kembali</a>
            <button class="btn btn-dark flex-grow-1" type="submit">Tambah mutasi</button>
        </div>
    </form>
</div>
@endsection
