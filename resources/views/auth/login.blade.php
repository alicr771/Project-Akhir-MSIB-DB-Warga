@extends('layouts.auth', ['title' => 'Login'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                <div class="card card-plain">
                    <div class="card-header pb-0 text-start">
                        <h4 class="font-weight-bolder">Sign In</h4>
                        <p class="mb-0">Enter your email and password to sign in</p>
                    </div>
                    <div class="card-body">
						@if (session('status'))
							<div class="alert alert-success" role="alert">
								{{ session('status') }}
							</div>
						@endif
                        <form action="{{ route('login_proses') }}" method="POST" role="form">
                            @csrf
                            <div class="form-group">
                                <label class="font-weight-bold text-uppercase">Email address</label>
                                <input type="email" name="email" value="{{ old('email') }}"
                                    class="form-control form-control-lg @error('email') is-invalid @enderror" placeholder="Masukkan Alamat Email">
                                @error('email')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold text-uppercase">Password</label>
                                <input type="password" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror"
                                    placeholder="Masukkan Password">
                                @error('password')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mt-3 text-center">
                                <button type="submit" class="btn btn-primary btn-lg w-100 mt-3">Login</button>
                                <hr />
                                <a href="/forgot-password">Lupa Password?</a>
                            </div>
                        </form>
                        
                    </div>
                    <div class="card-footer text-center pt-0 px-lg-2 px-1">
                        <p class="mb-4 text-sm mx-auto">
                            Don't have an account?
                            <span class="text-primary text-gradient font-weight-bold">Contact Admin</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden"
                    style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signin-ill.jpg'); background-size: cover;">
                    <span class="mask bg-gradient-primary opacity-6"></span>
                    <h4 class="mt-5 text-white font-weight-bolder position-relative">"Attention is the new currency"</h4>
                    <p class="text-white position-relative">The more effortless the writing looks, the more effort the
                        writer actually put into the process.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
