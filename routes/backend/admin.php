<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\FileManagerController;
use App\Http\Controllers\Backend\SettingsController;
use App\Http\Controllers\Backend\ModuleExplorerController;
use App\Http\Controllers\Backend\JobPostController;
use App\Http\Controllers\Backend\JobCategoryController;
use App\Http\Controllers\Backend\ContactUsController;
use App\Http\Controllers\Backend\SkillsController;
use App\Http\Controllers\Backend\EventsController;
use App\Http\Controllers\Backend\EmailSubController;


// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');


Route::get('file_manager', [FileManagerController::class, 'index'])->name('file_manager.index');
Route::get('file_manager/getdetails', [FileManagerController::class, 'getdetails'])->name('file_manager.getdetails');
Route::get('file_manager/delete/{id}', [FileManagerController::class, 'destroy'])->name('file_manager.destroy');



Route::get('module-explorer', [ModuleExplorerController::class, 'index'])->name('module.index');
Route::get('module-explorer/show/{slug}', [ModuleExplorerController::class, 'show'])->name('module.show');
Route::post('module-explorer/install/', [ModuleExplorerController::class, 'install'])->name('module.install');
Route::post('module-explorer/uninstall/', [ModuleExplorerController::class, 'uninstall'])->name('module.uninstall');


Route::get('settings', [SettingsController::class, 'index'])->name('settings.index');
Route::post('settings/update', [SettingsController::class, 'settings_update'])->name('settings_update');

Route::get('about_us', [SettingsController::class, 'about_us'])->name('about_us');
Route::post('about_us/update', [SettingsController::class, 'about_us_update'])->name('about_us_update');

Route::get('privacy_policy', [SettingsController::class, 'privacy_policy'])->name('privacy_policy');
Route::post('privacy_policy/update', [SettingsController::class, 'privacy_policy_update'])->name('privacy_policy_update');

Route::get('terms_and_conditions', [SettingsController::class, 'terms_and_conditions'])->name('terms_and_conditions');
Route::post('terms_and_conditions_update/update', [SettingsController::class, 'terms_and_conditions_update'])->name('terms_and_conditions_update');

Route::get('contactus_thanks', [SettingsController::class, 'contactus_thanks'])->name('contactus_thanks');
Route::post('contactus_thanks_update/update', [SettingsController::class, 'contactus_thanks_update'])->name('contactus_thanks_update');


Route::get('email_sub', [EmailSubController::class, 'index'])->name('email_sub.index');
Route::get('email_sub/getdetails', [EmailSubController::class, 'getDetails'])->name('email_sub.getDetails');
Route::get('email_sub/edit/{id}', [EmailSubController::class, 'edit'])->name('email_sub.edit');
Route::post('email_sub/update', [EmailSubController::class, 'update'])->name('email_sub.update');
Route::get('email_sub/delete/{id}', [EmailSubController::class, 'destroy'])->name('email_sub.destroy');

Route::get('contact_us', [ContactUsController::class, 'index'])->name('contact_us.index');
Route::get('contact_us/getdetails', [ContactUsController::class, 'getDetails'])->name('contact_us.getDetails');
Route::get('contact_us/edit/{id}', [ContactUsController::class, 'edit'])->name('contact_us.edit');
Route::post('contact_us/update', [ContactUsController::class, 'update'])->name('contact_us.update');
Route::get('contact_us/delete/{id}', [ContactUsController::class, 'destroy'])->name('contact_us.destroy');

Route::get('job_posts', [JobPostController::class, 'index'])->name('job_posts.index');
Route::get('job_posts/get_details', [JobPostController::class, 'get_details'])->name('job_posts.get_details');
Route::get('job_posts/edit/{id}', [JobPostController::class, 'edit'])->name('job_posts.edit');
Route::post('job_posts/update', [JobPostController::class, 'update'])->name('job_posts.update');
Route::get('job_posts/delete/{id}', [JobPostController::class, 'destroy'])->name('job_posts.destroy');

Route::get('job_category', [JobCategoryController::class, 'index'])->name('job_category.index');
Route::get('job_category/create', [JobCategoryController::class, 'create'])->name('job_category.create');
Route::post('job_category/store', [JobCategoryController::class, 'store'])->name('job_category.store');
Route::get('job_category/get_details', [JobCategoryController::class, 'get_details'])->name('job_category.get_details');
Route::get('job_category/edit/{id}', [JobCategoryController::class, 'edit'])->name('job_category.edit');
Route::post('job_category/update', [JobCategoryController::class, 'update'])->name('job_category.update');
Route::get('job_category/delete/{id}', [JobCategoryController::class, 'destroy'])->name('job_category.destroy');

Route::get('skills', [SkillsController::class, 'index'])->name('skills.index');
Route::get('skills/create', [SkillsController::class, 'create'])->name('skills.create');
Route::post('skills/store', [SkillsController::class, 'store'])->name('skills.store');
Route::get('skills/get_details', [SkillsController::class, 'get_details'])->name('skills.get_details');
Route::get('skills/edit/{id}', [SkillsController::class, 'edit'])->name('skills.edit');
Route::post('skills/update', [SkillsController::class, 'update'])->name('skills.update');
Route::get('skills/delete/{id}', [SkillsController::class, 'destroy'])->name('skills.destroy');


Route::get('events', [EventsController::class, 'index'])->name('events.index');
Route::get('events/create', [EventsController::class, 'create'])->name('events.create');
Route::post('events/store', [EventsController::class, 'store'])->name('events.store');
Route::get('events/get_details', [EventsController::class, 'get_details'])->name('events.get_details');
Route::get('events/edit/{id}', [EventsController::class, 'edit'])->name('events.edit');
Route::post('events/update', [EventsController::class, 'update'])->name('events.update');
Route::get('events/delete/{id}', [EventsController::class, 'destroy'])->name('events.destroy');


