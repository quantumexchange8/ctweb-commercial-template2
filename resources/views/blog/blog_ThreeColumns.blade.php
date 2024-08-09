@extends('layout.master')

@section('navbar')
@include('blog.blog_Navbar')
@endsection

@section('content')
<div class="clearfix"></div>
<!--end menu-->

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
<h3 class="uppercase text-white less-mar-1 title">Blog 3 Column</h3>
<h6 class="uppercase text-white sub-title">Get Many More Features</h6>
</div>
   </div>       
    </div></div>        
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
          <h4 class="uppercase">Blog 3 Column</h4>
        </div>
        <div class="col-md-6">
          <ol class="breadcrumb">
            <li><a href="/home">Home</a></li>
            <li><a href="#">Blog</a></li>
            <li class="current"><a href="#">Blog 3 Column</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<!--end section-->

<section class="sec-padding section-light">
  <div class="container">
    <div class="row">

      <div class="col-md-4 col-sm-12 col-xs-12">
        <div class="ce-feature-box-36 margin-bottom">
        <img src="images/blog/2.jpg" alt="" class="img-responsive">
         <div class="text-box"> <p class="text-primary">22 August 2019</p>
          <a href="#"><h5 class="font-weight-5 less-mar-1">Praesent mattis commodo augue amet justo</h5></a>
           <div class="blog-post-info"> <span><i class="fa fa-user"></i> By Current Tech</span> <span><i class="fa fa-comments-o"></i> 15 Comments</span> </div>
           <br><br>
           <a class="read-more" href="#"> Read more &nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i></a>
           </div>
          <br>
         </div>
         
        </div>
      <!--end item-->
      
     <div class="col-md-4 col-sm-12 col-xs-12">
        <div class="ce-feature-box-36 margin-bottom">
        <img src="images/blog/4.jpg" alt="" class="img-responsive">
         <div class="text-box"> <p class="text-primary">22 August 2019</p>
          <a href="#"><h5 class="font-weight-5 less-mar-1">Praesent mattis commodo augue amet justo</h5></a>
           <div class="blog-post-info"> <span><i class="fa fa-user"></i> By Current Tech</span> <span><i class="fa fa-comments-o"></i> 15 Comments</span> </div>
           <br><br>
           <a class="read-more" href="#"> Read more &nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i></a>
           </div>
          <br>
         </div>
         
        </div>
      <!--end item-->
      
       <div class="col-md-4 col-sm-12 col-xs-12">
        <div class="ce-feature-box-36 margin-bottom">
        <img src="images/blog/3.jpg" alt="" class="img-responsive">
         <div class="text-box"> <p class="text-primary">22 August 2019</p>
          <a href="#"><h5 class="font-weight-5 less-mar-1">Praesent mattis commodo augue amet justo</h5></a>
           <div class="blog-post-info"> <span><i class="fa fa-user"></i> By Current Tech</span> <span><i class="fa fa-comments-o"></i> 15 Comments</span> </div>
           <br><br>
           <a class="read-more" href="#"> Read more &nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i></a>
           </div>
          <br>
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
@include('blog.blog_Footer')
@endsection