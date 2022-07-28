@extends('layout.master')

@section('page_content')
    <!--================Banner Area =================-->
    <section class="banner_area">
        <div class="container">
            <div class="banner_inner_content">
                <h3>About Us</h3>
                <ul>
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="about-us.html">About Us</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--================End Banner Area =================-->

    <!--================Garden Story Area =================-->
    <section class="introduction_area resort_story_area" id="sec_garden">
        <div class="container">
            <div class="row introduction_inner">
                <div class="col-md-5">
                    <a href="#" class="introduction_img">
                        <img src="img/resort-story-img.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-7">
                    <div class="introduction_left_text">
                        <div class="resort_title">
                            <h2>our garden <span>story</span></h2>
                            <h5>give best service to our customers</h5>
                        </div>
                        <h6>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum</h6>
                        <h4>We are Available for business</h4>
                        <p>quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam. quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea volup.</p>
                        <p>Ut enim ad minima veniam. quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatut.</p>
                        <a class="about_btn_b" href="#">contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Garden Story Area =================-->

    <!--================Resort Story Area =================-->
    <section class="introduction_area resort_story_area" id="sec_resort">
        <div class="container">
            <div class="row introduction_inner">
                <div class="col-md-7">
                    <div class="introduction_left_text">
                        <div class="resort_title">
                            <h2>our resort <span>story</span></h2>
                            <h5>give best service to our customers</h5>
                        </div>
                        <h6>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum</h6>
                        <h4>We are Available for business</h4>
                        <p>quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam. quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea volup.</p>
                        <p>Ut enim ad minima veniam. quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatut.</p>
                        <a class="about_btn_b" href="#">contact us</a>
                    </div>
                </div>
                <div class="col-md-5">
                    <a href="#" class="introduction_img">
                        <img src="img/resort-story-img.jpg" alt="">
                    </a>
                </div>

            </div>
        </div>
    </section>
    <!--================End Resort Story Area =================-->

    <section class="activities_area">
        <div class="activities_item_inner" id="activity_jade_museum">
            <div class="container">
                <div class="row activities_item_row">
                    <div class="col-md-6">
                        <a href="activities.html" class="activities_img">
                            <img src="img/activities/activities-4.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-md-6">
                        <div class="activities_content left_activities">
                            <h4>jade museum <span>visiting</span></h4>
                            <p>Equia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam. quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea volup.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="activities_item_inner" id="activity_wooden_statue_museum">
            <div class="container">
                <div class="row activities_item_row">

                   <div class="col-md-6">
                        <div class="activities_content left_activities">
                            <h4>wooden statue museum <span>visiting</span></h4>
                            <p>Equia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam. quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea volup.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <a href="activities.html" class="activities_img">
                            <img src="img/activities/activities-4.jpg" alt="">
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
