@extends('layouts.main_dashboard')

@section('content_dashboard')
    <div class="page-inner">
        <!-- .page-title-bar -->
        <header class="page-title-bar ">
            <!-- page title stuff goes here -->
            <h1 class="page-title"> Create User </h1>

        </header><!-- /.page-title-bar -->
        <!-- .page-section -->

    </div>

    <form class="card p-3" action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <div class="form-label-group">
                <input name="name" value="{{ old('name') }}" type="text" id="inputName" class="form-control"
                    placeholder="Name" required="" autofocus="">
                <label for="inputName">Name</label>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <div class="form-label-group">
                <input value="{{ old('email') }}" name="email" type="email" id="inputEmail" class="form-control"
                    placeholder="Email" required="" autofocus="">
                <label for="inputEmail">Email</label>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <div class="form-label-group">
                <input type="number" value="{{ old('phoneNumber') }}" id="phoneNumber" name="phoneNumber"
                    class="form-control" placeholder="example : 01xxxxxx" required="">
                <label for="phoneNumber">Phone
                    Number</label>
            </div>
            @error('phoneNumber')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <div class="form-label-group">
                <input type="text" id="address" value="{{ old('address') }}" name="address" class="form-control"
                    placeholder="Your address" required=""> <label for="address">Address</label>
                @error('address')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <div class="form-label-group">
                <select name="role" class="form-control">
                    <option selected disabled>Select Role User</option>
                    <option value="doctor">Doctor</option>
                    <option value="patient">Patient</option>
                </select>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="form-label-group">

                <input type="file" id="inputImage" name="image" class="form-control">
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <div class="form-label-group">
                <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password"
                    required="">
                <label for="inputPassword">Password</label>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Create</button>
        </div><!-- /.form-group -->
        <!-- .form-group -->
        <div class="form-group text-center">
            <div class="custom-control custom-control-inline custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="newsletter"> <label class="custom-control-label"
                    for="newsletter">Sign me up for the newsletter</label>
            </div>
        </div><!-- /.form-group -->
        <!-- recovery links -->
        <p class="text-center text-muted mb-0"> By creating an account you agree to the <a href="#">Terms of
                Use</a> and
            <a href="#">Privacy Policy</a>.
        </p><!-- /recovery links -->
    </form><!-- /.auth-form -->
    <!-- copyright -->
    <footer class="auth-footer"> © 2018 All Rights Reserved. </footer>
    </main>
@endsection
