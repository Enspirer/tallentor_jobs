@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')

<section class="contact-hero">
    <div class="header">
    <h2>Get in Touch</h2>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.  industry's standard dummy text ever since the 1500s</p>
    </div>
    <img src="{{url('images/landing-page/contact/dots.svg')}}" class="img-1">
    <img src="{{url('images/landing-page/contact/dots.svg')}}" class="img-2">
    <img src="{{url('images/landing-page/contact/dots.svg')}}" class="img-3">
</section>

<section class="contact-map">
    <div class="container">
        <div class="inner-wrapper">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63371.80440538387!2d79.78444640426987!3d6.921918484498072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2sColombo!5e0!3m2!1sen!2slk!4v1655800485740!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="contents">
                <h3>Contact us</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                <div>
                    <strong>Email:</strong>
                    <span>
                        <a href="mailto:example@gmail.com">example@gmail.com</a>
                    </span>
                </div>
                <div>
                    <strong>Phone:</strong>
                    <span>
                        <a href="tel:+947777711111">+94 777 77 11111</a>
                    </span>
                </div>
                <div>
                    <strong>Address:</strong>
                    <span>Solar House 915 High Road.<br>
                    North Finchley,<br>
                    London United Kingdom N12 8QJ</span>
                </div>
            </div>            
        </div>
    </div>
</section>

<section class="contact-form">
    <div class="inner-wrapper">
        <div class="form-block">
            <h3>Fill in the form below and we will <br>contact you soon</h3>
            <form action="">
                <div class="row g-4">
                    <div class="col-12">
                        <input type="text" class="form-control" name="name" placeholder="Your Name*" required>
                    </div>
                    <div class="col-md-6">
                        <input type="email" class="form-control" name="email" placeholder="Your Email*" required>
                    </div>
                    <div class="col-md-6">
                        <input type="tel" class="form-control" name="phone" placeholder="Your Phone Number*" required>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="country" placeholder="Country*" required>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="category" placeholder="Category*" required>
                    </div>
                    <div class="col-12">
                        <textarea class="form-control" name="message" rows="6" placeholder="Message*" required></textarea>
                    </div>
                    <div class="col-12">
                        <div class="g-recaptcha" data-callback="checked" data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR" ></div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="cta-btn btn-fill form-submit-btn" disabled>Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="image-block">
            <img src="{{url('images/landing-page/contact/contact-img.png')}}">
        </div>
    </div>
</section>

<section class="newsletter">
    <div class="container">
        <div class="inner-wrapper">
            <div class="text">Feeling comfortable and feel free <br>get in touch</div>
            <div class="input-wrapper">
                <form action="{{route('frontend.newsletter.store')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                    <input type="text" class="form-control" name="newsletter" placeholder="Enter your email" required>
                    <button type="submit" class="cta-btn btn-fill">Send</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection

@push('after-scripts')

<script>
    window.oncontextmenu = () => {
        var captcha = grecaptcha.getResponse();
    };

    function checked() {
        $('.form-submit-btn').removeAttr('disabled');
    };
</script>

@endpush