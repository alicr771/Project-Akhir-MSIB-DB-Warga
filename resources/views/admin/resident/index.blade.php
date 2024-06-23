@extends('layouts.app')

@section('title', 'Penduduk')

@section('content')
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header d-flex justify-content-between align-items-center pb-0">
            <h6>Daftar Penduduk</h6>
            <a class="btn btn-dark" href="{{ route('resident.create') }}">Tambah Penduduk</a>
          </div>
          <div class="card-body px-0 pb-2 pt-0">
            <div class="table-responsive p-0">
              <table class="align-items-center mb-0 table">
                <thead>
                  <tr>
                    <th class="text-uppercasetext-xxs font-weight-bolder opacity-7 px-2">
                      #
                    </th>
                    <th class="text-uppercasetext-xxs font-weight-bolder opacity-7 px-2">
                      NIK
                    </th>
                    <th class="text-uppercasetext-xxs font-weight-bolder opacity-7 px-2">
                      Nama
                    </th>
                    <th class="text-uppercasetext-xxs font-weight-bolder opacity-7 px-2">
                      Tempat & Tanggal Lahir
                    </th>
                    <th class="text-uppercasetext-xxs font-weight-bolder opacity-7 px-2">
                      Jenis Kelamin
                    </th>
                    <th class="text-uppercasetext-xxs font-weight-bolder opacity-7 px-2">
                      Pendidikan Terakhir
                    </th>
                    <th class="text-uppercasetext-xxs font-weight-bolder opacity-7 px-2">
                      Kewarganegaraan
                    </th>
                    <th class="text-uppercasetext-xxs font-weight-bolder opacity-7 px-2">
                      Status Pernikahan
                    </th>
                    <th class="text-uppercasetext-xxs font-weight-bolder opacity-7 px-2">
                      Aksi
                    </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($residents as $resident)
                    <tr>
                      <td class="font-weight-bold text-sm opacity-70">
                        {{ $loop->iteration }}
                      </td>
                      <td class="text-xs">
                        {{ $resident->nik }}
                      </td>
                      <td class="text-xs">
                        {{ $resident->name }}
                      </td>
                      <td class="text-xs">
                        {{ $resident->pob }}, {{ date('d M y', strtotime($resident->dob)) }}
                      </td>
                      <td class="text-xs">
                        {{ $resident->gender }}
                      </td>
                      <td class="text-xs">
                        {{ $resident->last_education }}
                      </td>
                      <td class="text-xs">
                        {{ $resident->citizenship }}
                      </td>
                      <td class="text-xs">
                        {{ $resident->marital_status }}
                      </td>
                      <td class="d-flex gap-2">
                        <a class="font-weight-bold text-xs"
                          href="{{ route('resident.show', $resident->id) }}">
                          Detail
                        </a>
                        <a class="font-weight-bold text-xs"
                          href="{{ route('resident.edit', $resident->id) }}">
                          Edit
                        </a>
                        <a class="font-weight-bold text-xs" href="">
                          Hapus
                        </a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
