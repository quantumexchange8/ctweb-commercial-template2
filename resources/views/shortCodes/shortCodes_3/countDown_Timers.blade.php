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
    <h3 class="uppercase text-white less-mar-1 title">Countdown Timers</h3>
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
              <h4>Countdown Timers</h4>
            </div>
            <div class="col-md-6">
              <ol class="breadcrumb">
                <li><a href="/home">Home</a></li>
                <li><a href="#">Shortcodes</a></li>
                <li class="current"><a href="#">Countdown Timers</a></li>
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
        <div class="countdown_holder">
        <h4 class="uppercase font-weight-5">Countdown With Border</h4><br>
          <div id="clock2"></div>
        </div>
        
      </div>
      <!--end timer-->
      
      <div class="col-md-12">
        <div class="countdown_holder">
          <div id="clock5"></div>
        </div>
        
      </div>
      <!--end timer-->      
          </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <!--end section-->
    
    <div class="divider-line solid light"></div>
         <section class="sec-padding">
        <div class="container">
          <div class="row">         
            <div class="col-md-12">
        <div class="countdown_holder">
        <h4 class="uppercase font-weight-5">Countdown With Dark Boxes</h4><br>
          <div id="clock3"></div>
        </div>
        
      </div>
      <!--end timer-->
      
      <div class="col-md-12">
        <div class="countdown_holder">
          <div id="clock6"></div>
        </div>
        
      </div>
      <!--end timer-->
      
          </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <!--end section-->
    
    
     <section class="parallax-1">
      <div class="container-fluid nopadding">
	<div class="parallax-overlay bg-opacity-7">
        <div class="container sec-tpadding-3 sec-bpadding-3">
          <div class="row">
          
            <div class="col-md-12">
        <div class="countdown_holder">
        <h4 class=" text-white uppercase font-weight-5">Parallax Countdown</h4><br>
          <div id="clock"></div>
        </div>
        
      </div>
      <!--end timer-->
      
      <div class="col-md-12">
        <div class="countdown_holder">
          <div id="clock7"></div>
        </div>
        
      </div>
      <!--end timer-->

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
        <div class="countdown_holder">
        <h4 class="uppercase font-weight-5">Countdown With Circles</h4><br>
          <div id="clock4"></div>
        </div>
        
      </div>
      <!--end timer-->
      
      <div class="col-md-12">
        <div class="countdown_holder">
          <div id="clock8"></div>
        </div>
        
      </div>
      <!--end timer-->

          </div>
        </div>
    </section>
    <div class="clearfix"></div>
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