<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\EducationalDetails;
use App\Models\PersonalInformations;
use App\Models\WorkExperience;
use App\Models\ProfileProjects;

class DashboardProfileController extends Controller
{
    public function index($id) {

        $profile = Profile::where('id',$id)->first();

        return view('frontend.user.profile',[
            'profile' => $profile
        ]);
    }

    public function job_preference_update(Request $request)
    {    
        // dd($request);
                
        $update = new Profile;

        $update->user_id=auth()->user()->id;
        $update->industry=$request->industry;        
        $update->function=$request->function;        
        $update->job_type=$request->job_type;
        $update->employment_type=$request->employment_type;
        $update->six_days=$request->six_days;
        $update->startup=$request->startup;
        
        Profile::whereId($request->hidden_profile_id)->update($update->toArray());

        return back();                      

    }

    public function work_experience_add(Request $request)
    {    
        // dd($request);
                
        $add = new WorkExperience;

        $add->user_id=auth()->user()->id;
        $add->profile_id=$request->hidden_id;        
        $add->name=$request->designation;        
        $add->company=$request->company;
        $add->status=$request->present;
        $add->duration=$request->start_date;
        $add->description=$request->end_date;
        
        $add->save();

        return back();                      

    }


}
