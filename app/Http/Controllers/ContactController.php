<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Mail;
use PDF;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        return view('front.pages.contact-us');
    }

    public function store(Request $request)
    {

        $messages = [
            //'g-recaptcha-response.required' => 'You must check the reCAPTCHA.',
            //'g-recaptcha-response.captcha' => 'Captcha error! try again later or contact site admin.',
            'name.required' => 'Please fill the name field.',
            'phone.required' => 'Please fill the phone number field.',
            'phone.numeric' => 'The phone number must be a number.',
            'business_email.required' => 'Please fill the business email field.',
            'description.required' => 'Please fill the description field.',
        ];
  
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required|numeric',
            'business_email' => 'required',
            'description' => 'required',
            // 'g-recaptcha-response' => 'required|captcha',
        ], $messages);
  
        if ($validator->fails()) {
            return redirect('contact-us')
                        ->withErrors($validator)
                        ->withInput();
        }

        $contact = new Contact;

        $contact->name = $request->name;
        $contact->last_name = $request->last_name;
        $contact->phone = $request->phone;
        $contact->business_email = $request->business_email;
        $contact->company = $request->company;
        $contact->request_type = $request->request_type;
        $contact->description = $request->description;
        $fileName = '';
        if($file = $request->file('attach')){
            $fileName = rand().".".$file->getClientOriginalName();
            $path = $file->storeAs('public/pdf', $fileName);
            $contact->attach  = $fileName;
        }

        $contact->save();


        \Mail::send('mail.contact_email',
             array(
                 'name' => $request->get('name'),
                 'business_email' => $request->get('business_email'),
                 'phone' => $request->get('phone'),
                 'request_type' => $request->get('request_type'),
                 'description' => $request->get('description'),
             ), function($message) use ($request)
               {
                  $message->from($request->business_email);
                  $message->to('sakildeshwali1@gmail.com');
                  $message->subject($request->request_type);
                  if(!empty($fileName)){
                    $message->attach($request->attach);
                  }
               });

        return back()->with('success', 'Thank you for contact us!');


  
        // process the form
    }

    public function list(){
        $contact = Contact::all();
        return view('admin.pages.contact.index', compact('contact'));
    } 

    public function show($id){
        $contact = Contact::find($id);
        return view('admin.pages.contact.show', compact('contact'));
    } 

    public function showPDF($id){
      $contact = Contact::find($id);
      Storage::put('public/pdf/'.$contact->attach, $pdf->output());
      $pdf = PDF::loadView('whateveryourviewname', $contact->attach);

      return $pdf->stream('whateveryourviewname.pdf');
    }  
}
