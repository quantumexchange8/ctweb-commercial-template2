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
                <h3 class="uppercase text-white less-mar-1 title">Tooltips</h3>
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
          <h4>Tooltips</h4>
        </div>
        <div class="col-md-6">
          <ol class="breadcrumb">
            <li><a href="/home">Home</a></li>
            <li><a href="#">Shortcodes</a></li>
            <li class="current"><a href="#">Tooltips</a></li>
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
      <div class="col-md-2">
        <div class="text-box padding-2 white text-center"> <a href="#" aria-label="bottom-right" class="hint--bottom-right">
          <h6>Bottom-Right</h6>
          </a> </div>
      </div>
      <!--end item-->
      
      <div class="col-md-2">
        <div class="text-box padding-2 white text-center"> <a href="#" aria-label="Bottom" class="hint--bottom">
          <h6>Bottom</h6>
          </a> </div>
      </div>
      <!--end item-->
      
      <div class="col-md-2">
        <div class="text-box padding-2 white text-center"> <a href="#" aria-label="bottom-left" class="hint--bottom-left">
          <h6>Bottom-Left</h6>
          </a> </div>
      </div>
      <!--end item-->
      
      <div class="col-md-2">
        <div class="text-box padding-2 white text-center"> <a href="#" aria-label="right" class="hint--right">
          <h6>Right</h6>
          </a> </div>
      </div>
      <!--end item-->
      
      <div class="col-md-2">
        <div class="text-box padding-2 white text-center"> <a href="#" aria-label="left" class="hint--left">
          <h6>Left</h6>
          </a> </div>
      </div>
      <!--end item-->
      
      <div class="col-md-2">
        <div class="text-box padding-2 white text-center"> <a href="#" aria-label="top-right" class="hint--top-right">
          <h6>Top-Right</h6>
          </a> </div>
      </div>
      <!--end item-->
      
      <div class="col-md-4"> <br>
        <br>
        <h4>Color Modifiers</h4>
        <p> <a class="status-icon  hint--bottom-right  hint--error" style="background:indianred" aria-label="This is an error tooltip"> <svg style="width:24px;height:24px" viewbox="0 0 24 24">
          <path fill="#ffffff" d="M8.27,3L3,8.27V15.73L8.27,21H15.73L21,15.73V8.27L15.73,3M8.41,7L12,10.59L15.59,7L17,8.41L13.41,12L17,15.59L15.59,17L12,13.41L8.41,17L7,15.59L10.59,12L7,8.41"></path>
          </svg> </a> <a class="status-icon  hint--bottom-right  hint--warning" style="background:orange" aria-label="This is a warning tooltip"> <svg style="width:24px;height:24px" viewbox="0 0 24 24">
          <path fill="#ffffff" d="M11,4.5H13V15.5H11V4.5M13,17.5V19.5H11V17.5H13Z"></path>
          </svg> </a> <a class="status-icon  hint--bottom-left  hint--info" style="background:lightblue" aria-label="This is an info tooltip"> <svg style="width:24px;height:24px" viewbox="0 0 24 24">
          <path fill="#ffffff" d="M12,2A7,7 0 0,1 19,9C19,11.38 17.81,13.47 16,14.74V17A1,1 0 0,1 15,18H9A1,1 0 0,1 8,17V14.74C6.19,13.47 5,11.38 5,9A7,7 0 0,1 12,2M9,21V20H15V21A1,1 0 0,1 14,22H10A1,1 0 0,1 9,21M12,4A5,5 0 0,0 7,9C7,11.05 8.23,12.81 10,13.58V16H14V13.58C15.77,12.81 17,11.05 17,9A5,5 0 0,0 12,4Z"></path>
          </svg> </a> <a class="status-icon  hint--bottom-right  hint--success" style="background:lightgreen" aria-label="This is success tooltip"> <svg style="width:24px;height:24px" viewbox="0 0 24 24">
          <path fill="#ffffff" d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"></path>
          </svg> </a> </p>
      </div>
      <!--end item-->
      
      <div class="col-md-6"> <br>
        <br>
        <h4>Tooltip Sizes</h4>
        <div class="col-md-4">
          <div class="text-box white padding-2 text-center"> <a class="hint--top  hint--small" href="#" data-hint="You can show very very long sentences inside tooltips by using various available size variation classes.">
            <h6>Small</h6>
            </a> </div>
        </div>
        <div class="col-md-4">
          <div class="text-box white padding-2 text-center"> <a class="hint--top  hint--medium" href="#" data-hint="You can show very very long sentences inside tooltips by using various available size variation classes.">
            <h6>Medium</h6>
            </a> </div>
        </div>
        <div class="col-md-4">
          <div class="text-box white padding-2 text-center"> <a class="hint--top  hint--large" href="#" data-hint="You can show very very long sentences inside tooltips by using various available size variation classes.">
            <h6>Large</h6>
            </a> </div>
        </div>
      </div>
      <!--end item-->
      
      <div class="col-md-2"> <br>
        <br>
        <h4>Bounce</h4>
        <div class="text-box white padding-2 text-center"> <a class="hint--top  hint--bounce" href="#" aria-label="Bounce">
          <h6>Bounce</h6>
          </a> </div>
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