@extends('layouts.app')

@section('title', 'Tambah Penduduk')

@section('content')
  <div class="bg-body-tertiary col-md-6 container mx-0 rounded p-4 shadow">
    <form action="">
      <div class="mb-3">
        <input class="form-control" placeholder="NIK" type="number" value="{{ $resident->nik }}">
      </div>
      <div class="mb-3">
        <input class="form-control" placeholder="Nama" type="text" value="{{ $resident->name }}">
      </div>
      <div class="d-flex mb-3 gap-3">
        <input class="form-control" placeholder="Tempat lahir" type="text" value="{{ $resident->pob }}">
        <div class="input-group">
          <span class="input-group-text text-secondary">Tanggal lahir</span>
          <input class="form-control" placeholder="Tanggal lahir" type="date" value="{{ $resident->dob }}">
        </div>
      </div>
      <div class="mb-3">
        <select class="form-select text-capitalize">
          @foreach ($selectOptions['gender'] as $gender)
            <option {{ $gender == $resident->gender ? 'selected' : '' }} class="text-capitalize"
              value="{{ $gender }}">
              {{ $gender }}</option>
          @endforeach
        </select>
      </div>
      <div class="mb-3">
        <select class="form-select text-capitalize">
          @foreach ($selectOptions['last_education'] as $lastEducation)
            <option {{ $lastEducation == $resident->last_education ? 'selected' : '' }} value="{{ $lastEducation }}">
              {{ $lastEducation }}</option>
          @endforeach
        </select>
      </div>
      <div class="mb-3">
        <select class="form-select text-uppercase">
          @foreach ($selectOptions['citizenship'] as $citizenship)
            <option {{ $citizenship == $resident->citizenship ? 'selected' : '' }} value="{{ $citizenship }}">
              {{ $citizenship }}</option>
          @endforeach
        </select>
      </div>
      <div class="mb-3">
        <select class="form-select text-capitalize">
          @foreach ($selectOptions['marital_status'] as $maritalStatus)
            <option {{ $maritalStatus == $resident->marital_status ? 'selected' : '' }} value="{{ $maritalStatus }}">
              {{ $maritalStatus }}</option>
          @endforeach
        </select>
      </div>
      <div class="d-flex gap-3">
        <a class="btn btn-secondary flex-grow-1" href="{{ route('resident.index') }}">Kembali</a>
        <button class="btn btn-dark flex-grow-1" type="submit">Tambah penduduk</button>
      </div>
    </form>
  </div>
@endsection
