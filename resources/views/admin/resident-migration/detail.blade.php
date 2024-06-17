@extends('layouts.app')

@section('title', 'Detail Mutasi')

@section('content')
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">{{ $migration->resident->name }}</h5>
            <h6 class="card-subtitle text-body-secondary mb-2">{{ date('d, F Y', strtotime($migration->date)) }}</h6>
            <p class="card-text">{{ $migration->cause }}</p>
            <div class="d-flex mb-3 gap-3">
              <div>Dari kota {{ $migration->from }}</div>
              <div>
                <span>
                  <svg class="bi bi-arrow-right" fill="currentColor" height="16" viewBox="0 0 16 16" width="16"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"
                      fill-rule="evenodd" />
                  </svg>
                </span>
              </div>
              <div>Ke kota {{ $migration->to }}</div>
            </div>
            <a class="card-link btn btn-secondary m-0" href="{{ route('resident-migration.index') }}">Kembali</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
