@extends('layouts.app')

@section('title', 'Edit Resident')

@section('content')
<div class="bg-body-tertiary col-md-6 container mx-0 rounded p-4 shadow">
  <form action="{{ route('resident.update', $resident->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="nik" class="form-label">NIK</label>
      <input id="nik" name="nik" type="text" class="form-control" value="{{ old('nik', $resident->nik) }}" required>
      @error('nik')
      <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>

    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input id="name" name="name" type="text" class="form-control" value="{{ old('name', $resident->name) }}" required>
      @error('name')
      <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>

    <div class="mb-3">
      <label for="pob" class="form-label">Place of Birth</label>
      <input id="pob" name="pob" type="text" class="form-control" value="{{ old('pob', $resident->pob) }}" required>
      @error('pob')
      <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>

    <div class="mb-3">
      <label for="dob" class="form-label">Date of Birth</label>
      <input id="dob" name="dob" type="date" class="form-control" value="{{ old('dob', $resident->dob) }}" required>
      @error('dob')
      <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>

    <div class="mb-3">
      <label for="gender" class="form-label">Gender</label>
      <select id="gender" name="gender" class="form-select" required>
        <option value="male" {{ old('gender', $resident->gender) == 'male' ? 'selected' : '' }}>Male</option>
        <option value="female" {{ old('gender', $resident->gender) == 'female' ? 'selected' : '' }}>Female</option>
      </select>
      @error('gender')
      <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>

    <div class="mb-3">
      <label for="religion" class="form-label">Religion</label>
      <select id="religion" name="religion" class="form-select" required>
        <option value="islam" {{ old('religion', $resident->religion) == 'islam' ? 'selected' : '' }}>Islam</option>
        <option value="kristen" {{ old('religion', $resident->religion) == 'kristen' ? 'selected' : '' }}>Kristen</option>
        <option value="hindu" {{ old('religion', $resident->religion) == 'hindu' ? 'selected' : '' }}>Hindu</option>
        <option value="buddha" {{ old('religion', $resident->religion) == 'buddha' ? 'selected' : '' }}>Buddha</option>
      </select>
      @error('religion')
      <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>

    <div class="mb-3">
      <label for="last_education" class="form-label">Last Education</label>
      <select id="last_education" name="last_education" class="form-select" required>
        <option value="sd" {{ old('last_education', $resident->last_education) == 'sd' ? 'selected' : '' }}>SD</option>
        <option value="smp" {{ old('last_education', $resident->last_education) == 'smp' ? 'selected' : '' }}>SMP</option>
        <option value="sma" {{ old('last_education', $resident->last_education) == 'sma' ? 'selected' : '' }}>SMA</option>
        <option value="diploma" {{ old('last_education', $resident->last_education) == 'diploma' ? 'selected' : '' }}>Diploma</option>
        <option value="sarjana" {{ old('last_education', $resident->last_education) == 'sarjana' ? 'selected' : '' }}>Sarjana</option>
      </select>
      @error('last_education')
      <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>

    <div class="mb-3">
      <label for="citizenship" class="form-label">Citizenship</label>
      <select id="citizenship" name="citizenship" class="form-select" required>
        <option value="wni" {{ old('citizenship', $resident->citizenship) == 'wni' ? 'selected' : '' }}>WNI</option>
        <option value="wna" {{ old('citizenship', $resident->citizenship) == 'wna' ? 'selected' : '' }}>WNA</option>
      </select>
      @error('citizenship')
      <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>

    <div class="mb-3">
      <label for="marital_status" class="form-label">Marital Status</label>
      <select id="marital_status" name="marital_status" class="form-select" required>
        <option value="married" {{ old('marital_status', $resident->marital_status) == 'married' ? 'selected' : '' }}>Menikah</option>
        <option value="single" {{ old('marital_status', $resident->marital_status) == 'single' ? 'selected' : '' }}>Belum menikah</option>
      </select>
      @error('marital_status')
      <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>
    <div class="mb-3">
      <label for="kelurahan_id" class="form-label">Sub District</label>
      <select id="kelurahan_id" name="kelurahan_id" class="form-select" required>
        @foreach($kelurahans as $kelurahan)
        <option value="{{ $kelurahan->id }}" {{ old('kelurahan_id') == $kelurahan->id ? 'selected' : '' }}>{{ $kelurahan->name }}</option>
        @endforeach
      </select>
    </div>

    <div class="mb-3">
      <label for="neighborhood_id" class="form-label">Neighborhood</label>
      <select id="neighborhood_id" name="neighborhood_id" class="form-select" required>
        @foreach($neighborhoods as $neighborhood)
        <option value="{{ $neighborhood->id }}" {{ old('neighborhood_id') == $neighborhood->id ? 'selected' : '' }}>{{ $neighborhood->name }}</option>
        @endforeach
      </select>
    </div>

    <div class="mb-3">
      <label for="community_unit_id" class="form-label">Community Unit</label>
      <select id="community_unit_id" name="community_unit_id" class="form-select" required>
        @foreach($communityUnits as $communityUnit)
        <option value="{{ $communityUnit->id }}" {{ old('community_unit_id') == $communityUnit->id ? 'selected' : '' }}>{{ $communityUnit->name }}</option>
        @endforeach
      </select>
    </div>

    <div class="d-flex gap-3">
      <a class="btn btn-secondary flex-grow-1" href="{{ route('resident.index') }}">Kembali</a>
      <button class="btn btn-dark flex-grow-1" type="submit">Update</button>
    </div>
  </form>
</div>
@endsection
