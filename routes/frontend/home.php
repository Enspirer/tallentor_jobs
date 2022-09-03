<?php

use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\AizUploadController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutUsController;
use App\Http\Controllers\Frontend\JobsController;
use App\Http\Controllers\Frontend\ViewJobController;
use App\Http\Controllers\Frontend\User\AccountController;
use App\Http\Controllers\Frontend\User\DashboardController;
use App\Http\Controllers\Frontend\User\DashboardProfileController;
use App\Http\Controllers\Frontend\User\ProfileController;
use App\Http\Controllers\Frontend\User\Employer\EmployerWelcomeController;
use App\Http\Controllers\Frontend\User\Employer\EmployerCreateAccountController;
use App\Http\Controllers\Frontend\User\Employer\EmployerDashboardController;
use App\Http\Controllers\Frontend\User\Employer\CandidateListController;

/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact/send', [ContactController::class, 'send'])->name('contact.send');
Route::post('newsletter/store', [ContactController::class, 'newsletter_store'])->name('newsletter.store');
Route::get('about', [AboutUsController::class, 'index'])->name('about');
Route::get('jobs', [JobsController::class, 'index'])->name('jobs');
Route::get('jobs/view_job', [ViewJobController::class, 'index'])->name('view_job');


Route::post('/aiz-uploader', [AizUploadController::class, 'show_uploader']);
Route::post('/aiz-uploader/upload', [AizUploadController::class, 'upload']);
Route::get('/aiz-uploader/get_uploaded_files', [AizUploadController::class, 'get_uploaded_files']);
Route::post('/aiz-uploader/get_file_by_ids', [AizUploadController::class, 'get_preview_files']);
Route::get('/aiz-uploader/download/{id}', [AizUploadController::class, 'attachment_download'])->name('download_attachment');
Route::get('uploads/all/{file_name}',[AizUploadController::class,'get_image_content']);

/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 * These routes can not be hit if the password is expired
 */
Route::group(['middleware' => ['auth', 'password_expires']], function () {
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
        // User Dashboard Specific
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // User Account Specific
        Route::get('account', [AccountController::class, 'index'])->name('account');

        // User Profile Specific
        Route::patch('profile/update', [ProfileController::class, 'update'])->name('profile.update');

        Route::post('my_profile/update', [DashboardProfileController::class, 'my_profile_update'])->name('my_profile.update');

        Route::post('new_profile/add', [DashboardProfileController::class, 'new_profile_add'])->name('new_profile.add');

        Route::post('skill/add', [DashboardProfileController::class, 'skill_add'])->name('skill.add');
        Route::post('skill/update', [DashboardProfileController::class, 'skill_update'])->name('skill.update');
        Route::get('skill/delete/{id}', [DashboardProfileController::class, 'skill_destroy'])->name('skill.destroy');

        Route::get('profile/{id}', [DashboardProfileController::class, 'index'])->name('profile');
        Route::post('job_preference/update', [DashboardProfileController::class, 'job_preference_update'])->name('job_preference.update');
        Route::post('personal_details/update', [DashboardProfileController::class, 'personal_details_update'])->name('personal_details.update');


        Route::post('work_experience/add', [DashboardProfileController::class, 'work_experience_add'])->name('work_experience.add');
        Route::post('work_experience/update', [DashboardProfileController::class, 'work_experience_update'])->name('work_experience.update');
        Route::get('work_experience/delete/{id}', [DashboardProfileController::class, 'work_experience_destroy'])->name('work_experience.destroy');

        Route::post('educational_details/add', [DashboardProfileController::class, 'educational_details_add'])->name('educational_details.add');
        Route::post('educational_details/update', [DashboardProfileController::class, 'educational_details_update'])->name('educational_details.update');
        Route::get('educational_details/delete/{id}', [DashboardProfileController::class, 'educational_details_destroy'])->name('educational_details.destroy');

        Route::post('profile_projects/add', [DashboardProfileController::class, 'profile_projects_add'])->name('profile_projects.add');
        Route::post('profile_projects/update', [DashboardProfileController::class, 'profile_projects_update'])->name('profile_projects.update');
        Route::get('profile_projects/delete/{id}', [DashboardProfileController::class, 'profile_projects_destroy'])->name('profile_projects.destroy');

        
        // Employer Dashboard
        Route::get('welcome', [EmployerWelcomeController::class, 'index'])->name('welcome');
        Route::get('create-account', [EmployerCreateAccountController::class, 'index'])->name('employer_create_account');
        Route::post('user_account/update', [EmployerCreateAccountController::class, 'user_accounts_update'])->name('user_account.update');

        Route::get('employer/dashboard/active-jobs', [EmployerDashboardController::class, 'active_jobs'])->name('active_jobs');     
        Route::get('employer/dashboard/inactive-jobs', [EmployerDashboardController::class, 'inactive_jobs'])->name('inactive_jobs');     
        Route::get('employer/dashboard/candidate-list', [CandidateListController::class, 'index'])->name('candidate_list');     

    });
});
