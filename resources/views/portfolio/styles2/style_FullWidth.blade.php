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
              <h6 class="uppercase text-white sub-title"> Portfolio Full Width</h6>
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
          <h4>Portfolio Full Width</h4>
        </div>
        <div class="col-md-6">
          <ol class="breadcrumb">
            <li><a href="/home">Home</a></li>
            <li><a href="#">Portfolio</a></li>
            <li class="current"><a href="#">Portfolio Full Width</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<!--end section-->

<section class="sec-tpadding-2">
  <div class="container-fluid">
    <div class="row">
      <div>
        <div id="js-filters-mosaic-flat" class="cbp-l-filters-buttonCenter">
          <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> All
            <div class="cbp-filter-counter"></div>
          </div>
          <div data-filter=".print" class="cbp-filter-item"> Graphic
            <div class="cbp-filter-counter"></div>
          </div>
          <div data-filter=".web-design" class="cbp-filter-item"> Branding
            <div class="cbp-filter-counter"></div>
          </div>
          <div data-filter=".graphic" class="cbp-filter-item"> Products
            <div class="cbp-filter-counter"></div>
          </div>
          <div data-filter=".motion" class="cbp-filter-item"> Photography
            <div class="cbp-filter-counter"></div>
          </div>
        </div>
        <div id="js-grid-mosaic-flat" class="cbp cbp-l-grid-mosaic-flat">
          <div class="cbp-item web-design graphic"> <a href="images/portfolio/ce3-3.jpg" class="cbp-caption cbp-lightbox" data-title="Bolt UI<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap"> <img src="images/portfolio/ce3-3.jpg" alt=""> </div>
            <div class="cbp-caption-activeWrap">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title">Lorem ipsum dolor sit</div>
                </div>
              </div>
            </div>
            </a> </div>
          <div class="cbp-item print motion"> <a href="images/portfolio/ce3-1.jpg" class="cbp-caption cbp-lightbox" data-title="Bolt UI<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap"> <img src="images/portfolio/ce3-1.jpg" alt=""> </div>
            <div class="cbp-caption-activeWrap">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title">Lorem ipsum dolor sit</div>
                </div>
              </div>
            </div>
            </a> </div>
          <div class="cbp-item print motion"> <a href="images/portfolio/ce3-2.jpg" class="cbp-caption cbp-lightbox" data-title="Bolt UI<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap"> <img src="images/portfolio/ce3-2.jpg" alt=""> </div>
            <div class="cbp-caption-activeWrap">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title">Lorem ipsum dolor sit</div>
                </div>
              </div>
            </div>
            </a> </div>
          <div class="cbp-item motion graphic"> <a href="images/portfolio/ce3-4.jpg" class="cbp-caption cbp-lightbox" data-title="Bolt UI<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap"> <img src="images/portfolio/ce3-4.jpg" alt=""> </div>
            <div class="cbp-caption-activeWrap">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title">Lorem ipsum dolor sit</div>
                </div>
              </div>
            </div>
            </a> </div>
          <div class="cbp-item web-design print"> <a href="images/portfolio/ce3-6.jpg" class="cbp-caption cbp-lightbox" data-title="Bolt UI<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap"> <img src="images/portfolio/ce3-6.jpg" alt=""> </div>
            <div class="cbp-caption-activeWrap">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title">Lorem ipsum dolor sit</div>
                </div>
              </div>
            </div>
            </a> </div>
          <div class="cbp-item print motion"> <a href="images/portfolio/ce3-5.jpg" class="cbp-caption cbp-lightbox" data-title="Bolt UI<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap"> <img src="images/portfolio/ce3-5.jpg" alt=""> </div>
            <div class="cbp-caption-activeWrap">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title">Lorem ipsum dolor sit</div>
                </div>
              </div>
            </div>
            </a> </div>
          <div class="cbp-item print motion"> <a href="images/portfolio/ce3-7.jpg" class="cbp-caption cbp-lightbox" data-title="Bolt UI<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap"> <img src="images/portfolio/ce3-7.jpg" alt=""> </div>
            <div class="cbp-caption-activeWrap">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title">Lorem ipsum dolor sit</div>
                </div>
              </div>
            </div>
            </a> </div>
          <div class="cbp-item print motion"> <a href="images/portfolio/ce3-8.jpg" class="cbp-caption cbp-lightbox" data-title="Bolt UI<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap"> <img src="images/portfolio/ce3-8.jpg" alt=""> </div>
            <div class="cbp-caption-activeWrap">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title">Lorem ipsum dolor sit</div>
                </div>
              </div>
            </div>
            </a> </div>
        </div>
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