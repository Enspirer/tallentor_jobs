<?php

use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\AizUploadController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutUsController;
use App\Http\Controllers\Frontend\JobsController;
use App\Http\Controllers\Frontend\User\AccountController;
use App\Http\Controllers\Frontend\User\DashboardController;
use App\Http\Controllers\Frontend\User\DashboardProfileController;
use App\Http\Controllers\Frontend\User\ProfileController;
use App\Http\Controllers\Frontend\User\Employer\EmployerWelcomeController;
use App\Http\Controllers\Frontend\User\Employer\EmployerCreateAccountController;
use App\Http\Controllers\Frontend\User\Employer\EmployerDashboardController;

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

        Route::get('profile/{id}', [DashboardProfileController::class, 'index'])->name('profile');
        Route::post('job_preference.update', [DashboardProfileController::class, 'job_preference_update'])->name('job_preference.update');
        Route::post('work_experience.add', [DashboardProfileController::class, 'work_experience_add'])->name('work_experience.add');

        // Employer Dashboard
        Route::get('welcome', [EmployerWelcomeController::class, 'index'])->name('welcome');
        Route::get('create-account', [EmployerCreateAccountController::class, 'index'])->name('employer_create_account');
        Route::get('employer/dashboard/active-jobs', [EmployerDashboardController::class, 'active_jobs'])->name('active_jobs');     
        Route::get('employer/dashboard/inactive-jobs', [EmployerDashboardController::class, 'inactive_jobs'])->name('inactive_jobs');     

    });
});
