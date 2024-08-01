@extends('layouts.master')
@section('title','Edit Menu')
@section('heading','Edit Menu')

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
            <form method="POST" action="/menu/{{$mn->id}}">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kode Menu</label>
                    <input type="text" name="kd_menu" value="{{$mn->kd_menu}}" class="form-control">

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Posisi</label>
                    <input type="text" name="nama_menu" value="{{$mn->nama_menu}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Harga</label>
                    <input type="number" name="harga" value="{{$mn->harga}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Stand</label>
                    <select name="stand" class="form-control" id="">
                        <option hidden value="{{$mn->stands_id}}">{{$mn->stands->stand}}</option>
                        @foreach ($std as $item)
                            <option value="{{$item->id}}">{{$item->stand}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Agama</label>
                    <select name="kategori" class="form-control" id="">
                        <option value="Makanan" {{ $mn->kategori == 'Makanan' ? 'selected' : '' }}>Makanan</option>
                        <option value="Minuman" {{ $mn->kategori == 'Minuman' ? 'selected' : '' }}>Minuman</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Edit Data</button>
            </form>
        </div>
        <!-- /.card-body -->

    </div>
@endsection