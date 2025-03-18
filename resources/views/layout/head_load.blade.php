<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{ url('/') }}/img/logo/sea_and_lake_logo_picture.png" type="image/x-icon" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sea &amp; Lake Garden - {{ session('page_title') }}</title>

    <!-- Icon css link -->
    <link href="{{ url('/') }}/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/vendors/stroke-icon/style.css" rel="stylesheet">
    <link href="{{ url('/') }}/vendors/flat-icon/flaticon.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ url('/') }}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Rev slider css -->
    <link href="{{ url('/') }}/vendors/revolution/css/settings.css" rel="stylesheet">
    <link href="{{ url('/') }}/vendors/revolution/css/layers.css" rel="stylesheet">
    <link href="{{ url('/') }}/vendors/revolution/css/navigation.css" rel="stylesheet">
    <link href="{{ url('/') }}/vendors/animate-css/animate.css" rel="stylesheet">

    <!-- Extra plugin css -->
    <link href="{{ url('/') }}/vendors/magnify-popup/magnific-popup.css" rel="stylesheet">
    <link href="{{ url('/') }}/vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/vendors/bootstrap-selector/bootstrap-select.css" rel="stylesheet">
    <link href="{{ url('/') }}/vendors/lightbox/simpleLightbox.css" rel="stylesheet">

    {{-- <link href="css/style.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ url('/') }}/scss-compiled/style.css" />
    <link href="{{ url('/') }}/css/responsive.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('/') }}/css/custom_style.css">

    {{-- select 2 --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    {{-- Date Range Picker --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    {{-- lightbox 2 css load --}}
    <link rel="stylesheet" href="{{ url('/') }}/js/light_box/css/lightbox.min.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">

    <style>
        .satisfy-regular {
            font-family: "Satisfy", serif;
            font-weight: 400;
            font-style: normal;
        }

        h3.resort {
            color: #EBD4AA;
            /* font-family: "Satisfy", serif; */
            /* font-family: Arial, Helvetica, sans-serif; */
            font-size: 40px;
            font-weight: 400;
            font-style: normal;
            margin-top: 24px;
        }
    </style>

    @if (session('page_title') === 'home')
        <style>
            .owl-carousel .owl-nav .owl-next {
                margin: 0 auto;
                /* border:2px solid yellow; */
            }

            .owl-carousel .owl-nav .owl-prev {
                margin: 0 auto;
                /* border:2px solid green; */
            }




            .owl-carousel .owl-nav {
                display: flex;
                align-items: center;
                margin-top: 32px;
            }

            .owl-carousel .owl-nav .fa {
                font-size: 60px;
            }
        </style>
    @endif

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-942JCP52FG"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-942JCP52FG');
    </script>
</head>

<body id="body">
