@extends('layouts.app')

@section('title', 'Mutasi')

@section('content')
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header d-flex justify-content-between align-items-center pb-0">
            <h6>Daftar Mutasi</h6>
            <a class="btn btn-dark" href="{{ route('resident-migration.create') }}">Tambah Data Mutasi</a>
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
                      Nama
                    </th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 px-2">
                      Tanggal
                    </th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 px-2">
                      Dari
                    </th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 px-2">
                      Ke
                    </th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 px-2">
                      Status
                    </th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 px-2">
                      Aksi
                    </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($migrations as $migration)
                    <tr>
                      <td class="text-secondary font-weight-bold text-sm opacity-70">
                        {{ $loop->iteration }}
                      </td>
                      <td class="text-secondary text-xs">
                        {{ $migration->resident->name }}
                      </td>
                      <td class="text-secondary text-xs">
                        {{ date('d M y', strtotime($migration->date)) }}
                      </td>
                      <td class="text-secondary text-xs">
                        {{ $migration->from }}
                      </td>
                      <td class="text-secondary text-xs">
                        {{ $migration->to }}
                      </td>
                      <td class="text-secondary text-xs">
                        {{ $migration->status }}
                      </td>
                      <td class="d-flex gap-2 align-items-center">
                        <a class="text-secondary font-weight-bold text-xs"
                          href="{{ route('resident-migration.show', $migration->id) }}">
                          Detail
                        </a>
                        <a class="text-secondary font-weight-bold text-xs "
                          href="{{ route('resident-migration.edit', $migration->id) }}">
                          Edit
                        </a>
                        <form action="{{ route('resident-migration.destroy', $migration->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-link text-secondary font-weight-bold text-xs p-0 m-0 align-baseline">Hapus</button>
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
