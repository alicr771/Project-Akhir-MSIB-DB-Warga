@extends('layouts.app')

@section('title', 'Penduduk RT')

@section('content')
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header d-flex justify-content-between align-items-center pb-0">
            <h6>Daftar Penduduk RT</h6>
            <a class="btn btn-dark" href="{{ route('neighborhood.create') }}">Tambah Penduduk RT</a>
          </div>
          <div class="card-body px-0 pb-2 pt-0">
            <div class="table-responsive p-0">
              <table class="align-items-center mb-0 table">
                <thead>
                  <tr>
                    <th class="text-uppercase text-xxs font-weight-bolder opacity-7 px-2">
                      #
                    </th>
                    <th class="text-uppercase text-xxs font-weight-bolder opacity-7 px-2">
                      Kepala RT
                    </th>
                    <th class="text-uppercase text-xxs font-weight-bolder opacity-7 px-2">
                      Nama RT
                    </th>
                    <th class="text-uppercase  text-xxs font-weight-bolder opacity-7 px-2">
                      Aksi
                    </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($neighborhoods as $neighborhood)
                    <tr>
                      <td class="font-weight-bold text-sm opacity-70">
                        {{ $loop->iteration }}
                      </td>
                      <td class="text-xs">
                        {{ $neighborhood->head }}
                      </td>
                      <td class="text-xs">
                        {{ $neighborhood->name }}
                      </td>
                      <td class="d-flex gap-2">
                        <a class="font-weight-bold text-xs"
                          href="{{ route('neighborhood.show', $neighborhood->id) }}">
                          Detail
                        </a>
                        <a class="font-weight-bold text-xs"
                          href="{{ route('neighborhood.edit', $neighborhood->id) }}">
                          Edit
                        </a>
                        <form action="{{ route('neighborhood.destroy', $neighborhood->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-link font-weight-bold text-xs p-0 m-0">
                            Hapus
                          </button>
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
