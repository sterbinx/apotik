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
                            <label>Nama Kategori</label>
                            <input type="hidden" name="edit_id" value="{{ $k->id_kategori}}">
                            <input type="text" name="nama" id="edit_nama" class="form-control @error('nama') is-invalid @enderror" value="{{ $k->nama_kategori}}" placeholder="Nama Kategori">
                            @error('nama')
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