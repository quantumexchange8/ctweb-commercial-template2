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
<div class="parallax vertical-align" data-parallax-bg-image="images/parallax/4.jpg" data-parallax-speed="0.9" data-parallax-direction="down">
    <div class="parallax-overlay primary">
           <div class="container sec-tpadding-3 sec-bpadding-3">
           <div class="row">
           
             <div class="col-md-12">
         <div class="countdown_holder">
         <h1 class=" text-white uppercase font-weight-7">Site is Under Maintenance</h1><br>
           <div id="clock"></div>
           <br>
           <h4 class="text-white">Our website is under construction. We`ll be here soon with our new web site, get notified at launch.</h4>
         </div>
         
       </div>
       <!--end timer-->
 
           </div>
       </div>
         </div>
     
 </div>
 <div class="clearfix"></div>
@endsection

@section('footer')
@include('home.home.home_Footer')
@endsection