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
              <h3 class="uppercase text-white less-mar-1 title">Careers</h3>
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
          <h4>Careers</h4>
        </div>
        <div class="col-md-6">
          <ol class="breadcrumb">
            <li><a href="/home">Home</a></li>
            <li><a href="#">Pages</a></li>
            <li class="current"><a href="#">Careers</a></li>
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
  
  
  
   <div class="col-md-8 col-sm-12 col-xs-12 margin-bottom">
   
   <h4 class="uppercase">Visual Designer</h4>
   <br>
        <div class="tab-navbar-main-style-6 tabstyle-6">
          <ul class="responsive-tabs">
            <li><a href="#example-6-tab-1" target="_self">
              <div class="tab-navicon"></div>
              Requirements</a></li>
            <li><a href="#example-6-tab-2" target="_self">
              <div class="tab-navicon"></div>
              Desired Skills </a></li>
            <li><a href="#example-6-tab-3" target="_self">
              <div class="tab-navicon"></div>
              Required</a></li>
          </ul>
        </div>
        <div class="clearfix"></div>
        <div class="tab-content-style-6">
          <div class="responsive-tabs-content">
            <div id="example-6-tab-1" class="responsive-tabs-panel">
              <div class="responsive-tab-title ttitle"></div>
              <h5 class="uppercase">Requirements</h5>
              <p>Development dolor sit amet, consectetur adipiscing elit. Phasellus ac fringilla nulla, sit amet consequat eros. Pellentesque pharetra blandit commyolk. Phasellus massa nisl, feugiat ac bibendum et, dictum id ipsum. Quisque sit amet accumsan tortor It has survived not only five centuries, but also the leap into electronic typesetting, remaining.</p>
              <br>
              <div class="iconlist-2">
                <div class="icon dark"><i class="fa fa-long-arrow-right"></i></div>
                <div class="text">Ut vulputate metus quis urna feugiat sed porta arcu tincidunt.</div>
              </div>
              <!--end item-->
              
              <div class="iconlist-2">
                <div class="icon dark"><i class="fa fa-long-arrow-right"></i></div>
                <div class="text">Integer vitae nibh vitae augue congue tristique. </div>
              </div>
              <!--end item-->
              
              <div class="iconlist-2">
                <div class="icon dark"><i class="fa fa-long-arrow-right"></i></div>
                <div class="text">Praesent sed mauris sed ligula laoreet condimentum. </div>
              </div>
              <!--end item--> 
              
            </div>
            <!--end panel 1-->
            <div class="clearfix"></div>
            <br>
            <div id="example-6-tab-2" class="responsive-tabs-panel">
              <div class="responsive-tab-title ttitle"></div>
              <h5 class="uppercase">Desired Skills</h5>
              <p>Development dolor sit amet, consectetur adipiscing elit. Phasellus ac fringilla nulla, sit amet consequat eros. Pellentesque pharetra blandit commyolk. Phasellus massa nisl, feugiat ac bibendum et, dictum id ipsum. Quisque sit amet accumsan tortor It has survived not only five centuries, but also the leap into electronic typesetting, remaining.</p>
              <br>
              <div class="iconlist-2">
                <div class="icon dark"><i class="fa fa-long-arrow-right"></i></div>
                <div class="text">Ut vulputate metus quis urna feugiat sed porta arcu tincidunt.</div>
              </div>
              <!--end item-->
              
              <div class="iconlist-2">
                <div class="icon dark"><i class="fa fa-long-arrow-right"></i></div>
                <div class="text">Integer vitae nibh vitae augue congue tristique. </div>
              </div>
              <!--end item-->
              
              <div class="iconlist-2">
                <div class="icon dark"><i class="fa fa-long-arrow-right"></i></div>
                <div class="text">Praesent sed mauris sed ligula laoreet condimentum. </div>
              </div>
              <!--end item--> 
              
            </div>
            <!--end panel 2-->
            
            <div class="clearfix"></div>
            <br>
            
            <div id="example-6-tab-3" class="responsive-tabs-panel">
              <div class="responsive-tab-title ttitle"></div>
              <h5 class="uppercase">Required</h5>
              <p>Development dolor sit amet, consectetur adipiscing elit. Phasellus ac fringilla nulla, sit amet consequat eros. Pellentesque pharetra blandit commyolk. Phasellus massa nisl, feugiat ac bibendum et, dictum id ipsum. Quisque sit amet accumsan tortor It has survived not only five centuries, but also the leap into electronic typesetting, remaining.</p>
              <br>
              <div class="iconlist-2">
                <div class="icon dark"><i class="fa fa-long-arrow-right"></i></div>
                <div class="text">Ut vulputate metus quis urna feugiat sed porta arcu tincidunt.</div>
              </div>
              <!--end item-->
              
              <div class="iconlist-2">
                <div class="icon dark"><i class="fa fa-long-arrow-right"></i></div>
                <div class="text">Integer vitae nibh vitae augue congue tristique. </div>
              </div>
              <!--end item-->
              
              <div class="iconlist-2">
                <div class="icon dark"><i class="fa fa-long-arrow-right"></i></div>
                <div class="text">Praesent sed mauris sed ligula laoreet condimentum. </div>
              </div>
              <!--end item--> 
              
            </div>
            <!--end panel 3--> 
            
          </div>
        </div>
        <!--end column--> 
      <!--end item-->
    <!--end tabs--> 
    
    <div class="clearfix"></div>
  <br>
  
  <div class="col-md-12">
  <a class="btn btn-dark-3 btn-round" href="#">Read more</a>
  </div>
  
  <div class="clearfix"></div>
 <div class="col-divider-margin-6"></div>
 <br>

  <div class="col-md-12">
      <h4 class="uppercase">Graphic Designer</h4>
      <div class="title_small_line"></div>
      <div class="accordion_holder">
        <div class="accordion_example1"> 
          
          <!-- Section 1 -->
          <div class="accordion_in acc_active">
            <div class="acc_head">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            <div class="acc_content">
              <p>Development dolor sit amet, consectetur adipiscing elit. Phasellus ac fringilla nulla, sit amet consequat eros. Pellentesque pharetra blandit commyolk. Phasellus massa nisl, feugiat ac bibendum et, dictum id ipsum. Quisque sit amet accumsan tortor It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged many web sites.</p>
              <br>
              <ul class="iconlist">
              <li><i class="fa fa-long-arrow-right"></i> &nbsp; Etiam enim Suspendisse imperdiet cursus nisi Maecenas </li>
              <li><i class="fa fa-long-arrow-right"></i> &nbsp; Sed massa tellus aliquam rhoncus venenatis quis.</li>
              <li><i class="fa fa-long-arrow-right"></i> &nbsp; Praesent odio tellus posuere sed dictum sed fermentum </li>
              <li><i class="fa fa-long-arrow-right"></i> &nbsp; Vitae, hendrerit condimentum dapibus ac nulla.</li>
              <li><i class="fa fa-long-arrow-right"></i> &nbsp; Magna, eget scelerisque metus massa in neque</li>
            </ul>
            </div>
          </div>
          
          <!-- Section 2 -->
          <div class="accordion_in">
            <div class="acc_head">Integer posuere tellus vitae maximus dapibus.</div>
            <div class="acc_content">Nullam turpis. Cras dapibus, orci rutrum adipiscing luctus, nisl magna tempus urna, id porttitor nunc arcu et mauris. Suspendisse id justo id nisi suscipit porttitor. Pellentesque aliquet, leo id vestibulum eleifend, magna sem iaculis risus, quis volutpat turpis quam in tortor. Morbi euismod nulla aliquet felis. Sed nisi neque, fermentum sit amet, vestibulum et, pretium sit amet, tortor. Nulla egestas pede. Phasellus ac enim. Vivamus risus. Aliquam lacinia ante quis nibh. Curabitur velit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </div>
          </div>
          
          <!-- Section 3 -->
          <div class="accordion_in">
            <div class="acc_head">Donec ornare mi id enim fermentum efficitur.</div>
            <div class="acc_content"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Curabitur eget orci. Cras laoreet ligula. Etiam sit amet dolor. </div>
          </div>
          <br>
          <br>
  <a class="btn btn-prim dark btn-round" href="#">Read more</a>
  </div>
      </div>
      <!-- Accordion end --> 
    </div>
  
  
  <div class="clearfix"></div>
 <div class="col-divider-margin-6"></div>
 <br>
 
 
  <div class="col-md-12">
      <h4 class="uppercase">Web Developer</h4>
      <div class="title_small_line"></div>
      <div class="accordion_holder">
        <div class="accordion_example1"> 
          
          <!-- Section 1 -->
          <div class="accordion_in acc_active">
            <div class="acc_head">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            <div class="acc_content">
              <p>Development dolor sit amet, consectetur adipiscing elit. Phasellus ac fringilla nulla, sit amet consequat eros. Pellentesque pharetra blandit commyolk. Phasellus massa nisl, feugiat ac bibendum et, dictum id ipsum. Quisque sit amet accumsan tortor It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged many web sites.</p>
              <br>
              <ul class="iconlist">
              <li><i class="fa fa-long-arrow-right"></i> &nbsp; Etiam enim Suspendisse imperdiet cursus nisi Maecenas </li>
              <li><i class="fa fa-long-arrow-right"></i> &nbsp; Sed massa tellus aliquam rhoncus venenatis quis.</li>
              <li><i class="fa fa-long-arrow-right"></i> &nbsp; Praesent odio tellus posuere sed dictum sed fermentum </li>
              <li><i class="fa fa-long-arrow-right"></i> &nbsp; Vitae, hendrerit condimentum dapibus ac nulla.</li>
              <li><i class="fa fa-long-arrow-right"></i> &nbsp; Magna, eget scelerisque metus massa in neque</li>
            </ul>
            </div>
          </div>
          
          <!-- Section 2 -->
          <div class="accordion_in">
            <div class="acc_head">Integer posuere tellus vitae maximus dapibus.</div>
            <div class="acc_content">Nullam turpis. Cras dapibus, orci rutrum adipiscing luctus, nisl magna tempus urna, id porttitor nunc arcu et mauris. Suspendisse id justo id nisi suscipit porttitor. Pellentesque aliquet, leo id vestibulum eleifend, magna sem iaculis risus, quis volutpat turpis quam in tortor. Morbi euismod nulla aliquet felis. Sed nisi neque, fermentum sit amet, vestibulum et, pretium sit amet, tortor. Nulla egestas pede. Phasellus ac enim. Vivamus risus. Aliquam lacinia ante quis nibh. Curabitur velit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </div>
          </div>
          
          <!-- Section 3 -->
          <div class="accordion_in">
            <div class="acc_head">Donec ornare mi id enim fermentum efficitur.</div>
            <div class="acc_content"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Curabitur eget orci. Cras laoreet ligula. Etiam sit amet dolor. </div>
          </div>
          <br>
          <br>
  <a class="btn btn-prim dark btn-round" href="#">Read more</a>
  </div>
      </div>
      <!-- Accordion end --> 
    </div>

    </div>
    <!--end left column--> 
    
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
<!--end item -->
<div class="clearfix"></div>


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