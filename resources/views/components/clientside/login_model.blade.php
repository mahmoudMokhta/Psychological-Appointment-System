<!-- Log In Modal Start -->
<div class="modal fade" id="loginModal">
    <div class="modal-dialog modal-dialog-centered modal-login">

        <!-- Modal Wrapper Start -->
        <div class="modal-wrapper">
            <button class="modal-close" data-bs-dismiss="modal"><i class="fas fa-times"></i></button>

            <!-- Modal Content Start -->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">@lang('login')</h5>
                    <p class="modal-description">@lang('dont_have_account')<button data-bs-toggle="modal"
                            data-bs-target="#registerModal">@lang('sign_up_free')</button></p>
                </div>
                <div class="modal-body">
                    <form action="{{route('login')}}" method="post">
                        @method('POST')
                        @csrf
                        <div class="modal-form">
                            <label class="form-label">@lang('email')</label>
                            <input type="text" class="form-control" placeholder="@lang('your_email')" name="email">
                        </div>
                        <div class="modal-form">
                            <label class="form-label">@lang('password')</label>
                            <input type="password" class="form-control" placeholder="@lang('your_password')" name="password">
                        </div>
                        <div class="modal-form d-flex justify-content-between flex-wrap gap-2">
                            <div class="form-check">
                                <input type="checkbox" name="remember" id="rememberme">
                                <label for="rememberme">@lang('rememberme')</label>
                            </div>
                            <div class="text-end">
                                <a class="modal-form__link" href="#">@lang('forgot')</a>
                            </div>
                        </div>
                        <div class="modal-form">
                            <button class="btn btn-primary btn-hover-secondary w-100">@lang('log_in')</button>
                        </div>
                    </form>

                    <div class="modal-social-option">
                        <p>@lang('or_log_in_with')</p>

                        <ul class="modal-social-btn">
                            <li><a href="#" class="btn facebook"><i class="fab fa-facebook-square"></i> Gacebook</a>
                            </li>
                            <li><a href="#" class="btn google"><i class="fab fa-google"></i> Google</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Modal Content End -->

        </div>
        <!-- Modal Wrapper End -->

    </div>
</div>
<!-- Log In Modal End -->
