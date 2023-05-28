@extends('layout.master')

@section('page_content')
    <!--================Banner Area =================-->
    <section class="banner_area"
        style="background: url({{ asset('img/banner/activity_banner_bg.jpg') }}) no-repeat center; background-size: cover;">
        <div class="container">
            <div class="banner_inner_content">
                <h3>Activities</h3>
                <ul>
                    <li><a href="{{ route('home.landing_page') }}">Home</a></li>
                    <li class="active"><a href="{{ route('page.activities') }}">Activities</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--================End Banner Area =================-->

    <!--================Activities Introduction Area =================-->
    <section class="activities_title">
        <div class="container">
            <div class="resort_title">
                <h2>resort <span>Activities</span></h2>
                <h5>Have lots of fun in our place</h5>
                <p>Equia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut
                    enim ad minima veniam. quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid
                    ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea volup.</p>
            </div>
        </div>
    </section>
    <!--================Activities Introduction Area =================-->

    <!--================Activities Area =================-->
    <section class="activities_area">
        <div class="container">
            <div class="row activity_row">
                <div class="col-md-6 activity_block" id="activity_boat">
                    <div class="heading">
                        <h4>Boat <span>Riding</span></h4>
                    </div>
                    <a href="{{ url('/') }}/images/activities/boat_activity_large.jpg" data-lightbox="activity_page"
                        data-title="Boat Riding" class="activities_img">
                        <i class="fa fa-expand"
                            style="position: absolute; z-index:100; margin-top:8px; left: 92%; font-size:21px;"
                            aria-hidden="true"></i>
                        <img src="{{ url('/') }}/images/activities/boat_activity_small.jpg" alt="guide map">
                    </a>

                    <div class="content">
                        <p>
                            Boat riding along the Ma Gyi String is one of your things to do while you are staying at
                            Mangrove View Resort.
                        </p>
                        <p>
                            Enjoy a leisure boat ride along the quiet, tranquil river while being surrounded by the luscious
                            green mangrove forest.
                        </p>
                    </div>

                </div>
                <div class="col-md-6 activity_block" id="activity_fisihing">
                    <div class="heading">
                        <h4>Fishing <span>Around</span></h4>
                    </div>
                    <a href="{{ url('/') }}/images/utility/coming_soon_activity_large.jpg"
                        data-lightbox="activity_page" data-title="Fishing" class="activities_img">
                        <i class="fa fa-expand"
                            style="position: absolute; z-index:100; margin-top:8px; left: 92%; font-size:21px;"
                            aria-hidden="true"></i>
                        <img src="{{ url('/') }}/images/utility/coming_soon_activity_small.jpg" alt="guide map">
                    </a>
                    <div class="content">
                        {{-- <p>Equia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                            voluptatem. Ut enim ad minima veniam. quis nostrum exercitationem ullam corporis suscipit
                            laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit
                            qui in ea volup.</p> --}}
                    </div>

                </div>

            </div>


            <div class="row activity_row">
                <div class="col-md-6 activity_block" id="activity_cycling">
                    <div class="heading">
                        <h4>Cycling <span>Through</span></h4>
                    </div>
                    <a href="{{ url('/') }}/images/activities/cycling_activity.jpg" data-lightbox="activity_page"
                        data-title="Cycling" class="activities_img">
                        <i class="fa fa-expand"
                            style="position: absolute; z-index:100; margin-top:8px; left: 92%; font-size:21px;"
                            aria-hidden="true"></i>
                        <img src="{{ url('/') }}/images/activities/cycling_activity_thumbnail.jpg" alt="guide map">
                    </a>
                    <div class="content">
                        {{-- <p>Equia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                            voluptatem. Ut enim ad minima veniam. quis nostrum exercitationem ullam corporis suscipit
                            laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit
                            qui in ea volup.</p> --}}
                    </div>
                </div>

                <div class="col-md-6 activity_block" id="activity_fashion_shop">
                    <div class="heading">
                        <h4>Fashion Shop <span>visiting</span></h4>
                    </div>
                    <a href="{{ url('/') }}/images/activities/fashion_shop_activity_large.jpg"
                        data-lightbox="activity_page" data-title="Gift Shop" class="activities_img">
                        <i class="fa fa-expand"
                            style="position: absolute; z-index:100; margin-top:8px; left: 92%; font-size:21px;"
                            aria-hidden="true"></i>
                        <img src="{{ url('/') }}/images/activities/fashion_shop_activity_small.jpg" alt="guide map">
                    </a>
                    <div class="content">
                        {{-- <p>Equia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                            voluptatem. Ut enim ad minima veniam. quis nostrum exercitationem ullam corporis suscipit
                            laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit
                            qui in ea volup.</p> --}}
                    </div>
                </div>
            </div>

            {{-- <div class="row activity_row">
                <div class="col-md-6 activity_block" id="activity_jade_museum">
                    <div class="heading">
                        <h4>Jade Museum <span>visiting</span></h4>
                    </div>
                    <a href="activities.html" class="activities_img">
                        <img src="img/activities/activities-1.jpg" alt="">
                    </a>
                    <div class="content">
                        <p>Equia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                            voluptatem. Ut enim ad minima veniam. quis nostrum exercitationem ullam corporis suscipit
                            laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit
                            qui in ea volup.</p>
                    </div>
                </div>
                <div class="col-md-6 activity_block" id="activity_wooden_statue_museum">
                    <div class="heading">
                        <h4>Wooden Statue <span>Museum</span></h4>
                    </div>
                    <a href="activities.html" class="activities_img">
                        <img src="img/activities/activities-1.jpg" alt="">
                    </a>
                    <div class="content">
                        <p>Equia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                            voluptatem. Ut enim ad minima veniam. quis nostrum exercitationem ullam corporis suscipit
                            laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit
                            qui in ea volup.</p>
                    </div>
                </div>


            </div> --}}

            <div class="row activity_row">
                <div class="col-md-6 activity_block" id="activity_swimming">
                    <div class="heading">
                        <h4>Swimming <span>fun</span></h4>
                    </div>
                    <a href="{{ url('/') }}/images/activities/swimming_activity_large.jpg"
                        data-lightbox="activity_page" data-title="Swimming" class="activities_img">
                        <i class="fa fa-expand"
                            style="position: absolute; z-index:100; margin-top:8px; left: 92%; font-size:21px;"
                            aria-hidden="true"></i>
                        <img src="{{ url('/') }}/images/activities/swimming_activity_small.jpg" alt="guide map">
                    </a>
                    <div class="content">
                        {{-- <p>Equia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                            voluptatem. Ut enim ad minima veniam. quis nostrum exercitationem ullam corporis suscipit
                            laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit
                            qui in ea volup.</p> --}}
                    </div>
                </div>
                <div class="col-md-6 activity_block" id="activity_zip_riding">
                    <div class="heading">
                        <h4>zip <span>riding</span> </h4>
                    </div>
                    <a href="{{ url('/') }}/images/activities/zipline_activity_large.jpg"
                        data-lightbox="activity_page" data-title="Zip Riding" class="activities_img">
                        <i class="fa fa-expand"
                            style="position: absolute; z-index:100; margin-top:8px; left: 92%; font-size:21px;"
                            aria-hidden="true"></i>
                        <img src="{{ url('/') }}/images/activities/zipline_activity_small.jpg" alt="guide map">
                    </a>
                    <div class="content">
                        <p>
                            From the height of 100 feet, the 1800 feet Zipline spans across the garden and lake. Enjoy the
                            exhilarating ziplining experience while appreciating the stunning views. Suitable for most ages.
                        </p>
                    </div>
                </div>


            </div>
            <div class="row activity_row">
                <div class="col-md-6 activity_block" id="activity_kayaking">
                    <div class="heading">
                        <h4>Kayaking <span>fun</span>
                            <p>&nbsp;</p>
                        </h4>
                    </div>
                    <a href="{{ url('/') }}/images/activities/kayaking_activity.jpg" data-lightbox="activity_page"
                        data-title="Kayaking" class="activities_img">
                        <i class="fa fa-expand"
                            style="position: absolute; z-index:100; margin-top:8px; left: 92%; font-size:21px;"
                            aria-hidden="true"></i>
                        <img src="{{ url('/') }}/images/activities/kayaking_activity_thumbnail.jpg" alt="guide map">
                    </a>
                    <div class="content">
                        <p>Kayaing activity is available.</p>
                    </div>
                </div>
                <div class="col-md-6 activity_block" id="activity_sailing_in_the_lake">
                    <div class="heading">
                        <h4>Sailing in the lake <span>fun</span> (coming soon)</h4>
                    </div>
                    <a href="{{ url('/') }}/images/utility/coming_soon_activity_large.jpg"
                        data-lightbox="activity_page" data-title="Sailing in the lake" class="activities_img">
                        <i class="fa fa-expand"
                            style="position: absolute; z-index:100; margin-top:8px; left: 92%; font-size:21px;"
                            aria-hidden="true"></i>
                        <img src="{{ url('/') }}/images/utility/coming_soon_activity_small.jpg" alt="guide map">
                    </a>
                    <div class="content">
                        {{-- <p>Equia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                            voluptatem. Ut enim ad minima veniam. quis nostrum exercitationem ullam corporis suscipit
                            laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit
                            qui in ea volup.</p> --}}
                    </div>
                </div>


            </div>

            <div class="row activity_row">
                <div class="col-md-6 activity_block" id="activity_waterboom">
                    <div class="heading">
                        <h4>waterboom <span>fun</span> (coming soon)</h4>
                    </div>
                    <a href="{{ url('/') }}/images/utility/coming_soon_activity_large.jpg"
                        data-lightbox="activity_page" data-title="Water Boom" class="activities_img">
                        <i class="fa fa-expand"
                            style="position: absolute; z-index:100; margin-top:8px; left: 92%; font-size:21px;"
                            aria-hidden="true"></i>
                        <img src="{{ url('/') }}/images/utility/coming_soon_activity_small.jpg" alt="guide map">
                    </a>
                    <div class="content">
                        {{-- <p>Equia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                            voluptatem. Ut enim ad minima veniam. quis nostrum exercitationem ullam corporis suscipit
                            laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit
                            qui in ea volup.</p> --}}
                    </div>
                </div>
                <div class="col-md-6 activity_block" id="activity_wall_climbing">
                    <div class="heading">
                        <h4>Wall Climbing <span>fun</span> <br /> &nbsp; </h4>
                    </div>
                    <a href="{{ url('/') }}/images/activities/wall_climbing_2.jpg" data-lightbox="activity_page"
                        data-title="Wall Climbing" class="activities_img">
                        <i class="fa fa-expand"
                            style="position: absolute; z-index:100; margin-top:8px; left: 92%; font-size:21px;"
                            aria-hidden="true"></i>
                        <img src="{{ url('/') }}/images/activities/wall_climbing_2_thumbnail.jpg"
                            alt="wall climbing">
                    </a>
                    <div class="content">
                        <p>
                            Challenge yourself and friends by completing the wall climbing adventure.
                        </p>
                    </div>
                </div>


            </div>

            <div class="row activity_row">
                <div class="col-md-6 activity_block" id="activity_quick_jump">
                    <div class="heading">
                        <h4>Quick Jumpb <span>fun</span> <br /> &nbsp;</h4>
                    </div>
                    <a href="{{ url('/') }}/images/activities/quick_jump.jpg" data-lightbox="activity_page"
                        data-title="Quick Jumpb" class="activities_img">
                        <i class="fa fa-expand"
                            style="position: absolute; z-index:100; margin-top:8px; left: 92%; font-size:21px;"
                            aria-hidden="true"></i>
                        <img src="{{ url('/') }}/images/activities/quick_jump_thumbnail.jpg" alt="quick jump">
                    </a>
                    <div class="content">
                        <p>
                            Jump from the staggering height of 75 feet for a gravity defying experience.
                            Don't forget to enjoy the view of the ocean shores before the jump!
                        </p>

                    </div>
                </div>
                <div class="col-md-6 activity_block" id="activity_mini_golf">
                    <div class="heading">
                        <h4>Mini Golf <span>Sport</span> <br /> &nbsp; </h4>
                    </div>
                    <a href="{{ url('/') }}/images/activities/mini_golf_activity.jpg" data-lightbox="activity_page"
                        data-title="Mini Golf" class="activities_img">
                        <i class="fa fa-expand"
                            style="position: absolute; z-index:100; margin-top:8px; left: 92%; font-size:21px;"
                            aria-hidden="true"></i>
                        <img src="{{ url('/') }}/images/activities/mini_golf_activity_thumbnail.jpg"
                            alt="wall climbing">
                    </a>
                    <div class="content">
                        {{-- <p>Equia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                            voluptatem. Ut enim ad minima veniam. quis nostrum exercitationem ullam corporis suscipit
                            laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit
                            qui in ea volup.</p> --}}
                    </div>
                </div>


            </div>




        </div>










    </section>
    <!--================End Activities Area =================-->
