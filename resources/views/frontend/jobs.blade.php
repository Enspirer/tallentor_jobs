@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')
<link rel="stylesheet" href="{{url('css/landing_page/pages/about.css')}}">
<link rel="stylesheet" href="{{url('css/dashboard/employee/includes/search_bar.css')}}">

<div class="container">
    <div class="row mt-5">
        <div class="col-12">
            @include('frontend.user.includes.search_bar')
        </div>
    </div>
</div>

<div class="jobs-container">
    <div class="jobs-filter"></div>
    <div class="jobs-list"></div>
</div>

@endsection

@push('after-scripts')

@endpush