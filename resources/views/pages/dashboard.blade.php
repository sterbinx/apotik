<!DOCTYPE html>
<html>
<head>
	<title>Asu</title>
</head>
<body>
	<table border="1" cellpadding="10">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Obat</th>
				<th>Supplier</th>
				<th>Kategori</th>
				<th>Satuan</th>
				<th>Kadaluarsa</th>
				<th>Stok</th>
				<th>Harga Jual</th>
			</tr>
		</thead>

		<tbody>
			@if(count($info) > 0)

			@php
			$num = 1;
			@endphp

			@foreach($info as $key => $value)
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
			@else
			<tr>
				<td>No item found baka!</td>
			</tr>
			@endif
		</tbody>


	</table>
</body>
</html>