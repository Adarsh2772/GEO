<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Arr;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class WebController extends Controller
{
    public function savecontactform(Request $request)
    {
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'contact_no' => $request->contact_no,
            'message' => $request->message,
            'subject' => 'New Customer Enquiry',
            'view' => 'emails.contact_template',
        ];

        $rules = [
            'name' => 'required | max:50|',
            'email' => 'required|email|max:50',
            'contact_no' => 'required|digits:10|regex:/^[7-9][0-9]{9}$/|',
            'message' => 'nullable|max:255',
        ];

        $attributeNames = array(
            'name' => 'Name',
            'contact_no' => 'Contact No.',
            'email' => 'Email',
            'message' => 'Message',
         );

        $validation = Validator::make($details, $rules);
        $validation->setAttributeNames($attributeNames);
        if ($validation->fails()) {
            // Get the error message
            $error = $validation->errors()->first();
            
            // Redirect back to the page with the hash fragment to indicate the current tab
            return redirect('/#contact')->withErrors($validation)->withInput();
        }

        $to_email = "giobizsolutions@gmail.com";
        
        Mail::to($to_email)->send(new SendMail($details));
        session()->flash('success', 'Thank you. The form has been submitted successfully. Our representative will get in touch with you shortly.');
        return redirect('/#contact');
    }
}
