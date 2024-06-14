@extends('layouts.app')

@section('content')
<div class="mt-5">
    <h1>Tambah Kelurahan</h1>
    <form action="{{ route('kelurahan.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nama:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="address">Alamat:</label>
            <input type="text" class="form-control" id="address" name="address">
        </div>
        <div class="form-group">
            <label for="contact">Kontak:</label>
            <input type="text" class="form-control" id="contact" name="contact">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
