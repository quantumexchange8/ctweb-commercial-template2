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
              <h3 class="uppercase text-white less-mar-1 title">Package Plans</h3>
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
          <h4>Package Plans</h4>
        </div>
        <div class="col-md-6">
          <ol class="breadcrumb">
            <li><a href="/home">Home</a></li>
            <li><a href="#">Pages</a></li>
            <li class="current"><a href="#">Package Plans</a></li>
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
    <div class="domain-pricing-table">
      <table class="table-style-2">
        <thead>
          <tr>
            <th>TLD</th>
            <th>Registration</th>
            <th>Domain Transfer</th>
            <th>DNS Management</th>
            <th>Whois Privacy</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>.com</td>
            <td>$4.99</td>
            <td>$6.99</td>
            <td>Free</td>
            <td>$5.99</td>
            <td><a class="btn btn-gyellow btn-round pull-right" href="#">Register</a></td>
          </tr>
          <tr>
            <td>.org</td>
            <td>$4.99</td>
            <td>$6.99</td>
            <td>Free</td>
            <td>$5.99</td>
            <td><a class="btn btn-gyellow btn-round pull-right" href="#">Register</a></td>
          </tr>
          <tr>
            <td>.net</td>
            <td>$4.99</td>
            <td>$6.99</td>
            <td>Free</td>
            <td>$5.99</td>
             <td><a class="btn btn-gyellow btn-round pull-right" href="#">Register</a></td>
          </tr>
          <tr>
            <td>.biz</td>
            <td>$4.99</td>
            <td>$6.99</td>
            <td>Free</td>
            <td>$5.99</td>
            <td><a class="btn btn-gyellow btn-round pull-right" href="#">Register</a></td>
          </tr>
          <tr>
            <td>.in</td>
            <td>$4.99</td>
            <td>$6.99</td>
            <td>Free</td>
            <td>$5.99</td>
             <td><a class="btn btn-gyellow btn-round pull-right" href="#">Register</a></td>
          </tr>
          <tr>
            <td>.co.uk</td>
            <td>$4.99</td>
            <td>$6.99</td>
            <td>Free</td>
            <td>$5.99</td>
             <td><a class="btn btn-gyellow btn-round pull-right" href="#">Register</a></td>
          </tr>
          <tr>
            <td>.info</td>
            <td>$4.99</td>
            <td>$6.99</td>
            <td>Free</td>
            <td>$5.99</td>
             <td><a class="btn btn-gyellow btn-round pull-right" href="#">Register</a></td>
          </tr>
          <tr>
            <td>.co</td>
            <td>$4.99</td>
            <td>$6.99</td>
            <td>Free</td>
            <td>$5.99</td>
             <td><a class="btn btn-gyellow btn-round pull-right" href="#">Register</a></td>
          </tr>
        </tbody>
      </table>
    </div>
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