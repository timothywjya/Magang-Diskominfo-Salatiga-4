@extends('adminlte::page')
@section('title', 'List GOR')
@section('content_header')
    <h1 class="m-0 text-dark">List GOR</h1>
@stop
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{route('gor.create')}}" class="btn btn-primary mb-2">
                        Tambah
                    </a>
                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama GOR</th>
                            <th>Fungsi Gedung</th>
                            <th>Foto Gedung</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($gor as $key => $gor)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td><a href="arena/gor/{{ $gor->id }}" style="color:rgb(50, 163, 38);">{{$gor->nama_gor}}</a></td>
                                <td>{{$gor->fungsi_gedung}}</td>
                                <td> <img id="file-ip-1-preview" src ="{{ route('gor.download', $gor->foto_gedung) }}" width="200px"> </td>
                                <td>
                                    <a href="{{route('gor.show', $gor)}}" class="btn btn-primary btn-xs">
                                        Info
                                    </a>
                                    <a href="{{route('gor.edit', $gor)}}" class="btn btn-primary btn-xs">
                                        Edit
                                    </a>
                                    <a href="{{route('gor.destroy', $gor)}}" onclick="notificationBeforeDelete(event, this)" class="btn btn-danger btn-xs">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
@push('js')
    <form action="" id="delete-form" method="post">
        @method('delete')
        @csrf
    </form>
    <script>
        $('#example2').DataTable({
            "responsive": true,
        });
        function notificationBeforeDelete(event, el) {
            event.preventDefault();
            if (confirm('Apakah anda yakin akan menghapus data ? ')) {
                $("#delete-form").attr('action', $(el).attr('href'));
                $("#delete-form").submit();
            }
        }
    </script>
@endpush
