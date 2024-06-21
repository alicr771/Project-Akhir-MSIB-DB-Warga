@extends('layouts.app')

@section('title', 'Dokumen')

@section('content')
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header d-flex justify-content-between align-items-center pb-0">
            <h6>Daftar Document</h6>
            <a class="btn btn-dark" href="{{ route('document.create') }}">Tambah Document</a>
          </div>
          <div class="card-body px-0 pb-2 pt-0">
            <div class="table-responsive p-0">
              <table class="align-items-center mb-0 table">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 px-2">
                      #
                    </th>
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
                      Aksi
                    </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($documents as $document)
                    <tr>
                      <td class="text-secondary font-weight-bold text-sm opacity-70">
                        {{ $loop->iteration }}
                      </td>
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
                        {{ $document->issued_date }}
                      </td>
                      <td class="text-secondary text-xs">
                        {{ $document->expiration_date }}
                      </td>
                      <td class="d-flex gap-2">
                        <a class="text-secondary font-weight-bold text-xs"
                          href="{{ route('document.show', $document->id) }}">
                          Detail
                        </a>
                        <a class="text-secondary font-weight-bold text-xs"
                          href="{{ route('document.edit', $document->id) }}">
                          Edit
                        </a>
                        <a class="text-secondary font-weight-bold text-xs" href="">
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
