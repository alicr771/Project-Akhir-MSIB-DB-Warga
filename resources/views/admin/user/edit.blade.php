@extends('layouts.app')

@section('title', 'Tambah Pengguna')

@section('content')
  <div class="container">
    <div class="col-md-6 bg-body-tertiary p-3 rounded shadow">
      <form action="{{ route('user.store') }}">
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" placeholder="Nama pengguna" value="{{ $user->name }}">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" placeholder="name@example.com"
            value="{{ $user->email }}">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" id="password" value="{{ $user->password }}">
        </div>
        <div class="d-flex gap-2">
          <a href="{{ route('user.index') }}" class="btn btn-secondary flex-grow-1">Kembali</a>
          <button class="btn btn-primary flex-grow-1" type="submit">Ubah Pengguna</button>
        </div>
      </form>
    </div>
  </div>
@endsection
