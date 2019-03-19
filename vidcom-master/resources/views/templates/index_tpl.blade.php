@extends('index')
@section('content')

@include('templates.layout.slider')
<content>
    <div class="container wow fadeInUp">
        <div class="row content-1">
            <div class="col-xs-12 col-sm-12 col-md-12 col-large-12 text-1">
                <h1>DỊCH VỤ <span>SPA</span></h1>
                <p>Dịch vụ mang lại sự hài lòng cho khách hàng</p>
            </div>
            <div class="col-xs-2 col-sm-2 offset-md-5 col-md-2 col-large-2 img-1">
                <img src="{{asset('public/images/icondv.png')}}">
            </div>      
        </div>
        <div class="row">
            @foreach(@$news as $s)
            <div class="col-xs-12 col-sm-6 col-md-4 col-large-4 dv-1">
                <div class="dv-img">
                    <img src="{{asset('upload/news/'.$s->photo)}}">
                </div>
                <div class="dv-text">
                    <h2>{{$s->name}}</h2>
                    <p>{!! $s->mota !!}</p>
                    <a href="{{url('dich-vu/'.$s->alias.'.html')}}"><button type="button" class="btn btn-warning">Learn more</button></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="container-fluid gt wow fadeInUp">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-large-6 gt-img">
                <img src="{{asset('upload/hinhanh/'.$about->photo)}}">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-large-6 gt-text text-1">
                <h1><span>Giới thiệu</span> về chúng tôi</h1>
                <!-- <p>Dịch vụ mang lại sự hài lòng cho khách hàng</p> -->
                <div class="img-gt">
                    <img src="{{asset('public/images/icondv.png')}}">
                </div>
                <div class="p">{!! $about->mota !!}</div>
                <!-- <button type="button" class="btn btn-warning gt-bt">Xem thêm</button> -->
                <p><a class="btn btn-warning gt-bt" href="{{url('gioi-thieu')}}" title="">Xem thêm</a></p>
            </div>
        </div>
    </div>
    <div class="container wow fadeInUp ">
        <div class="row content-1">
            <div class="col-xs-12 col-sm-12 col-md-12 col-large-12 text-1">
                <h1>Đào tạo</h1>
              <!--   <p>Dịch vụ mang lại sự hài lòng cho khách hàng</p> -->
            </div>
            <div class="col-xs-2 col-sm-2 offset-md-5 col-md-2 col-large-2 img-1">
                <img src="{{asset('public/images/icondv.png')}}">
            </div>      
        </div>
        <div class="row content-dt">
            @foreach(@$news2 as $n2)
            <div class="col-xs-4 col-sm-4 col-md-4 col-large-4">
                <div class="dt-img">
                    <img src="{{asset('upload/news/'.$n2->photo)}}">
                </div>
                <div class="dt-text">
                    <h3>{{ $n2->name }}</h3>
                    <p>{!! $n2->mota !!}</p>
                    <a href="{{url('dao-tao/'.$n2->alias)}}"><button type="button" class="btn btn-warning gt-bt">Click here</button></a>
                </div>
            </div>
            @endforeach     
            
        </div>
    </div>
    <div class="container-fluid ct wow fadeInUp">
        <div class="container">
            <div class="row content-1 content4">
                <div class="col-xs-12 col-sm-12 col-md-12 col-large-12 text-1 text-ct">
                    <h1>Chuyển giao <span>công nghệ</span></h1>
                    <p>Dịch vụ mang lại sự hài lòng cho khách hàng</p>
                </div>
                <div class="col-xs-2 col-sm-2 offset-md-5 col-md-2 col-large-2 img-1">
                    <img src="{{asset('public/images/icondv.png')}}">
                </div>      
            </div>
                <div class="row content-dt">
                <div class="col-xs-4 col-sm-4 col-md-4 col-large-4">
                    <div class="dt-img">
                        <img src="{{asset('public/images/dt.png')}}">
                    </div>
                    <div class="dt-text ct-text">
                        <h3>Yoga & Media Courses</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <a href=""><button type="button" class="btn btn-warning gt-bt">Click here</button></a>
                    </div>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-large-4">
                    <div class="dt-img">
                        <img src="{{asset('public/images/dt2.png')}}">
                    </div>
                    <div class="dt-text ct-text">
                        <h3>Yoga & Media Courses</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <a href=""><button type="button" class="btn btn-warning gt-bt">Click here</button></a>
                    </div>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-large-4">
                    <div class="dt-img">
                        <img src="{{asset('public/images/dt3.png')}}">
                    </div>
                    <div class="dt-text ct-text">
                        <h3>Yoga & Media Courses</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <a href=""><button type="button" class="btn btn-warning gt-bt">Click here</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row content-1">
            <div class="col-xs-12 col-sm-12 col-md-12 col-large-12 text-1">
                <h1><span>Khách hàng</span> nói về chúng tôi</h1>
                <p>Dịch vụ mang lại sự hài lòng cho khách hàng</p>
            </div>
            <div class="col-xs-2 col-sm-2 offset-md-5 col-md-2 col-large-2 img-1">
                <img src="{{asset('public/images/icondv.png')}}">
            </div>      
        </div>
        <div class="row cmt-max">
            <div class="col-xs-12 col-sm-4 col-md-4 col-large-4 cmt">
                <div class="cmt-min">
                    <div><i class="fa fa-quote-left i" aria-hidden="true"></i></div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <div class="comment">
                        <img src="{{asset('public/images/cmt.png')}}">
                        <h3>Hiến</h3>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-large-4 cmt">
                <div class="cmt-min">
                    <div><i class="fa fa-quote-left i" aria-hidden="true"></i></div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <div class="comment">
                        <img src="{{asset('public/images/cmt.png')}}">
                        <h3>Hiến</h3>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-large-4 cmt">
                <div class="cmt-min">
                    <div><i class="fa fa-quote-left i" aria-hidden="true"></i></div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <div class="comment">
                        <img src="{{asset('public/images/cmt.png')}}">
                        <h3>Hiến</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</content>
@endsection
