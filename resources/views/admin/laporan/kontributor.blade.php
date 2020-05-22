@extends('template_backend.home')
@section('sub-judul','Laporan Kontributor')
<!-- penerapan dari yield sub-judul. sehingga nanti sub judulnya menjadi kategori-->
@section('content')

	@if(Session::has('success'))
		<div class="alert alert-success" role="alert">
		{{ Session('success') }}
		</div>
	@endif

	<table id="table-datatables" class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Username</th>
				<th>Nama Depan</th>
				<th>Nama Belakang</th>
				<th>Jenis Kelamin</th>
				<th>No. KTP</th>
				<th>Alamat</th>
				<th>No.telp</th>
				<th>Email</th>
			</tr> 
		</thead>
		<tbody>
			@foreach ($kontributor as $result => $k)
			<tr>
				<td>{{ $result + 1 }}</td>
				<td>{{ $k->name }}</td>
				<td>{{ $k->nama_depan }}</td>
				<td>{{ $k->nama_belakang }}</td>
				<td>{{ $k->jenis_kelamin }}</td>
				<td>{{ $k->no_ktp }}</td>
				<td>{{ $k->alamat }}</td>
				<td>{{ $k->no_telp }}</td>
				<td>{{ $k->email }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

@endsection