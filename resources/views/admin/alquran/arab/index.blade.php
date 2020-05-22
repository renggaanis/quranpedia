@extends('template_backend.home')
@section('sub-judul','Text arab')
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
				<th style="text-align: center;">Text Arab</th>
				<th>Audio</th>
				<th>Action</th>
			</tr> 
		</thead>
		<tbody>
			@foreach ($arab as $result => $hasil)
			
			
			<tr>
				<td>{{ $result + $arab->firstitem() }}</td>
				<td>{{ $hasil->daftarsurat->surat_indonesia }}</td>
				<td align="center">{{ $hasil->VerseID }}</td>
				<td align="right" style="font-family: uthmani; font-size: 25px">{{ $hasil->AyahText }}</td>
				<td><audio controls>
  					<source src="{{ asset('public/assets/audio/'.$hasil->audio) }}" type="audio/mpeg">
					Your browser does not support the audio element.
				</audio></td>
				<td>
					<form action="" method="POST">
						@csrf
						@method('delete')
					<a href="{{ route('arab.edit', $hasil->id ) }}" class="btn btn-primary btn-sm">Edit</a> <!-- btn-primary berarti yang warna biru btn-sm berarrti untuk lebih kecil dari ukuran asli -->
					
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	{{ $arab->links() }}
	<!-- "links" untuk menampilkan paginate, jadi nanti data quran ditampilkan sekian data sesuai paginate pada quran conroller -->

@endsection