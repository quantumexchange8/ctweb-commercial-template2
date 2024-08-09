@extends('layout.master')

<div class="topbar light topbar-padding">
  <div class="container">
    <div class="topbar-left-items">
      <ul class="toplist toppadding pull-left paddtop1">
        <li class="rightl">Customer Care</li>
        <li>(888) 123-4567</li>
      </ul>
    </div>
    <!--end left-->
    
    <div class="topbar-right-items pull-right">
      <ul class="toplist toppadding">
        <li class="lineright"><a href="#">Login</a></li>
        <li class="lineright"><a href="#">Register</a></li>
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        <li class="last"><a href="#"><i class="fa fa-linkedin"></i></a></li>
      </ul>
    </div>
  </div>
</div>

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
              <h3 class="uppercase text-white less-mar-1 title">Team Classic</h3>
              <h6 class="uppercase text-white sub-title">Get Many More Features</h6>
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
          <h4>Team Classic</h4>
        </div>
        <div class="col-md-6">
          <ol class="breadcrumb">
            <li><a href="/home">Home</a></li>
            <li><a href="#">Pages</a></li>
            <li class="current"><a href="#">Team Classic</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<!--end section-->

<section class="sec-padding section-light section-pattren-32">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="sec-title-container text-center">
          <h5 class="font-weight-4 less-mar-1 line-height-4 text-primary opacity-9">Meet Our Team</h5>
          <h2 class="font-weight-6 less-mar-1 line-height-5">Professional Expertises</h2>
          <div class="ce-title-line"></div>
          <h6 class="ce-sub-text raleway opacity-7">Praesent mattis commodo augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet ligula Etiam .</h6>
        </div>
      </div>
      <div class="clearfix"></div>
      <!--end title-->
      
      <div class="col-md-3 col-sm-6 col-xs-12 margin-bottom">
        <div class="ce-feature-box-7">
          <div class="main-box">
            <div class="img-box">
              <div class="overlay">
                <p class="small-text text-center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. </p>
                <br>
                <ul class="sc-icons">
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
              <img src="images/21.png" alt="" class="img-responsive"> </div>
            <div class="text-box text-center">
              <h5 class="nopadding title">Matthew</h5>
              <p class="subtext">Founder and CEO</p>
            </div>
          </div>
        </div>
        <!--end feature box--> 
        
      </div>
      <!--end item-->
      
     
      
      <div class="col-md-3 col-sm-6 col-xs-12 margin-bottom">
        <div class="ce-feature-box-7">
          <div class="main-box">
            <div class="img-box">
              <div class="overlay">
                <p class="small-text text-center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. </p>
                <br>
                <ul class="sc-icons">
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
              <img src="images/23.png" alt="" class="img-responsive"> </div>
            <div class="text-box text-center">
              <h5 class="nopadding title">Benjamin</h5>
              <p class="subtext">Marketing</p>
            </div>
          </div>
        </div>
        <!--end feature box--> 
        
      </div>
      <!--end item-->
      
      
       <div class="col-md-3 col-sm-6 col-xs-12 margin-bottom">
        <div class="ce-feature-box-7">
          <div class="main-box">
            <div class="img-box">
              <div class="overlay">
                <p class="small-text text-center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. </p>
                <br>
                <ul class="sc-icons">
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
              <img src="images/22.png" alt="" class="img-responsive"> </div>
            <div class="text-box text-center">
              <h5 class="nopadding title">Margaret</h5>
              <p class="subtext">UI Designer</p>
            </div>
          </div>
        </div>
        <!--end feature box--> 
        
      </div>
      <!--end item-->
      
      <div class="col-md-3 col-sm-6 col-xs-12 margin-bottom">
        <div class="ce-feature-box-7">
          <div class="main-box">
            <div class="img-box">
              <div class="overlay">
                <p class="small-text text-center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. </p>
                <br>
                <ul class="sc-icons">
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
              <img src="images/24.png" alt="" class="img-responsive"> </div>
            <div class="text-box text-center">
              <h5 class="nopadding title">Jennifer</h5>
              <p class="subtext">Support</p>
            </div>
          </div>
        </div>
        <!--end feature box--> 
        
      </div>
      <!--end item--> 
      
    </div>
  </div>
</section>
<div class="clearfix"></div>
<!-- end section -->


<section class="sec-padding">
  <div class="container">
    <div class="row no-gutter">
    
     <div class="col-sm-12">
        <div class="sec-title-container text-center">
          <h5 class="font-weight-4 less-mar-1 line-height-4 text-primary opacity-9">Our Price and plans</h5>
          <h2 class="font-weight-6 less-mar-1 line-height-5">Meet Our experts</h2>
          <div class="ce-title-line"></div>
          <h6 class="ce-sub-text raleway opacity-7">Praesent mattis commodo augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet ligula Etiam .</h6>
        </div>
      </div>
      <div class="clearfix"></div>
      <!--end title-->
      
      
      <div class="col-md-3 col-sm-12 col-xs-12">
        <div class="ce-feature-box-3 border-light margin-bottom">
          <div class="img-box-main">
            <div class="img-box">
              <div class="overlay dark text-center">
                <h5 class="less-mar-1 text-white">Jennifer</h5>
                <p>Support</p>
                <p>Consectetuer adipiscing Praesent mattis commodo augue Aliquam.</p>
                <br>
                <ul class="sc-icons">
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
              <img src="images/3.jpg" alt="" class="img-responsive"> </div>
          </div>
        </div>
      </div>
      <!-- end item -->
      
      <div class="col-md-3 col-sm-12 col-xs-12">
        <div class="ce-feature-box-3 border-light margin-bottom">
          <div class="img-box-main">
            <div class="img-box">
              <div class="overlay dark text-center">
                <h5 class="less-mar-1 text-white">Jennifer</h5>
                <p>Support</p>
                <p>Consectetuer adipiscing Praesent mattis commodo augue Aliquam.</p>
                <br>
                <ul class="sc-icons">
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
              <img src="images/4.jpg" alt="" class="img-responsive"> </div>
          </div>
        </div>
      </div>
      <!-- end item -->
      
      <div class="col-md-3 col-sm-12 col-xs-12">
        <div class="ce-feature-box-3 border-light margin-bottom">
          <div class="img-box-main">
            <div class="img-box">
              <div class="overlay dark text-center">
                <h5 class="less-mar-1 text-white">Jennifer</h5>
                <p>Support</p>
                <p>Consectetuer adipiscing Praesent mattis commodo augue Aliquam.</p>
                <br>
                <ul class="sc-icons">
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
              <img src="images/5.jpg" alt="" class="img-responsive"> </div>
          </div>
        </div>
      </div>
      <!-- end item -->
      
      <div class="col-md-3 col-sm-12 col-xs-12">

        <div class="ce-feature-box-3 border-light margin-bottom">
          <div class="img-box-main">
            <div class="img-box">
              <div class="overlay dark text-center">
                <h5 class="less-mar-1 text-white">Jennifer</h5>
                <p>Support</p>
                <p>Consectetuer adipiscing Praesent mattis commodo augue Aliquam.</p>
                <br>
                <ul class="sc-icons">
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
              <img src="images/6.jpg" alt="" class="img-responsive"> </div>
          </div>
        </div>
      </div>
      <!-- end item --> 
      
    </div>
  </div>
</section>
<div class=" clearfix"></div>
<!--end section-->

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