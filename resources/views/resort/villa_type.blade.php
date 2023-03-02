<section class="explor_room_area explore_room_list p resort-background" id="sec_villa_type"  style="padding-bottom: 56px;">
    <div class="container resort-block-container" >
        <div class="explor_title row m0">
            <div class="left_ex_title">
                <h2>Explor Our <span>Villas</span></h2>
                <p>choose room according to your comfort</p>
            </div>
        </div>
        <div class="row explor_room_item_inner">
            @foreach ($arrVillas as $villa)


            <div class="col-md-4 col-sm-6">
                <div class="explor_item">
                    <a href="{{route('page.resort.villa_detail',$villa['id'])}}" class="room_image">
                        <img src="{{ $villa['images'][0] == "" ? 'img/room/room-1.jpg' : $villa['images'][0] }}" alt="">
                    </a>
                    <div class="explor_text">
                        <a href="{{route('page.resort.villa_detail',$villa['id'])}}"><h4> {!!$villa['villa_name']!!} </h4></a>

                        @if($villa['line_break_add'])
                            <br />
                        @endif

                        <ul>
                            <li><a href="#">{{$villa['area']}} </a></li>
                            <li><a href="#">{{$villa['villa_view']}}</a></li>
                            <li><a href="#">{{$villa['number_of_person']}} Persons</a></li>
                        </ul>
                        <div class="explor_footer villa-footer" >

                            <div class="pull-left">
                                <h3>{{ number_format($villa['original_price'])}} {{$villa['currency']}} <span>/ Night</span></h3>
                            </div>
                            <div class="pull-right mt-4">
                                <a class="book_now_btn" href="{{route('page.resort.villa_detail',$villa['id'])}}">View details</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach





        </div>

</section>
