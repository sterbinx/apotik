@extends('template.master')

@section('content')
    <div class="col-12 stretch-card">
        <div class="card">
            <form action="{{ url('master/obat/update/process') }}" method="POST">
                @csrf
                <div class="card-header">
                    <a href="{{ url('/master/obat') }}" class="btn btn-link btn-xs"><i class="fa fa-arrow-left"></i></a>
                    <span class="card-title">&nbsp;Edit Data</span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Nama Obat</label>
                            <input type="hidden" name="kode_obat" id="kode_obat" value="{{ $data->kode_obat }}">
                            <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ $data->nama_obat }}" placeholder="Nama Obat">
                            @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label>Suplier</label>
                            <input type="text" name="suplier" id="suplier" class="form-control @error('suplier') is-invalid @enderror" value="{{ $data->supplier }}" placeholder="Suplier">
                            @error('suplier')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label>Kategori</label>
                            <select class="form-control select-category @error('kategori') is-invalid @enderror" name="kategori" id="kategori">
                                <option value="{{ $data->id_kategori }}" selected >{{ $data->nama_kategori }}</option>
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
                                <option value="Kapsul" <?php if($data->satuan == 'Kapsul') echo 'selected'?>>Kapsul</option>
                                <option value="Botol" <?php if($data->satuan == 'Botol') echo 'selected'?>>Botol</option>
                                <option value="Tablet" <?php if($data->satuan == 'Tablet') echo 'selected'?>>Tablet</option>
                            </select>
                            @error('satuan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label>Tanggal EXP</label>
                            <input type="date" name="tglexp" id="tglexp" class="form-control @error('tglexp') is-invalid @enderror" value="{{ $data->tanggal_expired }}" placeholder="Suplier">
                            @error('tglexp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label>Stok</label>
                            <input type="number" name="stok" id="stok" class="form-control @error('stok') is-invalid @enderror" value="{{ $data->stok }}" placeholder="Stok">
                            @error('stok')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label>Harga</label>
                            <input type="number" name="harga" id="harga" class="form-control @error('harga') is-invalid @enderror" value="{{ $data->harga_jual }}" placeholder="Harga">
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