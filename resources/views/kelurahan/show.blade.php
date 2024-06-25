@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0 show-heading">Detail Kelurahan</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 show-text">
                            <strong>Nama Kelurahan</strong>
                        </div>
                        <div class="col-md-9">
                            <p>{{ $kelurahan->name }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 show-text">
                            <strong>Nama Lurah</strong>
                        </div>
                        <div class="col-md-9">
                            <p>{{ $kelurahan->head }}</p>
                        </div>
                    </div>
                    
                    <a class="btn btn-secondary flex-grow-1" href="{{ route('kelurahan.index') }}">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
