@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Data</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('generals.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" required>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <textarea class="form-control" name="address" id="address" required></textarea>
        </div>
        <div class="form-group">
            <label for="head">Head</label>
            <input type="text" class="form-control" name="head" id="head" required>
        </div>
        <div class="form-group">
            <label for="deputy_head">Deputy Head</label>
            <input type="text" class="form-control" name="deputy_head" id="deputy_head" required>
        </div>
        <div class="form-group">
            <label for="treasurer">Treasurer</label>
            <input type="text" class="form-control" name="treasurer" id="treasurer" required>
        </div>
        <div class="form-group">
            <label for="secretary">Secretary</label>
            <input type="text" class="form-control" name="secretary" id="secretary" required>
        </div>
        <a href="{{ route('generals.index') }}" class="btn btn-primary mt-2">Kembali</a>
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
    </form>
</div>
@endsection
