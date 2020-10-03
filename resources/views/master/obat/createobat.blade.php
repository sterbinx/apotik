@extends('template.master')

@section('content')
<div class="col-12 stretch-card">
    <div class="card">
        <form action="{{ url('/master/type/create/process') }}" method="POST">
            @csrf
            <div class="card-header">
                <a href="{{ url('/master/type') }}" class="btn btn-link btn-xs"><i class="fa fa-arrow-left"></i></a>
                <span class="card-title">&nbsp;Tambah Data</span>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Nama Obat</label>
                        <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" placeholder="Nama Obat">
                        @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> 
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Suplier</label>
                        <input type="text" name="suplier" id="suplier" class="form-control @error('suplier') is-invalid @enderror" value="{{ old('suplier') }}" placeholder="Suplier">
                        @error('suplier')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Kategori</label>
                        <select class="form-control select-category @error('kategori') is-invalid @enderror" name="kategori" id="kategori">
                            <option></option>
                        </select>
                        @error('kategori')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> 
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Satuan</label>
                        <select class="form-control select-satuan @error('satuan') is-invalid @enderror" name="satuan" id="satuan">
                            <option></option>
                            <option value="Kapsul">Kapsul</option>
                            <option value="Botol">Botol</option>
                            <option value="Tablet">Tablet</option>
                        </select>
                        @error('satuan')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Tanggal EXP</label>
                        <input type="date" name="tglexp" id="tglexp" class="form-control @error('tglexp') is-invalid @enderror" value="{{ old('tglexp') }}" placeholder="Suplier">
                        @error('tglexp')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Stok</label>
                        <input type="number" name="stok" id="stok" class="form-control @error('stok') is-invalid @enderror" value="{{ old('stok') }}" placeholder="Stok">
                        @error('stok')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Harga</label>
                        <input type="number" name="harga" id="harga" class="form-control @error('harga') is-invalid @enderror" value="{{ old('harga') }}" placeholder="Harga">
                        @error('harga')
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