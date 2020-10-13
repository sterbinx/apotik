@extends('template.master')

@section('content')
    <div class="col-12 stretch-card">
        <div class="card">
            <form action="{{ url('/master/kategori/update/process') }}" method="POST">
                @csrf
                <div class="card-header">
                    <a href="{{ url('/master/kategori') }}" class="btn btn-link btn-xs"><i class="fa fa-arrow-left"></i></a>
                    <span class="card-title">&nbsp;Edit Data</span>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach($getedit as $k)
                        <div class="form-group col-md-6">
                            <label>Username</label>
                            <input type="hidden" name="edit_id" value="{{ $k->id_username}}">
                            <input type="text" name="username" id="edit_username" class="form-control @error('username') is-invalid @enderror" value="{{ $k->username}}" placeholder="Username">
                            @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>

                             <label>Nama</label>
                            
                            <input type="text" name="nama" id="edit_nama" class="form-control @error('nama') is-invalid @enderror" value="{{ $k->nama}}" placeholder="Nama">
                            @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>

                             <label>Alamat</label>
                            
                            <input type="text" name="alamat" id="edit_alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ $k->alamat}}" placeholder="Alamat">
                            @error('alamat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>

                             <label>No Telepon</label>
                            
                            <input type="text" name="no_hp" id="edit_no_hp" class="form-control @error('no_telp') is-invalid @enderror" value="{{ $k->no_hp}}" placeholder="No Telepon">
                            @error('no_telp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>

                             <label>Role</label>
                            
                            <input type="text" name="level" id="edit_level" class="form-control @error('level') is-invalid @enderror" value="{{ $k->level}}" placeholder="Role">
                            @error('level')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        @endforeach
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