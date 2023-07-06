<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogPost\CreateBlogPostRequest;
use App\Models\Blog;
use App\Models\Services;
use Illuminate\Http\Request;
use App\Models\BlogPost;
use Validator;
use App;
class BlogController extends Controller
{
    
    public function index()
    {

        $page_number = 1;
        $limit = 2;

        $initial_page = ($page_number-1) * $limit;

        $query = blog::where('status', 1)->limit($limit)->offset($initial_page)->orderBy('id', 'DESC');

        $total_rows = $query->count();
        $blog =  $query->get();

        $total_pages = ceil ($total_rows / $limit);

        $services = Services::where('status', 1)->orderBy('name', 'ASC')->get();
        $popular_post = blog::where('status', 1)->limit(8)->orderBy('id', 'DESC')->get();
        $service = 0;
        return view('front.pages.blog',compact('blog','popular_post','total_pages','page_number','services','service','total_rows'));
    }
    public function view($slug)
    {

        if(!empty($slug))
        {
            $blog = Blog::where('slug', $slug)->first();
            if($blog)
            {
                $all_blog = Blog::all();
                $popular_post = blog::where('status', 1)->limit(8)->orderBy('id', 'DESC')->get();
                return view('front.pages.blog_view',compact('blog','all_blog','popular_post'));
            }
            else
            {
                App::abort(404);
            }
        }
    }
    public function store(Request $request)
    {   
        if (!$request->isMethod('post')) {
            App::abort(401);
        }
            $obj = new BlogPost;
            $obj->blog_id = $request->blog_id;
            $obj->name    = $request->name;
            $obj->email   = $request->email;
            $obj->website = $request->website;
            $obj->comment = $request->comment;
            $obj->save();
            return response()->json(['success'=>'Added new records.']);
    }


    public function search(Request $request) {
        
        $blog = '';
        if($request->text){
            $blog = Blog::where('status', 1)->where('title', 'like', '%' . $request->text . '%')->get(); 
        }
        else{
            $blog = Blog::where('status', 1)->get();
        }
        return response()->json($blog);
        
    }

    public function pagination($page = null,$service = null){
        if (!isset ($page) ) {  
            $page_number = 1;  
        } else {  
            $page_number = $page;  
        }  

        $limit = 2;
        $initial_page = ($page_number-1) * $limit;

        $query = blog::where('status', 1);
        if (!empty($service)) {
            $query->where('service', $service);
        }
        $total_rows = $query->count();


        $total_pages = ceil ($total_rows / $limit);
        $query = blog::where('status', 1)->limit($limit)->offset($initial_page)->orderBy('id', 'DESC');
        if (!empty($service)) {
            $query->where('service', $service);
        }

        $blog =  $query->get();

        $services = Services::where('status', 1)->orderBy('name', 'ASC')->get();
        $popular_post = blog::where('status', 1)->limit(8)->orderBy('id', 'DESC')->get();
        return view('front.pages.blog',compact('blog','popular_post','services','total_pages','page_number','service'));
    }
}
