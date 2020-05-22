@extends('template_backend.home')
@section('sub-judul','event')
@section('content')

	@if(Session::has('success'))
		<div class="alert alert-success" role="alert">
		{{ Session('success') }}
		</div>
	@endif
	
	<a href="{{ route('event.create') }}" class="btn btn-info btn-sm">Tambah Event</a>
	<br><br>

	<table class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama event</th>
				<th>Creator</th>
				<th>Thumbnail</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($event as $result => $hasil)
			<tr>
				<td>{{ $result + $event->firstitem() }}</td>
				<td>{{ $hasil->judul }}</td>
				<td>{{$hasil->users->name }}</td>
				<td><img src="{{ asset($hasil->gambar) }}" class="img-fluid" style="width: 100px"></td>
				<td>
					<form action="{{ route('event.destroy', $hasil->id) }}" method="POST">
						@csrf
						@method('delete')
					<a href="{{ route('event.edit', $hasil->id ) }}" class="btn btn-primary btn-sm">Edit</a>
					<button type="submit" class="btn btn-danger btn-sm">Delete</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	{{ $event->links() }}

@endsection