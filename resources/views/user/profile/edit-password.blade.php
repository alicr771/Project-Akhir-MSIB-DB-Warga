@extends('layouts.app')
@section('title', 'Edit Password')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center">Edit Password</h4>

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('profile.updatePassword') }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="password">Password Baru</label>
                            <input type="password" name="password" class="form-control" id="password" required>
                        </div>

                        <div class="form-group">
                            <label for="password_confirmation">Konfirmasi Password</label>
                            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Update Password</button>
                        <a href="{{ route('profile') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
