@extends('layouts.app')

@section('title', 'General')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body">
                    <h3 class="card-title">Pengaturan Umum</h3>
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{ $general->name }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="address">Alamat</label>
                        <textarea name="address" class="form-control" id="address" readonly>{{ $general->address }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="head">Kepala</label>
                        <input type="text" name="head" class="form-control" id="head" value="{{ $general->head }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="deputy_head">Wakil Kepala</label>
                        <input type="text" name="deputy_head" class="form-control" id="deputy_head" value="{{ $general->deputy_head }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="treasurer">Bendahara</label>
                        <input type="text" name="treasurer" class="form-control" id="treasurer" value="{{ $general->treasurer }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="secretary">Sekretaris</label>
                        <input type="text" name="secretary" class="form-control" id="secretary" value="{{ $general->secretary }}" readonly>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection