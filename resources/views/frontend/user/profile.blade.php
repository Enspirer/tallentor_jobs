@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')

<div class="row mb-4">
    <div class="col">
        <div class="profile-status-block">
            <div class="content-block">
                <h5>Complete you profile</h5>
                <p>Extend your profile information and improve your account. <br>It's may helps for finding more jobs as you think.</p>
                <button type="button">Edit your profile</button>
            </div>
            <div class="status-block">
                <div class="text-block">
                    <div class="title">Profile Status</div>
                    <div class="status">Okay</div>
                </div>
                <div id="radialProgress" class="center radial-progress">
                    <svg class="progress blue noselect" data-progress="42" x="0px" y="0px" viewBox="0 0 80 80">
                        <path class="track" d="M5,40a35,35 0 1,0 70,0a35,35 0 1,0 -70,0" />
                        <path class="fill" d="M5,40a35,35 0 1,0 70,0a35,35 0 1,0 -70,0" />
                        <text class="value" x="50%" y="60%">0%</text>
                    </svg>
                </div>
            </div>
            <img src="{{url('images/dashboard/profile/rect1.svg')}}" class="rect1">
            <img src="{{url('images/dashboard/profile/rect2.svg')}}" class="rect2">
            <img src="{{url('images/dashboard/profile/rect3.svg')}}" class="rect3">
        </div>
    </div>
</div>

<div class="row mb-4">
    <div class="col-xl-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="profile-block">
                    <h4 class="profile-block__title">My Profile</h4>
                    <div class="profile-block__content">
                        <div class="image-block">
                            <img src="{{url('images/dashboard/profile.png')}}" class="image-block__img">
                            <button type="button" class="image-block__edit-btn"><i class="bi bi-pencil-fill"></i></button>
                        </div>
                        <div class="name">Pawani Anuththara</div>
                        <div class="country">
                            <img src="https://purecatamphetamine.github.io/country-flag-icons/3x2/LK.svg" class="country__flag">
                            <div class="country__name">Sri Lanka</div>
                        </div>
                        <div class="info-block">
                            <div class="row mb-3">
                                <div class="col-auto">
                                    <span class="info-block__title"><i class="bi bi-briefcase-fill"></i>Experiance</span>
                                </div>
                                <div class="col">
                                    <span class="info-block__text">1 Year and 3 Months</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-auto">
                                    <span class="info-block__title"><i class="bi bi-person-fill"></i>Role</span>
                                </div>
                                <div class="col">
                                    <span class="info-block__tag">UI Designer</span>
                                    <span class="info-block__tag">UX Designer</span>
                                    <span class="info-block__tag">Software Engineer</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-auto">
                                    <span class="info-block__title"><i class="bi bi-telephone-fill"></i>Phone</span>
                                </div>
                                <div class="col">
                                    <span class="info-block__text">(+94) 77 755 4571</span>
                                    <span class="info-block__status verified">Verified</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-auto">
                                    <span class="info-block__title"><i class="bi bi-at"></i>Email</span>
                                </div>
                                <div class="col">
                                    <span class="info-block__text">example@gmail.com</span>
                                    <span class="info-block__status"><button type="button" class="verify-btn">Verify Now</button></span>
                                </div>
                            </div>
                        </div>
                        <div class="button-block">
                            <button type="button" class="cta-btn"><i class="bi bi-plus-lg"></i> Add New Profile</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="profile-list">
                    <h5 class="profile-list__title">Select Profile</h5>
                    <div class="profile-list__content">
                        <div class="profile-list__item">
                            <div class="profile-list__item-name">UX Designer</div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="radio" role="switch" name="profile_list_item" checked>
                            </div>
                        </div>
                        <div class="profile-list__item">
                            <div class="profile-list__item-name">UI Designer</div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="radio" role="switch" name="profile_list_item">
                            </div>
                        </div>
                        <div class="profile-list__item">
                            <div class="profile-list__item-name">Web Developer</div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="radio" role="switch" name="profile_list_item">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="pending-actions">
                    <h5 class="pending-actions__title">Pending Actions</h5>
                    <div class="pending-actions__content">
                        <a href="#" class="pending-actions__item">
                            <div class="pending-actions__item-name">Resume</div>
                            <div class="pending-actions__item-status">30%</div>
                        </a>
                        <a href="#" class="pending-actions__item">
                            <div class="pending-actions__item-name">Education</div>
                            <div class="pending-actions__item-status">75%</div>
                        </a>
                        <a href="#" class="pending-actions__item">
                            <div class="pending-actions__item-name">Verify Email ID</div>
                            <div class="pending-actions__item-status">0%</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-8">
        <div class="row g-4">
            <div class="col-12">
                <div class="personal-information">
                    <h4 class="personal-information__title">Personal Information</h4>
                    <div class="personal-information__content">
                        <div class="header">
                            <h5 class="header__title">My Skills</h5>
                            <button type="button" class="header__btn"><i class="bi bi-plus-lg"></i> Add New Profile</button>
                        </div>
                        <div class="information-table--wrapper">
                            <table class="information-table">
                                <thead>
                                    <tr>
                                        <th>Skill</th>
                                        <th>Level</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="information-table__tag">UI Design</span></td>
                                        <td><span class="information-table__text">Expert</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="information-table__tag">UX Design</span></td>
                                        <td><span class="information-table__text">Intermediate</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="information-table__tag">Web Development</span></td>
                                        <td><span class="information-table__text">Beginner</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- Add below block if there is no data -->
                        <!-- <div class="no-data">Add your skills</div> -->
                        <div class="button-block">
                            <button type="button" class="edit-btn">Edit</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="job-preferences">
                    <div class="job-preferences__header">
                        <h5 class="job-preferences__header-title">Job Preferences</h5>
                        <button type="button" class="edit-btn"><i class="bi bi-pencil-fill"></i></button>
                    </div>
                    <div class="job-preferences__content">
                        <div class="row mb-2">
                            <div class="col-auto"><span class="job-preferences__content-title">Industry :</span></div>
                            <div class="col"><span class="job-preferences__content-text">IT/Computers-Software ,Advertising/PR/Event</span></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-auto"><span class="job-preferences__content-title">Function :</span></div>
                            <div class="col"><span class="job-preferences__content-text">IT</span></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-auto"><span class="job-preferences__content-title">Job Type :</span></div>
                            <div class="col"><span class="job-preferences__content-text">IT Manager | Graphic Designer  | </span></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-auto"><span class="job-preferences__content-title">Role :</span></div>
                            <div class="col"><span class="job-preferences__content-text">IT Manager | Graphic Designer  | </span></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-auto"><span class="job-preferences__content-title">Employment Type :</span></div>
                            <div class="col"><span class="job-preferences__content-text">IT/Computers-Software ,Advertising/PR/Event</span></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-auto"><span class="job-preferences__content-title">Are yo willing to work 6 days a week ?</span></div>
                            <div class="col"><span class="job-preferences__content-text">No</span></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-auto"><span class="job-preferences__content-title">Are you pinto join early startup ?</span></div>
                            <div class="col"><span class="job-preferences__content-text">No</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="personal-details">
                    <div class="personal-details__header">
                        <h5 class="personal-details__header-title">Personal Details</h5>
                        <button type="button" class="edit-btn"><i class="bi bi-pencil-fill"></i></button>
                    </div>
                    <div class="personal-details__content">
                        <div class="row mb-2">
                            <div class="col-auto"><span class="personal-details__content-title">Home Town :</span></div>
                            <div class="col"><span class="personal-details__content-text">Minuwangoda</span></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-auto"><span class="personal-details__content-title">Gender :</span></div>
                            <div class="col"><span class="personal-details__content-text">Male</span></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-auto"><span class="personal-details__content-title">Marital Status :</span></div>
                            <div class="col"><span class="personal-details__content-text">Single</span></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-auto"><span class="personal-details__content-title">Passport Number :</span></div>
                            <div class="col"><span class="personal-details__content-text">1548713487N</span></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-auto"><span class="personal-details__content-title">Work Permit for USA :</span></div>
                            <div class="col"><span class="personal-details__content-text">Yes</span></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-auto"><span class="personal-details__content-title">Permanent Address :</span></div>
                            <div class="col"><span class="personal-details__content-text">No. 25/2 B, Main St, Colombo 05</span></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-auto"><span class="personal-details__content-title">Date of Birth :</span></div>
                            <div class="col"><span class="personal-details__content-text">26th June 1993</span></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-auto"><span class="personal-details__content-title">Nationality :</span></div>
                            <div class="col"><span class="personal-details__content-text">Sri Lankan</span></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-auto"><span class="personal-details__content-title">Languages :</span></div>
                            <div class="col">
                                <span class="personal-details__content-tag">Sinhala</span>
                                <span class="personal-details__content-tag">English</span>
                                <span class="personal-details__content-tag">Tamil</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  
@endsection

@push('after-scripts')

<!-- Radial Progress Fuction -->
<script>
    var forEach = function (array, callback, scope) {
        for (var i = 0; i < array.length; i++) {
            callback.call(scope, i, array[i]);
        }
    };
    window.onload = function () {
        var max = -219.99078369140625;
        forEach(document.querySelectorAll('#radialProgress .progress'), function (index, value) {
            percent = value.getAttribute('data-progress');
            value.querySelector('#radialProgress .fill').setAttribute('style', 'stroke-dashoffset: ' + ((100 - percent) / 100) * max);
            value.querySelector('#radialProgress .value').innerHTML = percent + '%';
        });
    }
</script>

@endpush
