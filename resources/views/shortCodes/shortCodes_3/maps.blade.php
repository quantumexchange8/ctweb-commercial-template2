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
                <h3 class="uppercase text-white less-mar-1 title">Maps</h3>
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
          <h4>Maps</h4>
        </div>
        <div class="col-md-6">
          <ol class="breadcrumb">
            <li><a href="/home">Home</a></li>
            <li><a href="#">Shortcodes</a></li>
            <li class="current"><a href="#">Maps</a></li>
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
      <div class="col-md-6">
        <h4>Default View</h4>
        <br>
        <div class="gmaps-holder">
          <div id="map" class="map">
            <p>This will be replaced with the Google Map.</p>
          </div>
        </div>
      </div>
      <!--end item-->
      
      <div class="col-md-6">
        <h4>Custom Controls and Map Type</h4>
        <br>
        <div class="gmaps-holder">
          <div id="map_controls" class="map">
            <p>This will be replaced with the Google Map.</p>
          </div>
        </div>
      </div>
      <!--end item--> 
      
    </div>
  </div>
</section>
<div class="clearfix"></div>
<!-- end section -->

<section class="sec-padding section-light">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h4>Markers</h4>
        <br>
        <div class="gmaps-holder noborder bg-white">
          <div id="map_addresses" class="map">
            <p>This will be replaced with the Google Map.</p>
          </div>
        </div>
      </div>
      <!--end item-->
      
      <div class="col-md-6">
        <h4>Kitchen Sink - Extended Usage</h4>
        <br>
        <div class="gmaps-holder">
          <div id="map_extended" class="map">
            <p>This will be replaced with the Google Map.</p>
          </div>
        </div>
      </div>
      <!--end item--> 
      
    </div>
  </div>
</section>
<div class="clearfix"></div>
<!-- end section -->

<section class="sec-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h4>Google Hybrid Map</h4>
        <br>
        <div class="gmaps-holder">
          <div id="map_controls_hybrid" class="map">
            <p>This will be replaced with the Google Map.</p>
          </div>
        </div>
      </div>
      <!--end item-->
      
      <div class="col-md-6">
        <h4>Google Satellite Map</h4>
        <br>
        <div class="gmaps-holder">
          <div id="map_controls_satellite" class="map">
            <p>This will be replaced with the Google Map.</p>
          </div>
        </div>
      </div>
      <!--end item--> 
      
    </div>
  </div>
</section>
<div class="clearfix"></div>
<!-- end section -->

<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h4>Full Width Google Map</h4>
      </div>
      <!--end item--> 
      
    </div>
  </div>
</section>
<div class="clearfix"></div>
<!-- end section -->

<section>
  <div class="container-fluid">
    <div class="row">
      <div class="gmaps-holder-2">
        <div class="col-md-12 nopadding"> <br>
          <div id="map_extended_full" class="map">
            <p>This will be replaced with the Google Map.</p>
          </div>
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
@include('home.home.home_Footer')
@endsection