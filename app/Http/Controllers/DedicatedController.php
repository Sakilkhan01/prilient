<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Dedicated;
use Validator;
use Mail;

class DedicatedController extends Controller
{
    public function index(){
        return view('front.pages.dedicated');
    }

    public function store(Request $request)
    {
    
        $messages = [
            'name.required' => 'Please fill the name field.',
            'phone.required' => 'Please fill the phone number field.',
            'phone.numeric' => 'The phone number must be a number.',
            'business_email.required' => 'Please fill the business email field.',
            'technical_skills.required' => 'Please fill the technical skills field.',
            'description.required' => 'Please fill the description field.',
        ];
  
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required|numeric',
            'business_email' => 'required|email',
            'description' => 'required',
            'technical_skills' => 'required',
            // 'g-recaptcha-response' => 'required|captcha',
        ], $messages);
  
        if ($validator->fails()) {
            return redirect('dedicated-developer')->withErrors($validator)->withInput();
        }
        
        $user = array(
            'name'         => $request->name,
            'email'        => $request->business_email,
            'technical_skills' => $request->technical_skills,
            'phone_number' => $request->phone,
            'message'      => $request->description,
        );
        
        $from_email = config('mail.from_email');
        Mail::to($from_email)->send(new Dedicated($user));
        return back()->with('success', 'Thank you your request has been submitted successfully');

    }

    



}
