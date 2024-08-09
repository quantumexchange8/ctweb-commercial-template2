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
    <h3 class="uppercase text-white less-mar-1 title">Blockquotes</h3>
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
            <div class="col-md-6">
              <h4>Blockquotes</h4>
            </div>
            <div class="col-md-6">
              <ol class="breadcrumb">
                <li><a href="/home">Home</a></li>
                <li><a href="#">Shortcodes</a></li>
                <li class="current"><a href="#">Blockquotes</a></li>
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
          <div class="col-md-6 col-sm-6 col-xs-12 margin-bottom">
            <blockquote>
              <p class="font-weight-4">Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo augue Aliquam ornare hendrerit augue Cras tellus.</p>
              <small> by <cite>Benjamin - mediainc</cite> </small> </blockquote>
          </div>
          <!--end item-->
          
          <div class="col-md-6 col-sm-6 col-xs-12 margin-bottom">
            <blockquote class="blockquote-1">
              <p class="font-weight-4">Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo augue Aliquam ornare hendrerit.</p>
              <small> by <cite>Benjamin - mediainc</cite> </small> </blockquote>
          </div>
          <!--end item-->
          
          <div class="clearfix"></div>
          <div class="col-divider-margin-4"></div>
          <div class="divider-line solid light"></div>
          <div class="col-divider-margin-4"></div>
          <div class="col-md-6 col-sm-6 col-xs-12 margin-bottom">
            <blockquote class="blockquote-2">
              <p class="font-weight-4">Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo augue Aliquam ornare hendrerit.</p>
              <small> by <cite>Benjamin - mediainc</cite> </small> </blockquote>
          </div>
          <!--end item-->
          
          <div class="col-md-6 col-sm-6 col-xs-12 margin-bottom">
            <blockquote class="blockquote-3">
              <p class="font-weight-4">Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo augue Aliquam ornare hendrerit.</p>
              <small> by <cite>Benjamin - mediainc</cite> </small> </blockquote>
          </div>
          <!--end item-->
          
          <div class="clearfix"></div>
          <div class="col-divider-margin-4"></div>
          <div class="divider-line solid light"></div>
          <div class="col-divider-margin-4"></div>
          <div class="col-md-6 col-sm-6 col-xs-12 margin-bottom">
            <blockquote class="blockquote-4 ">
              <p class="font-weight-4">Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo augue Aliquam ornare hendrerit.</p>
              <small> by <cite>Benjamin - mediainc</cite> </small> </blockquote>
          </div>
          <!--end item-->
          
          <div class="col-md-6 col-sm-6 col-xs-12 margin-bottom">
            <blockquote class="blockquote-4 text-right ">
              <p class="font-weight-4">Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo augue Aliquam ornare hendrerit.</p>
              <small> by <cite>Benjamin - mediainc</cite> </small> </blockquote>
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
@include('home.home.home_Footer')
@endsection