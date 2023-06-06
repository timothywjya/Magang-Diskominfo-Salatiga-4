@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@stop

@section('content')

<h1 class="m-0 text-dark">Data Pinjaman</h1>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <form action="{{ url('konfirmasistore', $peminjaman->id) }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Peminjam</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputEmail3" name="nama"
                                                required="required" value="{{$peminjaman->nama_peminjam}}"
                                                placeholder="Nama">
                                        </div>
                                    </div>
                                    {{-- <input type="hidden" name="user_gmail" value="{{$data1[0]->gmail}}"> --}}
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">No Hp</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputEmail3" name="nama"
                                                required="required" value="{{$peminjaman->no_hp}}" placeholder="Nama">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Keperluan</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputEmail3" name="nama"
                                                required="required" value="{{$peminjaman->keperluan}}" placeholder="Nama">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Waktu Awal</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="waktu_awal" id="date" class="form-control"
                                                style="width: 100%; display: inline;"
                                                value="{{($peminjaman->waktu_awal)->isoFormat('D MMMM Y h:mm:ss a');}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Waktu Akhir</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="waktu_akhir" id="date2" class="form-control"
                                                style="width: 100%; display: inline;"
                                                value="{{($peminjaman->waktu_akhir)->isoFormat('D MMMM Y h:mm:ss a');}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Gor dipinjam</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputEmail3" name="gor_dipinjam_id"
                                                required="required" value="{{$peminjaman->Gor->nama_gor}}" placeholder="Nama">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Arena dipinjam</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputEmail3" name="arena_dipinjam_id"
                                                required="required" value="{{$peminjaman->Arena->nama_arena}}" placeholder="Nama">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
                                        <div class="col-sm-10">
                                            <select id="status" name="status">
                                                <option value="<?php echo $peminjaman->status;?>" hidden>
                                                    <?php echo ucwords($peminjaman->status); ?></option>
                                                <option value="terima">terima</option>
                                                <option value="tolak">tolak</option>
                                                <option value="pending">pending</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <input type="submit" class="btn btn-primary" value="Konfirmasi">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

        @stop
