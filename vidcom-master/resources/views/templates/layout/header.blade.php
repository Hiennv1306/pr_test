<?php 
    $setting = Cache::get('setting');
    $sliders = DB::table('slider')->where('com','gioi-thieu')->where('status',1)->get();
    $category = DB::table('news_categories')->where('com','dich-vu')->where('status',1)->where('parent_id',0)->get();
    $categori = DB::table('news_categories')->where('com','dao-tao')->where('status',1)->get();
?>
<header>
    <div class="container-fluid infor">
        <div class="container">
            <div class="row title-top">
                <div class="col-xs-6 col-md-2 offset-md-1 col-large-3 title-top1">
                    <div class="email">
                        <p><i class="fa fa-volume-control-phone" aria-hidden="true"></i>{{$setting->phone}}</p>
                    </div>
                </div>
                
                <div class="col-xs-6 col-md-3  col-large-3 title-top1">
                    <div class="email">
                        <p><i class="fa fa-envelope" aria-hidden="true"></i>{{$setting->email}}</p>
                    </div>
                </div>
                <div class="col-xs-6 col-md-3 offset-md-3 col-large-3 icon">
                    <div class="icons">
                        <span><i class="fa fa-facebook" aria-hidden="true"></i></span>
                        <span><i class="fa fa-twitter" aria-hidden="true"></i></span>
                        <span><i class="fa fa-google" aria-hidden="true"></i></span>
                        <span><i class="fa fa-instagram" aria-hidden="true"></i></span>
                    </div>
                </div>
                <div class="img">
                    <img src="{{asset('public/images/logo.png')}}">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        
        <div class="row"> <!-- on the PC -->
            <div class="col-5  col-sm-5 col-md-5 col-large-5">
                <nav class="navbar navbar-expand-md navbar-dark menu-max ">
                    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                        <ul class="navbar-nav mr-auto menu-dad">
                            <li class="nav-item menu-left">
                                <a class="nav-link" href="{{url('')}}">Trang chủ</a>
                            </li>
                            <li class="nav-item menu-left">
                                <a class="nav-link" href="{{url('gioi-thieu')}}">Giới thiệu</a>
                            </li>
                            <li class="nav-item menu-left dropdown hover-li">

                                <a class="nav-link dropdown-toggle" href="{{url('dich-vu/')}}" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dịch vụ</a>
                                <div class="dropdown-menu menu-d" aria-labelledby="dropdown01">
                                    @foreach($category as $cate)
                                    <a class="dropdown-item" href="{{url('dich-vu/'.$cate->alias)}}">{{$cate->name}}</a>
                                    @endforeach
                                </div>
                            </li>
                            
                           
                        </ul>
                       
                    </div>
                </nav>
            </div>
            
            <div class="col-5  col-sm-5 offset-md-2 col-md-5 col-large-5">
                <nav class="navbar navbar-expand-md navbar-dark menu-max  ">
                    <div class="collapse navbar-collapse " id="navbarsExampleDefault">
                        <ul class="navbar-nav mr-auto menu-dad menu-2">
                            <li class="nav-item menu-left dropdown hover-li">

                                <a class="nav-link dropdown-toggle" href="{{url('dao-tao')}}" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Đào tạo</a>
                                <div class="dropdown-menu menu-d" aria-labelledby="dropdown01">
                                    @foreach($categori as $cate)
                                    <a class="dropdown-item" href="{{url('dao-tao/'.$cate->alias)}}">{{$cate->name}}</a>
                                    @endforeach
                                </div>
                            </li>
                            <li class="nav-item menu-left">
                                <a class="nav-link" href="{{url('chuyen-giao')}}"> chuyển giao công nghệ</a>
                            </li>
                            <li class="nav-item menu-left">
                                <a class="nav-link disabled" href="{{url('lien-he')}}">Liên hệ</a>
                            </li>
                           <script type="text/javascript">
                                $('.hover-li').hover(function(){
                                    $(this).find('.dropdown-menu').css('display', 'block');

                                }, function(){
                                    $(this).find('.dropdown-menu').css('display', 'none');
                                });

                            </script>
                            <style type="text/css">
                                .dropdown-menu {
                                    display: none;
                                }
                            </style>
                        </ul>
                       
                    </div>
                </nav>
            </div>
            
        </div>
        <div class="row">
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark mb"> <!-- on the mobile -->
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
             </button>
            <img src="{{asset('public/images/logo-ft.png')}}">
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Trang chủ<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Giới thiệu</a>
                    </li>
                   
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dịch vụ</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link disabled" href="#">Đào tạo </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Chuyển giao công nghệ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Liên hệ</a>
                    </li>
                </ul>
            </div>
        </nav>
        </div>
    </div>
</header>