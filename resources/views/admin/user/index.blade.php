@extends('layouts.app')

@section('title', 'Users List')

@section('content')
    <div class="container">
        <div class="p-3 bg-white rounded shadow">
            <div class="d-flex justify-content-between align-items-center py-2">
                <h4 class="display-5">Daftar Pengguna</h4>
                <a href="{{ route('user.create') }}" class="btn btn-primary m-0">Tambah Pengguna</a>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Telepon</th>
                        <th>Role</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $index => $user)
                        <tr>
                            <th>{{ $index + 1 }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->no_hp }}</td>
                            <td>{{ $user->role == 1 ? 'Admin' : 'User' }}</td>
                            <td class="d-flex align-items-center" style="gap: .3rem">
                                <a href="{{ route('user.show', $user->id) }}" class="badge badge-info rounded-pill">
                                    Show
                                </a>
                                <a href="{{ route('user.edit', $user->id) }}" class="badge badge-primary rounded-pill">
                                    Edit
                                </a>
                                <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="d-inline">
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
