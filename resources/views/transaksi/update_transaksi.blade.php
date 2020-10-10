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
                            <label>Nama Kategori</label>
                            <input type="hidden" name="edit_Transaksi" value="{{ $k->id_transaksi}}">

                            <input type="text" name="customer" id="edit_customer" class="form-control @error('customer') is-invalid @enderror" value="{{ $k->Customer}}" placeholder="Customer">
                            <br>
                             <input type="date" name="tanggal" id="edit_tanggal_transaksi" class="form-control @error('tanggal_transaksi') is-invalid @enderror" value="{{ $k->tanggal_transaksi}}" placeholder="Tanggal Transaksi">
                             <br>
                             <input type="number" name="total_harga" id="edit_total_harga" class="form-control @error('total_harga') is-invalid @enderror" value="{{ $k->total_harga}}" placeholder="Total Harga">
                             <br>
                             <input type="numver" name="total_bayar" id="edit_total_bayar" class="form-control @error('total_bayar') is-invalid @enderror" value="{{ $k->total_bayar}}" placeholder="Total Bayar">

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