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
                <h3 class="uppercase text-white less-mar-1 title">Labels and Badges</h3>
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
          <h4>Labels and Badges</h4>
        </div>
        <div class="col-md-6">
          <ol class="breadcrumb">
            <li><a href="/home">Home</a></li>
            <li><a href="#">Shortcodes</a></li>
            <li class="current"><a href="#">Labels and Badges</a></li>
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
        <h1>Example heading <span class="label label-default">New</span></h1>
        <h2>Example heading <span class="label label-primary">New</span></h2>
        <h3>Example heading <span class="label label-success">New</span></h3>
        <h4>Example heading <span class="label label-info">New</span></h4>
        <h5>Example heading <span class="label label-warning">New</span></h5>
        <h6>Example heading <span class="label label-danger">New</span></h6>
      </div>
      <!--end item--> 
    </div>
  </div>
</section>
<div class="clearfix"></div>
<!-- end section -->

<div class="divider-line solid light"></div>
<section class="sec-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h4>Labels</h4>
        <span class="label label-default">Default</span> <span class="label label-primary">Primary</span> <span class="label label-success">Success</span> <span class="label label-info">Info</span> <span class="label label-warning">Warning</span> <span class="label label-danger">Danger</span> </div>
      <!--end item--> 
    </div>
  </div>
</section>
<div class="clearfix"></div>
<!-- end section -->

<div class="divider-line solid light"></div>
<section class="sec-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h4>Badges</h4>
        <button type="button" class="btn btn-primary">Home <span class="badge">42</span></button>
        <button type="button" class="btn btn-danger">Messages <span class="badge">15</span></button>
        <button type="button" class="btn btn-success">Notifications <span class="badge">26</span></button>
        <button type="button" class="btn btn-info">Tasks <span class="badge">7</span></button>
        <button type="button" class="btn btn-warning">Settings <span class="badge">18</span></button>
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