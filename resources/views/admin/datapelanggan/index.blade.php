@extends('template_backend.home')
@section('sub-judul','Data pelanggan')
@section('content')

@if(Session::has('success'))
		<div class="alert alert-success" role="alert">
		{{ Session('success') }}
		</div>
	@endif
	
<!-- 	<a href="{{ route('pelanggan.create') }}" class="btn btn-info btn-sm">Tambah data</a> -->
	<br><br>

	<table id="table-datatables" class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nama Depan</th>
				<th>Nama Belakang</th>
				<th>Jenis Kelamin</th>
				<th>Alamat</th>
				<th>No. Telp/Hp</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($pelanggan as $p)
			<tr>
				<td>{{ $p->users_id }}</td>
				<td>{{ $p->nama_depan }}</td>
				<td>{{ $p->nama_belakang }}</td>
				<td>{{ $p->jenis_kelamin }}</td>
				<td>{{ $p->alamat }}</td>
				<td>{{ $p->no_telp }}</td>
				<td>
					<form action="{{ route('datapelanggan.destroy', $p->id) }}" method="POST">
						@csrf
						@method('delete')
					<a href="{{ route('datapelanggan.edit', $p->id ) }}" class="btn btn-primary btn-sm">Edit</a> <!-- btn-primary berarti yang warna biru btn-sm berarrti untuk lebih kecil dari ukuran asli -->
					<button type="submit" class="btn btn-danger btn-sm">Delete</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</div>
@endsection
