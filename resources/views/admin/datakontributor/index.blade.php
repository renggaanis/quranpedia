@extends('template_backend.home')
@section('sub-judul','Kontributor')
@section('content')

	@if(Session::has('success'))
		<div class="alert alert-success" role="alert">
		{{ Session('success') }}
		</div>
	@endif 


	<table id="table-datatables" class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nama Depan</th>
				<th>Nama Belakang</th>
				<th>Jenis Kelamin</th>
				<th>No. Ktp</th>
				<th>Alamat</th>
				<th>No. Telp/Hp</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($kontributor as $k)
			<tr>
				<td>{{ $k->id }}</td>
				<td>{{ $k->nama_depan }}</td>
				<td>{{ $k->nama_belakang }}</td>
				<td>{{ $k->jenis_kelamin}}</td>
				<td>{{ $k->no_ktp }}</td>
				<td>{{ $k->alamat }}</td>
				<td>{{ $k->no_telp }}</td>
				<td>
					<form action="{{ route('datakontributor.destroy', $k->id) }}" method="POST">
						@csrf
						@method('delete')
					<a href="{{ route('datakontributor.edit', $k->id ) }}" class="btn btn-primary btn-sm">Edit</a> <!-- btn-primary berarti yang warna biru btn-sm berarrti untuk lebih kecil dari ukuran asli -->
					<button type="submit" class="btn btn-danger btn-sm">Delete</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	

@endsection
