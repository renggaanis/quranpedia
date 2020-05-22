@extends('template_backend.home')
@section('sub-judul','Tambah Data')
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

	<form action="{{ route('daftarbabsurat.store') }}" method="POST">
		<!-- category.store adalah route untuk melakukan penyimpanan, dan nanti ketika di klik simpan kategori maka akan diarahkan ke category store sesuai dengan function store pada controllers-->
		<!-- method post digunakan untuk mengirimkan data -->
	@csrf
	<!-- csrf  untuk keamanan -->
	<!-- jika tidak disertakan, maka laravel akan memberikan error -->
	<div class="form-group">
		<label>Nama Sub</label>
		<select class="form-control" name="sub_id">
			<option value="" holder>Pilih Sub</option>
			@foreach($daftarbab as $result)
			<option value="{{ $result->id }}">{{ $result->sub }}</option>
			@endforeach
		</select>
	</div>
	
	<div class="form-group">
		<label>Nama Surat</label>
		<select class="form-control"  id="daftarsurat_id">
			<option value="" holder>Pilih Surat</option>
			@foreach($daftarsurat as $result)
			<option value="{{ $result->id }}">{{ $result->surat_indonesia }}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<label>Ayat ke</label>
		<input type="text" class="form-control" name="name">
		<!-- name disini sesuai dengan field name pada tabel kategori -->
	</div>
	
	
	<div class="form-group">
		<button class="btn btn-primary btn-block">Simpan Kategori</button>
	</div>
	
	</form>

@endsection


<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){

		$(document).on('change','.namasurat',function(){
			// console.log("hmm its change");

			var surat_id=$(this).val();
			// console.log(cat_id);
			var div=$(this).parent();

			var op=" ";

			$.ajax({
				type:'get',
				url:'{!!URL::to('cariurutanayat')!!}',
				data:{'id':surat_id},
				success:function(data){
					//console.log('success');

					//console.log(data);

					//console.log(data.length);
					op+='<option value="0" selected disabled>pilih ayat</option>';
					for(var i=0;i<data.length;i++){
					op+='<option value="'+data[i].id+'">'+data[i].VerseID+'</option>';
				   }

				   div.find('.VerseID').html(" ");
				   div.find('.VerseID').append(op);
				},
				error:function(){

				}
			});
		});


	});
</script>
 -->