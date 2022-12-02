<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use App\Mail\AdminMail;
use App\Mail\RequestAdmin;
use App\Mail\RequestQuate;
use App\Models\Contact;
use Validator;
use Mail;
use PDF;

class ContactController extends Controller
{
    public function index(){
        return view('front.pages.contact-us');
    }

    public function store(Request $request)
    {

        $messages = [
            'name.required' => 'Please fill the name field.',
            'phone.required' => 'Please fill the phone number field.',
            'phone.numeric' => 'The phone number must be a number.',
            'business_email.required' => 'Please fill the business email field.',
            'subject.required' => 'Please fill the subject field.',
            'description.required' => 'Please fill the description field.',
        ];
  
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required|numeric',
            'business_email' => 'required|email',
            'description' => 'required',
            'subject' => 'required',
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
        $contact->request_type = $request->subject;
        $contact->description = $request->description;
        $fileName = '';
        // if($file = $request->file('attach')){
        //     $fileName = rand().".".$file->getClientOriginalName();
        //     $path = $file->storeAs('public/pdf', $fileName);
        //     $contact->attach  = $fileName;
        // }

        $contact->save();

        $user = array(
            'name'         => $request->name,
            'email'        => $request->business_email,
            'subject'      => $request->subject,
            'phone_number' => $request->phone,
            'message'      => $request->description,
        );

        Mail::to($request->email)->send(new ContactMail($user));

        $from_email = config('mail.from_email');

        Mail::to($from_email)->send(new AdminMail($user));


        // \Mail::send('mail.contact_email',
        //      array(
        //          'name' => $request->get('name'),
        //          'business_email' => $request->get('business_email'),
        //          'phone' => $request->get('phone'),
        //          'request_type' => $request->get('request_type'),
        //          'description' => $request->get('description'),
        //      ), function($message) use ($request)
        //        {
        //           $message->from($request->business_email);
        //           $message->to('info@prilient.com');
        //           $message->subject($request->request_type);
        //           if(!empty($fileName)){
        //             $message->attach($request->attach);
        //           }
        //        });

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



    public function sendRequestAQuete(Request $request){
        $request->validate([
            'name'          => 'required',
            'email'         => 'required|email',
            'message'       => 'required',
        ]);

        $user = array(
            'name'         => $request->name,
            'email'        => $request->email,
            'subject'      => 'Request a Quate',
            'message'      => $request->message,
        );

        Mail::to($request->email)->send(new RequestQuate($user));

        $from_email = config('mail.from_email');

        Mail::to($from_email)->send(new RequestAdmin($user));

        return response()->json(['success'=>'Thank you!, Your request sent to admin.']);
    }



































}
