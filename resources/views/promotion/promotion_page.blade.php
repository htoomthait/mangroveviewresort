@extends('layout.master')

@section('page_content')
     <!--================Banner Area =================-->
     <section class="banner_area"
     style="background: url({{asset('img/banner/promotion_banner_bg.jpg')}}) no-repeat center; background-size: cover;"
     >
        <div class="container">
            <div class="banner_inner_content">
                <h3>Promotions</h3>
                <ul>
                    <li ><a href="{{route('home.landing_page')}}">Home</a></li>
                    <li ><a href="{{route('page.about_us')}}">About Us</a></li>
                    <li class="active"><a href="{{route('page.promotion')}}">Promotions</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--================End Banner Area =================-->

    <!--================Events Area =================-->
    <section class="events_area">
        <div class="container">
            <div class="row event_inner">
                <div class="event_item row m0 ">
                    <div class="col-md-5 event_img_block" >
                        <a href="event-details.html" class="event_img">
                            <img src="img/event/event-5.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-md-7 ">
                        <div class="event_text" style="padding-bottom: 24px;">
                            <div class="media">
                                <div class="media-left2">
                                    <a href="#">
                                        <h5>01-31</h5>
                                        <h6>Aug 2022</h6>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <a href="#"><h3>Anneversay of resort celebration in 12th august night</h3></a>
                                </div>
                            </div>
                            <p>quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam. quis nostrum exercit ationem ullam corporis suscipit laboriosam, nisi ut aliquid.</p>
                            <a class="book_now_btn" href="#">read more</a>
                        </div>
                    </div>
                </div>
                <div class="event_item row m0 ">
                    <div class="col-md-5 event_img_block" >
                        <a href="event-details.html" class="event_img">
                            <img src="img/event/event-5.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-md-7 ">
                        <div class="event_text" style="padding-bottom: 24px;">
                            <div class="media">
                                <div class="media-left2">
                                    <a href="#">
                                        <h5>01-31</h5>
                                        <h6>Aug 2022</h6>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <a href="#"><h3>Anneversay of resort celebration in 12th august night</h3></a>
                                </div>
                            </div>
                            <p>quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam. quis nostrum exercit ationem ullam corporis suscipit laboriosam, nisi ut aliquid.</p>
                            <a class="book_now_btn" href="#">read more</a>
                        </div>
                    </div>
                </div>
                <div class="event_item row m0 ">
                    <div class="col-md-5 event_img_block" >
                        <a href="event-details.html" class="event_img">
                            <img src="img/event/event-5.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-md-7 ">
                        <div class="event_text" style="padding-bottom: 24px;">
                            <div class="media">
                                <div class="media-left2">
                                    <a href="#">
                                        <h5>01-31</h5>
                                        <h6>Aug 2022</h6>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <a href="#"><h3>Anneversay of resort celebration in 12th august night</h3></a>
                                </div>
                            </div>
                            <p>quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam. quis nostrum exercit ationem ullam corporis suscipit laboriosam, nisi ut aliquid.</p>
                            <a class="book_now_btn" href="#">read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Events Area =================-->

@endsection
