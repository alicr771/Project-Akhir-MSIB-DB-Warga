@extends('layouts.app')

@section('title', $user->name)

@section('content')
  <div class="container">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">{{ $user->name }}</h5>
          <p class="card-text">{{ $user->email }}</p>
          <a href="{{ route('user.index') }}" class="btn btn-primary m-0">Back</a>
        </div>
      </div>
    </div>
  </div>
@endsection
