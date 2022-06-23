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
                <div class="profile-block" id="profileBlock">
                    <h4>My Profile</h4>
                    <div class="inner-wrapper">
                        <div class="image-block">
                            <button edit-profile class="edit-btn" type="button"><i class="bi bi-pencil-fill"></i></button>
                            <img src="{{url('images/dashboard/profile.png')}}">
                        </div>
                        <div class="name">Pawani Anuththara</div>
                        <div class="country">
                            <img src="https://purecatamphetamine.github.io/country-flag-icons/3x2/LK.svg" class="country-flag">
                            <div class="country-name">Sri Lanka</div>
                        </div>
                        <div class="profile-table">
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="th"><i class="bi bi-briefcase-fill"></i> <span>Experiance</span></td>
                                        <td><input type="text" class="form-control" readonly name="experiance" placeholder="Overall experiance"></td>
                                    </tr>
                                    <tr>
                                        <td class="th"><i class="bi bi-person-fill"></i> <span>Role</span></td>
                                        <td>
                                        <div class="input-wrapper" id="tagWrapper">
                                            <ul class="input-tags">
                                            <input type="text" class="form-control" readonly name="roles" placeholder="Add roles" spellcheck="false">
                                            </ul>
                                            <ul class="input-suggestions"></ul>
                                        </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="th"><i class="bi bi-telephone-fill"></i> <span>Phone</span></td>
                                        <td>
                                            <div class="form-input-group">
                                                <input type="tel" class="form-control" readonly name="phone" placeholder="Phone">
                                                <button type="button" class="verify-button green verified">Verified</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="th"><i class="bi bi-at"></i> <span>Email</span></td>
                                        <td>
                                            <div class="form-input-group">
                                                <input type="email" class="form-control" readonly name="email" placeholder="Email">
                                                <button type="button" class="verify-button red">Verify Now</button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="button-block">
                            <button add-profile class="act-btn add-btn show" type="button"><i class="bi bi-plus-lg"></i> Add New Profile</button>
                            <button save-profile class="act-btn save-btn" type="button">Save Changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="pending-action-block">
                    <h5>Pending Actions</h5>
                    <div class="actions">
                        <a href="#" class="action-block">
                            <div class="title">Resume</div>
                            <div class="status">30%</div>
                        </a>
                        <a href="#" class="action-block">
                            <div class="title">Education</div>
                            <div class="status">30%</div>
                        </a>
                        <a href="#" class="action-block">
                            <div class="title">Employment</div>
                            <div class="status">30%</div>
                        </a>
                        <a href="#" class="action-block">
                            <div class="title">Verify Email ID</div>
                            <div class="status">30%</div>
                        </a>
                        <a href="#" class="action-block">
                            <div class="title">Verify Mobile Number</div>
                            <div class="status">30%</div>
                        </a>
                        <a href="#" class="action-block">
                            <div class="title">Edit Profile Picture</div>
                            <div class="status">30%</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-8">

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

<!-- Tag Suggestion -->
<script>
    const searchWrapper = document.querySelector("#tagWrapper"),
        suggBox = searchWrapper.querySelector(".input-suggestions"),
        ul = searchWrapper.querySelector(".input-tags"),
        input = searchWrapper.querySelector("input")

    let tags = ["coding", "nepal"];

    let suggestions = [
        "Channel",
        "CodingLab",
        "CodingNepal",
        "YouTube",
        "YouTuber",
        "YouTube Channel",
        "Blogger",
        "Bollywood",
        "Vlogger",
        "Vechiles",
        "Facebook",
        "Freelancer",
        "Facebook Page",
        "Designer",
        "Developer",
        "Web Designer",
        "Web Developer",
        "Login Form in HTML & CSS",
        "How to learn HTML & CSS",
        "How to learn JavaScript",
        "How to become Freelancer",
        "How to become Web Designer",
        "How to start Gaming Channel",
        "How to start YouTube Channel",
        "What does HTML stands for?",
        "What does CSS stands for?",
    ];

    createTag();

    function createTag() {
        ul.querySelectorAll("li").forEach(li => li.remove());
        tags.slice().reverse().forEach(tag => {
            let liTag = `<li>${tag} <i class="bi bi-x" remove-tag onclick="remove(this, '${tag}')"></i></li>`;
            ul.insertAdjacentHTML("afterbegin", liTag);
        });
    }

    function remove(element, tag) {
        let index = tags.indexOf(tag);
        tags = [...tags.slice(0, index), ...tags.slice(index + 1)];
        element.parentElement.remove();
    }

    function addTag(e) {
        if (e.key == "Enter") {
            let tag = e.target.value.replace(/\s+/g, ' ');
            if (tag.length > 1 && !tags.includes(tag)) {
                if (tags.length < 10) {
                    tag.split(',').forEach(tag => {
                        tags.push(tag);
                        createTag();
                    });
                }
            }
            e.target.value = "";
        }
    }

    input.addEventListener("keyup", addTag);

    // getting all required elements


    // if user press any key and release
    input.onkeyup = (e) => {
        let userData = e.target.value; //user enetered data
        let emptyArray = [];
        if (userData) {
            emptyArray = suggestions.filter((data) => {
                //filtering array value and user characters to lowercase and return only those words which are start with user enetered chars
                return data.toLocaleLowerCase().startsWith(userData.toLocaleLowerCase());
            });
            emptyArray = emptyArray.map((data) => {
                // passing return data inside li tag
                return data = `<li>${data}</li>`;
            });
            searchWrapper.classList.add("active"); //show autocomplete box
            showSuggestions(emptyArray);
            let allList = suggBox.querySelectorAll("li");
            for (let i = 0; i < allList.length; i++) {
                //adding onclick attribute in all li tag
                allList[i].setAttribute("onclick", "select(this)");
            }
        } else {
            searchWrapper.classList.remove("active"); //hide autocomplete box
        }
    }

    function select(element) {
        let tag = element.textContent.replace(/\s+/g, ' ');

        if (tag.length > 1 && !tags.includes(tag)) {
            if (tags.length < 10) {
                tag.split(',').forEach(tag => {
                    tags.push(tag);
                    createTag();
                });
            }
        }

        input.value = '';
        searchWrapper.classList.remove("active");
    }

    function showSuggestions(list) {
        let listData;
        if (!list.length) {
            userValue = input.value;
            listData = `<li>${userValue}</li>`;
        } else {
            listData = list.join('');
        }
        suggBox.innerHTML = listData;
    }
</script>

<!-- Edit profile function -->
<script>
    const $profileBlock = document.querySelector('#profileBlock')
    const $editProfile = $profileBlock.querySelector('[edit-profile]')
    const $saveProfile = $profileBlock.querySelector('[save-profile]')
    const $addProfile = $profileBlock.querySelector('[add-profile]')
    const $inputs = $profileBlock.querySelectorAll('input')
    let $removeTag;

    const editableInputs = () => {
        $inputs.forEach((input) => {
            input.removeAttribute('readonly')
        })
    }

    const removableTags = () => {
        if ($removeTag) {
            $removeTag.forEach((tag) => {
                tag.classList.remove('disabled')
            })
        }
    }

    const nonEditableInputs = () => {
        $inputs.forEach((input) => {
            input.setAttribute('readonly', '')
        })
    }

    const nonRemovableTags = () => {
        if ($removeTag) {
            $removeTag.forEach((tag) => {
                tag.classList.add('disabled')
            })
        }
    }

    window.addEventListener('load', () => {
        $removeTag = $profileBlock.querySelectorAll('[remove-tag]')
        nonRemovableTags()
    })

    $editProfile.addEventListener('click', () => {
        $removeTag = $profileBlock.querySelectorAll('[remove-tag]')
        editableInputs()
        removableTags()
        $saveProfile.classList.add('show')
        $addProfile.classList.remove('show')
    })

    $saveProfile.addEventListener('click', () => {
        $removeTag = $profileBlock.querySelectorAll('[remove-tag]')
        nonEditableInputs()
        nonRemovableTags()
        $saveProfile.classList.remove('show')
        $addProfile.classList.add('show')
    })
</script>

@endpush
