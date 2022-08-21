@extends('layout.master')

@section('page_content')
     <!--================Banner Area =================-->
     <section class="banner_area"
        style="background: url({{asset('img/banner/contact_us_banner_bg.jpg')}}) no-repeat center; background-size: cover;"
     >
          <div class="container">
          <div class="banner_inner_content">
               <h3>Contact Us</h3>
               <ul>
                    <li ><a href="index.html">Home</a></li>
                    <li class="active"><a href="{{route('page.contact_us')}}">Contact Us</a></li>
               </ul>
          </div>
          </div>
     </section>
     <!--================End Banner Area =================-->

      <!--================Get Contact Area =================-->
      @include('contact_us.contact_area');
      <!--================End Get Contact Area =================-->

      <!--================Map Area =================-->
      @include('contact_us.map_area')
      <!--================End Map Area =================-->
@endsection
