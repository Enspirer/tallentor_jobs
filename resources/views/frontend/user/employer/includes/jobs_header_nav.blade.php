<div class="header-nav">
    <ul class="header-nav__links">
        <li>
            <a href="{{route('frontend.user.active_jobs')}}" class="header-nav__link {{ Request::segment(3) == 'active-jobs' ? 'active' : null }}">Active Jobs</a>
        </li>
        <li>
            <a href="{{route('frontend.user.inactive_jobs')}}" class="header-nav__link {{ Request::segment(3) == 'inactive-jobs' ? 'active' : null }}">Inactive Jobs</a>
        </li>
    </ul>
</div>