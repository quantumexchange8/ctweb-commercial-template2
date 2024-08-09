@extends('layout.master')

@section('navbar')
@include('home.home3.home3_Navbar')
@endsection

@section('content')
<div class="clearfix"></div>
    
<section class="section-side-image clearfix">
     <div class="img-holder col-md-12 col-sm-12 col-xs-12">
       <div class="background-imgholder" style="background:url(images/header-inner-2.jpg);"><img class="nodisplay-image" src="images/header-inner-2.jpg" alt=""> </div>
     </div>
     <div class="container-fluid">
       <div class="row">       
       <div class="col-md-12 col-sm-12 col-xs-12 clearfix nopadding">
       <div class="header-inner less-height">        
      <div class="overlay">       
      <div class="text text-center">
   <h3 class="uppercase text-white less-mar-1 title">Single Product Full Width</h3>
   <h6 class="uppercase text-white sub-title">Get Many More Features</h6>
   </div>
      </div>       
       </div></div>        
       </div>
     </div>
   </section>
   <div class=" clearfix"></div>
   <!--end header section -->
   
   <section>
   <div class="pagenation-holder">
     <div class="container">
       <div class="row">
      <div class="col-md-6"> <h3>Single Product Full Width</h3></div>
       <div class="col-md-6">
       <ol class="breadcrumb">
   <li><a href="/home">Home</a></li>
   <li><a href="#">Shop</a></li>
   <li class="current"><a href="#">Single Product Full Width</a></li>
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


<div class="col-md-8 col-sm-12 col-xs-12  margin-bottom">
<div class="product_preview_left">
<div class="gallery">

<div class="full"> 
<!-- first image is viewable to start --> 
<img src="images/top1large.jpg" alt=""> </div>


<div class="previews"> 

<a class="selected" data-full="images/top1large.jpg"><img src="images/top1small.jpg" alt=""></a> 

<a data-full="images/top2large.jpg"><img src="images/top2small.jpg" alt=""></a> 

<a data-full="images/top3large.jpg"><img src="images/top3small.jpg" alt=""></a> 

<a data-full="images/top4large.jpg"><img src="images/top4small.jpg" alt=""></a> 


</div>


</div>
</div>
</div> 
<!--end left-->

<div class="col-md-4 col-sm-12 col-xs-12">
<h4 class="uppercase">Fashion Casuals</h4>
<div class="divider-line solid light"></div>
<br>
<div class="col-md-5"><h2 class="text-primary font-weight-4">$299</h2></div>
<div class="col-md-7">
<div class="stars">
<span><i class="fa fa-star" aria-hidden="true"></i>
<span><i class="fa fa-star" aria-hidden="true"></i>
<span><i class="fa fa-star" aria-hidden="true"></i>
<span><i class="fa fa-star" aria-hidden="true"></i>
<span><i class="fa fa-star" aria-hidden="true"></i>
</span>
</span></span></span></span></div>
</div>

<div class="clearfix"></div>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commyolk augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Curabitur eget orci. </p>
<div class="clearfix"></div>
<br>
<a class="btn btn-dark-3 btn-medium uppercase" href="#">Add to Cart</a>
<div class="clearfix"></div>
<br><br>
<div class="divider-line solid light"></div>
<br>
<div class="pro-details"><span>Product ID :</span> 1234578</div>
<div class="pro-details"><span>Category :</span> 1234578</div>
<div class="pro-details"><span>Tags :</span> 1234578</div>
<div class="pro-details"><span>Product ID :</span> 1234578</div>
<div class="clearfix"></div>
<br><br>
<ul class="sp-sc-icons">
             <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
             <li><a href="#"><i class="fa fa-facebook"></i></a></li>
             <li><a class="active" href="#"><i class="fa fa-google-plus"></i></a></li>
             <li><a href="#"><i class="fa fa-renren" aria-hidden="true"></i></a></li>
             <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
           </ul>
           
</div>
<!--end right-->
</div>
 </section>
<div class="clearfix"></div>
 <!-- end section -->
  


<section class="sec-bpadding-2">
     <div class="container">
       <div class="row">
         <div class="col-xs-12 nopadding">
           <div class="sec-title-container text-center">
             <h6 class="uppercase font-weight-4 less-mar-1 text-primary">new collection</h6>
             <h4 class="uppercase font-weight-7 less-mar-1">Related Products</h4>
             <div class="sp-title-line-1"></div>
           </div>
         </div>
         <div class="clearfix"></div>
         <!--end title-->
         
         <div class="col-md-3 col-sm-6 col-xs-12">
           <div class="sp-feature-box-3 margin-bottom">
             <div class="img-box"> <a href="#" class="view-btn uppercase">View</a>
               <div class="badge">Hot</div>
               <img src="images/sp-4.jpg" alt="" class="img-responsive"> </div>
             <div class="clearfix"></div>
             <br>
             <h5 class="less-mar-1">Designer top</h5>
             <p>Lorem ipsum dolor sit amet</p>
             <h5 class="text-primary">$ 25.00–$ 29.00</h5>
             <br>
             <a class="btn btn-border light btn-small" href="#">Add to cart</a> </div>
         </div>
         <!--end item-->
         
         <div class="col-md-3 col-sm-6 col-xs-12">
           <div class="sp-feature-box-3 margin-bottom">
             <div class="img-box"> <a href="#" class="view-btn uppercase">View</a> <img src="images/sp-13.jpg" alt="" class="img-responsive"> </div>
             <div class="clearfix"></div>
             <br>
             <h5 class="less-mar-1">Black Pattren Top</h5>
             <p>Lorem ipsum dolor sit amet</p>
             <h5 class="text-primary">$ 25.00–$ 29.00</h5>
             <br>
             <a class="btn btn-border light btn-small" href="#">Add to cart</a> </div>
         </div>
         <!--end item-->
         
         <div class="col-md-3 col-sm-6 col-xs-12">
           <div class="sp-feature-box-3 margin-bottom">
             <div class="img-box"> <a href="#" class="view-btn uppercase">View</a>
               <div class="badge">New</div>
               <img src="images/sp-6.jpg" alt="" class="img-responsive"> </div>
             <div class="clearfix"></div>
             <br>
             <h5 class="less-mar-1">White Overcoat</h5>
             <p>Lorem ipsum dolor sit amet</p>
             <h5 class="text-primary">$ 25.00–$ 29.00</h5>
             <br>
             <a class="btn btn-border light btn-small" href="#">Add to cart</a> </div>
         </div>
         <!--end item-->
         
         <div class="col-md-3 col-sm-6 col-xs-12">
           <div class="sp-feature-box-3 margin-bottom">
             <div class="img-box"> <a href="#" class="view-btn uppercase">View</a> <img src="images/sp-7.jpg" alt="" class="img-responsive"> </div>
             <div class="clearfix"></div>
             <br>
             <h5 class="less-mar-1">Casual dress</h5>
             <p>Lorem ipsum dolor sit amet</p>
             <h5 class="text-primary">$ 25.00–$ 29.00</h5>
             <br>
             <a class="btn btn-border light btn-small" href="#">Add to cart</a> </div>
         </div>
         <!--end item--> 
       </div>
     </div>
   </section>
   <div class="clearfix"></div>
   <!-- end section -->
      
   <section>
     <div class="divider-line solid light"></div>
     <div class="container">
       <div class="row">
        <div class="clearfix"></div>
           <ul class="clients-list noborder grid-cols-6 hover-6">
   <li><a href="#"><img src="images/shortcodes/1.png" alt=""></a></li>
   <li><a href="#"><img src="images/shortcodes/2.png" alt=""></a></li>
   <li><a href="#"><img src="images/shortcodes/3.png" alt=""></a></li>
   <li><a href="#"><img src="images/shortcodes/4.png" alt=""></a></li>
   <li><a href="#"><img src="images/shortcodes/5.png" alt=""></a></li>
   <li><a href="#"><img src="images/shortcodes/6.png" alt=""></a></li>					
   </ul>
       </div>
     </div>
   </section>
   <div class="clearfix"></div>
   <!-- end section -->
   
   <section class="section-primary sec-padding">
     <div class="container">
       <div class="row">
         <div class="col-md-12 text-center">
           <h4 class=" uppercase font-weight-3 text-white">SIGN UP FOR OUR NEWSLETTER & PROMOTIONS</h4>
           <div class="sp-feature-box-4">
             <input type="search" placeholder="Email Address">
             <input name="search" value="Subscribe" class="submit-btn" type="submit">
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