@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.auth.register_box_title'))

@section('content')
    <!-- <div class="row justify-content-center align-items-center">
        <div class="col col-sm-8 align-self-center">
            <div class="card">
                <div class="card-header">
                    <strong>
                        @lang('labels.frontend.auth.register_box_title')
                    </strong>
                </div>

                <div class="card-body">
                    {{ html()->form('POST', route('frontend.auth.register.post'))->open() }}
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    {{ html()->label(__('validation.attributes.frontend.first_name'))->for('first_name') }}

                                    {{ html()->text('first_name')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.frontend.first_name'))
                                        ->attribute('maxlength', 191)
                                        ->required()}}
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    {{ html()->label(__('validation.attributes.frontend.last_name'))->for('last_name') }}

                                    {{ html()->text('last_name')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.frontend.last_name'))
                                        ->attribute('maxlength', 191)
                                        ->required() }}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    {{ html()->label(__('validation.attributes.frontend.email'))->for('email') }}

                                    {{ html()->email('email')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.frontend.email'))
                                        ->attribute('maxlength', 191)
                                        ->required() }}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    {{ html()->label(__('validation.attributes.frontend.password'))->for('password') }}

                                    {{ html()->password('password')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.frontend.password'))
                                        ->required() }}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    {{ html()->label(__('validation.attributes.frontend.password_confirmation'))->for('password_confirmation') }}

                                    {{ html()->password('password_confirmation')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.frontend.password_confirmation'))
                                        ->required() }}
                                </div>
                            </div>
                        </div>

                        @if(config('access.captcha.registration'))
                            <div class="row">
                                <div class="col">
                                    @captcha
                                    {{ html()->hidden('captcha_status', 'true') }}
                                </div>
                            </div>
                        @endif

                        <div class="row">
                            <div class="col">
                                <div class="form-group mb-0 clearfix">
                                    {{ form_submit(__('labels.frontend.auth.register_button')) }}
                                </div>
                            </div>
                        </div>
                    {{ html()->form()->close() }}

                    <div class="row">
                        <div class="col">
                            <div class="text-center">
                                @include('frontend.auth.includes.socialite')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="section-wrapper">
        <section class="section-join">
            <div class="row flex-lg-row flex-column-reverse g-4">
                <div class="col-xxl-4 col-xl-5 col-lg-6">
                    <div class="join-form">
                        <div class="header">
                            <div class="title">Create an account</div>
                            <div class="subtitle">It's only takes a couple of minutes to get started</div>
                        </div>
                        <div class="form-body">
                        {{ html()->form('POST', route('frontend.auth.register.post'))->open() }}
                            <div class="row g-4">
                                <div class="col-12">
                                    <label for="first_name" class="form-label">First name</label>
                                    <input type="text" class="form-control" name="first_name" value="{{old('first_name')}}" id="first_name" placeholder="Enter Your First Name" required>
                                    @if($errors->has('first_name'))
                                        <p style="color: red;font-size: 13px;padding-top: 7px;">{{$errors->first('first_name')}}</p>
                                    @endif
                                </div>
                                <div class="col-12">
                                    <label for="last_name" class="form-label">Last name</label>
                                    <input type="text" class="form-control" name="last_name" value="{{old('last_name')}}" id="last_name" placeholder="Enter Your Last Name" required>
                                    @if($errors->has('last_name'))
                                        <p style="color: red;font-size: 13px;padding-top: 7px;">{{$errors->first('last_name')}}</p>
                                    @endif
                                </div>
                                <div class="col-12">       
                                    <label for="email" class="form-label">Email</label> 
                                    <input type="email" class="form-control" name="email" value="{{old('email')}}" id="email" placeholder="Enter Your Email" required>
                                    @if($errors->has('email'))
                                        <p style="color: red;font-size: 13px;padding-top: 7px;">{{$errors->first('email')}}</p>
                                    @endif
                                </div>
                                <div class="col-12">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password should be minimum 6 characters" required>
                                    @if($errors->has('password'))
                                        <p style="color: red;font-size: 13px;padding-top: 7px;">{{$errors->first('password')}}</p>
                                    @endif
                                </div>
                                <div class="col-12">
                                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Confirm Your Password" required>
                                    @if($errors->has('password_confirmation'))
                                        <p style="color: red;font-size: 13px;padding-top: 7px;">{{$errors->first('password_confirmation')}}</p>
                                    @endif
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="terms" name="terms" required>
                                        <label class="form-check-label" for="terms">By Creating an account means you agree to the <a href="#" target="_blank">Terms and Conditions</a>, and our <a href="#" target="_blank">Privacy Policy</a></label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="cta-btn btn-fill pull-right">Register Me</button>
                                </div>
                            </div>
                        {{ html()->form()->close() }}
                        </div>
                        <div class="form-footer">
                            <div class="devider">or do it via other accounts</div>
                            <div class="social-sign">
                                <a href="#">
                                    <img src="{{url('images/landing-page/join/google.svg')}}" alt="">
                                </a>
                                <a href="#">
                                    <img src="{{url('images/landing-page/join/facebook.svg')}}" alt="">
                                </a>
                            </div>
                            <div class="register-block">
                                <span>Already have an account?</span>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, illum.</p>
                                <a href="{{url('/login')}}" class="btn-fill cta-btn">Sign In</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-8 col-xl-7 col-lg-6">
                    <div class="splide join-slider" id="joinSlider">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <div class="silde-wrapper">
                                        <img src="{{url('images/landing-page/join/slide-1.png')}}" alt="">
                                        <div class="caption-block">
                                            <div class="title">New update topic here...</div>
                                            <p>Let's see what we have new, Check it out! So maybe write here something more.</p>
                                            <div class="nav-arrows">
                                                <button type="button" class="btn-prev" data-btn-prev><i class="bi bi-arrow-left-circle"></i></button>
                                                <button type="button" class="btn-next" data-btn-next><i class="bi bi-arrow-right-circle"></i></button>
                                            </div>
                                            <ul class="pagination-nav">
                                                <li><button class="page-btn active"></button></li>
                                                <li><button class="page-btn"></button></li>
                                                <li><button class="page-btn"></button></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="silde-wrapper">
                                        <img src="{{url('images/landing-page/join/slide-1.png')}}" alt="">
                                        <div class="caption-block">
                                            <div class="title">New update topic here...</div>
                                            <p>Let's see what we have new, Check it out! So maybe write here something more.</p>
                                            <div class="nav-arrows">
                                                <button type="button" class="btn-prev"><i class="bi bi-arrow-left-circle"></i></button>
                                                <button type="button" class="btn-next"><i class="bi bi-arrow-right-circle"></i></button>
                                            </div>
                                            <ul class="pagination-nav">
                                                <li><button class="page-btn"></button></li>
                                                <li><button class="page-btn"></button></li>
                                                <li><button class="page-btn"></button></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="silde-wrapper">
                                        <img src="{{url('images/landing-page/join/slide-1.png')}}" alt="">
                                        <div class="caption-block">
                                            <div class="title">New update topic here...</div>
                                            <p>Let's see what we have new, Check it out! So maybe write here something more.</p>
                                            <div class="nav-arrows">
                                                <button type="button" class="btn-prev"><i class="bi bi-arrow-left-circle"></i></button>
                                                <button type="button" class="btn-next"><i class="bi bi-arrow-right-circle"></i></button>
                                            </div>
                                            <ul class="pagination-nav">
                                                <li><button class="page-btn"></button></li>
                                                <li><button class="page-btn"></button></li>
                                                <li><button class="page-btn"></button></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('after-scripts')

<script>
  document.addEventListener( 'DOMContentLoaded', function() {
    var joinSlider = new Splide( '#joinSlider', {
        type   : 'loop',
        rewind : true,
    } );
    joinSlider.mount();
  } );
</script>

<script>
$(".btn-prev").click(function(){
    $(".splide__arrow.splide__arrow--prev").click(); 
    return false;
});

$(".btn-next").click(function(){
    $(".splide__arrow.splide__arrow--next").click(); 
    return false;
});

$(".pagination-nav li:nth-child(1) .page-btn").click(function(){
    $(".pagination-nav li .page-btn").removeClass('active')
    $(".pagination-nav li:nth-child(1) .page-btn").addClass('active')
    $(".splide__pagination li:nth-child(1) .splide__pagination__page").click(); 
    return false;
});
$(".pagination-nav li:nth-child(2) .page-btn").click(function(){
    $(".pagination-nav li .page-btn").removeClass('active')
    $(".pagination-nav li:nth-child(2) .page-btn").addClass('active')
    $(".splide__pagination li:nth-child(2) .splide__pagination__page").click(); 
    return false;
});
$(".pagination-nav li:nth-child(3) .page-btn").click(function(){
    $(".pagination-nav li .page-btn").removeClass('active')
    $(".pagination-nav li:nth-child(3) .page-btn").addClass('active')
    $(".splide__pagination li:nth-child(3) .splide__pagination__page").click(); 
    return false;
});
</script>
 
@endpush
