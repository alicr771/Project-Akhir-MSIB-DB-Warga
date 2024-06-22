@extends('layouts.app')
@section('title', 'My Profile')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center">My Profile</h4>
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{ $user->name }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" value="{{ $user->email }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="no_hp">No HP</label>
                        <input type="text" name="no_hp" class="form-control" id="no_hp" value="{{ $user->no_hp ?? 'Tidak tersedia' }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="role">Role</label>
                        <input type="text" name="role" class="form-control" id="role" value="{{ $user->role == 1 ? 'Admin' : 'User' }}" readonly>
                    </div>
                    
                    <a href="{{ route('profile.edit') }}" class="btn btn-warning">Edit Profile</a>
                    <a href="{{ route('profile.editPassword') }}" class="btn btn-secondary">Edit Password</a>
                    <form action="{{ route('profile.deleteAccount') }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus akun ini?')">Hapus Akun</button>
                    </form>                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
