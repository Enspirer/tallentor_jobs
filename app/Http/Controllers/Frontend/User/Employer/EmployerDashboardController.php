<?php

namespace App\Http\Controllers\Frontend\User\Employer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployerDashboardController extends Controller
{
    public function active_jobs() {
        return view('frontend.user.employer_dashboard');
    }

    public function inactive_jobs() {
        return view('frontend.user.employer.inactive_jobs');
    }
}
