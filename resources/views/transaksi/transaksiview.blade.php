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
                            <th>Customer</th>
                            <th>Tgl Transaksi</th>
                            <th>Total Harga</th>
                            <th>Total Bayar</th>
                            <th>Opsi</th>
                        </tr>
                        </thead>
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