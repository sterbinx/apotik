@extends('template.master')

@section('content')
    <div class="col-12 stretch-card">
        <div class="card">
            <form action="{{ url('/master/kategori/create/process') }}" method="POST">
                @csrf
                <div class="card-header">
                    <a href="{{ url('/master/kategori') }}" class="btn btn-link btn-xs"><i class="fa fa-arrow-left"></i></a>
                    <span class="card-title">&nbsp;Tambah Data</span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Nama Kategori</label>
                            <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" placeholder="Nama Kategori">
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