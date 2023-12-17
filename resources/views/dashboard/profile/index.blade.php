@extends('layouts.main_dashboard')

@section('content_dashboard')

<header class="page-cover">
    @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if(session()->has('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
    <div class="text-center">
        <a href="user-profile.html" class="user-avatar user-avatar-xl"><img src="{{ asset('storage/' . $user->image) }}"
                alt=""></a>
        <h2 class="h4 mt-2 mb-0">{{ $user->name }}</h2>
        <div class="my-1">
            <i class="fa fa-star text-yellow"></i> <i class="fa fa-star text-yellow"></i> <i
                class="fa fa-star text-yellow"></i> <i class="fa fa-star text-yellow"></i> <i
                class="far fa-star text-yellow"></i>
        </div>
    </div><!-- .cover-controls -->
    <div class="cover-controls cover-controls-bottom">
        <a href="#" class="btn btn-light" data-toggle="modal" data-target="#followersModal">2,159 Followers</a> <a
            href="#" class="btn btn-light" data-toggle="modal" data-target="#followingModal">136 Following</a>
    </div><!-- /.cover-controls -->
</header><!-- /.page-cover -->


{{-- <nav class="page-navs">
    <!-- .nav-scroller -->
    <div class="nav-scroller">
        <!-- .nav -->
        <div class="nav nav-center nav-tabs">
            <a class="nav-link active" href="#">Overview</a>
            <a class="nav-link" href="#">Settings</a>
        </div><!-- /.nav -->
    </div><!-- /.nav-scroller -->
</nav><!-- /.page-navs --> --}}


<!-- .page-inner -->
<div class="page-inner">
    <!-- .page-section -->
    <div class="page-section">
        <!-- .section-block -->
        <div class="section-block">
            <header class="page-title-bar  ">
                <!-- page title stuff goes here -->
                <h1 class="page-title"> available appointment </h1>
            </header><!-- /.page-title-bar -->
            <!-- metric row -->
            @foreach ($appointments as $appointment)
            <a href="{{ route('appointments.reserve',$appointment->id) }}"
                class="appointment-button {{ $appointment['status'] === 'available' ? 'available' : 'reserved' }}  btn {{ $appointment['status'] === 'reserved' ? 'disabled' : 'btn-outline-success' }}"
                {{ $appointment['status'] === 'reserved' ? 'disabled' : '' }}>

                {{ $appointment['appointment_time'] }} /=/
                {{  $appointment['appointment_date'] }}
            </a>
            @endforeach
        </div><!-- /.section-block -->
        <!-- grid row -->

    </div><!-- /.page-section -->
</div><!-- /.page-inner -->

@endsection