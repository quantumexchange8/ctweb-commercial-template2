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
    <h3 class="uppercase text-white less-mar-1 title">File Uploads</h3>
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
              <h4>File Uploads</h4>
            </div>
            <div class="col-md-6">
              <ol class="breadcrumb">
                <li><a href="/home">Home</a></li>
                <li><a href="#">Shortcodes</a></li>
                <li class="current"><a href="#">File Uploads</a></li>
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
  
  <div class="col-md-12">
  
<div class="container kv-main">
            
            <form enctype="multipart/form-data">
                <input id="file-0a" class="file" type="file" multiple="" data-min-file-count="1">
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-default">Reset</button>
            </form>
            <hr>
            <form enctype="multipart/form-data">
                <label>Test invalid input type</label>
                <input id="file-0b" class="file" type="text" multiple="" data-min-file-count="1">
                <script>
                $(document).on('ready', function(){$("#file-0b").fileinput();});
                </script>
            </form>
            <hr>
            <form enctype="multipart/form-data">
                <input id="file-0a" class="file" type="file" multiple="" data-min-file-count="3">
                <hr>
                 <div class="form-group">
                    <input id="file-0b" class="file" type="file">
                </div>
                <hr>
                <div class="form-group">
                    <input id="file-1" type="file" multiple="" class="file" data-overwrite-initial="false" data-min-file-count="2">
                </div>
                <hr>
                <div class="form-group">
                    <input id="file-2" type="file" class="file" readonly="" data-show-upload="false">
                </div> 
                <hr>
                <div class="form-group">
                    <label>Preview File Icon</label>
                    <input id="file-3" type="file" multiple="true">
                </div>
                <hr>
                <div class="form-group">
                    <input id="file-4" type="file" class="file" data-upload-url="#">
                </div>
                <hr>
                <div class="form-group">
                    <button class="btn btn-warning" type="button">Disable Test</button>
                    <button class="btn btn-info" type="reset">Refresh Test</button>
                    <button class="btn btn-primary">Submit</button>
                    <button class="btn btn-default" type="reset">Reset</button>
                </div>
                <hr>
                <div class="form-group">
                    <input type="file" class="file" id="test-upload" multiple="">
                    <div id="errorBlock" class="help-block"></div>
                </div>
                <hr>
                <div class="form-group">
                    <input id="file-5" class="file" type="file" multiple="" data-preview-file-type="any" data-upload-url="#">
                </div>
            </form>
            
            
            <hr>
            <h4>Multi Language Inputs</h4>
            <form enctype="multipart/form-data">
                <label>French Input</label>
                <input id="file-fr" name="file-fr[]" type="file" multiple="">
               <div class="col-divider-margin-5"></div>
                <label>Spanish Input</label>
                <input id="file-es" name="file-es[]" type="file" multiple="">
            </form>
            
            <br>
        </div>
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