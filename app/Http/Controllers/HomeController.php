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
        return view('contact_us.contact_us_page');
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
