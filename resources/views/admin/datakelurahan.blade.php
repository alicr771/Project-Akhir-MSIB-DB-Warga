@extends('layouts.app')

@section('title', $data['title'])

@section('content')

<div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">{{ $data['title']}}</h6>
            {{-- <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="{{url('home')}}"><i class="fas fa-home"></i></a></li>
                
              </ol>
            </nav> --}}
          </div>
          <div class="col-lg-6 col-5 text-right">
        
            <button type="button" class="btn btn-neutral" data-toggle="modal" data-target="#exampleModal">
              Create Data
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
<div class="container-fluid mt--6">
  <div class="row">
    <div class="col-md-12 col-sm-12">
        @if (session()->has('err_message'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <span class="alert-icon"><i class="ni ni-like-2"></i></span>
              <span class="alert-text"><strong>Danger!</strong> {{ session()->get('err_message') }}</span>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
        @endif
        @if (session()->has('suc_message'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
              <span class="alert-icon"><i class="ni ni-like-2"></i></span>
              <span class="alert-text"><strong>Success!</strong>{{ session()->get('suc_message') }}</span>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
        @endif
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="card">
      <!-- Card header -->
      <div class="card-header border-0">
          <h3 class="mb-0">{{$data['title']}}</h3>
      </div>
      <!-- Light table -->
      <div class="table-responsive">
          <table class="table align-items-center table-flush">
          <thead class="thead-light">
            <tr>
              <th>No</th>
              <th>Nama Kelurahan</th>
              <th>Kepala Kelurahan</th>
              <th class="text-center">Action</th>
            
            </tr>
          </thead>
          <tbody class="list">
            @php
              $no = 1;
            @endphp
            @foreach ($data['kelurahan'] as $item)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->head}}</td>
                    <td  class="text-center">
                      <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#Update{{$item->id}}">
                          <i class="fas fa-edit"></i> 
                      </button>
                      <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#Delete{{$item->id}}">
                          <i class="fas fa-trash"></i> 
                      </button>
                      
                  </td>
                </tr>
            @endforeach
          </tbody>
          </table>
      </div>

      </div>
    </div>
  </div>
  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{url('insert-management-kelurahan')}}" method="post">
          @csrf
          <div class="form-group">
            <label for="exampleFormControlInput1">Nama Kelurahan</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nama" name="name">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Kepala Kelurahan</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="kelurahan" name="head">
          </div>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </form>
      </div>
    </div>
  </div>
</div>
@foreach ($data['kelurahan'] as $item)
<div class="modal fade" id="Update{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{url('update-management-kelurahan')}}" method="post">
          @csrf
          <input type="hidden" name="id" value="{{$item->id}}">
          <div class="form-group">
            <label for="exampleFormControlInput1">Nama Kelurahan</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nama" value="{{$item->name}}" name="name">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Kepala Kelurahan</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="kelurahan" value="{{$item->head}}" name="head">
          </div>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </form>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="Delete{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Apakah Anda Yakin untuk Menghapus</p>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        {{-- <button type="submit" class="btn btn-primary">Save changes</button> --}}
        <a href="{{url('delete-management-kelurahan/'.$item->id)}}" class="btn btn-success">Delete</a>
      
      </div>
    </div>
  </div>
</div>
@endforeach
@endsection
