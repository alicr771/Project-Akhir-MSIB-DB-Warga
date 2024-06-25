@extends('layouts.app')

@section('title', 'Penduduk RW')

@section('content')
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header d-flex justify-content-between align-items-center pb-0">
            <h6>Daftar Penduduk RW</h6>
            <a class="btn btn-dark" href="{{ route('community-unit.create') }}">Tambah Penduduk RW</a>
          </div>
          <div class="card-body px-0 pb-2 pt-0">
            <div class="table-responsive p-0">
              <table class="align-items-center mb-0 table">
                <thead>
                  <tr>
                    <th class="text-uppercase  text-xxs font-weight-bolder opacity-7 px-2">
                      #
                    </th>
                    <th class="text-uppercase  text-xxs font-weight-bolder opacity-7 px-2">
                      Kepala Keluarga
                    </th>
                    <th class="text-uppercase  text-xxs font-weight-bolder opacity-7 px-2">
                      Nama
                    </th>
                    <th class="text-uppercase  text-xxs font-weight-bolder opacity-7 px-2">
                      Aksi
                    </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($communityUnits as $CommunityUnit)
                    <tr>
                      <td class=" font-weight-bold text-sm opacity-70">
                        {{ $loop->iteration }}
                      </td>
                      <td class=" text-xs">
                        {{ $CommunityUnit->head }}
                      </td>
                      <td class=" text-xs">
                        {{ $CommunityUnit->name }}
                      </td>
                      <td class="d-flex gap-2">
                        <a class=" font-weight-bold text-xs"
                          href="{{ route('community-unit.show', $CommunityUnit->id) }}">
                          Detail
                        </a>
                        <a class=" font-weight-bold text-xs"
                          href="{{ route('community-unit.edit', $CommunityUnit->id) }}">
                          Edit
                        </a>
                        <form action="{{ route('community-unit.destroy', $CommunityUnit->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-link text-danger font-weight-bold text-xs" type="submit">Hapus</button>
                        </form>
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
