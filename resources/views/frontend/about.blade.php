@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')

<section class="about-hero">
    <div class="container">
        <div class="inner-wrapper">
            <div class="content-block">
                <h2>We are dedicate to make <br>your dream</h2>
                <div class="button-block">
                    <a href="#" class="cta-btn"><span><i class="bi bi-play-fill"></i></span></a>
                    <p>Find out what how company was <br>founded and grow.</p>
                </div>
            </div>
            <div class="content-block">
                <ul>
                    <li><i class="bi bi-check-circle"></i>Sample text</li>
                    <li><i class="bi bi-check-circle"></i>Sample text</li>
                    <li><i class="bi bi-check-circle"></i>Sample text</li>
                    <li><i class="bi bi-check-circle"></i>Sample text</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="about-image-block">
    <div class="container">
        <div class="inner-wrapper">
            <img src="{{url('images/landing-page/about/image-1.png')}}">
            <img src="{{url('images/landing-page/about/image-2.png')}}">
            <img src="{{url('images/landing-page/about/image-3.png')}}">
        </div>
    </div>
</section>

<section class="counter-section">
    <div class="container">
        <div class="inner-wrapper">
            <div class="counter-block">
                <div class="count">1.5k+</div>
                <div class="text">Applicants</div>
            </div>
            <div class="counter-block">
                <div class="count">40+</div>
                <div class="text">Countries & <br>Nationalities</div>
            </div>
            <div class="counter-block">
                <div class="count">100+</div>
                <div class="text">Universities and <br>Colleges</div>
            </div>
            <div class="counter-block">
                <div class="count">100%</div>
                <div class="text">Very high candidate <br>+ Client satisfaction</div>
            </div>
        </div>
    </div>
</section>

<section class="about-services">
    <div class="container">
        <div class="inner-wrapper">
            <h2>We Provide...</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur animi quas illo reiciendis id optio praesentium, debitis error illum rerum magnam culpa, voluptate, aspernatur unde. Quis quam nostrum eos? Temporibus vero ducimus iusto consequatur quam libero quasi error! Facere, ipsa!</p>
        </div>
        <div class="services-block">
            <h2>Professional Services</h2>
            <div class="wrapepr">
                <div class="block">
                    <div class="title">Candidate</div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos reprehenderit corporis cumque quam ut quae animi atque vitae, quas earum. Quasi eligendi officia ut laudantium odit. Id corrupti similique rerum!</p>
                </div>
                <div class="block">
                    <div class="title">Job Seeker</div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos reprehenderit corporis cumque quam ut quae animi atque vitae, quas earum. Quasi eligendi officia ut laudantium odit. Id corrupti similique rerum!</p>
                </div>
                <div class="block">
                    <div class="title">Vacancies</div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos reprehenderit corporis cumque quam ut quae animi atque vitae, quas earum. Quasi eligendi officia ut laudantium odit. Id corrupti similique rerum!</p>
                </div>
                <div class="block">
                    <div class="title">Employer</div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos reprehenderit corporis cumque quam ut quae animi atque vitae, quas earum. Quasi eligendi officia ut laudantium odit. Id corrupti similique rerum!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="newsletter">
    <div class="container">
        <div class="inner-wrapper">
            <div class="text">Feeling comfortable and feel free <br>get in touch</div>
            <div class="input-wrapper">
                <input type="text" class="form-control" name="newsletter" placeholder="Enter your email" required>
                <button type="submit" class="cta-btn btn-fill">Send</button>
            </div>
        </div>
    </div>
</section>

@endsection

@push('after-scripts')

@endpush