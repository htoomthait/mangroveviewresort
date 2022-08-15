@extends('layout.master')

@section('page_content')
    <!--================Banner Area =================-->
    <section class="banner_area">
        <div class="container">
            <div class="banner_inner_content">
                <h3>Activities</h3>
                <ul>
                    <li ><a href="{{route('home.landing_page')}}">Home</a></li>
                    <li class="active"><a href="{{route('page.activities')}}">Activities</a></li>
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
                <div class="col-md-6 activity_block" id="activity_fisihing">
                    <div class="heading">
                        <h4>Fishing <span>Around</span></h4>
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

            </div>


            <div class="row activity_row">
                <div class="col-md-6 activity_block" id="activity_cycling">
                    <div class="heading">
                        <h4>Cycling <span>Through</span></h4>
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

                <div class="col-md-6 activity_block" id="activity_gift_shop">
                    <div class="heading">
                        <h4>Gift Shop <span>visiting</span></h4>
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
                <div class="col-md-6 activity_block" id="activity_zip_riding">
                    <div class="heading">
                        <h4>zip <span>riding</span> (coming soon) </h4>
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


            </div>
            <div class="row activity_row">
                <div class="col-md-6 activity_block" id="activity_waterboom">
                    <div class="heading">
                        <h4>waterboom <span>fun</span> (coming soon)</h4>
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
                <div class="col-md-6 activity_block" id="activity_sailing_in_the_lake">
                    <div class="heading">
                        <h4>Sailing in the lake <span>fun</span> (coming soon)</h4>
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


            </div>


        </div>










    </section>
    <!--================End Activities Area =================-->
