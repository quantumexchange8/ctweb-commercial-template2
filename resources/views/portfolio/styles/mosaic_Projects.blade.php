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
              <h6 class="uppercase text-white sub-title"> Mosaic Projects</h6>
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
          <h4> Mosaic Projects</h4>
        </div>
        <div class="col-md-6">
          <ol class="breadcrumb">
            <li><a href="/home">Home</a></li>
            <li><a href="#">Portfolio</a></li>
            <li class="current"><a href="#"> Mosaic Projects</a></li>
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

<div class="clearfix">
    <div id="js-filters-mosaic-projects1" class="cbp-l-filters-button cbp-l-filters-left">
        <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All</div>
        <div data-filter=".identity" class="cbp-filter-item">Identity</div>
        <div data-filter=".web-design" class="cbp-filter-item">Web Design</div>
        <div data-filter=".print" class="cbp-filter-item">Print</div>
    </div>

    <div id="js-filters-mosaic-projects2" class="cbp-l-filters-button cbp-l-filters-right">
        <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All</div>
        <div data-filter=".graphic" class="cbp-filter-item">Graphic</div>
        <div data-filter=".logos" class="cbp-filter-item">Logo</div>
        <div data-filter=".motion" class="cbp-filter-item">Motion</div>
    </div>
</div>


<div id="js-grid-mosaic-projects" class="cbp cbp-l-grid-mosaic-projects">
    <div class="cbp-item web-design graphic print motion">
        <a href="images/portfolio/1.jpg" class="cbp-caption" target="_blank">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/mosaic-pr-sm1.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap"></div>
        </a>
        <div class="cbp-l-grid-projects-title">Dashboard</div>
        <div class="cbp-l-grid-projects-desc">Web Design / Graphic</div>
    </div>
    <div class="cbp-item web-design logos identity graphic">
        <a href="images/portfolio/3.jpg" class="cbp-caption" target="_blank">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/mosaic-pr-sm2.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap"></div>
        </a>
        <div class="cbp-l-grid-projects-title">World Clock Widget</div>
        <div class="cbp-l-grid-projects-desc">Web Design / Logo</div>
    </div>
    <div class="cbp-item graphic print identity">
        <a href="images/portfolio/10.jpg" class="cbp-caption" target="_blank">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/mosaic-pr-big1.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap"></div>
        </a>
        <div class="cbp-l-grid-projects-title">To-Do Dashboard</div>
        <div class="cbp-l-grid-projects-desc">Graphic / Print</div>
    </div>
    <div class="cbp-item web-design motion logos">
        <a href="images/portfolio/2.jpg" class="cbp-caption" target="_blank">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/mosaic-pr-big2.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap"></div>
        </a>
        <div class="cbp-l-grid-projects-title">Events and More</div>
        <div class="cbp-l-grid-projects-desc">Web Design / Motion</div>
    </div>
    <div class="cbp-item web-design graphic print">
        <a href="images/portfolio/4.jpg" class="cbp-caption" target="_blank">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/mosaic-pr-sm3.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap"></div>
        </a>
        <div class="cbp-l-grid-projects-title">WhereTO App</div>
        <div class="cbp-l-grid-projects-desc">Identity / Graphic</div>
    </div>
    <div class="cbp-item motion print logos web-design">
        <a href="images/portfolio/5.jpg" class="cbp-caption" target="_blank">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/mosaic-pr-sm4.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap"></div>
        </a>
        <div class="cbp-l-grid-projects-title">Ski * Buddy</div>
        <div class="cbp-l-grid-projects-desc">Motion / Print</div>
    </div>
    <div class="cbp-item graphic logos">
        <a href="images/portfolio/8.jpg" class="cbp-caption" target="_blank">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/mosaic-pr-sm5.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap"></div>
        </a>
        <div class="cbp-l-grid-projects-title">Seemple* Music for iPad</div>
        <div class="cbp-l-grid-projects-desc">Graphic / Logo</div>
    </div>
    <div class="cbp-item identity print logos motion">
        <a href="images/portfolio/9.jpg" class="cbp-caption" target="_blank">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/mosaic-pr-sm6.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap"></div>
        </a>
        <div class="cbp-l-grid-projects-title">Remind~Me More</div>
        <div class="cbp-l-grid-projects-desc">Print / Logo</div>
    </div>
    <div class="cbp-item identity motion web-design">
        <a href="images/portfolio/11.jpg" class="cbp-caption" target="_blank">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/mosaic-pr-sm7.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap"></div>
        </a>
        <div class="cbp-l-grid-projects-title">Bills Bills Bills</div>
        <div class="cbp-l-grid-projects-desc">Identity / Motion</div>
    </div>
    <div class="cbp-item identity logos motion graphic">
        <a href="images/portfolio/12.jpg" class="cbp-caption" target="_blank">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/mosaic-pr-sm8.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap"></div>
        </a>
        <div class="cbp-l-grid-projects-title">Generic Apps</div>
        <div class="cbp-l-grid-projects-desc">Identity / Logo</div>
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