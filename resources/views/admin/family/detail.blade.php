@extends('layouts.app')

@section('title', 'Edit Keluarga')

@include('components.includes.script')

@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
@endpush

@section('content')
    <div class="container">
        <div class="card rounded shadow">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="h2 mb-0">Detail Kartu Keluarga</h4>
				<a href="{{ route('family.index') }}" class="btn btn-outline-primary">
					<span aria-hidden="true">Kembali</span>
				</a>
            </div>
            <div class="card-body">
                <table class="table">
					<tbody>
						<tr>
							<td class="font-weight-bold">Nomor KK</td>
							<td>{{ $data->number }}</td>
							<td></td>
						</tr>
						<tr>
							<td class="font-weight-bold">Kepala Keluarga</td>
							<td>{{ $data->resident->nik }} - {{ $data->resident->name }}</td>
							<td></td>
						</tr>
					</tbody>
				</table>
            </div>
        </div>

        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="h2 mb-0">Detail Anggota Keluarga</h4>
    
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Tambah +
                </button>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data->detail as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->resident->nik }}</td>
                            <td>{{ $item->resident->name }}</td>
                            <td>{{ $item->status }}</td>
                            <td class="d-flex align-items-center justify-content-center" style="gap: .3rem">
                                <form action="{{ route('detail.destroy', $item->id) }}" method="POST" class="d-inline">
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
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Anggota</h5>
                    <button type="button" class="btn-outline-dark rounded-circle px-2" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('detail.store') }}" method="POST" class="modal-body py-0">
                    @csrf
                    @method('POST')
                    <input type="hidden" name="family_card_id" value="{{ $data->id }}" class="d-none" />
                    <div id="new-member-rows" class="w-100">
                        <div class="row align-items-end w-100 justify-content-center m-0 mb-3">
                            <div class="col-7 p-0">
                                <label for="resident_ids" class="form-label">Anggota Baru</label>
                                <select class="form-select" name="resident_ids[]" required>
                                    <option value="">--- Pilih Penduduk ---</option>
                                    @foreach ($residents as $item)
                                        @if (!in_array($item->id, $members))
                                        <option value="{{ $item->id }}">{{ $item->nik }} - {{ $item->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-4 p-0">
                                <label for="statuses" class="form-label">Status</label>
                                <select class="form-select" name="statuses[]" required>
                                    <option value="">--- Pilih Status ---</option>
                                    <option value="ayah">Ayah</option>
                                    <option value="ibu">Ibu</option>
                                    <option value="anak">Anak</option>
                                </select>
                            </div>
                            <div class="col-1 p-0">
                                <button type="button" class="btn btn-danger remove-member-btn">&times;</button>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-sm btn-info mb-3" id="add-member-btn">Tambah Anggota</button>
                    <div class="d-flex justify-content-end align-items-center">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('add-member-btn').addEventListener('click', function() {
            let newRow = document.createElement('div');
            newRow.classList.add('row', 'align-items-end', 'w-100', 'justify-content-center', 'm-0', 'mb-3');
            newRow.innerHTML = `
                <div class="col-7 p-0">
                    <select class="form-select" name="resident_ids[]" required>
                        <option value="">--- Pilih Penduduk ---</option>
                        @foreach ($residents as $item)
                            @if (!in_array($item->id, $members))
                            <option value="{{ $item->id }}">{{ $item->nik }} - {{ $item->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="col-4 p-0">
                    <select class="form-select" name="statuses[]" required>
                        <option value="">--- Pilih Status ---</option>
                        <option value="ayah">Ayah</option>
                        <option value="ibu">Ibu</option>
                        <option value="anak">Anak</option>
                    </select>
                </div>
                <div class="col-1 p-0">
                    <button type="button" class="btn btn-danger remove-member-btn">&times;</button>
                </div>`;
            document.getElementById('new-member-rows').appendChild(newRow);
        });

        document.getElementById('new-member-rows').addEventListener('click', function(event) {
            if (event.target && event.target.classList.contains('remove-member-btn')) {
                event.target.closest('.row').remove();
            }
        });
    });
</script>
@endpush