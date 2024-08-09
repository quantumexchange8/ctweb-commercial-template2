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
              <h6 class="uppercase text-white sub-title"> Portfolio Masonry Style</h6>
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
          <h4>Portfolio Masonry</h4>
        </div>
        <div class="col-md-6">
          <ol class="breadcrumb">
            <li><a href="/home">Home</a></li>
            <li><a href="#">Portfolio</a></li>
            <li class="current"><a href="#">Portfolio Masonry</a></li>
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

<div id="js-filters-masonry" class="cbp-l-filters-alignRight">
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
    <div data-filter=".graphic, .identity" class="cbp-filter-item">
        Web Design & Identity <div class="cbp-filter-counter"></div>
    </div>
</div>


<div id="js-grid-masonry" class="cbp">
    <div class="cbp-item identity">
        <a href="images/portfolio/2.jpg" class="cbp-caption cbp-lightbox" data-title="Easy Note<br>by Cosmin Capitanu">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/masonry-big1.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                        <div class="cbp-l-caption-title">Easy Note</div>
                        <div class="cbp-l-caption-desc">by Cosmin Capitanu</div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="cbp-item web-design">
        <a href="images/portfolio/3.jpg" class="cbp-caption cbp-lightbox" data-title="The Gang Blue<br>by Cosmin Capitanu">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/masonry-sm1.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                        <div class="cbp-l-caption-title">The Gang Blue</div>
                        <div class="cbp-l-caption-desc">by Cosmin Capitanu</div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="cbp-item graphic identity">
        <a href="images/portfolio/4.jpg" class="cbp-caption cbp-lightbox" data-title="Tiger<br>by Cosmin Capitanu">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/masonry-sm2.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                        <div class="cbp-l-caption-title">Tiger</div>
                        <div class="cbp-l-caption-desc">by Cosmin Capitanu</div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="cbp-item graphic">
        <a href="images/portfolio/6.jpg" class="cbp-caption cbp-lightbox" data-title="Flat Roman Typeface Ui<br>by Cosmin Capitanu">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/masonry-big2.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                        <div class="cbp-l-caption-title">Flat Roman Typeface Ui</div>
                        <div class="cbp-l-caption-desc">by Cosmin Capitanu</div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="cbp-item identity">
        <a href="images/portfolio/7.jpg" class="cbp-caption cbp-lightbox" data-title="Seemple* Music for iPad<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/masonry-big3.jpg" alt="">
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
    <div class="cbp-item graphic">
        <a href="images/portfolio/12.jpg" class="cbp-caption cbp-lightbox" data-title="Remind~Me More<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/masonry-sm3.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                        <div class="cbp-l-caption-title">Remind~Me More</div>
                        <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="cbp-item web-design">
        <a href="images/portfolio/8.jpg" class="cbp-caption cbp-lightbox" data-title="Workout Buddy<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/masonry-sm4.jpg" alt="">
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
    <div class="cbp-item identity">
        <a href="http://vimeo.com/156783#" class="cbp-caption cbp-lightbox" data-title="Volume Knob<br>by Paul Flavius Nechita">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/masonry-sm5.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                        <div class="cbp-l-caption-title">Volume Knob</div>
                        <div class="cbp-l-caption-desc">by Paul Flavius Nechita</div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="cbp-item identity">
        <a href="images/portfolio/1.jpg" class="cbp-caption cbp-lightbox" data-title="Ski * Buddy<br>by Tiberiu Neamu">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/masonry-big4.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                        <div class="cbp-l-caption-title">Ski * Buddy</div>
                        <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="cbp-item web-design graphic">
        <a href="https://www.youtube.com/watch?v=dChhzNGHgnA" class="cbp-caption cbp-lightbox" data-title="Virtualization Icon<br>by Paul Flavius Nechita">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/masonry-sm6.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                        <div class="cbp-l-caption-title">Virtualization Icon</div>
                        <div class="cbp-l-caption-desc">by Paul Flavius Nechita</div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="cbp-item web-design graphic">
        <a href="images/portfolio/9.jpg" class="cbp-caption cbp-lightbox" data-title="World Clock Widget<br>by Paul Flavius Nechita">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/masonry-sm7.jpg" alt="">
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
    <div class="cbp-item web-design graphic">
        <a href="images/portfolio/10.jpg" class="cbp-caption cbp-lightbox" data-title="Sickpuppy<br>by Cosmin Capitanu">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/masonry-sm8.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                        <div class="cbp-l-caption-title">Sickpuppy</div>
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