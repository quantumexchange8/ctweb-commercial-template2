@extends('layout.master')

<div class="topbar topbar-padding">
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
@include('pages.team.teamCreative_Navbar')
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
              <h3 class="uppercase text-white less-mar-1 title">Team Creative</h3>
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
          <h4>Team Creative</h4>
        </div>
        <div class="col-md-6">
          <ol class="breadcrumb">
            <li><a href="/home">Home</a></li>
            <li><a href="#">Pages</a></li>
            <li class="current"><a href="#">Team Creative</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<!--end section-->


<section class="sec-padding section-light">
  <div class="container">
    <div class="row">
      
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="cp-feature-box-1">
          <div class="img-box">
            <div class="text-box">
              <div class="sc-icons-box">
                <ul class="sc-icons">
                  <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a class="active" href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
              <h5 class="uppercase raleway less-mar-1 title">Isabella</h5>
              <p class="text-primary">Designer</p>
              <p class="padding-top-1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo.</p>
            </div>
            <div class="overlay"></div>
            <img src="images/p8.png" alt="" class="img-responsive"> </div>
        </div>
      </div>
      <!--end item-->
      
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="cp-feature-box-1">
          <div class="img-box">
            <div class="text-box">
              <div class="sc-icons-box">
                <ul class="sc-icons">
                  <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a class="active" href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
              <h5 class="uppercase raleway less-mar-1 title">Matthew</h5>
              <p class="text-primary">Developer</p>
              <p class="padding-top-1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo.</p>
            </div>
            <div class="overlay"></div>
            <img src="images/p9.png" alt="" class="img-responsive"> </div>
        </div>
      </div>
      <!--end item-->
      
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="cp-feature-box-1">
          <div class="img-box">
            <div class="text-box">
              <div class="sc-icons-box">
                <ul class="sc-icons">
                  <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a class="active" href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
              <h5 class="uppercase raleway less-mar-1 title">Charlotte</h5>
              <p class="text-primary">Support</p>
              <p class="padding-top-1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo.</p>
            </div>
            <div class="overlay"></div>
            <img src="images/p10.png" alt="" class="img-responsive"> </div>
        </div>
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
@include('pages.team.teamCreative_Footer')
@endsection