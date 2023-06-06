@extends('adminlte::page')
@section('title', 'Tambah GOR')
@section('content_header')
    <h1 class="m-0 text-dark">Tambah GOR</h1>
@stop
@section('content')
    <form action="{{route('gor.store')}}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama_gor">Nama GOR</label>
                        <input type="text" class="form-control @error('nama_gor') is-invalid @enderror" id="nama_gor" placeholder="Masukkan Nama GOR" name="nama_gor" value="{{old('nama_gor')}}">
                        @error('nama_gor') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="jumlah_tempat">Jumlah Tempat / Lapangan</label>
                        <input type="text" class="form-control @error('jumlah_tempat') is-invalid @enderror" id="jumlah_tempat" placeholder="Masukkan Jumlah Tempat" name="jumlah_tempat" value="{{old('jumlah_tempat')}}">
                        @error('jumlah_tempat') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat_gedung">Alamat Gedung</label>
                        <input type="text" class="form-control @error('alamat_gedung') is-invalid @enderror" id="alamat_gedung" placeholder="Masukkan Alamat GOR" name="alamat_gedung" value="{{old('alamat_gedung')}}">
                        @error('alamat_gedung') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="spesifikasi_gedung">Spesifikasi GOR</label>
                        <input type="text" class="form-control @error('spesifikasi_gedung') is-invalid @enderror" id="spesifikasi_gedung" placeholder="Masukkan Spesifikasi GOR" name="spesifikasi_gedung" value="{{old('spesifikasi_gedung')}}">
                        @error('spesifikasi_gedung') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="fungsi_gedung">Fungsi GOR</label>
                        <input type="text" class="form-control @error('fungsi_gedung') is-invalid @enderror" id="fungsi_gedung" placeholder="Masukkan Fungsi GOR" name="fungsi_gedung" value="{{old('fungsi_gedung')}}">
                        @error('fungsi_gedung') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <b>Foto Gedung</b><br/>
                        <input type="file" name="foto_gedung">
                        <p>File dalam bentuk Gambar</p>
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
