@extends('template_backend.home')
@section('sub-judul','Edit event')
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

	<form action="{{ route('event.update', $event->id ) }}" method="POST" enctype="multipart/form-data">
	@csrf
	@method('PATCH')
	<div class="form-group">
		<label>Judul</label>
		<input type="text" class="form-control" name="judul" value="{{ $event->judul }}">
	</div>
	<div class="form-group">
		<label>Konten event</label>
		<textarea class="form-control" name="content">{{ $event->content }}</textarea>
	</div>
	<div class="form-group">
		<label>Thumbnail</label>
		<input type="file" class="form-control" name="gambar">
	</div>

	<div class="form-group">
		<button class="btn btn-primary btn-block">Update event</button>
	</div>
	
	</form>
@endsection

@section('js')
 <script>
    CKEDITOR.replace( 'content' );
 </script>
 @endsection