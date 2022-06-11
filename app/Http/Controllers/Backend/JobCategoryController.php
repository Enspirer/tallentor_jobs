<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\Models\JobPosts;
use App\Models\JobCategory;
use App\Models\Auth\User;

class JobCategoryController extends Controller
{
   
    public function index()
    {
        return view('backend.job_category.index');
    }

    public function create()
    {
        return view('backend.job_category.create');
    }

    public function store(Request $request)
    {    
        // dd($request);
    
        $add = new JobCategory;

        $add->name=$request->name;        
        $add->description=$request->description;
        $add->image=$request->image;
        $add->feature=$request->feature;
        $add->user_id=auth()->user()->id;
        $add->skill=$request->skill;
        $add->order=$request->order;
        $add->status=$request->status;

        $add->save();

        return redirect()->route('admin.job_category.index')->withFlashSuccess('Updated Successfully');                      

    }

    public function get_details(Request $request)
    {
        if($request->ajax())
        {
            $data = JobCategory::get();
            return DataTables::of($data)
            
            ->addColumn('action', function($data){                       
                $button = '<a href="'.route('admin.job_category.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3 mr-3"><i class="fas fa-edit"></i> Edit </a>';
                $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                return $button;
            })
            ->addColumn('status', function($data){
                if($data->status == 'Enabled'){
                    $status = '<span class="badge badge-success">Enabled</span>';
                }
                else{
                    $status = '<span class="badge badge-danger">Disabled</span>';
                } 
                return $status;
            })      
            ->addColumn('feature', function($data){
                if($data->feature == 'Enabled'){
                    $feature = '<span class="badge badge-success">Enabled</span>';
                }
                else{
                    $feature = '<span class="badge badge-danger">Disabled</span>';
                } 
                return $feature;
            })         
            ->rawColumns(['action','status','feature'])
            ->make(true);
        }
        return back();
    }
   
    public function edit($id)
    {
        $job_category = JobCategory::where('id',$id)->first();              

        return view('backend.job_category.edit',[
            'job_category' => $job_category
        ]);  
    }

    public function update(Request $request)
    {    
        // dd($request);

        $update = new JobCategory;
        
        $update->name=$request->name;        
        $update->description=$request->description;
        $update->image=$request->image;
        $update->feature=$request->feature;
        $update->user_id=auth()->user()->id;
        $update->skill=$request->skill;
        $update->order=$request->order;
        $update->status=$request->status;

        JobCategory::whereId($request->hidden_id)->update($update->toArray());

        return redirect()->route('admin.job_category.index')->withFlashSuccess('Updated Successfully');                      

    }
    
    public function destroy($id)
    {        
        $data = JobCategory::findOrFail($id);
        $data->delete();   
    }


}
