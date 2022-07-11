<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class HomeController extends GenericController
{
    public function landingPage()
    {
        $this->setPageTitle('home', '');
        return view('landing.home');
    }

    public function aboutUsPage()
    {
        $this->setPageTitle('about_us', '');
        return view('about_us.about_us_page');
    }

    public function resortPage()
    {
        $this->setPageTitle('resort', '');
        return view('resort.resort_page');
    }

    public function activitiesPage()
    {
        $this->setPageTitle('activities', '');
        return view('activities.activities_page');
    }

    public function barAndRestaurantPage()
    {
        $this->setPageTitle('barAndRestaurant', '');
        return view('bar_and_restaurant.bar_and_restaurant');
    }

    public function karaokePage()
    {
        $this->setPageTitle('karaoke', '');
        return view('karaoke.karaoke_page');
    }

    public function contactUsPage()
    {
        $this->setPageTitle('contactUs', '');
        $roomTypes = [
            ['room_name' => 'Single Deluxe Villa', 'num_of_person' => 2, 'original_price' => '149,000', 'discounted_price' => '119,000'],
            
            ['room_name' => 'Duplex Room Villa', 'num_of_person' => 2, 'original_price' => '149,000', 'discounted_price' => '119,000'],
            
            ['room_name' => 'Duplex Suite Villa', 'num_of_person' => 3, 'original_price' => '214,000', 'discounted_price' => '171,000'],
            
            ['room_name' => 'Mangrove Suite Villa', 'num_of_person' => 3, 'original_price' => '214,000', 'discounted_price' => '171,000'],
            
            ['room_name' => 'Family Deluxe Villa', 'num_of_person' => 4, 'original_price' => '298,000', 'discounted_price' => '239,000'],
            
            ['room_name' => 'Jade Suite Villa', 'num_of_person' => 2, 'original_price' => '299,000', 'discounted_price' => '239,000'],
            
            ['room_name' => 'Family Jade Suite Villa 4', 'num_of_person' => 4, 'original_price' => '398,000', 'discounted_price' => '318,000'],
            
            ['room_name' => 'Family Jade Suite  Villa 8', 'num_of_person' => 8, 'original_price' => '538,000', 'discounted_price' => '430,000'],
            
            ['room_name' => 'Presenditial Jade Suite Villa', 'num_of_person' => 2, 'original_price' => '339,000', 'discounted_price' => '271,000'],
        ];

        return view('contact_us.contact_us_page', compact('roomTypes'));
    }

    public function submitContactUsForm(Request $request)
    {
        // dd($request->all());
        $validator =  Validator::make($request->all(), [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required|min:5'
        ]);

        if($validator->fails()){
            $this->setResponseInfo(
                'invalid',
                'Your contact web form inputs are invalid',
                $validator->errors()->toArray(),
                '',
                ''
            );

            return response()->json($this->response, $this->httpStatus);
        }

        try {
            $details = [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'room_type' => $request->input('room_type'),
                'check_in_date' => $request->input('check_in_date'),
                'check_out_date' => $request->input('check_in_date'),
                'body' => $request->input('message'),
            ];

            $mailSentStatus = Mail::to('sales@mangroveviewresort.com')->send(new \App\Mail\ContactUsMail($details));

            // Log::debug($mailSentStatus);

            // set response message
            $this->setResponseInfo('success','Your contact form has been sent successfully!', '', '', '');
            
        } catch (\Throwable $th) {
              // Log error
              Log::error("Contact Form Submission Error Msg :" . $th->getMessage());

              // set response message
              $this->setResponseInfo(
                  'error',
                  'Your contact form submission cannot be proceed!',
                  [],
                  '',
                  $th->getMessage()
              );
  
        }

        return response()->json($this->response, $this->httpStatus);
    }
}
