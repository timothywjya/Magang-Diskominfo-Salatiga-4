@extends('adminlte::page')
@section('title', 'Edit GOR')
@section('content_header')
    <h1 class="m-0 text-dark">Edit GOR</h1>
@stop
@section('content')
    <form action="{{route('gor.update', $gor)}}" method="post">
        @method('PUT')
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama_gor">Nama GOR</label>
                        <input type="text" class="form-control @error('nama_gor') is-invalid @enderror" id="exampleInputnama_gor" placeholder="Nama GOR" name="nama_gor" value="{{$gor->nama_gor ?? old('nama_gor')}}">
                        @error('nama_gor') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="jumlah_tempat">Jumlah Tempat</label>
                        <input type="text" class="form-control @error('jumlah_tempat') is-invalid @enderror" id="exampleInputjumlah_tempat" placeholder="Masukkan Jumlah Tempat" name="jumlah_tempat" value="{{$gor->jumlah_tempat ?? old('jumlah_tempat')}}">
                        @error('jumlah_tempat') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat_gedung">Alamat Gedung</label>
                        <input type="text" class="form-control @error('alamat_gedung') is-invalid @enderror" id="alamat_gedung" placeholder="Masukkan Alamat Gedung" name="alamat_gedung" value="{{$gor->alamat_gedung ?? old('alamat_gedung')}}">
                        @error('alamat_gedung') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="spesifikasi_gedung">Spesifikasi Gor</label>
                        <input type="text" class="form-control @error('spesifikasi_gedung') is-invalid @enderror" id="spesifikasi_gedung" placeholder="Masukkan Spesifikasi Gor" name="spesifikasi_gedung" value="{{$gor->spesifikasi_gedung ?? old('spesifikasi_gedung')}}">
                        @error('spesifikasi_gedung') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="fungsi_gedung">Fungsi Gor</label>
                        <input type="text" class="form-control @error('fungsi_gedung') is-invalid @enderror" id="fungsi_gedung" placeholder="Masukkan Fungsi Gor" name="fungsi_gedung" value="{{$gor->fungsi_gedung ?? old('fungsi_gedung')}}">
                        @error('fungsi_gedung') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                </div>
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
