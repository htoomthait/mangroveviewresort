<header class="main_header_area">
    <div class="header_top">
        <div class="container">
            <div class="header_top_inner">
                <div class="pull-left">
                    <a href="#"><i class="fa fa-phone"></i>
                        (+95) 9 881 222207
                        <span class="badge badge-primary">hotline</span>
                    </a>
                    <a href="#"><i class="fa fa-envelope-o"></i>sales@mangroviewresort.com</a>
                </div>
                <div class="pull-right">
                    <ul class="header_social">
                        <li><a href="https://www.facebook.com/seaandlakegarden"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        {{-- <li><a href="#"><i class="fa fa-linkedin"></i></a></li> --}}
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
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand dp-flex" href="#">
                        <img src="img/logo/sea_and_lake_logo_picture.png" alt="sea and lake transparent logo"
                            width="80px">
                        <h3 class="logo-brand-text">Sea &amp; Lake Garden</h3>
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="@if (session('page_title') === 'home') active @endif"><a
                                href="{{ route('home.page') }}">Home</a></li>
                        <li class="submenu dropdown @if (session('page_title') === 'about_us') active @endif">
                            <a
                                href="{{ route('page.about_us') }}"
                                class="dropdown-toggle"
                                role="button" aria-haspopup="true"
                                aria-expanded="false"
                                >About Us <i class="fa fa-chevron-down" aria-hidden="true"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('page.about_us') }}#sec_garden">Garden Story</a></li>
                                <li><a href="{{ route('page.about_us') }}#sec_resort">Resort Story</a></li>
                                <li><a href="{{ route('page.about_us') }}#activity_jade_museum">Jade Museum</a></li>
                                <li><a href="{{ route('page.about_us') }}#activity_wooden_statue_museum">Wood Statue Museum</a></li>
                            </ul>

                        </li>
                        <li class="submenu dropdown @if (session('page_title') === 'resort') active @endif">
                            <a href="{{ route('page.resort') }}" class="dropdown-toggle"
                                role="button" aria-haspopup="true" aria-expanded="false">Resort <i
                                    class="fa fa-chevron-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('page.resort') }}#sec_villa_type">Villa Types</a></li>
                                <li><a href="{{ route('page.resort') }}#sec_amenities">Amenities</a></li>
                                <li><a href="{{ route('page.resort') }}#sec_spa">Spa &amp; Relax</a></li>
                                <li><a href="{{ route('page.resort') }}#sec_pool">Pool</a></li>
                                <li><a href="{{ route('page.resort') }}#sec_restaurant">Bar &amp; Restaurant</a></li>
                                <li><a href="{{ route('page.resort') }}#sec_karaoke">Karaoke</a></li>
                                <li><a href="{{ route('page.resort') }}#sec_gallery">Gallery</a></li>
                            </ul>
                        </li>
                        <li class="submenu dropdown @if (session('page_title') === 'activities') active @endif">
                            <a href="{{ route('page.activities') }}" class="dropdown-toggle"
                                role="button" aria-haspopup="true" aria-expanded="false">Activities <i
                                    class="fa fa-chevron-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('page.activities') }}#activity_boat"> Boat</a></li>
                                <li><a href="{{ route('page.activities') }}#activity_fisihing">Fishing</a></li>
                                <li><a href="{{ route('page.activities') }}#activity_cycling"> Cycling</a></li>
                                <li class="dropdown submenu">
                                    <a href="{{ route('page.activities') }}#activity_jade_museum" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Museum</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ route('page.activities') }}#activity_jade_museum">-  Jade Meseum</a></li>
                                        <li><a href="{{ route('page.activities') }}#activity_wooden_statue_museum">-  Wooden Statue Museum</a></li>
                                    </ul>
                                </li>

                                <li><a href="{{ route('page.activities') }}#activity_gift_shop">Gift Shop</a></li>


                                <li><a href="{{ route('page.activities') }}#activity_swimming">Swimming</a></li>
                                <li><a href="{{ route('page.activities') }}#activity_zip_riding">Zipriding <span
                                            class="badge badge-warning">comming soon</span></a></li>
                                <li><a href="{{ route('page.activities') }}#activity_waterboom">Waterboom <span
                                            class="badge badge-warning">comming soon</span></a></li>
                                <li><a href="{{ route('page.activities') }}#activity_sailing_in_the_lake">Sailing In
                                        the Lake <span class="badge badge-warning">comming soon</span></a></li>
                            </ul>
                        </li>
                        <li class="submenu dropdown @if (session('page_title') === 'barAndRestaurant') active @endif">
                            <a href="{{ route('page.bar_and_restaurant') }}" class="dropdown-toggle"
                                role="button" aria-haspopup="true" aria-expanded="false">Bar
                                &amp; Restaurant <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                            {{-- <a href="{{ route('page.bar_and_restaurant') }}" class="dropdown-toggle"
                            data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bar
                            &amp; Restaurant <i class="fa fa-chevron-down" aria-hidden="true"></i></a>    for not direct link --}}
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('page.bar_and_restaurant') }}#sea_and_lake">Sea and Lake
                                        Restaurant</a></li>
                                <li><a href="{{ route('page.bar_and_restaurant') }}#mangroview">Mangrove View
                                        Restaurant</a></li>
                                <li><a href="{{ route('page.bar_and_restaurant') }}#lobby_bar">Lobby bar</a></li>
                            </ul>
                        </li>
                        {{-- <li class="@if (session('page_title') === 'karaoke') active @endif"><a href="{{route('page.karaoke')}}">Karaoke</a></li> --}}
                        <li class="@if (session('page_title') === 'contactUs') active @endif"><a
                                href="{{ route('page.contact_us') }}">Contact Us</a></li>
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
