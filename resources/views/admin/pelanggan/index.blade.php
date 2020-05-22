@extends('template_backend.home')
@section('sub-judul','pelanggan')
<!-- penerapan dari yield sub-judul. sehingga nanti sub judulnya menjadi pelanggan-->
@section('content')

	@if(Session::has('success'))
		<div class="alert alert-success" role="alert">
		{{ Session('success') }}
		</div>
	@endif
	
	<a href="{{ route('pelanggan.create') }}" class="btn btn-info btn-sm">Tambah pelanggan</a>
	<br><br>

	<table class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Depan</th>
				<th>Nama Belakang</th>
				<th>Jenis Kelamin</th>
				<th>Alamat</th>
				<th>Action</th>
			</tr> 
		</thead>
		<tbody>
			@foreach ($pelanggan as $result => $hasil)
			<!-- foreaach untuk menampilkan data -->
			<!-- $pelanggan sesuai dengan $pelanggan pada file pelanggancontroller -->
			<tr>
				<td>{{ $result + $pelanggan->firstitem() }}</td>
				<!-- first item untuk penomoran pada tabel -->
				<td><a href="{{ route('pelanggan.profile', $hasil->id )}}">{{ $hasil->nama_depan }}</a></td>
				<td><a href="{{ route('pelanggan.profile', $hasil->id )}}">{{ $hasil->nama_belakang }}</a></td>
				<td>{{ $hasil->jenis_kelamin }}</td>
				<td>{{ $hasil->alamat }}</td>
				<td>
					<form action="{{ route('pelanggan.destroy', $hasil->id) }}" method="POST">
						@csrf
						@method('delete')
					<a href="{{ route('pelanggan.edit', $hasil->id ) }}" class="btn btn-primary btn-sm">Edit</a> <!-- btn-primary berarti yang warna biru btn-sm berarrti untuk lebih kecil dari ukuran asli -->
					<button type="submit" class="btn btn-danger btn-sm">Delete</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	{{ $pelanggan->links() }}
	<!-- "links" untuk menampilkan paginate, jadi nanti data pelanggan ditampilkan sekian data sesuai paginate pada pelanggan conroller -->

@endsection