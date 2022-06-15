<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\Models\EmailSubscription;

class EmailSubController extends Controller
{
    
    public function index()
    {
        return view('backend.email_sub.index');
    }

    public function getDetails(Request $request)
    {
        if($request->ajax())
        {
            $data = EmailSubscription::get();
            return DataTables::of($data)
            
            ->addColumn('action', function($data){                
                $button = '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                return $button;
            })
               
            ->rawColumns(['action'])
            ->make(true);
        }
        return back();
    }


    public function destroy($id)
    {        
        $data = EmailSubscription::findOrFail($id);
        $data->delete();   
    }


}
