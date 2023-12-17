@extends('layouts.main_dashboard')

@section('content_dashboard')
    <div class="page-inner">
        <!-- .page-title-bar -->
        <header class="page-title-bar ">
            <!-- page title stuff goes here -->
            <h1 class="page-title"> Create Schedule </h1>

        </header><!-- /.page-title-bar -->
        <!-- .page-section -->

    </div>


    <form action="{{ route('appointment.store') }}" method="POST" class="card p-3 ">
        @csrf

        <div class="form-group">
            <label for="appointment_date">Date:</label>
            <input type="date" id="appointment_date" name="appointment_date" class="form-control" required>
            @error('appointment_date')
                <small class="text-danger"> {{ $message }} </small>
            @enderror
        </div>

        <div class="form-group">
            <label for="appointment_time">Time:</label>
            <input type="time" id="appointment_time" name="appointment_time" class="form-control" required>
            @error('appointment_time')
                <small class="text-danger"> {{ $message }} </small>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Create Schedule</button>
    </form>
@endsection
