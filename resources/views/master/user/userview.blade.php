@extends('template.master')

@section('content')
    <div class="col-12 stretch-card">
        <div class="card">
            <div class="card-header">
                <span class="card-title">&nbsp;Data User</span>
                <a class="btn btn-primary btn-add pull-right" type="button" title="Tambah Data" href="user/create" style="color: white;">
                    <i class="fa fa-plus"></i> | Add
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No Telepon</th>
                            <th>Role</th>
                            <th>Opsi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                        $num = 1;
                        @endphp

                        @foreach($pwpb as $key)
                        <tr>
                            <td>{{ $num++ }}</td>
                            <td>{{ $key->username }}</td>
                            <td>{{ $key->nama }}</td>
                            <td>{{ $key->alamat }}</td>
                            <td>{{ $key->no_hp }}</td>
                            <td>{{ $key->level }}</td>
                            <td>
<<<<<<< HEAD
=======
                                {{--<a class="btn btn-primary btn-sm" href="user/update/{{$key->id_user}}">Edit</a>--}}
>>>>>>> 9fc4cd408ff7175b94f4d3c8976f3fc979a4af78
                                <a class="btn btn-danger btn-sm" href="user/delete/{{$key->id_user}}">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">

            </div>
        </div>
    </div>
@endsection

@push('scriptfooter')

@endpush