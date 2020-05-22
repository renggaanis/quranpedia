@extends('template_backend.home')
@section('sub-judul','Kategori')
<!-- penerapan dari yield sub-judul. sehingga nanti sub judulnya menjadi kategori-->
@section('content')

	@if(Session::has('success'))
		<div class="alert alert-success" role="alert">
		{{ Session('success') }}
		</div>
	@endif
	
	<a href="{{ route('category.create') }}" class="btn btn-info btn-sm">Tambah Kategori</a>
	<!-- route disini digunakan untuk apabila mengklik tambah kategori maka akan diarahkan ke views create folder kategori -->
	<!-- berkaitan dengan category controllers function create -->
	<br><br>

	<table class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Kategori</th>
				<th>Action</th>
			</tr> 
		</thead>
		<tbody>
			@foreach ($category as $result => $hasil)
			<!-- foreaach untuk menampilkan data -->
			<!-- $category sesuai dengan $category pada file categorycontroller -->
			<tr>
				<td>{{ $result + $category->firstitem() }}</td>
				<!-- first item untuk penomoran pada tabel -->
				<td>{{ $hasil->name }}</td>
				<td>
					<form action="{{ route('category.destroy', $hasil->id) }}" method="POST">
						@csrf
						@method('delete')
					<a href="{{ route('category.edit', $hasil->id ) }}" class="btn btn-primary btn-sm">Edit</a> <!-- btn-primary berarti yang warna biru btn-sm berarrti untuk lebih kecil dari ukuran asli -->
					<button type="submit" class="btn btn-danger btn-sm">Delete</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	{{ $category->links() }}
	<!-- "links" untuk menampilkan paginate, jadi nanti data category ditampilkan sekian data sesuai paginate pada category conroller -->

@endsection