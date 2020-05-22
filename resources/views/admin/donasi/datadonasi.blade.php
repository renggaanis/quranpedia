@extends('template_backend.home')
@section('sub-judul','Donasi')
@section('content')

@if(Session::has('success'))
		<div class="alert alert-success" role="alert">
		{{ Session('success') }}
		</div>
	@endif
	<!-- 
	<a href="{{ route('donasi.create') }}" class="btn btn-info btn-sm">Tambah Data Donasi</a> -->
	<!-- route disini digunakan untuk apabila mengklik tambah kategori maka akan diarahkan ke views create folder kategori -->
	<!-- berkaitan dengan category controllers function create -->
	<br><br>

	<table class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Id User</th>
				<th>akun gopay</th>
				<th>jumlah donasi</th><!-- 
				<th>Action</th> -->
			</tr> 
		</thead>
		<tbody>
			@foreach ($donasi as $result => $hasil)
			<!-- foreaach untuk menampilkan data -->
			<!-- $category sesuai dengan $category pada file categorycontroller -->
			<tr>
				<td>{{ $result + $donasi->firstitem() }}</td>
				<!-- first item untuk penomoran pada tabel -->
				<td>{{ $hasil->users_id }}</td>
				<td>{{ $hasil->akun_gopay }}</td>
				<td>{{ $hasil->jumlah_donasi }}</td>
			<!-- 	<td>
					<form action="{{ route('donasi.destroy', $hasil->id) }}" method="POST">
						@csrf
						@method('delete')
					<button type="submit" class="btn btn-danger btn-sm">Delete</button>
					</form>
				</td> -->
			</tr>
			@endforeach
		</tbody>
	</table>
	{{ $donasi->links() }}

@endsection