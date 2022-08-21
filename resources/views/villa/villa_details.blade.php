@extends('layout.master')

@section('page_content')
    <section class="banner_area"
    style="background: url({{asset('img/banner/villa_detail_banner_bg.jpg')}}) no-repeat center; background-size: cover;"
    >
        <div class="container">
            <div class="banner_inner_content">
                <h3>Villa Details</h3>
                <ul>
                    <li ><a href="{{route('home.landing_page')}}">Home</a></li>
                    <li><a href="{{route('page.resort')}}">Resort</a></li>
                    <li class="active"><a href="{{URL::current()}}">Villa Detail</a></li>
                </ul>
            </div>
        </div>
    </section>

    <!--================Search Room Area =================-->
    <section class="room_details_area" style="margin-top:-88px;">
        <div class="container">
            <div class="row room_details_inner">
                <div class="col-md-12">
                    @php

                    @endphp
                    <div class="room_details_content">
                        <div class="room_d_main_text">
                            <a href="#"><h4> {!! $selectedVilla['villa_name'] !!}</h4></a>
                            <h5>Pricing  {{number_format($selectedVilla['original_price'])}} {{$selectedVilla['currency']}} <span>/ Night</span></h5>

                            <br/>


                            <div class="room_details_img owl-carousel">
                                <div class="item">
                                    <img src="{{url('/')}}/images/room/room-details.jpg" alt="room detail img-1">
                                </div>
                                <div class="item">
                                    <img src="{{url('/')}}/images/room/room-details.jpg" alt="room detail img-2">
                                </div>
                                <div class="item">
                                    <img src="{{url('/')}}/images/room/room-details.jpg" alt="room dtail img-3">
                                </div>
                            </div>

                            <p>
                                {!! $selectedVilla['description']!!}
                            </p>
                        </div>
                        <div class="room_service_list">
                            <h3 class="room_d_title">Room Specifications</h3>
                            <div class="row room_service_list_inner">
                                <div class="col-sm-5 col-md-offset-right-1">
                                    <div class="resot_list">
                                        <ul>
                                            @foreach ($selectedVilla['specifications'] as $specification )
                                                <li><a ><i class="fa fa-caret-right" aria-hidden="true"></i> {{$specification}}</a></li>
                                            @endforeach

                                        </ul>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="room_service_list" style="margin-top:48px;">
                            <h3 class="room_d_title">Room services</h3>
                            <div class="row room_service_list_inner">
                                <div class="col-sm-5 col-md-offset-right-1">
                                    <div class="resot_list">
                                        @php
                                            $amenitiesListA = array_slice($selectedVilla['amenities'],0,5);
                                            $amenitiesListB = array_slice($selectedVilla['amenities'],5);
                                        @endphp
                                        <ul>
                                            @foreach ($amenitiesListA as $amenity)
                                                <li><a ><i class="fa fa-caret-right" aria-hidden="true"></i>{!!$amenity!!}</a></li>
                                            @endforeach


                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-5 col-md-offset-right-1">
                                    <div class="resot_list">
                                        <ul>
                                            @foreach ($amenitiesListB as $amenity)
                                                <li><a ><i class="fa fa-caret-right" aria-hidden="true"></i>{!!$amenity!!}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                        {{-- <div class="room_details_clients">
                            <h3 class="room_d_title">customer Reviews</h3>
                            <div class="clients_slider owl-carousel">
                                <div class="item">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="img/clients/client-1.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</p>
                                            <a href="#"><h4>- Michale John</h4></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="img/clients/client-1.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</p>
                                            <a href="#"><h4>- Michale John</h4></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="img/clients/client-1.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</p>
                                            <a href="#"><h4>- Michale John</h4></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="room_details_comment">
                            <h4>Add review</h4>
                            <form class="contact_us_form row" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                                <div class="form-group col-md-12">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name*">
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email*">
                                </div>
                                <div class="form-group col-md-12">
                                    <h5>Your Rating</h5>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <textarea class="form-control" name="message" id="message" rows="1" placeholder="review"></textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <button type="submit" value="submit" class="btn submit_btn form-control">submit now</button>
                                </div>
                            </form>
                        </div> --}}
                    </div>
                </div>
                {{-- <div class="col-md-4">
                    <div class="search_right_sidebar">
                        <div class="book_room_area">
                            <div class="book_room_box">
                                <div class="book_table_item">
                                    <h3>check availability</h3>
                                </div>
                                <div class="book_table_item">
                                    <div class="input-append date form_datetime">
                                        <input size="16" type="text" value="" readonly placeholder="Arrival Date">
                                        <span class="add-on"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                                <div class="book_table_item">
                                    <div class="input-append date form_datetime">
                                        <input size="16" type="text" value="" readonly placeholder="Departure Date">
                                        <span class="add-on"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                                <div class="book_table_item">
                                    <select class="selectpicker">
                                        <option>Adults</option>
                                        <option>Adults</option>
                                        <option>Adults</option>
                                    </select>
                                </div>
                                <div class="book_table_item">
                                    <select class="selectpicker">
                                        <option>Children</option>
                                        <option>Children</option>
                                        <option>Children</option>
                                    </select>
                                </div>
                                <div class="book_table_item">
                                    <a class="book_now_btn" href="#">Reserve now</a>
                                </div>
                            </div>
                        </div>
                        <div class="book_now_button">
                            <a class="book_now_btn_black" href="#">Book now</a>
                        </div>
                        <div class="your_book_box">
                            <h4>Your book</h4>
                            <h5>your cart is empty</h5>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!--================End Search Room Area =================-->



@endsection
