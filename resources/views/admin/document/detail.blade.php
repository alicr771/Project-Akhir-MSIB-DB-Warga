@extends('layouts.app')

@section('title', 'Detail Penduduk')

@section('content')
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header d-flex justify-content-between align-items-center pb-0">
            <h6>{{ $document->resident->name }}</h6>
            <a class="btn btn-secondary" href="{{ route('document.index') }}">Kembali</a>
          </div>
          <div class="card-body px-0 pb-2 pt-0">
            <div class="table-responsive p-0">
              <table class="align-items-center mb-0 table">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 px-2">
                      Tipe
                    </th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 px-2">
                      Nomor
                    </th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 px-2">
                      Jalur
                    </th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 px-2">
                      Tanggal Diterbitkan
                    </th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 px-2">
                      Tanggal Berakhir
                    </th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 px-2">
                      Catatan
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-secondary text-xs">
                      {{ $document->type }}
                    </td>
                    <td class="text-secondary text-xs">
                      {{ $document->number }}
                    </td>
                    <td class="text-secondary text-xs">
                      {{ $document->path }}
                    </td>
                    <td class="text-secondary text-xs">
                      {{ date('d M y', strtotime($document->issued_date)) }}
                    </td>
                    <td class="text-secondary text-xs">
                      {{ date('d M y', strtotime($document->expiration_date)) }}
                    </td>
                    <td class="text-secondary text-xs">
                      {{ $document->notes }}
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
