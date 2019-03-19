@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $banner = DB::table('banner_content')->where('position', 2)->first();
?>
<content>
        <div class="container">
            <div class="row content-1">
                <div class="col-xs-12 col-sm-12 col-md-12 col-large-12 text-1">
                    <h1>Danh mục</h1>
                   <!--  <p>Dịch vụ mang lại sự hài lòng cho khách hàng</p> -->
                </div>
                <div class="col-xs-2 col-sm-2 offset-md-5 col-md-2 col-large-2 img-1">
                    <img src="{{asset('public/images/icondv.png')}}">
                </div>      
            </div>
            <div class="row">
                @foreach(@$tintuc as $n )
                <div class="col-xs-12 col-sm-6 col-md-4 col-large-4 dv-1">
                    <div class="dv-img">
                        <img src="{{asset('upload/news/'.$n->photo)}}">
                    </div>
                    <div class="dv-text">
                        <h2>{{ $n->name }}</h2>
                        <p>{{ $n->mota }}</p>
                        <a href=""><button type="button" class="btn btn-warning">Learn more</button></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>      
</content>

@endsection