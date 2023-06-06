@extends('adminlte::page')

@section('title', 'Info Arena')

@section('content_header')
    <h1 class="m-0 text-dark">Info Arena</h1>
@stop

@section('content')
                    <table class='table table-striped table-hover'>
                        <tr>
                            <td>Nama Arena</td>
                            <td>{{ $arena->nama_arena}}</td>
                            <td>{{ $arena->kode_gor}}</td>
                            <td>{{ $arena->fasilitas}}</td>
                            <td>{{ $arena->kapasitas}}</td>
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