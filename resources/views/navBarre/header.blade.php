<header class="header_wrap fixed-top light_skin hover_menu_style2 transparent-header">
	<div class="top-header d-none d-md-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <ul class="contact_detail list_none text-center text-md-left">
                        <li><i class="ti-mobile"></i> + 229 523 058 58</li>
                        <li><i class="ti-location-pin"></i> Cocotomey, Ancienne Agence MTN à côté du Temple du Témoin de Jéhovah </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list_none social_icons text-center border_social rounded_social social_white  text-md-right mt-2 mt-md-0">
                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                        <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                        <li><a href="#"><i class="ion-social-youtube-outline"></i></a></li>
                        <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <nav class="navbar navbar-expand-lg"> 
            <a class="navbar-brand" href="{{ route('welcome')}}">
                <img class="logo_light" src="assets/images/favCom Hottelerie.png" alt="logo" width="100" />
        
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="ion-android-menu"></span> </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                <li class="dropdown">
                    <a class="nav-link active" href="{{ route('welcome')}}">Accueil</a>
                        
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle nav-link"  data-toggle="dropdown"> Nos Formation</a>
                        <div class="dropdown-menu">
                            <ul> 
                             
                                <li><a class="dropdown-item nav-link nav_item" href=" {{ route('formation.Hot')}} ">Hotellerie et Restauration</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="{{ route('formation.Pat')}}">Pattiserie</a></li>
                           
                            </ul>
                        </div>
                </li>


                <li class="dropdown">
                    <a class="dropdown-toggle nav-link"  data-toggle="dropdown"> Nos Service</a>
                        <div class="dropdown-menu">
                            <ul> 
                             
                                <li><a class="dropdown-item nav-link nav_item" href=" {{ route('Services.Evenementiel')}} ">Evenementiel</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="{{ route('Services.Hottelerie')}}">Hotellerie</a></li>
                            </ul>
                        </div>
                </li>
                <li class="dropdown dropdown-mega-menu">
                    <a class="nav-link " href="{{ route('About')}}">A Propos</a>
                        
                </li>
                <li class="dropdown dropdown-mega-menu">
                    <li class="dropdown dropdown-mega-menu">
                        <a class="nav-link " href="{{ route('contact')}}">Contact</a>
                            
                    </li>
                        
                </li>
           
           
            </ul>
            </div>
            <ul class="navbar-nav attr-nav align-items-center">
                    <li><a href="javascript:void(0);" class="nav-link search_trigger"><i class="ion-ios-search-strong"></i></a>
                        <div class="search-overlay">
                            <span class="close-search"><i class="ion-ios-close-empty"></i></span>
                            <div class="search_wrap">
                                <form>
                                    <input type="text" placeholder="Search" class="form-control" id="search_input">
                                    <button type="submit" class="search_icon"><i class="ion-ios-search-strong"></i></button>
                            	</form>
                            </div>
                        </div>
                    </li>
                 
                </ul>
        </nav>
    </div>
</header>