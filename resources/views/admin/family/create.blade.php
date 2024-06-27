@extends('layouts.app')

@section('title', 'Tambah Keluarga')

@section('content')
    <div class="container d-flex justify-content-center align-items-center">
        <div class="col-md-6 bg-body-tertiary p-3 rounded shadow">
            <form action="{{ route('family.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="number" class="form-label">Nomor NIK</label>
                    <input type="text" name="number" class="form-control" id="number" placeholder="Nomor NIK Keluarga"
                        value="{{ old('number') }}">
					@error('number')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
                <div class="mb-3">
                    <label for="number" class="form-label">Kepala Keluarga</label>
                    <select name="resident_id" id="resident_id" class="form-control @error('resident_id') is-invalid @enderror" required>
                        <option value="">{{ __('Pilih Penduduk') }}</option>
						@foreach ($residents as $item)
							<option value="{{ $item->id }}">{{ $item->nik . ' - ' . $item->name }}</option>
						@endforeach
                    </select>

                    @error('resident_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="d-flex gap-2">
                    <a href="{{ route('family.index') }}" class="btn btn-secondary flex-grow-1">Kembali</a>
                    <button class="btn btn-primary flex-grow-1" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
