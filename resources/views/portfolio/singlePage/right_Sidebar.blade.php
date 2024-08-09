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
              <h6 class="uppercase text-white sub-title"> Portfolio Right Sidebar</h6>
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
          <h4>Portfolio left Sidebar</h4>
        </div>
        <div class="col-md-6">
          <ol class="breadcrumb">
            <li><a href="/home">Home</a></li>
            <li><a href="#">Portfolio</a></li>
            <li class="current"><a href="#">Portfolio Right Sidebar</a></li>
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

   <div class="col-md-8">
   
   <div class="col-md-12">
<img src="images/portfolio/13.jpg" alt="" class="img-responsive">                           
</div>
<!--end item-->
<div class="col-divider-margin-6"></div>

<div class="col-md-12">
<ul class="port-project-info">
<li><span>Project by:</span> John Doe</li>
<li><span>date:</span> 26 August 216</li>
<li><span>Skills:</span> PSD / HTML5 / CSS3</li>
<li><span>Client:</span>Benjamin</li>
<li><span>Website:</span> <a href="#" class="text-primary">www.example.com</a></li>
</ul>
<div class="clearfix"></div>

<ul class="social-icons h-anim-rotate socila-sm">
<li class="hover-rss">
<a href="#">
<i class="fa fa-rss" aria-hidden="true"></i>
</a>
</li>

<li class="hover-facebook">
<a href="#">
<i class="fa fa-facebook" aria-hidden="true"></i>
</a>
</li>

<li class="hover-twitter">
<a href="#">
<i class="fa fa-twitter" aria-hidden="true"></i>
</a>
</li>

<li class="hover-vimeo">
<a href="#">
<i class="fa fa-vimeo" aria-hidden="true"></i>
</a>
</li>

<li class="hover-youtube">
<a href="#">
<i class="fa fa-youtube" aria-hidden="true"></i>
</a>
</li>

<li class="hover-stumbleupon">
<a href="#">
<i class="fa fa-stumbleupon" aria-hidden="true"></i>
</a>
</li>

<li class="hover-android">
<a href="#">
<i class="fa fa-android" aria-hidden="true"></i>
</a>
</li>


</ul>
</div>
<!--end item-->

<div class="clearfix"></div>
<br><br>
<div class="col-md-12">
<h4>Project description</h4>
<p>Lorem ipsum dolor sit amet consectetuer adipiscing elit. Suspendisse et justo Praesent mattis commodo augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet ligula Etiam sit amet dolor Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Nullam tellus diam volutpat laoreet vel bibendum. </p>
<p>
Lorem ipsum dolor sit amet consectetuer adipiscing elit. Suspendisse et justo Praesent mattis commodo augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet ligula Etiam sit amet dolor Vestibulum ante ipsum primis in faucibus
</p>
</div>
<!--end item-->

   </div>
   <!--end left col-->
   

<div class="col-md-4 col-sm-12 col-xs-12 section-white">
          <div class="pages-sidebar-item">
            <h5 class="uppercase pages-sidebar-item-title">Categories</h5>
            <ul class="pages-sidebar-links">
              <li><a href="#">Business</a></li>
              <li><a href="#">Education</a></li>
              <li><a class="active" href="#">Travel</a></li>
              <li><a href="#">Creative</a></li>
              <li><a href="#">Wedding</a></li>
              <li><a href="#">Restaurant</a></li>
            </ul>
          </div>
          <!--end item holder-->
          
          <div class="pages-sidebar-item">
            <h5 class="uppercase pages-sidebar-item-title">Latest Posts</h5>
            <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
              <div class="imgbox-small left"> <img src="images/p16.jpg" alt="" class="img-responsive"></div>
              <div class="text-box-right">
                <h6 class="uppercase nopadding"><a href="#" class="text-hover-gyellow">Nullam turpis Cras dapibusscing</a></h6>
                <div class="blog-post-info padding-top-1"> <span> By Current Tech</span> <span> 15 Comments</span> </div>
              </div>
            </div>
            <!--end post-->
            
            <div class="divider-line solid light margin"></div>
            <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
              <div class="imgbox-small left"> <img src="images/p17.jpg" alt="" class="img-responsive"></div>
              <div class="text-box-right">
                <h6 class="uppercase nopadding"><a href="#" class="text-hover-gyellow">Nullam turpis Cras dapibusscing</a></h6>
                <div class="blog-post-info padding-top-1"> <span> By Current Tech</span> <span> 15 Comments</span> </div>
              </div>
            </div>
            <!--end post-->
            
            <div class="divider-line solid light margin"></div>
            <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
              <div class="imgbox-small left"> <img src="images/p18.jpg" alt="" class="img-responsive"></div>
              <div class="text-box-right">
                <h6 class="uppercase nopadding"><a href="#" class="text-hover-gyellow">Nullam turpis Cras dapibusscing</a></h6>
                <div class="blog-post-info padding-top-1"> <span> By Current Tech</span> <span> 15 Comments</span> </div>
              </div>
            </div>
            <!--end post--> 
          </div>
          <!--end item holder-->
          
          <div class="pages-sidebar-item">
            <h5 class="uppercase pages-sidebar-item-title">Tags</h5>
            <ul class="pages-tags">
              <li><a href="#">Animation</a></li>
              <li><a href="#">Art</a></li>
              <li><a href="#">UI Design</a></li>
              <li><a href="#">Photography</a></li>
              <li><a class="active" href="#">Design</a></li>
              <li><a href="#">Art</a></li>
              <li><a href="#">Responsive</a></li>
              <li><a href="#">Develop</a></li>
            </ul>
          </div>
          <!--end item holder-->
          
          <div class="pages-sidebar-item">
            <h5 class="uppercase pages-sidebar-item-title">Newsletter</h5>
            <input type="text" name="name" class="pages-newsletter" value="Enter your e-mail" maxlength="100">
          </div>
          <!--end item holder-->
          
          <div class="pages-sidebar-item">
            <h5 class="uppercase pages-sidebar-item-title">Newsletter</h5>
            <input type="text" name="name" class="pages-newsletter" value="Enter your e-mail" maxlength="100">
          </div>
          <!--end item holder-->
          
          <div class="pages-sidebar-item">
            <h5 class="uppercase pages-sidebar-item-title">Featured Works</h5>
            <ul class="sidebar-works">
              <li><a href="#"><img src="images/p11.jpg" alt=""></a></li>
              <li><a href="#"><img src="images/p12.jpg" alt=""></a></li>
              <li><a href="#"><img src="images/p13.jpg" alt=""></a></li>
              <li><a href="#"><img src="images/p14.jpg" alt=""></a></li>
              <li><a href="#"><img src="images/p15.jpg" alt=""></a></li>
              <li class="last"><a href="#"><img src="images/p13.jpg" alt=""></a></li>
            </ul>
          </div>
          <!--end item holder--> 
          
        </div>
        <!--end left col-->
        
        
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