@extends('adminlte::page')

@section('title', 'Info Gedung')

@section('content_header')
    <h1 class="m-0 text-dark">Info Gedung</h1>
@stop

@section('content')
                    <table class='table table-striped table-hover'>
                        <tr>
                            <td>Nama GOR</td>
                            <td>{{ $gor->nama_gor}}</td>
                        </tr>
                        <tr>
                            <td>Jumlah Tempat</td>
                            <td>{{ $gor->jumlah_tempat}}</td>
                        </tr>
                        <tr>
                            <td>Alamat Gedung</td>
                            <td>{{ $gor->alamat_gedung}}</td>
                        </tr>
                        <tr>
                            <td>Spesifikasi Gedung</td>
                            <td>{{ $gor->spesifikasi_gedung}}</td>
                        </tr>
                        <tr>
                            <td>Fungsi Gedung</td>
                            <td>{{ $gor->fungsi_gedung}}</td>
                        </tr>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="{{route('gor.index')}}" class="btn btn-default">
                        Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop
