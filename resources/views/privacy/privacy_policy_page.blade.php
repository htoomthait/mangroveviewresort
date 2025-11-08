@extends('layout.master')

@section('page_content')
    <!--================Banner Area =================-->
    <section class="banner_area"
        style="background: url({{ asset('img/banner/restaurant_banner_bg.jpg') }}) no-repeat center; background-size: cover;">
        <div class="container">
            <div class="banner_inner_content">
                <h3>Privacy Policies</h3>
                {{-- <ul>
                    <li><a href="{{ route('home.landing_page') }}">Home</a></li>
                    <li><a href="{{ route('page.resort') }}">Resort</a></li>
                    <li class="active"><a href="{{ route('page.bar_and_restaurant') }}">Bar &amp; Restaurant</a></li>
                </ul> --}}
            </div>
        </div>
    </section>
    <!--================End Banner Area =================-->

    <section class="choose_resot_area" id="privacy_policy_section">
        <div class="container">
            <div class="center_title">
                <h2>sea &amp; lake <span>Pravicy Policy</span></h2>
                {{-- <p>Have enjoy at our garden restaurant</p> --}}
            </div>
            <div class="row choose_resot_inner">
                <div class="col restaurant-text">
                    <p>
                        <strong>Policy 1 </strong>: sample text sample text sample text sample text sample text sample text
                        sample text sample text sample text sample text sample text sample text sample text sample text
                        sample text sample text sample text sample text sample text sample text sample text sample text.
                    </p>
                    <p class="mt-2">
                        <strong>Policy 2 </strong>: sample text sample text sample text sample text sample text sample text
                        sample text sample text sample text sample text sample text sample text sample text sample text
                        sample text sample text sample text sample text sample text sample text sample text.
                    </p>


                </div>
            </div>
        </div>
    </section>
@endsection
