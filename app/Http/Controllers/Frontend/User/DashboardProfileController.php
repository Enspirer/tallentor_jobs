<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardProfileController extends Controller
{
    public function index() {
        return view('frontend.user.profile');
    }
}