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
              <h6 class="uppercase text-white sub-title">Create Portfolio in 4 Column</h6>
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
          <h4>Portfolio 4 column</h4>
        </div>
        <div class="col-md-6">
          <ol class="breadcrumb">
            <li><a href="/home">Home</a></li>
            <li><a href="#">Portfolio</a></li>
            <li class="current"><a href="#">Portfolio 4 column</a></li>
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

        <div id="js-filters-juicy-projects" class="cbp-l-filters-button">
    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">
        All <div class="cbp-filter-counter"></div>
    </div>
    <div data-filter=".identity" class="cbp-filter-item">
        Identity <div class="cbp-filter-counter"></div>
    </div>
    <div data-filter=".web-design" class="cbp-filter-item">
        Web Design <div class="cbp-filter-counter"></div>
    </div>
    <div data-filter=".graphic" class="cbp-filter-item">
        Graphic <div class="cbp-filter-counter"></div>
    </div>
    <div data-filter=".logos" class="cbp-filter-item">
        Logo <div class="cbp-filter-counter"></div>
    </div>
</div>
        
        <div id="js-grid-juicy-projects" class="cbp">
    <div class="cbp-item graphic">
        <div class="cbp-caption">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/ce3-1.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                        <a href="js/cubeportfolio/ajax-juicy-projects/project1.html" class="cbp-singlePage cbp-l-caption-buttonLeft" rel="nofollow">more info</a>
                        <a href="images/portfolio/ce3-1.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Dashboard<br>by Paul Flavius Nechita">view larger</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cbp-l-grid-projects-title">Dashboard</div>
        <div class="cbp-l-grid-projects-desc">Web Design / Graphic</div>
    </div>
    <div class="cbp-item logos web-design">
        <div class="cbp-caption">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/ce3-2.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                        <a href="js/cubeportfolio/ajax-juicy-projects/project1.html" class="cbp-singlePage cbp-l-caption-buttonLeft" rel="nofollow">more info</a>
                        <a href="images/portfolio/ce3-2.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Dashboard<br>by Paul Flavius Nechita">view larger</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cbp-l-grid-projects-title">World Clock Widget</div>
        <div class="cbp-l-grid-projects-desc">Logo / Web Design</div>
    </div>
    <div class="cbp-item logos graphic logos">
        <div class="cbp-caption">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/ce3-3.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                        <a href="js/cubeportfolio/ajax-juicy-projects/project1.html" class="cbp-singlePage cbp-l-caption-buttonLeft" rel="nofollow">more info</a>
                        <a href="images/portfolio/ce3-3.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Dashboard<br>by Paul Flavius Nechita">view larger</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cbp-l-grid-projects-title">To-Do Dashboard</div>
        <div class="cbp-l-grid-projects-desc">Graphic / Logo</div>
    </div>
    <div class="cbp-item web-design graphic">
        <div class="cbp-caption">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/ce3-4.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                        <a href="js/cubeportfolio/ajax-juicy-projects/project1.html" class="cbp-singlePage cbp-l-caption-buttonLeft" rel="nofollow">more info</a>
                        <a href="images/portfolio/ce3-4.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Dashboard<br>by Paul Flavius Nechita">view larger</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cbp-l-grid-projects-title">Events and More</div>
        <div class="cbp-l-grid-projects-desc">Web Design / Graphic</div>
    </div>
    <div class="cbp-item identity graphic">
        <div class="cbp-caption">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/ce3-5.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                        <a href="js/cubeportfolio/ajax-juicy-projects/project1.html" class="cbp-singlePage cbp-l-caption-buttonLeft" rel="nofollow">more info</a>
                        <a href="images/portfolio/ce3-5.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Dashboard<br>by Paul Flavius Nechita">view larger</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cbp-l-grid-projects-title">WhereTO App</div>
        <div class="cbp-l-grid-projects-desc">Web Design / Graphic</div>
    </div>
    <div class="cbp-item web-design identity">
        <div class="cbp-caption">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/ce3-6.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                        <a href="js/cubeportfolio/ajax-juicy-projects/project1.html" class="cbp-singlePage cbp-l-caption-buttonLeft" rel="nofollow">more info</a>
                        <a href="images/portfolio/ce3-6.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Dashboard<br>by Paul Flavius Nechita">view larger</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cbp-l-grid-projects-title">Dashboard</div>
        <div class="cbp-l-grid-projects-desc">Web Design / Identity</div>
    </div>
    
    <div class="cbp-item graphic web-design logos">
        <div class="cbp-caption">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/ce3-7.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                        <a href="js/cubeportfolio/ajax-juicy-projects/project1.html" class="cbp-singlePage cbp-l-caption-buttonLeft" rel="nofollow">more info</a>
                        <a href="images/portfolio/ce3-67.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Dashboard<br>by Paul Flavius Nechita">view larger</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cbp-l-grid-projects-title">Workout Buddy</div>
        <div class="cbp-l-grid-projects-desc">Web Design / Graphic</div>
    </div>
    
    
    <div class="cbp-item graphic web-design identity">
        <div class="cbp-caption">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/ce3-8.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                        <a href="js/cubeportfolio/ajax-juicy-projects/project1.html" class="cbp-singlePage cbp-l-caption-buttonLeft" rel="nofollow">more info</a>
                        <a href="images/portfolio/ce3-8.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Dashboard<br>by Paul Flavius Nechita">view larger</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cbp-l-grid-projects-title">Dashboard</div>
        <div class="cbp-l-grid-projects-desc">Web Design / Graphic</div>
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