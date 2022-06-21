@extends('layout.master')

@section('page_content')
    <!--================Slider Area =================-->
    @include('landing.main_slider')
    <!--================End Slider Area =================-->
    
    <!--================Book A Table Area =================-->
    {{-- @include('landing.book_a_table') --}}
    <!--================End Book A Table Area =================-->
    
    <!--================Introduction Area =================-->
    @include('landing.introduction')
    <!--================End Introduction Area =================-->

    <!--================Choose Resot Area =================-->
    @include('landing.why_choose_our_resort')
    <!--================End Choose Resot Area =================-->
    
    <!--================Explor Room Area =================-->
    @include('landing.explor_room')
    <!--================End Explor Room Area =================-->
    
    <!--================Our Service Area =================-->
    @include('landing.our_service')
    <!--================End Our Service Area =================-->
    
    <!--================Our Resort Gallery Area =================-->
    {{-- @include('landing.our_resort_gallery') --}}
    <!--================End Our Resort Gallery Area =================-->

    <!--================Discount Area =================-->
    @include('landing.discount_area')
    <!--================End Discount Area =================-->
    
    <!--================Client Testimonial Area =================-->
    @include('landing.client_testimonial')
    <!--================End Client Testimonial Area =================-->
    
    <!--================Latest News Area =================-->
    {{-- @include('landing.latest_news') --}}
    <!--================End Latest News Area =================-->
    
    <!--================Video Area =================-->
    @include('landing.video_area')
    <!--================End Video Area =================-->
    
    <!--================Fun Fact Area =================-->
    @include('landing.fun_fact')
    <!--================End Fun Fact Area =================-->
@endsection