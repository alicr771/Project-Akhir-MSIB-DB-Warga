@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail General Setting</h1>
    
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $general->name }}</h5>
            <p class="card-text"><strong>Address:</strong> {{ $general->address }}</p>
            <p class="card-text"><strong>Head:</strong> {{ $general->head }}</p>
            <p class="card-text"><strong>Deputy Head:</strong> {{ $general->deputy_head }}</p>
            <p class="card-text"><strong>Treasurer:</strong> {{ $general->treasurer }}</p>
            <p class="card-text"><strong>Secretary:</strong> {{ $general->secretary }}</p>
        </div>
    </div>
    
    <a href="{{ route('generals.index') }}" class="btn btn-primary mt-3">Back to List</a>
</div>
@endsection
