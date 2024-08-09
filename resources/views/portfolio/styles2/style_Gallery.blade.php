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
              <h6 class="uppercase text-white sub-title"> Lightbox Gallery</h6>
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
          <h4>Lightbox Gallery</h4>
        </div>
        <div class="col-md-6">
          <ol class="breadcrumb">
            <li><a href="/home">Home</a></li>
            <li><a href="#">Portfolio</a></li>
            <li class="current"><a href="#">Lightbox Gallery</a></li>
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
    <div id="js-filters-lightbox-gallery1" class="cbp-l-filters-dropdown cbp-l-filters-dropdown-floated">
        <div class="cbp-l-filters-dropdownWrap">
            <div class="cbp-l-filters-dropdownHeader">Sort Gallery</div>
            <div class="cbp-l-filters-dropdownList">
                <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All</div>
                <div data-filter=".identity" class="cbp-filter-item">Identity</div>
                <div data-filter=".web-design" class="cbp-filter-item">Web Design</div>
                <div data-filter=".print" class="cbp-filter-item">Print</div>
            </div>
        </div>
    </div>

    <div id="js-filters-lightbox-gallery2" class="cbp-l-filters-button cbp-l-filters-left">
        <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All</div>
        <div data-filter=".graphic" class="cbp-filter-item">Graphic</div>
        <div data-filter=".logos" class="cbp-filter-item">Logo</div>
        <div data-filter=".motion" class="cbp-filter-item">Motion</div>
    </div>
</div>


<div id="js-grid-lightbox-gallery" class="cbp">
    <div class="cbp-item web-design graphic print motion">
        <a href="js/cubeportfolio/ajax-lightbox-gallery/project1.html" class="cbp-caption cbp-singlePageInline" data-title="World Clock Widget<br>by Paul Flavius Nechita" rel="nofollow">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/1.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignLeft">
                    <div class="cbp-l-caption-body">
                        <div class="cbp-l-caption-title">World Clock Widget</div>
                        <div class="cbp-l-caption-desc">by Paul Flavius Nechita</div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="cbp-item web-design logos identity graphic">
        <a href="js/cubeportfolio/ajax-lightbox-gallery/project1.html" class="cbp-caption cbp-singlePageInline" data-title="Bolt UI<br>by Tiberiu Neamu" rel="nofollow">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/2.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignLeft">
                    <div class="cbp-l-caption-body">
                        <div class="cbp-l-caption-title">Bolt UI</div>
                        <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="cbp-item graphic print identity">
        <a href="js/cubeportfolio/ajax-lightbox-gallery/project1.html" class="cbp-caption cbp-singlePageInline" data-title="WhereTO App<br>by Tiberiu Neamu" rel="nofollow">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/3.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignLeft">
                    <div class="cbp-l-caption-body">
                        <div class="cbp-l-caption-title">WhereTO App</div>
                        <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="cbp-item web-design motion logos">
        <a href="js/cubeportfolio/ajax-lightbox-gallery/project1.html" class="cbp-caption cbp-singlePageInline" data-title="iDevices<br>by Tiberiu Neamu" rel="nofollow">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/4.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignLeft">
                    <div class="cbp-l-caption-body">
                        <div class="cbp-l-caption-title">iDevices</div>
                        <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="cbp-item identity graphic print">
        <a href="js/cubeportfolio/ajax-lightbox-gallery/project1.html" class="cbp-caption cbp-singlePageInline" data-title="Seemple* Music for iPad<br>by Tiberiu Neamu" rel="nofollow">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/5.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignLeft">
                    <div class="cbp-l-caption-body">
                        <div class="cbp-l-caption-title">Seemple* Music for iPad</div>
                        <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="cbp-item motion print logos web-design">
        <a href="js/cubeportfolio/ajax-lightbox-gallery/project1.html" class="cbp-caption cbp-singlePageInline" data-title="Remind~Me Widget<br>by Tiberiu Neamu" rel="nofollow">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/6.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignLeft">
                    <div class="cbp-l-caption-body">
                        <div class="cbp-l-caption-title">Remind~Me Widget</div>
                        <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="cbp-item graphic logos">
        <a href="js/cubeportfolio/ajax-lightbox-gallery/project1.html" class="cbp-caption cbp-singlePageInline" data-title="Workout Buddy<br>by Tiberiu Neamu" rel="nofollow">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/7.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignLeft">
                    <div class="cbp-l-caption-body">
                        <div class="cbp-l-caption-title">Workout Buddy</div>
                        <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="cbp-item identity print logos motion">
        <a href="js/cubeportfolio/ajax-lightbox-gallery/project1.html" class="cbp-caption cbp-singlePageInline" data-title="Digital Menu<br>by Cosmin Capitanu" rel="nofollow">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/8.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignLeft">
                    <div class="cbp-l-caption-body">
                        <div class="cbp-l-caption-title">Digital Menu</div>
                        <div class="cbp-l-caption-desc">by Cosmin Capitanu</div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="cbp-item identity motion web-design">
        <a href="js/cubeportfolio/ajax-lightbox-gallery/project1.html" class="cbp-caption cbp-singlePageInline" data-title="Holiday Selector<br>by Cosmin Capitanu" rel="nofollow">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/11.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignLeft">
                    <div class="cbp-l-caption-body">
                        <div class="cbp-l-caption-title">Holiday Selector</div>
                        <div class="cbp-l-caption-desc">by Cosmin Capitanu</div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>

<div id="js-loadMore-lightbox-gallery" class="cbp-l-loadMore-button">
    <a href="js/cubeportfolio/ajax-lightbox-gallery/loadMore.html" class="cbp-l-loadMore-link" rel="nofollow">
        <span class="cbp-l-loadMore-defaultText">LOAD MORE</span>
        <span class="cbp-l-loadMore-loadingText">LOADING...</span>
        <span class="cbp-l-loadMore-noMoreLoading">NO MORE WORKS</span>
    </a>
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