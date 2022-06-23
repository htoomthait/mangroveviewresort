<header class="main_header_area">
    <div class="header_top">
        <div class="container">
            <div class="header_top_inner">
                <div class="pull-left">
                    <a href="#"><i class="fa fa-phone"></i>(+95) 9 881 777944</a>
                    <a href="#"><i class="fa fa-envelope-o"></i>sales@mangroveviewreort.com</a>
                </div>
                <div class="pull-right">
                    <ul class="header_social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
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
                                <li><a href="aminities.html">Introduction</a></li>
                                <li><a href="search.html">Why choose our resort and garden</a></li>
                            </ul>
                        </li>
                        <li class="submenu dropdown @if(session('page_title') === 'resort') active @endif">
                            <a href="{{route('page.resort')}}" class="dropdown-toggle"  role="button" aria-haspopup="true" aria-expanded="false">Resort <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="aminities.html">Room Type</a></li>
                                <li><a href="search.html">Aminities</a></li>
                                {{-- <li class="dropdown submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Events</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="event.html">-  Event List</a></li>
                                        <li><a href="event-two-column.html">-  Event Grid</a></li>
                                        <li><a href="event-details.html">-  Event Single</a></li>
                                    </ul>
                                </li> --}}
                                {{-- <li class="dropdown submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="gallery-two-column.html">-  Gallery 2 Column</a></li>
                                        <li><a href="gallery-three-column.html">-  Gallery 3 Column</a></li>
                                        <li><a href="cobage-gallery.html">-  Gallery Cobage</a></li>
                                    </ul>
                                </li> --}}
                                <li><a href="spa.html">Spa &amp; Relax</a></li>
                                <li><a href="restaurant.html">Bar &amp; Restaurant</a></li>                                
                                <li><a href="activities.html">Gallery</a></li>
                                <li><a href="comming-soon.html">Coming Soon page</a></li>
                                <li><a href="404.html">404 Error</a></li>
                            </ul>
                        </li>
                        <li class="submenu dropdown @if(session('page_title') === 'activities') active @endif">
                            <a href="{{route('page.activities')}}" class="dropdown-toggle"  role="button" aria-haspopup="true" aria-expanded="false">Activities <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"> Boat</a></li>
                                <li><a href="#">Fishing</a></li>
                                <li><a href="#"> Cycling</a></li>
                                <li><a href="#">Muesium</a></li>
                                <li><a href="#">Swimming</a></li>
                                <li><a href="#">Zipriding</a></li>
                                <li><a href="#">Waterboom</a></li>
                            </ul>
                        </li>
                        <li class="submenu dropdown @if(session('page_title') === 'barAndRestaurant') active @endif">
                            <a href="{{route('page.bar_and_restaurant')}}"  class="dropdown-toggle"  role="button" aria-haspopup="true" aria-expanded="false"> Bar &amp; Restaurant</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Sea and Lake</a></li>
                                <li><a href="#">Mangrove View</a></li>                                
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