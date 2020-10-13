@extends('template.master')

@section('content')
    <div class="col-12 stretch-card">
        <div class="card">
            <form action="{{ url('master/user/create/process') }}" method="POST">
                @csrf
                <div class="card-header">
                    <a href="{{ url('/master/user') }}" class="btn btn-link btn-xs"><i class="fa fa-arrow-left"></i></a>
                    <span class="card-title">&nbsp;Tambah Data</span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Username</label>
                            <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" placeholder="Username">
                            <label>Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" placeholder="Nama">
                            <label>Password</label>
                            <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" placeholder="Password">
                            <label>Alamat</label>
                            <textarea name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat') }}" placeholder="Alamat"></textarea>
                            <label>No Telepon</label>
                            <input type="number" name="no_hp" id="no_hp" class="form-control @error('no_hp') is-invalid @enderror" value="{{ old('no_hp') }}" placeholder="No Telepon">
                            <label>Role</label>
                            <select class="form-control" name="level" id="level">
                            	<option value="admin">Admin</option>
                            	<option value="apoteker">Apoteker</option>
                            </select>
                            @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-me pull-right">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scriptfooter')
    @include('master.obat.scriptfooter')
@endpush