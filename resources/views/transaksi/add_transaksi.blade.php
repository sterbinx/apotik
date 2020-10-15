@extends('template.master')

@section('content')
    <div class="col-12 stretch-card">
        <div class="card">
            <form action="{{ url('/transaksi/create/process') }}" method="POST">
                @csrf
                <div class="card-header">
                    <a href="{{ url('/transaksi') }}" class="btn btn-link btn-xs"><i class="fa fa-arrow-left"></i></a>
                    <span class="card-title">&nbsp;Edit Data</span>
                </div>
                <div class="card-body">
                    <div class="row">
                        {{--<label>Detail Transaksi</label>--}}
                        <input type="hidden" name="edit_Transaksi" value="">
                        <br>
                        <div class="col-md-6 form-group">
                            <label>Kode Obat</label>
                            <select class="form-control select-obat" name="kode_obat" id="kode_obat">
                                <option></option>
                            </select>
                            <input type="hidden" id="harga" name="harga">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Jumlah Obat</label>
                            <input type="number" name="jumlah_obat" id="jumlah_obat" class="form-control @error('jumlah_obat') is-invalid @enderror" value="" placeholder="Jumlah Obat">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Sub Total</label>
                            <input type="number" readonly name="sub_total" id="sub_total" class="form-control @error('sub_total') is-invalid @enderror" value="" placeholder="Sub Total">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Total Bayar</label>
                            <input type="number" name="total_bayar" id="total_bayar" class="form-control @error('total_bayar') is-invalid @enderror" value="" placeholder="Total Bayar">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Kembalian</label>
                            <input type="number" readonly name="kembalian" id="kembalian" class="form-control @error('kembalian') is-invalid @enderror" value="" placeholder="Kembalian">
                        </div>
                        @error('nama')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
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