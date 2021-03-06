@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
<link rel="stylesheet" href="{{url('css/landing_page/pages/home.css')}}">

<section class="hero-section" style="background: url('{{url('images/landing-page/home/hero-banner.png')}}')">
    <div class="container">
        <div class="inner-wrapper">
            <div class="subtitle">Get Resisted</div>
            <div class="text">with</div>
            <div class="title">Tallentor <span>Jobs</span></div>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <p>Lorem Ipsum has been the industry's standard dummy text ever</p>
        </div>
    </div>
</section>

<section class="job-section">
    <div class="inner-wrapper">
        <div class="header">
            <div class="title">Latest <span>Jobs</span></div>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
        </div>
        <div class="featured-jobs">
            <div class="job-card">
                <a href="#" class="job-link">
                    <div class="subtitle">Rozel | Teacher</div>
                    <div class="title">UI/UX Designer</div>
                    <div class="location"><i class="bi bi-geo-alt"></i>Nugegoda, Colombo 05.</div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, optio?</p>
                    <div class="footer">
                        <i class="bi bi-layers"></i>
                        <p>12 Applicant Sent</p>
                        <i class="bi bi-fullscreen"></i>
                    </div>
                </a>
            </div>
            <div class="job-card">
                <a href="#" class="job-link">
                    <div class="subtitle">Rozel | Teacher</div>
                    <div class="title">UI/UX Designer</div>
                    <div class="location"><i class="bi bi-geo-alt"></i>Nugegoda, Colombo 05.</div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, optio?</p>
                    <div class="footer">
                        <i class="bi bi-layers"></i>
                        <p>12 Applicant Sent</p>
                        <i class="bi bi-fullscreen"></i>
                    </div>
                </a>
            </div>
            <div class="job-card">
                <a href="#" class="job-link">
                    <div class="subtitle">Rozel | Teacher</div>
                    <div class="title">UI/UX Designer</div>
                    <div class="location"><i class="bi bi-geo-alt"></i>Nugegoda, Colombo 05.</div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, optio?</p>
                    <div class="footer">
                        <i class="bi bi-layers"></i>
                        <p>12 Applicant Sent</p>
                        <i class="bi bi-fullscreen"></i>
                    </div>
                </a>
            </div>
            <div class="job-card">
                <a href="#" class="job-link">
                    <div class="subtitle">Rozel | Teacher</div>
                    <div class="title">UI/UX Designer</div>
                    <div class="location"><i class="bi bi-geo-alt"></i>Nugegoda, Colombo 05.</div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, optio?</p>
                    <div class="footer">
                        <i class="bi bi-layers"></i>
                        <p>12 Applicant Sent</p>
                        <i class="bi bi-fullscreen"></i>
                    </div>
                </a>
            </div>
            <div class="job-card">
                <a href="#" class="job-link">
                    <div class="subtitle">Rozel | Teacher</div>
                    <div class="title">UI/UX Designer</div>
                    <div class="location"><i class="bi bi-geo-alt"></i>Nugegoda, Colombo 05.</div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, optio?</p>
                    <div class="footer">
                        <i class="bi bi-layers"></i>
                        <p>12 Applicant Sent</p>
                        <i class="bi bi-fullscreen"></i>
                    </div>
                </a>
            </div>
            <div class="job-card">
                <a href="#" class="job-link">
                    <div class="subtitle">Rozel | Teacher</div>
                    <div class="title">UI/UX Designer</div>
                    <div class="location"><i class="bi bi-geo-alt"></i>Nugegoda, Colombo 05.</div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, optio?</p>
                    <div class="footer">
                        <i class="bi bi-layers"></i>
                        <p>12 Applicant Sent</p>
                        <i class="bi bi-fullscreen"></i>
                    </div>
                </a>
            </div>
            <div class="job-card">
                <a href="#" class="job-link">
                    <div class="subtitle">Rozel | Teacher</div>
                    <div class="title">UI/UX Designer</div>
                    <div class="location"><i class="bi bi-geo-alt"></i>Nugegoda, Colombo 05.</div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, optio?</p>
                    <div class="footer">
                        <i class="bi bi-layers"></i>
                        <p>12 Applicant Sent</p>
                        <i class="bi bi-fullscreen"></i>
                    </div>
                </a>
            </div>
            <div class="job-card">
                <a href="#" class="job-link">
                    <div class="subtitle">Rozel | Teacher</div>
                    <div class="title">UI/UX Designer</div>
                    <div class="location"><i class="bi bi-geo-alt"></i>Nugegoda, Colombo 05.</div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, optio?</p>
                    <div class="footer">
                        <i class="bi bi-layers"></i>
                        <p>12 Applicant Sent</p>
                        <i class="bi bi-fullscreen"></i>
                    </div>
                </a>
            </div>
        </div>
        <a href="#" class="cta-link">View More <i class="bi bi-chevron-right"></i></a>
    </div>
</section>

<section class="career-center">
    <div class="container">
        <div class="inner-wrapper">
            <div class="content-block">
                <div class="subtitle">Tallentor</div>
                <div class="title">Career Center</div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                <div class="button-block">
                    <a href="#" class="btn-fill cta-btn">Job Seeker</a>
                    <a href="#" class="btn-outline cta-btn">Employer</a>
                </div>
            </div>
            <div class="image-block">
                <img src="{{url('images/landing-page/home/career-center.png')}}" alt="" class="img-main">
                <img src="{{url('images/landing-page/home/hs.png')}}" alt="" class="pop-img img-1">
                <img src="{{url('images/landing-page/home/hs.png')}}" alt="" class="pop-img img-2">
                <img src="{{url('images/landing-page/home/ca.png')}}" alt="" class="pop-img img-3">
                <img src="{{url('images/landing-page/home/ca.png')}}" alt="" class="pop-img img-4">
                <img src="{{url('images/landing-page/home/it.png')}}" alt="" class="pop-img img-5">
                <img src="{{url('images/landing-page/home/it2.png')}}" alt="" class="pop-img img-6">
                <img src="{{url('images/landing-page/home/pd.png')}}" alt="" class="pop-img img-7">
            </div>
        </div>
    </div>
</section>

<section class="campus-section">
    <div class="container">
        <div class="header">
            <div class="title">Latest <span>Campus</span></div>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
        </div>
        <div class="inner-wrapper">
            <div class="campus-card">
               <a href="#" class="card-link">
                    <img src="{{url('images/landing-page/home/campus-1.png')}}" alt="" class="card-img">
                    <div class="title">Software Engineering</div>
                    <div class="location"><i class="bi bi-geo-alt"></i>Nugegoda, Colombo 05.</div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus et quis sunt mollitia corrupti officiis! Laborum maxime et est earum magni modi quibusdam laboriosam qui!</p>
                    <div class="footer">
                        <span><i class="bi bi-person"></i>01</span>
                        <span><i class="bi bi-chat-left-text"></i>00</span>
                    </div>
               </a>
            </div>
            <div class="campus-card">
               <a href="#" class="card-link">
                    <img src="{{url('images/landing-page/home/campus-2.png')}}" alt="" class="card-img">
                    <div class="title">Hotel Manager</div>
                    <div class="location"><i class="bi bi-geo-alt"></i>Nugegoda, Colombo 05.</div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus et quis sunt mollitia corrupti officiis! Laborum maxime et est earum magni modi quibusdam laboriosam qui!</p>
                    <div class="footer">
                        <span><i class="bi bi-person"></i>01</span>
                        <span><i class="bi bi-chat-left-text"></i>00</span>
                    </div>
               </a>
            </div>
            <div class="campus-card">
               <a href="#" class="card-link">
                    <img src="{{url('images/landing-page/home/campus-3.png')}}" alt="" class="card-img">
                    <div class="title">Nursing and Home Care</div>
                    <div class="location"><i class="bi bi-geo-alt"></i>Nugegoda, Colombo 05.</div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus et quis sunt mollitia corrupti officiis! Laborum maxime et est earum magni modi quibusdam laboriosam qui!</p>
                    <div class="footer">
                        <span><i class="bi bi-person"></i>01</span>
                        <span><i class="bi bi-chat-left-text"></i>00</span>
                    </div>
               </a>
            </div>
        </div>
        <a href="#" class="cta-link">View More <i class="bi bi-chevron-right"></i></a>
    </div>
</section>

@if(count(Modules\Blog\Entities\Post::get()) != 0)

<section class="blog-section">
    <div class="container">
        <div class="header">
            <div class="title">Latest <span>Campus</span></div>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
        </div>

        <div class="inner-wrapper">
            @foreach(Modules\Blog\Entities\Post::where('status','Enabled')->latest()->take(3)->get() as $key => $blog_posts)            
                <div class="news-card">
                    <img src="{{ uploaded_asset($blog_posts->feature_image) }}" alt="" class="card-img">
                    <div class="wrapper">
                        <div class="title">
                            @if(Modules\Blog\Entities\Category::where('id',$blog_posts->category)->first() != null)
                                <img src="{{ uploaded_asset(Modules\Blog\Entities\Category::where('id',$blog_posts->category)->first()->image) }}" alt="" class="title-img">
                            @endif
                            {{$blog_posts->title}}
                        </div>
                        <p style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">{!!$blog_posts->description!!}</p>
                        <div class="footer">
                            <!-- <span><i class="bi bi-heart"></i>1</span>
                            <span><i class="bi bi-chat-left-text"></i>Comment</span> -->
                            <a href="#" class="view-more">View More</a>
                        </div>
                    </div>
                </div>
            @endforeach                
        </div>
        <a href="#" class="cta-link">View More <i class="bi bi-chevron-right"></i></a>

    </div>
</section>
@endif


@endsection

@push('after-scripts')



@endpush