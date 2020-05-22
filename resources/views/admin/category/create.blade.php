@extends('template_backend.home')
@section('sub-judul','Tambah Kategori')
@section('content')

	@if(count($errors)>0) <!-- jika error validasi ada, maka dilakukan foreach-->
		@foreach($errors->all() as $error)
		<div class="alert alert-danger" role="alert">
			{{ $error}}
			<!-- ini error apabila kolom tidak diisikan atau kurang dari tiga -->
		</div>
		@endforeach
	@endif

	@if(Session::has('success'))
		<div class="alert alert-success" role="alert">
		{{ Session('success') }}
		</div>
	@endif

	<form action="{{ route('category.store') }}" method="POST">
		<!-- category.store adalah route untuk melakukan penyimpanan, dan nanti ketika di klik simpan kategori maka akan diarahkan ke category store sesuai dengan function store pada controllers-->
		<!-- method post digunakan untuk mengirimkan data -->
	@csrf
	<!-- csrf  untuk keamanan -->
	<!-- jika tidak disertakan, maka laravel akan memberikan error -->
	<div class="form-group">
		<label>Kategori</label>
		<input type="text" class="form-control" name="name">
		<!-- name disini sesuai dengan field name pada tabel kategori -->
	</div>

	<div class="form-group">
		<button class="btn btn-primary btn-block">Simpan Kategori</button>
	</div>
	
	</form>
@endsection