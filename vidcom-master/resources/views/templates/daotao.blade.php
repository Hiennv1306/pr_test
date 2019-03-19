
@extends('index')
@section('content')
@include('templates.layout.slider')
<content>
	<div class="container">
		<div class="row content-1">
			<div class="col-xs-12 col-sm-12 col-md-12 col-large-12 text-1">
				<h1>Đào tạo</h1>
				<!-- <p>Dịch vụ mang lại sự hài lòng cho khách hàng</p> -->
			</div>
			<div class="col-xs-2 col-sm-2 offset-md-5 col-md-2 col-large-2 img-1">
				<img src="{{asset('public/images/icondv.png')}}">
			</div>		
		</div>
		<div class="row content-dt">
			@foreach($daotao as $data)
			 <div class="col-xs-12 col-sm-6 col-md-4 col-large-4 dv-1">
                <div class="dv-img">
                    <a href="{{url('dao-tao/'.$data->alias.'.html')}}" title=""><img src="{{ asset('upload/news/'.$data->photo) }}"></a>
                </div>
                <div class="dv-text">
                    <h2>{{$data->name}}</h2>
                    <p>{!! $data->mota !!}</p>
                    <p><a href="{{url('dao-tao/'.$data->alias.'.html')}}" class="btn btn-warning" title="">Chi tiết</a></p>
                </div>
            </div>
			@endforeach
		</div>
	</div>
</content>
@endsection