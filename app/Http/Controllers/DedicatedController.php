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
        
        $user = array(
            'name'         => $request->name,
            'email'        => $request->business_email,
            'technical_skills' => $request->technical_skills,
            'phone_number' => $request->phone,
            'message'      => $request->description,
        );
        
        $from_email = config('mail.from_email');
        Mail::to($from_email)->send(new Dedicated($user));

        $data = ['success'=>'Thank you! your request sent to admin.'];
        return response()->json($data);

    }

    



}
