@extends('template_backend.home')
@section('sub-judul','arti')
<!-- penerapan dari yield sub-judul. sehingga nanti sub judulnya menjadi arti-->
@section('content')

	@if(Session::has('success'))
		<div class="alert alert-success" role="alert">
		{{ Session('success') }}
		</div>
	@endif
	
	<br><br>

	<table class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th style="width: 15%">Nama Surat</th>
				<th style="width:7%">Ayat ke</th>
				<th>Arti</th>
				<th>Action</th>
			</tr> 
		</thead>
		<tbody>
			@foreach ($indo as $result => $hasil)
			
			
			<tr>
				<td>{{ $result + $indo->firstitem() }}</td>
				<td>{{ $hasil->daftarsurat->surat_indonesia }}</td>
				<td align="center">{{ $hasil->VerseID }}</td>
				<td>{{ $hasil->AyahText }}</td>
				<td>
					<form action="" method="POST">
						@csrf
						@method('delete')
					<a href="{{ route('indo.edit', $hasil->id ) }}" class="btn btn-primary btn-sm">Edit</a> <!-- btn-primary berarti yang warna biru btn-sm berarrti untuk lebih kecil dari ukuran asli -->
					
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	{{ $indo->links() }}
	<!-- "links" untuk menampilkan paginate, jadi nanti data indo ditampilkan sekian data sesuai paginate pada indo conroller -->

@endsection