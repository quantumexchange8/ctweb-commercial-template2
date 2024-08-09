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
              <h6 class="uppercase text-white sub-title"> Masonry Projects</h6>
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
          <h4>Masonry Projects</h4>
        </div>
        <div class="col-md-6">
          <ol class="breadcrumb">
            <li><a href="/home">Home</a></li>
            <li><a href="#">Portfolio</a></li>
            <li class="current"><a href="#">Masonry Projects</a></li>
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


<div id="js-filters-masonry-projects" class="cbp-l-filters-buttonCenter">
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
    <div data-filter=".logos, .graphic" class="cbp-filter-item">
        Logo & Graphic <div class="cbp-filter-counter"></div>
    </div>
</div>


<div id="js-grid-masonry-projects" class="cbp cbp-l-grid-masonry-projects">
    <div class="cbp-item graphic">
        <div class="cbp-caption">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/masonry-big1.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                        <a href="js/cubeportfolio/ajax-masonry-projects/project1.html" class="cbp-singlePage cbp-l-caption-buttonLeft" rel="nofollow">more info</a>
                        <a href="images/portfolio/2.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Dashboard<br>by Paul Flavius Nechita">view larger</a>
                    </div>
                </div>
            </div>
        </div>
        <a href="ajax-masonry-projects/project1.html" class="cbp-singlePage cbp-l-grid-masonry-projects-title" rel="nofollow">BeenTo</a>
        <div class="cbp-l-grid-masonry-projects-desc">web design / graphic</div>
    </div>
    <div class="cbp-item web-design logos">
        <div class="cbp-caption">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/masonry-sm1.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                        <a href="ajax-masonry-projects/project2.html" class="cbp-singlePage cbp-l-caption-buttonLeft" rel="nofollow">more info</a>
                        <a href="images/portfolio/3.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="World Clock Widget<br>by Paul Flavius Nechita">view larger</a>
                    </div>
                </div>
            </div>
        </div>
        <a href="ajax-masonry-projects/project1.html" class="cbp-singlePage cbp-l-grid-masonry-projects-title" rel="nofollow">World Clock Widget</a>
        <div class="cbp-l-grid-masonry-projects-desc">logos / web design</div>
    </div>
    <div class="cbp-item graphic logos">
        <div class="cbp-caption">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/masonry-sm2.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                        <a href="ajax-masonry-projects/project3.html" class="cbp-singlePage cbp-l-caption-buttonLeft" rel="nofollow">more info</a>
                        <a href="images/portfolio/4.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="To-Do Dashboard<br>by Tiberiu Neamu">view Larger</a>
                    </div>
                </div>
            </div>
        </div>
        <a href="ajax-masonry-projects/project1.html" class="cbp-singlePage cbp-l-grid-masonry-projects-title" rel="nofollow">To-Do Dashboard</a>
        <div class="cbp-l-grid-masonry-projects-desc">graphic / logos</div>
    </div>
    <div class="cbp-item identity web-design">
        <div class="cbp-caption">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/masonry-big2.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                        <a href="ajax-masonry-projects/project4.html" class="cbp-singlePage cbp-l-caption-buttonLeft" rel="nofollow">more info</a>
                        <a href="images/portfolio/6.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="WhereTO App<br>by Tiberiu Neamu">view larger</a>
                    </div>
                </div>
            </div>
        </div>
        <a href="ajax-masonry-projects/project1.html" class="cbp-singlePage cbp-l-grid-masonry-projects-title" rel="nofollow">WhereTO App</a>
        <div class="cbp-l-grid-masonry-projects-desc">web design / identity</div>
    </div>
    <div class="cbp-item web-design graphic">
        <div class="cbp-caption">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/masonry-big3.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                        <a href="ajax-masonry-projects/project5.html" class="cbp-singlePage cbp-l-caption-buttonLeft" rel="nofollow">more info</a>
                        <a href="images/portfolio/7.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Events and  More<br>by Tiberiu Neamu">view larger</a>
                    </div>
                </div>
            </div>
        </div>
        <a href="ajax-masonry-projects/project1.html" class="cbp-singlePage cbp-l-grid-masonry-projects-title" rel="nofollow">Events and More</a>
        <div class="cbp-l-grid-masonry-projects-desc">web design / graphic</div>
    </div>
    <div class="cbp-item identity web-design">
        <div class="cbp-caption">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/masonry-sm3.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                        <a href="ajax-masonry-projects/project6.html" class="cbp-singlePage cbp-l-caption-buttonLeft" rel="nofollow">more info</a>
                        <a href="images/portfolio/12.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Ski * Buddy<br>by Tiberiu Neamu">view larger</a>
                    </div>
                </div>
            </div>
        </div>
        <a href="ajax-masonry-projects/project1.html" class="cbp-singlePage cbp-l-grid-masonry-projects-title" rel="nofollow">Ski * Buddy</a>
        <div class="cbp-l-grid-masonry-projects-desc">identity / web design</div>
    </div>
    <div class="cbp-item graphic logos">
        <div class="cbp-caption">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/masonry-sm4.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                        <a href="ajax-masonry-projects/project7.html" class="cbp-singlePage cbp-l-caption-buttonLeft" rel="nofollow">more info</a>
                        <a href="images/portfolio/8.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Seemple* Music for iPad<br>by Tiberiu Neamu">view larger</a>
                    </div>
                </div>
            </div>
        </div>
        <a href="ajax-masonry-projects/project1.html" class="cbp-singlePage cbp-l-grid-masonry-projects-title" rel="nofollow">Seemple* Music for iPad</a>
        <div class="cbp-l-grid-masonry-projects-desc">graphic / logos</div>
    </div>
    <div class="cbp-item identity graphic">
        <div class="cbp-caption">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/masonry-sm5.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                        <a href="ajax-masonry-projects/project8.html" class="cbp-singlePage cbp-l-caption-buttonLeft" rel="nofollow">more info</a>
                        <a href="images/portfolio/5.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Remind~Me More<br>by Tiberiu Neamu">view video</a>
                    </div>
                </div>
            </div>
        </div>
        <a href="ajax-masonry-projects/project1.html" class="cbp-singlePage cbp-l-grid-masonry-projects-title" rel="nofollow">Remind~Me More</a>
        <div class="cbp-l-grid-masonry-projects-desc">identity / graphic</div>
    </div>
    <div class="cbp-item web-design graphic">
        <div class="cbp-caption">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/masonry-big4.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                        <a href="ajax-masonry-projects/project9.html" class="cbp-singlePage cbp-l-caption-buttonLeft" rel="nofollow">more info</a>
                        <a href="images/portfolio/1.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Workout Buddy<br>by Tiberiu Neamu">view video</a>
                    </div>
                </div>
            </div>
        </div>
        <a href="ajax-masonry-projects/project1.html" class="cbp-singlePage cbp-l-grid-masonry-projects-title" rel="nofollow">Workout Buddy</a>
        <div class="cbp-l-grid-masonry-projects-desc">web design / graphic</div>
    </div>
    <div class="cbp-item identity web-design">
        <div class="cbp-caption">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/masonry-sm6.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                        <a href="ajax-masonry-projects/project10.html" class="cbp-singlePage cbp-l-caption-buttonLeft" rel="nofollow">more info</a>
                        <a href="https://www.youtube.com/watch?v=3wbvpOIIBQA" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Bills Bills Bills<br>by Cosmin Capitanu">view video</a>
                    </div>
                </div>
            </div>
        </div>
        <a href="ajax-masonry-projects/project1.html" class="cbp-singlePage cbp-l-grid-masonry-projects-title" rel="nofollow">Bills Bills Bills</a>
        <div class="cbp-l-grid-masonry-projects-desc">identity / web design</div>
    </div>
    <div class="cbp-item identity logos">
        <div class="cbp-caption">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/masonry-sm7.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                        <a href="ajax-masonry-projects/project11.html" class="cbp-singlePage cbp-l-caption-buttonLeft" rel="nofollow">more info</a>
                        <a href="http://scriptpie.com/cubeportfolio/img/?i=video/044cd4" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Generic Apps<br>by Cosmin Capitanu">view video</a>
                    </div>
                </div>
            </div>
        </div>
        <a href="ajax-masonry-projects/project1.html" class="cbp-singlePage cbp-l-grid-masonry-projects-title" rel="nofollow">Generic Apps</a>
        <div class="cbp-l-grid-masonry-projects-desc">identity / logos</div>
    </div>
    <div class="cbp-item graphic web-design">
        <div class="cbp-caption">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/masonry-sm8.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                        <a href="ajax-masonry-projects/project12.html" class="cbp-singlePage cbp-l-caption-buttonLeft" rel="nofollow">more info</a>
                        <a href="http://vimeo.com/877053" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Speed Detector<br>by Cosmin Capitanu">view video</a>
                    </div>
                </div>
            </div>
        </div>
        <a href="ajax-masonry-projects/project1.html" class="cbp-singlePage cbp-l-grid-masonry-projects-title" rel="nofollow">Speed Detector</a>
        <div class="cbp-l-grid-masonry-projects-desc">graphic / web design</div>
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