<!DOCTYPE html>
<html>
<head>
    <title>seaandlakemm.com</title>
</head>
<body>
    <img src="http://seaandlakemm.com/img/logo/sea_and_lake_logo_picture.png" alt="sea and lake logo" width="72px"/>


    <h1>Contact Us Form Submission </h1>
    <p>
        Name : {{$details['name']}}
    <p>
    <p>
        Email : {{$details['email']}}
    <p>
    <p>
        Phone : {{$details['phone']}}
    <p>
    <p>
        Room Type : {!! $details['room_type'] !!}
    <p>
    <p>
        Check In Date : {{$details['check_in_date']}}
    <p>
    <p>
        Check Out Date : {{$details['check_out_date']}}
    <p>
    <p>
        Body : {{ $details['body'] }}
    </p>

    <p>
        resort and website server received date time : {{ date('d-m-Y H:i:s')}} TZ {{ date_default_timezone_get(); }}
    </p>
</body>
</html>


