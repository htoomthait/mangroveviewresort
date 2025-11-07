@php
    $titlesOfPhoto = [
        '--',
        '--',
        '--',
        '--',
        '--',
        '--',
        '--',
        '--',
        '--',
        '--',
        '--',
        '--',
        '--',
        '--',
        '--',
        '--',
        '--',
        '--',
        '--',
        '--',
        '--',
        '--',
        '--',
        '--',
        '--',
        '--',
        '--',
    ];
@endphp

<section class="choose_resort_area">
    <div class="container">
        <div class="center_w_title">
            <h2>why choose our <span>Sea And Lake</span></h2>
            {{-- <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum</p> --}}
        </div>
        <div class="row" style="  display:flex; justify-content: center; gap: 32px; ">
            <div class="col-md-5 ">
                <div class="choose_resort_list ">
                    <ul>
                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Spacious 300 acre park
                            </a></li>
                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Myanmar’s Longest
                                Mangrove Bridge</a></li>
                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>River Boat Ride </a>
                        </li>
                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Kayaking Adventure</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5 ">
                <div class="choose_resort_list">
                    <ul>
                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Zip line
                                adventures</a></li>
                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Jade Museum</a></li>
                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Wooden Statue Museum
                            </a></li>
                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Unlimited photo
                                shooting spots </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="resort_gallery_inner">
        <div class="resort_gallery owl-carousel imageGallery1">
            @foreach ($titlesOfPhoto as $index => $photoTitle)
                <div class="item">
                    <img src="images/why_our_resort/why_our_resort_{{ $index + 1 }}.jpg" alt="">
                    <div class="resort_g_hover">
                        <div class="resort_hover_inner">
                            <a class="light" href="images/why_our_resort/why_our_resort_{{ $index + 1 }}.jpg"><i
                                    class="fa fa-expand" aria-hidden="true"></i></a>
                            <h5>{{ $photoTitle }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
</section>
