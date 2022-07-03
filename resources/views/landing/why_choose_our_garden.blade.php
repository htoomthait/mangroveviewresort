@php    
    $titlesOfPhoto = [
        'AAA',  
        'AAB',
        'AAC',
        'AAD',
        'AAE',
        'AAF',
        'AAG',
        'AAH',
        'AAI',
        'AAJ',
        'AAK',
        'AAL',
        'AAM',
        'AAN',
        'AAO',
        'AAP',
        'AAQ',
        'AAR',
        'AAS',
        'AAT',
        'AAU',
        'AAV',
        'AAW',
        'AAX',
        'AAY',
        'AAZ',
        'ABA',
    ];
@endphp

<section class="choose_resort_area">
    <div class="container">
        <div class="center_w_title">
            <h2>why choose our <span>Garden</span></h2>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum</p>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-right-1 col-md-offset-1">
                <div class="choose_resort_list">
                    <ul>
                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Wellness & poll</a></li>
                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Free wifi</a></li>
                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Bar & garden with terrace</a></li>
                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Delicious breakfast</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-md-offset-right-1 col-md-offset-1">
                <div class="choose_resort_list">
                    <ul>
                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>HIgh customer satisfaction</a></li>
                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Good parking & security</a></li>
                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Clean room service </a></li>
                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Discount coupons </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="resort_gallery_inner">
        <div class="resort_gallery owl-carousel imageGallery1">
            @foreach($titlesOfPhoto as $index => $photoTitle)
            <div class="item">
                <img src="images/why_our_resort/why_our_resort_{{$index+1}}.jpg" alt="">
                <div class="resort_g_hover">
                    <div class="resort_hover_inner">
                        <a class="light" href="images/why_our_resort/why_our_resort_{{$index+1}}.jpg"><i class="fa fa-expand" aria-hidden="true"></i></a> 
                        <h5>{{$photoTitle}}</h5>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
        
    </div>
</section>