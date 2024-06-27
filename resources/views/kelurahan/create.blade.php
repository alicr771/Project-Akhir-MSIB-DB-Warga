@extends('layouts.app')

@section('content')
<div class="container py-3">
    <div class="card p-4">
        <h1>Tambah Kelurahan</h1>
        <form action="{{ route('kelurahan.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="head">Kepala Kelurahan</label>
                <input type="text" class="form-control" id="head" name="head">
            </div>
            <a class="btn btn-secondary flex-grow-1" href="{{ route('kelurahan.index') }}">Kembali</a>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
