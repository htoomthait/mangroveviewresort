@extends('layout.master')

@section('page_content')
     <!--================Banner Area =================-->
     <section class="banner_area">
          <div class="container">
          <div class="banner_inner_content">
               <h3>Bar &amp; Restaurant</h3>
               <ul>
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="about-us.html">Bar &amp; Restaurant</a></li>
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