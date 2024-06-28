@extends('layouts.app')

@section('title', 'Daftar Dokumen')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center py-2">
                        <h4 class="h2 mb-0">Daftar Dokumen</h4>
                        <a class="btn btn-primary" href="{{ route('document.create') }}">Tambah +</a>
                    </div>
                    <div class="card-body px-0 pb-2 pt-0">
                        <div class="table-responsive p-0">
                            <table class="align-items-center mb-0 table">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase  text-xxs font-weight-bolder opacity-7">
                                            #
                                        </th>
                                        <th class="text-uppercase  text-xxs font-weight-bolder opacity-7">
                                            Type
                                        </th>
                                        <th class="text-uppercase  text-xxs font-weight-bolder opacity-7">
                                            Data Milik
                                        </th>
                                        <th class="text-uppercase  text-xxs font-weight-bolder opacity-7">
                                            Path
                                        </th>
                                        <th class="text-uppercase  text-xxs font-weight-bolder opacity-7">
                                            Issued Date
                                        </th>
                                        <th class="text-uppercase  text-xxs font-weight-bolder opacity-7">
                                            Expiration Date
                                        </th>
                                        <th class="text-uppercase  text-xxs font-weight-bolder opacity-7 text-center">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($documents as $item)
                                        <tr>
                                            <td class="font-weight-bold text-sm opacity-70">
                                                {{ $loop->iteration }}
                                            </td>
											<td class="text-sm">
												{{ $item->type }}
											</td>
											<td class="text-sm">
												{{ $item->resident->name }}
											</td>
											<td class="text-sm">
												<img src="{{ asset($item->path) }}" height="100">
											</td>
											<td class="text-sm">
												{{ $item->issued_date }}
											</td>
											<td class="text-sm">
												{{ $item->expiration_date }}
											</td>											
                                            <td class="d-flex align-items-center justify-content-center" style="gap: .3rem">
                                                <a href="{{ route('document.show', $item->id) }}"
                                                    class="badge badge-info rounded-pill">
                                                    Show
                                                </a>
                                                <a href="{{ route('document.edit', $item->id) }}"
                                                    class="badge badge-primary rounded-pill">
                                                    Edit
                                                </a>
                                                <form action="{{ route('document.destroy', $item->id) }}"
                                                    method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="badge badge-danger border-0 btn btn-sm text-uppercase rounded-pill"
                                                        style="font-size: 0.54rem; padding: 0.37rem .4rem;">
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