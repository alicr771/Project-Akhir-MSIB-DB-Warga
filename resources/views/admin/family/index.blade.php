@extends('layouts.app')

@section('title', 'Daftar Keluarga')

@section('content')
    <div class="container">
        <div class="bg-white rounded shadow px-4">
            <div class="d-flex justify-content-between align-items-center py-2">
                <h4 class="h2 mb-0">Daftar Keluarga</h4>
                <a href="{{ route('family.create') }}" class="btn btn-primary m-0">Tambah +</a>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIK</th>
                        <th>Kepala Keluarga</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($families as $item)
                        <tr>
                            <td class="font-weight-bold text-sm opacity-70">
                                {{ $loop->iteration }}
                            </td>
                            <td class="text-sm">
                                {{ $item->number }}
                            </td>
                            <td class="text-sm">
                                {{ $item->resident->name }}
                            </td>
                            <td class="d-flex align-items-center justify-content-center" style="gap: .3rem">
                                <a href="{{ route('family.show', $item->id) }}" class="badge badge-info rounded-pill">
                                    Show
                                </a>
                                <a href="{{ route('family.edit', $item->id) }}" class="badge badge-primary rounded-pill">
                                    Edit
                                </a>
                                <form action="{{ route('family.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="badge badge-danger border-0 btn btn-sm text-uppercase rounded-pill" style="font-size: 0.54rem; padding: 0.37rem .4rem;">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
