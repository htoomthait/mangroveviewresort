<header class="main_header_area">
    <div class="header_top">
        <div class="container">
            <div class="header_top_inner">
                <div class="pull-left">
                    <a href="#" class="banner-text-color"><i class="fa fa-phone "></i>(+95) 9 881 777944</a>
                    <a href="#" class="banner-text-color"><i class="fa fa-envelope-o"></i>sales@mangroveviewreort.com</a>
                </div>
                <div class="pull-right">
                    <ul class="header_social">
                        <li><a href="#"><i class="fa fa-facebook banner-text-color"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter banner-text-color"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus banner-text-color"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin banner-text-color"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header_menu">
        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand dp-flex" href="#">                        
                            <img src="img/logo/sea_and_lake_logo_picture.png" alt="sea and lake transparent logo" width="80px">
                            <h3 class="logo-brand-text">Sea &amp; Lake Garden</h3>                                                
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="dropdown submenu @if(session('page_title') === 'home') active @endif">
                            <a href="{{route('home.page')}}" class="dropdown-toggle"  role="button" aria-haspopup="true" aria-expanded="false">Home <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                            
                        </li>
                        <li class="submenu dropdown @if(session('page_title') === 'about_us') active @endif">
                            <a href="{{route('page.about_us')}}" class="dropdown-toggle"  role="button" aria-haspopup="true" aria-expanded="false">About Us <i class="fa fa-chevron-down" aria-hidden="true"></i></a>                            
                            <ul class="dropdown-menu">
                                {{-- <li><a href="aminities.html">Introduction</a></li>
                                <li><a href="search.html">Why choose our resort and garden</a></li> --}}
                            </ul>
                        </li>
                        <li class="submenu dropdown @if(session('page_title') === 'resort') active @endif">
                            <a href="{{route('page.resort')}}" class="dropdown-toggle"  role="button" aria-haspopup="true" aria-expanded="false">Resort <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('page.resort')}}#sec_room_type">Room Type</a></li>
                                <li><a href="{{route('page.resort')}}#sec_aminities">Aminities</a></li>                                
                                <li><a href="{{route('page.resort')}}#sec_spa">Spa &amp; Relax</a></li>
                                <li><a href="{{route('page.resort')}}#sec_restaurant">Bar &amp; Restaurant</a></li>                                
                                <li><a href="{{route('page.resort')}}#sec_gallery">Gallery</a></li>
                                <li><a href="{{route('page.resort')}}#sec_karaokie">Karaokie</a></li>
                                {{-- <li><a href="404.html">404 Error</a></li> --}}
                            </ul>
                        </li>
                        <li class="submenu dropdown @if(session('page_title') === 'activities') active @endif">
                            <a href="{{route('page.activities')}}" class="dropdown-toggle"  role="button" aria-haspopup="true" aria-expanded="false">Activities <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('page.activities')}}#activity_boat"> Boat</a></li>
                                <li><a href="{{route('page.activities')}}#activity_fisihing">Fishing</a></li>
                                <li><a href="{{route('page.activities')}}#activity_cycling"> Cycling</a></li>
                                <li><a href="{{route('page.activities')}}#activity_mueseum">Muesium</a></li>
                                <li><a href="{{route('page.activities')}}#activity_swimming">Swimming</a></li>
                                <li><a href="{{route('page.activities')}}#activity_zip_riding">Zipriding <span class="badge badge-warning">comming soon</span></a></li>
                                <li><a href="{{route('page.activities')}}#activity_waterboom">Waterboom <span class="badge badge-warning">comming soon</span></a></li>
                            </ul>
                        </li>
                        <li class="submenu dropdown @if(session('page_title') === 'barAndRestaurant') active @endif">
                            <a href="{{route('page.bar_and_restaurant')}}"  class="dropdown-toggle"  role="button" aria-haspopup="true" aria-expanded="false"> Bar &amp; Restaurant</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('page.bar_and_restaurant')}}#sea_and_lake">Sea and Lake Garden</a></li>
                                <li><a href="{{route('page.bar_and_restaurant')}}#mangroview">Mangrove View Resort</a></li>                                
                            </ul>
                        </li>
                        <li class="@if(session('page_title') === 'contactUs') active @endif"><a href="{{route('page.contact_us')}}">Contact Us</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="search_dropdown">
                            <a class="popup-with-zoom-anim" href="#test-search"><i class="icon icon-Search"></i></a>
                        </li>
                        {{-- <li class="book_btn">
                            <a class="book_now_btn" href="#">Book now</a>
                        </li> --}}
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>
</header>