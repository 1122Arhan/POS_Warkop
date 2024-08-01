@extends('layouts.master')
@section('title','Edit Kategori')
@section('heading','Edit Kategori')

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
            <form method="POST" action="/kategori/{{$ktg->id}}">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kode Menu</label>
                    <input type="text" name="nama_ktg" value="{{$ktg->nama_ktg}}" class="form-control">

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jenis Kategori</label>
                    <select name="jenis_ktg" class="form-control" id="">
                        <option value="Makanan" {{ $ktg->kategori == 'Makanan' ? 'selected' : '' }}>Makanan</option>
                        <option value="Minuman" {{ $ktg->kategori == 'Minuman' ? 'selected' : '' }}>Minuman</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Edit Data</button>
            </form>
        </div>
        <!-- /.card-body -->

    </div>
@endsection