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
        $personal_informations = PersonalInformations::where('profile_id',$profile->id)->where('user_id',auth()->user()->id)->orderby('id','desc')->get();
        $work_experiences = WorkExperience::where('profile_id',$profile->id)->where('user_id',auth()->user()->id)->orderby('id','desc')->get();
        $educational_details = EducationalDetails::where('profile_id',$profile->id)->where('user_id',auth()->user()->id)->orderby('id','desc')->get();
        $profile_projects = ProfileProjects::where('profile_id',$profile->id)->where('user_id',auth()->user()->id)->orderby('id','desc')->get();

        return view('frontend.user.profile',[
            'profile' => $profile,
            'personal_informations' => $personal_informations,
            'work_experiences' => $work_experiences,
            'educational_details' => $educational_details,
            'profile_projects' => $profile_projects
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
        $add = new WorkExperience;

        $add->user_id=auth()->user()->id;
        $add->profile_id=$request->hidden_profile_id;        
        $add->name=$request->designation;        
        $add->company=$request->company;
        $add->start_date=$request->start_date;
        $add->end_date=$request->end_date;
        $add->description=$request->description;
        $add->present=$request->present;
        
        $add->save();

        return back();  
    }

    public function work_experience_update(Request $request)
    {        
        $update = new WorkExperience;

        $update->user_id=auth()->user()->id;       
        $update->name=$request->designation;        
        $update->company=$request->company;
        $update->start_date=$request->start_date;
        $update->end_date=$request->end_date;
        $update->description=$request->description;
        $update->present=$request->present;
        
        WorkExperience::whereId($request->hidden_id)->update($update->toArray());

        return back();                      

    }

    public function work_experience_destroy($id)
    {
        WorkExperience::where('id', $id)->delete(); 
        return back();
    }

    
    public function educational_details_add(Request $request)
    {    
        // dd($request);
                
        $add = new EducationalDetails;

        $add->user_id=auth()->user()->id;
        $add->profile_id=$request->hidden_profile_id;        
        $add->name=$request->title;        
        $add->university=$request->institute;
        $add->start_date=$request->start_date;
        $add->end_date=$request->end_date;
        $add->description=$request->description;
        $add->present=$request->present;
        
        $add->save();

        return back();
    }

    public function educational_details_update(Request $request)
    {    
        // dd($request);
                
        $update = new EducationalDetails;

        $update->user_id=auth()->user()->id; 
        $update->name=$request->title;        
        $update->university=$request->institute;
        $update->start_date=$request->start_date;
        $update->end_date=$request->end_date;
        $update->description=$request->description;
        $update->present=$request->present;
        
        EducationalDetails::whereId($request->hidden_id)->update($update->toArray());

        return back();                      

    }

    public function educational_details_destroy($id)
    {
        EducationalDetails::where('id', $id)->delete(); 
        return back();
    }



    public function profile_projects_add(Request $request)
    {    
        // dd($request);
                
        $add = new ProfileProjects;

        $add->user_id=auth()->user()->id;
        $add->profile_id=$request->hidden_profile_id;        
        $add->name=$request->name;        
        $add->company=$request->company;
        $add->start_date=$request->start_date;
        $add->end_date=$request->end_date;
        $add->description=$request->description;
        $add->present=$request->present;
        
        $add->save();

        return back();
    }

    public function profile_projects_update(Request $request)
    {    
        // dd($request);
                
        $update = new ProfileProjects;

        $update->user_id=auth()->user()->id;       
        $update->name=$request->name;        
        $update->company=$request->company;
        $update->start_date=$request->start_date;
        $update->end_date=$request->end_date;
        $update->description=$request->description;
        $update->present=$request->present;
                
        ProfileProjects::whereId($request->hidden_id)->update($update->toArray());

        return back();                      

    }

    public function profile_projects_destroy($id)
    {
        ProfileProjects::where('id', $id)->delete(); 
        return back();
    }


    public function skill_add(Request $request)
    {    
        // dd($request);
                
        $add = new PersonalInformations;

        $add->user_id=auth()->user()->id;
        $add->profile_id=$request->hidden_profile_id;        
        $add->skill=$request->skill;        
        $add->level=$request->level;        
        $add->save();

        return back();
    }

    public function skill_update(Request $request)
    {    
        // dd($request);
                
        $update = new PersonalInformations;

        $update->user_id=auth()->user()->id;
        $update->profile_id=$request->hidden_profile_id;        
        $update->skill=$request->skill;        
        $update->level=$request->level;
                
        PersonalInformations::whereId($request->hidden_id)->update($update->toArray());

        return back();                      

    }

    public function skill_destroy($id)
    {
        PersonalInformations::where('id', $id)->delete(); 
        return back();
    }




}
