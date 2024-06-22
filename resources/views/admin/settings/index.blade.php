@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Setting Detail</h2>
    @if ($settings->isNotEmpty())
        @php
            $setting = $settings->first();
        @endphp
        <form action="{{ route('settings.update', $setting->id) }}" method="POST" class="form-inline">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama" class="mr-sm-2">Nama:</label>
                <input type="text" class="form-control mb-2 mr-sm-2" id="nama" name="nama" value="{{ $setting->nama }}">
            </div>
            <div class="form-group">
                <label for="address" class="mr-sm-2">Alamat:</label>
                <input type="text" class="form-control mb-2 mr-sm-2" id="address" name="address" value="{{ $setting->address }}">
            </div>
            <div class="form-group">
                <label for="head" class="mr-sm-2">Kepala:</label>
                <input type="text" class="form-control mb-2 mr-sm-2" id="head" name="head" value="{{ $setting->head }}">
            </div>
            <div class="form-group">
                <label for="deputy_head" class="mr-sm-2">Wakil Kepala:</label>
                <input type="text" class="form-control mb-2 mr-sm-2" id="deputy_head" name="deputy_head" value="{{ $setting->deputy_head }}">
            </div>
            <div class="form-group">
                <label for="treasurer" class="mr-sm-2">Bendahara:</label>
                <input type="text" class="form-control mb-2 mr-sm-2" id="treasurer" name="treasurer" value="{{ $setting->treasurer }}">
            </div>
            <div class="form-group">
                <label for="secretary" class="mr-sm-2">Sekretaris:</label>
                <input type="text" class="form-control mb-2 mr-sm-2" id="secretary" name="secretary" value="{{ $setting->secretary }}">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Update</button>
        </form>
    @else
        <div class="alert alert-warning" role="alert">
            Data setting tidak ditemukan.
        </div>
    @endif
</div>
@endsection
