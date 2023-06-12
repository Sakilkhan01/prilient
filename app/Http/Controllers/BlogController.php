<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogPost\CreateBlogPostRequest;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\BlogPost;
use Validator;
use App;
class BlogController extends Controller
{
    
    public function index()
    {
        $blog = blog::where('status', 1)->get();
        
        return view('front.pages.blog',compact('blog'));
    }
    public function view($slug)
    {
        if(!empty($slug))
        {
            $blog = Blog::where('slug', $slug)->first();
            if($blog)
            {
                $all_blog = Blog::all();
                return view('front.pages.blog_view',compact('blog','all_blog'));
            }
            else
            {
                App::abort(404);
            }
        }
    }
    public function store(Request $request)
    {   
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
}
