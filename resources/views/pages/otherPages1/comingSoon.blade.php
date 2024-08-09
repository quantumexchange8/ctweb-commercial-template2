@extends('layout.master')

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
              <h3 class="uppercase text-white less-mar-1 title">Coming Soon</h3>
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
          <h4>Coming Soon</h4>
        </div>
        <div class="col-md-6">
          <ol class="breadcrumb">
            <li><a href="/home">Home</a></li>
            <li><a href="#">Pages</a></li>
            <li class="current"><a href="#">Coming Soon</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<!--end section-->



<div class="parallax vertical-align" data-parallax-bg-image="images/parallax/4.jpg" data-parallax-speed="0.9" data-parallax-direction="down">
<div class="parallax-overlay primary">
      <div class="container sec-tpadding-3 sec-bpadding-3">
      <div class="row">
      
        <div class="col-md-12">
    <div class="countdown_holder">
    <h1 class=" text-white uppercase font-weight-7">Coming Soon</h1><br>
      <div id="clock"></div>
      <br>
      <h4 class="text-white">Our website is under construction. We`ll be here soon with our new web site, get notified at launch.</h4>
    </div>
    
  </div>
  <!--end timer-->

      </div>
  </div>
    </div>

</div>
<div class="clearfix"></div>
<!-- end section -->
@endsection

@section('footer')
@include('home.home.home_Footer')
@endsection