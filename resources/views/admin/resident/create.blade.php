@extends('layouts.app')

@section('title', 'Tambah Penduduk')

@section('content')
    <div class="bg-body-tertiary col-md-6 container mx-0 rounded p-4 shadow">
        <form action="{{ route('resident.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <input class="form-control" placeholder="NIK" type="number" name="nik" value="{{ old('nik') }}" required>
                @error('nik')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <input class="form-control" placeholder="Nama" type="text" name="name" value="{{ old('name') }}"
                    required>
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="d-flex mb-3 gap-3">
                <input class="form-control" placeholder="Tempat lahir" type="text" name="pob"
                    value="{{ old('pob') }}" required>
                <div class="input-group">
                    <span class="input-group-text text-secondary">Tanggal lahir</span>
                    <input class="form-control" placeholder="Tanggal lahir" type="date" name="dob"
                        value="{{ old('dob') }}" required>
                </div>
            </div>

            <div class="mb-3">
                <select id="religion" name="religion" class="form-select" required>
                    <option value="" disabled selected>Religion</option>
                    <option value="islam" {{ old('religion') == 'islam' ? 'selected' : '' }}>Islam</option>
                    <option value="kristen" {{ old('religion') == 'kristen' ? 'selected' : '' }}>Kristen</option>
                    <option value="hindu" {{ old('religion') == 'hindu' ? 'selected' : '' }}>Hindu</option>
                    <option value="buddha" {{ old('religion') == 'buddha' ? 'selected' : '' }}>Buddha</option>
                </select>
            </div>

            <div class="mb-3">
                <select class="form-select" name="gender" required>
                    <option value="" disabled selected>Gender</option>
                    <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>

            <div class="mb-3">
                <select class="form-select" name="last_education" required>
                    <option value="" disabled selected>Pendidikan terakhir</option>
                    <option value="sd" {{ old('last_education') == 'sd' ? 'selected' : '' }}>SD</option>
                    <option value="smp" {{ old('last_education') == 'smp' ? 'selected' : '' }}>SMP</option>
                    <option value="sma" {{ old('last_education') == 'sma' ? 'selected' : '' }}>SMA</option>
                    <option value="diploma" {{ old('last_education') == 'diploma' ? 'selected' : '' }}>Diploma</option>
                    <option value="sarjana" {{ old('last_education') == 'sarjana' ? 'selected' : '' }}>Sarjana</option>
                </select>
            </div>

            <div class="mb-3">
                <select class="form-select" name="citizenship" required>
                    <option value="" disabled selected>Kewarganegaraan</option>
                    <option value="wni" {{ old('citizenship') == 'wni' ? 'selected' : '' }}>WNI</option>
                    <option value="wna" {{ old('citizenship') == 'wna' ? 'selected' : '' }}>WNA</option>
                </select>
            </div>

            <div class="mb-3">
                <select class="form-select" name="marital_status" required>
                    <option value="" disabled selected>Status pernikahan</option>
                    <option value="married" {{ old('marital_status') == 'married' ? 'selected' : '' }}>Menikah</option>
                    <option value="single" {{ old('marital_status') == 'single' ? 'selected' : '' }}>Belum menikah</option>
                </select>
            </div>

            <div class="mb-3">
                <select id="kelurahan_id" name="kelurahan_id" class="form-select" required>
					<option value="" disabled selected>Pilih Kelurahan</option>
                    @foreach ($kelurahans as $kelurahan)
                        <option value="{{ $kelurahan->id }}"
                            {{ old('kelurahan_id') == $kelurahan->id ? 'selected' : '' }}>{{ $kelurahan->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <select id="community_unit_id" name="community_unit_id" class="form-select" required>
					<option value="" disabled selected>Pilih RW</option>
                    @foreach ($communityUnits as $communityUnit)
                        <option value="{{ $communityUnit->id }}"
                            {{ old('community_unit_id') == $communityUnit->id ? 'selected' : '' }}>
						{{ $communityUnit->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <select id="neighborhood_id" name="neighborhood_id" class="form-select" required>
					<option value="" disabled selected>Pilih RT</option>
                    @foreach ($neighborhoods as $neighborhood)
                        <option value="{{ $neighborhood->id }}"
                            {{ old('neighborhood_id') == $neighborhood->id ? 'selected' : '' }}>{{ $neighborhood->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="d-flex gap-3">
                <a class="btn btn-secondary flex-grow-1" href="{{ route('resident.index') }}">Kembali</a>
                <button class="btn btn-dark flex-grow-1" type="submit">Submit</button>
            </div>
        </form>
    </div>
@endsection
