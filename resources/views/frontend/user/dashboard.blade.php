@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')
<link rel="stylesheet" href="{{url('css/dashboard/employee/pages/home.css')}}">
<link rel="stylesheet" href="{{url('css/dashboard/employee/includes/search_bar.css')}}">
@include('frontend.user.includes.search_bar')

<div class="feature-jobs">
    <div class="divider">Today</div>
    <div class="jobs-cards-block">
        <div class="job-card">
            <img src="{{url('images/company-logo.png')}}" alt="">
            <div class="header">
                <div class="duration">4 min ago</div>
                <h5 class="title">Associate Technical Lead (Frontend)</h5>
                <h6 class="company">Tallentor Digital (pvt) Ltd<i class="bi bi-check-circle-fill"></i></h6>
                <div class="tags">
                    <span class="tag purple">Fulltime</span>
                    <span class="tag blue">Developer</span>
                </div>
            </div>
            <ul class="job-breadcrumb">
                <li><a href="#">Information and communication Technology</a> <i class="bi bi-chevron-right"></i></li>
                <li><a href="#">Web Development and Design</a></li>
            </ul>
            <div class="status">
                <div class="status-tag"><i class="bi bi-people-fill"></i> 50-100</div>
                <div class="status-tag"><i class="bi bi-cash-coin"></i> $80-120k</div>
                <div class="status-tag"><i class="bi bi-geo-alt"></i> Dubai, UAE</div>
            </div>
            <a href="{{route('frontend.view_job')}}" target="_blank" rel="noopener noreferrer">View Job <i class="bi bi-arrow-right"></i></a>
        </div>
        <div class="job-card">
            <img src="{{url('images/company-logo.png')}}" alt="">
            <div class="header">
                <div class="duration">4 min ago</div>
                <h5 class="title">Associate Technical Lead (Frontend)</h5>
                <h6 class="company">Tallentor Digital (pvt) Ltd<i class="bi bi-check-circle-fill"></i></h6>
                <div class="tags">
                    <span class="tag purple">Fulltime</span>
                    <span class="tag blue">Developer</span>
                </div>
            </div>
            <ul class="job-breadcrumb">
                <li><a href="#">Information and communication Technology</a> <i class="bi bi-chevron-right"></i></li>
                <li><a href="#">Web Development and Design</a></li>
            </ul>
            <div class="status">
                <div class="status-tag"><i class="bi bi-people-fill"></i> 50-100</div>
                <div class="status-tag"><i class="bi bi-cash-coin"></i> $80-120k</div>
                <div class="status-tag"><i class="bi bi-geo-alt"></i> Dubai, UAE</div>
            </div>
            <a href="{{route('frontend.view_job')}}" target="_blank" rel="noopener noreferrer">View Job <i class="bi bi-arrow-right"></i></a>
        </div>
        <div class="job-card">
            <img src="{{url('images/company-logo.png')}}" alt="">
            <div class="header">
                <div class="duration">4 min ago</div>
                <h5 class="title">Associate Technical Lead (Frontend)</h5>
                <h6 class="company">Tallentor Digital (pvt) Ltd<i class="bi bi-check-circle-fill"></i></h6>
                <div class="tags">
                    <span class="tag purple">Fulltime</span>
                    <span class="tag blue">Developer</span>
                </div>
            </div>
            <ul class="job-breadcrumb">
                <li><a href="#">Information and communication Technology</a> <i class="bi bi-chevron-right"></i></li>
                <li><a href="#">Web Development and Design</a></li>
            </ul>
            <div class="status">
                <div class="status-tag"><i class="bi bi-people-fill"></i> 50-100</div>
                <div class="status-tag"><i class="bi bi-cash-coin"></i> $80-120k</div>
                <div class="status-tag"><i class="bi bi-geo-alt"></i> Dubai, UAE</div>
            </div>
            <a href="{{route('frontend.view_job')}}" target="_blank" rel="noopener noreferrer">View Job <i class="bi bi-arrow-right"></i></a>
        </div>
        <div class="job-card">
            <img src="{{url('images/company-logo.png')}}" alt="">
            <div class="header">
                <div class="duration">4 min ago</div>
                <h5 class="title">Associate Technical Lead (Frontend)</h5>
                <h6 class="company">Tallentor Digital (pvt) Ltd<i class="bi bi-check-circle-fill"></i></h6>
                <div class="tags">
                    <span class="tag purple">Fulltime</span>
                    <span class="tag blue">Developer</span>
                </div>
            </div>
            <ul class="job-breadcrumb">
                <li><a href="#">Information and communication Technology</a> <i class="bi bi-chevron-right"></i></li>
                <li><a href="#">Web Development and Design</a></li>
            </ul>
            <div class="status">
                <div class="status-tag"><i class="bi bi-people-fill"></i> 50-100</div>
                <div class="status-tag"><i class="bi bi-cash-coin"></i> $80-120k</div>
                <div class="status-tag"><i class="bi bi-geo-alt"></i> Dubai, UAE</div>
            </div>
            <a href="{{route('frontend.view_job')}}" target="_blank" rel="noopener noreferrer">View Job <i class="bi bi-arrow-right"></i></a>
        </div>
    </div>
    <div class="divider">7 July 2020</div>
    <div class="jobs-cards-block">
        <div class="job-card">
            <img src="{{url('images/company-logo.png')}}" alt="">
            <div class="header">
                <div class="duration">4 min ago</div>
                <h5 class="title">Associate Technical Lead (Frontend)</h5>
                <h6 class="company">Tallentor Digital (pvt) Ltd<i class="bi bi-check-circle-fill"></i></h6>
                <div class="tags">
                    <span class="tag purple">Fulltime</span>
                    <span class="tag blue">Developer</span>
                </div>
            </div>
            <ul class="job-breadcrumb">
                <li><a href="#">Information and communication Technology</a> <i class="bi bi-chevron-right"></i></li>
                <li><a href="#">Web Development and Design</a></li>
            </ul>
            <div class="status">
                <div class="status-tag"><i class="bi bi-people-fill"></i> 50-100</div>
                <div class="status-tag"><i class="bi bi-cash-coin"></i> $80-120k</div>
                <div class="status-tag"><i class="bi bi-geo-alt"></i> Dubai, UAE</div>
            </div>
            <a href="{{route('frontend.view_job')}}" target="_blank" rel="noopener noreferrer">View Job <i class="bi bi-arrow-right"></i></a>
        </div>
        <div class="job-card">
            <img src="{{url('images/company-logo.png')}}" alt="">
            <div class="header">
                <div class="duration">4 min ago</div>
                <h5 class="title">Associate Technical Lead (Frontend)</h5>
                <h6 class="company">Tallentor Digital (pvt) Ltd<i class="bi bi-check-circle-fill"></i></h6>
                <div class="tags">
                    <span class="tag purple">Fulltime</span>
                    <span class="tag blue">Developer</span>
                </div>
            </div>
            <ul class="job-breadcrumb">
                <li><a href="#">Information and communication Technology</a> <i class="bi bi-chevron-right"></i></li>
                <li><a href="#">Web Development and Design</a></li>
            </ul>
            <div class="status">
                <div class="status-tag"><i class="bi bi-people-fill"></i> 50-100</div>
                <div class="status-tag"><i class="bi bi-cash-coin"></i> $80-120k</div>
                <div class="status-tag"><i class="bi bi-geo-alt"></i> Dubai, UAE</div>
            </div>
            <a href="{{route('frontend.view_job')}}" target="_blank" rel="noopener noreferrer">View Job <i class="bi bi-arrow-right"></i></a>
        </div>
        <div class="job-card">
            <img src="{{url('images/company-logo.png')}}" alt="">
            <div class="header">
                <div class="duration">4 min ago</div>
                <h5 class="title">Associate Technical Lead (Frontend)</h5>
                <h6 class="company">Tallentor Digital (pvt) Ltd<i class="bi bi-check-circle-fill"></i></h6>
                <div class="tags">
                    <span class="tag purple">Fulltime</span>
                    <span class="tag blue">Developer</span>
                </div>
            </div>
            <ul class="job-breadcrumb">
                <li><a href="#">Information and communication Technology</a> <i class="bi bi-chevron-right"></i></li>
                <li><a href="#">Web Development and Design</a></li>
            </ul>
            <div class="status">
                <div class="status-tag"><i class="bi bi-people-fill"></i> 50-100</div>
                <div class="status-tag"><i class="bi bi-cash-coin"></i> $80-120k</div>
                <div class="status-tag"><i class="bi bi-geo-alt"></i> Dubai, UAE</div>
            </div>
            <a href="{{route('frontend.view_job')}}" target="_blank" rel="noopener noreferrer">View Job <i class="bi bi-arrow-right"></i></a>
        </div>
        <div class="job-card">
            <img src="{{url('images/company-logo.png')}}" alt="">
            <div class="header">
                <div class="duration">4 min ago</div>
                <h5 class="title">Associate Technical Lead (Frontend)</h5>
                <h6 class="company">Tallentor Digital (pvt) Ltd<i class="bi bi-check-circle-fill"></i></h6>
                <div class="tags">
                    <span class="tag purple">Fulltime</span>
                    <span class="tag blue">Developer</span>
                </div>
            </div>
            <ul class="job-breadcrumb">
                <li><a href="#">Information and communication Technology</a> <i class="bi bi-chevron-right"></i></li>
                <li><a href="#">Web Development and Design</a></li>
            </ul>
            <div class="status">
                <div class="status-tag"><i class="bi bi-people-fill"></i> 50-100</div>
                <div class="status-tag"><i class="bi bi-cash-coin"></i> $80-120k</div>
                <div class="status-tag"><i class="bi bi-geo-alt"></i> Dubai, UAE</div>
            </div>
            <a href="{{route('frontend.view_job')}}" target="_blank" rel="noopener noreferrer">View Job <i class="bi bi-arrow-right"></i></a>
        </div>
    </div>
</div>
  
@endsection

@push('after-scripts')

@endpush
