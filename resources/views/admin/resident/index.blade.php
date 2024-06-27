@extends('layouts.app')

@section('title', 'Penduduk')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center py-2">
                        <h4 class="h2 mb-0">Daftar Penduduk</h4>
                        <a class="btn btn-primary" href="{{ route('resident.create') }}">Tambah +</a>
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
                                            NIK
                                        </th>
                                        <th class="text-uppercase text-xxs font-weight-bolder opacity-7">
                                            Nama
                                        </th>
                                        <th class="text-uppercase text-xxs font-weight-bolder opacity-7">
                                            Tempat & Tanggal Lahir
                                        </th>
                                        <th class="text-uppercase text-xxs font-weight-bolder opacity-7">
                                            Jenis Kelamin
                                        </th>
                                        <th class="text-uppercase text-xxs font-weight-bolder opacity-7">
                                            Pendidikan Terakhir
                                        </th>
                                        <th class="text-uppercase text-xxs font-weight-bolder opacity-7">
                                            Kewarganegaraan
                                        </th>
                                        <th class="text-uppercase text-xxs font-weight-bolder opacity-7">
                                            Status Pernikahan
                                        </th>
                                        <th class="text-uppercase text-xxs font-weight-bolder opacity-7 text-right">
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
                                            <td class="text-sm">
                                                {{ $resident->nik }}
                                            </td>
                                            <td class="text-sm">
                                                {{ $resident->name }}
                                            </td>
                                            <td class="text-sm">
                                                {{ $resident->pob }}, {{ date('d M y', strtotime($resident->dob)) }}
                                            </td>
                                            <td class="text-sm">
                                                {{ $resident->gender }}
                                            </td>
                                            <td class="text-sm">
                                                {{ $resident->last_education }}
                                            </td>
                                            <td class="text-sm">
                                                {{ $resident->citizenship }}
                                            </td>
                                            <td class="text-sm">
                                                {{ $resident->marital_status }}
                                            </td>
                                            <td class="d-flex align-items-center justify-content-center" style="gap: .3rem">
												<a href="{{ route('resident.show', $resident->id) }}" class="badge badge-info rounded-pill">
													Show
												</a>
												<a href="{{ route('resident.edit', $resident->id) }}" class="badge badge-primary rounded-pill">
													Edit
												</a>
												<form action="{{ route('resident.destroy', $resident->id) }}" method="POST" class="d-inline">
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
