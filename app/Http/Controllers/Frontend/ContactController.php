<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Contact\SendContactRequest;
use App\Mail\Frontend\Contact\SendContact;
use Illuminate\Support\Facades\Mail;
use App\Models\EmailSubscription;
use Illuminate\Http\Request;

/**
 * Class ContactController.
 */
class ContactController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.contact');
    }

    /**
     * @param SendContactRequest $request
     *
     * @return mixed
     */
    public function send(SendContactRequest $request)
    {
        Mail::send(new SendContact($request));

        return redirect()->back()->withFlashSuccess(__('alerts.frontend.contact.sent'));
    }

    public function newsletter_store(Request $request)
    {        
        // dd($request); 

        $add = new EmailSubscription;
        $add->email=$request->newsletter;
        $add->type='Email Subscription'; 
        $add->save();

        session()->flash('message','Thanks!');

        return back()->with([
            'email_sub_success' => 'email_sub_success'
        ]);   
    }

}
