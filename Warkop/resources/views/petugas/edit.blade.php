@extends('layouts.master')
@section('title','Edit Waiters')
@section('heading','Edit Waiters')

@section('bc')
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active"Edit Waiters</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
        <h3 class="card-title">

        </h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
            </button>
        </div>
        </div>
        <div class="card-body">
                    <form method="POST" action="/petugas/{{$ptg->id}}">
                         @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Kode Waiters</label>
                            <input type="text" name="kode_ptg" value="{{$ptg->kode_ptg}}"  class="form-control" id="exampleInputEmail1">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nama Waiters</label>
                            <input type="text" name="nama_ptg" value="{{$ptg->nama_ptg}}" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Alamat</label>
                            <input type="text" name="alamat"   value="{{$ptg->alamat}}" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Telephone</label>
                            <input type="text" name="telp"  value="{{$ptg->telp}}" class="form-control" id="exampleInputPassword1">
                        </div>
                        

                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </form>
                </div>
                <!-- /.card-body -->
               
    </div>
@endsection