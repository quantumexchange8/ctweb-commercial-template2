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
              <h3 class="uppercase text-white less-mar-1 title">Contact With left Sidebar</h3>
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
          <h4>Contact with Left Sidebar</h4>
        </div>
        <div class="col-md-6">
          <ol class="breadcrumb">
            <li><a href="/home">Home</a></li>
            <li><a href="#">Pages</a></li>
            <li class="current"><a href="#">Contact with left Sidebar</a></li>
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

        </div>
        <!--end left col-->
        
        
        <div class="col-md-8">

<div class="col-md-12">
        <div id="map_extended" class="map">
            <p>This will be replaced with the Google Map.</p>
          </div>
      </div>
      <!--end map-->
      
      <div class="clearfix"></div>
      <br>
      
      <h3>Contact Form</h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit consectetuer adipiscing elit. Suspendisse et justo. augue.</p>
        <br>
        <br>
        
        
        <div class="text-box white padding-4">
        <div class="one_half">
  
   
    <div class="cforms_sty3">
    
    
    <div id="form_status"></div>
    <form type="POST" id="code-contact" onsubmit="return valid_datas( this );">
        <label class="label">Name <em>*</em></label>
        <label class="input">
            <input type="text" name="name" id="name">
        </label>
        
        <div class="clearfix"></div>
        
        <label class="label">E-mail <em>*</em></label>
        <label class="input">
            <input type="email" name="email" id="email">
        </label>

        <!-- <div class="clearfix"></div>


        <label class="label">Phone <em>*</em></label>
        <label class="input">
            <input type="text" name="phone" id="phone">
        </label> -->

        <div class="clearfix"></div>

        <label class="label">Subject <em>*</em></label>
        <label class="input">
            <input type="text" name="subject" id="subject">
        </label>

        <div class="clearfix"></div>

        <label class="label">Message <em>*</em></label>
        <label class="textarea">
            <textarea rows="5" name="message" id="message"></textarea>
        </label>

        <div class="clearfix"></div>
        <input type="hidden" name="token" value="FsWga4&@f6aw">
        <button type="submit" class="button">Send Message</button>
        
    </form>	
    
    
    </div>
    
  </div></div>
  
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
@include('home.home.home_Footer')
@endsection