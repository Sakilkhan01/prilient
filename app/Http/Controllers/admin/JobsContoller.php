<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobsPost;

class JobsContoller extends Controller
{
    public function index(){
        $posts = JobsPost::all();
        return view('admin.pages.jobPosts.index', compact('posts'));
    }

    public function create(){
        return view('admin.pages.jobPosts.create');
    }

    public function store(Request $request){
       
        $validated = $request->validate([
        'designation' => 'required',
        'vacancies' => 'required|numeric',
        'work_status' => 'required',
        'experience' => 'required',
        'location' => 'required',
        'status' => 'required',
        ]);

        $post = new JobsPost;
        $post->designation =  $request->designation;
        $post->vacancies =  $request->vacancies;
        $post->work_status =  $request->work_status;
        $post->experience =  $request->experience;
        $post->location =  $request->location;
        $post->status =  $request->status;

        if($post->save()){
            return redirect()->route('job_post')->with('success','Successfully submit');
        }
        else{
            return redirect()->route('job_post_add')->with('error','Not insert data');
        }
    }

    public function edit($id){
        $post = JobsPost::where('id', $id)->first();
        return view('admin.pages.jobPosts.edit', compact('post'));
    }

    public function update(Request $request, $id){
      
        $validated = $request->validate([
        'designation' => 'required',
        'vacancies' => 'required|numeric',
        'work_status' => 'required',
        'experience' => 'required',
        'location' => 'required',
        'status' => 'required',
        ]);
 
        $post = JobsPost::find($id);
        $post->designation =  $request->designation;
        $post->vacancies =  $request->vacancies;
        $post->work_status =  $request->work_status;
        $post->experience =  $request->experience;
        $post->location =  $request->location;
        $post->status =  $request->status;

        if($post->save()){
            return redirect()->route('job_post')->with('success','Successfully submit');
        }
        else{
            return redirect()->route('job_post_add')->with('error','Not insert data');
        }
    }

    public function delete($id){
        $delete = JobsPost::where('id',$id)->delete();
        if($delete){
            return redirect()->route('job_post')->with('success','Successfully submit');
        }
        else{
            return redirect()->route('job_post_add')->with('error','Not insert data');
        }
    }


}
