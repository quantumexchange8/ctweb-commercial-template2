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
              <h3 class="uppercase text-white less-mar-1 title">Page fullwidth</h3>
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
          <h4>Page fullwidth</h4>
        </div>
        <div class="col-md-6">
          <ol class="breadcrumb">
            <li><a href="/home">Home</a></li>
            <li><a href="#">Pages</a></li>
            <li class="current"><a href="#">Page fullwidth</a></li>
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

<div class="col-md-4 col-sm-12 col-xs-12 bmargin">
<ul class="sitemap">
        <li><a href="#"><i class="fa fa-caret-right"></i> Home</a></li>
        <li><a href="#"><i class="fa fa-caret-right"></i> Elements</a></li>
        <li><a href="#"><i class="fa fa-caret-right"></i> Layouts</a></li>
        <li><a href="#"><i class="fa fa-caret-right"></i> Pages</a>
          <ul>
            <li><a href="#"><i class="fa fa-caret-right"></i> About Style 1</a></li>
            <li><a href="#"><i class="fa fa-caret-right"></i> About Style 2</a></li>
            <li><a href="#"><i class="fa fa-caret-right"></i> About Style 3</a></li>
            <li><a href="#"><i class="fa fa-caret-right"></i> Services Style 1</a></li>
            <li><a href="#"><i class="fa fa-caret-right"></i> Services Style 2</a></li>
            <li><a href="#"><i class="fa fa-caret-right"></i> Services Style 3</a></li>
            <li><a href="#"><i class="fa fa-caret-right"></i> Services Style 4</a></li>
            <li><a href="#"><i class="fa fa-caret-right"></i> Team</a></li>
            <li><a href="#"><i class="fa fa-caret-right"></i> Full Width</a></li>
            <li><a href="#"><i class="fa fa-caret-right"></i> Left Sidebar</a></li>
          </ul>
        </li>
        <li><a href="#" class="gray"><i class="fa fa-caret-right"></i> Portfolio</a></li>
        <li><a href="#"><i class="fa fa-caret-right"></i> Features</a>
          <ul>
            <li><a href="#"><i class="fa fa-caret-right"></i> Blog</a>
              <ul>
                <li><a href="#"><i class="fa fa-caret-right"></i> Blog 3 Columns</a></li>
                <li><a href="#"><i class="fa fa-caret-right"></i> Blog 4 Columns</a></li>
                <li><a href="#"><i class="fa fa-caret-right"></i> Blog Single Post</a></li>
                <li><a href="#"><i class="fa fa-caret-right"></i> Blog Standard</a></li>
              </ul>
            </li>
          </ul>
        </li>
        
        <li><a href="#"><i class="fa fa-caret-right"></i> Shop</a></li>
        <li><a href="#" class="gray"><i class="fa fa-caret-right"></i> Contact</a>
          <ul>
            <li><a href="#"><i class="fa fa-caret-right"></i> Contact 1</a></li>
            <li><a href="#"><i class="fa fa-caret-right"></i> Contact 2</a></li>
            <li><a href="#"><i class="fa fa-caret-right"></i> Contact 3</a></li>
            <li><a href="#"><i class="fa fa-caret-right"></i> Contact 4</a></li>
            <li><a href="#"><i class="fa fa-caret-right"></i> Contact 5</a></li>
          </ul>
        </li>
      </ul>
</div>
<!--end left column-->

<div class="col-md-8 col-sm-12 col-xs-12 bmargin">
<img src="images/51.jpg" alt="" class="img-responsive">
<br>
<h2>Get Beautiful Layouts and Many More Features</h2>
<p>Etiam dictum. Nunc enim. Sed massa tellus, aliquam rhoncus, venenatis quis, suscipit ac, libero. Praesent sit dolor odio tellus, posuere sed, dictum sed, fermentum at, orci. Aenean arcu tortor, suscipit vitae, hendrerit condimentum, dapibus ac, nulla. Curabitur tempor. Donec dapibus placerat ipsum. Nulla facilisi. Aliquam ut leo quis nunc adipiscing faucibus. Mauris non quam ac eros rutrum fringilla. Quisque ut turpis. Nullam rhoncus feugiat quam. Nunc enim nibh, fermentum sed, lobortis ac, pellentesque ut, velit. Donec pretium, felis eget ultrices rhoncus, dui lacus convallis tortor, at mollis erat risus ac dui. Donec mattis, enim quis commyolk egestas, pede ipsum porttitor magna, eget scelerisque metus massa in neque. Nullam consectetuer. Etiam porttitor turpis in odio. Vivamus vulputate egestas velit. Curabitur accumsan felis non mauris. </p>
<br>

<p>Etiam dictum. Nunc enim. Sed massa tellus, aliquam rhoncus, venenatis quis, suscipit ac, libero. Praesent sit dolor odio tellus, posuere sed, dictum sed, fermentum at, orci. Aenean arcu tortor, suscipit vitae, hendrerit condimentum, dapibus ac, nulla. Curabitur tempor. Donec dapibus placerat ipsum. Nulla facilisi. Aliquam ut leo quis nunc adipiscing faucibus. Mauris non quam ac eros rutrum fringilla. Quisque ut turpis. Nullam rhoncus feugiat quam. Nunc enim nibh, fermentum sed, lobortis ac, pellentesque ut, velit. Donec pretium, felis eget ultrices rhoncus, dui lacus convallis tortor, at mollis erat risus ac dui. Donec mattis, enim quis commyolk egestas, pede ipsum porttitor magna, eget scelerisque metus massa in neque. Nullam consectetuer. Etiam porttitor turpis in odio. Vivamus vulputate egestas velit. Curabitur accumsan felis non mauris. </p>

</div>
<!--end right column-->

</div>
</div>
</section>
<!-- end section -->
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