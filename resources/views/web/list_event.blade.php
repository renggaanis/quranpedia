@extends('frontend.content')
@section('isi')
<div class="col-md-8 hot-post-left">
		

		@foreach($data as $list_event)
					<div class="post post-row">
						<a class="post-img" href="{{route('web.isievent', $list_event->slug)}}"><img src="{{ asset($list_event->gambar)}}" alt="{{$list_event->judul }}"></a>
						<div class="post-body">
							<h3 class="post-title"><a href="{{route('web.isievent', $list_event->slug)}}">{{$list_event->judul }}</a></h3>
							<ul class="post-meta">
								<li><a href="#">{{$list_event->creator }}</a></li>
								<li>{{$list_event->created_at }}</li>
							</ul>
						</div>
					</div>
			
			
				@endforeach
				<center>	{{ $data->links() }} </center>
				</div>
@endsection 