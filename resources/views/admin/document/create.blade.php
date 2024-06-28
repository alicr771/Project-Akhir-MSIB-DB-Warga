@extends('layouts.app')

@section('title', 'Tambah Dokumen')

@section('content')
<div class="container">
	<div class="bg-body-tertiary col-md-6 mx-0 rounded p-4 shadow">
        <form action="{{ route('document.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="mb-3">
                <input class="form-control" placeholder="Title Document" type="text" name="type">
            </div>
            <div class="mb-3">
				<select name="resident_id" id="resident_id" class="form-select">
					<option value="">PILIH PENDUDUK</option>
					@foreach ($residents as $item)
					<option value="{{ $item->id }}">{{ $item->nik }} - {{ $item->name }}</option>
					@endforeach
				</select>
            </div>
            <div class="mb-3">
                <input class="form-control" type="file" name="file">
            </div>
            <div class="d-flex mb-3 gap-3">
                <div class="input-group">
                    <span class="input-group-text text-primary">Tanggal Diterbitkan</span>
                    <input class="form-control" type="date" name="issued_date">
                </div>
            </div>
            <div class="d-flex mb-3 gap-3">
                <div class="input-group">
                    <span class="input-group-text text-primary">Tanggal Berakhir</span>
                    <input class="form-control" type="date" name="expiration_date">
                </div>
            </div>
            <div class="mb-3">
                <textarea class="form-control" placeholder="Catatan" rows="5" name="notes"></textarea>
            </div>
            <div class="d-flex gap-3">
                <a class="btn btn-secondary flex-grow-1" href="{{ route('document.index') }}">Kembali</a>
                <button class="btn btn-dark flex-grow-1" type="submit">Tambah document</button>
            </div>
        </form>
    </div>
</div>
@endsection
