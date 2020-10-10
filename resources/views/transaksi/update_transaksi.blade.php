@extends('template.master')

@section('content')
    <div class="col-12 stretch-card">
        <div class="card">
            <form action="{{ url('/transaksi/update/process') }}" method="POST">
                @csrf
                <div class="card-header">
                    <a href="{{ url('/transaksi/update') }}" class="btn btn-link btn-xs"><i class="fa fa-arrow-left"></i></a>
                    <span class="card-title">&nbsp;Edit Data</span>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach($getedit as $k)
                        <div class="form-group col-md-6">
                            <label>Detail Transaksi</label>
                            <input type="hidden" name="edit_Transaksi" value="{{ $k->id_detailTransaksi}}">
                                <br>    
                            <label>ID Detail Transaksi</label>
                            <input type="text" name="id_detailTransaksi" id="edit_id_detailTransaksi" class="form-control @error('id_detailTransaksi') is-invalid @enderror" value="{{ $k->id_detailTransaksi}}" placeholder="ID Detail Transaksi">
                            <br>
                            <label>Kode Obat</label>
                             <input type="text" name="kode_obat" id="edit_kode_obat" class="form-control @error('kode_obat') is-invalid @enderror" value="{{ $k->kode_obat}}" placeholder="Kode Obat">
                             <br>
                             <label>ID Transaksi</label>
                             <input type="text" name="id_transaksi" id="edit_id_transaksi" class="form-control @error('id_transaksi') is-invalid @enderror" value="{{ $k->id_transaksi}}" placeholder="ID Transaksi">
                             <br>
                             <label>Harga</label>
                             <input type="number" name="harga" id="edit_harga" class="form-control @error('harga') is-invalid @enderror" value="{{ $k->harga}}" placeholder="Harga">
                                <br>    
                            <label>Jumlah Obat</label>
                             <input type="number" name="jumlah_obat" id="edit_jumlah_obat" class="form-control @error('jumlah_obat') is-invalid @enderror" value="{{ $k->jumlah_obat}}" placeholder="Jumlah Obat">
                                <br>    
                                <label>Sub Total</label>
                             <input type="number" name="sub_total" id="edit_sub_total" class="form-control @error('sub_total') is-invalid @enderror" value="{{ $k->sub_total}}" placeholder="Sub Total">
                                <br>    
                                <label>Pot</label>
                             <input type="number" name="pot" id="edit_pot" class="form-control @error('pot') is-invalid @enderror" value="{{ $k->pot}}" placeholder="Pot">

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
    @include('transaksi.scriptfooter')
@endpush