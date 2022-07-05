@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')
<link rel="stylesheet" href="{{url('css/dashboard/employer/pages/home.css')}}">

<div class="header-nav">
    <ul class="header-nav__links">
        <li>
            <a href="#" class="header-nav__link active">Active Jobs</a>
        </li>
        <li>
            <a href="#" class="header-nav__link">Inactive Jobs</a>
        </li>
    </ul>
</div>

<div class="status-block">
    <div class="job-count">7 Active Jobs</div>
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
    <a href="#" class="job-card create-job">
        <div class="new-job">
            <div class="add-btn">+</div>
            <div class="text">Create New Job</div>
        </div>
    </a>
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
            <div class="status published">
                <i class="bi bi-file-earmark-text-fill"></i>
                Draft
            </div>
            <a href="#" class="cta-link">See Details <i class="bi bi-chevron-right"></i></a>
        </div>
    </div>
    <div class="job-card published">
        <div class="subtitle">Design</div>
        <div class="title">Senior Product Designer</div>
        <div class="candidates-block">
            <div class="title">Candidates:</div>
            <div class="content">
                <div class="count">
                    <div class="title">Total</div>
                    <div class="amount">57</div>
                </div>
                <div class="count">
                    <div class="title">New</div>
                    <div class="amount">10</div>
                </div>
            </div>
        </div>
        <div class="job-status">
            <span>Fulltime</span>
            <span>Remote</span>
        </div>
        <div class="footer">
            <div class="status published">
                <img src="{{url('images/dashboard/employer/home/published.svg')}}">
                Published
            </div>
            <a href="#" class="cta-link">See Details <i class="bi bi-chevron-right"></i></a>
        </div>
    </div>
</div>

<div class="premium-popup" id="premiumPopup">
    <img src="{{url('images/dashboard/employer/home/premium-badge.png')}}">
    <i class="bi bi-x" onClick="document.querySelector('#premiumPopup').style.display = 'none'"></i>
    <div class="title">Become a Premium Member</div>
    <p>We understand that the key to your business's success is having the best people. Trust Tallentor Jobs to find your best candidates.</p>
    <a href="#" class="cta-btn" target="_blank" rel="noopener noreferrer">Become a Premium Member</a>
</div>
  
@endsection

@push('after-scripts')

@endpush