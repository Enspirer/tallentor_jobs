<?php

namespace App\Http\Controllers\Frontend\User\Employer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class EmployerCreateAccountController extends Controller
{
    public function index() {
        return view('frontend.user.employer.create_account');
    }

    public function user_accounts_update(Request $request)
    {    
        // dd($request);

        if($request->file('company_logo'))
        {
            $preview_fileName = time().'_'.rand(1000,10000).'.'.$request->company_logo->getClientOriginalExtension();
            $fullURLsPreviewFile = $request->company_logo->move(public_path('files/company_logo'), $preview_fileName);
            $image_url = $preview_fileName;
        }else{
            $image_url = null;
        }

        DB::table('users')->where('id', auth()->user()->id)
        ->update([
            'business_name' => $request->business_name, 
            'first_name' => $request->first_name, 
            'last_name' => $request->last_name, 
            'phone_number' => $request->phone_number, 
            'email' => $request->company_email, 
            'company_logo' =>  $image_url 
        ]);
                

        return redirect()->route('frontend.user.active_jobs');                      

    }



}
