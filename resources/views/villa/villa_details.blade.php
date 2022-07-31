@extends('layout.master')

@section('page_content')
    <section class="banner_area">
        <div class="container">
            <div class="banner_inner_content">
                <h3>Resort</h3>
                <ul>
                    <li ><a href="{{route('home.landing_page')}}">Home</a></li>
                    <li><a href="{{route('page.resort')}}">Resort</a></li>
                    <li class="active"><a href="{{URL::current()}}">Villa Detail</a></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="activities_title">
        <div class="container">
            <div class="resort_title">
                <h2>resort's <span>{{ $selectedVilla['villa_name']}}</span></h2>
                <h5>One of our finest villa</h5>
                <p>Equia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut
                    enim ad minima veniam. quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid
                    ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea volup.</p>
            </div>
        </div>
    </section>



@endsection
