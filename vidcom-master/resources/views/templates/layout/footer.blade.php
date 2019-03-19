<?php
    $setting = Cache::get('setting');
    $categories = DB::table('product_categories')->where('status',1)->where('parent_id',0)->get();
?>
<footer>
        <div class="container-fluid footer">
            <div class="container">
                <div class="row footer-ft">
                    <div class="col-xs-4 col-sm-4 col-xs-4 col-large-4 ft">
                        <div class="lg-ft">
                            <img src="{{asset('public/images/logo-ft.png')}}">
                        </div>
                        <div class="if">
                            <p>Email: anhien@xxxx<br>
                               Phone: 12345566<br>
                               Address: Lò gạch lò vôi  
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-xs-4 col-large-4 ft-text ft">
                        <h3>Feedback form</h3>
                        <form  action="" method="post"> 
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Name" id="usr">
                            </div>
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Email" id="pwd">
                            </div>
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Phone" id="pwd">
                            </div>
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Messgers" id="pwd">
                            </div>
                            <a href=""><button type="button" class="btn btn-warning">Submit</button></a>
                        </form>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-xs-4 col-large-4 ft-text ft">
                        <h3>Fanpage</h3>
                        <div class="fb">
                            <div class="fb-page" data-href="https://www.facebook.com/thietkeHThome/" data-tabs="timeline" data-width="300" data-height="200" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/thietkeHThome/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/thietkeHThome/">HTHome</a></blockquote></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </footer>
