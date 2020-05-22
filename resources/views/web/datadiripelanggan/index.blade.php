@extends('frontend.content')

@section('isi')
<div class="col-md-8 hot-post-left">

@if(Session::has('success'))
		<div class="alert alert-success" role="alert">
		{{ Session('success') }}
		</div>
	@endif
	
	<a href="{{ route('pelanggan.create') }}" class="btn btn-info btn-sm">Tambah data</a>
	<br><br>

	<table class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<tr>
				<th>Username</th>
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
				<td>{{ auth()->user()->name }}</td>
				<td>{{ $p->nama_depan }}</td>
				<td>{{ $p->nama_belakang }}</td>
				<td>{{ $p->jenis_kelamin }}</td>
				<td>{{ $p->alamat }}</td>
				<td>{{ $p->no_telp }}</td>
				<td>
					<form action="#" method="POST">
						@csrf
						@method('delete')
					<a href="{{ route('pelanggan.edit', auth()->user()->id ) }}" class="btn btn-primary btn-sm">Edit</a>
					
					</form>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>

</div>
@endsection