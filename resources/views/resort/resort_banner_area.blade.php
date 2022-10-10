<section class="banner_area"
    style="background: url({{ asset('img/banner/resort_banner_bg.jpg') }}) no-repeat center; background-size: cover;">
    <div class="container">
        <div class="banner_inner_content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2 col-md-5 col-sm-5 col-xs-7" >
                        <img
                        width="100%"
                        src="{{ asset('images/logos/mangrove_view_logo.jpg') }}" />
                    </div>
                    <div
                        class="col-lg-10 col-sm-12 col-xs-12 mangrove_view_resort_banner_text"
                        style="margin-top: 32px;"
                        >
                        <h3>Mangrove View Resort</h3>
                    </div>



                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <ul>
                            <li><a href="{{ route('home.landing_page') }}">Home</a></li>
                            <li class="active"><a href="{{ route('page.resort') }}">Resort</a></li>
                        </ul>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
