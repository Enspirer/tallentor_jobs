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
        $user_profiles = Profile::where('user_id',auth()->user()->id)->get();

        $personal_informations = PersonalInformations::where('profile_id',$profile->id)->where('user_id',auth()->user()->id)->orderby('id','desc')->get();
        $personal_details = Profile::where('id',$id)->first();
        $work_experiences = WorkExperience::where('profile_id',$profile->id)->where('user_id',auth()->user()->id)->orderby('id','desc')->get();
        $educational_details = EducationalDetails::where('profile_id',$profile->id)->where('user_id',auth()->user()->id)->orderby('id','desc')->get();
        $profile_projects = ProfileProjects::where('profile_id',$profile->id)->where('user_id',auth()->user()->id)->orderby('id','desc')->get();

        // dd($personal_details->languages);
        return view('frontend.user.profile',[
            'profile' => $profile,
            'user_profiles' => $user_profiles,
            'personal_details' => $personal_details,
            'personal_informations' => $personal_informations,
            'work_experiences' => $work_experiences,
            'educational_details' => $educational_details,
            'profile_projects' => $profile_projects
        ]);
    }

    

    public function my_profile_update(Request $request)
    {    
        // dd($request);

        if($request->file('profile_image'))
        {
            $preview_fileName = time().'_'.rand(1000,10000).'.'.$request->profile_image->getClientOriginalExtension();
            $fullURLsPreviewFile = $request->profile_image->move(public_path('files/profile_image'), $preview_fileName);
            $image_url = $preview_fileName;
        }else{            
            $detail = Profile::where('id',$request->hidden_profile_id)->first();
            $image_url = $detail->profile_image;            
        }
                
        $update = new Profile;

        $update->user_id=auth()->user()->id; 
        $update->profile_name=$request->profile_name;        
        $update->profile_image=$image_url;
        $update->name=$request->name;
        $update->country=$request->country;
        $update->experience=$request->experience;
        $update->role=$request->role;
        $update->phone=$request->phone;
        $update->email=$request->email;
        
        Profile::whereId($request->hidden_profile_id)->update($update->toArray());

        return back();                      

    }


    public function new_profile_add(Request $request)
    {    
        // dd($request);

        if($request->copy_data == 'on'){

            $profile = Profile::where('id',$request->select_profile)->first();

            $add = new Profile;

            $add->user_id=auth()->user()->id;       
            $add->profile_name=$request->profile_name;            
            $add->profile_image=$profile->profile_image;          
            $add->name=$profile->name;          
            $add->country=$profile->country;          
            $add->experience=$profile->experience;          
            $add->role=$profile->role;          
            $add->phone=$profile->phone;          
            $add->email=$profile->email;          
            $add->skills=$profile->skills;          
            $add->industry=$profile->industry;          
            $add->function=$profile->function;          
            $add->job_type=$profile->job_type;          
            $add->employment_type=$profile->employment_type;          
            $add->six_days=$profile->six_days;          
            $add->startup=$profile->startup;          
            $add->home_town=$profile->home_town;          
            $add->gender=$profile->gender;          
            $add->marital_status=$profile->marital_status;          
            $add->passport_number=$profile->passport_number;          
            $add->work_permit_usa=$profile->work_permit_usa;          
            $add->address=$profile->address;          
            $add->dob=$profile->dob;          
            $add->nationality=$profile->nationality;          
            $add->languages=$profile->languages;        
            $add->save();


            $personal_inf = PersonalInformations::where('profile_id',$profile->id)->get();

            if(count($personal_inf) != 0){
                foreach($personal_inf as $personal){
                    $add_pi = new PersonalInformations;
                    $add_pi->user_id=auth()->user()->id;
                    $add_pi->profile_id=$add->id;        
                    $add_pi->skill=$personal->skill;        
                    $add_pi->level=$personal->level;        
                    $add_pi->save();
                }              
            }

            $work_experiences = WorkExperience::where('profile_id',$profile->id)->get();
            
            if(count($work_experiences) != 0){
                foreach($work_experiences as $work_experience){

                    $add_work = new WorkExperience;
                    $add_work->user_id=auth()->user()->id;
                    $add_work->profile_id=$add->id;        
                    $add_work->name=$work_experience->name;        
                    $add_work->company=$work_experience->company;
                    $add_work->start_date=$work_experience->start_date;
                    $add_work->end_date=$work_experience->end_date;
                    $add_work->description=$work_experience->description;
                    $add_work->present=$work_experience->present;            
                    $add_work->save();
                }              
            }

            $educations = EducationalDetails::where('profile_id',$profile->id)->get();
           
            if(count($educations) != 0){
                foreach($educations as $education){                    
                    $ed = new EducationalDetails;
                    $ed->user_id=auth()->user()->id;
                    $ed->profile_id=$add->id;        
                    $ed->name=$education->name;        
                    $ed->university=$education->university;
                    $ed->start_date=$education->start_date;
                    $ed->end_date=$education->end_date;
                    $ed->description=$education->description;
                    $ed->present=$education->present;            
                    $ed->save();
                }
            }

            $profile_projects = ProfileProjects::where('profile_id',$profile->id)->get();

            if(count($profile_projects) != 0){
                foreach($profile_projects as $profile_project){    
                    $add_project = new ProfileProjects;
                    $add_project->user_id=auth()->user()->id;
                    $add_project->profile_id=$add->id;        
                    $add_project->name=$profile_project->name;        
                    $add_project->company=$profile_project->company;
                    $add_project->start_date=$profile_project->start_date;
                    $add_project->end_date=$profile_project->end_date;
                    $add_project->description=$profile_project->description;
                    $add_project->present=$profile_project->present;            
                    $add_project->save();
                }           
            }           

        }
        else{

            $add = new Profile;
            $add->user_id=auth()->user()->id;       
            $add->profile_name=$request->profile_name;            
            $add->save();
        }      

        return redirect()->route('frontend.user.profile',$add->id); 

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

    public function personal_details_update(Request $request)
    {    
        // dd($request);
                
        $update = new Profile;

        $update->user_id=auth()->user()->id;
        $update->home_town=$request->home_town;        
        $update->gender=$request->gender;        
        $update->marital_status=$request->marital_status;
        $update->passport_number=$request->passport_number;
        $update->work_permit_usa=$request->work_permit_usa;
        $update->address=$request->address;
        $update->dob=$request->dob;
        $update->nationality=$request->nationality;
        $update->languages=$request->languages;
        
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
