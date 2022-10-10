@extends('layout.master')

@section('page_content')
     <!--================Banner Area =================-->
     <section class="banner_area"
     style="background: url({{asset('img/banner/restaurant_banner_bg.jpg')}}) no-repeat center; background-size: cover;"
     >
          <div class="container">
          <div class="banner_inner_content">
               <h3>Bar &amp; Restaurant</h3>
               <ul>
                    <li ><a href="{{route('home.landing_page')}}">Home</a></li>
                    <li ><a href="{{route('page.resort')}}">Resort</a></li>
                    <li class="active"><a href="{{route('page.bar_and_restaurant')}}">Bar &amp; Restaurant</a></li>
               </ul>
          </div>
          </div>
     </section>
     <!--================End Banner Area =================-->

     <!--================sea and lake garden Area =================-->
     @include('bar_and_restaurant.sea_and_lake_garden')
     <!--================end sea and lake garde Area =================-->

     <!--================sea and lake garden Area =================-->
     @include('bar_and_restaurant.mangroview_resort')
     <!--================end sea and lake garde Area =================-->

     <!--================Lobby Bar Area =================-->
     @include('bar_and_restaurant.lobby_bar')
     <!--================End Lobby Bar Area =================-->





@endsection
