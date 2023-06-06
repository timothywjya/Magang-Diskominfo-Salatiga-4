@extends('adminlte::page')

@section('title', 'List Arena')

@section('content_header')
    <h1 class="m-0 text-dark">List Arena</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <a href="/arena/create/{{ $id }}" class="btn btn-primary mb-2">
                        Tambah
                    </a>

                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Arena</th>
                            <th>Kode Gor</th>
                            <th>Fasilitas</th>
                            <th>Kapasitas</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                        @foreach($arena as $key => $arena)
                            <td>{{$key+1}}</td>
                            <td>{{$arena->nama_arena}}</td>
                            <td>{{$arena->kode_gor}}</td>
                            <td>{{$arena->fasilitas}}</td>
                            <td>{{$arena->kapasitas}}</td>
                        <td>
                                    <a href="{{route('arena.show', $arena)}}" class="btn btn-primary btn-xs">
                                        Info
                                    </a>
                                    <a href="{{route('arena.edit', $arena)}}" class="btn btn-primary btn-xs">
                                        Edit
                                    </a>
                                    <a href="{{route('arena.destroy', $arena)}}" onclick="notificationBeforeDelete(event, this)" class="btn btn-danger btn-xs">
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
