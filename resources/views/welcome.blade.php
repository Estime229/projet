@extends('Layouts.same')

    @section('contenu')


<!-- LOADER -->
<div class="preloader">
  <div class="se-pre-con"> </div>
</div>
<!-- END LOADER --> 

<!-- START HEADER -->

@include('navBarre.header')

<!-- END HEADER --> 

<!-- START SECTION BANNER -->
<section class="banner_section p-0 full_screen">
    <div id="carouselExampleControls" class="banner_content_wrap carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active background_bg overlay_bg" data-img-src="assets/images/favimg/corrousel.jpg">
                <div class="banner_slide_content">
                    <div class="container"><!-- STRART CONTAINER -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                            <div class="banner_content text_white">
                                <h3 class="animation text-uppercase" data-animation="fadeInDown" data-animation-delay="1s">Bienvennue sur la Plateforme de FAVCOM COMPLEXE HOTELIER.</h3>
                                <!-- <a class="btn btn-default animation" href="#" data-animation="fadeInUp" data-animation-delay="1.8s">Get Started</a> -->
                                <a class="btn btn-outline-white animation" href="{{ route('About')}}" data-animation="fadeInUp" data-animation-delay="1.8s">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div><!-- END CONTAINER-->
                </div>
            </div>
            <div class="carousel-item background_bg overlay_bg" data-img-src="assets/images/favimg/corrouselh.jpg">
                <div class="banner_slide_content">
                    <div class="container"><!-- STRART CONTAINER -->
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 text-left">
                                <div class="banner_content text_white">
                                    <h3 class="animation text-uppercase" data-animation="fadeInDown" data-animation-delay="1s">VOS Evenements Chic et au Top</h3>
                                    <p class="animation my-4" data-animation="fadeInUp" data-animation-delay="1.5s">Mariage, Bapteme, Diplome, Conférences, Anniversaires, Pic-nic, ...</p>
                                    <a class="btn btn-outline-white animation" href="evenementiel.html" data-animation="fadeInUp" data-animation-delay="1.8s">Learn More</a>


                                </div>
                            </div>
                        </div>
                    </div><!-- END CONTAINER-->
                </div>
            </div>
          
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"><i class="ion-chevron-left"></i></a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"><i class="ion-chevron-right"></i></a>
    </div>
</section>
<!-- END SECTION BANNER --> 

<!-- START SECTION ABOUT US -->

<!-- END SECTION ABOUT US --> 

<!-- START SECTION FEATURE -->
<section class="gray_bg small_pb">
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-lg-6 col-md-9 animation" data-animation="fadeInUp" data-animation-delay="0.1s">
            	<div class="heading_s1 text-center">
                	<h2> Nos Services </h2>
                </div>
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
            </div>
        </div>
        <div class="row">
        	<div class="col-12">	
            	<div class="clearfix small_divider"></div>
            </div>
        </div>
    	<div class="row animation" data-animation="fadeInUp" data-animation-delay="0.1s">
        	<div class="col-md-4 col-sm-6 mb-lg-5 mb-3 text-center">
            	<div class="icon_box icon_box_style_1">
                    <div class="box_icon mb-3">	
                        <i class="bi bi-balloon"></i>
                    </div>
                    <div class="icon_box_content">
                        <h5> Evenementiel </h5>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-lg-5 mb-3 text-center">
            	<div class="icon_box icon_box_style_1">
                    <div class="box_icon mb-3">	
                        <i class="icon icon-book"></i>
                    </div>
                    <div class="icon_box_content">
                        <h5> Formation </h5>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mb-lg-5 mb-3 text-center">
            	<div class="icon_box icon_box_style_1">
                    <div class="box_icon mb-3">	
                        <i class="icon icon-equalizer2"></i>
                    </div>
                    <div class="icon_box_content">
                        <h5> Hotellerie </h5>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                    </div>
                 </div>
            </div>
        	
            
        </div>
    </div>
</section>
<!-- END SECTION FEATURE -->

<!-- START SECTION CLIENT LOGO -->
<section class="light_gray_bg small_pt small_pb">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12 animation" data-animation="fadeInDown" data-animation-delay="0.1s">
            	<div class="cl_logo_slider owl-carousel owl-theme" data-margin="30" data-loop="true" data-autoplay="true" data-dots="false" data-autoplay-timeout="2000">
                	<div class="item">
                    	<a href="#"><img src="assets/images/cl_logo1.png" alt="cl_logo1"/></a>
                    </div>
                    <div class="item">
                    	<a href="#"><img src="assets/images/cl_logo2.png" alt="cl_logo2"/></a>
                    </div>
                    <div class="item">
                    	<a href="#"><img src="assets/images/cl_logo3.png" alt="cl_logo3"/></a>
                    </div>
                    <div class="item">
                    	<a href="#"><img src="assets/images/cl_logo4.png" alt="cl_logo4"/></a>
                    </div>
                    <div class="item">
                    	<a href="#"><img src="assets/images/cl_logo5.png" alt="cl_logo5"/></a>
                    </div>
                    <div class="item">
                    	<a href="#"><img src="assets/images/cl_logo6.png" alt="cl_logo6"/></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- START SECTION CLIENT LOGO -->

    @endsection






