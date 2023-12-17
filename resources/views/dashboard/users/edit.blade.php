<x-dashboard.links_header />
<main class="auth">
    <header id="auth-header" class="auth-header" style="background-image: url(assets/images/illustration/img-1.png);">
        <h1>
            Edit Users
        </h1>

    </header><!-- form -->
    <form class="auth-form" action="{{ route('user.update',$user->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <div class="form-label-group">
                <input name="name" value="{{ $user->name }}" type="text" id="inputName" class="form-control"
                    placeholder="Name" required="" autofocus="">
                <label for="inputName">Name</label>
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <div class="form-label-group">
                <input type="email" value="{{ $user->email }}" id="inputEmail" name="email" class="form-control"
                    placeholder="Email" required="" autofocus="">
                <label for="inputEmail">Email</label>
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <div class="form-label-group">
                <input type="text" value="{{ $user->phoneNumber }}" id="phoneNumber" name="phoneNumber"
                    class="form-control" placeholder="example : 01xxxxxx" required=""> <label for="phoneNumber">Phone
                    Number</label>
                @error('phoneNumber')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <div class="form-label-group">
                <input type="text" id="address" value="{{ $user->address }}" name="address" class="form-control"
                    placeholder="Your address" required=""> <label for="address">Address</label>
                @error('address')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <div class="form-label-group">
                <select class="form-control" id="role" name="role">
                    @if ($user->role == 'doctor')
                    <option value="doctor">Doctor</option>
                    <option value="patient">Patient</option>
                    @elseif ($user->role == 'patient')
                    <option value="patient">Patient</option>
                    <option value="doctor">Doctor</option>
                    @endif
                </select>
            </div>
        </div>


        <div class="form-group">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Update</button>
        </div><!-- /.form-group -->
        <!-- .form-group -->
        <div class="form-group text-center">
            <div class="custom-control custom-control-inline custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="newsletter"> <label class="custom-control-label"
                    for="newsletter">Sign me up for the newsletter</label>
            </div>
        </div><!-- /.form-group -->
        <!-- recovery links -->
        <p class="text-center text-muted mb-0"> By creating an account you agree to the <a href="#">Terms of Use</a> and
            <a href="#">Privacy Policy</a>.
        </p><!-- /recovery links -->
    </form><!-- /.auth-form -->
    <!-- copyright -->
    <footer class="auth-footer"> © 2018 All Rights Reserved. </footer>
</main>

<x-dashboard.links_footer />