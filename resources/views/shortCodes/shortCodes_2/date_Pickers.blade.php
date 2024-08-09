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
    <h3 class="uppercase text-white less-mar-1 title">Date and Time Pickers</h3>
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
       <div class="col-md-6"> <h3>Date and Time Pickers</h3></div>
        <div class="col-md-6">
        <ol class="breadcrumb">
    <li><a href="/home">Home</a></li>
    <li><a href="#">Shortcodes</a></li>
    <li class="current"><a href="#">Date and Time Pickers</a></li>
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
            <div class="col-md-12 col-sm-12 col-xs-12 shc-cal-white">
           <h5 class="uppercase">No Icon (input field only)</h5>
             <input type='text' class="datepicker-input" id='datetimepicker4' placeholder="MM/DD/YYYY" value="">
             <script>
            $(function () {
                $('#datetimepicker4').datetimepicker();
            });
        </script>
        </div>
        <!--end item--> 
    
    
    <div class="col-divider-margin-3"></div>
    
    <div class="col-md-12 col-sm-12 col-xs-12 calendar-dark">
           <h5 class="uppercase">Dark Calendar</h5>
             <input type='text' class="datepicker-input" id='datetimepicker3' placeholder="MM/DD/YYYY" value="">
             <script>
            $(function () {
                $('#datetimepicker3').datetimepicker();
            });
        </script>
        </div>
        <!--end item--> 
 
 <div class="col-divider-margin-3"></div>       
        
        <div class="col-md-12 col-sm-12 col-xs-12">
         <h5 class="uppercase">Input field with icon</h5>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" placeholder="MM/DD/YYYY" value="">
                    <span class="input-group-addon">
                       <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
              
<script>
	$(function () {
	$('#datetimepicker1').datetimepicker();
	autoclose: true;
	});
</script> 
        </div>
        <!--end item-->

<div class="col-divider-margin-3"></div>
        
         <div class="col-md-12 col-sm-6 col-xs-12">
         <h5 class="uppercase">Enabled/Disabled Dates</h5>
          <div class="form-group">
                <div class='input-group date' id='datetimepicker5'>
                    <input type='text' class="form-control" placeholder="MM/DD/YYYY" value="">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div> 
             <script>
            $(function () {
                $('#datetimepicker5').datetimepicker({
                    defaultDate: "11/1/2016",
                    disabledDates: [
                        moment("12/25/2016"),
                        new Date(2016, 11 - 1, 21),
                        "07/22/2016 00:53"
                    ]
                });
            });
        </script> 
        </div>
        <!--end item-->
        
 <div class="col-divider-margin-3"></div>
        
        <div class="col-md-12 col-sm-6 col-xs-12">
         <h5 class="uppercase">Custom Formats</h5>
          <div class="form-group">
                <div class='input-group date' id='datetimepicker2'>
                    <input type='text' class="form-control" placeholder="MM/DD/YYYY" value="">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>
                    </span>
                </div>
            </div> 
            <script>
            $(function () {
                $('#datetimepicker2').datetimepicker({
                    format: 'LT'
                });
            });
        </script>
        </div>
        <!--end item-->
        
        
         <div class="col-divider-margin-3"></div>
        
        <div class="col-md-12 col-sm-6 col-xs-12">
         <h5 class="uppercase">View Mode</h5>
          
           <div class="form-group">
            <div class='input-group date' id='datetimepicker9'>
                <input type='text' class="form-control" placeholder="MM/DD/YYYY" value="">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar">
                    </span>
                </span>
            </div>
        </div> 
           <script>
        $(function () {
            $('#datetimepicker9').datetimepicker({
                viewMode: 'years'
            });
        });
    </script>
        </div>
        <!--end item-->
        
        
    </div>
   <!-- end left col-->



	<div class="col-md-4">   
    <div class="col-md-12 col-sm-12 col-xs-12 calendar-date-hilight">
 <h5 class="uppercase">Inline Calendar Dark</h5>
 <div style="overflow:hidden;">
    <div class="calendar-holder"><div class="form-group">
        <div class="row">
            <div class="col-md-12">
                <div id="datetimepicker12"></div>
            </div>
        </div>
    </div></div>
    <script>
        $(function () {
            $('#datetimepicker12').datetimepicker({
                inline: true,
            });
        });
    </script>
</div>
 </div>
 <!--end item-->
 
 <div class="col-divider-margin-4"></div>
 
 <div class="col-md-12 col-sm-12 col-xs-12">
 <h5 class="uppercase">Inline Calendar Light</h5>
 <div style="overflow:hidden;">
    <div class="calendar-holder-2"><div class="form-group">
        <div class="row">
            <div class="col-md-12">
                <div id="datetimepicker13"></div>
            </div>
        </div>
    </div></div>
    <script>
        $(function () {
            $('#datetimepicker13').datetimepicker({
                inline: true,
            });
        });
    </script>
</div>
 </div>
 <!--end item-->
 
 
    </div>
   <!-- end right col-->

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