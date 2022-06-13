@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.auth.login_box_title'))

@section('content')
    <!-- <div class="row justify-content-center align-items-center">
        <div class="col col-sm-8 align-self-center">
            <div class="card">
                <div class="card-header">
                    <strong>
                        @lang('labels.frontend.auth.login_box_title')
                    </strong>
                </div>

                <div class="card-body">
                    {{ html()->form('POST', route('frontend.auth.login.post'))->open() }}
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
                                    <div class="checkbox">
                                        {{ html()->label(html()->checkbox('remember', true, 1) . ' ' . __('labels.frontend.auth.remember_me'))->for('remember') }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group clearfix">
                                    {{ form_submit(__('labels.frontend.auth.login_button')) }}
                                </div>
                            </div>
                        </div>

                        @if(config('access.captcha.login'))
                            <div class="row">
                                <div class="col">
                                    @captcha
                                    {{ html()->hidden('captcha_status', 'true') }}
                                </div>
                            </div>
                        @endif

                        <div class="row">
                            <div class="col">
                                <div class="form-group text-right">
                                    <a href="{{ route('frontend.auth.password.reset') }}">@lang('labels.frontend.passwords.forgot_password')</a>
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
            <div class="row">
                <div class="col-xl-4">
                    <div class="join-form">
                        <div class="header">
                            <div class="title">Login to your account</div>
                            <div class="subtitle">Hello there, Welcome back</div>
                        </div>
                        <div class="form-body">
                        {{ html()->form('POST', route('frontend.auth.login.post'))->open() }}
                            <div class="row g-4">
                                <div class="col-12">
                                    <label for="email" class="form-label">Your Email</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your Email" required="required">
                                </div>
                                <div class="col-12">
                                    <label for="password" class="form-label">Your Password</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter Your Password" required="required">
                                </div>
                                <div class="col-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1" id="remember" name="remember" checked="checked">
                                        <label class="form-check-label" for="remember">Remember me</label>
                                    </div>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="{{ route('frontend.auth.password.reset') }}" class="forgot-password">Forgot Password?</a>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="terms" name="terms">
                                        <label class="form-check-label" for="terms">By Creating an account means you agree to the <a href="#" target="_blank">Terms and Conditions</a>, and our <a href="#" target="_blank">Privacy Policy</a></label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="cta-btn btn-fill pull-right">Sign In</button>
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
                                <span>New to Tallentor Jobs</span>
                                <p>Create your profile now and be visible to the top recruiters in the world</p>
                                <a href="#" class="btn-fill cta-btn">Register with Us</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
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
                                                <button type="button" class="btn-prev"><i class="bi bi-arrow-left-circle"></i></button>
                                                <button type="button" class="btn-next"><i class="bi bi-arrow-right-circle"></i></button>
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
    
@endpush
