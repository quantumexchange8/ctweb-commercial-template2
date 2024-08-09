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
    <h3 class="uppercase text-white less-mar-1 title">Breadcrumbs</h3>
    <h6 class="uppercase text-white sub-title">Get Many More Features</h6>
    </div>
       </div>       
        </div></div>        
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
              <h4>Breadcrumbs</h4>
            </div>
            <div class="col-md-6">
              <ol class="breadcrumb">
                <li><a href="/home">Home</a></li>
                <li><a href="#">Shortcodes</a></li>
                <li class="current"><a href="#">Breadcrumbs</a></li>
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
  
  <div class="col-md-12 text-center">
  <h5 class="uppercase">Triangle breadcrumbs</h5>
  <br>
  <ul class="breadcrumbs-1">
    <li><a href="">Home</a></li>
    <li><a href="">Shortcodes</a></li>
    <li><a href="">Breadcrumb</a></li>
    <li><a href="">Breadcrumb 1</a></li>
    <li><a href="" class="current">Current Crumb</a></li>
</ul>

<div class="clearfix"></div>
<div class="col-divider-margin-6"></div>

<h5 class="uppercase">Triangle dark breadcrumbs</h5>
  <br>
  
<ul class="breadcrumbs-1 dark">
    <li><a href="">Home</a></li>
    <li><a href="">Shortcodes</a></li>
    <li><a href="">Breadcrumb</a></li>
    <li><a href="">Breadcrumb 1</a></li>
    <li><a href="" class="current">Current Crumb</a></li>
</ul>

<div class="clearfix"></div>
<div class="col-divider-margin-6"></div>

<h5 class="uppercase">breadcrumbs with Custom Icons</h5>
  <br> 
 <ol class="breadcrumbs-2">
                <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></li>
                 <li><a href="#"><i class="fa fa-th" aria-hidden="true"></i> Gallery</a><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></li>
                  <li><a href="#"><i class="fa fa-paint-brush" aria-hidden="true"></i> Projects</a><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></li>
                <li class="current"><a href="#"><i class="fa fa-envira" aria-hidden="true"></i> Business</a></li>
              </ol>
              
              
<div class="clearfix"></div>
<div class="col-divider-margin-6"></div>

<h5 class="uppercase">breadcrumbs with Separator</h5>
  <br> 
 <ol class="breadcrumbs-2">
                <li><a href="#"> Home</a><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></li>
                 <li><a href="#"> Gallery</a><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></li>
                  <li><a href="#"> Projects</a><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></li>
                <li class="current"><a href="#"><i class="fa fa-envira" aria-hidden="true"></i> Business</a></li>
              </ol>
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