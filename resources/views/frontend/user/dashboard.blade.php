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
            <div class="details-block">
                <div class="duration">4 min ago</div>
                <div class="title">Associate Technical Lead (Frontend)</div>
                <div class="tags">
                    <span class="tag purple">Fulltime</span>
                    <span class="tag blue">Developer</span>
                </div>
                <div class="status">
                    <div class="status-tag"><i class="bi bi-people-fill"></i> 50-100</div>
                    <div class="status-tag"><i class="bi bi-cash-coin"></i> $80-120k</div>
                    <div class="status-tag"><i class="bi bi-geo-alt"></i> Dubai, UAE</div>
                </div>
                <a href="#" target="_blank" rel="noopener noreferrer">View Job <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
        <div class="job-card">
            <img src="{{url('images/company-logo.png')}}" alt="">
            <div class="details-block">
                <div class="duration">4 min ago</div>
                <div class="title">Associate Technical Lead (Frontend)</div>
                <div class="tags">
                    <span class="tag purple">Fulltime</span>
                    <span class="tag blue">Developer</span>
                </div>
                <div class="status">
                    <div class="status-tag"><i class="bi bi-people-fill"></i> 50-100</div>
                    <div class="status-tag"><i class="bi bi-cash-coin"></i> $80-120k</div>
                    <div class="status-tag"><i class="bi bi-geo-alt"></i> Dubai, UAE</div>
                </div>
                <a href="#" target="_blank" rel="noopener noreferrer">View Job <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
        <div class="job-card">
            <img src="{{url('images/company-logo.png')}}" alt="">
            <div class="details-block">
                <div class="duration">4 min ago</div>
                <div class="title">Associate Technical Lead (Frontend)</div>
                <div class="tags">
                    <span class="tag purple">Fulltime</span>
                    <span class="tag blue">Developer</span>
                </div>
                <div class="status">
                    <div class="status-tag"><i class="bi bi-people-fill"></i> 50-100</div>
                    <div class="status-tag"><i class="bi bi-cash-coin"></i> $80-120k</div>
                    <div class="status-tag"><i class="bi bi-geo-alt"></i> Dubai, UAE</div>
                </div>
                <a href="#" target="_blank" rel="noopener noreferrer">View Job <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
        <div class="job-card">
            <img src="{{url('images/company-logo.png')}}" alt="">
            <div class="details-block">
                <div class="duration">4 min ago</div>
                <div class="title">Associate Technical Lead (Frontend)</div>
                <div class="tags">
                    <span class="tag purple">Fulltime</span>
                    <span class="tag blue">Developer</span>
                </div>
                <div class="status">
                    <div class="status-tag"><i class="bi bi-people-fill"></i> 50-100</div>
                    <div class="status-tag"><i class="bi bi-cash-coin"></i> $80-120k</div>
                    <div class="status-tag"><i class="bi bi-geo-alt"></i> Dubai, UAE</div>
                </div>
                <a href="#" target="_blank" rel="noopener noreferrer">View Job <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <div class="divider">7 July 2020</div>
    <div class="jobs-cards-block">
        <div class="job-card">
            <img src="{{url('images/company-logo.png')}}" alt="">
            <div class="details-block">
                <div class="duration">4 min ago</div>
                <div class="title">Associate Technical Lead (Frontend)</div>
                <div class="tags">
                    <span class="tag purple">Fulltime</span>
                    <span class="tag blue">Developer</span>
                </div>
                <div class="status">
                    <div class="status-tag"><i class="bi bi-people-fill"></i> 50-100</div>
                    <div class="status-tag"><i class="bi bi-cash-coin"></i> $80-120k</div>
                    <div class="status-tag"><i class="bi bi-geo-alt"></i> Dubai, UAE</div>
                </div>
                <a href="#" target="_blank" rel="noopener noreferrer">View Job <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
        <div class="job-card">
            <img src="{{url('images/company-logo.png')}}" alt="">
            <div class="details-block">
                <div class="duration">4 min ago</div>
                <div class="title">Associate Technical Lead (Frontend)</div>
                <div class="tags">
                    <span class="tag purple">Fulltime</span>
                    <span class="tag blue">Developer</span>
                </div>
                <div class="status">
                    <div class="status-tag"><i class="bi bi-people-fill"></i> 50-100</div>
                    <div class="status-tag"><i class="bi bi-cash-coin"></i> $80-120k</div>
                    <div class="status-tag"><i class="bi bi-geo-alt"></i> Dubai, UAE</div>
                </div>
                <a href="#" target="_blank" rel="noopener noreferrer">View Job <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
        <div class="job-card">
            <img src="{{url('images/company-logo.png')}}" alt="">
            <div class="details-block">
                <div class="duration">4 min ago</div>
                <div class="title">Associate Technical Lead (Frontend)</div>
                <div class="tags">
                    <span class="tag purple">Fulltime</span>
                    <span class="tag blue">Developer</span>
                </div>
                <div class="status">
                    <div class="status-tag"><i class="bi bi-people-fill"></i> 50-100</div>
                    <div class="status-tag"><i class="bi bi-cash-coin"></i> $80-120k</div>
                    <div class="status-tag"><i class="bi bi-geo-alt"></i> Dubai, UAE</div>
                </div>
                <a href="#" target="_blank" rel="noopener noreferrer">View Job <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
        <div class="job-card">
            <img src="{{url('images/company-logo.png')}}" alt="">
            <div class="details-block">
                <div class="duration">4 min ago</div>
                <div class="title">Associate Technical Lead (Frontend)</div>
                <div class="tags">
                    <span class="tag purple">Fulltime</span>
                    <span class="tag blue">Developer</span>
                </div>
                <div class="status">
                    <div class="status-tag"><i class="bi bi-people-fill"></i> 50-100</div>
                    <div class="status-tag"><i class="bi bi-cash-coin"></i> $80-120k</div>
                    <div class="status-tag"><i class="bi bi-geo-alt"></i> Dubai, UAE</div>
                </div>
                <a href="#" target="_blank" rel="noopener noreferrer">View Job <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>
  
@endsection

@push('after-scripts')

@endpush
