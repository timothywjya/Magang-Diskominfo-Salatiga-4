@extends('adminlte::page')
@section('title', 'Edit Arena')
@section('content_header')
    <h1 class="m-0 text-dark">Edit Arena</h1>
@stop
@section('content')
    <form action="{{route('arena.update', $arena)}}" method="post">
        @method('PUT')
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputnama_arena">Nama Arena</label>
                        <input type="text" class="form-control @error('nama_arena') is-invalid @enderror" id="exampleInputnama_arena" placeholder="Nama Arena" name="nama_arena" value="{{$arena->nama_arena ?? old('nama_arena')}}">
                        @error('nama_arena') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputkode_gor">Kode Gor</label>
                        <input type="text" class="form-control @error('kode_gor') is-invalid @enderror" id="exampleInputkode_gor" placeholder="Masukkan Kode Gor" name="kode_gor" value="{{$arena->kode_gor ?? old('kode_gor')}}">
                        @error('kode_gor') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{route('arena.index')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop