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
                <h3 class="uppercase text-white less-mar-1 title">Images</h3>
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
          <h4>Images</h4>
        </div>
        <div class="col-md-6">
          <ol class="breadcrumb">
            <li><a href="/home">Home</a></li>
            <li><a href="#">Shortcodes</a></li>
            <li class="current"><a href="#">Images</a></li>
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
      <h4>Rounded Images</h4>
      <p> Use the <code>border-radius</code> property to create rounded images: </p>
      <br>
      <div class="col-md-6"> <img src="images/shortcodes/48.jpg" alt="" class="img-responsive img-rounded"> </div>
      <!--end item-->
      
      <div class="col-md-6"> <img src="images/shortcodes/49.jpg" alt="" class="img-responsive img-rounded"> </div>
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
      <h4>Rounded Images</h4>
      <p> Use the <code>border-radius</code> property to create rounded images: </p>
      <br>
      <div class="col-md-4"> <img src="images/shortcodes/52.jpg" alt="" class="img-responsive img-circle"> </div>
      <!--end item-->
      
      <div class="col-md-4"> <img src="images/shortcodes/53.jpg" alt="" class="img-responsive img-circle"> </div>
      <!--end item-->
      
      <div class="col-md-4"> <img src="images/shortcodes/52.jpg" alt="" class="img-responsive img-circle"> </div>
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
      <h4>Thumbnail Images</h4>
      <p> Use the <code>border</code> property to create thumbnail images. </p>
      <br>
      <div class="col-md-6">
        <h5>Thumbnail Image:</h5>
        <img src="images/shortcodes/48.jpg" alt="" class="img-responsive img-thubnail"> </div>
      <!--end item-->
      
      <div class="col-md-6">
        <h5>Thumbnail Image as Link:</h5>
        <a href="#" class="img-thumbnail-link"><img src="images/shortcodes/49.jpg" alt="" class="img-responsive"></a> </div>
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
      <h4>Polaroid Images / Cards</h4>
      <br>
      <div class="col-md-6">
        <div class="polaroid"> <img src="images/shortcodes/48.jpg" alt="Norway" style="width:100%">
          <div class="text">
            <h5>The Troll's tongue in Hardanger, Norway</h5>
          </div>
        </div>
      </div>
      <!--end item-->
      
      <div class="col-md-6">
        <div class="polaroid"> <img src="images/shortcodes/49.jpg" alt="Norway" style="width:100%">
          <div class="text">
            <h5>The Troll's tongue in Hardanger, Norway</h5>
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