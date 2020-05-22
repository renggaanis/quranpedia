@extends('template_backend.home')
@section('sub-judul','Edit arti')
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

	<form action="{{ route('indo.update', $indo->id ) }}" method="POST">
	@csrf
	@method('patch')
	<div class="form-group">
		<label>ID SURAT (id surat bisa dilihat pada daftar surat)</label>
		<input type="text" class="form-control" name="daftarsurat_id" value="{{ $indo->daftarsurat->id }}">
		<!-- value indo->name, agar pada form input terdapat data(nama)/ input nama arti tidak kosong  -->
	</div>
	<div class="form-group">
		<label>Arti</label>
		<input type="text" class="form-control" name="AyahText" value="{{ $indo->AyahText}}">
		<!-- value indo->name, agar pada form input terdapat data(nama)/ input nama arti tidak kosong  -->
	</div>

	<div class="form-group">
		<button class="btn btn-primary btn-block">Update arti</button>
	</div>
	
	</form>
@endsection