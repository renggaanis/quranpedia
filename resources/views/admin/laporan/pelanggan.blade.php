@extends('template_backend.home')
@section('sub-judul','Laporan Pelanggan')
<!-- penerapan dari yield sub-judul. sehingga nanti sub judulnya menjadi kategori-->
@section('content')

	@if(Session::has('success'))
		<div class="alert alert-success" role="alert">
		{{ Session('success') }}
		</div>
	@endif

	<table id="table-datatables" class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<tr style="text-align: center">
				<th>No</th>
				<th>Username</th>
				<th>Nama Depan</th>
				<th>Nama Belakang</th>
				<th>Jenis Kelamin</th>
				<th>Alamat</th>
				<th>No.telp</th>
				<th>Email</th>
				<th>No. Akun Gopay</th>
				<th>jumlah Donasi</th>
			</tr> 
		</thead>
		<tbody>
			@foreach ($pelanggan as $result => $u)
			<tr>
				<td>{{ $result + 1 }}</td>
				<td>{{ $u->name }}</td>
				<td>{{ $u->nama_depan }}</td>
				<td>{{ $u->nama_belakang }}</td>
				<td>{{ $u->jenis_kelamin }}</td>
				<td>{{ $u->alamat }}</td>
				<td>{{ $u->no_telp }}</td>
				<td>{{ $u->email }}</td>
				<td>{{ $u->akun_gopay }}</td>
				<td>{{ $u->jumlah_donasi }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

@endsection