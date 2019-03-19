@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $banner = DB::table('banner_content')->where('position', 5)->first();
?>
<!-- @include('templates.layout.slider') -->
<content>
    <div class="container" style="margin-top: 110px;">
        <div class="row">
            <div class="col-md-4">
                <p class="name_vn" style="color: #3b749d;font-weight: bold;font-size: 20px;">{{$setting->name}}</p>
            
                <p>{{$setting->address}}</p>
                <p>Số điện thoại:<br>- Kinh doanh: {{$setting->phone}}<br> - Kế toán: {{$setting->hotline}}</p>
                <p>Fax: {{$setting->fax}}</p>
                <p>Email: {{$setting->email}}</p>
            </div>

            <div class="col-md-8">
                <form id="contactForm" name="sentMessage" action="" method="post" style="height: 550px;padding: 15px;">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input style="height: 60px;" class="input-validation-error form-control form-input" data-val="true" data-val-required="Nhập họ tên" id="nam" name="name" placeholder="Họ tên của bạn" type="text" required="">
                                <p class="help-block text-danger"></p>
                            </div>
                             <div class="form-group">
                                <input style="height: 60px;" class="input-validation-error form-control form-input" data-val="true" data-val-required="Số điện thoại" id="PhoneNumber" name="phone" placeholder="Số điện thoại của bạn" type="text" required="">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input style="height: 60px;" class="input-validation-error form-control form-input" data-val="true" data-val-required="Nhập vào email của bạn" id="emails" name="email" placeholder="Email" type="text" required="">
                            </div>
                             <div class="form-group">
                                <input style="height: 60px;" class="input-validation-error form-control form-input" data-val="true" data-val-required="Nhập tên công ty" id="chude" name="company" placeholder="Tên công ty" type="text">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <textarea class="form-control" rows="3" name="content" style="height: 270px;" placeholder="Tin nhắn" required=""></textarea>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="success"></div>
                            <button style="margin-top: 5px;" id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Gửi yêu cầu</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row" style="margin-top: 40px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.474646231184!2d105.81102181450446!3d21.013686036006664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab6238fb8737%3A0xb290fea70e3a698a!2zMTAxIEzDoW5nIEjhuqE!5e0!3m2!1svi!2s!4v1527135985184"
                width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
            <!--iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.6502688613436!2d105.79285461450348!3d20.966555386032137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acd80bb1e491%3A0x6730e7f7ba227b3d!2zMWEgWcOqbiBYw6EsIFTDom4gVHJp4buBdSwgSMOgIMSQw7RuZywgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1524817121016" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe-->
        </div>
    </div>
</content>
@endsection
