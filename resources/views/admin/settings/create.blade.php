@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add New Setting</h2>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('settings.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" class="form-control" id="address" name="address">
        </div>
        <div class="form-group">
            <label for="head">Head:</label>
            <input type="text" class="form-control" id="head" name="head">
        </div>
        <div class="form-group">
            <label for="deputy_head">Deputy Head:</label>
            <input type="text" class="form-control" id="deputy_head" name="deputy_head">
        </div>
        <div class="form-group">
            <label for="treasurer">Treasurer:</label>
            <input type="text" class="form-control" id="treasurer" name="treasurer">
        </div>
        <div class="form-group">
            <label for="secretary">Secretary:</label>
            <input type="text" class="form-control" id="secretary" name="secretary">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
