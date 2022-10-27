@extends('Layouts.same')

    @section('contenu')
<!-- LOADER -->
<div class="preloader"><div class="se-pre-con"></div>
</div>
<!-- END LOADER --> 

<!-- START HEADER -->

@include('navBarre.header')

<!-- END HEADER --> 

<!-- START SECTION BANNER -->
<section class="background_bg breadcrumb_section overlay_bg2 page-title-light" data-img-src="assets/images/favimg/event.jpg">
	
</section>
<!-- END SECTION BANNER --> 

<!-- START SECTION TEAM -->
<section class="small_pb">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12">
            	<div class="heading_s1 text-center">
                	<h2>Nos Services en Evenementiel</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="cleafix small_divider"></div>
            </div>
        </div>
        <div class="row">
        	<div class="col-lg-3 col-sm-6 mb-lg-5 mb-sm-4 pb-sm-1 pb-3 text-center">
            	<div class="team_box light_gray_bg">
                	<div class="team_img">
                    	<img src="assets/images/img/annif.jpg"alt="team1"/>
                    </div>
                    <div class="team_title">
                        <h5>Anniversaire</h5>
                
                    </div>
                  
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-lg-5 mb-sm-4 pb-sm-1 pb-3 text-center">
            	<div class="team_box light_gray_bg">
                	<div class="team_img">
                    	<img src="assets/images/img/mariage.jpg"  alt="team1"/>
                    </div>
                    <div class="team_title">
                        <h5>Mariage</h5>
                
                    </div>
                  
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-lg-5 mb-sm-4 pb-sm-1 pb-3 text-center">
            	<div class="team_box light_gray_bg">
                	<div class="team_img">
                    	<img src="assets/images/img/bap.jpg"  alt="team1"/>
                    </div>
                    <div class="team_title">
                        <h5>Bapteme</h5>
                
                    </div>
                  
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-lg-5 mb-sm-4 pb-sm-1 pb-3 text-center">
            	<div class="team_box light_gray_bg">
                	<div class="team_img">
                    	<img src="assets/images/img/communion.jpg"  alt="team1"/>
                    </div>
                    <div class="team_title">
                        <h5>Communion</h5>
                
                    </div>
                  
                </div>
            </div>
        
        </div>
    </div>
</section>
<!-- END SECTION TEAM -->

<!-- START SECTION CALL TO ACTION -->
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


@endsection