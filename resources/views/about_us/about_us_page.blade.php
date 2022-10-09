@extends('layout.master')

@section('page_content')
    {{-- Banner Area Start  --}}
    @include('about_us.about_us_banner_area')
    {{-- Banner Area End  --}}



   {{-- Garden Story Area --}}
    @include('about_us.about_us_garden')
    {{-- End Garden Story Area --}}

    <section
        class="video_area"
        style="
            background: url(../images/mangrove_view_forest_video_bg.jpg) no-repeat scroll center center;
            background-size: cover;
            position: relative;
            z-index: 3;
            padding: 120px 0px 134px 0px;   s
            "
    >
        <div class="container">
            <div class="video_inner">
                <a class="popup-youtube" href="{{ asset('videos/about_mangrove_forest_and_resort.mp4') }}"><i
                        class="flaticon-play-button"></i></a>
                <h4>About </h4>
                <h5>Mangrove &amp; Forest</h5>
            </div>
        </div>
    </section>

    {{-- Resort Story Area  --}}
    @include('about_us.about_us_resort')
    {{-- End Resort Story Area --}}



    <section
        class="video_area"
        style="
            background: url(../images/jade_museum_video_bg.jpg) no-repeat scroll center center;
            background-size: cover;
            position: relative;
            z-index: 3;
            padding: 120px 0px 134px 0px;
            "
    >
        <div class="container">
            <div class="video_inner">
                <a class="popup-youtube" href="{{ asset('videos/jade_museum.mp4') }}"><i
                        class="flaticon-play-button"></i></a>
                <h4>virtual Tour</h4>
                <h5>of Jade &amp; Museum</h5>
            </div>
        </div>
    </section>

    <section class="activities_area">
        {{-- Jade Museum Start --}}
        @include('about_us.about_us_jade_museum')
        {{-- End Jade Museum  --}}

        {{-- Wooden Statue Museum Start  --}}
        @include('about_us.about_us_wooden_statue_museum')
        {{-- End Wooden Statue Museum  --}}
    </section>

@endsection
