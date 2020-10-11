@extends('template.master')

@section('content')
    <div class="col-12 stretch-card">
        <div class="card">
            <div class="card-header">
                <span class="card-title">&nbsp;Data Transaksi</span>
                <a class="btn btn-primary btn-add pull-right" type="button" title="Tambah Data" style="color: white;">
                    <i class="fa fa-plus"></i> | Add
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Detail Transaksi</th>
                            <th>Kode Obat</th>
                            <th>ID Transaksi</th>
                            <th>Harga</th>
                            <th>Jumlah Obat</th>
                            <th>Sub Total</th>
                            <th>Pot</th>
                            <th>Opsi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $num = 1;
                        @endphp

                        @foreach($detail as $anjim)
                            <tr>
                                <td>{{ $num++ }}</td>
                                <td>{{ $anjim->id_detailTransaksi}}</td>
                                <td>{{ $anjim->kode_obat}}</td>
                                <td>{{ $anjim->id_transaksi}}</td>
                                <td>{{ $anjim->harga}}</td>
                                <td>{{ $anjim->jumlah_obat}}</td>
                                <td>{{ $anjim->sub_total}}</td>
                                <td>{{ $anjim->pot}}</td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="transaksi/update_transaksi/{{$anjim->id_detailTransaksi}}">Edit</a>

                                    <a class="btn btn-danger btn-sm" href="transaksi/delete/{{$anjim->id_detailTransaksi}}">Delete</a>
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