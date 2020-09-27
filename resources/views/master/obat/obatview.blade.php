@extends('template.master')

@section('content')
<div class="col-12 stretch-card">
    <div class="card">
    	<div class="card-header">
    		<span class="card-title">&nbsp;Data Obat</span>
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
                            <th>Nama</th>
                            <th>Supplayer</th>
                            <th>Kategori</th>
                            <th>Satuan</th>
                            <th>Tanggal EXP</th>
                            <th>Stok</th>
                            <th>Harga</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $num = 1;
                        @endphp

                        @foreach($obat as $key => $value)
                        <tr>
                            <td>{{ $num++ }}</td>
                            <td>{{ $value->nama_obat }}</td>
                            <td>{{ $value->supplier }}</td>
                            <td>{{ $value->nama_kategori }}</td>
                            <td>{{ $value->satuan }}</td>
                            <td>{{ $value->tanggal_expired }}</td>
                            <td>{{ $value->stok }}</td>
                            <td>{{ $value->harga_jual }}</td>
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