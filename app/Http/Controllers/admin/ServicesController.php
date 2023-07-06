<?php

namespace App\Http\Controllers\admin;
// use App\Http\Requests\Blog\{CreateBlogRequest,UpdateBlogRequest};
use App\Models\Services;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use File;
use App\Helpers\helper as Helper;

class ServicesController extends Controller
{
    
    public function index()
    {
        // $blog = $this->blogService->listBlog();
        $services = Services::all();
        return view('admin.pages.services.index',compact('services'));
    }
    public function create()
    {
        return view('admin.pages.services.form');
    } 
    public function store(Request $request)
    {
        $rules = [
                'name' => 'required|unique:services',
                'status'      => 'required',
            ];
            $validator = Validator::make($request->all(),$rules);
            if($validator->fails())
            {
                return redirect()->back()->withInput()->withErrors($validator->errors());
            }


    	$service = New Services;
    	$service->name            = $request->name;
        $service->status           = $request->status;
        
        if($service->save())
        {
            return redirect('admin/services/list')->with('success','Successfully Submit');
        }
        else
        {
            return redirect('admin/page-not-found');
        }
    }
    public function edit($id)
    {
        if(!empty($id))
        {
            if($services = Services::where('id',$id)->first())
            {
                return view('admin.pages.services.edit',compact('services'));
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
    public function update(Request $request, $id)
    {
        
        if(!empty($id))
        {
            $rules = [
                'status'      => 'required',
                'name'       => 'required|unique:services,name,'.$id,
            ];
            $validator = Validator::make($request->all(),$rules);
            if($validator->fails())
            {
                return redirect()->back()->withInput()->withErrors($validator->errors());
            }
            else
            {
                $services = Services::find($id);
            
                $services->name       = $request->name;
                $services->status      = $request->status;
                if($services->save()){
                    return redirect('admin/services/list')->with('success','Successfully Updated.');
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
            if(Services::findOrFail($id)->delete())
            {
                return redirect('admin/services/list')->with('success','Successfully Deleted');
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
