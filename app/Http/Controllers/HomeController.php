<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Client;
use App\Models\JobsPost;

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

}
