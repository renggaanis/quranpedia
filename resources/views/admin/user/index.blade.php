@extends('template_backend.home')
@section('sub-judul','user')
@section('content')

	@if(Session::has('success'))
		<div class="alert alert-success" role="alert">
		{{ Session('success') }}
		</div>
	@endif
	<!-- 
	<a href="{{ route('user.create') }}" class="btn btn-info btn-sm">Tambah user</a> -->
	<br><br>

	<table class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama user</th>
				<th>Email</th>
				<th>Avatar</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($user as $result => $hasil)
			<tr>
				<td>{{ $result + $user->firstitem() }}</td>
				<td>{{ $hasil->name }}</td>
				<td>{{ $hasil->email }}</td>
				<td><img src="{{ asset($hasil->avatar) }}" class="img-fluid" style="width: 100px"></td>
				<td>
					<form action="{{ route('user.destroy', $hasil->id) }}" method="POST">
						@csrf
						@method('delete')
					<a href="{{ route('user.edit', $hasil->id ) }}" class="btn btn-primary btn-sm">Edit</a>
					<button type="submit" class="btn btn-danger btn-sm">Delete</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	{{ $user->links() }}

@endsection