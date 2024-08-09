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
    <h3 class="uppercase text-white less-mar-1 title">Call to Action</h3>
    <h6 class="uppercase text-white sub-title">Get Many More Features</h6>
    </div>
       </div>       
        </div></div>        
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
              <h4>Call to Action</h4>
            </div>
            <div class="col-md-6">
              <ol class="breadcrumb">
                <li><a href="/home">Home</a></li>
                <li><a href="#">Shortcodes</a></li>
                <li class="current"><a href="#">Call to Action</a></li>
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
          <div class="call-to-action">
            <div class="col-md-9 col-sm-12 col-xs-12">
              <h1 class="text-primary">Multi-Purpose Responsive HTML Template</h1>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12"> <a class="btn btn-red btn-medium round pull-right uppercase" href="#">Read more</a> </div>
          </div>
        </div>
        <!--end item-->
  
<div class="col-md-12">
          <div class="call-to-action">
            <div class="col-md-9 col-sm-12 col-xs-12">
              <h4 class="text-primary">Multi-Purpose Responsive HTML Template</h4>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commyolk augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Curabitur eget orci</p>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12"><a class="btn btn-violet btn-small round pull-right uppercase" href="#">Read more</a> </div>
          </div>
        </div>
        <!--end item-->
        
        <div class="col-md-12">
          <div class="call-to-action">
            <div class="col-md-9 col-sm-12 col-xs-12">
              <h2>Multi-Purpose Responsive HTML Template</h2>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12"><a class="btn btn-cyan btn-3d btn-medum round pull-right uppercase" href="#">Read more</a> </div>
          </div>
        </div>
        <!--end item-->
        
        <div class="col-md-12">
          <div class="call-to-action">
            <div class="col-md-9 col-sm-12 col-xs-12">
              <h4>Multi-Purpose <span class=" text-pink">Responsive</span> HTML Template</h4>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commyolk augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Curabitur eget orci</p>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12"><a class="btn btn-yellow btn-medum round pull-right uppercase" href="#">Read more</a></div>
          </div>
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