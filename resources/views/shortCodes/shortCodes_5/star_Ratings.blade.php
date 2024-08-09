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
                <h3 class="uppercase text-white less-mar-1 title">Star Ratings</h3>
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
          <h4>Star Ratings</h4>
        </div>
        <div class="col-md-6">
          <ol class="breadcrumb">
            <li><a href="/home">Home</a></li>
            <li><a href="#">Shortcodes</a></li>
            <li class="current"><a href="#">Star Ratings</a></li>
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
      <div class="col-md-4 col-sm-12 col-xs-12">
        <div class="text-box white padding-4"> <img src="images/shortcodes/74.jpg" alt="" class="img-responsive">
          <div class="clearfix"></div>
          <br>
          <h4>Glyphicon Star LTR</h4>
          <input type="text" class="rating rating-loading" value="2" data-size="xs" title="">
        </div>
      </div>
      <!--end item-->
      
      <div class="col-md-4 col-sm-12 col-xs-12">
        <div class="text-box white padding-4"> <img src="images/shortcodes/75.jpg" alt="" class="img-responsive">
          <div class="clearfix"></div>
          <br>
          <h4>Glyphicon Heart LTR</h4>
          <input id="input-3" type="text" class="kv-gly-heart rating-loading" value="3.75" data-size="xs" title="">
        </div>
      </div>
      <!--end item-->
      
      <div class="col-md-4 col-sm-12 col-xs-12">
        <div class="text-box white padding-4"> <img src="images/shortcodes/78.jpg" alt="" class="img-responsive">
          <div class="clearfix"></div>
          <br>
          <h4>Glyphicon Star RTL</h4>
          <input type="text" class="kv-fa rating-loading" value="3.5" dir="rtl" data-size="xs" title="">
        </div>
      </div>
      <!--end item-->
      
      <div class="col-divider-margin-3"></div>
      <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="text-box white padding-4"> <img src="images/shortcodes/76.jpg" alt="" class="img-responsive">
          <div class="clearfix"></div>
          <br>
          <h4>Font Awesome Star LTR</h4>
          <input type="text" class="kv-fa rating-loading" value="2" data-size="xs" title="">
        </div>
      </div>
      <!--end item-->
      
      <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="text-box white padding-4"> <img src="images/shortcodes/77.jpg" alt="" class="img-responsive">
          <div class="clearfix"></div>
          <br>
          <h4>Glyphicon Heart LTR</h4>
          <input id="input-3" type="text" class="kv-gly-heart rating-loading" value="3.75" data-size="xs" title="">
        </div>
      </div>
      <!--end item-->
      
      <div class="col-divider-margin-3"></div>
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="text-box white padding-4">
          <h4>Star Sizes LTR</h4>
          <input type="text" class="kv-fa rating-loading" value="3.75" data-size="xl" title="">
          <br>
          <input type="text" class="kv-fa rating-loading" value="2.5" data-size="lg" title="">
          <br>
          <input type="text" class="kv-fa rating-loading" value="1.75" data-size="md" title="">
          <br>
          <input type="text" class="kv-fa rating-loading" value="4" data-size="sm" title="">
          <br>
          <input type="text" class="kv-fa rating-loading" value="2" data-size="xs" title="">
        </div>
      </div>
      <!--end item-->
      
      <div class="col-divider-margin-3"></div>
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="text-box white padding-4">
          <h4 class="pull-right">Star Sizes RTL</h4>
          <div class="clearfix"></div>
          <input type="text" class="kv-fa rating-loading" value="3.75" dir="rtl" data-size="xl" title="">
          <div class="clearfix"></div>
          <br>
          <input type="text" class="kv-fa rating-loading" value="2.5" dir="rtl" data-size="lg" title="">
          <div class="clearfix"></div>
          <br>
          <input type="text" class="kv-fa rating-loading" value="1.75" dir="rtl" data-size="md" title="">
          <div class="clearfix"></div>
          <br>
          <input type="text" class="kv-fa rating-loading" value="4" dir="rtl" data-size="sm" title="">
          <div class="clearfix"></div>
          <br>
          <input type="text" class="kv-fa rating-loading" value="2" dir="rtl" data-size="xs" title="">
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