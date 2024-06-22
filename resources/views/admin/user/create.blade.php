@extends('layouts.app')

@section('title', 'Tambah Pengguna')

@section('content')
  <div class="container">
    <div class="col-md-6 bg-body-tertiary p-3 rounded shadow">
      <form action="{{ route('user.store') }}" method="POST">
        @csrf 
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" name="name" class="form-control" id="name" placeholder="Nama pengguna" value="{{ old('name') }}">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" value="{{ old('email') }}">
        </div>
        <div class="mb-3">
          <label for="no_hp" class="form-label">No HP</label>
          <input type="text" name="no_hp" class="form-control" id="no_hp" placeholder="Nomor Handphone" value="{{ old('no_hp') }}">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" name="password" id="password" class="form-control">
        </div>
        <div class="mb-3">
          <label for="password_confirmation" class="form-label">Confirm Password</label>
          <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
        </div>
        <div class="mb-3">
          <select name="role" id="role" class="form-control @error('role') is-invalid @enderror" required>
              <option value="">{{ __('Select Role') }}</option>
              <option value="1" {{ old('role') == 1 ? 'selected' : '' }}>{{ __('Admin') }}</option>
              <option value="0" {{ old('role') == 0 ? 'selected' : '' }}>{{ __('Staff') }}</option>
          </select>

          @error('role')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
        <div class="d-flex gap-2">
          <a href="{{ route('user.index') }}" class="btn btn-secondary flex-grow-1">Kembali</a>
          <button class="btn btn-primary flex-grow-1" type="submit">Tambah Pengguna</button>
        </div>
      </form>
    </div>
  </div>
@endsection
