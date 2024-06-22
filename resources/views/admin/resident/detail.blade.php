@extends('layouts.app')

@section('title', 'Detail Penduduk')

@section('content')
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header d-flex justify-content-between align-items-center pb-0">
            <h6>{{ $resident->name }}</h6>
            <a class="btn btn-secondary" href="{{ route('resident.index') }}">Kembali</a>
          </div>
          <div class="card-body px-0 pb-2 pt-0">
            <div class="table-responsive p-0">
              <table class="align-items-center mb-0 table">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 px-2">
                      NIK
                    </th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 px-2">
                      Tempat & Tanggal Lahir
                    </th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 px-2">
                      Jenis Kelamin
                    </th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 px-2">
                      Pendidikan Terakhir
                    </th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 px-2">
                      Kewarganegaraan
                    </th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 px-2">
                      Status Pernikahan
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-secondary text-xs">
                      {{ $resident->nik }}
                    </td>
                    <td class="text-secondary text-xs">
                      {{ $resident->pob }}, {{ date('d M y', strtotime($resident->dob)) }}
                    </td>
                    <td class="text-secondary text-xs">
                      {{ $resident->gender }}
                    </td>
                    <td class="text-secondary text-xs">
                      {{ $resident->last_education }}
                    </td>
                    <td class="text-secondary text-xs">
                      {{ $resident->citizenship }}
                    </td>
                    <td class="text-secondary text-xs">
                      {{ $resident->marital_status }}
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
