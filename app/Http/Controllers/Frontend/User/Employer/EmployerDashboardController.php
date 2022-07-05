<?php

namespace App\Http\Controllers\Frontend\User\Employer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployerDashboardController extends Controller
{
    public function index() {
        return view('frontend.user.employer_dashboard');
    }
}
