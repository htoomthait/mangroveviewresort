<!DOCTYPE html>
<html>
<head>
    <title>seaandlakemm.com</title>
</head>
<body>
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
        Room Type : {{$details['room_type']}}
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
   
    <p style="font-size: 10px;">
        server and resort received date time : {{ date('d-m-Y H:i:s')}} Time Zone{{ date_default_timezone_get(); }}
    </p>
</body>
</html>