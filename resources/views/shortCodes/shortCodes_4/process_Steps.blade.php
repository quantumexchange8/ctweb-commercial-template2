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
                <h3 class="uppercase text-white less-mar-1 title">Process Steps</h3>
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
          <h4>Process Steps</h4>
        </div>
        <div class="col-md-6">
          <ol class="breadcrumb">
            <li><a href="/home">Home</a></li>
            <li><a href="#">Shortcodes</a></li>
            <li class="current"><a href="#">Process Steps</a></li>
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
      <div class="col-md-12">
        <ul class="process-steps steps-3">
          <li><a href="#">
            <div class="icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
            </a>
            <h5>Select Product</h5>
          </li>
          <li><a href="#">
            <div class="icon active-blue"><i class="fa fa-pencil" aria-hidden="true"></i></div>
            </a>
            <h5>Select Product</h5>
          </li>
          <li><a href="#">
            <div class="icon"><i class="fa fa-check" aria-hidden="true"></i></div>
            </a>
            <h5>Select Product</h5>
          </li>
        </ul>
        <div class="clearfix"></div>
        <div class="col-divider-margin-6"></div>
        <ul class="process-steps steps-4 dark">
          <li><a href="#">
            <div class="icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
            </a>
            <h5>Select Product</h5>
          </li>
          <li><a href="#">
            <div class="icon"><i class="fa fa-pencil" aria-hidden="true"></i></div>
            </a>
            <h5>Select Product</h5>
          </li>
          <li><a href="#">
            <div class="icon active-red"><i class="fa fa-check" aria-hidden="true"></i></div>
            </a>
            <h5>Select Product</h5>
          </li>
          <li><a href="#">
            <div class="icon"><i class="fa fa-pencil" aria-hidden="true"></i></div>
            </a>
            <h5>Select Product</h5>
          </li>
        </ul>
        <div class="clearfix"></div>
        <div class="col-divider-margin-6"></div>
        <ul class="process-steps steps-4 dark">
          <li><a href="#">
            <div class="digit">1</div>
            </a>
            <h5>Step 1</h5>
          </li>
          <li><a href="#">
            <div class="digit">2</div>
            </a>
            <h5>Step 2</h5>
          </li>
          <li><a href="#">
            <div class="digit active-green">3</div>
            </a>
            <h5>Step 3</h5>
          </li>
          <li><a href="#">
            <div class="digit">4</div>
            </a>
            <h5>Step 4</h5>
          </li>
        </ul>
        <div class="clearfix"></div>
        <div class="col-divider-margin-6"></div>
        <ul class="process-steps steps-5 dark">
          <li><a href="#">
            <div class="digit">1</div>
            </a>
            <h5>Step 1</h5>
          </li>
          <li><a href="#">
            <div class="digit">2</div>
            </a>
            <h5>Step 2</h5>
          </li>
          <li><a href="#">
            <div class="digit active-green">3</div>
            </a>
            <h5>Step 3</h5>
          </li>
          <li><a href="#">
            <div class="digit">4</div>
            </a>
            <h5>Step 4</h5>
          </li>
          <li><a href="#">
            <div class="digit">5</div>
            </a>
            <h5>Step 5</h5>
          </li>
        </ul>
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