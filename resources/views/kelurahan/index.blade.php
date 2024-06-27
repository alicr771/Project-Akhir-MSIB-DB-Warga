@extends('layouts.app')

@section('title', 'Daftar Kelurahan')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center py-2">
                        <h4 class="h2 mb-0">Daftar Kelurahan</h4>
                        <a class="btn btn-primary" href="{{ route('kelurahan.create') }}">Tambah +</a>
                    </div>
                    <div class="card-body px-0 pb-2 pt-0">
                        <div class="table-responsive p-0">
                            <table class="align-items-center mb-0 table">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-xxs font-weight-bolder opacity-7">
                                            #
                                        </th>
                                        <th class="text-uppercase text-xxs font-weight-bolder opacity-7">
                                            Kepala Kelurahan
                                        </th>
                                        <th class="text-uppercase text-xxs font-weight-bolder opacity-7">
                                            Nama Kelurahan
                                        </th>
                                        <th class="text-uppercase text-xxs font-weight-bolder opacity-7 text-center">
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subDistricts as $item)
                                        <tr>
                                            <td class="font-weight-bold text-sm opacity-70">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td class="text-sm">
                                                {{ $item->head }}
                                            </td>
                                            <td class="text-sm">
                                                {{ $item->name }}
                                            </td>
                                            <td class="d-flex align-items-center justify-content-center" style="gap: .3rem">
												<a href="{{ route('kelurahan.show', $item->id) }}" class="badge badge-info rounded-pill">
													Show
												</a>
												<a href="{{ route('kelurahan.edit', $item->id) }}" class="badge badge-primary rounded-pill">
													Edit
												</a>
												<form action="{{ route('kelurahan.destroy', $item->id) }}" method="POST" class="d-inline">
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
                </div>
            </div>
        </div>
    </div>
@endsection
