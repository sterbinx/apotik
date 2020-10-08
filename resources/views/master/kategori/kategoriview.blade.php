@extends('template.master')

@section('content')
    <div class="col-12 stretch-card">
        <div class="card">
            <div class="card-header">
                <span class="card-title">&nbsp;Data Kategori</span>
                <a class="btn btn-primary btn-add pull-right" type="button" title="Tambah Data" href="kategori/create" style="color: white;">
                    <i class="fa fa-plus"></i> | Add
                </a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3 offset-9">
                        <form action="/master/kategori/search" method="GET">
                            <input class="form-control" type="text" name="search" placeholder="Cari Kategori.." value="{{ old('search') }}">
                        </form>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kategori</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $num = 1;
                        @endphp

                        @foreach($apa as $data)
                            <tr>
                                <td>{{ $num++ }}</td>
                                <td>{{ $data->nama_kategori}}</td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="kategori/update/{{$data->id_kategori}}">Edit</a>

                                    <a class="btn btn-danger btn-sm" href="kategori/delete/{{$data->id_kategori}}">Delete</a>
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