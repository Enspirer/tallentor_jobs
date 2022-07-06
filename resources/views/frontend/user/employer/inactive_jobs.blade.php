@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')
<link rel="stylesheet" href="{{url('css/dashboard/employer/pages/home.css')}}">
<link rel="stylesheet" href="{{url('css/dashboard/employer/includes/header_nav.css')}}">
@include('frontend.user.employer.includes.premium_popup')
@include('frontend.user.employer.includes.jobs_header_nav')

<div class="status-block">
    <div class="job-count">7 Inactive Jobs</div>
    <div class="filter">
        <label>Status:</label>
        <select class="form-select">
            <option selected>All</option>
            <option>Pending</option>
            <option>Published</option>
            <option>Drafts</option>
        </select>
    </div>
    <div class="filter">
        <label>Sort by:</label>
        <select class="form-select">
            <option selected>Date</option>
            <option>Candidates</option>
            <option>A-Z</option>
            <option>Z-A</option>
        </select>
    </div>
</div>

<div class="card-block">
    <div class="job-card draft">
        <div class="subtitle">Design</div>
        <div class="title">Senior Product Designer</div>
        <div class="candidates-block">
            <div class="title">Candidates:</div>
            <div class="content">
                <img src="{{url('images/dashboard/employer/home/candidates.svg')}}">
            </div>
        </div>
        <div class="job-status">
            <span>Fulltime</span>
            <span>Remote</span>
        </div>
        <div class="footer">
            <div class="status draft">
                <i class="bi bi-file-earmark-text-fill"></i>
                Draft
            </div>
            <a href="#" class="cta-link">See Details <i class="bi bi-chevron-right"></i></a>
        </div>
    </div>
    <div class="job-card draft">
        <div class="subtitle">Design</div>
        <div class="title">Senior Product Designer</div>
        <div class="candidates-block">
            <div class="title">Candidates:</div>
            <div class="content">
                <img src="{{url('images/dashboard/employer/home/candidates.svg')}}">
            </div>
        </div>
        <div class="job-status">
            <span>Fulltime</span>
            <span>Remote</span>
        </div>
        <div class="footer">
            <div class="status draft">
                <i class="bi bi-file-earmark-text-fill"></i>
                Draft
            </div>
            <a href="#" class="cta-link">See Details <i class="bi bi-chevron-right"></i></a>
        </div>
    </div>
    <div class="job-card draft">
        <div class="subtitle">Design</div>
        <div class="title">Senior Product Designer</div>
        <div class="candidates-block">
            <div class="title">Candidates:</div>
            <div class="content">
                <img src="{{url('images/dashboard/employer/home/candidates.svg')}}">
            </div>
        </div>
        <div class="job-status">
            <span>Fulltime</span>
            <span>Remote</span>
        </div>
        <div class="footer">
            <div class="status draft">
                <i class="bi bi-file-earmark-text-fill"></i>
                Draft
            </div>
            <a href="#" class="cta-link">See Details <i class="bi bi-chevron-right"></i></a>
        </div>
    </div>
</div>
  
@endsection

@push('after-scripts')

@endpush