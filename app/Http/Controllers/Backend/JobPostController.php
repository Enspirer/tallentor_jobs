<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\Models\JobPosts;
use App\Models\Auth\User;

class JobPostController extends Controller
{
    public function index()
    {
        return view('backend.job_posts.index');
    }

    public function get_details(Request $request)
    {
        if($request->ajax())
        {
            $data = JobPosts::get();
            return DataTables::of($data)
            
            ->addColumn('action', function($data){                       
                $button = '<a href="'.route('admin.job_posts.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3 mr-3"><i class="fas fa-edit"></i> Edit </a>';
                $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                return $button;
            })
            ->addColumn('image', function($data){
                $img = '<img src="'.uploaded_asset($data->image).'" style="width: 60%">';             
                return $img;
            })
            ->addColumn('status', function($data){
                if($data->status == 'Approved'){
                    $status = '<span class="badge badge-success">Approved</span>';
                }
                elseif($data->status == 'Disapproved'){
                    $status = '<span class="badge badge-danger">Disapproved</span>';
                }  
                else{
                    $status = '<span class="badge badge-warning">Pending</span>';
                } 
                return $status;
            })     
            ->addColumn('featured', function($data){
                if($data->featured == 'Enabled'){
                    $featured = '<span class="badge badge-success">Enabled</span>';
                }
                else{
                    $featured = '<span class="badge badge-danger">Disabled</span>';
                }   
                return $featured;
            })                
            ->rawColumns(['action','status','featured','image'])
            ->make(true);
        }
        return back();
    }
   
    public function edit($id)
    {
        $job_posts = JobPosts::where('id',$id)->first();              

        return view('backend.job_posts.edit',[
            'job_posts' => $job_posts
        ]);  
    }

    public function update(Request $request)
    {    
        // dd($request);
        
        if($request->description == null){
            return back()->withErrors('Please add description');
        }
        if($request->image == null){
            return back()->withErrors('Please add an image');
        }
        
        $update = new JobPosts;

        $update->title=$request->title;        
        $update->description=$request->description;
        $update->image=$request->image;
        $update->user_id=auth()->user()->id;
        $update->tags=$request->tags;
        $update->expire_date=$request->expire_date;
        $update->featured=$request->featured;
        $update->status=$request->status;

        JobPosts::whereId($request->hidden_id)->update($update->toArray());

        return redirect()->route('admin.job_posts.index')->withFlashSuccess('Updated Successfully');                      

    }
    
    public function destroy($id)
    {        
        $data = JobPosts::findOrFail($id);
        $data->delete();   
    }

}
