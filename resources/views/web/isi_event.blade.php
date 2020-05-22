@extends('frontend.content')

@section('isi')

	@foreach($data as $isi_event)
	<div id="post-header" class="page-header">
		<div class="page-header-bg" style="
		 background-image: url({{asset($isi_event->gambar) }} );"

		 data-stellar-background-ratio="0.5"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-10">
					<h1>{{ $isi_event->judul }}</h1>
					<ul class="post-meta">
						<li><a href="#">{{ $isi_event->users->name }}</a></li>
						<li>{{ $isi_event->created_at }}</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</header>
<div class="col-md-8 hot-post-left">
		<div class="section-row">
			<br>
		{!! $isi_event->content !!}
		</div>
	@endforeach

		</div>

@endsection