<!-- Log In Modal Start -->
<div class="modal fade" id="registerModal">
    <div class="modal-dialog modal-dialog-centered modal-register">

        <!-- Modal Wrapper Start -->
        <div class="modal-wrapper">
            <button class="modal-close" data-bs-dismiss="modal"><i class="fas fa-times"></i></button>

            <!-- Modal Content Start -->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Sign Up</h5>
                    <p class="modal-description">Already have an account? <button data-bs-toggle="modal"
                            data-bs-target="#loginModal">Log in</button></p>
                </div>
                <div class="modal-body">

                    <form action="{{ route('register') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row gy-5">
                            <div class="col-md-6">
                                <div class="modal-form">
                                    <label class="form-label">Name</label>
                                    <input name="name" type="text" class="form-control" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="modal-form">
                                    <label class="form-label">Email</label>
                                    <input name="email" type="text" class="form-control" placeholder="Your Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="modal-form">
                                    <label class="form-label">Phone Number</label>
                                    <input name="phoneNumber" type="text" class="form-control"
                                        placeholder="example : 01xxxxxx">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="modal-form">
                                    <label class="form-label">Address</label>
                                    <input name="address" type="text" class="form-control" placeholder="Your address">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="modal-form">
                                    <label class="form-label">Profile Image</label>
                                    <input name="image" type="file" class="form-control" accept="image/*">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="modal-form">
                                    <label class="form-label">Password</label>
                                    <input name="password" type="password" class="form-control" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="modal-form">
                                    <label class="form-label">Re-Enter Password</label>
                                    <input name="password_confirmation" type="password" class="form-control"
                                        placeholder="Re-Enter Password">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="modal-form">
                                    <button class="btn btn-primary btn-hover-secondary w-100">Register</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <!-- Modal Content End -->

        </div>
        <!-- Modal Wrapper End -->

    </div>
</div>
<!-- Log In Modal End -->