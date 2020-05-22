 @extends('template_backend.home')
@section('sub-judul','Tambah daftarbab')
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

	<form action="{{ route('daftarbab.store') }}" method="POST">
		<!-- daftarbab.store adalah route untuk melakukan penyimpanan, dan nanti ketika di klik simpan daftarbab maka akan diarahkan ke daftarbab store sesuai dengan function store pada controllers-->
		<!-- method post digunakan untuk mengirimkan data -->
	@csrf
	<!-- csrf  untuk keamanan -->
	<!-- jika tidak disertakan, maka laravel akan memberikan error -->
	<div class="form-group">
		<label>Nama Bab</label>
		<select class="form-control" name="category_id">
			<option value="" holder>Pilih Bab</option>
			@foreach($category as $result)
			<option value="{{ $result->id }}">{{ $result->name }}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<label>Nama Sub bab</label>
		<input type="text" class="form-control" name="namasubbab">
		<!-- name disini sesuai dengan field name pada tabel daftarbab -->
	</div>
	<div class="form-group">
		<label>Nama Sub</label>
		<input type="text" class="form-control" name="sub">
		<!-- name disini sesuai dengan field name pada tabel daftarbab -->
	</div>

	<div class="form-group">
		<button class="btn btn-primary btn-block">Simpan daftarbab</button>
	</div>
	
	</form>
@endsection