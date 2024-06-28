@extends('layouts.app')

@section('content')
<div class="mt-5 container">
    <h1>Edit Kelurahan</h1>
    <form action="{{ route('kelurahan.update', $subDistrict->id) }}" method="POST" class="card p-3">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $subDistrict->name }}">
        </div>
        <div class="form-group">
            <label for="head">Nama Lurah</label>
            <input type="text" class="form-control" id="head" name="head" value="{{ $subDistrict->head }}">
        </div>
        <a class="btn btn-secondary mb-1" href="{{ route('kelurahan.index') }}">Kembali</a>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
