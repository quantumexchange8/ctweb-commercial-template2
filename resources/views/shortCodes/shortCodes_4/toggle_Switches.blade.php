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
                <h3 class="uppercase text-white less-mar-1 title">Toggle Switches</h3>
                <h6 class="uppercase text-white sub-title">Get Many More Features</h6>
              </div>
            </div>
          </div>
        </div>
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
          <h4>Toggle Switches</h4>
        </div>
        <div class="col-md-6">
          <ol class="breadcrumb">
            <li><a href="/home">Home</a></li>
            <li><a href="#">Shortcodes</a></li>
            <li class="current"><a href="#">Toggle Switches</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<!--end section-->


<section class="sec-less-padding">
<div class="container">
<div class="row">

<div class="col-md-3 col-sm-6">

        <h4>State</h4>
        <p>
          <input id="switch-state" type="checkbox" name="my-checkbox" checked="">
        </p>
        
      </div>
      <!--end item-->
      
     <div class="col-md-3 col-sm-6">
        <h4>Sizes</h4>
        <p>
          <input id="switch-size" type="checkbox" name="my-checkbox" checked="" data-size="mini">
        </p>
        
        <p>
          <input id="switch-size" type="checkbox" name="my-checkbox" checked="" data-size="small">
        </p>
        <p>
          <input id="switch-size" type="checkbox" name="my-checkbox" checked="" data-size="normal">
        </p>
        <p>
          <input id="switch-size" type="checkbox" name="my-checkbox" checked="" data-size="large">
        </p>
      </div>
      <!--end item-->

<div class="col-md-3 col-sm-6">
        <h4>Animate</h4>
        <p>
          <input id="switch-animate" type="checkbox" name="my-checkbox" checked="">
        </p>
        
      </div>
      <!--end item-->
      
      <div class="col-md-3 col-sm-6">
        <h4>Disabled</h4>
        <p>
          <input id="switch-disabled" type="checkbox" name="my-checkbox" checked="" disabled="">
        </p>
        
      </div>
      <!--end item-->
</div>
</div>
</section>
<div class="clearfix"></div>
<!-- end section -->


<div class="divider-line solid light"></div>

<section class="sec-less-padding">
<div class="container">
<div class="row">

<div class="col-md-3 col-sm-6">
        <h4>Readonly</h4>
        <p>
          <input id="switch-readonly" type="checkbox" name="my-checkbox" checked="" readonly="">
        </p>
        
      </div>
      <!--end item-->
      
      <div class="col-md-3 col-sm-6">
        <h4>Indeterminate</h4>
        <p>
         <input id="switch-indeterminate" type="checkbox" name="my-checkbox" checked="" data-indeterminate="true">
        </p>
        
      </div>
      <!--end item-->
      
      <div class="col-md-3 col-sm-6">
        <h4>Inverse</h4>
        <p>
         <input id="switch-inverse" type="checkbox" name="my-checkbox" checked="" data-inverse="true">
        </p>
        
      </div>
      <!--end item-->
      
       <div class="col-md-3 col-sm-6">
        <h4>On Color</h4>
        <p>
         <input id="switch-onColor" type="checkbox" name="my-checkbox" checked="" data-on-color="info">
        </p>
        
      </div>
      <!--end item-->


</div>
</div>
</section>
<div class="clearfix"></div>
<!-- end section -->


<div class="divider-line solid light"></div>


<section class="sec-less-padding">
<div class="container">
<div class="row">
<h4>On Color</h4>
<div class="col-md-3 col-sm-6">
        
        <p>
         <input id="switch-onColor" name="my-checkbox" type="checkbox" checked="" data-on-color="info">
        </p>
        
      </div>
      <!--end item-->

<div class="col-md-3 col-sm-6">
        <p>
         <input id="switch-onColor" name="my-checkbox" type="checkbox" checked="" data-on-color="warning">
        </p>
        
      </div>
      <!--end item-->
      
      <div class="col-md-3 col-sm-6">
        <p>
         <input id="switch-onColor" name="my-checkbox" type="checkbox" checked="" data-on-color="success">
        </p>
        
      </div>
      <!--end item-->
      
      <div class="col-md-3 col-sm-6">
        <p>
         <input id="switch-onColor" name="my-checkbox" type="checkbox" checked="" data-on-color="default">
        </p>
        
      </div>
      <!--end item-->
      

</div>
</div>
</section>
<div class="clearfix"></div>
<!-- end section -->




<div class="divider-line solid light"></div>


<section class="sec-less-padding">
<div class="container">
<div class="row">
<h4>Off Color</h4>
<div class="col-md-3 col-sm-6">
        
        <p>
         <input id="switch-offColor" type="checkbox" name="my-checkbox" data-off-color="info">
        </p>
        
      </div>
      <!--end item-->

<div class="col-md-3 col-sm-6">
        <p>
         <input id="switch-offColor" type="checkbox" name="my-checkbox" data-off-color="warning">
        </p>
        
      </div>
      <!--end item-->
      
      <div class="col-md-3 col-sm-6">
        <p>
         <input id="switch-offColor" type="checkbox" name="my-checkbox" data-off-color="success">
        </p>
        
      </div>
      <!--end item-->
      
      <div class="col-md-3 col-sm-6">
        <p>
         <input id="switch-offColor" type="checkbox" name="my-checkbox" data-off-color="warning">
        </p>
        
      </div>
      <!--end item-->
      

</div>
</div>
</section>
<div class="clearfix"></div>
<!-- end section -->

<div class="divider-line solid light"></div>

<section class="sec-padding">
<div class="container">
<div class="row">

<div class="col-md-3 col-sm-6">
<h4>On text</h4>
        <p>
        <input id="switch-onText" type="checkbox" name="my-checkbox" checked="" data-on-text="Yes">
        </p>
        
      </div>
      <!--end item-->
      
 <div class="col-md-3 col-sm-6">
<h4>Off text</h4>
        <p>
        <input id="switch-offText" type="checkbox" name="my-checkbox" data-off-text="No">
        </p>
        
      </div>
      <!--end item-->
      
           <div class="col-md-3 col-sm-6">
<h4>Lable text</h4>
        <p>
         <input id="switch-labelText" type="checkbox" name="my-checkbox" data-label-text="Label">
        </p>
        
      </div>
      <!--end item-->
      
   
   
    <div class="col-md-3 col-sm-6">
<h4>Handle Width</h4>
        <p>
        <input id="switch-handleWidth" type="checkbox" name="my-checkbox" data-handle-width="100">
        </p>
        
      </div>
      <!--end item-->

</div>
</div>
</section>
<div class="clearfix"></div>
<!-- end section -->



<section class="sec-less-padding">
<div class="container">
<div class="row text-center">

<h2 class="h4">Inside Modals</h2>
      <button data-toggle="modal" data-target="#modal-switch" class="btn btn-default">Open Modal</button>
      <div id="modal-switch" tabindex="-1" role="dialog" aria-labelledby="modal-switch-label" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" data-dismiss="modal" class="close"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <div id="modal-switch-label" class="modal-title">Title</div>
            </div>
            <div class="modal-body">
              <input id="switch-modal" type="checkbox" name="my-checkbox" checked="">
            </div>
          </div>
        </div>
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