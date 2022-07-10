@extends('layout.master')

@section('page_content')

    {{-- banner area start --}}
    @include('karaoke.karaoke_banner_area')
    {{-- banner area end --}}


    {{-- karaokie main description area start --}}
    @include('karaoke.karaoke_main_description')
    {{-- karaokie main description area end --}}



@endsection