<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\Models\JobPosts;
use App\Models\JobCategory;
use App\Models\Skills;

class SkillsController extends Controller
{    
    public function index()
    {
        return view('backend.skills.index');
    }

    public function create()
    {
        return view('backend.skills.create');
    }

    public function store(Request $request)
    {    
        // dd($request);
    
        $add = new Skills;

        $add->name=$request->name;        
        $add->description=$request->description;
        $add->status=$request->status;

        $add->save();

        return redirect()->route('admin.skills.index')->withFlashSuccess('Updated Successfully');                      

    }

    public function get_details(Request $request)
    {
      
        $data = Skills::get();            
        return DataTables::of($data)
        
        ->addColumn('action', function($data){                       
            $button = '<a href="'.route('admin.skills.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3 mr-3"><i class="fas fa-edit"></i> Edit </a>';
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
        ->rawColumns(['action','status'])
        ->make(true);
     
        return back();
    }
   
    public function edit($id)
    {
        $skills = Skills::where('id',$id)->first();              

        return view('backend.skills.edit',[
            'skills' => $skills
        ]);  
    }

    public function update(Request $request)
    {    
        // dd($request);

        $update = new Skills;
        
        $update->name=$request->name;        
        $update->description=$request->description;
        $update->status=$request->status;

        Skills::whereId($request->hidden_id)->update($update->toArray());

        return redirect()->route('admin.skills.index')->withFlashSuccess('Updated Successfully');                      

    }
    
    public function destroy($id)
    {        
        $data = Skills::findOrFail($id);
        $data->delete();   
    }

}
