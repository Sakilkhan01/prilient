<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\AdminMail;
use App\Mail\RequestAdmin;
use App\Mail\RequestQuate;
use App\Mail\ResponseMail;
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
        
        $contact = new Contact;

        $contact->name = $request->name;
        $contact->last_name = $request->last_name;
        $contact->phone = $request->phone;
        $contact->business_email = $request->business_email;
        $contact->company = $request->company;
        $contact->request_type = $request->subject;
        $contact->description = $request->description;

        $contact->save();

        $user = array(
            'name'         => $request->name,
            'email'        => $request->business_email,
            'subject'      => $request->subject,
            'phone_number' => $request->phone,
            'message'      => $request->description,
            'mail_subject'      => "Contact Us",
        );

        Mail::to($request->business_email)->send(new ResponseMail($user));

        $from_email = config('mail.from_email');

        Mail::to($from_email)->send(new AdminMail($user));
        $data = ['success'=>'Thank you! your request sent to admin.'];
        return response()->json($data);

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
            'message'      => $request->message,
            'subject'      => "Request a Quote",
            'mail_subject'      => "Request a Quote",
        );

        Mail::to($request->email)->send(new ResponseMail($user));

        $from_email = config('mail.from_email');
        Mail::to($from_email)->send(new RequestAdmin($user));
        $data = ['success'=>'Thank you! your request sent to admin.'];
        return response()->json($data);
    }



































}
