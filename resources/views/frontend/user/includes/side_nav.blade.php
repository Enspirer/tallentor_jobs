@if(auth()->user()->user_type == 'Job Seeker') 
    <div class="side-nav">
        <a href="#" class="brand">
            <img src="{{url('images/logo/tj-logo.svg')}}" alt="logo">
        </a>
        <button type="button" class="btn-search">
            <i class="bi bi-search"></i>
            <span>I'm looking for...</span>
        </button>
        <h6>Overview</h6>
        <ul>
            <li>
                <a href="#">
                    <i class="bi bi-briefcase"></i>
                    Top Jobs
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bi bi-person"></i>
                    Profile
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bi bi-bell"></i>
                    Job Notification
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bi bi-gear"></i>
                    Settings
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bi bi-question-circle"></i>
                    Help and Support
                </a>
            </li>
        </ul>
    </div>
@else
    <div class="side-nav">
        <a href="#" class="brand">
            <img src="{{url('images/logo/tj-logo.svg')}}" alt="logo">
        </a>
        <button type="button" class="btn-search">
            <i class="bi bi-search"></i>
            <span>I'm looking for...</span>
        </button>
        <h6>Overview</h6>
        <ul>
            <li>
                <a href="#">
                    <i class="bi bi-briefcase"></i>
                    Top Jobs
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bi bi-person"></i>
                    Profile
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bi bi-bell"></i>
                    Job Notification
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bi bi-gear"></i>
                    Settings
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bi bi-question-circle"></i>
                    Help and Support
                </a>
            </li>
        </ul>
    </div>
@endif