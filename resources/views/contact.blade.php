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
<section class="background_bg breadcrumb_section overlay_bg2 page-title-light" data-img-src="assets/images/contact-bg.jpg">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12 text-center">
            	<div class="page-title">
            		<h1>Contact</h1>
                </div>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href=" {{ route('welcome')}} ">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact </li>
                  </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BANNER -->

<!-- START SECTION CONTACT -->
<section>
	<div class="container">
    	<div class="row">
        	<div class="col-lg-4 col-md-6">
            	<div class="heading_s2">
                	<span class="sub_title">Contact Us</span>
                	<h2>Get In touch</h2>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                <ul class="contact_info contact_info_style1 list_none">
                    <li>
                        <span class="ti-location-pin"></span>
                        <address>Cocotomey, Ancienne Agence MTN à côté du Temple du Témoin de Jéhovah</address>
                    </li>
                    <li>
                        <span class="ti-email"></span>
                        <a href="mailto:info@sitename.com"> favcomservice@gmail.com</a>
                    </li>
                    <li>
                        <span class="ti-mobile"></span>
                        <p> + 229 523 058 58</p>
                    </li>
                </ul>
                <span id="map" class="btn btn-outline-black mt-3">View Map</span>
            </div>
             <form method="POST" action="{{ route('addcontact') }}" enctype="multipart/form-data">
            <div class="col-lg-8 col-md-6">
            	<div class="clearfix large_divider d-none d-md-block"></div>
                <div class="clearfix medium_divider d-xl-none"></div>
            	<div class="field_form">
                      
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <input required="required" placeholder="Enter Name *" id="first-name" class="form-control" name="name" type="text">
                             </div>
                            <div class="form-group col-lg-6">
                                <input required="required" placeholder="Enter Email *" id="email" class="form-control" name="email" type="email">
                            </div>
                            <div class="form-group col-lg-6">
                                <input required="required" placeholder="Enter Phone No. *" id="phone" class="form-control" name="phone" type="phone">
                            </div>
                            <div class="form-group col-lg-6">
                                <input placeholder="Enter Subject" id="subject" class="form-control" name="subject" type="subject">
                            </div>
                            <div class="form-group col-lg-12">
                                <textarea required="required" placeholder="Message *" id="description" class="form-control" name="message" rows="4"></textarea>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" bg-primary >Envoyer</button>
                            </div>
                            <div class="col-lg-12">
                                <div id="alert-msg" class="alert-msg text-center"></div>
                            </div>
                        </div>
             	
                    </div>
                <div class="map">
                	<iframe src="https://www.google.fr/maps/place/FAVCOM+SERVICES/@6.3873412,2.2964428,17z/data=!4m12!1m6!3m5!1s0x1023592b7489c0a9:0xab9e49c5e5200475!2sFAVCOM+SERVICES!8m2!3d6.3871941!4d2.2964876!3m4!1s0x1023592b7489c0a9:0xab9e49c5e5200475!8m2!3d6.3871941!4d2.2964876" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            </form>
        </div>
    </div>
</section>
<!-- END SECTION CONTACT -->



@endsection