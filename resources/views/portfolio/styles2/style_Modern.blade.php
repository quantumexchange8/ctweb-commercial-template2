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
              <h3 class="uppercase text-white less-mar-1 title">Portfolio</h3>
              <h6 class="uppercase text-white sub-title"> Portfolio Modern</h6>
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
          <h4>Portfolio Modern</h4>
        </div>
        <div class="col-md-6">
          <ol class="breadcrumb">
            <li><a href="/home">Home</a></li>
            <li><a href="#">Portfolio</a></li>
            <li class="current"><a href="#">Portfolio Modern</a></li>
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
      <div id="js-grid-mosaic" class="cbp cbp-l-grid-mosaic">
        <div class="cbp-item web-design graphic"> <a href="images/portfolio/1.jpg" class="cbp-caption cbp-lightbox" data-title="Bolt UI<br>by Tiberiu Neamu">
          <div class="cbp-caption-defaultWrap"> <img src="images/portfolio/mosaic-pr-sm1.jpg" alt=""> </div>
          <div class="cbp-caption-activeWrap">
            <div class="cbp-l-caption-alignCenter">
              <div class="cbp-l-caption-body">
                <div class="cbp-l-caption-title">Lorem Ipsum</div>
                <div class="cbp-l-caption-desc">by Current Tech</div>
              </div>
            </div>
          </div>
          </a> </div>
        <div class="cbp-item print motion"> <a href="images/portfolio/2.jpg" class="cbp-caption cbp-lightbox" data-title="World Clock Widget<br>by Paul Flavius Nechita">
          <div class="cbp-caption-defaultWrap"> <img src="images/portfolio/mosaic-pr-sm2.jpg" alt=""> </div>
          <div class="cbp-caption-activeWrap">
            <div class="cbp-l-caption-alignCenter">
              <div class="cbp-l-caption-body">
                <div class="cbp-l-caption-title">Lorem Ipsum</div>
                <div class="cbp-l-caption-desc">by Current Tech</div>
              </div>
            </div>
          </div>
          </a> </div>
        <div class="cbp-item print motion"> <a href="images/portfolio/3.jpg" class="cbp-caption cbp-lightbox" data-title="WhereTO App<br>by Tiberiu Neamu">
          <div class="cbp-caption-defaultWrap"> <img src="images/portfolio/mosaic-pr-big1.jpg" alt=""> </div>
          <div class="cbp-caption-activeWrap">
            <div class="cbp-l-caption-alignCenter">
              <div class="cbp-l-caption-body">
                <div class="cbp-l-caption-title">Lorem Ipsum</div>
                <div class="cbp-l-caption-desc">by Current Tech</div>
              </div>
            </div>
          </div>
          </a> </div>
        <div class="cbp-item web-design print"> <a href="images/portfolio/4.jpg" class="cbp-caption cbp-lightbox" data-title="iDevices<br>by Tiberiu Neamu">
          <div class="cbp-caption-defaultWrap"> <img src="images/portfolio/mosaic-pr-big2.jpg" alt=""> </div>
          <div class="cbp-caption-activeWrap">
            <div class="cbp-l-caption-alignCenter">
              <div class="cbp-l-caption-body">
                <div class="cbp-l-caption-title">Lorem Ipsum</div>
                <div class="cbp-l-caption-desc">by Current Tech</div>
              </div>
            </div>
          </div>
          </a> </div>
        <div class="cbp-item motion graphic"> <a href="images/portfolio/6.jpg" class="cbp-caption cbp-lightbox" data-title="Seemple* Music for iPad<br>by Tiberiu Neamu">
          <div class="cbp-caption-defaultWrap"> <img src="images/portfolio/mosaic-pr-sm3.jpg" alt=""> </div>
          <div class="cbp-caption-activeWrap">
            <div class="cbp-l-caption-alignCenter">
              <div class="cbp-l-caption-body">
                <div class="cbp-l-caption-title">Lorem Ipsum</div>
                <div class="cbp-l-caption-desc">by Current Tech</div>
              </div>
            </div>
          </div>
          </a> </div>
        <div class="cbp-item print motion"> <a href="images/portfolio/4.jpg" class="cbp-caption cbp-lightbox" data-title="Remind~Me Widget<br>by Tiberiu Neamu">
          <div class="cbp-caption-defaultWrap"> <img src="images/portfolio/mosaic-pr-sm4.jpg" alt=""> </div>
          <div class="cbp-caption-activeWrap">
            <div class="cbp-l-caption-alignCenter">
              <div class="cbp-l-caption-body">
                <div class="cbp-l-caption-title">Lorem Ipsum</div>
                <div class="cbp-l-caption-desc">by Current Tech</div>
              </div>
            </div>
          </div>
          </a> </div>
      </div>
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