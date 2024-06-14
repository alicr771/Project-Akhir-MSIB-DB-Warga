@extends('layouts.app')

@section('content')
<div class="mt-5">
    <h1>Daftar Kelurahan</h1>
    <a href="{{ route('kelurahan.create') }}" class="btn btn-primary mb-3">Tambah Kelurahan</a>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Kontak</th>
            <th>Aksi</th>
        </tr>
        @foreach ($kelurahans as $kelurahan)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $kelurahan->name }}</td>
            <td>{{ $kelurahan->address }}</td>
            <td>{{ $kelurahan->contact }}</td>
            <td>
                <a href="{{ route('kelurahan.show', $kelurahan->id) }}" class="btn btn-info">Lihat</a>
                <a href="{{ route('kelurahan.edit', $kelurahan->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('kelurahan.destroy', $kelurahan->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
