@extends('template_backend.home')
@section('sub-judul','Tambah event')
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

	<form action="{{ route('event.store') }}" method="POST" enctype="multipart/form-data">
	@csrf
	<div class="form-group">
		<label>Judul</label>
		<input type="text" class="form-control" name="judul">
	</div>
	<div class="form-group">
		<label>Konten</label>
		<textarea class="form-control" name="content"></textarea>
	</div>
	<div class="form-group">
		<label>Thumbnail</label>
		<input type="file" class="form-control" name="gambar">
	</div>

	<div class="form-group">
		<button class="btn btn-primary btn-block">Simpan event</button>
	</div>
	
	</form>
@endsection

@section('js')
 <script>
    CKEDITOR.replace( 'content' );
 </script>
 @endsection