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
              <h6 class="uppercase text-white sub-title"> Portfolio Mosaic</h6>
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
          <h4>Portfolio Mosaic</h4>
        </div>
        <div class="col-md-6">
          <ol class="breadcrumb">
            <li><a href="/home">Home</a></li>
            <li><a href="#">Portfolio</a></li>
            <li class="current"><a href="#">Portfolio Mosaic</a></li>
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


<div id="js-filters-mosaic" class="cbp-l-filters-button">
    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">
        All <div class="cbp-filter-counter"></div>
    </div>
    <div data-filter=".print" class="cbp-filter-item">
        Print <div class="cbp-filter-counter"></div>
    </div>
    <div data-filter=".web-design" class="cbp-filter-item">
        Web Design <div class="cbp-filter-counter"></div>
    </div>
    <div data-filter=".motion" class="cbp-filter-item">
        Motion <div class="cbp-filter-counter"></div>
    </div>
    <div data-filter=".graphic" class="cbp-filter-item">
        Graphic <div class="cbp-filter-counter"></div>
    </div>
</div>


<div id="js-grid-mosaic" class="cbp cbp-l-grid-mosaic">
    <div class="cbp-item web-design graphic">
        <a href="images/portfolio/1.jpg" class="cbp-caption cbp-lightbox" data-title="Bolt UI<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/mosaic-sm1.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                        <div class="cbp-l-caption-title">Bolt UI</div>
                        <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="cbp-item print motion">
        <a href="images/portfolio/2.jpg" class="cbp-caption cbp-lightbox" data-title="World Clock Widget<br>by Paul Flavius Nechita">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/mosaic-sm2.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                        <div class="cbp-l-caption-title">World Clock Widget</div>
                        <div class="cbp-l-caption-desc">by Paul Flavius Nechita</div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="cbp-item print motion">
        <a href="images/portfolio/8.jpg" class="cbp-caption cbp-lightbox" data-title="WhereTO App<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/mosaic-big1.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                        <div class="cbp-l-caption-title">WhereTO App</div>
                        <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="cbp-item web-design print">
        <a href="images/portfolio/9.jpg" class="cbp-caption cbp-lightbox" data-title="iDevices<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/mosaic-big2.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                        <div class="cbp-l-caption-title">iDevices</div>
                        <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="cbp-item motion graphic">
        <a href="images/portfolio/3.jpg" class="cbp-caption cbp-lightbox" data-title="Seemple* Music for iPad<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/mosaic-sm3.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                        <div class="cbp-l-caption-title">Seemple* Music for iPad</div>
                        <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="cbp-item print motion">
        <a href="images/portfolio/4.jpg" class="cbp-caption cbp-lightbox" data-title="Remind~Me Widget<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/mosaic-sm4.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                        <div class="cbp-l-caption-title">Remind~Me Widget</div>
                        <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="cbp-item web-design graphic print">
        <a href="images/portfolio/5.jpg" class="cbp-caption cbp-lightbox" data-title="Workout Buddy<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/mosaic-sm5.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                        <div class="cbp-l-caption-title">Workout Buddy</div>
                        <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="cbp-item print graphic">
        <a href="images/portfolio/10.jpg" class="cbp-caption cbp-lightbox" data-title="Digital Menu<br>by Cosmin Capitanu">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/mosaic-big3.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                        <div class="cbp-l-caption-title">Digital Menu</div>
                        <div class="cbp-l-caption-desc">by Cosmin Capitanu</div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="cbp-item motion web-design">
        <a href="images/portfolio/6.jpg" class="cbp-caption cbp-lightbox" data-title="Holiday Selector<br>by Cosmin Capitanu">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/mosaic-sm6.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                        <div class="cbp-l-caption-title">Holiday Selector</div>
                        <div class="cbp-l-caption-desc">by Cosmin Capitanu</div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="cbp-item motion">
        <a href="images/portfolio/11.jpg" class="cbp-caption cbp-lightbox" data-title="Holiday Selector<br>by Cosmin Capitanu">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/mosaic-sm7.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                        <div class="cbp-l-caption-title">Holiday Selector</div>
                        <div class="cbp-l-caption-desc">by Cosmin Capitanu</div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="cbp-item graphic web-design">
        <a href="images/portfolio/12.jpg" class="cbp-caption cbp-lightbox" data-title="Holiday Selector<br>by Cosmin Capitanu">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/mosaic-sm8.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                        <div class="cbp-l-caption-title">Holiday Selector</div>
                        <div class="cbp-l-caption-desc">by Cosmin Capitanu</div>
                    </div>
                </div>
            </div>
        </a>
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