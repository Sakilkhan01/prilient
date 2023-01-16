<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Client;
use App\Models\JobsPost;
use DB;
use App\Mail\Subscribe;
use Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $total_blog = Blog::all();
        return view('admin.pages.dashboard',compact('total_blog'));
    }

    public function home(){
        $client = Client::where('status', 1)->get();
        return view('welcome', compact('client'));
    }

    public function Career(){
        $clients = Client::where('status', 1)->select('name','logo')->get();
        $posts = JobsPost::where('status', 1)->orderBy('id', 'DESC')->get();

        return view('front.pages.career', compact('clients','posts'));
    }

    public function Subscribe(Request $request)
    {
        $exit = DB::table('subscriber')->where('email', $request->email)->count();
        if($exit > 0){
            return response()->json(['status' => false, 'message'=> "We're sorry you are already subscribed."]);
        }
        
        $date = date('Y-m-d H:i:s');
        
        $date_format = date('j F Y', strtotime($date)); //15 January 2023
        $user = array(
            'email'        => $request->email,
            'date'         => $date_format
        );
        
        $insert = DB::table('subscriber')->insert(['email'=> $request->email, 'created_at'=> $date, 'updated_at'=> $date]);
        
        if($insert){
            $from_email = config('mail.from_email');
            Mail::to($from_email)->send(new Subscribe($user));
            return response()->json(['status' => true, 'message'=> 'Thank you for Subscribe.']);
        }
        else{
            return response()->json(['status' => false, 'message'=> "Something went wrong please try again"]);
        }
    }

}
