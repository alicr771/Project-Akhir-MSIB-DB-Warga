@extends('layouts.app')

@section('title', 'Edit Dokumen')

@section('content')
<div class="bg-body-tertiary col-md-6 container mx-0 rounded p-4 shadow">
    <form action="{{ route('document.update', $document->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <input class="form-control" placeholder="Tipe" type="text" name="type" value="{{ $document->type }}">
        </div>
        <div class="mb-3">
            <select name="resident_id" id="resident_id" class="form-select">
                <option value="">PILIH PENDUDUK</option>
                @foreach ($residents as $item)
                    <option value="{{ $item->id }}" {{ $document->resident_id == $item->id ? 'selected' : '' }}>{{ $item->nik }} - {{ $item->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <input class="form-control" placeholder="Path" type="file" name="file">
        </div>
        <div class="d-flex mb-3 gap-3">
            <div class="input-group">
                <span class="input-group-text text-secondary">Tanggal Diterbitkan</span>
                <input class="form-control" type="date" name="issued_date" value="{{ $document->issued_date }}">
            </div>
        </div>
        <div class="d-flex mb-3 gap-3">
            <div class="input-group">
                <span class="input-group-text text-secondary">Tanggal Berakhir</span>
                <input class="form-control" type="date" name="expiration_date" value="{{ $document->expiration_date }}">
            </div>
        </div>
        <div class="mb-3">
            <textarea class="form-control" placeholder="Catatan" rows="5" name="notes">{{ $document->notes }}</textarea>
        </div>
        <div class="d-flex gap-3">
            <a class="btn btn-secondary flex-grow-1" href="{{ route('document.index') }}">Kembali</a>
            <button class="btn btn-dark flex-grow-1" type="submit">Edit document</button>
        </div>
    </form>
</div>
@endsection
