@extends('layouts.master')
@section('title','Edit Stand')
@section('heading','Edit Stand')

@section('bc')
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active"Stand</li>
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
            <form method="POST" action="/stand/{{$std->id}}">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kode Stand</label>
                    <input type="text" name="kd_stand" value="{{$std->kd_stand}}" class="form-control">

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Posisi</label>
                    <input type="text" name="stand" value="{{$std->stand}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Posisi</label>
                    <input type="text" name="telp" value="{{$std->telp}}" class="form-control">
                </div>


                <button type="submit" class="btn btn-primary">Edit Data</button>
            </form>
        </div>
        <!-- /.card-body -->

    </div>
@endsection