 @extends('template_backend.home')
@section('sub-judul','Edit daftarbab')
@section('content')

	@if(count($errors)>0)
		@foreach($errors->all() as $error)
		<div class="alert alert-danger" role="alert">
			{{ $error}}
		</div>
		@endforeach
	@endif

	@if(Session::has('success'))
		<div class="alert alert-success" role="alert">
		{{ Session('success') }}
		</div>
	@endif

	<form action="{{ route('daftarbab.update', $daftarbab-> id ) }}" method="POST">
	@csrf
	@method('patch')
	<div class="form-group">
		<label>Nama Bab</label>
		<select class="form-control" name="category_id">
			<option value="" holder>Bab kategori</option>
			@foreach($category as $result)
			<option value="{{ $result->id }}"
			@if ($result->id == $daftarbab->category_id)
				selected
			@endif
				>{{ $result->name }}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<label>nama subbab</label>
		<input type="text" class="form-control" name="namasubbab" value="{{ $daftarbab->namasubbab }}">
		<!-- value daftarbab->name, agar pada form input terdapat data(nama)/ input nama daftarbab tidak kosong  -->

	</div>

	<div class="form-group">
		<label>nama sub</label>
		<input type="text" class="form-control" name="sub" value="{{ $daftarbab->sub }}">
		<!-- value daftarbab->name, agar pada form input terdapat data(nama)/ input nama daftarbab tidak kosong  -->

	</div>

	<div class="form-group">
		<button class="btn btn-primary btn-block">Update daftarbab</button>
	</div>
	
	</form>
@endsection