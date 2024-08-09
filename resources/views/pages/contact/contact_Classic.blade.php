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
              <h3 class="uppercase text-white less-mar-1 title">Contact Classic</h3>
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
          <h4>Contact Classic</h4>
        </div>
        <div class="col-md-6">
          <ol class="breadcrumb">
            <li><a href="/home">Home</a></li>
            <li><a href="#">Pages</a></li>
            <li class="current"><a href="#">Contact Classic</a></li>
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

<div class="col-md-7 col-sm-12 col-xs-12">

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
    
  </div></div><!-- end .smart-wrap section -->
        <!-- end .smart-forms section --> 
      </div>
      <!--end item-->
      
      <div class="col-md-5 col-sm-12 col-xs-12 text-left margin-bottom">
        <h4>Address Info</h4>
        <h6>Company name</h6>
        <p>3096 Cemetery Hollow Street, Houston, TX 77099
          Telephone: +1 1234-567-89000
          FAX: +1 0123-4567-8900</p>
        <br>
        <p>E-mail: mail@companyname.com</p>
        <p>Website: www.yoursitename.com</p>
        <br><br>
      </div>
      <!--end item--> 


<h4>Find Address</h4>
<div class="col-md-5 col-sm-12 col-xs-12 text-left">

        <div id="map_extended" class="map">
            <p>This will be replaced with the Google Map.</p>
          </div>
      </div>
      <!--end map-->

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