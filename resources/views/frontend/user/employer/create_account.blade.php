@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')
<link rel="stylesheet" href="{{url('css/landing_page/pages/create_account.css')}}">

<section class="create-account">
    <div class="container">
        <form action="{{route('frontend.user.user_account.update')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
            <div class="inner-wrapper">
                <div class="title">Create Employer Account</div>
                <div class="subtitle">Company Details</div>
                <div class="row g-4">                  
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="business_name" placeholder="Business Name" value="{{auth()->user()->business_name}}" require>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="first_name" placeholder="Your First Name" value="{{auth()->user()->first_name}}" require>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="last_name" placeholder="Your Last Name" value="{{auth()->user()->last_name}}" require>
                    </div>
                    <div class="col-md-6">
                        <input type="tel" class="form-control" name="phone_number" placeholder="Phone Number" value="{{auth()->user()->phone_number}}" require>
                    </div>
                    <div class="col-md-6">
                        <input type="email" class="form-control" name="company_email" placeholder="Company Email" value="{{auth()->user()->email}}" require>
                    </div>
                    <div class="col-12 mt-5">
                        <label class="form-label">Upload your Company logo (Optional)</label>
                        <input type="file" class="form-control" name="company_logo" value="{{auth()->user()->company_logo}}">
                    </div>
                    <div class="col-12 mt-5">
                        <button type="submit" class="btn-fill cta-btn">Register</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

@endsection

@push('after-scripts')

@endpush