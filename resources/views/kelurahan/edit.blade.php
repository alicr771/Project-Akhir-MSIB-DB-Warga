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
            <label for="head">Nama Lurah</label>
            <input type="text" class="form-control" id="head" name="head" value="{{ $kelurahan->address }}">
        </div>
        <a class="btn btn-secondary flex-grow-1" href="{{ route('kelurahan.index') }}">Kembali</a>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
