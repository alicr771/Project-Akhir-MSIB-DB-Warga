@extends('layouts.auth', ['title' => 'Forgot Password'])

@section('content')
<div class="col-md-5 mx-auto">
    <div class="col-12 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
        <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden"
            style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signin-ill.jpg'); background-size: cover;">
            <span class="mask bg-gradient-primary opacity-6"></span>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif

            <form method="POST" action="{{ route('postReset', $token) }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="form-group">
                    <label class="font-weight-bold text-uppercase">Email Address</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ $request->email ?? old('email') }}" required autocomplete="email" autofocus placeholder="Masukkan Alamat Email">
                    @error('email')
                    <div class="alert alert-danger mt-2">
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-weight-bold text-uppercase">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="new-password" placeholder="Masukkan Password Baru">
                    @error('password')
                    <div class="alert alert-danger mt-2">
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-weight-bold text-uppercase">Konfirmasi Password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                        required autocomplete="new-password" placeholder="Masukkan Konfirmasi Password Baru">
                </div>
                <div class="btn-primary mt-3 text-center">
                <button type="submit" class="btn btn-primary btn-block">RESET PASSWORD</button>
            </form>

        </div>
    </div>
</div>
@endsection
