@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')
<link rel="stylesheet" href="{{url('css/dashboard/employee/pages/profile.css')}}">

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
                            <button type="button" class="image-block__edit-btn" data-bs-toggle="modal" data-bs-target="#editProfileModal"><i class="bi bi-pencil-fill"></i></button>
                        </div>
                        <div class="name">Pawani Anuththara</div>
                        <div class="country">
                            <img src="https://purecatamphetamine.github.io/country-flag-icons/3x2/LK.svg" class="country__flag">
                            <div class="country__name">Sri Lanka</div>
                        </div>
                        <div class="info-block">
                            <div class="row mb-3">
                                <div class="col-auto">
                                    <span class="info-block__title"><i class="bi bi-briefcase-fill"></i>Experience</span>
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
                            <button type="button" class="cta-btn" data-bs-toggle="modal" data-bs-target="#addNewProfile"><i class="bi bi-plus-lg"></i> Add New Profile</button>
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
                            <button type="button" class="header__btn" data-bs-toggle="modal" data-bs-target="#addSkillModal"><i class="bi bi-plus-lg"></i> Add More Skills</button>
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
                                    @if(count($personal_informations) != 0)
                                        @foreach($personal_informations as $personal_information)
                                            <tr>
                                                <td><span class="information-table__tag">{{$personal_information->skill}}</span></td>
                                                <td><span class="information-table__text">{{$personal_information->level}}</span></td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    <!-- <tr>
                                        <td><span class="information-table__tag">UX Design</span></td>
                                        <td><span class="information-table__text">Intermediate</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="information-table__tag">Web Development</span></td>
                                        <td><span class="information-table__text">Beginner</span></td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>
                        <!-- Add below block if there is no data -->
                        <!-- <div class="no-data">Add your skills</div> -->
                        <div class="button-block">
                            <button type="button" class="edit-btn" data-bs-toggle="modal" data-bs-target="#editSkillModal">Edit</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="job-preferences">
                    <div class="job-preferences__header">
                        <h5 class="job-preferences__header-title">Job Preferences</h5>
                        <button type="button" class="edit-btn" data-bs-toggle="modal" data-bs-target="#jobPreferenceModal"><i class="bi bi-pencil-fill"></i></button>
                    </div>
                    <div class="job-preferences__content">
                        <div class="row mb-2">
                            <div class="col-auto"><span class="job-preferences__content-title">Industry :</span></div>
                            <div class="col"><span class="job-preferences__content-text">{{$profile->industry}}</span></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-auto"><span class="job-preferences__content-title">Function :</span></div>
                            <div class="col"><span class="job-preferences__content-text">{{$profile->function}}</span></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-auto"><span class="job-preferences__content-title">Job Type :</span></div>
                            <div class="col"><span class="job-preferences__content-text">{{$profile->job_type}}</span></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-auto"><span class="job-preferences__content-title">Employment Type :</span></div>
                            <div class="col"><span class="job-preferences__content-text">{{$profile->employment_type}}</span></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-auto"><span class="job-preferences__content-title">Are yo willing to work 6 days a week ?</span></div>
                            <div class="col"><span class="job-preferences__content-text">{{$profile->six_days}}</span></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-auto"><span class="job-preferences__content-title">Are you open to join early stage startups?</span></div>
                            <div class="col"><span class="job-preferences__content-text">{{$profile->startup}}</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="personal-details">
                    <div class="personal-details__header">
                        <h5 class="personal-details__header-title">Personal Details</h5>
                        <button type="button" class="edit-btn" data-bs-toggle="modal" data-bs-target="#personalDetailsModal"><i class="bi bi-pencil-fill"></i></button>
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
            <div class="col-12">
                <div class="experience-block">
                    <div class="experience-block__header">
                        <h5 class="experience-block__header-title">Work Experience</h5>
                        <button type="button" class="experience-block__header-btn" data-bs-toggle="modal" data-bs-target="#addWorkExperienceModal"><i class="bi bi-plus-lg"></i> Add More</button>
                    </div>
                    <div class="experience-items">

                        @if(count($work_experiences) != 0)
                            @foreach($work_experiences as $work_expirence)
                                <div class="experience-items__item">
                                    <div class="title">{{$work_expirence->name}}</div>
                                    <div class="subtitle"><i class="bi bi-building"></i>{{$work_expirence->company}}</div>
                                    <div class="duration"><i class="bi bi-calendar-event"></i>{{ date('d M Y', strtotime($work_expirence->start_date)) }} - 
                                    @if($work_expirence->present == 'on')
                                        Present
                                    @else
                                        {{ date('d M Y', strtotime($work_expirence->end_date)) }}
                                    @endif
                                    </div>

                                    <p class="description">{!!$work_expirence->description!!}</p>
                                    <div class="button-block">
                                        <button type="button" class="edit-btn" data-bs-toggle="modal" data-bs-target="#editWorkExperienceModal{{$work_expirence->id}}">Edit</button>
                                        <a href="{{ route('frontend.user.work_experience.destroy', $work_expirence->id) }}" class="delete delete-btn" data-bs-toggle="modal" data-bs-target="#delWorkExperienceModal">Delete</a>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                       
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="experience-block">
                    <div class="experience-block__header">
                        <h5 class="experience-block__header-title">Educational Details</h5>
                        <button type="button" class="experience-block__header-btn" data-bs-toggle="modal" data-bs-target="#addEduDetailsModal"><i class="bi bi-plus-lg"></i> Add More</button>
                    </div>
                    <div class="experience-items">

                    
                        @if(count($educational_details) != 0)
                            @foreach($educational_details as $educational_detail)
                                <div class="experience-items__item">
                                    <div class="title">{{$educational_detail->name}}</div>
                                    <div class="subtitle"><i class="bi bi-building"></i>{{$educational_detail->university}}</div>
                                    <div class="duration"><i class="bi bi-calendar-event"></i>{{ date('d M Y', strtotime($educational_detail->start_date)) }} - 
                                    @if($educational_detail->present == 'on')
                                        Present
                                    @else
                                        {{ date('d M Y', strtotime($educational_detail->end_date)) }}
                                    @endif
                                    </div>

                                    <p class="description">{!!$educational_detail->description!!}</p>
                                    <div class="button-block">
                                        <button type="button" class="edit-btn" data-bs-toggle="modal" data-bs-target="#editEduDetailsModal{{$educational_detail->id}}">Edit</button>
                                        <a href="{{ route('frontend.user.educational_details.destroy', $educational_detail->id) }}" class="delete_edu delete-btn" data-bs-toggle="modal" data-bs-target="#delEduModal">Delete</a>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                       
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="experience-block">
                    <div class="experience-block__header">
                        <h5 class="experience-block__header-title">Projects</h5>
                        <button type="button" class="experience-block__header-btn" data-bs-toggle="modal" data-bs-target="#addProjectsModal"><i class="bi bi-plus-lg"></i> Add More</button>
                    </div>
                    <div class="experience-items">

                        @if(count($profile_projects) != 0)
                            @foreach($profile_projects as $profile_project)
                                <div class="experience-items__item">
                                    <div class="title">{{$profile_project->name}}</div>
                                    <div class="subtitle"><i class="bi bi-building"></i>{{$profile_project->company}}</div>
                                    <div class="duration"><i class="bi bi-calendar-event"></i>{{ date('d M Y', strtotime($profile_project->start_date)) }} - 
                                    @if($profile_project->present == 'on')
                                        Present
                                    @else
                                        {{ date('d M Y', strtotime($profile_project->end_date)) }}
                                    @endif
                                    </div>

                                    <p class="description">{!!$profile_project->description!!}</p>
                                    <div class="button-block">
                                        <button type="button" class="edit-btn" data-bs-toggle="modal" data-bs-target="#editProjectsModal{{$profile_project->id}}">Edit</button>
                                        <a href="{{ route('frontend.user.profile_projects.destroy', $profile_project->id) }}" class="delete_project delete-btn" data-bs-toggle="modal" data-bs-target="#delProjectsModal">Delete</a>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Edit Profile Modal -->
<div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProfileModalLabel">Edit Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row g-3">
                    <div class="col-12">
                        <label class="form-label">Profile Name :</label>
                        <input type="text" class="form-control" name="profile_name">
                    </div>
                    <div class="col-12">
                        <label class="form-label">Profile Picture :</label>
                        <input type="file" class="form-control" aria-label="Upload">
                    </div>
                    <div class="col-12">
                        <label class="form-label">Your Name :</label>
                        <input type="text" class="form-control" name="profile_name">
                    </div>
                    <div class="col-12">
                        <label class="form-label">Country :</label>
                        <select name="country" class="form-control" id="country">
                            <option selected disabled>Select a country ... </option>
                            <optgroup id="country-optgroup-Africa" label="Africa">
                                <option value="DZ" label="Algeria">Algeria</option>
                                <option value="AO" label="Angola">Angola</option>
                                <option value="BJ" label="Benin">Benin</option>
                                <option value="BW" label="Botswana">Botswana</option>
                                <option value="BF" label="Burkina Faso">Burkina Faso</option>
                                <option value="BI" label="Burundi">Burundi</option>
                                <option value="CM" label="Cameroon">Cameroon</option>
                                <option value="CV" label="Cape Verde">Cape Verde</option>
                                <option value="CF" label="Central African Republic">Central African Republic</option>
                                <option value="TD" label="Chad">Chad</option>
                                <option value="KM" label="Comoros">Comoros</option>
                                <option value="CG" label="Congo - Brazzaville">Congo - Brazzaville</option>
                                <option value="CD" label="Congo - Kinshasa">Congo - Kinshasa</option>
                                <option value="CI" label="Côte d’Ivoire">Côte d’Ivoire</option>
                                <option value="DJ" label="Djibouti">Djibouti</option>
                                <option value="EG" label="Egypt">Egypt</option>
                                <option value="GQ" label="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="ER" label="Eritrea">Eritrea</option>
                                <option value="ET" label="Ethiopia">Ethiopia</option>
                                <option value="GA" label="Gabon">Gabon</option>
                                <option value="GM" label="Gambia">Gambia</option>
                                <option value="GH" label="Ghana">Ghana</option>
                                <option value="GN" label="Guinea">Guinea</option>
                                <option value="GW" label="Guinea-Bissau">Guinea-Bissau</option>
                                <option value="KE" label="Kenya">Kenya</option>
                                <option value="LS" label="Lesotho">Lesotho</option>
                                <option value="LR" label="Liberia">Liberia</option>
                                <option value="LY" label="Libya">Libya</option>
                                <option value="MG" label="Madagascar">Madagascar</option>
                                <option value="MW" label="Malawi">Malawi</option>
                                <option value="ML" label="Mali">Mali</option>
                                <option value="MR" label="Mauritania">Mauritania</option>
                                <option value="MU" label="Mauritius">Mauritius</option>
                                <option value="YT" label="Mayotte">Mayotte</option>
                                <option value="MA" label="Morocco">Morocco</option>
                                <option value="MZ" label="Mozambique">Mozambique</option>
                                <option value="NA" label="Namibia">Namibia</option>
                                <option value="NE" label="Niger">Niger</option>
                                <option value="NG" label="Nigeria">Nigeria</option>
                                <option value="RW" label="Rwanda">Rwanda</option>
                                <option value="RE" label="Réunion">Réunion</option>
                                <option value="SH" label="Saint Helena">Saint Helena</option>
                                <option value="SN" label="Senegal">Senegal</option>
                                <option value="SC" label="Seychelles">Seychelles</option>
                                <option value="SL" label="Sierra Leone">Sierra Leone</option>
                                <option value="SO" label="Somalia">Somalia</option>
                                <option value="ZA" label="South Africa">South Africa</option>
                                <option value="SD" label="Sudan">Sudan</option>
                                <option value="SZ" label="Swaziland">Swaziland</option>
                                <option value="ST" label="São Tomé and Príncipe">São Tomé and Príncipe</option>
                                <option value="TZ" label="Tanzania">Tanzania</option>
                                <option value="TG" label="Togo">Togo</option>
                                <option value="TN" label="Tunisia">Tunisia</option>
                                <option value="UG" label="Uganda">Uganda</option>
                                <option value="EH" label="Western Sahara">Western Sahara</option>
                                <option value="ZM" label="Zambia">Zambia</option>
                                <option value="ZW" label="Zimbabwe">Zimbabwe</option>
                            </optgroup>
                            <optgroup id="country-optgroup-Americas" label="Americas">
                                <option value="AI" label="Anguilla">Anguilla</option>
                                <option value="AG" label="Antigua and Barbuda">Antigua and Barbuda</option>
                                <option value="AR" label="Argentina">Argentina</option>
                                <option value="AW" label="Aruba">Aruba</option>
                                <option value="BS" label="Bahamas">Bahamas</option>
                                <option value="BB" label="Barbados">Barbados</option>
                                <option value="BZ" label="Belize">Belize</option>
                                <option value="BM" label="Bermuda">Bermuda</option>
                                <option value="BO" label="Bolivia">Bolivia</option>
                                <option value="BR" label="Brazil">Brazil</option>
                                <option value="VG" label="British Virgin Islands">British Virgin Islands</option>
                                <option value="CA" label="Canada">Canada</option>
                                <option value="KY" label="Cayman Islands">Cayman Islands</option>
                                <option value="CL" label="Chile">Chile</option>
                                <option value="CO" label="Colombia">Colombia</option>
                                <option value="CR" label="Costa Rica">Costa Rica</option>
                                <option value="CU" label="Cuba">Cuba</option>
                                <option value="DM" label="Dominica">Dominica</option>
                                <option value="DO" label="Dominican Republic">Dominican Republic</option>
                                <option value="EC" label="Ecuador">Ecuador</option>
                                <option value="SV" label="El Salvador">El Salvador</option>
                                <option value="FK" label="Falkland Islands">Falkland Islands</option>
                                <option value="GF" label="French Guiana">French Guiana</option>
                                <option value="GL" label="Greenland">Greenland</option>
                                <option value="GD" label="Grenada">Grenada</option>
                                <option value="GP" label="Guadeloupe">Guadeloupe</option>
                                <option value="GT" label="Guatemala">Guatemala</option>
                                <option value="GY" label="Guyana">Guyana</option>
                                <option value="HT" label="Haiti">Haiti</option>
                                <option value="HN" label="Honduras">Honduras</option>
                                <option value="JM" label="Jamaica">Jamaica</option>
                                <option value="MQ" label="Martinique">Martinique</option>
                                <option value="MX" label="Mexico">Mexico</option>
                                <option value="MS" label="Montserrat">Montserrat</option>
                                <option value="AN" label="Netherlands Antilles">Netherlands Antilles</option>
                                <option value="NI" label="Nicaragua">Nicaragua</option>
                                <option value="PA" label="Panama">Panama</option>
                                <option value="PY" label="Paraguay">Paraguay</option>
                                <option value="PE" label="Peru">Peru</option>
                                <option value="PR" label="Puerto Rico">Puerto Rico</option>
                                <option value="BL" label="Saint Barthélemy">Saint Barthélemy</option>
                                <option value="KN" label="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                <option value="LC" label="Saint Lucia">Saint Lucia</option>
                                <option value="MF" label="Saint Martin">Saint Martin</option>
                                <option value="PM" label="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                <option value="VC" label="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                <option value="SR" label="Suriname">Suriname</option>
                                <option value="TT" label="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="TC" label="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                <option value="VI" label="U.S. Virgin Islands">U.S. Virgin Islands</option>
                                <option value="US" label="United States">United States</option>
                                <option value="UY" label="Uruguay">Uruguay</option>
                                <option value="VE" label="Venezuela">Venezuela</option>
                            </optgroup>
                            <optgroup id="country-optgroup-Asia" label="Asia">
                                <option value="AF" label="Afghanistan">Afghanistan</option>
                                <option value="AM" label="Armenia">Armenia</option>
                                <option value="AZ" label="Azerbaijan">Azerbaijan</option>
                                <option value="BH" label="Bahrain">Bahrain</option>
                                <option value="BD" label="Bangladesh">Bangladesh</option>
                                <option value="BT" label="Bhutan">Bhutan</option>
                                <option value="BN" label="Brunei">Brunei</option>
                                <option value="KH" label="Cambodia">Cambodia</option>
                                <option value="CN" label="China">China</option>
                                <option value="GE" label="Georgia">Georgia</option>
                                <option value="HK" label="Hong Kong SAR China">Hong Kong SAR China</option>
                                <option value="IN" label="India">India</option>
                                <option value="ID" label="Indonesia">Indonesia</option>
                                <option value="IR" label="Iran">Iran</option>
                                <option value="IQ" label="Iraq">Iraq</option>
                                <option value="IL" label="Israel">Israel</option>
                                <option value="JP" label="Japan">Japan</option>
                                <option value="JO" label="Jordan">Jordan</option>
                                <option value="KZ" label="Kazakhstan">Kazakhstan</option>
                                <option value="KW" label="Kuwait">Kuwait</option>
                                <option value="KG" label="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="LA" label="Laos">Laos</option>
                                <option value="LB" label="Lebanon">Lebanon</option>
                                <option value="MO" label="Macau SAR China">Macau SAR China</option>
                                <option value="MY" label="Malaysia">Malaysia</option>
                                <option value="MV" label="Maldives">Maldives</option>
                                <option value="MN" label="Mongolia">Mongolia</option>
                                <option value="MM" label="Myanmar [Burma]">Myanmar [Burma]</option>
                                <option value="NP" label="Nepal">Nepal</option>
                                <option value="NT" label="Neutral Zone">Neutral Zone</option>
                                <option value="KP" label="North Korea">North Korea</option>
                                <option value="OM" label="Oman">Oman</option>
                                <option value="PK" label="Pakistan">Pakistan</option>
                                <option value="PS" label="Palestinian Territories">Palestinian Territories</option>
                                <option value="YD" label="People's Democratic Republic of Yemen">People's Democratic Republic of Yemen</option>
                                <option value="PH" label="Philippines">Philippines</option>
                                <option value="QA" label="Qatar">Qatar</option>
                                <option value="SA" label="Saudi Arabia">Saudi Arabia</option>
                                <option value="SG" label="Singapore">Singapore</option>
                                <option value="KR" label="South Korea">South Korea</option>
                                <option value="LK" label="Sri Lanka">Sri Lanka</option>
                                <option value="SY" label="Syria">Syria</option>
                                <option value="TW" label="Taiwan">Taiwan</option>
                                <option value="TJ" label="Tajikistan">Tajikistan</option>
                                <option value="TH" label="Thailand">Thailand</option>
                                <option value="TL" label="Timor-Leste">Timor-Leste</option>
                                <option value="TR" label="Turkey">Turkey</option>
                                <option value="TM" label="Turkmenistan">Turkmenistan</option>
                                <option value="AE" label="United Arab Emirates">United Arab Emirates</option>
                                <option value="UZ" label="Uzbekistan">Uzbekistan</option>
                                <option value="VN" label="Vietnam">Vietnam</option>
                                <option value="YE" label="Yemen">Yemen</option>
                            </optgroup>
                            <optgroup id="country-optgroup-Europe" label="Europe">
                                <option value="AL" label="Albania">Albania</option>
                                <option value="AD" label="Andorra">Andorra</option>
                                <option value="AT" label="Austria">Austria</option>
                                <option value="BY" label="Belarus">Belarus</option>
                                <option value="BE" label="Belgium">Belgium</option>
                                <option value="BA" label="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                <option value="BG" label="Bulgaria">Bulgaria</option>
                                <option value="HR" label="Croatia">Croatia</option>
                                <option value="CY" label="Cyprus">Cyprus</option>
                                <option value="CZ" label="Czech Republic">Czech Republic</option>
                                <option value="DK" label="Denmark">Denmark</option>
                                <option value="DD" label="East Germany">East Germany</option>
                                <option value="EE" label="Estonia">Estonia</option>
                                <option value="FO" label="Faroe Islands">Faroe Islands</option>
                                <option value="FI" label="Finland">Finland</option>
                                <option value="FR" label="France">France</option>
                                <option value="DE" label="Germany">Germany</option>
                                <option value="GI" label="Gibraltar">Gibraltar</option>
                                <option value="GR" label="Greece">Greece</option>
                                <option value="GG" label="Guernsey">Guernsey</option>
                                <option value="HU" label="Hungary">Hungary</option>
                                <option value="IS" label="Iceland">Iceland</option>
                                <option value="IE" label="Ireland">Ireland</option>
                                <option value="IM" label="Isle of Man">Isle of Man</option>
                                <option value="IT" label="Italy">Italy</option>
                                <option value="JE" label="Jersey">Jersey</option>
                                <option value="LV" label="Latvia">Latvia</option>
                                <option value="LI" label="Liechtenstein">Liechtenstein</option>
                                <option value="LT" label="Lithuania">Lithuania</option>
                                <option value="LU" label="Luxembourg">Luxembourg</option>
                                <option value="MK" label="Macedonia">Macedonia</option>
                                <option value="MT" label="Malta">Malta</option>
                                <option value="FX" label="Metropolitan France">Metropolitan France</option>
                                <option value="MD" label="Moldova">Moldova</option>
                                <option value="MC" label="Monaco">Monaco</option>
                                <option value="ME" label="Montenegro">Montenegro</option>
                                <option value="NL" label="Netherlands">Netherlands</option>
                                <option value="NO" label="Norway">Norway</option>
                                <option value="PL" label="Poland">Poland</option>
                                <option value="PT" label="Portugal">Portugal</option>
                                <option value="RO" label="Romania">Romania</option>
                                <option value="RU" label="Russia">Russia</option>
                                <option value="SM" label="San Marino">San Marino</option>
                                <option value="RS" label="Serbia">Serbia</option>
                                <option value="CS" label="Serbia and Montenegro">Serbia and Montenegro</option>
                                <option value="SK" label="Slovakia">Slovakia</option>
                                <option value="SI" label="Slovenia">Slovenia</option>
                                <option value="ES" label="Spain">Spain</option>
                                <option value="SJ" label="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                <option value="SE" label="Sweden">Sweden</option>
                                <option value="CH" label="Switzerland">Switzerland</option>
                                <option value="UA" label="Ukraine">Ukraine</option>
                                <option value="SU" label="Union of Soviet Socialist Republics">Union of Soviet Socialist Republics</option>
                                <option value="GB" label="United Kingdom">United Kingdom</option>
                                <option value="VA" label="Vatican City">Vatican City</option>
                                <option value="AX" label="Åland Islands">Åland Islands</option>
                            </optgroup>
                            <optgroup id="country-optgroup-Oceania" label="Oceania">
                                <option value="AS" label="American Samoa">American Samoa</option>
                                <option value="AQ" label="Antarctica">Antarctica</option>
                                <option value="AU" label="Australia">Australia</option>
                                <option value="BV" label="Bouvet Island">Bouvet Island</option>
                                <option value="IO" label="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                <option value="CX" label="Christmas Island">Christmas Island</option>
                                <option value="CC" label="Cocos [Keeling] Islands">Cocos [Keeling] Islands</option>
                                <option value="CK" label="Cook Islands">Cook Islands</option>
                                <option value="FJ" label="Fiji">Fiji</option>
                                <option value="PF" label="French Polynesia">French Polynesia</option>
                                <option value="TF" label="French Southern Territories">French Southern Territories</option>
                                <option value="GU" label="Guam">Guam</option>
                                <option value="HM" label="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
                                <option value="KI" label="Kiribati">Kiribati</option>
                                <option value="MH" label="Marshall Islands">Marshall Islands</option>
                                <option value="FM" label="Micronesia">Micronesia</option>
                                <option value="NR" label="Nauru">Nauru</option>
                                <option value="NC" label="New Caledonia">New Caledonia</option>
                                <option value="NZ" label="New Zealand">New Zealand</option>
                                <option value="NU" label="Niue">Niue</option>
                                <option value="NF" label="Norfolk Island">Norfolk Island</option>
                                <option value="MP" label="Northern Mariana Islands">Northern Mariana Islands</option>
                                <option value="PW" label="Palau">Palau</option>
                                <option value="PG" label="Papua New Guinea">Papua New Guinea</option>
                                <option value="PN" label="Pitcairn Islands">Pitcairn Islands</option>
                                <option value="WS" label="Samoa">Samoa</option>
                                <option value="SB" label="Solomon Islands">Solomon Islands</option>
                                <option value="GS" label="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                <option value="TK" label="Tokelau">Tokelau</option>
                                <option value="TO" label="Tonga">Tonga</option>
                                <option value="TV" label="Tuvalu">Tuvalu</option>
                                <option value="UM" label="U.S. Minor Outlying Islands">U.S. Minor Outlying Islands</option>
                                <option value="VU" label="Vanuatu">Vanuatu</option>
                                <option value="WF" label="Wallis and Futuna">Wallis and Futuna</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Experience :</label>
                        <input type="text" class="form-control" name="experience">
                    </div>
                    <div class="col-12">
                        <label class="form-label">Roles :</label>
                        <ul class="tag-input">
                            <input type="text" name="roles">
                        </ul>
                        <input type="hidden" name="roles_tags">
                    </div>
                    <div class="col-12">
                        <label class="form-label">Phone :</label>
                        <input type="tel" class="form-control" name="phone">
                    </div>
                    <div class="col-12">
                        <label class="form-label">Email :</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Add New Profile Modal -->
<div class="modal fade" id="addNewProfile" tabindex="-1" aria-labelledby="addNewProfileLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addNewProfileLabel">Add New Profile</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row g-3">
            <div class="col-12">
                <label class="form-label">Profile Name :</label>
                <input type="text" class="form-control" name="profile_name">
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="copy_data">
                    <label class="form-check-label">
                        Import data from previous profile
                    </label>
                </div>
            </div>
            <div class="col-12">
                <label class="form-label">Select Profile :</label>
                <select name="select_profile" class="form-control">
                    <option selected disabled>Select ...</option>
                    <option>Profile 1</option>
                    <option>Profile 2</option>
                </select>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Create New Profile</button>
      </div>
    </div>
  </div>
</div>

<!-- Add Skill Modal -->
<div class="modal fade" id="addSkillModal" tabindex="-1" aria-labelledby="addSkillModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addSkillModalLabel">Add Skills</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <form action="{{route('frontend.user.skill.add')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label">Skill :</label>
                        <input type="text" class="form-control" name="skill" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Level :</label>
                        <select name="level" class="form-control" required>
                            <option value="" selected disabled>Select...</option>
                            <option value="Beginner">Beginner</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Expert">Expert</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input type="hidden" name="hidden_profile_id" value="{{$profile->id}}">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Add Skill</button>
            </div>
        </form>

    </div>
  </div>
</div>

<!-- Edit Skill Modal -->
<div class="modal fade" id="editSkillModal" tabindex="-1" aria-labelledby="editSkillModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editSkillModalLabel">Edit Skills</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
        <div class="modal-body">

            @if(count($personal_informations) != 0)
                @foreach($personal_informations as $personal_information)
                                        
                <form action="{{route('frontend.user.skill.update')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                    <div class="skill-row">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label">Skill :</label>
                                <input type="text" class="form-control" name="skill" value="{{$personal_information->skill}}" required>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Level :</label>
                                <select name="level" class="form-control" required>
                                    <option value="" selected disabled>Select...</option>
                                    <option value="Beginner" {{$personal_information->level == 'Beginner' ? "selected" : "" }}>Beginner</option>
                                    <option value="Intermediate" {{$personal_information->level == 'Intermediate' ? "selected" : "" }}>Intermediate</option>
                                    <option value="Expert" {{$personal_information->level == 'Expert' ? "selected" : "" }}>Expert</option>
                                </select>
                            </div>
                            <input type="hidden" name="hidden_profile_id" value="{{$profile->id}}">
                            <input type="hidden" name="hidden_id" value="{{$personal_information->id}}">

                            <div class="col-md-2 d-flex align-items-end">                
                                <a href="{{ route('frontend.user.skill.destroy', $personal_information->id) }}" class="delete_skill btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#delskillModal">Delete</a>
                            </div>
                            <div class="col-md-2 d-flex align-items-end">                           
                                <button type="submit" class="btn btn-outline-success">Save</button>
                            </div>
                        </div>
                    </div>
                </form>

                @endforeach
            @endif
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
    </div>
  </div>
</div>


<!-- Delete Projects Modal -->

<div class="modal fade" id="delskillModal" tabindex="-1" aria-labelledby="delskillModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="delskillModalLabel">Delete ?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure want to delete?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <a href="" class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>
</div>


<!-- Job Preference Modal -->
<div class="modal fade" id="jobPreferenceModal" tabindex="-1" aria-labelledby="jobPreferenceModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="jobPreferenceModalLabel">Job Preferences</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <form action="{{route('frontend.user.job_preference.update')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
            <div class="modal-body">
                <div class="row g-3">
                    <div class="col-12">
                        <label class="form-label">Industry :</label>
                        <input type="text" class="form-control" name="industry" value="{{$profile->industry}}">
                    </div>
                    <div class="col-12">
                        <label class="form-label">Function :</label>
                        <input type="text" class="form-control" name="function" value="{{$profile->function}}">
                    </div>
                    <div class="col-12">
                        <label class="form-label">Job Type :</label>
                        <input type="text" class="form-control" name="job_type" value="{{$profile->job_type}}">
                    </div>
                    <div class="col-12">
                        <label class="form-label">Employment Type :</label>
                        <input type="text" class="form-control" name="employment_type" value="{{$profile->employment_type}}">
                    </div>
                    <div class="col-12">
                        <label class="form-label">Are you willing to work 6 days a week?</label>
                        <select name="six_days" class="form-control" required>
                            <option value="" selected disabled>Select...</option>
                            <option value="Yes" {{$profile->six_days == 'Yes' ? "selected" : ""}}>Yes</option>
                            <option Value="No" {{$profile->six_days == 'No' ? "selected" : ""}}>No</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Are you open to join early stage startups?</label>
                        <select name="startup" class="form-control" required>
                            <option value="" selected disabled>Select...</option>
                            <option value="Yes" {{$profile->startup == 'Yes' ? "selected" : ""}}>Yes</option>
                            <option Value="No" {{$profile->startup == 'No' ? "selected" : ""}}>No</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input type="hidden" name="hidden_profile_id" value="{{$profile->id}}">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Save changes</button>
            </div>
        </form>
    </div>
  </div>
</div>

<!-- Personal Details Modal -->
<div class="modal fade" id="personalDetailsModal" tabindex="-1" aria-labelledby="personalDetailsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="personalDetailsModalLabel">Personal Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row g-3">
            <div class="col-12">
                <label class="form-label">Home Town :</label>
                <input type="text" class="form-control" name="home_town">
            </div>
            <div class="col-12">
                <label class="form-label">Gender :</label>
                <select name="gender" class="form-control">
                    <option selected disabled>Select...</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Other</option>
                </select>
            </div>
            <div class="col-12">
                <label class="form-label">Marital Status :</label>
                <select name="marital_status" class="form-control">
                    <option selected disabled>Select...</option>
                    <option>Single</option>
                    <option>Married</option>
                    <option>Divorced</option>
                </select>
            </div>
            <div class="col-12">
                <label class="form-label">Passport No :</label>
                <input type="text" class="form-control" name="passport">
            </div>
            <div class="col-12">
                <label class="form-label">Work Permit for USA :</label>
                <select name="usa_permit" class="form-control">
                    <option selected disabled>Select...</option>
                    <option>Yes</option>
                    <option>No</option>
                </select>
            </div>
            <div class="col-12">
                <label class="form-label">Permanent Address :</label>
                <input type="text" class="form-control" name="address">
            </div>
            <div class="col-12">
                <label class="form-label">Date of Birth :</label>
                <input type="date" class="form-control" name="birthday">
            </div>
            <div class="col-12">
                <label class="form-label">Nationality :</label>
                <input type="text" class="form-control" name="nationality">
            </div>
            <div class="col-12">
                <label class="form-label">Languages :</label>
                <ul class="tag-input">
                    <input type="text" name="languages">
                </ul>
                <input type="hidden" name="languages_tags">
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<!-- Add Work Experience Modal -->
<div class="modal fade" id="addWorkExperienceModal" tabindex="-1" aria-labelledby="addWorkExperienceModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addWorkExperienceModalLabel">Add Work Experience</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('frontend.user.work_experience.add')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
            <div class="modal-body">
                <div class="row g-3">
                    <div class="col-12">
                        <label class="form-label">Designation :</label>
                        <input type="text" class="form-control" name="designation" required>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Company :</label>
                        <input type="text" class="form-control" name="company" required>
                    </div>
                    <div class="col-12">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="present_work" onchange="myFunction()" name="present">
                            <label class="form-check-label" for="present_work">
                                I am currently working in this role
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Start Date :</label>
                        <input type="date" class="form-control" name="start_date" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">End Date :</label>
                        <input type="date" class="form-control" id="work_end_date" name="end_date" required>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Description :</label>
                        <textarea name="description" class="form-control" id="editor_work_experience"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input type="hidden" name="hidden_profile_id" value="{{$profile->id}}">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Add</button>
            </div>
        </form>
    </div>
  </div>
</div>

<!-- Edit Work Experience Modal -->

@if(count($work_experiences) != 0)
    @foreach($work_experiences as $work_expirence)
        <div class="modal fade" id="editWorkExperienceModal{{$work_expirence->id}}" tabindex="-1" aria-labelledby="editWorkExperienceModalLabel{{$work_expirence->id}}" aria-hidden="true">
            <div class="modal-dialog  modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editWorkExperienceModalLabel{{$work_expirence->id}}">Edit Work Experience</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <form action="{{route('frontend.user.work_experience.update')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                        <div class="modal-body">
                            <div class="row g-3">
                                <div class="col-12">
                                    <label class="form-label">Designation :</label>
                                    <input type="text" class="form-control" name="designation" value="{{$work_expirence->name}}" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Company :</label>
                                    <input type="text" class="form-control" name="company" value="{{$work_expirence->company}}" required>
                                </div>
                                <div class="col-12">
                                    <div class="form-check form-switch">
                                        @if($work_expirence->present == 'on')
                                            <input class="form-check-input" type="checkbox" id="present_work_edit{{$work_expirence->id}}" onchange="myFunctionEdit()" name="present" checked>
                                        @else
                                            <input class="form-check-input" type="checkbox" id="present_work_edit{{$work_expirence->id}}" onchange="myFunctionEdit()" name="present">
                                        @endif
                                        <label class="form-check-label" for="present_work_edit{{$work_expirence->id}}">
                                            I am currently working in this role
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Start Date :</label>
                                    <input type="date" class="form-control" name="start_date" value="{{$work_expirence->start_date}}" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">End Date :</label>
                                    <input type="date" class="form-control" id="work_end_date_edit{{$work_expirence->id}}" value="{{$work_expirence->end_date}}" name="end_date" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Description :</label>
                                    <textarea name="description" class="form-control" id="editor_work_experience_edit{{$work_expirence->id}}">{!!$work_expirence->description!!}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="hidden_profile_id" value="{{$profile->id}}">
                            <input type="hidden" name="hidden_id" value="{{$work_expirence->id}}">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endif

<!-- Delete Work Experience Modal -->
<div class="modal fade" id="delWorkExperienceModal" tabindex="-1" aria-labelledby="delWorkExperienceModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="delWorkExperienceModalLabel">Delete ?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure want to delete?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <a href="" class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>
</div>

<!-- Add Educational Details Modal -->
<div class="modal fade" id="addEduDetailsModal" tabindex="-1" aria-labelledby="addEduDetailsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addEduDetailsModalLabel">Add Educational Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <form action="{{route('frontend.user.educational_details.add')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
            <div class="modal-body">
                <div class="row g-3">
                    <div class="col-12">
                        <label class="form-label">Title :</label>
                        <input type="text" class="form-control" name="title" required>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Institute :</label>
                        <input type="text" class="form-control" name="institute" required>
                    </div>
                    <div class="col-12">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="present_edu" onchange="myFunctionEdu()" name="present">
                            <label class="form-check-label" for="present_edu">
                                I am currently working in this role
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Start Date :</label>
                        <input type="date" class="form-control" name="start_date" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">End Date :</label>
                        <input type="date" class="form-control" id="edu_end_date" name="end_date" required>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Description :</label>
                        <textarea name="description" class="form-control" id="editor_edu"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input type="hidden" name="hidden_profile_id" value="{{$profile->id}}">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Add</button>
            </div>
        </form>
    </div>
  </div>
</div>

@if(count($educational_details) != 0)
    @foreach($educational_details as $educational_detail)

        <!-- Edit Educational Details Modal -->
        <div class="modal fade" id="editEduDetailsModal{{$educational_detail->id}}" tabindex="-1" aria-labelledby="editEduDetailsModalLabel{{$educational_detail->id}}" aria-hidden="true">
            <div class="modal-dialog  modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editEduDetailsModalLabel{{$educational_detail->id}}">Edit Educational Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <form action="{{route('frontend.user.educational_details.update')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-12">
                                <label class="form-label">Title :</label>
                                <input type="text" class="form-control" name="title" value="{{$educational_detail->name}}" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Institute :</label>
                                <input type="text" class="form-control" name="institute" value="{{$educational_detail->university}}" required>
                            </div>
                            <div class="col-12">
                                <div class="form-check form-switch">
                                    @if($educational_detail->present == 'on')
                                        <input class="form-check-input" type="checkbox" id="present_edu_edit{{$educational_detail->id}}" onchange="myFunctionEduEdit()" name="present" checked>
                                    @else
                                        <input class="form-check-input" type="checkbox" id="present_edu_edit{{$educational_detail->id}}" onchange="myFunctionEduEdit()" name="present">
                                    @endif
                                    <label class="form-check-label" for="present_edu_edit{{$educational_detail->id}}">
                                        I am currently working in this role
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Start Date :</label>
                                <input type="date" class="form-control" name="start_date" value="{{$educational_detail->start_date}}" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">End Date :</label>
                                <input type="date" class="form-control" id="edu_end_date_edit{{$educational_detail->id}}" value="{{$educational_detail->end_date}}" name="end_date" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Description :</label>
                                <textarea name="description" class="form-control" id="editor_edu_edit{{$educational_detail->id}}">{!!$educational_detail->description!!}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="hidden_profile_id" value="{{$profile->id}}">
                        <input type="hidden" name="hidden_id" value="{{$educational_detail->id}}">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    @endforeach
@endif

<!-- Delete Educational Details Modal -->

  <div class="modal fade" id="delEduModal" tabindex="-1" aria-labelledby="delEduModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="delEduModalLabel">Delete ?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure want to delete?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <a href="" class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>
</div>


<!-- Add Projects Modal -->
<div class="modal fade" id="addProjectsModal" tabindex="-1" aria-labelledby="addProjectsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addProjectsModalLabel">Add Project</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('frontend.user.profile_projects.add')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
            <div class="modal-body">
                <div class="row g-3">
                    <div class="col-12">
                        <label class="form-label">Project Name :</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Company :</label>
                        <input type="text" class="form-control" name="company" required>
                    </div>
                    <div class="col-12">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="present_profile_project" onchange="myFunctionProject()" name="present">
                            <label class="form-check-label" for="present_profile_project">
                                I am currently working in this role
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Start Date :</label>
                        <input type="date" class="form-control" name="start_date" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">End Date :</label>
                        <input type="date" class="form-control" id="profile_project_end_date" name="end_date" required>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Description :</label>
                        <textarea name="description" class="form-control" id="editor_profile_project"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input type="hidden" name="hidden_profile_id" value="{{$profile->id}}">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Add</button>
            </div>
        </form>
    </div>
  </div>
</div>


@if(count($profile_projects) != 0)
    @foreach($profile_projects as $profile_project)
        <div class="modal fade" id="editProjectsModal{{$profile_project->id}}" tabindex="-1" aria-labelledby="editProjectsModalLabel{{$profile_project->id}}" aria-hidden="true">
            <div class="modal-dialog  modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editProjectsModalLabel{{$profile_project->id}}">Edit Project</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <form action="{{route('frontend.user.profile_projects.update')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                        <div class="modal-body">
                            <div class="row g-3">
                                <div class="col-12">
                                    <label class="form-label">Project Name :</label>
                                    <input type="text" class="form-control" name="name" value="{{$profile_project->name}}" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Company :</label>
                                    <input type="text" class="form-control" name="company" value="{{$profile_project->company}}" required>
                                </div>
                                <div class="col-12">
                                    <div class="form-check form-switch">
                                        @if($profile_project->present == 'on')
                                            <input class="form-check-input" type="checkbox" id="present_profile_project_edit{{$profile_project->id}}" onchange="myFunctionProjectEdit()" name="present" checked>
                                        @else
                                            <input class="form-check-input" type="checkbox" id="present_profile_project_edit{{$profile_project->id}}" onchange="myFunctionProjectEdit()" name="present">
                                        @endif
                                        <label class="form-check-label" for="present_profile_project_edit{{$profile_project->id}}">
                                            I am currently working in this role
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Start Date :</label>
                                    <input type="date" class="form-control" name="start_date" value="{{$profile_project->start_date}}" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">End Date :</label>
                                    <input type="date" class="form-control" id="profile_project_end_date_edit{{$profile_project->id}}" value="{{$profile_project->end_date}}" name="end_date" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Description :</label>
                                    <textarea name="description" class="form-control" id="editor_profile_project_edit{{$profile_project->id}}">{!!$profile_project->description!!}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="hidden_profile_id" value="{{$profile->id}}">
                            <input type="hidden" name="hidden_id" value="{{$profile_project->id}}">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endif



<!-- Delete Projects Modal -->

<div class="modal fade" id="delProjectsModal" tabindex="-1" aria-labelledby="delProjectsModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="delProjectsModalLabel">Delete ?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure want to delete?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <a href="" class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>
</div>


@endsection

@push('after-scripts')

<script>
    function myFunction() {

        present_work = $('#present_work:checked').val();
        if (present_work == 'on') {
            $('#work_end_date').attr('disabled', 'disabled');
        } else {
            $('#work_end_date').removeAttr('disabled');
        }  

    }
</script>

@if(count($work_experiences) != 0)
    @foreach($work_experiences as $work_expirence)
        <script>
            function myFunctionEdit() {
                present_work_edit = $('#present_work_edit{{$work_expirence->id}}:checked').val();
                // console.log(present_work_edit);

                if (present_work_edit == 'on') {
                    $('#work_end_date_edit{{$work_expirence->id}}').attr('disabled', 'disabled');
                } else {
                    $('#work_end_date_edit{{$work_expirence->id}}').removeAttr('disabled');
                }  
            }
        </script>
    @endforeach
@endif

@if(count($work_experiences) != 0)
    @foreach($work_experiences as $work_expirence)
        <script>
            $(document).ready(function () {

                $('#present_work_edit{{$work_expirence->id}}').ready(function () {

                    present_work_edit_load = $('#present_work_edit{{$work_expirence->id}}:checked').val();
                    if (present_work_edit_load == 'on') {
                        $('#work_end_date_edit{{$work_expirence->id}}').attr('disabled', 'disabled');
                    } else {
                        $('#work_end_date_edit{{$work_expirence->id}}').removeAttr('disabled');
                    }  
                });
            
            });
        </script>
    @endforeach
@endif

<!-- ************************************************************************************ -->


<script>
    function myFunctionEdu() {

        present_edu = $('#present_edu:checked').val();
        if (present_edu == 'on') {
            $('#edu_end_date').attr('disabled', 'disabled');
        } else {
            $('#edu_end_date').removeAttr('disabled');
        }  

    }
</script>

@if(count($educational_details) != 0)
    @foreach($educational_details as $educational_detail)
        <script>
            function myFunctionEduEdit() {
                present_edu_edit = $('#present_edu_edit{{$educational_detail->id}}:checked').val();
                // console.log(present_edu_edit);

                if (present_edu_edit == 'on') {
                    $('#edu_end_date_edit{{$educational_detail->id}}').attr('disabled', 'disabled');
                } else {
                    $('#edu_end_date_edit{{$educational_detail->id}}').removeAttr('disabled');
                }  
            }
        </script>
    @endforeach
@endif

@if(count($educational_details) != 0)
    @foreach($educational_details as $educational_detail)
        <script>
            $(document).ready(function () {

                $('#present_edu_edit{{$educational_detail->id}}').ready(function () {

                    present_edu_edit_load = $('#present_edu_edit{{$educational_detail->id}}:checked').val();
                    if (present_edu_edit_load == 'on') {
                        $('#edu_end_date_edit{{$educational_detail->id}}').attr('disabled', 'disabled');
                    } else {
                        $('#edu_end_date_edit{{$educational_detail->id}}').removeAttr('disabled');
                    }  
                });
            
            });
        </script>
    @endforeach
@endif

<!-- ************************************************************************************* -->


<script>
    function myFunctionProject() {

        present_profile_project = $('#present_profile_project:checked').val();
        if (present_profile_project == 'on') {
            $('#profile_project_end_date').attr('disabled', 'disabled');
        } else {
            $('#profile_project_end_date').removeAttr('disabled');
        }  

    }
</script>

@if(count($profile_projects) != 0)
    @foreach($profile_projects as $profile_project)
        <script>
            function myFunctionProjectEdit() {
                present_profile_project_edit = $('#present_profile_project_edit{{$profile_project->id}}:checked').val();
                // console.log(present_profile_project_edit);

                if (present_profile_project_edit == 'on') {
                    $('#profile_project_end_date_edit{{$profile_project->id}}').attr('disabled', 'disabled');
                } else {
                    $('#profile_project_end_date_edit{{$profile_project->id}}').removeAttr('disabled');
                }  
            }
        </script>
    @endforeach
@endif

@if(count($profile_projects) != 0)
    @foreach($profile_projects as $profile_project)
        <script>
            $(document).ready(function () {

                present_profile_project_edit = $('#present_profile_project_edit{{$profile_project->id}}:checked').val();
                // console.log(present_profile_project_edit);

                if (present_profile_project_edit == 'on') {
                    $('#profile_project_end_date_edit{{$profile_project->id}}').attr('disabled', 'disabled');
                } else {
                    $('#profile_project_end_date_edit{{$profile_project->id}}').removeAttr('disabled');
                }
            
            });
        </script>
    @endforeach
@endif



<script>
    $('.delete').on('click', function() {
        let link = $(this).attr('href');
        $('.modal-footer a').attr('href', link);
    })

    $('.delete_edu').on('click', function() {
        let link = $(this).attr('href');
        $('.modal-footer a').attr('href', link);
    })

    $('.delete_project').on('click', function() {
        let link = $(this).attr('href');
        $('.modal-footer a').attr('href', link);
    })

    $('.delete_skill').on('click', function() {
        let link = $(this).attr('href');
        $('.modal-footer a').attr('href', link);
    })
</script>

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

<!-- Tag Input -->
<script>
const tagInputs = document.querySelectorAll('.tag-input')
const rolesTags = document.querySelector('[name="roles_tags"]')
const languagesTags = document.querySelector('[name="languages_tags"]')

let tags = []

tagInputs.forEach((tagInput) => {
  const input = tagInput.querySelector('input')

  let rolesArr = []
  let langArr = []

  tags = []

  createTag()

  function createTag() {
    tagInput.querySelectorAll('li').forEach((li) => li.remove())
    tags
      .slice()
      .reverse()
      .forEach((tag) => {
        let liTag = `<li>${tag} <i class="bi bi-x" onclick="remove(this, '${tag}')"></i></li>`
        tagInput.insertAdjacentHTML('afterbegin', liTag)
      })
  }

  function addTag(e) {
    if (e.key == 'Enter') {
      let tag = e.target.value.replace(/\s+/g, ' ')
      if (tag.length > 1 && !tags.includes(tag)) {
        tag.split(',').forEach((tag) => {
          tags.push(tag)

          if (input.getAttribute('name') === 'roles') {
            rolesArr.push(tag)
            rolesTags.value = rolesArr
          } else if (input.getAttribute('name') === 'languages') {
            langArr.push(tag)
            languagesTags.value = langArr
          }

          createTag()
        })
      }
      e.target.value = ''
    }
  }

  input.addEventListener('keyup', addTag)
})

function remove(element, tag) {
  let index = tags.indexOf(tag)
  tags = [...tags.slice(0, index), ...tags.slice(index + 1)]
  element.parentElement.remove()
}
</script>


<script>
	ClassicEditor
		.create( document.querySelector( '#editor_work_experience' ), {
			// toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
		} )
		.then( editor => {
			window.editor = editor;
		} )
		.catch( err => {
			console.error( err.stack );
		} );
</script>

@if(count($work_experiences) != 0)
    @foreach($work_experiences as $work_expirence)
        <script>
            ClassicEditor
                .create( document.querySelector( '#editor_work_experience_edit{{$work_expirence->id}}' ), {
                    // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
                } )
                .then( editor => {
                    window.editor = editor;
                } )
                .catch( err => {
                    console.error( err.stack );
                } );
        </script>
    @endforeach
@endif


<script>
	ClassicEditor
		.create( document.querySelector( '#editor_edu' ), {
			// toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
		} )
		.then( editor => {
			window.editor = editor;
		} )
		.catch( err => {
			console.error( err.stack );
		} );
</script>

@if(count($educational_details) != 0)
    @foreach($educational_details as $educational_detail)
        <script>
            ClassicEditor
                .create( document.querySelector( '#editor_edu_edit{{$educational_detail->id}}' ), {
                    // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
                } )
                .then( editor => {
                    window.editor = editor;
                } )
                .catch( err => {
                    console.error( err.stack );
                } );
        </script>
    @endforeach
@endif


<script>
	ClassicEditor
		.create( document.querySelector( '#editor_profile_project' ), {
			// toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
		} )
		.then( editor => {
			window.editor = editor;
		} )
		.catch( err => {
			console.error( err.stack );
		} );
</script>

@if(count($profile_projects) != 0)
    @foreach($profile_projects as $profile_project)
        <script>
            ClassicEditor
                .create( document.querySelector( '#editor_profile_project_edit{{$profile_project->id}}' ), {
                    // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
                } )
                .then( editor => {
                    window.editor = editor;
                } )
                .catch( err => {
                    console.error( err.stack );
                } );
        </script>
    @endforeach
@endif


@endpush
