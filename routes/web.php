<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.home.home');
});

Route::get('/home', function () {
    return view('home.home.home');
});

Route::get('/home2', function () {
    return view('home.home2.home2');
});

Route::get('/home3', function () {
    return view('home.home3.home3');
});

Route::get('/home4', function () {
    return view('home.home4.home4');
});

Route::get('/home5', function () {
    return view('home.home5.home5');
});

Route::get('/home6', function () {
    return view('home.home6.home6');
});

Route::get('/home7', function () {
    return view('home.home7.home7');
});

Route::get('/home8', function () {
    return view('home.home8.home8');
});

Route::get('/home9', function () {
    return view('home.home9.home9');
});

Route::get('/home10', function () {
    return view('home.home10.home10');
});



// ------------ Pages (About) ------------

Route::get('/aboutStyle_1', function () {
    return view('pages.about.aboutStyle_1');
});

Route::get('/aboutStyle_2', function () {
    return view('pages.about.aboutStyle_2');
});

Route::get('/aboutStyle_3', function () {
    return view('pages.about.aboutStyle_3');
});

Route::get('/aboutStyle_4', function () {
    return view('pages.about.aboutStyle_4');
});

Route::get('/aboutMe', function () {
    return view('pages.about.aboutMe');
});


// ------------ Pages (Services) ------------

Route::get('/servicesStyle_1', function () {
    return view('pages.services.servicesStyle_1');
});

Route::get('/servicesStyle_2', function () {
    return view('pages.services.servicesStyle_2');
});

Route::get('/servicesStyle_3', function () {
    return view('pages.services.servicesStyle_3');
});

Route::get('/servicesStyle_4', function () {
    return view('pages.services.servicesStyle_4');
});


// ------------ Pages (Team) ------------

Route::get('/team_Classic', function () {
    return view('pages.team.team_Classic');
});

Route::get('/team_Parallax', function () {
    return view('pages.team.team_Parallax');
});

Route::get('/team_DarkStyle', function () {
    return view('pages.team.team_DarkStyle');
});

Route::get('/team_Creative', function () {
    return view('pages.team.team_Creative');
});


// ------------ Pages (FAQ) ------------

Route::get('/FAQ_Style1', function () {
    return view('pages.FAQ.FAQ_Style1');
});

Route::get('/FAQ_Style2', function () {
    return view('pages.FAQ.FAQ_Style2');
});



// ------------ Pages (Contact) ------------

Route::get('/contact_Classic', function () {
    return view('pages.contact.contact_Classic');
});

Route::get('/contact_LeftSidebar', function () {
    return view('pages.contact.contact_LeftSidebar');
});

Route::get('/contact_fullWidthMap', function () {
    return view('pages.contact.fullWidthMap');
});


// ------------ Pages (otherPages 1) ------------

Route::get('/otherPages1_fullWidth', function () {
    return view('pages.otherPages1.fullWidthPage');
});

Route::get('/otherPages1_leftSidebar', function () {
    return view('pages.otherPages1.left_Sidebar');
});

Route::get('/otherPages1_rightSidebar', function () {
    return view('pages.otherPages1.right_Sidebar');
});

Route::get('/otherPages1_packagePlans', function () {
    return view('pages.otherPages1.package_Plans');
});

Route::get('/otherPages1_careers', function () {
    return view('pages.otherPages1.careers');
});

Route::get('/otherPages1_comingSoon', function () {
    return view('pages.otherPages1.comingSoon');
});


// ------------ Pages (otherPages 2) ------------

Route::get('/otherPages2_siteMap', function () {                                               ////////////////////here        
    return view('pages.otherPages2.siteMap');
});

Route::get('/otherPages2_maintenance', function () {
    return view('pages.otherPages2.maintenance');
});

Route::get('/404_ErrorPage', function () {
    return view('pages.otherPages2.404_ErrorPage');
});

Route::get('/404_ErrorPage2', function () {
    return view('pages.otherPages2.404_ErrorPage2');
});


// ------------ Features (headers) ------------

Route::get('/header_headerLight', function () {
    return view('home.home7.home7');
});

Route::get('/header_headerDark', function () {
    return view('pages.about.aboutMe');
});

Route::get('/header_Modern', function () {
    return view('home.home4.home4');
});

Route::get('/header_Transparent', function () {
    return view('home.home.home');
});

Route::get('/header_Creative', function () {
    return view('pages.team.team_Creative');
});

Route::get('/header_LeftLogo', function () {
    return view('home.home.home');
});

Route::get('/header_CenterLogo', function () {
    return view('pages.team.team_Creative');
});

Route::get('/header_White', function () {
    return view('home.home7.home7');
});

// ------------ Features (menu styles) ------------

Route::get('/menu_Transparent', function () {
    return view('home.home.home');
});

Route::get('/menu_LeftLogo', function () {
    return view('home.home2.home2');
});

Route::get('/menu_Light', function () {
    return view('home.home7.home7');
});

Route::get('/menu_Dark', function () {
    return view('home.home2.home2');
});

Route::get('/menu_CenterLogo', function () {
    return view('pages.team.team_Creative');
});

Route::get('/menu_Boxed', function () {
    return view('home.home4.home4');
});

Route::get('/menu_Center', function () {
    return view('pages.team.team_Creative');
});


// ------------ Features (loading styles) ------------

Route::get('/loadingStyle_1', function () {
    return view('home.home.home');
});

Route::get('/loadingStyle_2', function () {
    return view('home.home2.home2');
});

Route::get('/loadingStyle_3', function () {
    return view('home.home3.home3');
});

Route::get('/loadingStyle_4', function () {
    return view('home.home4.home4');
});

Route::get('/loadingStyle_5', function () {
    return view('home.home5.home5');
});

Route::get('/loadingStyle_6', function () {
    return view('home.home6.home6');
});

Route::get('/loadingStyle_7', function () {
    return view('home.home7.home7');
});

Route::get('/loadingStyle_8', function () {
    return view('home.home8.home8');
});

Route::get('/loadingStyle_9', function () {
    return view('home.home9.home9');
});

Route::get('/loadingStyle_10', function () {
    return view('home.home10.home10');
});


// ------------ Features (footer styles) ------------

Route::get('/footer_Dark', function () {
    return view('home.home3.home3');
});

Route::get('/footer_Light', function () {
    return view('home.home4.home4');
});

Route::get('/footer_Simple', function () {
    return view('home.home3.home3');
});

Route::get('/footer_Parallax', function () {
    return view('pages.about.aboutStyle_1');
});

Route::get('/footer_Big', function () {
    return view('home.home8.home8');
});

Route::get('/footer_Modern', function () {
    return view('home.home5.home5');
});

Route::get('/footer_Map', function () {
    return view('home.home10.home10');
});

Route::get('/footer_Transparent', function () {
    return view('pages.about.aboutStyle_1');
});

Route::get('/footer_Classic', function () {
    return view('home.home4.home4');
});


// ------------ Features (videos) ------------

Route::get('/youtubeVideos', function () {
    return view('shortCodes.shortCodes_5.videos');
});

Route::get('/vimeoVideos', function () {
    return view('shortCodes.shortCodes_5.videos');
});

Route::get('/html5Videos', function () {
    return view('shortCodes.shortCodes_5.videos');
});

// ------------ Features ------------

Route::get('/layered_PSD', function () {
    return view('home.home3.home3');
});

Route::get('/unlimitedColours', function () {
    return view('home.home10.home10');
});

Route::get('/wide_N_Boxed', function () {
    return view('home.home5.home5');
});


// ------------ Portfolio  (Portfolio Columns)------------

Route::get('/1_Column', function () {
    return view('portfolio.columns.1_Column');
});

Route::get('/2_Column', function () {
    return view('portfolio.columns.2_Column');
});

Route::get('/3_Column', function () {
    return view('portfolio.columns.3_Column');
});

Route::get('/4_Column', function () {
    return view('portfolio.columns.4_Column');
});

Route::get('/5_Column', function () {
    return view('portfolio.columns.5_Column');
});

Route::get('/6_Column', function () {
    return view('portfolio.columns.6_Column');
});


// ------------ Portfolio  (Portfolio Styles)------------

Route::get('/masonry', function () {
    return view('portfolio.styles.masonry');
});

Route::get('/masonry_Projects', function () {
    return view('portfolio.styles.masonry_Projects');
});

Route::get('/mosaic', function () {
    return view('portfolio.styles.mosaic');
});

Route::get('/mosaic_Flat', function () {
    return view('portfolio.styles.mosaic_Flat');
});

Route::get('/mosaic_Projects', function () {
    return view('portfolio.styles.mosaic_Projects');
});

Route::get('/slider_Projects', function () {
    return view('portfolio.styles.slider_Projects');
});


// ------------ Portfolio  (Portfolio Styles 2)------------

Route::get('/style_FullWidth', function () {
    return view('portfolio.styles2.style_FullWidth');
});

Route::get('/style_Gallery', function () {
    return view('portfolio.styles2.style_Gallery');
});

Route::get('/style_Classic', function () {
    return view('portfolio.styles2.style_Classic');
});

Route::get('/style_NoSpace', function () {
    return view('portfolio.styles2.style_NoSpace');
});

Route::get('/style_BoxSized', function () {
    return view('portfolio.styles2.style_BoxSized');
});

Route::get('/style_Modern', function () {
    return view('portfolio.styles2.style_Modern');
});


// ------------ Portfolio  (Portfolio Single Page)------------

Route::get('/parallax_Image', function () {
    return view('portfolio.singlePage.parallax_Image');
});

Route::get('/video_Background', function () {
    return view('shortCodes.shortCodes_5.videos');
});

Route::get('/left_Sidebar', function () {
    return view('portfolio.singlePage.left_Sidebar');
});

Route::get('/right_Sidebar', function () {
    return view('portfolio.singlePage.right_Sidebar');
});

Route::get('/carousel', function () {
    return view('portfolio.singlePage.carousel');
});

Route::get('/fullWidth_Image', function () {
    return view('portfolio.singlePage.fullWidth_Image');
});



// ------------ ShortCodes  (ShortCodes 1)------------

Route::get('/accordions', function () {
    return view('shortCodes.shortCodes_1.accordions');
});

Route::get('/alerts', function () {
    return view('shortCodes.shortCodes_1.alerts');
});

Route::get('/animations', function () {
    return view('shortCodes.shortCodes_1.animations');
});

Route::get('/blockQuotes', function () {
    return view('shortCodes.shortCodes_1.blockQuotes');
});

Route::get('/breadCrumbs', function () {
    return view('shortCodes.shortCodes_1.breadCrumbs');
});

Route::get('/buttons', function () {
    return view('shortCodes.shortCodes_1.buttons');
});

Route::get('/callToAction', function () {
    return view('shortCodes.shortCodes_1.callToAction');
});

Route::get('/clients_Logos', function () {
    return view('shortCodes.shortCodes_1.clients_Logos');
});

Route::get('/carousel_Sliders', function () {
    return view('shortCodes.shortCodes_1.carousel_Sliders');
});

Route::get('/counters', function () {
    return view('shortCodes.shortCodes_1.counters');
});



// ------------ ShortCodes  (ShortCodes 2)------------

Route::get('/content_Boxes', function () {
    return view('shortCodes.shortCodes_2.content_Boxes');
});

Route::get('/data_Tables', function () {
    return view('shortCodes.shortCodes_2.data_Tables');
});

Route::get('/date_Pickers', function () {
    return view('shortCodes.shortCodes_2.date_Pickers');
});

Route::get('/dropcap_N_Highlight', function () {
    return view('shortCodes.shortCodes_2.dropcap_N_Highlight');
});

Route::get('/dividers', function () {
    return view('shortCodes.shortCodes_2.dividers');
});

Route::get('/file_Uploads', function () {
    return view('shortCodes.shortCodes_2.file_Uploads');
});

Route::get('/forms', function () {
    return view('shortCodes.shortCodes_2.forms');
});

Route::get('/grids', function () {
    return view('shortCodes.shortCodes_2.grids');
});

Route::get('/heading_Styles', function () {
    return view('shortCodes.shortCodes_2.heading_Styles');
});

Route::get('/hover_Styles', function () {
    return view('shortCodes.shortCodes_2.hover_Styles');
});



// ------------ ShortCodes  (ShortCodes 3)------------

Route::get('/icon_Boxes', function () {
    return view('shortCodes.shortCodes_3.icon_Boxes');
});

Route::get('/icon_Circles', function () {
    return view('shortCodes.shortCodes_3.icon_Circles');
});

Route::get('/countDown_Timers', function () {
    return view('shortCodes.shortCodes_3.countDown_Timers');
});

Route::get('/icon_Lists', function () {
    return view('shortCodes.shortCodes_3.icon_Lists');
});

Route::get('/shortCodes_images', function () {
    return view('shortCodes.shortCodes_3.images');
});

Route::get('/labels_N_Badges', function () {
    return view('shortCodes.shortCodes_3.labels_N_Badges');
});

Route::get('/lightBox', function () {
    return view('shortCodes.shortCodes_3.lightBox');
});

Route::get('/lists', function () {
    return view('shortCodes.shortCodes_3.lists');
});

Route::get('/maps', function () {
    return view('shortCodes.shortCodes_3.maps');
});

Route::get('/modal_Popup', function () {
    return view('shortCodes.shortCodes_3.modal_Popup');
});


// ------------ ShortCodes  (ShortCodes 4)------------

Route::get('/pagination', function () {
    return view('shortCodes.shortCodes_4.pagination');
});

Route::get('/parallax_Backgrounds', function () {
    return view('shortCodes.shortCodes_4.parallax_Backgrounds');
});

Route::get('/pricing_Tables', function () {
    return view('shortCodes.shortCodes_4.pricing_Tables');
});

Route::get('/pie_Charts', function () {
    return view('shortCodes.shortCodes_4.pie_Charts');
});

Route::get('/pricing_Badges', function () {
    return view('shortCodes.shortCodes_4.pricing_Badges');
});

Route::get('/progress_Bars', function () {
    return view('shortCodes.shortCodes_4.progress_Bars');
});

Route::get('/process_Steps', function () {
    return view('shortCodes.shortCodes_4.process_Steps');
});

Route::get('/post_Styles', function () {
    return view('shortCodes.shortCodes_4.post_Styles');
});

Route::get('/toggle_Switches', function () {
    return view('shortCodes.shortCodes_4.toggle_Switches');
});

Route::get('/timeline', function () {
    return view('shortCodes.shortCodes_4.timeline');
});



// ------------ ShortCodes  (ShortCodes 5)------------

Route::get('/star_Ratings', function () {
    return view('shortCodes.shortCodes_5.star_Ratings');
});

Route::get('/sections', function () {
    return view('shortCodes.shortCodes_5.sections');
});

Route::get('/social_Icons', function () {
    return view('shortCodes.shortCodes_5.social_Icons');
});

Route::get('/tabs', function () {
    return view('shortCodes.shortCodes_5.tabs');
});

Route::get('/team', function () {
    return view('shortCodes.shortCodes_5.team');
});

Route::get('/testimonials', function () {
    return view('shortCodes.shortCodes_5.testimonials');
});

Route::get('/toolTips', function () {
    return view('shortCodes.shortCodes_5.toolTips');
});

Route::get('/toggles', function () {
    return view('shortCodes.shortCodes_5.toggles');
});

Route::get('/typoGraphy', function () {
    return view('shortCodes.shortCodes_5.typoGraphy');
});

Route::get('/videos', function () {
    return view('shortCodes.shortCodes_5.videos');
});


// ------------ Blog ------------

Route::get('/blog_FullWidth', function () {
    return view('blog.blog_FullWidth');
});

Route::get('/blog_LeftSidebar', function () {
    return view('blog.blog_LeftSidebar');
});

Route::get('/blog_ThreeColumns', function () {
    return view('blog.blog_ThreeColumns');
});

Route::get('/blog_AuthorPage', function () {
    return view('blog.blog_AuthorPage');
});

Route::get('/blog_Comments', function () {
    return view('blog.blog_Comments');
});

Route::get('/blog_ImagePost', function () {
    return view('blog.blog_ImagePost');
});

Route::get('/blog_VideoPost', function () {
    return view('blog.blog_VideoPost');
});


// ------------ Shop ------------

Route::get('/shop_fullWidth', function () {
    return view('shop.shop_fullWidth');
});

Route::get('/shop_LeftSidebar', function () {
    return view('shop.shop_LeftSidebar');
});

Route::get('/shop_ThreeColumn', function () {
    return view('shop.shop_ThreeColumn');
});

Route::get('/shop_ProductPreview', function () {
    return view('shop.shop_ProductPreview');
});

Route::get('/shop_PreviewSidebar', function () {
    return view('shop.shop_PreviewSidebar');
});