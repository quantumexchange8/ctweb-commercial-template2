@extends('layout.master')

@section('navbar')
@include('home.home8.home8_Navbar')
@endsection

@section('content')
<div class="clearfix"></div>
<div class="header-inner-tmargin">
  <section class="section-side-image clearfix">
    <div class="img-holder col-md-12 col-sm-12 col-xs-12">
      <div class="background-imgholder" style="background:url(images/header-inner-1.jpg);"><img class="nodisplay-image" src="images/header-inner-1.jpg" alt=""> </div>
    </div> 
<div class="container-fluid">
    <div class="row">       
    <div class="col-md-12 col-sm-12 col-xs-12 clearfix nopadding">
    <div class="header-inner"> <div class="overlay">
              <div class="text text-center">
                <h3 class="uppercase text-white less-mar-1 title">Tabs</h3>
                <h6 class="uppercase text-white sub-title">Get Many More Features</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class=" clearfix"></div>
  <!--end section--> 
</div>
<div class="clearfix"></div>
<!--end header inner-->

<section>
  <div class="pagenation-holder">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h4>Tabs</h4>
        </div>
        <div class="col-md-6">
          <ol class="breadcrumb">
            <li><a href="/home">Home</a></li>
            <li><a href="#">Shortcodes</a></li>
            <li class="current"><a href="#">Tabs</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<!--end section-->

<section class="sec-padding">
  <div class="container">
    <div class="row">
      
     <div class="col-md-12 text-center"> <h3 class="uppercase less-mar-1 font-weight-5 raleway">Tab Vertical Left</h3></div>
     <div class="clearfix"></div>
      <br><br>
      <div class="tabs-left1-holder ">
        <div class="col-md-12">
          <ul class="responsive-tabs responsive-tabs-left ">
            <li><a href="#example-2-tab-1" target="_self"> <span class="icon-scissors"></span><br>
              Responsive</a></li>
            <li><a href="#example-2-tab-2" target="_self"><span class="icon-briefcase"></span><br>
              Mobile</a></li>
            <li><a href="#example-2-tab-3" target="_self"><span class="icon-profile-male "></span><br>
              Photography</a></li>
          </ul>
          <div class="responsive-tabs-content responsive-tabs-left bm-larger">
            <div id="example-2-tab-1" class="responsive-tabs-panel">
              <div class="responsive-tab-title"></div>
              <div class="col-md-4"> <img src="images/14.png" alt="" class="img-responsive"> </div>
              <div class="col-md-8">
                <div class="feature-box">
                  <h4 class="raleway">Responsive Design</h4>
                  <h6>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis.</h6>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue Aliquam</p>
                  <br>
                  <div class="iconlist-2">
                    <div class="icon dark"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></div>
                    <div class="text">Vestibulum eleifend, magna sem iaculis risus.</div>
                  </div>
                  <!--end item-->
                  
                  <div class="iconlist-2">
                    <div class="icon dark"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></div>
                    <div class="text">Etiam enim. Suspendisse imperdiet cursus.</div>
                  </div>
                  <!--end item-->
                  
                  <div class="clearfix"></div>
                  <br>
                  <a class="btn btn-dark-3" href="#">Read more</a> </div>
              </div>
              <!--end item--> 
              
            </div>
            <!--end tab 1-->
            
            <div id="example-2-tab-2" class="responsive-tabs-panel">
              <div class="responsive-tab-title"></div>
              <div class="col-md-4"> <img src="images/30.png" alt="" class="img-responsive"> </div>
              <div class="col-md-8">
                <div class="feature-box">
                  <h4 class="raleway">Mobile friendly</h4>
                  <h6>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis.</h6>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue Aliquam</p>
                  <br>
                  <div class="iconlist-2">
                    <div class="icon dark"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></div>
                    <div class="text">Vestibulum eleifend, magna sem iaculis risus.</div>
                  </div>
                  <!--end item-->
                  
                  <div class="iconlist-2">
                    <div class="icon dark"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></div>
                    <div class="text">Etiam enim. Suspendisse imperdiet cursus.</div>
                  </div>
                  <!--end item-->
                  
                  <div class="clearfix"></div>
                  <br>
                  <a class="btn btn-dark-3" href="#">Read more</a> </div>
              </div>
              <!--end item--> 
              
            </div>
            <!--end tab 2-->
            
            <div id="example-2-tab-3" class="responsive-tabs-panel">
              <div class="responsive-tab-title"></div>
              <div class="col-md-4"> <img src="images/52.jpg" alt="" class="img-responsive"> </div>
              <div class="col-md-8">
                <div class="feature-box">
                  <h4 class="raleway">Photography</h4>
                  <h6>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis.</h6>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue Aliquam</p>
                  <br>
                  <div class="iconlist-2">
                    <div class="icon dark"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></div>
                    <div class="text">Vestibulum eleifend, magna sem iaculis risus.</div>
                  </div>
                  <!--end item-->
                  
                  <div class="iconlist-2">
                    <div class="icon dark"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></div>
                    <div class="text">Etiam enim. Suspendisse imperdiet cursus.</div>
                  </div>
                  <!--end item-->
                  
                  <div class="clearfix"></div>
                  <br>
                  <a class="btn btn-dark-3" href="#">Read more</a> </div>
              </div>
              <!--end item--> 
            </div>
            <!--end tab 3--> 
          </div>
        </div>
      </div>
      <!--end tab style 2--> 
      
    </div>
  </div>
</section>
<!--end section-->
<div class="clearfix"></div>


<section class="section-light">
  <div class="container">
    <div class="row sec-padding hl-more-top-padd">
      
      <div class="col-md-12 text-center"> <h3 class="uppercase less-mar-1 font-weight-5 raleway">Tabs Full Width Horizontal</h3></div>
     <div class="clearfix"></div>
      <br><br>
      
      <div class="col-md-12">
        <div class="col-md-12 nopadding">
          <div class="tab-navbar-main tabstyle-9">
            <ul class="responsive-tabs">
              <li><a href="#example-1-tab-1" target="_self"><span class="icon-global"></span> <br>
                PSD</a></li>
              <li><a href="#example-1-tab-2" target="_self"><span class="icon-layers"></span> <br>
                Responsive</a></li>
              <li><a href="#example-1-tab-3" target="_self"><span class="icon-desktop"></span> <br>
                Design</a></li>
              <li><a href="#example-1-tab-4" target="_self"><span class="icon-envelope"></span> <br>
                Clean</a></li>
              <li><a href="#example-1-tab-5" target="_self"><span class="icon-briefcase"></span> <br>
                Graphic</a></li>
              <li><a href="#example-1-tab-6" target="_self"><span class="icon-lock"></span> <br>
                Support</a></li>
            </ul>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="tab-content-holder-9">
          <div class="responsive-tabs-content">
            <div id="example-1-tab-1" class="responsive-tabs-panel">
              <div class="responsive-tab-title ttitle"></div>
              <div class="col-md-7">
                <div class="tabstyle-9-feature-box-2">
                  <h4 class="uppercase">Layered PSD</h4>
                  <h6 class="raleway">Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo augue Aliquam ornare hendrerit augue</h6>
                  <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo augue Aliquam ornare hendrerit augue Cras Lorem ipsum dolor sit amet consectetuer adipiscing eli Suspendisse et justo sit amet justo elite. </p>
                  <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo augue Aliquam ornare hendrerit augue Cras Lorem ipsum dolor. </p>
                  <br>
                  <a class="read-more" href="#">Read more &nbsp; &nbsp;<i class="fa fa-angle-double-right" aria-hidden="true"></i></a></div>
              </div>
              <!--end item-->
              
              <div class="col-md-5 col-sm-5 col-xs-12 margin-bottom">
                <div class="tabstyle-9-feature-box"> <img src="images/24.png" alt="" class="img-responsive"> </div>
              </div>
              <!--end item--> 
            </div>
            <!--end panel 1-->
            
            <div id="example-1-tab-2" class="responsive-tabs-panel">
              <div class="responsive-tab-title ttitle"></div>
              <div class="col-md-5">
                <div class="tabstyle-9-feature-box"> <img src="images/14.png" alt="" class="img-responsive"> </div>
              </div>
              <!--end item-->
              
              <div class="col-md-7 col-sm-7 col-xs-12 margin-bottom">
                <div class="tabstyle-9-feature-box-2">
                  <h4 class="uppercase">Responsive</h4>
                  <h6 class="raleway">Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo augue Aliquam ornare hendrerit augue</h6>
                  <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo augue Aliquam ornare hendrerit augue Cras Lorem ipsum dolor sit amet consectetuer adipiscing eli Suspendisse et justo sit amet justo elite. </p>
                  <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo augue Aliquam ornare hendrerit augue Cras Lorem ipsum dolor. </p>
                  <br>
                  <a class="read-more" href="#">Read more &nbsp; &nbsp;<i class="fa fa-angle-double-right" aria-hidden="true"></i></a></div>
              </div>
              <!--end item--> 
              
            </div>
            <!--end panel 2-->
            
            <div id="example-1-tab-3" class="responsive-tabs-panel">
              <div class="responsive-tab-title ttitle"></div>
              <div class="col-md-7">
                <div class="tabstyle-9-feature-box-2">
                  <h4 class="uppercase">UI Design and mockups</h4>
                  <h6 class="raleway">Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo augue Aliquam ornare hendrerit augue</h6>
                  <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo augue Aliquam ornare hendrerit augue Cras Lorem ipsum dolor sit amet consectetuer adipiscing eli Suspendisse et justo sit amet justo elite. </p>
                  <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo augue Aliquam ornare hendrerit augue Cras Lorem ipsum dolor. </p>
                  <br>
                  <a class="read-more" href="#">Read more &nbsp; &nbsp;<i class="fa fa-angle-double-right" aria-hidden="true"></i></a></div>
              </div>
              <!--end item-->
              
              <div class="col-md-5">
                <div class="tabstyle-9-feature-box"> <img src="images/33.png" alt="" class="img-responsive"> </div>
              </div>
              <!--end item--> 
            </div>
            <!--end panel 3-->
            
            <div id="example-1-tab-4" class="responsive-tabs-panel">
              <div class="responsive-tab-title ttitle"></div>
              <div class="col-md-7">
                <div class="tabstyle-9-feature-box-2">
                  <h4 class="uppercase">Clean Code</h4>
                  <h6 class="raleway">Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo augue Aliquam ornare hendrerit augue</h6>
                  <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo augue Aliquam ornare hendrerit augue Cras Lorem ipsum dolor sit amet consectetuer adipiscing eli Suspendisse et justo sit amet justo elite. </p>
                  <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo augue Aliquam ornare hendrerit augue Cras Lorem ipsum dolor. </p>
                  <br>
                  <a class="read-more" href="#">Read more &nbsp; &nbsp;<i class="fa fa-angle-double-right" aria-hidden="true"></i></a></div>
              </div>
              <!--end item-->
              
              <div class="col-md-5">
                <div class="tabstyle-9-feature-box"> <img src="images/2.jpg" alt="" class="img-responsive"> </div>
              </div>
              <!--end item--> 
            </div>
            <!--end panel 4-->
            
            <div id="example-1-tab-5" class="responsive-tabs-panel">
              <div class="responsive-tab-title ttitle"></div>
              <div class="col-md-7">
                <div class="tabstyle-9-feature-box-2">
                  <h4 class="uppercase">Graphic Design</h4>
                  <h6 class="raleway">Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo augue Aliquam ornare hendrerit augue</h6>
                  <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo augue Aliquam ornare hendrerit augue Cras Lorem ipsum dolor sit amet consectetuer adipiscing eli Suspendisse et justo sit amet justo elite. </p>
                  <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo augue Aliquam ornare hendrerit augue Cras Lorem ipsum dolor. </p>
                  <br>
                  <a class="read-more" href="#">Read more &nbsp; &nbsp;<i class="fa fa-angle-double-right" aria-hidden="true"></i></a></div>
              </div>
              <!--end item-->
              
              <div class="col-md-5">
                <div class="tabstyle-9-feature-box"> <img src="images/4.png" alt="" class="img-responsive"> </div>
              </div>
              <!--end item--> 
            </div>
            <!--end panel 5-->
            
            <div id="example-1-tab-6" class="responsive-tabs-panel">
              <div class="responsive-tab-title ttitle"></div>
              <div class="col-md-7">
                <div class="tabstyle-9-feature-box-2">
                  <h4 class="uppercase">Support</h4>
                  <h6 class="raleway">Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo augue Aliquam ornare hendrerit augue</h6>
                  <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo augue Aliquam ornare hendrerit augue Cras Lorem ipsum dolor sit amet consectetuer adipiscing eli Suspendisse et justo sit amet justo elite. </p>
                  <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo augue Aliquam ornare hendrerit augue Cras Lorem ipsum dolor. </p>
                  <br>
                  <a class="read-more" href="#">Read more &nbsp; &nbsp;<i class="fa fa-angle-double-right" aria-hidden="true"></i></a></div>
              </div>
              <!--end item-->
              
              <div class="col-md-5">
                <div class="tabstyle-9-feature-box"> <img src="images/29.jpg" alt="" class="img-responsive"> </div>
              </div>
              <!--end item--> 
            </div>
          </div>
        </div>
        <!--end column--> 
        
      </div>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<!-- end section -->


<section class="sec-padding">
  <div class="container">
    <div class="row">
      
        <div class="col-md-12 text-center"> <h3 class="uppercase less-mar-1 font-weight-5 raleway">Tabs Half Width</h3></div>
     <div class="clearfix"></div>
      <br><br>
      
      <div class="col-md-6 col-sm-6 col-xs-12 margin-bottom">
        <div class="tab-navbar-main-style-7 tabstyle-7">
          <ul class="responsive-tabs">
            <li><a href="#example-7-tab-1" target="_self">
              <div class="tab-navicon"></div>
              Home Pages</a></li>
            <li><a href="#example-7-tab-2" target="_self">
              <div class="tab-navicon"></div>
              Psd Files </a></li>
            <li><a href="#example-7-tab-3" class="no-border" target="_self">
              <div class="tab-navicon"></div>
              Branding</a></li>
          </ul>
        </div>
        <div class="clearfix"></div>
        <div class="tab-content-style-7">
          <div class="responsive-tabs-content">
            <div id="example-7-tab-1" class="responsive-tabs-panel">
              <div class="responsive-tab-title ttitle"></div>
              <br>
              <h5 class="uppercase">What we Do</h5>
              <h6 class="raleway">Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo.</h6>
              <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattisLorem ipsum dolor sit amet consectetuer sit amet justo et.</p>
              <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattisLorem ipsum dolor sit amet consectetuer</p>
              
              <!--end item--> 
              
            </div>
            <!--end panel 1-->
            <div class="clearfix"></div>
            <br>
            <div id="example-7-tab-2" class="responsive-tabs-panel">
              <div class="responsive-tab-title ttitle"></div>
              <br>
              <h5 class="uppercase">PSD Files</h5>
              <h6 class="raleway">Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo.</h6>
              <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattisLorem ipsum dolor sit amet consectetuer sit amet justo et.</p>
              <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattisLorem ipsum dolor sit amet consectetuer</p>
              
              <!--end item--> 
              
            </div>
            <!--end panel 2-->
            
            <div class="clearfix"></div>
            <br>
            <div id="example-7-tab-3" class="responsive-tabs-panel">
              <div class="responsive-tab-title ttitle"></div>
              <br>
              <h5 class="uppercase">Branding</h5>
              <h6 class="raleway">Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo.</h6>
              <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattisLorem ipsum dolor sit amet consectetuer sit amet justo et.</p>
              <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattisLorem ipsum dolor sit amet consectetuer</p>
              
              <!--end item--> 
              
            </div>
            <!--end panel 3--> 
            
          </div>
        </div>
        <!--end column--> 
        
      </div>
      <!--end item-->
      
       
       
       <div class="col-md-6 col-sm-12 col-xs-12 margin-bottom">
        
        <div class="tab-navbar-main-style-6 tabstyle-6">
          <ul class="responsive-tabs">
            <li><a href="#example-6-tab-1" target="_self">
              <div class="tab-navicon"></div>
              Home Pages</a></li>
            <li><a href="#example-6-tab-2" target="_self">
              <div class="tab-navicon"></div>
              Psd Files </a></li>
            <li><a href="#example-6-tab-3" target="_self">
              <div class="tab-navicon"></div>
              Branding</a></li>
          </ul>
        </div>
        <div class="clearfix"></div>
        <div class="tab-content-style-5">
          <div class="responsive-tabs-content">
            <div id="example-6-tab-1" class="responsive-tabs-panel">
              <div class="responsive-tab-title ttitle"></div>
              <br>
              <h5 class="uppercase">What we Do</h5>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattisLorem ipsum dolor sit amet, consectetuer</p>
              <br>
              <div class="iconlist-2">
                <div class="icon dark"><i class="fa fa-check"></i></div>
                <div class="text">Ut vulputate metus quis urna feugiat sed porta arcu tincidunt.</div>
              </div>
              <!--end item-->
              
              <div class="iconlist-2">
                <div class="icon dark"><i class="fa fa-check"></i></div>
                <div class="text">Integer vitae nibh vitae augue congue tristique. </div>
              </div>
              <!--end item-->
              
              <div class="iconlist-2">
                <div class="icon dark"><i class="fa fa-check"></i></div>
                <div class="text">Praesent sed mauris sed ligula laoreet condimentum. </div>
              </div>
              <!--end item--> 
              
            </div>
            <!--end panel 1-->
            <div class="clearfix"></div>
            <br>
            <div id="example-6-tab-2" class="responsive-tabs-panel">
              <div class="responsive-tab-title ttitle"></div>
              <br>
              <h5 class="uppercase">Layered PSD Files</h5>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattisLorem ipsum dolor sit amet, consectetuer</p>
              <br>
              <div class="iconlist-2">
                <div class="icon dark"><i class="fa fa-check"></i></div>
                <div class="text">Ut vulputate metus quis urna feugiat sed porta arcu tincidunt.</div>
              </div>
              <!--end item-->
              
              <div class="iconlist-2">
                <div class="icon dark"><i class="fa fa-check"></i></div>
                <div class="text">Integer vitae nibh vitae augue congue tristique. </div>
              </div>
              <!--end item-->
              
              <div class="iconlist-2">
                <div class="icon dark"><i class="fa fa-check"></i></div>
                <div class="text">Praesent sed mauris sed ligula laoreet condimentum. </div>
              </div>
              <!--end item--> 
              
            </div>
            <!--end panel 2-->
            
            <div class="clearfix"></div>
            <br>
            
            <div id="example-6-tab-3" class="responsive-tabs-panel">
              <div class="responsive-tab-title ttitle"></div>
              <br>
              <h5 class="uppercase">Branding Design</h5>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattisLorem ipsum dolor sit amet, consectetuer</p>
              <br>
              <div class="iconlist-2">
                <div class="icon dark"><i class="fa fa-check"></i></div>
                <div class="text">Ut vulputate metus quis urna feugiat sed porta arcu tincidunt.</div>
              </div>
              <!--end item-->
              
              <div class="iconlist-2">
                <div class="icon dark"><i class="fa fa-check"></i></div>
                <div class="text">Integer vitae nibh vitae augue congue tristique. </div>
              </div>
              <!--end item-->
              
              <div class="iconlist-2">
                <div class="icon dark"><i class="fa fa-check"></i></div>
                <div class="text">Praesent sed mauris sed ligula laoreet condimentum. </div>
              </div>
              <!--end item--> 
              
            </div>
            <!--end panel 3--> 
            
          </div>
        </div>
        <!--end column--> 
        
      </div>
      <!--end item-->
      
      
    </div>
  </div>
</section>
<div class="clearfix"></div>
<!-- end section -->


   <section class="section-primary">
  <div class="container">
    <div class="divider-line solid light opacity-1"></div>
    <div class="row sec-padding-6">
      <ul class="clients-list grid-cols-5 hover-7 noborder">
        <li><a href="#"><img src="images/clients/6.png" alt=""></a></li>
        <li><a href="#"><img src="images/clients/7.png" alt=""></a></li>
        <li><a href="#"><img src="images/clients/8.png" alt=""></a></li>
        <li><a href="#"><img src="images/clients/9.png" alt=""></a></li>
        <li><a href="#"><img src="images/clients/10.png" alt=""></a></li>
      </ul>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<!-- end section -->
@endsection

@section('footer')
@include('home.home.home_Footer')
@endsection