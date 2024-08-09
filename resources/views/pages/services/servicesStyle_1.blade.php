@extends('layout.master')

<div class="topbar white topbar-padding">
  <div class="container">
    <div class="topbar-left-items">
      <ul class="toplist toppadding pull-left paddtop1">
        <li class="rightl">Customer Care</li>
        <li>(888) 123-4567</li>
      </ul>
    </div>
    <!--end left-->
    
    <div class="topbar-right-items pull-right">
      <ul class="toplist toppadding">
        <li class="lineright"><a href="#">Login</a></li>
        <li class="lineright"><a href="#">Register</a></li>
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        <li class="last"><a href="#"><i class="fa fa-linkedin"></i></a></li>
      </ul>
    </div>
  </div>
</div>

@section('navbar')
@include('home.home3.home3_Navbar')
@endsection

@section('content')
<div class="clearfix"></div>
<section class="section-side-image clearfix">
  <div class="img-holder col-md-12 col-sm-12 col-xs-12">
    <div class="background-imgholder" style="background:url(images/header-inner-1.jpg);"><img class="nodisplay-image" src="images/header-inner-1.jpg" alt=""> </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12 clearfix nopadding">
        <div class="header-inner less-height">
          <div class="overlay">
            <div class="text text-center">
              <h3 class="uppercase text-white less-mar-1 title">Services 1</h3>
              <h6 class="uppercase text-white sub-title">Get Many More Features</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class=" clearfix"></div>
<!--end header section -->

<section>
  <div class="pagenation-holder">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h4>Services 1</h4>
        </div>
        <div class="col-md-6">
          <ol class="breadcrumb">
            <li><a href="/home">Home</a></li>
            <li><a href="#">Pages</a></li>
            <li class="current"><a href="#">Services 1</a></li>
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
      
      
      <div class="col-md-3 col-sm-6">
        <div class="ce-feature-box-15 text-center bottom-margin">
          <div class=" icon-plain-medium"><span class="icon-layers"></span></div>
          <br>
        <h5 class="title font-weight-5">Responsive Design</h5>
          <p class="content">Lorem ipsum dolor sit amet, consectetuer et sit adipiscing justo.</p>
        </div>
      </div>
      <!--end item-->
      
      <div class="col-md-3 col-sm-6">
        <div class="ce-feature-box-15 text-center bottom-margin">
          <div class=" icon-plain-medium"><span class="icon-lock"></span></div>
          <br>
          <h5 class="title font-weight-5">Fully Secure Service</h5>
          <p class="content">Lorem ipsum dolor sit amet, consectetuer et sit adipiscing justo.</p>
        </div>
      </div>
      <!--end item-->
      
      <div class="col-md-3 col-sm-6">
        <div class="ce-feature-box-15 text-center bottom-margin">
          <div class=" icon-plain-medium"><span class="icon-aperture"></span></div>
          <br>
          <h5 class="title font-weight-5">Unlimited Features</h5>
          <p class="content">Lorem ipsum dolor sit amet, consectetuer et sit adipiscing justo.</p>
        </div>
      </div>
      <!--end item-->
      
      <div class="col-md-3 col-sm-6">
        <div class="ce-feature-box-15 text-center bottom-margin">
          <div class=" icon-plain-medium"><span class="icon-alarmclock"></span></div>
          <br>
          <h5 class="title font-weight-5">Excellent Support</h5>
          <p class="content">Lorem ipsum dolor sit amet, consectetuer et sit adipiscing justo.</p>
        </div>
      </div>
      <!--end item--> 
      
    </div>
  </div>
</section>
<div class=" clearfix"></div>
<!--end section-->

<div class="parallax vertical-align" data-parallax-bg-image="images/parallax/1.jpg" data-parallax-speed="0.9" data-parallax-direction="down">
<div class="parallax-overlay bg-opacity-8">
      <div class="container sec-tpadding-2 sec-bpadding-2">
      <div class="row">
        
        <div class="col-sm-12">
        <div class="sec-title-container text-center">
          <h5 class="font-weight-4 less-mar-1 line-height-4 text-primary opacity-9">Our Services</h5>
          <h2 class="font-weight-6 less-mar-1 line-height-5 text-white">Best Popular Services</h2>
          <div class="ce-title-line"></div>
          <h6 class="ce-sub-text text-white raleway">Praesent mattis commodo augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet ligula Etiam .</h6>
        </div>
      </div>
      <div class="clearfix"></div>
      <!--end title-->
      
      
         <div class="col-md-3 col-sm-6 col-xs-12 text-left margin-bottom"> <img src="images/17.jpg" alt="" class="img-responsive">
          <div class="ce-feature-box-16">
            <h5 class="title font-weight-5">Responsive Design</h5>
            <p class="content">Lorem ipsum dolor sit amet justo elit consectetuer.</p>
            <br>
            <a class="read-more" href="#">Read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>
        </div>
        <!--end item-->
        
        <div class="col-md-3 col-sm-6 col-xs-12 text-left margin-bottom"> <img src="images/18.jpg" alt="" class="img-responsive">
          <div class="ce-feature-box-16">
            <h5 class="title font-weight-5">Clean & Easy Code</h5>
            <p class="content">Lorem ipsum dolor sit amet justo elit consectetuer.</p>
            <br>
            <a class="read-more" href="#">Read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>
        </div>
        <!--end item-->
        
        <div class="col-md-3 col-sm-6 col-xs-12 text-left margin-bottom"> <img src="images/19.jpg" alt="" class="img-responsive">
          <div class="ce-feature-box-16">
            <h5 class="title font-weight-5">Branding Design</h5>
            <p class="content">Lorem ipsum dolor sit amet justo elit consectetuer.</p>
            <br>
            <a class="read-more" href="#">Read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>
        </div>
        <!--end item-->
        
        <div class="col-md-3 col-sm-6 col-xs-12 text-left margin-bottom"> <img src="images/20.jpg" alt="" class="img-responsive">
          <div class="ce-feature-box-16">
            <h5 class="title font-weight-5">Excellent Support</h5>
            <p class="content">Lorem ipsum dolor sit amet justo elit consectetuer.</p>
            <br>
            <a class="read-more" href="#">Read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>
        </div>
        <!--end item--> 
        
      </div>
  </div>
    </div>

</div>
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