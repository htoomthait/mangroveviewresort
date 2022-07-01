@extends('layout.master')

@section('page_content')
    <!--================Banner Area =================-->
    @include('resort.resort_banner_area')
    <!--================End Banner Area =================-->

    <!--================Explor Room Area =================-->
    @include('resort.room_type')
    <!--================End Explor Room Area =================-->

    <!--================Aminities Content Area =================-->
    @include('resort.aminities');
    <!--================End Aminities Content Area =================-->
@endsection
