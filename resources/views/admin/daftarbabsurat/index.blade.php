@extends('template_backend.home')
@section('sub-judul','daftar bab')
<!-- penerapan dari yield sub-judul. sehingga nanti sub judulnya menjadi daftarbab-->
@section('content')

	@if(Session::has('success'))
		<div class="alert alert-success" role="alert">
		{{ Session('success') }}
		</div>
	@endif
	
	<a href="{{ route('daftarbabsurat.create') }}" class="btn btn-info btn-sm">Tambah Data</a>
	<!-- route disini digunakan untuk apabila mengklik tambah kategori maka akan diarahkan ke views create folder kategori -->
	<!-- berkaitan dengan category controllers function create -->
	<br><br>

	<table class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama sub</th>
				<th>Nama Surat</th>
				<th>Ayat ke- </th>
				<th>Arti</th>
				<th>Arab</th>
				<th>Audio</th>
			</tr> 
		</thead>
		<tbody>
			@foreach ($daftarbabsurat as $result => $hasil)
			<!-- foreaach untuk menampilkan data -->
			<!-- $daftarbab sesuai dengan $daftarbab pada file daftarbabcontroller -->
			<tr>
				<td>{{ $result + $daftarbabsurat->firstitem() }}</td>
				<td>{{ $hasil->daftarbab->sub }}</td>
				<td>{{ $hasil->daftarsurat->surat_indonesia}}</td>
				<td>{{ $hasil->indo->VerseID}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	{{ $daftarbabsurat->links() }}
	<!-- "links" untuk menampilkan paginate, jadi nanti data daftarbab ditampilkan sekian data sesuai paginate pada daftarbab conroller -->

@endsection