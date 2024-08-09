<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Current Tech | Business </title>
<meta name="keywords" content="themeforest template" />
<meta name="description" content="best responsive html template in themeforest">
<meta name="author" content="Current Tech">

<!-- Mobile view -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Favicon -->
<link rel="shortcut icon" href="favicon.ico">
<link rel="stylesheet" type="text/css" href="js/bootstrap/bootstrap.min.css">

<!-- Google fonts  -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Yesteryear" rel="stylesheet">

<!-- Template's stylesheets -->
<link rel="stylesheet" href="js/megamenu/stylesheets/screen.css">
<link rel="stylesheet" href="css/theme-default.css" type="text/css">
<link rel="stylesheet" href="js/loaders/stylesheets/screen.css">
<link rel="stylesheet" href="css/corporate.css" type="text/css">
<link rel="stylesheet" href="css/shortcodes.css" type="text/css">
<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" type="text/css" href="fonts/Simple-Line-Icons-Webfont/simple-line-icons.css" media="screen" />
<link rel="stylesheet" href="fonts/et-line-font/et-line-font.css">
<link rel="stylesheet" type="text/css" href="js/revolution-slider/css/settings.css">
<link rel="stylesheet" type="text/css" href="js/revolution-slider/css/layers.css">
<link rel="stylesheet" type="text/css" href="js/revolution-slider/css/navigation.css">
<link rel="stylesheet" href="js/parallax/main.css">
<link rel="stylesheet" type="text/css" href="js/cubeportfolio/cubeportfolio.min.css">
<link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
<link href="js/owl-carousel/owl.theme.css" rel="stylesheet">
<link href="js/tabs/css/responsive-tabs.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
<link rel="stylesheet" href="js/ytplayer/ytplayer.css" />
<link href="js/accordion/css/smk-accordion.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="js/accordion/js/demo.css">
<link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
 <link href="js/file-upload/fileinput.css" rel="stylesheet" type="text/css">
 <link type="text/css" rel="stylesheet" href="js/pie-charts/line-chart/style.css">
 <link href="js/switches/bootstrap-switch.css" rel="stylesheet">
 <link rel="stylesheet" href="js/star-rating/css/star-rating.css" media="all" type="text/css">
<link rel="stylesheet" href="js/star-rating/themes/krajee-fa/theme.css" media="all" type="text/css">
<link rel="stylesheet" href="js/star-rating/themes/krajee-svg/theme.css" media="all" type="text/css">
<link rel="stylesheet" href="js/star-rating/themes/krajee-uni/theme.css" media="all" type="text/css">
<link rel="stylesheet" href="css/shop.css" type="text/css">
<link rel="stylesheet" href="js/product-preview/stylesheet.css">
<link rel="stylesheet" href="js/product-preview/fancybox/jquery.fancybox.css">
<!-- Template's stylesheets END -->

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Style Customizer's stylesheets -->
<link rel="stylesheet" type="text/css" href="js/style-customizer/css/spectrum.css">
<link rel="stylesheet" type="text/css" href="js/style-customizer/css/style-customizer.css">
<link rel="stylesheet/less" type="text/css" href="less/skin.less">
<!-- Style Customizer's stylesheets END -->

<!-- Skin stylesheet -->

</head>

<body>
<div class="over-loader loader-live">
  <div class="loader">
    <div class="loader-item style4">
      <div class="cube1"></div>
      <div class="cube2"></div>
    </div>
  </div>
</div>
<!--end loading--> 



<div class="wrapper-boxed">
  <div class="site-wrapper">
    <div class="col-md-12 nopadding">
        {{-- header --}}
      @yield('navbar')
    </div>
   
    @yield('content')

    {{-- Footer --}}
    @yield('footer')
    
    <a href="#" class="scrollup"><i class="fa fa-angle-up" aria-hidden="true"></i></a><!-- end scroll to top of the page--> 
    
  </div>
  <!--end site wrapper--> 
</div>
<!--end wrapper boxed--> 

<!-- Scripts --> 
<script src="js/jquery/jquery.js"></script> 
<script src="js/bootstrap/bootstrap.min.js"></script> 
<script src="js/style-customizer/js/spectrum.js"></script> 
<script src="js/less/less.min.js" data-env="development"></script> 
<script src="js/style-customizer/js/style-customizer.js"></script> 
<script src="js/file-upload/fileinput.js"></script>
<script src="js/file-upload/fr.js"></script>
<script src="js/file-upload/es.js"></script>
<!-- Scripts END --> 

<!-- Template scripts --> 
<script src="js/megamenu/js/main.js"></script> 
<script src="js/ytplayer/jquery.mb.YTPlayer.js"></script> 
<script src="js/ytplayer/elementvideo-custom.js"></script> 
<script src="js/ytplayer/play-pause-btn.js"></script> 
<script src="js/gmaps/jquery.gmap.min.js"></script> 
<script src="js/gmaps/examples.js"></script>
<!-- REVOLUTION JS FILES --> 
<script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script> 
<script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script> 
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
(Load Extensions only on Local File Systems ! 
The following part can be removed on Server for On Demand Loading) --> 
<script src="js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script> 
<script src="js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script> 
<script src="js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script> 
<script src="js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script> 
<script src="js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script> 
<script src="js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script> 
<script src="js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script> 
<script src="js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script> 
<script src="js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script> 
<script>
	var tpj=jQuery;			
	var revapi4;
	tpj(document).ready(function() {
	if(tpj("#rev_slider").revolution == undefined){
	revslider_showDoubleJqueryError("#rev_slider");
	}else{
		revapi4 = tpj("#rev_slider").show().revolution({
		sliderType:"standard",
		jsFileLocation:"js/revolution-slider/js/",
		sliderLayout:"auto",
		dottedOverlay:"none",
		delay:9000,
		navigation: {
		keyboardNavigation:"off",
		keyboard_direction: "horizontal",
		mouseScrollNavigation:"off",
		onHoverStop:"off",
		arrows: {
		style:"uranus",
		enable:true,
		hide_onmobile:false,
		hide_under:100,
		hide_onleave:true,
		hide_delay:200,
		hide_delay_mobile:1200,
		tmp:'',
		left: {
		h_align:"left",
		v_align:"center",
		h_offset:80,
		v_offset:0
		},
		right: {
		h_align:"right",
		v_align:"center",
		h_offset:80,
		v_offset:0
		}
		}
		,
		touch:{
		touchenabled:"on",
		swipe_threshold: 75,
		swipe_min_touches: 1,
		swipe_direction: "horizontal",
		drag_block_vertical: false
	}
	,
										
										
										
	},
		viewPort: {
		enable:true,
		outof:"pause",
		visible_area:"80%"
	},
	
	responsiveLevels:[1240,1024,778,480],
	gridwidth:[1240,1024,778,480],
	gridheight:[850,730,600,550],
	lazyType:"smart",
		parallax: {
		type:"mouse",
		origo:"slidercenter",
		speed:2000,
		levels:[2,3,4,5,6,7,12,16,10,50],
		},
	shadow:0,
	spinner:"off",
	stopLoop:"off",
	stopAfterLoops:-1,
	stopAtSlide:-1,
	shuffle:"off",
	autoHeight:"off",
	hideThumbsOnMobile:"off",
	hideSliderAtLimit:0,
	hideCaptionAtLimit:0,
	hideAllCaptionAtLilmit:0,
	disableProgressBar:"on",
	debugMode:false,
		fallbacks: {
		simplifyAll:"off",
		nextSlideOnWindowFocus:"off",
		disableFocusListener:false,
		}
	});
	}
	});	/*ready*/
</script> 
<script>
                var tpj = jQuery;

                var revapi280;
                tpj(document).ready(function() {
                    if (tpj("#rev_slider_280_1").revolution == undefined) {
                        revslider_showDoubleJqueryError("#rev_slider_280_1");
                    } else {
                        revapi280 = tpj("#rev_slider_280_1").show().revolution({
                            sliderType: "hero",
                            jsFileLocation: "../../revolution/js/",
                            sliderLayout: "auto",
                            dottedOverlay: "none",
                            delay: 9000,
                            navigation: {},
                            responsiveLevels: [1240, 1024, 778, 480],
                            visibilityLevels: [1240, 1024, 778, 480],
                            gridwidth: [1000, 1024, 778, 480],
                            gridheight: [700, 520, 420, 420],
                            lazyType: "none",
                            parallax: {
                                type: "scroll",
                                origo: "slidercenter",
                                speed: 1000,
                                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
                                type: "scroll",
                            },
                            shadow: 0,
                            spinner: "spinner2",
                            autoHeight: "off",
                            fullScreenAutoWidth: "off",
                            fullScreenAlignForce: "off",
                            fullScreenOffsetContainer: "",
                            fullScreenOffset: "60",
                            disableProgressBar: "on",
                            hideThumbsOnMobile: "off",
                            hideSliderAtLimit: 0,
                            hideCaptionAtLimit: 0,
                            hideAllCaptionAtLilmit: 0,
                            debugMode: false,
                            fallbacks: {
                                simplifyAll: "off",
                                disableFocusListener: false,
                            }
                        });
                    }
                }); /*ready*/
            </script> 
<script>
    $(window).load(function(){
      setTimeout(function(){

        $('.loader-live').fadeOut();
      },1000);
    })

  </script> 
<script src="js/parallax/parallax-background.min.js"></script> 
<script>
	(function ($) {
		$('.parallax').parallaxBackground();
	})(jQuery);
</script> 

<script>
    $('#file-fr').fileinput({
        language: 'fr',
        uploadUrl: '#',
        allowedFileExtensions : ['jpg', 'png','gif'],
    });
    $('#file-es').fileinput({
        language: 'es',
        uploadUrl: '#',
        allowedFileExtensions : ['jpg', 'png','gif'],
    });
    $("#file-0").fileinput({
        'allowedFileExtensions' : ['jpg', 'png','gif'],
    });
    $("#file-1").fileinput({
        uploadUrl: '#', // you must set a valid URL here else you will get an error
        allowedFileExtensions : ['jpg', 'png','gif'],
        overwriteInitial: false,
        maxFileSize: 1000,
        maxFilesNum: 10,
        //allowedFileTypes: ['image', 'video', 'flash'],
        slugCallback: function(filename) {
            return filename.replace('(', '_').replace(']', '_');
        }
	});
    /*
    $(".file").on('fileselect', function(event, n, l) {
        alert('File Selected. Name: ' + l + ', Num: ' + n);
    });
    */
	$("#file-3").fileinput({
		showUpload: false,
		showCaption: false,
		browseClass: "btn btn-primary btn-lg",
		fileType: "any",
        previewFileIcon: "<i class='glyphicon glyphicon-king'></i>"
	});
	$("#file-4").fileinput({
		uploadExtraData: {kvId: '10'}
	});
    $(".btn-warning").on('click', function() {
        if ($('#file-4').attr('disabled')) {
            $('#file-4').fileinput('enable');
        } else {
            $('#file-4').fileinput('disable');
        }
    });    
    $(".btn-info").on('click', function() {
        $('#file-4').fileinput('refresh', {previewClass:'bg-info'});
    });
    /*
    $('#file-4').on('fileselectnone', function() {
        alert('Huh! You selected no files.');
    });
    $('#file-4').on('filebrowse', function() {
        alert('File browse clicked for #file-4');
    });
    */
    $(document).ready(function() {
        $("#test-upload").fileinput({
            'showPreview' : false,
            'allowedFileExtensions' : ['jpg', 'png','gif'],
            'elErrorContainer': '#errorBlock'
        });
        /*
        $("#test-upload").on('fileloaded', function(event, file, previewId, index) {
            alert('i = ' + index + ', id = ' + previewId + ', file = ' + file.name);
        });
        */
    });
	</script>

<script src="js/pie-charts/line-chart/jquery.pista.js" charset="utf-8"></script>
<script src="js/pie-charts/chart/chart.js"></script>
<script>
var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
 type: 'bar',
 data: {
     labels: ["January", "February", "March", "April", "May", "June", "July"],
     datasets: [{
         label: "My First dataset",
         backgroundColor: "rgba(255,99,132,0.2)",
         borderColor: "rgba(255,99,132,1)",
         borderWidth: 1,
         hoverBackgroundColor: "rgba(255,99,132,0.4)",
         hoverBorderColor: "rgba(255,99,132,1)",
         data: [65, 59, 80, 81, 56, 55, 40],
     }]
 },
 options: {
     scales: {
         yAxes: [{
             ticks: {
                 beginAtZero:true
             }
         }]
     }
 }
});
</script>

<script>
var ctx = document.getElementById("myLineChart");
var myLineChart = Chart.Line(ctx, {
 type: 'line',
 data: {
     labels: ["January", "February", "March", "April", "May", "June", "July"],
    datasets: [
     {
         label: "My First dataset",
         fill: false,
         lineTension: 0.1,
         backgroundColor: "rgba(75,192,192,0.4)",
         borderColor: "rgba(75,192,192,1)",
         borderCapStyle: 'butt',
         borderDash: [],
         borderDashOffset: 0.0,
         borderJoinStyle: 'miter',
         pointBorderColor: "rgba(75,192,192,1)",
         pointBackgroundColor: "#fff",
         pointBorderWidth: 1,
         pointHoverRadius: 5,
         pointHoverBackgroundColor: "rgba(75,192,192,1)",
         pointHoverBorderColor: "rgba(220,220,220,1)",
         pointHoverBorderWidth: 2,
         pointRadius: 1,
         pointHitRadius: 10,
         data: [65, 59, 80, 81, 56, 55, 40],
     }
 ]
 },
 
});
</script>

<script>
var ctx = document.getElementById("myRadarChart");
var myRadarChart = new Chart(ctx, {
 type: 'radar',
 data: {
     labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
    datasets: [
     {
         label: "My First dataset",
         backgroundColor: "rgba(179,181,198,0.2)",
         borderColor: "rgba(179,181,198,1)",
         pointBackgroundColor: "rgba(179,181,198,1)",
         pointBorderColor: "#fff",
         pointHoverBackgroundColor: "#fff",
         pointHoverBorderColor: "rgba(179,181,198,1)",
         data: [65, 59, 90, 81, 56, 55, 40]
     },
     {
         label: "My Second dataset",
         backgroundColor: "rgba(255,99,132,0.2)",
         borderColor: "rgba(255,99,132,1)",
         pointBackgroundColor: "rgba(255,99,132,1)",
         pointBorderColor: "#fff",
         pointHoverBackgroundColor: "#fff",
         pointHoverBorderColor: "rgba(255,99,132,1)",
         data: [28, 48, 40, 19, 96, 27, 100]
     }
 ]
 },
 
});
</script>

<script src="js/switches/bootstrap-switch.js"></script>
  <script>
    $(function(argument) {
     $("[name='my-checkbox']").bootstrapSwitch();
    })
    </script>

<script>
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx,{
 type: 'pie',
 data: {
    labels: [
     "Red",
     "Blue",
     "Yellow"
 ],
    datasets: [
     {
         data: [300, 50, 100],
         backgroundColor: [
             "#FF6384",
             "#36A2EB",
             "#FFCE56"
         ],
         hoverBackgroundColor: [
             "#FF6384",
             "#36A2EB",
             "#FFCE56"
         ]
     }]
 },
 
});
</script>

<script src="js/product-preview/fancybox/jquery.fancybox.js"></script> 

<script>
  $(document).ready(function(){
    $('.product_preview_left .previews a').click(function(){
      var largeImage = $(this).attr('data-full');
      $('.selected').removeClass();
      $(this).addClass('selected');
      $('.full img').hide();
      $('.full img').attr('src', largeImage);
      $('.full img').fadeIn();


    }); // closing the listening on a click
    $('.full img').on('click', function(){
      var modalImage = $(this).attr('src');
      $.fancybox.open(modalImage);
    });
  }); //closing our doc ready
  </script>
<script>
    $(window).load(function(){
      setTimeout(function(){

        $('.loader-live').fadeOut();
      },1000);
    })

  </script>

<script src="js/star-rating/js/star-rating.js"></script> 
<script>
$(document).ready(function(){
        $('.kv-gly-star').rating({
            containerClass: 'is-star'
        });
        $('.kv-gly-heart').rating({
            containerClass: 'is-heart',
            defaultCaption: '{rating} hearts',
            starCaptions: function (rating) {
                return rating == 1 ? 'One heart' : rating + ' hearts';
            },
            filledStar: '<i class="glyphicon glyphicon-heart"></i>',
            emptyStar: '<i class="glyphicon glyphicon-heart-empty"></i>'
        });
        $('.kv-fa').rating({
            theme: 'krajee-fa',
            filledStar: '<i class="fa fa-star"></i>',
            emptyStar: '<i class="fa fa-star-o"></i>'
        });
        $('.kv-fa-heart').rating({
            defaultCaption: '{rating} hearts',
            starCaptions: function (rating) {
                return rating == 1 ? 'One heart' : rating + ' hearts';
            },
            theme: 'krajee-fa',
            filledStar: '<i class="fa fa-heart"></i>',
            emptyStar: '<i class="fa fa-heart-o"></i>'
        });
        $('.kv-uni-star').rating({
            theme: 'krajee-uni',
            filledStar: '&#x2605;',
            emptyStar: '&#x2606;'
        });
        $('.kv-uni-rook').rating({
            theme: 'krajee-uni',
            defaultCaption: '{rating} rooks',
            starCaptions: function (rating) {
                return rating == 1 ? 'One rook' : rating + ' rooks';
            },
            filledStar: '&#9820;',
            emptyStar: '&#9814;'
        });
        $('.kv-svg').rating({
            theme: 'krajee-svg',
            filledStar: '<span class="krajee-icon krajee-icon-star"></span>',
            emptyStar: '<span class="krajee-icon krajee-icon-star"></span>'
        });
        $('.kv-svg-heart').rating({
            theme: 'krajee-svg',
            filledStar: '<span class="krajee-icon krajee-icon-heart"></span>',
            emptyStar: '<span class="krajee-icon krajee-icon-heart"></span>',
            defaultCaption: '{rating} hearts',
            starCaptions: function (rating) {
                return rating == 1 ? 'One heart' : rating + ' hearts';
            },
            containerClass: 'is-heart'
        });

        $('.rating,.kv-gly-star,.kv-gly-heart,.kv-uni-star,.kv-uni-rook,.kv-fa,.kv-fa-heart,.kv-svg,.kv-svg-heart').on(
                'change', function () {
                    console.log('Rating selected: ' + $(this).val());
                });
    });
</script> 

<script src="js/tabs/js/responsive-tabs.min.js"></script> 
<script src="js/cubeportfolio/jquery.cubeportfolio.min.js"></script> 
<script src="js/cubeportfolio/main-mosaic3.js"></script>
<script src="js/cubeportfolio/main-mosaic3-cols3.js"></script> 
<script src="js/owl-carousel/owl.carousel.js"></script> 
<script src="js/owl-carousel/custom.js"></script> 
<script src="js/owl-carousel/owl.carousel.js"></script> 
<script src="js/accordion/js/smk-accordion.js"></script> 
<script src="js/accordion/js/custom.js"></script> 
<script src="js/progress-circle/raphael-min.js"></script> 
<script src="js/progress-circle/custom.js"></script> 
<script src="js/progress-circle/jQuery.circleProgressBar.js"></script> 
<script src="js/functions/functions.js"></script>
<script src="js/cubeportfolio/lightbox-gallery.js"></script> 
<script src="js/cubeportfolio/slider-projects.js"></script> 
<script src="js/parallax/parallax-background.min.js"></script>


@if (Request::is('1_Column') || Request::is('2_Column') )
	<script src="js/cubeportfolio/cols-2.js"></script> 
@endif

@if (Request::is('3_Column'))
	<script src="js/cubeportfolio/cols-3.js"></script> 
@endif

@if (Request::is('4_Column'))
	<script src="js/cubeportfolio/cols-4.js"></script> 
@endif

@if (Request::is('5_Column'))
	<script src="js/cubeportfolio/cols-5.js"></script> 
@endif

@if (Request::is('6_Column'))
	<script src="js/cubeportfolio/cols-6.js"></script> 
@endif

@if (Request::is('masonry'))
<script src="js/cubeportfolio/masonry.js"></script> 
@endif

@if (Request::is('masonry_Projects'))
	<script src="js/cubeportfolio/masonry-projects.js"></script> 
@endif

@if (Request::is('mosaic'))
	<script src="js/cubeportfolio/mosaic.js"></script> 
@endif

@if (Request::is('mosaic_Flat'))
	<script src="js/cubeportfolio/mosaic-flat.js"></script> 
@endif

@if (Request::is('mosaic_Projects'))
	<script src="js/cubeportfolio/mosaic-projects.js"></script> 
@endif

@if (Request::is('slider_Projects'))
	<script src="js/cubeportfolio/slider-projects.js"></script> 
@endif

@if (Request::is('style_Modern'))
	<script src="js/cubeportfolio/main.js"></script> 
@endif


</body>
</html>
