@extends('layouts.app')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center pb-0">
                        <h6>General Settings</h6>
                        <a href="{{ route('generals.create') }}" class="btn btn-primary">Tambah Data</a>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success mt-2">
                                {{ $message }}
                            </div>
                        @endif
                    </div>
                    <div class="card-body px-0 pb-2 pt-0">
                        <div class="table-responsive p-0">
                            <table class="align-items-center mb-0 table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Head</th>
                                        <th>Deputy Head</th>
                                        <th>Treasurer</th>
                                        <th>Secretary</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($generals as $general)
                                        <tr>
                                            <td>{{ $general->name }}</td>
                                            <td>{{ $general->address }}</td>
                                            <td>{{ $general->head }}</td>
                                            <td>{{ $general->deputy_head }}</td>
                                            <td>{{ $general->treasurer }}</td>
                                            <td>{{ $general->secretary }}</td>
                                            <td>
                                                <a href="{{ route('generals.edit', $general->id) }}" class="btn btn-warning">Edit</a>
                                                <a href="{{ route('generals.show', $general->id) }}" class="btn btn-info">View</a>
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
