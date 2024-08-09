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
    <h3 class="uppercase text-white less-mar-1 title">LightBox</h3>
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
              <h4>LightBox</h4>
            </div>
            <div class="col-md-6">
              <ol class="breadcrumb">
                <li><a href="/home">Home</a></li>
                <li><a href="#">Shortcodes</a></li>
                <li class="current"><a href="#">LightBox</a></li>
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
  
  <div class="col-md-12 no-gutter">
  <h4>Single Image Gallery</h4>
  <br>
  
  <div class="col-md-4">
   <a class="image-popup-vertical-fit" href="images/portfolio/ce3-2.jpg" title="Caption. Can be aligned to any side and contain any HTML.">
	<img src="images/portfolio/ce3-2.jpg" alt="" class="img-responsive">
</a>
  </div>
  <!--end item-->
  
  
    <div class="col-md-4">
  <a class="image-popup-fit-width" href="images/portfolio/ce3-3.jpg" title="This image fits only horizontally.">
	<img src="images/portfolio/ce3-3.jpg" alt="" class="img-responsive">
</a>
  </div>
  <!--end item-->
  
  
     <div class="col-md-4">
<a class="image-popup-no-margins" href="images/portfolio/ce3-5.jpg">
	<img src="images/portfolio/ce3-5.jpg" alt="" class="img-responsive">
</a>
  </div>
  <!--end item-->


  </div>
  <!--end item-->
  
  <div class="clearfix"></div>
  <div class="col-divider-margin-6"></div>
  <div class="divider-line dashed dark opacity-3"></div>
  <div class="col-divider-margin-6"></div>
  <br><br>
  
  <div class="col-md-12">
  <h4>Lightbox gallery</h4>
  <br>
  <div class="popup-gallery no-gutter">
  
	<div class="col-md-4">
    <a href="images/portfolio/ce3-2.jpg" title="">
    <img src="images/portfolio/ce3-2.jpg" alt="" class="img-responsive">
    </a>
    </div>
    <!--end item-->
    
    <div class="col-md-4">
    <a href="images/portfolio/ce3-3.jpg" title="">
    <img src="images/portfolio/ce3-3.jpg" alt="" class="img-responsive">
    </a>
    </div>
    <!--end item-->
    
     <div class="col-md-4">
    <a href="images/portfolio/ce3-5.jpg" title="">
    <img src="images/portfolio/ce3-5.jpg" alt="" class="img-responsive">
    </a>
    </div>
    <!--end item-->   


</div>

  </div>
  <!--end item-->

  </div>
  </div>
  </section>
<div class="clearfix"></div>
  <!-- end section -->
    
  <div class="divider-line dashed dark opacity-3"></div>
  
     
  <section class="sec-padding">
  <div class="container">
  <div class="row">
  
  <h4>Lightbox Video & Map</h4>
  <br>

  <div class="col-md-4">
   <a class="popup-youtube" href="http://www.youtube.com/watch?v=0O2aH4XLbto">
    <img src="images/shortcodes/92.jpg" alt="" class="img-responsive">
    </a>
    <br>
  <h4>YouTube Video</h4>
  </div>
  <!--end item-->
  
 <div class="col-md-4">
   <a class="popup-vimeo" href="https://vimeo.com/45830194">
     <img src="images/shortcodes/93.jpg" alt="" class="img-responsive">
    </a>
    <br>
  <h4>Vimeo Video</h4>
  </div>
  <!--end item--> 
  
  
    <div class="col-md-4">
   <a class="popup-gmaps" href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&hl=en&t=v&hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom">
     <img src="images/shortcodes/94.jpg" alt="" class="img-responsive">
    </a>
    <br>
  <h4>Google Map</h4>
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