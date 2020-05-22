 @extends('template_backend.home')
@section('sub-judul','daftar bab')
<!-- penerapan dari yield sub-judul. sehingga nanti sub judulnya menjadi daftarbab-->
@section('content')

	@if(Session::has('success'))
		<div class="alert alert-success" role="alert">
		{{ Session('success') }}
		</div>
	@endif
	
	<a href="{{ route('daftarbab.create') }}" class="btn btn-info btn-sm">Tambah daftarbab</a>
	<!-- route disini digunakan untuk apabila mengklik tambah daftarbab maka akan diarahkan ke views create folder daftarbab -->
	<!-- berkaitan dengan daftarbab controllers function create -->
	<br><br>

	<table class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama bab</th>
				<th>Nama sub-bab</th>
				<th>Nama sub</th>
				<th>Action</th>
			</tr> 
		</thead>
		<tbody>
			@foreach ($daftarbab as $result => $hasil)
			<!-- foreaach untuk menampilkan data -->
			<!-- $daftarbab sesuai dengan $daftarbab pada file daftarbabcontroller -->
			<tr>
				<td>{{ $result + $daftarbab->firstitem() }}</td>
				<td>{{ $hasil->category->name }}</td>
				<!-- first item untuk penomoran pada tabel -->
				<td>{{ $hasil->namasubbab }}</td>
				<td>{{ $hasil->sub }}</td>
				<td>
					<form action="{{ route('daftarbab.destroy', $hasil->id) }}" method="POST">
						@csrf
						@method('delete')
					<a href="{{ route('daftarbab.edit', $hasil->id ) }}" class="btn btn-primary btn-sm">Edit</a> <!-- btn-primary berarti yang warna biru btn-sm berarrti untuk lebih kecil dari ukuran asli -->
					<button type="submit" class="btn btn-danger btn-sm">Delete</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	{{ $daftarbab->links() }}
	<!-- "links" untuk menampilkan paginate, jadi nanti data daftarbab ditampilkan sekian data sesuai paginate pada daftarbab conroller -->

@endsection