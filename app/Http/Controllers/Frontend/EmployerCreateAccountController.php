<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployerCreateAccountController extends Controller
{
    public function index() {
        return view('frontend.employer_create_account');
    }
}
