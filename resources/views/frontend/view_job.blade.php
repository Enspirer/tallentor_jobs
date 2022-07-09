@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')
<link rel="stylesheet" href="{{url('css/dashboard/employee/includes/search_bar.css')}}">
<link rel="stylesheet" href="{{url('css/dashboard/employee/pages/home.css')}}">
<link rel="stylesheet" href="{{url('css/landing_page/pages/view_job.css')}}">

<div class="container">
    <div class="row mt-5">
        <div class="col-12">
            @include('frontend.user.includes.search_bar')
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="view-job-card">
                <div class="header">
                    <div class="job-card-wrapper">
                        <div class="job-card">
                            <img src="{{url('images/company-logo.png')}}" alt="">
                            <div class="header">
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
                        </div>
                    </div>
                </div>
                <div class="body">
                    <div class="job-card-wrapper">
                        <div class="content-block">
                            <h6>Description</h6>

                            <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

                            <h6>Minimum Qualification</h6>

                            <ul class="mb-4">
                                <li>4+ years of work experience including delivery of enterprise software.</li>
                                <li>2+ years strong experience in React JS.</li>
                                <li>Excellent understanding of the DOM and dynamic page rendering.</li>
                                <li>Extensive Knowledge of React Testing Library, React Query, JavaScript, jQuery, HTML5, CSS3, JSON.</li>
                                <li>Proficiency in coding for responsive design and progressive enhancement.</li>
                                <li>Strongly established background with UX/UI design principles.</li>
                                <li>Exposure to Agile-Scrum, Version controlling and continues integration.</li>
                                <li>Desire to own code quality, stability, reliability and create great user experience.</li>
                            </ul>

                            <h6>WHAT'S IN IT FOR YOU</h6>

                            <ul class="mb-4">
                                <li>Exposure to global projects</li>
                                <li>Great Working Environment</li>
                                <li>Always Learning Culture</li>
                                <li>Competitive Compensation</li>
                                <li>Flexible working schedule</li>
                                <li>Remote work arrangement</li>
                            </ul>

                            <button class="btn-fill">Apply Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('after-scripts')

@endpush