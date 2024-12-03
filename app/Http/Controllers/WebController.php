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
    $details = $request->only('name', 'email', 'contact_no', 'message');

    // Validation rules and custom attribute names
    $rules = [
        'name' => 'required|max:50',
        'email' => 'required|email|max:50',
        'contact_no' => 'required|digits:10|regex:/^[7-9][0-9]{9}$/',
        'message' => 'nullable|max:255',
    ];

    $attributeNames = [
        'name' => 'Name',
        'contact_no' => 'Contact No.',
        'email' => 'Email',
        'message' => 'Message',
    ];

    // Perform validation
    $validation = Validator::make($details, $rules);
    $validation->setAttributeNames($attributeNames);

    if ($validation->fails()) {
        return response()->json([
            'success' => false,
            'errors' => $validation->errors(),
        ], 422);
    }

    // Email data
    $details['subject'] = 'New Customer Enquiry';
    $details['view'] = 'emails.contact_template';
    $clientDetails = [
        'name' => $details['name'],
        'subject' => 'Thank You for Contacting Us!',
        'view' => 'emails.client_template',
    ];

    try {
        // Send notification email to admin
        $toEmail = "finance@geobiz.in";
        Mail::to($toEmail)->send(new SendMail($details));

        // Send acknowledgment email to client
        Mail::to($details['email'])->send(new SendMail($clientDetails));

        return response()->json([
            'success' => true,
            'message' => 'Thank you. The form has been submitted successfully. Our representative will get in touch with you shortly.',
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => 'There was an error submitting the form. Please try again later.',
            'error' => $e->getMessage(),
        ], 500);
    }
}

}
