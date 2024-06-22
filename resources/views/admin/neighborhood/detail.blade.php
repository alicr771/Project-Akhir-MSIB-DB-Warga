@extends('layouts.app')

@section('title', 'Detail Penduduk RT')

@section('content')
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header d-flex justify-content-between align-items-center pb-0">
            <h6>{{ $neighborhood->name }}</h6>
            <a class="btn btn-secondary" href="{{ route('neighborhood.index') }}">Kembali</a>
          </div>
          <div class="card-body px-0 pb-2 pt-0">
            <div class="table-responsive p-0">
              <table class="align-items-center mb-0 table">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 px-2">
                      Kepala Keluarga
                    </th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 px-2">
                      Nama
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-secondary text-xs">
                      {{ $neighborhood->head }}
                    </td>
                    <td class="text-secondary text-xs">
                      {{ $neighborhood->name }}
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
