@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')
<link rel="stylesheet" href="{{url('css/dashboard/employer/pages/home.css')}}">
<link rel="stylesheet" href="{{url('css/dashboard/employer/pages/candidate_list.css')}}">
<link rel="stylesheet" href="{{url('css/tooltip.css')}}">
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.10/clipboard.min.js"></script>
@include('frontend.user.employer.includes.premium_popup')

<div class="candidate-header">
    <div class="header-row">
        <div class="info-block">
            <a href="#"><i class="bi bi-chevron-left"></i></a>
            <div class="job-info">
                <div class="job-cat">Design</div>
                <div class="title">Associate Technical Lead (Frontend)</div>
                <div class="status">
                    <span>Full time</span>
                    <i class="bi bi-circle-fill"></i>
                    <span>Remote</span>
                </div>
            </div>
        </div>
        <div class="option-block">
            <button class="clipboard-btn" data-clipboard-text="{{url('jobs/view_job')}}">
                <i class="bi bi-share"></i>
            </button>
            <button class="btn-outline cta-btn" type="button">
                <i class="bi bi-trash"></i>
                Delete
            </button>
            <div class="dropdown">
                <button class="btn-fill drop-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-globe2"></i>
                    Published
                    <i class="bi bi-chevron-down"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#"><i class="bi bi-globe2"></i> Published <i class="bi bi-check-lg"></i></a></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-lock-fill"></i> Lock (only me)</a></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-file-earmark-text-fill"></i> Draft</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="nav-row">
        <ul class="header-nav__links">
            <li>
                <a href="{{route('frontend.user.active_jobs')}}" class="header-nav__link active">Candidates</a>
            </li>
            <li>
                <a href="{{route('frontend.user.inactive_jobs')}}" class="header-nav__link">Job Details</a>
            </li>
            <li>
                <a href="{{route('frontend.user.inactive_jobs')}}" class="header-nav__link">Timeline &amp; Notes</a>
            </li>
        </ul>
        <div class="job-status">
            <span>Job Visible Period: </span> March 2, 2022 to April 2, 2022
        </div>
    </div>
</div>

<div class="candidate-body">
    <div class="candidate-count">Total Candidate <span>22</span></div>
    <div class="candidate-table-wrapper">
        <table class="candidate-table">
            <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th>Candidate Name</th>
                    <th>Skills</th>
                    <th>Current Job Title</th>
                    <th>Experience</th>
                    <th>Applied Date</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Kasun Lakmal</td>
                    <td>
                        <span class="tag">Web Developer</span>
                        <span class="tag">Software Engineer</span>
                        <span class="tag">UI Engineer</span>
                    </td>
                    <td>Web Developer</td>
                    <td>2.5 Years</td>
                    <td>09/07/2022</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
  
@endsection

@push('after-scripts')

<!-- Clipboard Button -->
<script>
const clip = new ClipboardJS('.clipboard-btn')

clip.on('success', (e) => {
    e.trigger.classList.add('tooltipped', 'tooltipped-s')
    e.trigger.setAttribute('aria-label', 'Copied!')

    const timer = setTimeout(() => {
        e.trigger.classList.remove('tooltipped', 'tooltipped-s')
        e.trigger.removeAttribute('aria-label')
        clearTimeout(timer)
    }, 1500)
})
</script>

@endpush