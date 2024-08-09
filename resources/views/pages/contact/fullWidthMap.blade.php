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
              <h3 class="uppercase text-white less-mar-1 title">Contact with full width map</h3>
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
          <h4>Contact with full width map</h4>
        </div>
        <div class="col-md-6">
          <ol class="breadcrumb">
            <li><a href="/home">Home</a></li>
            <li><a href="#">Pages</a></li>
            <li class="current"><a href="#">Contact with full width map</a></li>
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
    
  </div>
  
      </div>
      <!--end item-->
      
      <div class="col-md-4 text-left">
        <h3><strong>Get in Touch</strong></h3>
        <br>
        <h4>Address Info</h4>
        <h6>Company name</h6>
        <p>3096 Cemetery Hollow Street, Houston, TX 77099
          Telephone: +1 1234-567-89000
          FAX: +1 0123-4567-8900</p>
        <br>
        <p>E-mail: mail@companyname.com</p>
        <p>Website: www.yoursitename.com</p>
      </div>
      <!--end item--> 



</div>
</div>
</section>
<div class="clearfix"></div>
<!-- end section -->


<section>
  <div class="container-fluid">
    <div class="row">
      <div class="gmaps-holder-2">
        <div class="col-md-12 nopadding"> <br>
          <div id="map_extended_full" class="map">
            <p>This will be replaced with the Google Map.</p>
          </div>
        </div>
      </div>
      <!--end item--> 
      
    </div>
  </div>
</section>
<div class="clearfix"></div>
<!-- end section -->
@endsection

@section('footer')
@include('home.home.home_Footer')
@endsection