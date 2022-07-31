<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\VillaUtilityTrait;
use Illuminate\Http\Request;

class ContactUsController extends GenericController
{
    use VillaUtilityTrait;

    public function contactUsPage()
    {
        $this->setPageTitle('contactUs', '');
        $villaTypes = $this->getAllVillas();

        return view('contact_us.contact_us_page', compact('villaTypes'));
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
                'check_out_date' => $request->input('check_out_date'),
                'body' => $request->input('message'),
            ];

            $mailSentStatus = Mail::to('sales@mangroveviewresort.com')
                                    ->cc([$details['email']])
                                    ->send(new \App\Mail\ContactUsMail($details));



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
