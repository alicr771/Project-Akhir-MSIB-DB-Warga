@extends('layouts.app')

@section('content')
<div class="mt-5">
    <h1>Edit Kelurahan</h1>
    <form action="{{ route('kelurahan.update', $kelurahan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nama:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $kelurahan->name }}">
        </div>
        <div class="form-group">
            <label for="address">Alamat:</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ $kelurahan->address }}">
        </div>
        <div class="form-group">
            <label for="contact">Kontak:</label>
            <input type="text" class="form-control" id="contact" name="contact" value="{{ $kelurahan->contact }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
