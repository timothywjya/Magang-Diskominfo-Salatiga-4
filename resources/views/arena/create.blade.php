@extends('adminlte::page')
@section('title', 'Tambah Arena')
@section('content_header')
    <h1 class="m-0 text-dark">Tambah Arena</h1>
@stop
@section('content')
    <form action="{{route('arena.store')}}" method="post">
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputnama_arena">Nama Arena</label>
                        <input type="text" class="form-control @error('nama_arena') is-invalid @enderror" id="ArenampleInputnamaarenaena" placeholder="Masukkan Nama Arena" name="nama_arena" value="{{old('nama_arena')}}">
                        @error('nama_arena') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="fasilitas">Fasilitas</label>
                        <input type="text" class="form-control @error('fasilitas') is-invalid @enderror" id="fasilitas" placeholder="Masukkan Fasilitas" name="fasilitas" value="{{old('fasilitas')}}">
                        @error('fasilitas') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="kapasitas">Kapasitas</label>
                        <input type="text" class="form-control @error('kapasitas') is-invalid @enderror" id="kapasitas" placeholder="Masukkan Kapasitas" name="kapasitas" value="{{old('kapasitas')}}">
                        @error('kapasitas') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                        <input type="hidden" value="{{ $gor->id }}" name="kode_gor">


                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{route('gor.index')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop
