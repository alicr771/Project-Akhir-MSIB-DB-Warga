@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit General Setting</h1>
    <form action="{{ route('generals.update', $general->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $general->name }}" required>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <textarea class="form-control" name="address" id="address" required>{{ $general->address }}</textarea>
        </div>
        <div class="form-group">
            <label for="head">Head</label>
            <input type="text" class="form-control" name="head" id="head" value="{{ $general->head }}" required>
        </div>
        <div class="form-group">
            <label for="deputy_head">Deputy Head</label>
            <input type="text" class="form-control" name="deputy_head" id="deputy_head" value="{{ $general->deputy_head }}" required>
        </div>
        <div class="form-group">
            <label for="treasurer">Treasurer</label>
            <input type="text" class="form-control" name="treasurer" id="treasurer" value="{{ $general->treasurer }}" required>
        </div>
        <div class="form-group">
            <label for="secretary">Secretary</label>
            <input type="text" class="form-control" name="secretary" id="secretary" value="{{ $general->secretary }}" required>
        </div>
        <a href="{{ route('generals.index') }}" class="btn btn-primary mt-2">Kembali</a>
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
    </form>
</div>
@endsection
