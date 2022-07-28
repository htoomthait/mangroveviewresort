@extends('layout.master')

@section('page_content')
    {{-- Banner Area Start  --}}
    @include('about_us.about_us_banner_area')
    {{-- Banner Area End  --}}

   {{-- Garden Story Area --}}
    @include('about_us.about_us_garden')
    {{-- End Garden Story Area --}}

    {{-- Resort Story Area  --}}
    @include('about_us.about_us_resort')
    {{-- End Resort Story Area --}}

    <section class="activities_area">
        {{-- Jade Museum Start --}}
        @include('about_us.about_us_jade_museum')
        {{-- End Jade Museum  --}}

        {{-- Wooden Statue Museum Start  --}}
        @include('about_us.about_us_wooden_statue_museum')
        {{-- End Wooden Statue Museum  --}}
    </section>

@endsection
