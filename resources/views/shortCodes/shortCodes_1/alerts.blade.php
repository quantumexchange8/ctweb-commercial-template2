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
    <h3 class="uppercase text-white less-mar-1 title">Alert Messages</h3>
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
       <div class="col-md-6"> <h4>Alert Messages</h4></div>
        <div class="col-md-6">
        <ol class="breadcrumb">
    <li><a href="/home">Home</a></li>
    <li><a href="#">Shortcodes</a></li>
    <li class="current"><a href="#">Alert Messages</a></li>
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
  
   <div class="col-md-12 nopadding">
   <div class="alert-box danger">
  <span class="alert-closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
  <strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> &nbsp; Danger!</strong> &nbsp;Indicates a dangerous or potentially negative action. 
</div>
</div>
<!--end message box-->
  
<div class="col-divider-margin-2"></div>
  
    <div class="col-md-12 nopadding">
   <div class="alert-box success">
  <span class="alert-closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
  <strong><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> &nbsp;  Success!</strong> &nbsp;Indicates a successful or positive action. 
</div>
</div>
<!--end message box-->

<div class="col-divider-margin-2"></div>
  
    <div class="col-md-12 nopadding">
   <div class="alert-box info">
  <span class="alert-closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
  <strong><i class="fa fa-info" aria-hidden="true"></i> &nbsp;   Info!</strong> &nbsp;Indicates a neutral informative change or action. 
</div>
</div>
<!--end message box--> 

<div class="col-divider-margin-2"></div>
  
    <div class="col-md-12 nopadding">
   <div class="alert-box warning">
  <span class="alert-closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
  <strong><i class="fa fa-exclamation" aria-hidden="true"></i> &nbsp;    Warning!</strong> &nbsp;Indicates a warning that might need attention.  
</div>
</div>
<!--end message box--> 
 
  
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