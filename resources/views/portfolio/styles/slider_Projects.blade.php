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
              <h6 class="uppercase text-white sub-title"> Slider Projects</h6>
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
          <h4> Slider Projects</h4>
        </div>
        <div class="col-md-6">
          <ol class="breadcrumb">
            <li><a href="/home">Home</a></li>
            <li><a href="#">Portfolio</a></li>
            <li class="current"><a href="#"> Slider Projects</a></li>
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

<div id="js-grid-slider-projects" class="cbp">
    <div class="cbp-item graphic">
        <div class="cbp-caption">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/mosaic-pr-sm1.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                        <a href="#js-singlePage-container/project1" class="cbp-singlePage cbp-l-caption-buttonLeft" rel="nofollow">more info</a>
                        <a href="http://scriptpie.com/cubeportfolio/img/?i=1200x900/eb6888" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Dashboard<br>by Paul Flavius Nechita">view larger</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cbp-l-grid-projects-title">Dashboard</div>
        <div class="cbp-l-grid-projects-desc">Web Design / Graphic</div>
    </div>
    <div class="cbp-item web-design logos">
        <div class="cbp-caption">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/mosaic-pr-sm2.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                        <a href="#js-singlePage-container/project2" class="cbp-singlePage cbp-l-caption-buttonLeft" rel="nofollow">more info</a>
                        <a href="images/portfolio/3.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="World Clock Widget<br>by Paul Flavius Nechita">view larger</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cbp-l-grid-projects-title">World Clock Widget</div>
        <div class="cbp-l-grid-projects-desc">Logo / Web Design</div>
    </div>
    <div class="cbp-item graphic logos">
        <div class="cbp-caption">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/mosaic-pr-sm3.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                        <a href="#js-singlePage-container/project3" class="cbp-singlePage cbp-l-caption-buttonLeft" rel="nofollow">more info</a>
                        <a href="http://vimeo.com/14912890" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="To-Do Dashboard<br>by Tiberiu Neamu">view video</a>
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
                <img src="images/portfolio/mosaic-pr-sm4.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                        <a href="#js-singlePage-container/project4" class="cbp-singlePage cbp-l-caption-buttonLeft" rel="nofollow">more info</a>
                        <a href="images/portfolio/5.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Events and  More<br>by Tiberiu Neamu">view larger</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cbp-l-grid-projects-title">Events and More</div>
        <div class="cbp-l-grid-projects-desc">Web Design / Graphic</div>
    </div>
    <div class="cbp-item identity web-design">
        <div class="cbp-caption">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/mosaic-pr-sm5.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                        <a href="#js-singlePage-container/project5" class="cbp-singlePage cbp-l-caption-buttonLeft" rel="nofollow">more info</a>
                        <a href="images/portfolio/8.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="WhereTO App<br>by Tiberiu Neamu">view larger</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cbp-l-grid-projects-title">WhereTO App</div>
        <div class="cbp-l-grid-projects-desc">Web Design / Identity</div>
    </div>
    <div class="cbp-item identity web-design">
        <div class="cbp-caption">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/mosaic-pr-sm6.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                        <a href="#js-singlePage-container/project6" class="cbp-singlePage cbp-l-caption-buttonLeft" rel="nofollow">more info</a>
                        <a href="images/portfolio/9.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Ski * Buddy<br>by Tiberiu Neamu">view larger</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cbp-l-grid-projects-title">Ski * Buddy</div>
        <div class="cbp-l-grid-projects-desc">Identity / Web Design</div>
    </div>
    <div class="cbp-item graphic logos">
        <div class="cbp-caption">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/mosaic-pr-sm7.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                        <a href="#js-singlePage-container/project7" class="cbp-singlePage cbp-l-caption-buttonLeft" rel="nofollow">more info</a>
                        <a href="images/portfolio/11.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Seemple* Music for iPad<br>by Tiberiu Neamu">view larger</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cbp-l-grid-projects-title">Seemple* Music for iPad</div>
        <div class="cbp-l-grid-projects-desc">Graphic / Logo</div>
    </div>
    <div class="cbp-item identity graphic">
        <div class="cbp-caption">
            <div class="cbp-caption-defaultWrap">
                <img src="images/portfolio/mosaic-pr-sm8.jpg" alt="">
            </div>
            <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                        <a href="#js-singlePage-container/project8" class="cbp-singlePage cbp-l-caption-buttonLeft" rel="nofollow">more info</a>
                        <a href="http://www.youtube.com/watch?v=Bu9OiDmxCrQ" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Remind~Me More<br>by Tiberiu Neamu">view video</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cbp-l-grid-projects-title">Remind~Me More</div>
        <div class="cbp-l-grid-projects-desc">Identity / Graphic</div>
    </div>
</div>




<div id="js-singlePage-container" style="display: none;">
    <!-- PROJECT 1 -->
    <div>
        <div class="cbp-l-project-title">Dashboard</div>
        <div class="cbp-l-project-subtitle">by Paul Flavius Nechita</div>

        <div class="cbp-slider">
            <ul class="cbp-slider-wrap">
                <li class="cbp-slider-item">
                    <img src="images/portfolio/1.jpg" alt="">
                </li>
                <li class="cbp-slider-item">
                     <img src="images/portfolio/2.jpg" alt="">
                </li>
                <li class="cbp-slider-item">
                     <img src="images/portfolio/3.jpg" alt="">
                </li>
            </ul>
        </div>

        <div class="cbp-l-project-container">
            <div class="cbp-l-project-desc">
                <div class="cbp-l-project-desc-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, cumque, earum blanditiis incidunt minus commodi consequatur provident quae. Nihil, alias, vel consequatur ab aliquam aspernatur optio harum facilis excepturi mollitia autem voluptas cum ex veniam numquam quia repudiandae in iure. Assumenda, vel provident molestiae perferendis officia commodi asperiores earum sapiente inventore quam deleniti mollitia consequatur expedita quaerat natus praesentium beatae aut ipsa non ex ullam atque suscipit ut dignissimos magnam!</div>
            </div>
            <div class="cbp-l-project-details">
                <ul class="cbp-l-project-details-list">
                    <li><strong>Client</strong>John Doe</li>
                    <li><strong>Date</strong>22 July 2015</li>
                    <li><strong>Categories</strong>Logo, Graphic</li>
                </ul>
                <a href="#" target="_blank" class="cbp-l-project-details-visit">OPEN PROJECT</a>
            </div>
        </div>

        <div class="cbp-l-project-container">
            <div class="cbp-l-project-related">
                <div class="cbp-l-project-desc-title"><span>Related Projects</span></div>

                <ul class="cbp-l-project-related-wrap">
                    <li class="cbp-l-project-related-item">
                        <a href="#" class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                            <img src="images/portfolio/mosaic-pr-sm1.jpg" alt="">
                            <div class="cbp-l-project-related-title">Speed Detector</div>
                        </a>
                    </li>
                    <li class="cbp-l-project-related-item">
                        <a href="#" class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                            <img src="images/portfolio/mosaic-pr-sm2.jpg" alt="">
                            <div class="cbp-l-project-related-title">World Clock Widget</div>
                        </a>
                    </li>
                    <li class="cbp-l-project-related-item">
                        <a href="#" class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                            <img src="images/portfolio/mosaic-pr-sm3.jpg" alt="">
                            <div class="cbp-l-project-related-title">To-Do Dashboard</div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <br><br><br>
    </div>

    <!-- PROJECT 2 -->
    <div>
        <div class="cbp-l-project-title">Dashboard</div>
        <div class="cbp-l-project-subtitle">by Paul Flavius Nechita</div>

        <div class="cbp-slider">
            <ul class="cbp-slider-wrap">
                <li class="cbp-slider-item">
                    <img src="images/portfolio/4.jpg" alt="">
                </li>
                <li class="cbp-slider-item">
                     <img src="images/portfolio/5.jpg" alt="">
                </li>
                <li class="cbp-slider-item">
                     <img src="images/portfolio/6.jpg" alt="">
                </li>
            </ul>
        </div>

        <div class="cbp-l-project-container">
            <div class="cbp-l-project-desc">
                <div class="cbp-l-project-desc-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, cumque, earum blanditiis incidunt minus commodi consequatur provident quae. Nihil, alias, vel consequatur ab aliquam aspernatur optio harum facilis excepturi mollitia autem voluptas cum ex veniam numquam quia repudiandae in iure. Assumenda, vel provident molestiae perferendis officia commodi asperiores earum sapiente inventore quam deleniti mollitia consequatur expedita quaerat natus praesentium beatae aut ipsa non ex ullam atque suscipit ut dignissimos magnam!</div>
            </div>
            <div class="cbp-l-project-details">
                <ul class="cbp-l-project-details-list">
                    <li><strong>Client</strong>John Doe</li>
                    <li><strong>Date</strong>22 July 2015</li>
                    <li><strong>Categories</strong>Logo, Graphic</li>
                </ul>
                <a href="#" target="_blank" class="cbp-l-project-details-visit">OPEN PROJECT</a>
            </div>
        </div>

        <div class="cbp-l-project-container">
            <div class="cbp-l-project-related">
                <div class="cbp-l-project-desc-title"><span>Related Projects</span></div>

                <ul class="cbp-l-project-related-wrap">
                    <li class="cbp-l-project-related-item">
                        <a href="#" class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                            <img src="images/portfolio/mosaic-pr-sm1.jpg" alt="">
                            <div class="cbp-l-project-related-title">Speed Detector</div>
                        </a>
                    </li>
                    <li class="cbp-l-project-related-item">
                        <a href="#" class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                            <img src="images/portfolio/mosaic-pr-sm2.jpg" alt="">
                            <div class="cbp-l-project-related-title">World Clock Widget</div>
                        </a>
                    </li>
                    <li class="cbp-l-project-related-item">
                        <a href="#" class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                            <img src="images/portfolio/mosaic-pr-sm3.jpg" alt="">
                            <div class="cbp-l-project-related-title">To-Do Dashboard</div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <br><br><br>
    </div>

    <!-- PROJECT 3 -->
    <div>
        <div class="cbp-l-project-title">Dashboard</div>
        <div class="cbp-l-project-subtitle">by Paul Flavius Nechita</div>

        <div class="cbp-slider">
            <ul class="cbp-slider-wrap">
                <li class="cbp-slider-item">
                    <img src="images/portfolio/2.jpg" alt="">
                </li>
                <li class="cbp-slider-item">
                     <img src="images/portfolio/3.jpg" alt="">
                </li>
                <li class="cbp-slider-item">
                     <img src="images/portfolio/5.jpg" alt="">
                </li>
            </ul>
        </div>

        <div class="cbp-l-project-container">
            <div class="cbp-l-project-desc">
                <div class="cbp-l-project-desc-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, cumque, earum blanditiis incidunt minus commodi consequatur provident quae. Nihil, alias, vel consequatur ab aliquam aspernatur optio harum facilis excepturi mollitia autem voluptas cum ex veniam numquam quia repudiandae in iure. Assumenda, vel provident molestiae perferendis officia commodi asperiores earum sapiente inventore quam deleniti mollitia consequatur expedita quaerat natus praesentium beatae aut ipsa non ex ullam atque suscipit ut dignissimos magnam!</div>
            </div>
            <div class="cbp-l-project-details">
                <ul class="cbp-l-project-details-list">
                    <li><strong>Client</strong>John Doe</li>
                    <li><strong>Date</strong>22 July 2015</li>
                    <li><strong>Categories</strong>Logo, Graphic</li>
                </ul>
                <a href="#" target="_blank" class="cbp-l-project-details-visit">OPEN PROJECT</a>
            </div>
        </div>

        <div class="cbp-l-project-container">
            <div class="cbp-l-project-related">
                <div class="cbp-l-project-desc-title"><span>Related Projects</span></div>

                <ul class="cbp-l-project-related-wrap">
                    <li class="cbp-l-project-related-item">
                        <a href="#" class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                            <img src="images/portfolio/mosaic-pr-sm1.jpg" alt="">
                            <div class="cbp-l-project-related-title">Speed Detector</div>
                        </a>
                    </li>
                    <li class="cbp-l-project-related-item">
                        <a href="#" class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                            <img src="images/portfolio/mosaic-pr-sm2.jpg" alt="">
                            <div class="cbp-l-project-related-title">World Clock Widget</div>
                        </a>
                    </li>
                    <li class="cbp-l-project-related-item">
                        <a href="#" class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                            <img src="images/portfolio/mosaic-pr-sm3.jpg" alt="">
                            <div class="cbp-l-project-related-title">To-Do Dashboard</div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <br><br><br>
    </div>

    <!-- PROJECT 4 -->
    <div>
        <div class="cbp-l-project-title">Dashboard</div>
        <div class="cbp-l-project-subtitle">by Paul Flavius Nechita</div>

        <div class="cbp-slider">
            <ul class="cbp-slider-wrap">
                <li class="cbp-slider-item">
                    <img src="images/portfolio/5.jpg" alt="">
                </li>
                <li class="cbp-slider-item">
                     <img src="images/portfolio/6.jpg" alt="">
                </li>
                <li class="cbp-slider-item">
                     <img src="images/portfolio/7.jpg" alt="">
                </li>
            </ul>
        </div>

        <div class="cbp-l-project-container">
            <div class="cbp-l-project-desc">
                <div class="cbp-l-project-desc-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, cumque, earum blanditiis incidunt minus commodi consequatur provident quae. Nihil, alias, vel consequatur ab aliquam aspernatur optio harum facilis excepturi mollitia autem voluptas cum ex veniam numquam quia repudiandae in iure. Assumenda, vel provident molestiae perferendis officia commodi asperiores earum sapiente inventore quam deleniti mollitia consequatur expedita quaerat natus praesentium beatae aut ipsa non ex ullam atque suscipit ut dignissimos magnam!</div>
            </div>
            <div class="cbp-l-project-details">
                <ul class="cbp-l-project-details-list">
                    <li><strong>Client</strong>John Doe</li>
                    <li><strong>Date</strong>22 July 2015</li>
                    <li><strong>Categories</strong>Logo, Graphic</li>
                </ul>
                <a href="#" target="_blank" class="cbp-l-project-details-visit">OPEN PROJECT</a>
            </div>
        </div>

        <div class="cbp-l-project-container">
            <div class="cbp-l-project-related">
                <div class="cbp-l-project-desc-title"><span>Related Projects</span></div>

                <ul class="cbp-l-project-related-wrap">
                    <li class="cbp-l-project-related-item">
                        <a href="#" class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                            <img src="images/portfolio/mosaic-pr-sm1.jpg" alt="">
                            <div class="cbp-l-project-related-title">Speed Detector</div>
                        </a>
                    </li>
                    <li class="cbp-l-project-related-item">
                        <a href="#" class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                            <img src="images/portfolio/mosaic-pr-sm2.jpg" alt="">
                            <div class="cbp-l-project-related-title">World Clock Widget</div>
                        </a>
                    </li>
                    <li class="cbp-l-project-related-item">
                        <a href="#" class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                            <img src="images/portfolio/mosaic-pr-sm3.jpg" alt="">
                            <div class="cbp-l-project-related-title">To-Do Dashboard</div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <br><br><br>
    </div>

    <!-- PROJECT 5 -->
    <div>
        <div class="cbp-l-project-title">Dashboard</div>
        <div class="cbp-l-project-subtitle">by Paul Flavius Nechita</div>

        <div class="cbp-slider">
            <ul class="cbp-slider-wrap">
                <li class="cbp-slider-item">
                    <img src="images/portfolio/4.jpg" alt="">
                </li>
                <li class="cbp-slider-item">
                     <img src="images/portfolio/5.jpg" alt="">
                </li>
                <li class="cbp-slider-item">
                     <img src="images/portfolio/6.jpg" alt="">
                </li>
            </ul>
        </div>

        <div class="cbp-l-project-container">
            <div class="cbp-l-project-desc">
                <div class="cbp-l-project-desc-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, cumque, earum blanditiis incidunt minus commodi consequatur provident quae. Nihil, alias, vel consequatur ab aliquam aspernatur optio harum facilis excepturi mollitia autem voluptas cum ex veniam numquam quia repudiandae in iure. Assumenda, vel provident molestiae perferendis officia commodi asperiores earum sapiente inventore quam deleniti mollitia consequatur expedita quaerat natus praesentium beatae aut ipsa non ex ullam atque suscipit ut dignissimos magnam!</div>
            </div>
            <div class="cbp-l-project-details">
                <ul class="cbp-l-project-details-list">
                    <li><strong>Client</strong>John Doe</li>
                    <li><strong>Date</strong>22 July 2015</li>
                    <li><strong>Categories</strong>Logo, Graphic</li>
                </ul>
                <a href="#" target="_blank" class="cbp-l-project-details-visit">OPEN PROJECT</a>
            </div>
        </div>

        <div class="cbp-l-project-container">
            <div class="cbp-l-project-related">
                <div class="cbp-l-project-desc-title"><span>Related Projects</span></div>

                <ul class="cbp-l-project-related-wrap">
                    <li class="cbp-l-project-related-item">
                        <a href="#" class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                            <img src="images/portfolio/mosaic-pr-sm1.jpg" alt="">
                            <div class="cbp-l-project-related-title">Speed Detector</div>
                        </a>
                    </li>
                    <li class="cbp-l-project-related-item">
                        <a href="#" class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                            <img src="images/portfolio/mosaic-pr-sm2.jpg" alt="">
                            <div class="cbp-l-project-related-title">World Clock Widget</div>
                        </a>
                    </li>
                    <li class="cbp-l-project-related-item">
                        <a href="#" class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                            <img src="images/portfolio/mosaic-pr-sm3.jpg" alt="">
                            <div class="cbp-l-project-related-title">To-Do Dashboard</div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <br><br><br>
    </div>

    <!-- PROJECT 6 -->
    <div>
        <div class="cbp-l-project-title">Dashboard</div>
        <div class="cbp-l-project-subtitle">by Paul Flavius Nechita</div>

        <div class="cbp-slider">
            <ul class="cbp-slider-wrap">
                <li class="cbp-slider-item">
                    <img src="images/portfolio/5.jpg" alt="">
                </li>
                <li class="cbp-slider-item">
                     <img src="images/portfolio/6.jpg" alt="">
                </li>
                <li class="cbp-slider-item">
                     <img src="images/portfolio/7.jpg" alt="">
                </li>
            </ul>
        </div>

        <div class="cbp-l-project-container">
            <div class="cbp-l-project-desc">
                <div class="cbp-l-project-desc-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, cumque, earum blanditiis incidunt minus commodi consequatur provident quae. Nihil, alias, vel consequatur ab aliquam aspernatur optio harum facilis excepturi mollitia autem voluptas cum ex veniam numquam quia repudiandae in iure. Assumenda, vel provident molestiae perferendis officia commodi asperiores earum sapiente inventore quam deleniti mollitia consequatur expedita quaerat natus praesentium beatae aut ipsa non ex ullam atque suscipit ut dignissimos magnam!</div>
            </div>
            <div class="cbp-l-project-details">
                <ul class="cbp-l-project-details-list">
                    <li><strong>Client</strong>John Doe</li>
                    <li><strong>Date</strong>22 July 2015</li>
                    <li><strong>Categories</strong>Logo, Graphic</li>
                </ul>
                <a href="#" target="_blank" class="cbp-l-project-details-visit">OPEN PROJECT</a>
            </div>
        </div>

        <div class="cbp-l-project-container">
            <div class="cbp-l-project-related">
                <div class="cbp-l-project-desc-title"><span>Related Projects</span></div>

                <ul class="cbp-l-project-related-wrap">
                    <li class="cbp-l-project-related-item">
                        <a href="#" class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                            <img src="images/portfolio/mosaic-pr-sm1.jpg" alt="">
                            <div class="cbp-l-project-related-title">Speed Detector</div>
                        </a>
                    </li>
                    <li class="cbp-l-project-related-item">
                        <a href="#" class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                            <img src="images/portfolio/mosaic-pr-sm2.jpg" alt="">
                            <div class="cbp-l-project-related-title">World Clock Widget</div>
                        </a>
                    </li>
                    <li class="cbp-l-project-related-item">
                        <a href="#" class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                            <img src="images/portfolio/mosaic-pr-sm3.jpg" alt="">
                            <div class="cbp-l-project-related-title">To-Do Dashboard</div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <br><br><br>
    </div>

    <!-- PROJECT 7 -->
    <div>
        <div class="cbp-l-project-title">Dashboard</div>
        <div class="cbp-l-project-subtitle">by Paul Flavius Nechita</div>

        <div class="cbp-slider">
            <ul class="cbp-slider-wrap">
                <li class="cbp-slider-item">
                    <img src="images/portfolio/2.jpg" alt="">
                </li>
                <li class="cbp-slider-item">
                     <img src="images/portfolio/3.jpg" alt="">
                </li>
                <li class="cbp-slider-item">
                     <img src="images/portfolio/4.jpg" alt="">
                </li>
            </ul>
        </div>

        <div class="cbp-l-project-container">
            <div class="cbp-l-project-desc">
                <div class="cbp-l-project-desc-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, cumque, earum blanditiis incidunt minus commodi consequatur provident quae. Nihil, alias, vel consequatur ab aliquam aspernatur optio harum facilis excepturi mollitia autem voluptas cum ex veniam numquam quia repudiandae in iure. Assumenda, vel provident molestiae perferendis officia commodi asperiores earum sapiente inventore quam deleniti mollitia consequatur expedita quaerat natus praesentium beatae aut ipsa non ex ullam atque suscipit ut dignissimos magnam!</div>
            </div>
            <div class="cbp-l-project-details">
                <ul class="cbp-l-project-details-list">
                    <li><strong>Client</strong>John Doe</li>
                    <li><strong>Date</strong>22 July 2015</li>
                    <li><strong>Categories</strong>Logo, Graphic</li>
                </ul>
                <a href="#" target="_blank" class="cbp-l-project-details-visit">OPEN PROJECT</a>
            </div>
        </div>

        <div class="cbp-l-project-container">
            <div class="cbp-l-project-related">
                <div class="cbp-l-project-desc-title"><span>Related Projects</span></div>

                <ul class="cbp-l-project-related-wrap">
                    <li class="cbp-l-project-related-item">
                        <a href="#" class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                            <img src="images/portfolio/mosaic-pr-sm1.jpg" alt="">
                            <div class="cbp-l-project-related-title">Speed Detector</div>
                        </a>
                    </li>
                    <li class="cbp-l-project-related-item">
                        <a href="#" class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                            <img src="images/portfolio/mosaic-pr-sm2.jpg" alt="">
                            <div class="cbp-l-project-related-title">World Clock Widget</div>
                        </a>
                    </li>
                    <li class="cbp-l-project-related-item">
                        <a href="#" class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                            <img src="images/portfolio/mosaic-pr-sm3.jpg" alt="">
                            <div class="cbp-l-project-related-title">To-Do Dashboard</div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <br><br><br>
    </div>

    <!-- PROJECT 8 -->
    <div>
        <div class="cbp-l-project-title">Dashboard</div>
        <div class="cbp-l-project-subtitle">by Paul Flavius Nechita</div>

        <div class="cbp-slider">
            <ul class="cbp-slider-wrap">
                <li class="cbp-slider-item">
                    <img src="images/portfolio/5.jpg" alt="">
                </li>
                <li class="cbp-slider-item">
                     <img src="images/portfolio/6.jpg" alt="">
                </li>
                <li class="cbp-slider-item">
                     <img src="images/portfolio/7.jpg" alt="">
                </li>
            </ul>
        </div>

        <div class="cbp-l-project-container">
            <div class="cbp-l-project-desc">
                <div class="cbp-l-project-desc-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, cumque, earum blanditiis incidunt minus commodi consequatur provident quae. Nihil, alias, vel consequatur ab aliquam aspernatur optio harum facilis excepturi mollitia autem voluptas cum ex veniam numquam quia repudiandae in iure. Assumenda, vel provident molestiae perferendis officia commodi asperiores earum sapiente inventore quam deleniti mollitia consequatur expedita quaerat natus praesentium beatae aut ipsa non ex ullam atque suscipit ut dignissimos magnam!</div>
            </div>
            <div class="cbp-l-project-details">
                <ul class="cbp-l-project-details-list">
                    <li><strong>Client</strong>John Doe</li>
                    <li><strong>Date</strong>22 July 2015</li>
                    <li><strong>Categories</strong>Logo, Graphic</li>
                </ul>
                <a href="#" target="_blank" class="cbp-l-project-details-visit">OPEN PROJECT</a>
            </div>
        </div>

        <div class="cbp-l-project-container">
            <div class="cbp-l-project-related">
                <div class="cbp-l-project-desc-title"><span>Related Projects</span></div>

                <ul class="cbp-l-project-related-wrap">
                    <li class="cbp-l-project-related-item">
                        <a href="#" class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                            <img src="images/portfolio/mosaic-pr-sm1.jpg" alt="">
                            <div class="cbp-l-project-related-title">Speed Detector</div>
                        </a>
                    </li>
                    <li class="cbp-l-project-related-item">
                        <a href="#" class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                            <img src="images/portfolio/mosaic-pr-sm2.jpg" alt="">
                            <div class="cbp-l-project-related-title">World Clock Widget</div>
                        </a>
                    </li>
                    <li class="cbp-l-project-related-item">
                        <a href="#" class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                            <img src="images/portfolio/mosaic-pr-sm3.jpg" alt="">
                            <div class="cbp-l-project-related-title">To-Do Dashboard</div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <br><br><br>
    </div>




</div>
</div>
</div></section>
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