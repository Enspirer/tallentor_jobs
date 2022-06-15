<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\Models\Events;

class EventsController extends Controller
{
    
    public function index()
    {
        return view('backend.events.index');
    }

    public function create()
    {
        return view('backend.events.create');
    }

    public function store(Request $request)
    {    
        // dd($request);

        if($request->image == null){
            return back()->withErrors('Please add an image');
        }
    
        $add = new Events;

        $add->name=$request->name;        
        $add->description=$request->description;
        $add->image=$request->image;
        $add->date=$request->date;
        $add->status=$request->status;

        $add->save();

        return redirect()->route('admin.events.index')->withFlashSuccess('Added Successfully');                      

    }

    public function get_details(Request $request)
    {      
        $data = Events::get();            
        return DataTables::of($data)
        
        ->addColumn('action', function($data){                       
            $button = '<a href="'.route('admin.events.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3 mr-3"><i class="fas fa-edit"></i> Edit </a>';
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
        ->addColumn('image', function($data){
            $img = '<img src="'.uploaded_asset($data->image).'" style="width: 60%">';         
            return $img;
        })
        ->rawColumns(['action','status','image'])
        ->make(true);
     
        return back();
    }
   
    public function edit($id)
    {
        $events = Events::where('id',$id)->first();              

        return view('backend.events.edit',[
            'events' => $events
        ]);  
    }

    public function update(Request $request)
    {    
        // dd($request);

        if($request->image == null){
            return back()->withErrors('Please add an image');
        }
    
        $update = new Events;

        $update->name=$request->name;        
        $update->description=$request->description;
        $update->image=$request->image;
        $update->date=$request->date;
        $update->status=$request->status;

        Events::whereId($request->hidden_id)->update($update->toArray());

        return redirect()->route('admin.events.index')->withFlashSuccess('Updated Successfully');                      

    }
    
    public function destroy($id)
    {        
        $data = Events::findOrFail($id);
        $data->delete();   
    }

}
