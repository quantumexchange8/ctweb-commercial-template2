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
<h3 class="uppercase text-white less-mar-1 title">Blog Image Post</h3>
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
          <h4 class="uppercase">Blog Image Post</h4>
        </div>
        <div class="col-md-6">
          <ol class="breadcrumb">
            <li><a href="/home">Home</a></li>
            <li><a href="#">Blog</a></li>
            <li class="current"><a href="#">Blog Image Post</a></li>
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
      <div class="col-md-8 col-sm-12 col-xs-12">
        <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="ce-feature-box-36 bg-light margin-bottom">
        <img src="images/blog/20.jpg" alt="" class="img-responsive">
         <div class="text-box"> <p class="text-primary">22 August 2019</p>
          <h3 class="title font-weight-4"><a href="#">Praesent mattis commodo augue Aliquam Praesent mattis ornare hendrerit </a></h3>
            <div class="blog-post-info"><span><i class="fa fa-comments-o"></i> 15 Comments</span> <span><i class="fa fa-folder"></i> Business/corporate</span><span><i class="fa fa-thumbs-up"></i> 256 Likes</span> </div>
            <br>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet ligula. Etiam sit amet dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Nullam tellus diam volutpat laoreet vel bibendum in nibh Donec elit lectus pharetra quis vulputate in lobortis at mi Donec libero. </p>
          
           </div>
          <br>
         </div>
         
        </div>
        <!--end post item-->
        
        <div class="clearfix"></div>
        <br>
        <h4>3 Comments</h4>
        <div class="text-box border white padding-4">
          <div class="imgbox-medium left round overflow-hidden"><img src="images/blog/author1.jpg" alt="" class="img-responsive"></div>
          <div class="text-box-right more-padding-1">
            <h5 class="less-mar-1">Charlotte</h5>
            <div class="blog-post-info"><span>July 15 2019 at 10:30 AM</span></div>
            <br>
            <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo augue  amet consectetuer adipiscing. </p>
            <br>
            <a class="btn btn-border less-bor dark btn-small" href="#"><i class="fa fa-reply" aria-hidden="true"></i> &nbsp;Reply</a> </div>
        </div>
        <!--end comment box-->
        
        <div class="col-divider-margin-2"></div>
        <div class="text-box border white padding-4">
          <div class="imgbox-medium left round overflow-hidden"><img src="images/blog/author2.jpg" alt="" class="img-responsive"></div>
          <div class="text-box-right more-padding-1">
            <h5 class="less-mar-1">John William</h5>
            <div class="blog-post-info"><span>July 15 2019 at 10:30 AM</span></div>
            <br>
            <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo augue  amet consectetuer adipiscing. </p>
            <br>
            <a class="btn btn-border less-bor dark btn-small" href="#"><i class="fa fa-reply" aria-hidden="true"></i> &nbsp;Reply</a> </div>
        </div>
        <!--end comment box-->
        
        <div class="col-divider-margin-2"></div>
        <div class="col-md-11 pull-right">
          <div class="text-box border white padding-4">
            <div class="imgbox-medium left round overflow-hidden"><img src="images/blog/author3.jpg" alt="" class="img-responsive"></div>
            <div class="text-box-right more-padding-1">
              <h5 class="less-mar-1">John William</h5>
              <div class="blog-post-info"><span>July 15 2019 at 10:30 AM</span></div>
              <br>
              <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo augue  amet consectetuer adipiscing. </p>
              <br>
              <a class="btn btn-border less-bor dark btn-small" href="#"><i class="fa fa-reply" aria-hidden="true"></i> &nbsp;Reply</a> </div>
          </div>
          <!--end comment box--> 
        </div>
        <!--end less width comment box-->
        
        <div class="clearfix"></div>
        <br>
        <br>
        <a class="btn btn-dark-3 btn-large uppercase" href="#">Load More Comments</a>
        <div class="clearfix"></div>
        <br>
        <br>
        <h4>Post a Comment</h4>
        <input class="bg-cinput" type="text" placeholder="Enter Name" value="">
        <input class="bg-cinput" type="text" placeholder="Email Address" value="">
        <input class="bg-cinput" type="text" placeholder="Phone" value="">
        <textarea class="bg-ctexteria" placeholder="Your Comment"></textarea>
        <div class="clearfix"></div>
        <br>
        <a class="btn btn-dark-3 btn-large uppercase" href="#"><i class="fa fa-paper-plane" aria-hidden="true"></i> &nbsp;Post Comments</a> </div>
      <!--end left col main-->
      
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
      <!--end right col--> 
      
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