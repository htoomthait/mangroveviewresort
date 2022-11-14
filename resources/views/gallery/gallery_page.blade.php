@extends('layout.master')

@section('page_content')
    <!--================Banner Area =================-->
    <section class="banner_area"
        style="background: url({{ asset('img/banner/gallery_banner_bg.jpg') }}) no-repeat center; background-size: cover;">
        <div class="container">
            <div class="banner_inner_content">
                <h3>Gallery</h3>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="event.html">Resort</a></li>
                    <li class="active"><a href="event.html">Gallery</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--================End Banner Area =================-->

    <!--================Gallery Area =================-->
    <section class="grid_gallery_area resort-background" id="sec_gallery" style="padding-bottom:96px;">

        <div class="container resort-block-container">
            <div class="left_ex_title">
                <h2>our <span>gallery [in progress]</span></h2>
                <p></p>
                <p></p>
            </div>
            {{-- <button onClick="setGalleryImages('all')"> fetch images </button> --}}
            <div id="gallery_page_gallery">
                <ul class="gallery_page_tabs">
                    <li>
                        <a class="active" href="#all" onclick="setGalleryImages('all')">
                            All
                        </a>
                    </li>
                    <li>
                        <a class="" href="#garden" onclick="setGalleryImages('garden')">
                            Garden
                        </a>
                    </li>
                    <li>
                        <a href="#resort" onclick="setGalleryImages('resort')">
                            Resort
                        </a>
                    </li>
                    <li>
                        <a href="#villa" onclick="setGalleryImages('villa')">
                            Villa
                        </a>
                    </li>
                    <li>
                        <a href="#activity" onclick="setGalleryImages('activity')">
                            Activity
                        </a>
                    </li>
                    <li>
                        <a href="#restaurant" onclick="setGalleryImages('restaurant')">
                            Restaurant
                        </a>
                    </li>
                    <li>
                        <a href="#beach_and_other_outdoors" onclick="setGalleryImages('beach_and_other_outdoors')">
                            Beach and Other Outdoors
                        </a>
                    </li>
                </ul>
                <div class="mt-4">
                    <div id='all' class="lightgallery grid_tab_block"></div>
                    <div id='garden' class="lightgallery grid_tab_block"></div>
                    <div id='resort' class="lightgallery grid_tab_block"></div>
                    <div id='villa' class="lightgallery grid_tab_block"></div>
                    <div id='activity' class="lightgallery grid_tab_block"></div>
                    <div id='restaurant' class="lightgallery grid_tab_block"></div>
                    <div id='beach_and_other_outdoors' class="lightgallery grid_tab_block"></div>
                </div>


            </div>
        </div>

    </section>

    <!--================End Gallery Area =================-->
@endsection

@push('page_js')
    @include('gallery.js.gallery_js')
@endpush
