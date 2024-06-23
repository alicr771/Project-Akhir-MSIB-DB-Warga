@extends('layouts.app')

@section('title', 'Edit General')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center">Edit General</h4>
                    <form action="{{ route('generals.update', $general->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name', $general->name) }}">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="address">Alamat</label>
                            <textarea name="address" class="form-control @error('address') is-invalid @enderror" id="address">{{ old('address', $general->address) }}</textarea>
                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="head">Kepala</label>
                            <input type="text" name="head" class="form-control @error('head') is-invalid @enderror" id="head" value="{{ old('head', $general->head) }}">
                            @error('head')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="deputy_head">Wakil Kepala</label>
                            <input type="text" name="deputy_head" class="form-control @error('deputy_head') is-invalid @enderror" id="deputy_head" value="{{ old('deputy_head', $general->deputy_head) }}">
                            @error('deputy_head')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="treasurer">Bendahara</label>
                            <input type="text" name="treasurer" class="form-control @error('treasurer') is-invalid @enderror" id="treasurer" value="{{ old('treasurer', $general->treasurer) }}">
                            @error('treasurer')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="secretary">Sekretaris</label>
                            <input type="text" name="secretary" class="form-control @error('secretary') is-invalid @enderror" id="secretary" value="{{ old('secretary', $general->secretary) }}">
                            @error('secretary')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
