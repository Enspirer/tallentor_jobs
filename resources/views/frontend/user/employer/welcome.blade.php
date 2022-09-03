@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')
<link rel="stylesheet" href="{{url('css/landing_page/pages/welcome.css')}}">

<section class="welcome-hero">
    <div class="inner-wrapper">
        <h1>Hiring the right people is  your most <br>Important Job</h1>
        <p>We understand that the key to your business's success is having the best people. Trust Tallentor Jobs to find your best candidates.</p>
        <a href="{{route('frontend.user.employer_create_account')}}" class="btn-fill cta-btn">Create a job</a>
    </div>
</section>

@endsection

@push('after-scripts')

@endpush