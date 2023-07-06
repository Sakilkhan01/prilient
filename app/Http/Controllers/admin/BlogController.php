<?php

namespace App\Http\Controllers\admin;
// use App\Http\Requests\Blog\{CreateBlogRequest,UpdateBlogRequest};
use App\Models\Blog;
use App\Models\Services;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use File;
use App\Helpers\helper as Helper;

class BlogController extends Controller
{
    
    public function index()
    {
        // $blog = $this->blogService->listBlog();
        $blog = blog::all();
        return view('admin.pages.blog.index',compact('blog'));
    }
    public function create()
    {
        $services = Services::where("status", 1)->select('id','name')->orderBy('name', 'ASC')->get()->toArray();
        return view('admin.pages.blog.form',compact('services'));
    } 
    public function store(Request $request)
    {
        $rules = [
                'description' => 'required',
                'short_description' => 'required',
                'status'      => 'required',
                'image'       => 'image|mimes:jpeg,png,jpg|max:2048',
                'meta_description' => 'required',
                'meta_keywords'    => 'required',
                'meta_title'       => 'required',
                'date'        => 'required',
                'title'       => 'required|unique:blog',
                'service' => 'required',
            ];
            $validator = Validator::make($request->all(),$rules);
            if($validator->fails())
            {
                return redirect()->back()->withInput()->withErrors($validator->errors());
            }

        $slug = Helper::slug($request);
        $date = Helper::date_format($request);

        $files = $request->file('image');
        $destinationPath = public_path('/upload/blog');       
        $profileImage = uniqid() . "." . $files->getClientOriginalExtension();
        $files->move($destinationPath, $profileImage);

    	$blog = New Blog;
    	$blog->title            = $request->title;
        $blog->service            = $request->service;
        $blog->date             = $date;
        $blog->meta_title       = $request->meta_title;
        $blog->meta_keywords    = $request->meta_keywords;
        $blog->meta_description = $request->meta_description;
        $blog->image            = $profileImage;
        $blog->status           = $request->status;
        // $blog->service_link     = $request->service_link;
        $blog->description      = $request->description;
        $blog->short_description= $request->short_description;
        $blog->slug             = $slug;
    	
    	
        if($blog->save())
        {
            return redirect('admin/blog')->with('success','Successfully Submit');
        }
        else
        {
            return redirect('admin/page-not-found');
        }
    }
    public function edit($slug)
    {
        if(!empty($slug))
        {
            if($blog = Blog::where('slug',$slug)->first())
            {
                $services = Services::where("status", 1)->select('id','name')->orderBy('name', 'ASC')->get()->toArray();
                return view('admin.pages.blog.edit',compact('blog','services'));
            }
            else
            {
                return redirect('admin/page-not-found');
            }
        }
        else
        {
            return redirect('admin/page-not-found');
        }
    } 
    public function update(Request $request)
    {
        if(!empty($request->blog_id))
        {
            $rules = [
                'description' => 'required',
                'service' => 'required',
                'short_description' => 'required',
                'status'      => 'required',
                'image'       => 'image|mimes:jpeg,png,jpg|max:2048',
                'meta_description' => 'required',
                'meta_keywords'    => 'required',
                'meta_title'       => 'required',
                'date'        => 'required',
                'title'       => 'required|unique:blog,title,'.$request->blog_id,
            ];
            $validator = Validator::make($request->all(),$rules);
            if($validator->fails())
            {
                return redirect()->back()->withInput()->withErrors($validator->errors());
            }
            else
            {
                $slug = Helper::slug($request);
                $date = Helper::date_format($request);

                $blog = Blog::find($request->blog_id);
                if ($files = $request->file('image')) 
                {
                    $image_path = public_path("upload/blog/{$blog->image}");
                    if (File::exists($image_path)) 
                    {
                        unlink($image_path);
                    }
                    $destinationPath = public_path('/upload/blog');       
                    $profileImage = uniqid() . "." . $files->getClientOriginalExtension();
                    $files->move($destinationPath, $profileImage);
                }

                $blog->title       = $request->title;
                $blog->service       = $request->service;
                $blog->meta_title       = $request->meta_title;
                $blog->meta_keywords    = $request->meta_keywords;
                $blog->meta_description = $request->meta_description;
                $blog->date        = $date;
                $blog->image       = (!empty($profileImage)) ? $profileImage : $blog->image;
                $blog->status      = $request->status;
                // $blog->service_link      = $request->service_link;
                $blog->description = $request->description;
                $blog->short_description= $request->short_description;
                $blog->slug        = $slug;
                if($blog->save()){
                    return redirect('admin/blog')->with('success','Successfully Updated.');
                }
                
            }
        }
        else
        {
            return redirect('admin/page-not-found');
        }
    }
    public function delete($id)
    {
        if(!empty($id))
        {
            if(Blog::findOrFail($id)->delete())
            {
                return redirect('admin/blog')->with('success','Successfully Deleted');
            }
            else
            {
                return redirect('admin/page-not-found');
            }
        }
        else
        {
            return redirect('admin/page-not-found');
        }
    }
}
