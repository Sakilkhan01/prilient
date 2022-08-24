<?php

namespace App\Http\Controllers;
use App\Http\Requests\BlogPost\CreateBlogPostRequest;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\BlogPost;

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
                return redirect('/');
            }
        }
    }
    public function store(Request $request)
    {
        if(!empty($request->blog_id))
        {
            $blog_post = new BlogPost;
            $blog_post->blog_id = $request->blog_id;
            $blog_post->name    = $request->name;
            $blog_post->email   = $request->email;
            $blog_post->website = $request->website;
            $blog_post->comment = $request->comment;
            if($blog_post->save())
            {
                return redirect()->back()->with('message', 'Successfully Submit.');
            }

        }
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
