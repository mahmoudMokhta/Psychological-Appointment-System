<x-clientside.layout title="Appointment System">

    <!-- Slider Section Start -->
    <div class="slider-section slider-section-04">
        <div class="slider-wrapper" style="background-image: url(frontend/assets/images/home-education-center-hero-bg.jpg);">
            <div class="container">

                <div class="row gy-10 align-items-center">
                    <div class="col-lg-6">
                        <!-- Slider Caption Start -->
                        <div class="slider-caption-04" data-aos="fade-up" data-aos-duration="1000">
                            <h4 class="slider-caption-04__sub-title">@lang('slider_top_phrase')</h4>
                            <h2 class="slider-caption-04__main-title">
                                @lang('slider_head_phrase',['line' => "<span>تسهل</span>"])

                            </h2>
                            <a href="#" class="slider-caption-04__btn btn btn-white btn-hover-primary">@lang('book_appointment')</a>
                        </div>
                        <!-- Slider Caption End -->
                    </div>
                    <div class="col-lg-6">

                        <!-- Slider Register Form Start -->
                        <div class="slider-register__box text-center" data-aos="fade-up" data-aos-duration="1000">
                            <h4 class="slider-register__title">
                                @lang('register_for_free_account')<br>
                                @lang('to_access_more_num_of_doctors',['num' => "<span>1200+</span>"])
                            </h4>

                            <form action="#">
                                <div class="slider-register__form">

                                    <div class="slider-register__input">
                                        <i class="fas fa-user"></i>
                                        <input type="text" class="form-control" placeholder="@lang('your_name')">
                                    </div>

                                    <div class="slider-register__input">
                                        <i class="fas fa-envelope"></i>
                                        <input type="email" class="form-control" placeholder="@lang('your_email')">
                                    </div>

                                    <div class="slider-register__input">
                                        <i class="fas fa-key"></i>
                                        <input type="password" class="form-control" placeholder="@lang('password')">
                                    </div>

                                    <div class="slider-register__btn">
                                        <button class="btn btn-primary btn-hover-secondary w-100">@lang('sign_up')</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                        <!-- Slider Register Form End -->

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Slider Section End -->

    <!-- Offcanvas Start -->
    <div class="offcanvas offcanvas-end offcanvas-mobile" id="offcanvasMobileMenu" style="background-image: url(frontend/assets/images/mobile-bg.jpg);">
        <div class="offcanvas-header bg-white">
            <div class="offcanvas-logo">
                <a class="offcanvas-logo__logo" href="#"><img src="{{asset('frontend/assets/images/logo.png')}}" alt="Logo"></a>
            </div>
            <button type="button" class="offcanvas-close" data-bs-dismiss="offcanvas"><i class="fas fa-times"></i></button>
        </div>

        <div class="offcanvas-body">
            <nav class="canvas-menu">
                <ul class="offcanvas-menu">
                    <li><a class="active" href="{{route('home')}}"><span>@lang('home')</span></a>

                        <ul class="mega-menu">
                            <li>
                                <!-- Mega Menu Content Start -->
                                <div class="mega-menu-content">
                                    <div class="row">
                                        <div class="col-xl-3">
                                            <div class="menu-content-list">
                                                <a href="index.html" class="menu-content-list__link">@lang('menu_example') <span class="badge hot">@lang('hot')</span></a>
                                                <a href="index.html" class="menu-content-list__link">@lang('menu_example') <span class="badge new">@lang('new')</span></a>
                                                <a href="index-course-hub.html" class="menu-content-list__link">@lang('menu_example')</a>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="menu-content-list">
                                                <a href="index.html" class="menu-content-list__link">@lang('menu_example') <span class="badge hot">@lang('hot')</span></a>
                                                <a href="index.html" class="menu-content-list__link">@lang('menu_example') <span class="badge new">@lang('new')</span></a>
                                                <a href="index-course-hub.html" class="menu-content-list__link">@lang('menu_example')</a>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="menu-content-banner" style="background-image: url(frontend/assets/images/home-megamenu-bg.jpg);">
                                                <h4 class="menu-content-banner__title">@lang('menu_banner_link')</h4>
                                                <a href="#" class="menu-content-banner__btn btn btn-primary btn-hover-secondary">@lang('menu_banner_button')</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Mega Menu Content Start -->
                            </li>
                        </ul>




                    </li>
                    <li>
                        <a href="#"><span>Courses</span></a>
                        <ul class="sub-menu">
                            <li><a href="course-grid-01.html"><span>Grid Basic Layout</span></a></li>
                            <li><a href="course-grid-02.html"><span>Grid Modern Layout</span></a></li>
                            <li><a href="course-grid-left-sidebar.html"><span>Grid Left Sidebar</span></a></li>
                            <li><a href="course-grid-right-sidebar.html"><span>Grid Right Sidebar</span></a></li>
                            <li><a href="course-list.html"><span>List Basic Layout</span></a></li>
                            <li><a href="course-list-left-sidebar.html"><span>List Left Sidebar</span></a></li>
                            <li><a href="course-list-right-sidebar.html"><span>List Right Sidebar</span></a></li>
                            <li><a href="course-category.html"><span>Category Page</span></a></li>
                            <li>
                                <a href="#"><span>Single Layout</span></a>
                                <ul class="sub-menu">
                                    <li><a href="{{route('booking',__('dummy_doctor_description'))}}"><span>Layout 01</span></a></li>
                                    <li><a href="course-single-layout-02.html"><span>Layout 02</span></a></li>
                                    <li><a href="course-single-layout-03.html"><span>Layout 03</span></a></li>
                                    <li><a href="course-single-layout-04.html"><span>Layout 04</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><span>Blog</span></a>
                        <ul class="sub-menu">
                            <li><a href="blog-grid-01.html"><span>Grid Basic Layout</span></a></li>
                            <li><a href="blog-grid-02.html"><span>Grid Wide</span></a></li>
                            <li><a href="blog-grid-left-sidebar.html"><span>Grid Left Sidebar</span></a></li>
                            <li><a href="blog-grid-right-sidebar.html"><span>Grid Right Sidebar</span></a></li>
                            <li><a href="blog-list-style-01.html"><span>List Layout 01</span></a></li>
                            <li><a href="blog-list-style-02.html"><span>List Layout 02</span></a></li>
                            <li>
                                <a href="#"><span>Single Layouts</span></a>
                                <ul class="sub-menu">
                                    <li><a href="blog-details-left-sidebar.html"><span>Left Sidebar</span></a></li>
                                    <li><a href="blog-details-right-sidebar.html"><span>Right Sidebar</span></a></li>
                                    <li><a href="blog-details.html"><span>No Sidebar</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><span>Pages</span></a>
                        <ul class="sub-menu">
                            <li><a href="become-an-instructor.html"><span>Become an Instructor</span></a></li>
                            <li>
                                <a href="instructors.html"><span>Instructor</span></a>
                                <ul class="sub-menu">
                                    <li><a href="dashboard-my-courses.html"><span>My Courses</span></a></li>
                                    <li><a href="dashboard-announcement.html"><span>Announcements</span></a></li>
                                    <li><a href="dashboard-withdraw.html"><span>Withdrawals</span></a></li>
                                    <li><a href="dashboard-quiz-attempts.html"><span>Quiz Attempts</span></a></li>
                                    <li><a href="dashboard-question-answer.html"><span>Question & Answer</span></a></li>
                                    <li><a href="dashboard-assignments.html"><span>Assignments</span></a></li>
                                    <li><a href="dashboard-students.html"><span>My Students</span></a></li>
                                </ul>
                            </li>
                            <li><a href="about.html"><span>About us</span></a></li>
                            <li><a href="about-02.html"><span>About us 02</span></a></li>
                            <li><a href="contact-us.html"><span>Contact us</span></a></li>
                            <li><a href="contact-us-02.html"><span>Contact us 02</span></a></li>
                            <li><a href="membership-plans.html"><span>Membership plans</span></a></li>
                            <li><a href="faqs.html"><span>FAQs</span></a></li>
                            <li><a href="404-page.html"><span>404 Page</span></a></li>
                            <li>
                                <a href="#"><span>Dashboard</span></a>
                                <ul class="sub-menu">
                                    <li><a href="dashboard-index.html"><span>Dashboard</span></a></li>
                                    <li><a href="dashboard-student-index.html"><span>Dashboard Student</span></a></li>
                                    <li><a href="dashboard-profile.html"><span>My Profile</span></a></li>
                                    <li><a href="dashboard-all-course.html"><span>Enrolled Courses</span></a></li>
                                    <li><a href="dashboard-wishlist.html"><span>Wishlist</span></a></li>
                                    <li><a href="dashboard-reviews.html"><span>Reviews</span></a></li>
                                    <li><a href="dashboard-my-quiz-attempts.html"><span>My Quiz Attempts</span></a></li>
                                    <li><a href="dashboard-purchase-history.html"><span>Purchase History</span></a></li>
                                    <li><a href="dashboard-settings.html"><span>Settings</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><span>Features</span></a>
                        <ul class="sub-menu">
                            <li><a href="#"><span>Events</span></a>
                                <ul class="sub-menu">
                                    <li><a href="event-grid-sidebar.html"><span>Event Listing 01</span></a></li>
                                    <li><a href="event-grid.html"><span>Event Listing 02</span></a></li>
                                    <li><a href="event-list.html"><span>Event Listing 03</span></a></li>
                                    <li><a href="event-list-sidebar.html"><span>Event Listing 04</span></a></li>
                                    <li>
                                        <a href="#"><span>Single Layouts</span></a>
                                        <ul class="sub-menu">
                                            <li><a href="event-details-layout-01.html"><span>Layout 01</span></a></li>
                                            <li><a href="event-details-layout-02.html"><span>Layout 02</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#"><span>Shop</span></a>
                                <ul class="sub-menu">
                                    <li><a href="shop-default.html"><span>Shop – Default</span></a></li>
                                    <li><a href="shop-left-sidebar.html"><span>Shop – Left Sidebar</span></a></li>
                                    <li><a href="shop-right-sidebar.html"><span>Shop – Right Sidebar</span></a></li>
                                    <li><a href="my-account.html"><span>My account</span></a></li>
                                    <li><a href="wishlist.html"><span>Wishlist</span></a></li>
                                    <li><a href="cart.html"><span>Cart</span></a></li>
                                    <li><a href="cart-empty.html"><span>Cart Empty</span></a></li>
                                    <li><a href="checkout.html"><span>Checkout</span></a></li>
                                    <li>
                                        <a href="#"><span>Single Layouts</span></a>
                                        <ul class="sub-menu">
                                            <li><a href="shop-single-list-left-sidebar.html"><span>List – Left Sidebar</span></a></li>
                                            <li><a href="shop-single-list-right-sidebar.html"><span>List – Right Sidebar</span></a></li>
                                            <li><a href="shop-single-list-no-sidebar.html"><span>List – No Sidebar</span></a></li>
                                            <li><a href="shop-single-tab-left-sidebar.html"><span>Tabs – Left Sidebar</span></a></li>
                                            <li><a href="shop-single-tab-right-sidebar.html"><span>Tabs – Right Sidebar</span></a></li>
                                            <li><a href="shop-single-tab-no-sidebar.html"><span>Tabs – No Sidebar</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="zoom-meetings.html"><span>Zoom Meetings</span></a></li>
                            <li><a href="zoom-meetings-single.html"><span>Zoom Meeting Single</span></a></li>
                        </ul>
                    </li>

















                </ul>
            </nav>
        </div>

        <!-- Header User Button Start -->
        <div class="offcanvas-user d-lg-none">
            <div class="offcanvas-user__button">
                <button class="offcanvas-user__login btn btn-secondary btn-hover-secondarys" data-bs-toggle="modal" data-bs-target="#loginModal">Log In</button>
            </div>
            <div class="offcanvas-user__button">
                <button class="offcanvas-user__signup btn btn-primary btn-hover-primary" data-bs-toggle="modal" data-bs-target="#registerModal">Sign Up</button>
            </div>
        </div>
        <!-- Header User Button End -->

    </div>
    <!-- Offcanvas End -->

    <!-- Categories Section Start -->
    <div class="categories-section bg-color-03 section-padding-01">
        <div class="container">

            <!-- Section Title Start -->
            <div class="section-title" data-aos="fade-up" data-aos-duration="1000">
                <h2 class="section-title__title-03">
                    <mark>
                        @lang('specialties')
                    </mark> </h2>
            </div>
            <!-- Section Title End -->

            <div class="row g-6">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <!-- Categories Item Start -->
                    <div class="categories-item-02" data-aos="fade-up" data-aos-duration="1000">
                        <a class="categories-item-02__link" href="course-category.html">
                            <div class="categories-item-02__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="512" viewBox="0 0 512 512" width="512">
                                    <path d="m490.848 162.982c-11.265-18.223-33.212-52.734-71.62-124.644-2.608-4.892-7.918-7.338-13.228-7.338s-10.62 2.446-13.228 7.339c-38.965 72.979-59.854 107.314-71.074 125.435-8.626 13.923-20.698 31.618-20.698 62.226 0 57.891 47.109 105 105 105s106-47.109 106-105c0-30.802-11.84-47.93-21.152-63.018z" fill="#ff7b4a"></path>
                                    <path d="m512 226c0-30.802-11.84-47.93-21.152-63.018-11.265-18.223-33.212-52.734-71.62-124.644-2.608-4.892-7.918-7.338-13.228-7.338v300c57.891 0 106-47.109 106-105z" fill="#e63950"></path>
                                    <path d="m339.848 162.982c-11.265-18.223-32.212-52.734-70.62-124.644-2.608-4.892-7.918-7.338-13.228-7.338s-10.62 2.446-13.228 7.339c-38.965 72.979-59.854 107.314-71.074 125.435-8.626 13.923-20.698 31.618-20.698 62.226 0 57.891 47.109 105 105 105s105-47.109 105-105c0-30.802-11.84-47.93-21.152-63.018z" fill="#7ed8f6"></path>
                                    <path d="m361 226c0-30.802-11.84-47.93-21.152-63.018-11.265-18.223-32.212-52.734-70.62-124.644-2.608-4.892-7.918-7.338-13.228-7.338v300c57.891 0 105-47.109 105-105z" fill="#6aa9ff"></path>
                                    <path d="m189.848 162.982c-11.265-18.223-32.212-52.734-70.62-124.644-2.608-4.892-7.918-7.338-13.228-7.338s-10.62 2.446-13.228 7.339c-38.965 72.979-60.854 107.314-72.074 125.435-8.626 13.923-20.698 31.618-20.698 62.226 0 57.891 48.109 105 106 105s105-47.109 105-105c0-30.802-11.84-47.93-21.152-63.018z" fill="#fed843"></path>
                                    <path d="m211 226c0-30.802-11.84-47.93-21.152-63.018-11.265-18.223-32.212-52.734-70.62-124.644-2.608-4.892-7.918-7.338-13.228-7.338v300c57.891 0 105-47.109 105-105z" fill="#ff9f00"></path>
                                    <path d="m497 421h-241-241c-8.284 0-15 6.716-15 15s6.716 15 15 15h241 241c8.284 0 15-6.716 15-15s-6.716-15-15-15z" fill="#5f55af"></path>
                                    <path d="m512 436c0-8.284-6.716-15-15-15h-241v30h241c8.284 0 15-6.716 15-15z" fill="#453d83"></path>
                                    <path d="m296.605 395.395-30-30c-2.93-2.93-6.768-4.395-10.605-4.395s-7.676 1.465-10.605 4.395l-30 30c-2.813 2.812-4.395 6.621-4.395 10.605v60c0 8.291 6.709 15 15 15h30 30c8.291 0 15-6.709 15-15v-60c0-3.984-1.582-7.793-4.395-10.605z" fill="#d5e8fe"></path>
                                    <path d="m301 466v-60c0-3.984-1.582-7.793-4.395-10.605l-30-30c-2.93-2.93-6.768-4.395-10.605-4.395v120h30c8.291 0 15-6.709 15-15z" fill="#a8d3d8"></path>
                                </svg>
                            </div>
                            <div class="categories-item-02__info">
                                <h4 class="categories-item-02__name">Art & Design</h4>
                                <p class="categories-item-02__description">Fun & Challenging</p>
                            </div>
                        </a>
                    </div>
                    <!-- Categories Item End -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <!-- Categories Item Start -->
                    <div class="categories-item-02" data-aos="fade-up" data-aos-duration="1000">
                        <a class="categories-item-02__link" href="course-category.html">
                            <div class="categories-item-02__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="512" viewBox="0 0 512 512" width="512">
                                    <g>
                                        <path d="m497 31h-482c-8.401 0-15 6.599-15 15v420c0 8.401 6.599 15 15 15h482c8.401 0 15-6.599 15-15v-420c0-8.401-6.599-15-15-15z" fill="#edf5ff"></path>
                                        <path d="m512 46v420c0 8.401-6.599 15-15 15h-241v-450h241c8.401 0 15 6.599 15 15z" fill="#d5e8fe"></path>
                                        <path d="m436 151h-180-180c-8.401 0-15 6.599-15 15v240c0 8.401 6.599 15 15 15h180 180c8.401 0 15-6.599 15-15v-240c0-8.401-6.599-15-15-15z" fill="#6aa9ff"></path>
                                        <path d="m451 166v240c0 8.401-6.599 15-15 15h-180v-270h180c8.401 0 15 6.599 15 15z" fill="#4895ff"></path>
                                        <circle cx="436" cy="106" fill="#e63950" r="15"></circle>
                                        <circle cx="376" cy="106" fill="#4895ff" r="15"></circle>
                                        <circle cx="316" cy="106" fill="#4895ff" r="15"></circle>
                                        <path d="m318.52 324.32c-4.6-6.899-2.739-16.201 4.16-20.801l26.279-17.519-26.279-17.52c-6.899-4.6-8.76-13.901-4.16-20.801 4.585-6.899 13.843-8.76 20.801-4.16l45 30c4.175 2.783 6.68 7.471 6.68 12.48s-2.505 9.697-6.68 12.48l-45 30c-7.02 4.654-16.281 2.633-20.801-4.159z" fill="#d5e8fe"></path>
                                        <path d="m172.68 328.48-45-30c-4.175-2.783-6.68-7.471-6.68-12.48s2.505-9.697 6.68-12.48l45-30c6.899-4.6 16.201-2.739 20.801 4.16s2.739 16.201-4.16 20.801l-26.28 17.519 26.279 17.52c6.899 4.6 8.76 13.901 4.16 20.801-4.521 6.793-13.785 8.81-20.8 4.159z" fill="#edf5ff"></path>
                                        <path d="m256 91h-180c-8.291 0-15 6.709-15 15s6.709 15 15 15h180c8.291 0 15-6.709 15-15s-6.709-15-15-15z" fill="#5f55af"></path>
                                        <path d="m271 106c0-8.291-6.709-15-15-15v30c8.291 0 15-6.709 15-15z" fill="#453d83"></path>
                                        <path d="m292.709 212.582c-7.412-3.706-16.392-.688-20.127 6.709l-16.582 33.164-43.418 86.836c-3.706 7.412-.703 16.421 6.709 20.127 7.48 3.715 16.436.652 20.127-6.709l16.582-33.164 43.418-86.836c3.706-7.412.703-16.421-6.709-20.127z" fill="#edf5ff"></path>
                                        <path d="m292.709 212.582c-7.412-3.706-16.392-.688-20.127 6.709l-16.582 33.164v67.09l43.418-86.836c3.706-7.412.703-16.421-6.709-20.127z" fill="#d5e8fe"></path>
                                    </g>
                                </svg>
                            </div>
                            <div class="categories-item-02__info">
                                <h4 class="categories-item-02__name">Development</h4>
                                <p class="categories-item-02__description">Code with Confident</p>
                            </div>
                        </a>
                    </div>
                    <!-- Categories Item End -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <!-- Categories Item Start -->
                    <div class="categories-item-02" data-aos="fade-up" data-aos-duration="1000">
                        <a class="categories-item-02__link" href="course-category.html">
                            <div class="categories-item-02__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                        <path style="fill:#E8A137;" d="M437.881,279.46l-50.28-156.2c-0.756-2.35-2.081-4.477-3.856-6.191L267.298,4.566  C264.266,1.637,260.216,0,256,0l0,0c-4.216,0-8.267,1.637-11.298,4.566L128.255,117.069c-1.775,1.715-3.1,3.842-3.856,6.191  l-50.28,156.2c-1.141,3.543-0.923,7.384,0.61,10.776l55.161,122c1.539,3.402,4.291,6.108,7.718,7.59l112.442,48.588  c1.899,0.82,3.924,1.23,5.95,1.23c2.025,0,4.052-0.41,5.95-1.23l112.442-48.588c3.427-1.481,6.179-4.188,7.718-7.59l55.161-122  C438.804,286.845,439.022,283.004,437.881,279.46z"></path>
                                    <path style="fill:#FFCC30;" d="M256,0L256,0c-4.216,0-8.267,1.637-11.298,4.566L128.255,117.069c-1.775,1.715-3.1,3.842-3.856,6.191  l-50.28,156.2c-1.141,3.543-0.923,7.384,0.61,10.776l55.161,122c1.539,3.402,4.291,6.108,7.718,7.59l112.442,48.588  c1.899,0.82,3.924,1.23,5.95,1.23V0z"></path>
                                    <path style="fill:#99522E;" d="M362.345,295.467c-5.068-6.553-14.489-7.758-21.042-2.688L271,347.151v-48.173  c0.397-0.252,0.789-0.519,1.168-0.813l77.574-59.997c6.553-5.068,7.757-14.489,2.688-21.042s-14.49-7.758-21.042-2.688L271,261.144  v-52.471l48.4-37.433c6.553-5.068,7.757-14.489,2.688-21.042s-14.49-7.758-21.042-2.688L271,170.748V92.65c0-8.284-6.716-15-15-15  s-15,6.716-15,15v78.097l-30.047-23.238c-6.553-5.068-15.974-3.865-21.042,2.688c-5.068,6.553-3.865,15.974,2.688,21.042  l48.4,37.433v52.471l-60.389-46.705c-6.554-5.067-15.975-3.865-21.042,2.688c-5.068,6.553-3.865,15.974,2.688,21.042l77.574,59.997  c0.38,0.294,0.771,0.561,1.168,0.813v48.173l-70.304-54.373c-6.553-5.068-15.974-3.864-21.042,2.688  c-5.068,6.553-3.865,15.974,2.688,21.042L241,385.077V497c0,8.284,6.716,15,15,15s15-6.716,15-15V385.077l88.657-68.568  C366.21,311.441,367.414,302.02,362.345,295.467z"></path>
                                    <path style="fill:#802812;" d="M362.345,295.467c-5.068-6.553-14.489-7.758-21.042-2.688L271,347.151v-48.173  c0.397-0.252,0.789-0.519,1.168-0.813l77.574-59.997c6.553-5.068,7.757-14.489,2.688-21.042s-14.49-7.758-21.042-2.688L271,261.144  v-52.471l48.4-37.433c6.553-5.068,7.757-14.489,2.688-21.042s-14.49-7.758-21.042-2.688L271,170.748V92.65c0-8.284-6.716-15-15-15  c0,0-0.229,434.35,0,434.35c8.284,0,15-6.716,15-15V385.077l88.657-68.568C366.21,311.441,367.414,302.02,362.345,295.467z"></path>
                                    </svg>
                            </div>
                            <div class="categories-item-02__info">
                                <h4 class="categories-item-02__name">Lifestyle</h4>
                                <p class="categories-item-02__description">New Skills, New You</p>
                            </div>
                        </a>
                    </div>
                    <!-- Categories Item End -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <!-- Categories Item Start -->
                    <div class="categories-item-02" data-aos="fade-up" data-aos-duration="1000">
                        <a class="categories-item-02__link" href="course-category.html">
                            <div class="categories-item-02__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="512" viewBox="0 0 512 512" width="512">
                                    <g>
                                        <g>
                                            <path d="m386.057 143.491-119.08-138.065c-2.849-3.304-6.995-5.203-11.358-5.203s-8.51 1.899-11.358 5.203l-119.081 138.065c-3.832 4.442-4.722 10.71-2.279 16.044 2.443 5.333 7.771 8.753 13.638 8.753h29.895v328.372c0 5.75 3.238 10.737 7.987 13.255h158.472c4.627-2.554 7.765-7.478 7.765-13.138v-328.49h34.042c5.866 0 11.194-3.42 13.638-8.753 2.44-5.332 1.551-11.601-2.281-16.043z" fill="#c4e83a"></path>
                                            <g style="fill:none;stroke:#000;stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10">
                                                <path d="m134.552 496.66v-87.153"></path>
                                                <path d="m376.5 496.66v-87.153"></path>
                                            </g>
                                        </g>
                                        <g>
                                            <path d="m386.057 143.491-119.08-138.065c-2.849-3.304-6.995-5.203-11.358-5.203v509.693h77.273c4.627-2.554 7.765-7.478 7.765-13.138v-328.49h34.042c5.866 0 11.194-3.42 13.638-8.753 2.441-5.333 1.552-11.602-2.28-16.044z" fill="#90d960"></path>
                                        </g>
                                        <g style="fill:none;stroke:#000;stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10">
                                            <path d="m134.552 496.66v-87.153"></path>
                                            <path d="m376.5 496.66v-87.153"></path>
                                        </g>
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <path d="m148.75 404.368h-41.5c-59.19 0-107.33 48.2-107.25 107.41h256v-.15c0-59.14-48.11-107.26-107.25-107.26z" fill="#5ecbf1"></path>
                                                        </g>
                                                        <g>
                                                            <path d="m256 511.628v.15h-128v-107.41h20.75c59.14 0 107.25 48.12 107.25 107.26z" fill="#4793ff"></path>
                                                        </g>
                                                        <g>
                                                            <ellipse cx="128" cy="360.034" fill="#e5ae8c" rx="76.814" ry="76.814" transform="matrix(.383 -.924 .924 .383 -253.612 340.512)"></ellipse>
                                                            <g>
                                                                <path d="m128 283.22v153.627c42.355 0 76.813-34.458 76.813-76.814.001-42.354-34.458-76.813-76.813-76.813z" fill="#ffddce"></path>
                                                                <path d="m51.187 360.034c0 42.355 34.458 76.814 76.814 76.814v-153.628c-42.356 0-76.814 34.459-76.814 76.814z" fill="#ffece2"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path d="m404.75 404.368h-41.5c-59.14 0-107.25 48.12-107.25 107.26v.15h256c.08-59.21-48.06-107.41-107.25-107.41z" fill="#ff0059"></path>
                                                        </g>
                                                        <g>
                                                            <path d="m512 511.778h-128v-107.41h20.75c59.19 0 107.33 48.2 107.25 107.41z" fill="#d20041"></path>
                                                        </g>
                                                        <g>
                                                            <ellipse cx="384" cy="360.034" fill="#e5ae8c" rx="76.814" ry="76.814" transform="matrix(.383 -.924 .924 .383 -95.578 577.025)"></ellipse>
                                                            <g>
                                                                <path d="m384 283.22v153.627c42.355 0 76.813-34.458 76.813-76.814.001-42.354-34.458-76.813-76.813-76.813z" fill="#dd9366"></path>
                                                                <path d="m307.187 360.034c0 42.355 34.458 76.814 76.814 76.814v-153.628c-42.356 0-76.814 34.459-76.814 76.814z" fill="#e5ae8c"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="categories-item-02__info">
                                <h4 class="categories-item-02__name">Personal Development</h4>
                                <p class="categories-item-02__description">Develop Yourself</p>
                            </div>
                        </a>
                    </div>
                    <!-- Categories Item End -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <!-- Categories Item Start -->
                    <div class="categories-item-02" data-aos="fade-up" data-aos-duration="1000">
                        <a class="categories-item-02__link" href="course-category.html">
                            <div class="categories-item-02__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="512" viewBox="0 0 512 512" width="512">
                                    <g>
                                        <path d="m346 15v467h-135l-30 30h-150c-8.401 0-15-6.599-15-15v-482c0-8.401 6.599-15 15-15h300c8.401 0 15 6.599 15 15z" fill="#edf5ff"></path>
                                        <g fill="#d5e8fe">
                                            <path d="m346 15v467h-135l-30 30v-512h150c8.401 0 15 6.599 15 15z"></path>
                                            <path d="m286 106c0 8.401-6.599 15-15 15h-180c-8.401 0-15-6.599-15-15s6.599-15 15-15h180c8.401 0 15 6.599 15 15z"></path>
                                            <path d="m226 166c0 8.401-6.599 15-15 15h-120c-8.401 0-15-6.599-15-15s6.599-15 15-15h120c8.401 0 15 6.599 15 15z"></path>
                                            <path d="m196 226c0 8.401-6.599 15-15 15h-90c-8.401 0-15-6.599-15-15s6.599-15 15-15h90c8.401 0 15 6.599 15 15z"></path>
                                        </g>
                                        <g>
                                            <path d="m331 211c-41.353 0-75 33.647-75 75 0 8.291 6.709 15 15 15s15-6.709 15-15c0-24.814 20.186-45 45-45s45 20.186 45 45c0 8.291 6.709 15 15 15s15-6.709 15-15c0-41.353-33.647-75-75-75z" fill="#47568c"></path>
                                            <path d="m376 286c0 8.291 6.709 15 15 15s15-6.709 15-15c0-41.353-33.647-75-75-75v30c24.814 0 45 20.186 45 45z" fill="#29376d"></path>
                                            <path d="m467.251 376h-136.251-135l-30 30v91c0 8.291 6.709 15 15 15h150 150c8.291 0 15-6.709 15-15v-91z" fill="#61729b"></path>
                                            <path d="m496 497v-91l-28.749-30h-136.251v136h150c8.291 0 15-6.709 15-15z" fill="#47568c"></path>
                                            <path d="m481 271h-150-150c-8.291 0-15 6.709-15 15v120h165 165v-120c0-8.291-6.709-15-15-15z" fill="#6aa9ff"></path>
                                            <path d="m496 286c0-8.291-6.709-15-15-15h-150v135h165z" fill="#4895ff"></path>
                                            <path d="m361 361h-30-30c-8.291 0-15 6.709-15 15v30c0 24.814 20.186 45 45 45s45-20.186 45-45v-30c0-8.291-6.709-15-15-15z" fill="#edf5ff"></path>
                                            <path d="m376 406v-30c0-8.291-6.709-15-15-15h-30v90c24.814 0 45-20.186 45-45z" fill="#d5e8fe"></path>
                                        </g>
                                        <path d="m196 226c0 8.401-6.599 15-15 15v-30c8.401 0 15 6.599 15 15z" fill="#b5dbff"></path>
                                        <path d="m226 166c0 8.401-6.599 15-15 15h-30v-30h30c8.401 0 15 6.599 15 15z" fill="#b5dbff"></path>
                                        <path d="m286 106c0 8.401-6.599 15-15 15h-90v-30h90c8.401 0 15 6.599 15 15z" fill="#b5dbff"></path>
                                    </g>
                                </svg>
                            </div>
                            <div class="categories-item-02__info">
                                <h4 class="categories-item-02__name">Business</h4>
                                <p class="categories-item-02__description">Improve your business</p>
                            </div>
                        </a>
                    </div>
                    <!-- Categories Item End -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <!-- Categories Item Start -->
                    <div class="categories-item-02" data-aos="fade-up" data-aos-duration="1000">
                        <a class="categories-item-02__link" href="course-category.html">
                            <div class="categories-item-02__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="512" viewBox="0 0 512 512" width="512">
                                    <g>
                                        <g>
                                            <path d="m360 136v60c0 8.28-6.72 15-15 15s-15-6.72-15-15v-60c0-8.28 6.72-15 15-15s15 6.72 15 15z" fill="#fabe2c"></path>
                                        </g>
                                        <g>
                                            <path d="m420 106v90c0 8.28-6.72 15-15 15s-15-6.72-15-15v-90c0-8.28 6.72-15 15-15s15 6.72 15 15z" fill="#6aa9ff"></path>
                                        </g>
                                        <g>
                                            <path d="m480 76v120c0 8.28-6.72 15-15 15s-15-6.72-15-15v-120c0-8.28 6.72-15 15-15s15 6.72 15 15z" fill="#ff435b"></path>
                                        </g>
                                        <path d="m270 46v195l-127-8-96.2-62.48c34.44-84.05 116.27-139.52 208.2-139.52 8.28 0 15 6.72 15 15z" fill="#fed843"></path>
                                        <path d="m480 256c0 119.33-92.66 216.8-210 224.5-4.96.33-9.96.5-15 .5-37.49 0-74.13-9.27-106.82-26.93l29.9-122.07 91.92-91h195c8.28 0 15 6.72 15 15z" fill="#ff7b4a"></path>
                                        <path d="m480 256c0 119.33-92.66 216.8-210 224.5v-239.5h195c8.28 0 15 6.72 15 15z" fill="#ff435b"></path>
                                        <path d="m270 241c-10.156 17.764-123.875 216.661-129.5 226.5-4.4 7.04-13.67 9.15-20.68 4.76-72.8-45.6-119.82-126.15-119.82-216.26 0-27.58 4.38-54.72 13.02-80.66 2.62-7.85 11.12-12.11 18.98-9.49.161.051 235.875 74.479 238 75.15z" fill="#7ed8f6"></path>
                                        <g>
                                            <path d="m512 196c0 8.28-6.72 15-15 15h-182c-8.28 0-15-6.72-15-15s6.72-15 15-15h182c8.28 0 15 6.72 15 15z" fill="#61729b"></path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="categories-item-02__info">
                                <h4 class="categories-item-02__name">Finance</h4>
                                <p class="categories-item-02__description">Fun & Challenging</p>
                            </div>
                        </a>
                    </div>
                    <!-- Categories Item End -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <!-- Categories Item Start -->
                    <div class="categories-item-02" data-aos="fade-up" data-aos-duration="1000">
                        <a class="categories-item-02__link" href="course-category.html">
                            <div class="categories-item-02__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.002 512.002" style="enable-background:new 0 0 512.002 512.002;" xml:space="preserve">
                                        <path style="fill:#F77E00;" d="M304.699,486.325c-16.184,0-32.367-6.16-44.688-18.478l-42.604-42.605  c-5.857-5.857-5.857-15.355,0.001-21.213c5.858-5.857,15.355-5.857,21.213,0l42.603,42.605  c12.943,12.943,34.008,12.943,46.951-0.002c12.945-12.943,12.945-34.008,0.002-46.953l-25.563-25.564  c-5.858-5.857-5.857-15.355,0-21.213c5.857-5.855,15.355-5.857,21.213,0l25.563,25.564c24.641,24.643,24.641,64.738-0.002,89.381  C337.068,480.165,320.883,486.325,304.699,486.325z"></path>
                                    <path style="fill:#FFDA2D;" d="M423.234,293.261L218.739,88.763c-3.266-3.266-7.856-4.844-12.439-4.281  c-4.584,0.564-8.653,3.211-11.029,7.17L24.86,375.675c-3.541,5.902-2.611,13.457,2.255,18.324L118,484.886  c2.892,2.891,6.732,4.393,10.611,4.393c2.649,0,5.317-0.699,7.712-2.137L420.346,316.73c3.961-2.375,6.605-6.445,7.17-11.029  C428.08,301.116,426.501,296.527,423.234,293.261z"></path>
                                    <g>
                                        <path style="fill:#FF9F00;" d="M320.989,191.015l-248.43,248.43L118,484.886c2.892,2.891,6.732,4.393,10.611,4.393   c2.649,0,5.317-0.699,7.712-2.137L420.346,316.73c3.961-2.375,6.605-6.445,7.17-11.029c0.565-4.584-1.015-9.174-4.281-12.439   L320.989,191.015z"></path>
                                        <path style="fill:#FF9F00;" d="M435.35,341.589c-3.839,0-7.678-1.465-10.606-4.395L174.806,87.257   c-5.858-5.857-5.858-15.355,0-21.213c5.857-5.858,15.355-5.858,21.213,0l249.938,249.938c5.857,5.857,5.857,15.355,0,21.213   C443.028,340.124,439.189,341.589,435.35,341.589z"></path>
                                        <path style="fill:#FF9F00;" d="M151.328,512.001c-3.839,0-7.677-1.463-10.607-4.393L4.393,371.277   c-5.857-5.857-5.857-15.355,0.001-21.213c5.858-5.857,15.355-5.857,21.213,0l136.328,136.332   c5.857,5.857,5.857,15.355-0.001,21.213C159.006,510.536,155.166,512.001,151.328,512.001z"></path>
                                    </g>
                                    <path style="fill:#D6E9FF;" d="M412.631,114.372c-3.839,0-7.678-1.465-10.607-4.393c-5.858-5.857-5.858-15.355,0-21.213  l84.369-84.369c5.857-5.857,15.355-5.857,21.213,0c5.858,5.857,5.858,15.356,0,21.213l-84.369,84.369  C420.308,112.907,416.47,114.372,412.631,114.372z"></path>
                                    <path style="fill:#B5D9FF;" d="M507.606,4.398c5.858,5.857,5.858,15.356,0,21.213l-84.369,84.369  c-2.929,2.928-6.768,4.393-10.606,4.393c-3.839,0-7.678-1.465-10.607-4.393L507.606,4.398z"></path>
                                    <path style="fill:#D6E9FF;" d="M321.732,91.655c-2.103,0-4.24-0.445-6.275-1.383c-7.523-3.473-10.807-12.383-7.336-19.906  L336.57,8.718c3.471-7.522,12.382-10.803,19.904-7.336c7.521,3.473,10.806,12.383,7.334,19.906l-28.447,61.648  C332.829,88.423,327.402,91.655,321.732,91.655z"></path>
                                    <path style="fill:#B5D9FF;" d="M435.361,205.263c-5.672,0-11.098-3.232-13.63-8.721c-3.471-7.521-0.187-16.434,7.336-19.904  l61.647-28.441c7.524-3.469,16.434-0.188,19.904,7.336c3.471,7.521,0.186,16.434-7.336,19.904l-61.646,28.441  C439.6,204.818,437.464,205.263,435.361,205.263z"></path>
                                    <g>
                                        <path style="fill:#F77E00;" d="M320.989,191.015l-21.213,21.213l124.968,124.967c2.929,2.93,6.767,4.395,10.606,4.395   s7.678-1.465,10.607-4.395c5.857-5.857,5.857-15.355,0-21.213L320.989,191.015z"></path>
                                        <path style="fill:#F77E00;" d="M140.721,507.609c2.93,2.93,6.768,4.393,10.607,4.393c3.838,0,7.678-1.465,10.606-4.393   c5.858-5.857,5.858-15.355,0.001-21.213l-68.163-68.164l-21.213,21.213L140.721,507.609z"></path>
                                    </g>

                                    </svg>
                            </div>
                            <div class="categories-item-02__info">
                                <h4 class="categories-item-02__name">Marketing</h4>
                                <p class="categories-item-02__description">Promote Your Brands</p>
                            </div>
                        </a>
                    </div>
                    <!-- Categories Item End -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <!-- Categories Item Start -->
                    <div class="categories-item-02" data-aos="fade-up" data-aos-duration="1000">
                        <a class="categories-item-02__link" href="course-category.html">
                            <div class="categories-item-02__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="512" viewBox="0 0 512 512" width="512">
                                    <g>
                                        <path d="m116 131h-60c-8.284 0-15-6.716-15-15v-40c0-19.299 15.701-35 35-35h20c19.299 0 35 15.701 35 35v40c0 8.284-6.716 15-15 15z" fill="#ff9d21"></path>
                                        <path d="m457 471h-402c-30.327 0-55-24.673-55-55v-260c0-30.327 24.673-55 55-55h100.188l9.743-29.23c6.136-18.405 23.293-30.77 42.692-30.77h96.754c19.399 0 36.556 12.365 42.691 30.77l9.743 29.23h100.189c30.327 0 55 24.673 55 55v260c0 30.327-24.673 55-55 55z" fill="#ffde46"></path>
                                        <path d="m457 101h-100.188l-9.743-29.23c-6.136-18.405-23.293-30.77-42.692-30.77h-48.377v430h201c30.327 0 55-24.673 55-55v-260c0-30.327-24.673-55-55-55z" fill="#ff9d21"></path>
                                        <path d="m256 431c-79.953 0-145-65.047-145-145s65.047-145 145-145 145 65.047 145 145-65.047 145-145 145z" fill="#00429b"></path>
                                        <path d="m401 286c0-79.953-65.047-145-145-145v290c79.953 0 145-65.047 145-145z" fill="#00337a"></path>
                                        <path d="m256 396c-60.654 0-110-49.346-110-110s49.346-110 110-110 110 49.346 110 110-49.346 110-110 110z" fill="#3aafff"></path>
                                        <path d="m366 286c0-60.654-49.346-110-110-110v220c60.654 0 110-49.346 110-110z" fill="#008adf"></path>
                                        <circle cx="446" cy="176" fill="#ebe1dc" r="15"></circle>
                                        <path d="m86 191h-30c-8.284 0-15-6.716-15-15s6.716-15 15-15h30c8.284 0 15 6.716 15 15s-6.716 15-15 15z" fill="#f5f0eb"></path>
                                    </g>
                                </svg>
                            </div>
                            <div class="categories-item-02__info">
                                <h4 class="categories-item-02__name">Photography</h4>
                                <p class="categories-item-02__description">Take a Good Photo</p>
                            </div>
                        </a>
                    </div>
                    <!-- Categories Item End -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <!-- Categories Item Start -->
                    <div class="categories-item-02" data-aos="fade-up" data-aos-duration="1000">
                        <a class="categories-item-02__link" href="course-category.html">
                            <div class="categories-item-02__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="512" viewBox="0 0 512 512" width="512">
                                    <g>
                                        <path d="m416 330h-320c-52.383 0-95-42.617-95-95 0-24.194 9.109-47.232 25.648-64.87 12.489-13.318 28.32-22.627 45.701-27.073-.897-6.018-1.349-12.053-1.349-18.057 0-68.925 56.075-125 125-125 22.114 0 43.846 5.875 62.847 16.99 14.113 8.255 26.503 19.247 36.416 32.222 35.766-17.047 79.128-10.171 107.912 18.613 19.389 19.389 29.244 46.326 27.533 73.312 45.425 7.089 80.292 46.48 80.292 93.863 0 52.383-42.617 95-95 95z" fill="#e1f0ff"></path>
                                        <path d="m430.708 141.137c1.713-26.988-8.143-53.922-27.533-73.312-28.784-28.786-72.147-35.66-107.912-18.613-9.912-12.975-22.303-23.967-36.415-32.222-.941-.55-1.894-1.078-2.848-1.602v314.612h160c52.383 0 95-42.617 95-95 0-47.383-34.867-86.774-80.292-93.863z" fill="#bedcf0"></path>
                                        <path d="m316 482h-120c-8.284 0-15-6.716-15-15s6.716-15 15-15h120c8.284 0 15 6.716 15 15s-6.716 15-15 15z" fill="#5e54ac"></path>
                                        <path d="m316 452h-60v30h60c8.284 0 15-6.716 15-15s-6.716-15-15-15z" fill="#453d81"></path>
                                        <path d="m497 482h-121c-8.284 0-15-6.716-15-15s6.716-15 15-15h121c8.284 0 15 6.716 15 15s-6.716 15-15 15z" fill="#453d81"></path>
                                        <path d="m136 482h-121c-8.284 0-15-6.716-15-15s6.716-15 15-15h121c8.284 0 15 6.716 15 15s-6.716 15-15 15z" fill="#5e54ac"></path>
                                        <g>
                                            <path d="m166 452c-8.284 0-15-6.716-15-15v-62c0-8.284 6.716-15 15-15s15 6.716 15 15v62c0 8.284-6.716 15-15 15z" fill="#5e54ac"></path>
                                            <path d="m166 360v92c8.284 0 15-6.716 15-15v-62c0-8.284-6.716-15-15-15z" fill="#453d81"></path>
                                            <path d="m166 512c-24.813 0-45-20.187-45-45s20.187-45 45-45 45 20.187 45 45-20.187 45-45 45z" fill="#ffe278"></path>
                                            <path d="m166 422v90c24.813 0 45-20.187 45-45s-20.187-45-45-45z" fill="#ffb454"></path>
                                            <path d="m206 390h-80c-19.299 0-35-15.701-35-35v-140c0-19.299 15.701-35 35-35h80c19.299 0 35 15.701 35 35v140c0 19.299-15.701 35-35 35z" fill="#8bb9ff"></path>
                                            <path d="m206 180h-40v210h40c19.299 0 35-15.701 35-35v-140c0-19.299-15.701-35-35-35z" fill="#4793ff"></path>
                                            <circle cx="166" cy="255" fill="#ffe278" r="15"></circle>
                                            <circle cx="166" cy="315" fill="#ff6378" r="15"></circle>
                                            <path d="m181 255c0-8.284-6.716-15-15-15v30c8.284 0 15-6.716 15-15z" fill="#ffb454"></path>
                                            <path d="m166 300v30c8.284 0 15-6.716 15-15s-6.716-15-15-15z" fill="#d0004f"></path>
                                        </g>
                                        <g>
                                            <path d="m346 452c-8.284 0-15-6.716-15-15v-62c0-8.284 6.716-15 15-15s15 6.716 15 15v62c0 8.284-6.716 15-15 15z" fill="#5e54ac"></path>
                                            <path d="m346 360v92c8.284 0 15-6.716 15-15v-62c0-8.284-6.716-15-15-15z" fill="#453d81"></path>
                                            <path d="m346 512c-24.813 0-45-20.187-45-45s20.187-45 45-45 45 20.187 45 45-20.187 45-45 45z" fill="#ffe278"></path>
                                            <path d="m346 422v90c24.813 0 45-20.187 45-45s-20.187-45-45-45z" fill="#ffb454"></path>
                                            <path d="m386 390h-80c-19.299 0-35-15.701-35-35v-140c0-19.299 15.701-35 35-35h80c19.299 0 35 15.701 35 35v140c0 19.299-15.701 35-35 35z" fill="#8bb9ff"></path>
                                            <path d="m386 180h-40v210h40c19.299 0 35-15.701 35-35v-140c0-19.299-15.701-35-35-35z" fill="#4793ff"></path>
                                            <circle cx="346" cy="255" fill="#ffe278" r="15"></circle>
                                            <circle cx="346" cy="315" fill="#ff6378" r="15"></circle>
                                            <path d="m361 255c0-8.284-6.716-15-15-15v30c8.284 0 15-6.716 15-15z" fill="#ffb454"></path>
                                            <path d="m346 300v30c8.284 0 15-6.716 15-15s-6.716-15-15-15z" fill="#d0004f"></path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="categories-item-02__info">
                                <h4 class="categories-item-02__name">Data Science</h4>
                                <p class="categories-item-02__description">Data is Everything</p>
                            </div>
                        </a>
                    </div>
                    <!-- Categories Item End -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <!-- Categories Item Start -->
                    <div class="categories-item-02" data-aos="fade-up" data-aos-duration="1000">
                        <a class="categories-item-02__link" href="course-category.html">
                            <div class="categories-item-02__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="512" viewBox="0 0 512 512" width="512">
                                    <g>
                                        <path d="m338.561 292.768c-11.191-17.048-21.599-33.445-25.598-51.768l-38.972-30h-145.781l-29.128 30c-3.999 18.323-14.407 34.72-25.598 51.768-7.926 12.079-15.51 24.673-21.613 38.232l25.245 30h247.031l35.99-30c-6.142-13.574-13.709-26.234-21.576-38.232z" fill="#ffd5cc"></path>
                                        <path d="m360.137 331c-6.141-13.574-13.709-26.234-21.575-38.232-11.192-17.048-21.6-33.445-25.599-51.768l-38.972-30h-67.969v150h118.124z" fill="#ffbfb3"></path>
                                        <path d="m428.444 337.592c-2.798-4.116-7.441-6.592-12.422-6.592h-364.151c-1.582 3.517-10.864 18.532-10.864 45.981-.688 38.965 10.532 84.613 31.597 126.728 2.549 5.083 7.734 8.291 13.418 8.291h75c6.456 0 11.841-4.116 13.958-9.831l-9.564-30.775 31.817 10.606h17.578l31.816-10.605-9.564 30.775c2.117 5.715 7.502 9.831 13.958 9.831h105c6.138 0 11.646-3.735 13.931-9.434l60-151c1.847-4.615 1.275-9.859-1.508-13.975z" fill="#4d578c"></path>
                                        <path d="m246.628 471.395-9.564 30.775c2.117 5.715 7.502 9.831 13.958 9.831h105c6.138 0 11.646-3.735 13.931-9.434l60-151c1.846-4.614 1.274-9.858-1.509-13.975-2.798-4.116-7.441-6.592-12.422-6.592h-210v151h8.789z" fill="#333e73"></path>
                                        <path d="m176.022 482h21.211l-40.605-40.605c-5.859-5.859-15.352-5.859-21.211 0s-5.859 15.352 0 21.211l39.564 39.564c.602-1.624 1.042-3.334 1.042-5.169v-15.001z" fill="#333e73"></path>
                                        <path d="m276.628 441.395c-5.859-5.859-15.352-5.859-21.211 0l-40.606 40.605h21.211v15c0 1.835.439 3.545 1.042 5.169l39.564-39.564c5.859-5.859 5.859-15.351 0-21.21z" fill="#1f2859"></path>
                                        <g>
                                            <path d="m386.022 271c-8.291 0-15-6.709-15-15v-30c0-8.291 6.709-15 15-15s15 6.709 15 15v30c0 8.291-6.709 15-15 15z" fill="#fed843"></path>
                                        </g>
                                        <g>
                                            <path d="m424.206 292.816c-5.859-5.859-5.859-15.352 0-21.211l21.211-21.211c5.859-5.859 15.352-5.859 21.211 0s5.859 15.352 0 21.211l-21.211 21.211c-5.859 5.86-15.352 5.86-21.211 0z" fill="#fed843"></path>
                                        </g>
                                        <path d="m341.022 136c0-.311-.159-.569-.178-.877.015-.302.167-.56.163-.866-.366-25.547-8.364-46.073-16.113-64.955-7.133-17.388-13.872-33.823-13.872-54.302 0-8.291-6.709-15-15-15h-30c-8.291 0-15 6.709-15 15v61c0 24.814-20.186 45-45 45s-45-20.186-45-45v-61c0-8.291-6.709-15-15-15h-30c-8.291 0-15 6.709-15 15 0 20.479-6.738 36.914-13.872 54.302-7.925 19.336-16.128 40.316-16.128 66.698 0 21.401 8.95 37.764 16.846 52.192 7.061 12.92 13.154 24.067 13.154 37.808 0 5.208-.879 10.129-1.941 15h213.882c-1.062-4.871-1.941-9.792-1.941-15 0-13.74 6.094-24.888 13.154-37.808 7.896-14.428 16.846-30.791 16.846-52.192z" fill="#f9b"></path>
                                        <path d="m311.022 226c0-13.74 6.094-24.888 13.154-37.808 7.896-14.429 16.846-30.791 16.846-52.192 0-.311-.159-.569-.178-.877.015-.302.167-.56.163-.866-.366-25.547-8.364-46.073-16.113-64.955-7.133-17.388-13.872-33.823-13.872-54.302 0-8.291-6.709-15-15-15h-30c-8.291 0-15 6.709-15 15v61c0 24.814-20.186 45-45 45v120h106.941c-1.062-4.871-1.941-9.792-1.941-15z" fill="#f69"></path>
                                        <circle cx="206.022" cy="286" fill="#ffbfb3" r="15"></circle>
                                        <path d="m221.022 286c0-8.284-6.716-15-15-15v30c8.284 0 15-6.716 15-15z" fill="#fa9"></path>
                                    </g>
                                </svg>
                            </div>
                            <div class="categories-item-02__info">
                                <h4 class="categories-item-02__name">Health & Fitness</h4>
                                <p class="categories-item-02__description">Invest to Your Body</p>
                            </div>
                        </a>
                    </div>
                    <!-- Categories Item End -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <!-- Categories Item Start -->
                    <div class="categories-item-02" data-aos="fade-up" data-aos-duration="1000">
                        <a class="categories-item-02__link" href="course-category.html">
                            <div class="categories-item-02__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="512" viewBox="0 0 512.01 512.01" width="512">
                                    <g>
                                        <path d="m431.005 192c0 105.32-85.68 191-191 191s-191-85.68-191-191c0-105.87 85.68-192 191-192s191 86.13 191 192z" fill="#425796"></path>
                                        <path d="m431.005 192c0 105.32-85.68 191-191 191v-383c105.32 0 191 86.13 191 192z" fill="#283758"></path>
                                        <circle cx="240.005" cy="192" fill="#eef4ff" r="55"></circle>
                                        <path d="m295.005 192c0 30.33-24.67 55-55 55v-110c30.33 0 55 24.67 55 55z" fill="#d9e6fc"></path>
                                        <path d="m463.005 256v168c0 8.28-6.72 15-15 15s-15-6.72-15-15v-84.63l-130 33.62v91.01c0 8.28-6.72 15-15 15s-15-6.72-15-15v-168c0-6.88 4.68-12.88 11.36-14.55l83.64-20.91 76.36-19.09c9.45-2.36 18.64 4.79 18.64 14.55z" fill="#ffe278"></path>
                                        <path d="m463.005 256v168c0 8.28-6.72 15-15 15s-15-6.72-15-15v-84.63l-65 16.81v-95.64l76.36-19.09c9.45-2.36 18.64 4.79 18.64 14.55z" fill="#ffb454"></path>
                                        <path d="m256.005 417c-25.916 0-47 21.084-47 47 0 12.496 4.81 24.396 13.544 33.508 18.534 19.334 48.373 19.34 66.912 0 8.734-9.111 13.544-21.012 13.544-33.508 0-25.916-21.084-47-47-47z" fill="#ffb454"></path>
                                        <circle cx="416.005" cy="432" fill="#ff7d47" r="47"></circle>
                                    </g>
                                </svg>
                            </div>
                            <div class="categories-item-02__info">
                                <h4 class="categories-item-02__name">Music</h4>
                                <p class="categories-item-02__description">Major or Minor</p>
                            </div>
                        </a>
                    </div>
                    <!-- Categories Item End -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <!-- Categories Item Start -->
                    <div class="categories-item-02" data-aos="fade-up" data-aos-duration="1000">
                        <a class="categories-item-02__link" href="course-category.html">
                            <div class="categories-item-02__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                        <path style="fill:#1689FC;" d="M410.797,205.3c-2.695-3.6-7.2-5.7-11.697-5.7H112.899c-4.497,0-9.001,2.1-11.697,5.7  c-3.003,3.6-3.904,8.399-2.703,12.599l22.8,94.2c0.901,3.3,2.999,6.299,5.698,8.399C165.099,348.999,210.399,363.1,256,363.1  s90.901-14.101,129.001-42.601c2.699-2.1,4.797-5.099,5.698-8.399l22.8-94.2C414.701,213.699,413.8,208.9,410.797,205.3z"></path>
                                    <path style="fill:#136EF1;" d="M413.5,217.899l-22.8,94.2c-0.901,3.3-2.999,6.299-5.698,8.399  C346.901,348.999,301.601,363.1,256,363.1V199.6h143.101c4.497,0,9.001,2.1,11.697,5.7C413.8,208.9,414.701,213.699,413.5,217.899z"></path>
                                    <path style="fill:#18A7FC;" d="M503.599,152.5l-241-120c-2.098-0.901-4.197-1.5-6.599-1.5s-4.501,0.599-6.599,1.5l-241,120  C3.3,155.2,0,160.3,0,166s3.3,10.8,8.401,13.5l241,120c2.098,0.899,4.197,1.5,6.599,1.5c2.402,0,4.501-0.601,6.599-1.5l241-120  C508.7,176.8,512,171.7,512,166S508.7,155.2,503.599,152.5z"></path>
                                    <path style="fill:#57555C;" d="M466,331c-8.291,0-15-6.709-15-15V181c0-8.291,6.709-15,15-15s15,6.709,15,15v135  C481,324.291,474.291,331,466,331z"></path>
                                    <path style="fill:#FCBF29;" d="M466,481c-2.93,0-5.83-0.85-8.35-2.549C453.9,475.932,421,452.934,421,421s32.9-54.932,36.65-57.451  c5.039-3.398,11.66-3.398,16.699,0C478.1,366.068,511,389.066,511,421s-32.9,54.932-36.65,57.451C471.83,480.15,468.93,481,466,481z  "></path>
                                    <g>
                                        <path style="fill:#1689FC;" d="M466,391c-24.814,0-45-20.186-45-45s20.186-45,45-45s45,20.186,45,45S490.814,391,466,391z"></path>
                                        <path style="fill:#1689FC;" d="M503.599,152.5C508.7,155.2,512,160.3,512,166s-3.3,10.8-8.401,13.5l-241,120   c-2.098,0.899-4.197,1.5-6.599,1.5V31c2.402,0,4.501,0.599,6.599,1.5L503.599,152.5z"></path>
                                        <path style="fill:#1689FC;" d="M330.099,150.099C310.302,170.2,283.898,181,256,181s-54.302-10.8-74.099-30.901   c-5.999-5.7-5.999-15.3,0-21c5.698-5.999,15.3-5.999,20.999,0c14.099,14.101,33.6,21.301,53.101,21.301s39.001-7.2,53.101-21.301   c5.698-5.999,15.3-5.999,20.999,0C336.098,134.799,336.098,144.399,330.099,150.099z"></path>
                                    </g>
                                    <path style="fill:#136EF1;" d="M330.099,150.099C310.302,170.2,283.898,181,256,181v-30.601c19.501,0,39.001-7.2,53.101-21.301  c5.698-5.999,15.3-5.999,20.999,0C336.098,134.799,336.098,144.399,330.099,150.099z"></path>
                                    </svg>
                            </div>
                            <div class="categories-item-02__info">
                                <h4 class="categories-item-02__name">Teaching & Academics</h4>
                                <p class="categories-item-02__description">High Education Level</p>
                            </div>
                        </a>
                    </div>
                    <!-- Categories Item End -->
                </div>
            </div>

        </div>
    </div>
    <!-- Categories Section End -->

    <!-- Courses Start -->
    <div class="courses-section section-padding-01">
        <div class="container">

            <div class="row">
                <div class="col-sm-8">
                    <!-- Section Title Start -->
                    <div class="section-title" data-aos="fade-up" data-aos-duration="1000">
                        <h2 class="section-title__title-03"><mark>@lang('trending_doctors')</mark></h2>
                    </div>
                    <!-- Section Title End -->
                </div>
                <div class="col-sm-4 cta-courses">
                    <!-- Category Start -->
                    <div class="section-btn-02 text-sm-end" data-aos="fade-up" data-aos-duration="1000">
                        <a class="btn btn-light btn-hover-primary" href="#">@lang('view_all_doctors')
                            <i class="fas {{getLocale() == 'ar' ? 'fa-arrow-left' : 'fa-arrow-right' }}"></i></a>
                    </div>
                    <!-- Category End -->
                </div>
            </div>

            <div class="course-active swiper-button-style swiper-dots-style" data-aos="fade-up" data-aos-duration="1000">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item-02">
                                <div class="course-header-02">
                                    <div class="course-header-02__thumbnail ">
                                        <a href="{{route('booking',__('dummy_doctor_description'))}}"><img src="{{asset("frontend/assets/images/dummy_person.jpg")}}" alt="courses" width="330" height="221"></a>
                                    </div>
                                    <div class="course-header-02__badge">
                                        <span class="price">$39.<small class="separator">00</small></span>
                                    </div>
                                </div>
                                <div class="course-info-02">
                                    <span class="course-info-02__badge-text badge-all">@lang('specialized')</span>
                                    <div class="course-info-02__category">
                                        <a href="#">@lang('family_consultation')</a>
                                    </div>
                                    <h3 class="course-info-02__title"><a href="{{route('booking',__('dummy_doctor_description'))}}">
                                        @lang('David_Charl_samhon')
                                        </a></h3>
                                    <div class="course-info-02__description">
                                        <p>
                                            @lang('dummy_doctor_description')

                                        </p>
                                    </div>
                                    <div class="course-info-02__footer">
                                        <div class="course-info-02__rating">
                                            <div class="rating-count">
                                                <span class="rating-count__average">5.0</span>
                                                <span class="rating-count__total">/5</span>
                                            </div>
                                            <div class="rating-star">
                                                <div class="rating-label" style="width: 80%;"></div>
                                            </div>
                                        </div>
                                        <div class="course-info-02__meta">
                                            <span><i class="fas fa-user-alt"></i></span>
                                            <span>1</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item-02">
                                <div class="course-header-02">
                                    <div class="course-header-02__thumbnail ">
                                        <a href="{{route('booking',__('dummy_doctor_description'))}}"><img src="{{asset("frontend/assets/images/dummy_person.jpg")}}" alt="courses" width="330" height="221"></a>
                                    </div>
                                    <div class="course-header-02__badge">
                                        <span class="price">$39.<small class="separator">00</small></span>
                                    </div>
                                </div>
                                <div class="course-info-02">
                                    <span class="course-info-02__badge-text badge-all">@lang('specialized')</span>
                                    <div class="course-info-02__category">
                                        <a href="#">@lang('family_consultation')</a>
                                    </div>
                                    <h3 class="course-info-02__title"><a href="{{route('booking',__('dummy_doctor_description'))}}">
                                            @lang('David_Charl_samhon')
                                        </a></h3>
                                    <div class="course-info-02__description">
                                        <p>
                                            @lang('dummy_doctor_description')

                                        </p>
                                    </div>
                                    <div class="course-info-02__footer">
                                        <div class="course-info-02__rating">
                                            <div class="rating-count">
                                                <span class="rating-count__average">5.0</span>
                                                <span class="rating-count__total">/5</span>
                                            </div>
                                            <div class="rating-star">
                                                <div class="rating-label" style="width: 80%;"></div>
                                            </div>
                                        </div>
                                        <div class="course-info-02__meta">
                                            <span><i class="fas fa-sick"></i></span>
                                            <span>1</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item-02">
                                <div class="course-header-02">
                                    <div class="course-header-02__thumbnail ">
                                        <a href="{{route('booking',__('dummy_doctor_description'))}}"><img src="{{asset("frontend/assets/images/dummy_person.jpg")}}" alt="courses" width="330" height="221"></a>
                                    </div>
                                    <div class="course-header-02__badge">
                                        <span class="price">$39.<small class="separator">00</small></span>
                                    </div>
                                </div>
                                <div class="course-info-02">
                                    <span class="course-info-02__badge-text badge-all">@lang('specialized')</span>
                                    <div class="course-info-02__category">
                                        <a href="#">@lang('family_consultation')</a>
                                    </div>
                                    <h3 class="course-info-02__title"><a href="{{route('booking',__('dummy_doctor_description'))}}">
                                            @lang('David_Charl_samhon')
                                        </a></h3>
                                    <div class="course-info-02__description">
                                        <p>
                                            @lang('dummy_doctor_description')

                                        </p>
                                    </div>
                                    <div class="course-info-02__footer">
                                        <div class="course-info-02__rating">
                                            <div class="rating-count">
                                                <span class="rating-count__average">5.0</span>
                                                <span class="rating-count__total">/5</span>
                                            </div>
                                            <div class="rating-star">
                                                <div class="rating-label" style="width: 80%;"></div>
                                            </div>
                                        </div>
                                        <div class="course-info-02__meta">
                                            <span><i class="fas fa-user-alt"></i></span>
                                            <span>1</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item-02">
                                <div class="course-header-02">
                                    <div class="course-header-02__thumbnail ">
                                        <a href="{{route('booking',__('dummy_doctor_description'))}}"><img src="{{asset("frontend/assets/images/dummy_person.jpg")}}" alt="courses" width="330" height="221"></a>
                                    </div>
                                    <div class="course-header-02__badge">
                                        <span class="price">$39.<small class="separator">00</small></span>
                                    </div>
                                </div>
                                <div class="course-info-02">
                                    <span class="course-info-02__badge-text badge-all">@lang('specialized')</span>
                                    <div class="course-info-02__category">
                                        <a href="#">@lang('family_consultation')</a>
                                    </div>
                                    <h3 class="course-info-02__title"><a href="{{route('booking',__('dummy_doctor_description'))}}">
                                            @lang('David_Charl_samhon')
                                        </a></h3>
                                    <div class="course-info-02__description">
                                        <p>
                                            @lang('dummy_doctor_description')

                                        </p>
                                    </div>
                                    <div class="course-info-02__footer">
                                        <div class="course-info-02__rating">
                                            <div class="rating-count">
                                                <span class="rating-count__average">5.0</span>
                                                <span class="rating-count__total">/5</span>
                                            </div>
                                            <div class="rating-star">
                                                <div class="rating-label" style="width: 80%;"></div>
                                            </div>
                                        </div>
                                        <div class="course-info-02__meta">
                                            <span><i class="fas fa-user-alt"></i></span>
                                            <span>1</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item-02">
                                <div class="course-header-02">
                                    <div class="course-header-02__thumbnail ">
                                        <a href="{{route('booking',__('dummy_doctor_description'))}}"><img src="{{asset("frontend/assets/images/dummy_person.jpg")}}" alt="courses" width="330" height="221"></a>
                                    </div>
                                    <div class="course-header-02__badge">
                                        <span class="price">$39.<small class="separator">00</small></span>
                                    </div>
                                </div>
                                <div class="course-info-02">
                                    <span class="course-info-02__badge-text badge-all">@lang('specialized')</span>
                                    <div class="course-info-02__category">
                                        <a href="#">@lang('family_consultation')</a>
                                    </div>
                                    <h3 class="course-info-02__title"><a href="{{route('booking',__('dummy_doctor_description'))}}">
                                            @lang('David_Charl_samhon')
                                        </a></h3>
                                    <div class="course-info-02__description">
                                        <p>
                                            @lang('dummy_doctor_description')

                                        </p>
                                    </div>
                                    <div class="course-info-02__footer">
                                        <div class="course-info-02__rating">
                                            <div class="rating-count">
                                                <span class="rating-count__average">5.0</span>
                                                <span class="rating-count__total">/5</span>
                                            </div>
                                            <div class="rating-star">
                                                <div class="rating-label" style="width: 80%;"></div>
                                            </div>
                                        </div>
                                        <div class="course-info-02__meta">
                                            <span><i class="fas fa-user-alt"></i></span>
                                            <span>1</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item-02">
                                <div class="course-header-02">
                                    <div class="course-header-02__thumbnail ">
                                        <a href="{{route('booking',__('dummy_doctor_description'))}}"><img src="{{asset("frontend/assets/images/dummy_person.jpg")}}" alt="courses" width="330" height="221"></a>
                                    </div>
                                    <div class="course-header-02__badge">
                                        <span class="price">$39.<small class="separator">00</small></span>
                                    </div>
                                </div>
                                <div class="course-info-02">
                                    <span class="course-info-02__badge-text badge-all">@lang('specialized')</span>
                                    <div class="course-info-02__category">
                                        <a href="#">@lang('family_consultation')</a>
                                    </div>
                                    <h3 class="course-info-02__title"><a href="{{route('booking',__('dummy_doctor_description'))}}">
                                            @lang('David_Charl_samhon')
                                        </a></h3>
                                    <div class="course-info-02__description">
                                        <p>
                                            @lang('dummy_doctor_description')

                                        </p>
                                    </div>
                                    <div class="course-info-02__footer">
                                        <div class="course-info-02__rating">
                                            <div class="rating-count">
                                                <span class="rating-count__average">5.0</span>
                                                <span class="rating-count__total">/5</span>
                                            </div>
                                            <div class="rating-star">
                                                <div class="rating-label" style="width: 80%;"></div>
                                            </div>
                                        </div>
                                        <div class="course-info-02__meta">
                                            <span><i class="fas fa-user-alt"></i></span>
                                            <span>1</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Course Start -->
                            <div class="course-item-02">
                                <div class="course-header-02">
                                    <div class="course-header-02__thumbnail ">
                                        <a href="{{route('booking',__('dummy_doctor_description'))}}"><img src="{{asset("frontend/assets/images/dummy_person.jpg")}}" alt="courses" width="330" height="221"></a>
                                    </div>
                                    <div class="course-header-02__badge">
                                        <span class="price">$39.<small class="separator">00</small></span>
                                    </div>
                                </div>
                                <div class="course-info-02">
                                    <span class="course-info-02__badge-text badge-all">@lang('specialized')</span>
                                    <div class="course-info-02__category">
                                        <a href="#">@lang('family_consultation')</a>
                                    </div>
                                    <h3 class="course-info-02__title"><a href="{{route('booking',__('dummy_doctor_description'))}}">
                                            @lang('David_Charl_samhon')
                                        </a></h3>
                                    <div class="course-info-02__description">
                                        <p>
                                            @lang('dummy_doctor_description')

                                        </p>
                                    </div>
                                    <div class="course-info-02__footer">
                                        <div class="course-info-02__rating">
                                            <div class="rating-count">
                                                <span class="rating-count__average">5.0</span>
                                                <span class="rating-count__total">/5</span>
                                            </div>
                                            <div class="rating-star">
                                                <div class="rating-label" style="width: 80%;"></div>
                                            </div>
                                        </div>
                                        <div class="course-info-02__meta">
                                            <span><i class="fas fa-user-alt"></i></span>
                                            <span>1</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="swiper-button-next"><i class="fas fa-angle-right"></i></div>
                <div class="swiper-button-prev"><i class="fas fa-angle-left"></i></div>
            </div>

        </div>
    </div>
    <!-- Courses End -->

    <!-- Counter Start -->
    <div class="counter-section-02 bg-color-04 scene">
        <div class="container">

            <!-- Counter Start -->
            <div class="counter-wrapper counter">
                <div class="row">
                    <div class="col-lg-4 col-sm-4" data-aos="fade-up" data-aos-duration="1000">

                        <!-- Counter Item Start -->
                        <div class="counter-item-02">
                            <div class="counter-item-02__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" height="82px" viewBox="0 0 64 82">
                                    <g transform="translate(1.000000, 3.000000)" fill="#D3E6FA">
                                        <path d="M5.2776187,48.0755646 C5.2254052,48.0035853 5.21387762,47.9100792 5.24778248,47.8273364 L10.9139499,33.1031604 C10.9593822,32.9867824 10.9824376,32.862332 10.9831156,32.7372087 C10.9885404,30.6033872 11.0048147,27.0811016 11.0278701,26.7070774 C11.8029334,12.7174957 22.7935082,1.40326357 36.8572124,0.118396152 C36.349997,0.0719795218 35.8387127,0.0369988405 35.322682,0.0188357514 C35.0785675,0.0100906242 34.8337749,0.00470898092 34.5869482,0.00134532471 C34.480487,0.000672662356 34.3719918,-9.25820039e-07 34.2648527,-9.25820039e-07 C19.1385724,-0.00269082164 6.64872807,11.7239098 5.81873896,26.7070774 C5.79636185,27.0811016 5.78008755,30.6033872 5.77466279,32.7372087 C5.77466279,32.8630047 5.7509294,32.9867824 5.70617517,33.1038331 L0.0400076884,47.8280091 C0.00813714812,47.9107519 0.0196647312,48.0035853 0.0698438981,48.0762376 C0.120700944,48.1488897 0.204106756,48.1927433 0.292937332,48.1927433 L5.50071213,48.1927433 C5.4112035,48.1946337 5.32711964,48.1502351 5.2776187,48.0755646 L5.2776187,48.0755646 Z"></path>
                                        <path d="M34.7286702,68.2257826 C34.1421174,65.8955311 32.0298494,64.2622024 29.6090477,64.2648865 L29.5859925,64.2648865 C28.0379001,64.2716203 26.3480856,64.2790199 24.8725494,64.2864197 C27.1102652,64.4821771 28.9763844,66.0637075 29.5208953,68.2257826 C29.5419164,68.3078528 29.5520877,68.3926135 29.5520877,68.4773743 L29.5520877,77.1949637 L34.7598625,77.1949637 L34.7598625,68.4780471 C34.7598625,68.3932862 34.7496912,68.3085254 34.7286702,68.2257826 Z"></path>
                                        <path d="M16.923912,62.7714871 C15.8477741,61.7429207 15.2422347,60.3235121 15.2483375,58.8408694 L15.2483375,49.2252184 C15.2483375,48.6547642 14.7818077,48.1919429 14.2067826,48.1919429 L8.99900777,48.1919429 C9.57403286,48.1919429 10.0405627,48.6547642 10.0405627,49.2252184 L10.0405627,58.8408694 C10.0398847,60.3214942 10.6440678,61.7388843 11.7141029,62.7701418 C12.7841378,63.8020718 14.2291597,64.3597446 15.7209701,64.3173641 C16.0118732,64.308619 17.8786707,64.2965104 20.1394416,64.2857471 C18.9276846,64.151206 17.7952649,63.6177505 16.923912,62.7714871 L16.923912,62.7714871 Z"></path>
                                    </g>
                                    <path d="M37.1274277,0.0203506142 C36.8679939,0.0108549198 36.6078878,0.00475060938 36.3471097,0.00203757865 C20.1291282,-0.185161507 6.641924,12.5491265 5.74869148,28.8910671 C5.71777457,29.404508 5.70500446,33.8050439 5.70231603,34.8956822 L0.153387064,49.5630046 C-0.120161025,50.2867056 -0.0240495828,51.0999366 0.411476784,51.738177 C0.847003185,52.3764176 1.56548728,52.7575984 2.3337075,52.7575984 L9.92987947,52.7575984 L9.92987947,61.41081 C9.92987947,63.4666089 10.7552289,65.435591 12.2170651,66.8680712 C13.6789014,68.3005514 15.6528845,69.0744434 17.6900458,69.0140785 C18.0321493,69.0032264 21.0599986,68.9849134 26.2157441,68.9632091 L26.229186,68.9632091 C27.6372538,68.9618527 28.8772943,69.899883 29.2698058,71.2652158 L29.2698058,80.9581963 C29.2698058,81.5333588 29.7322165,82 30.3021646,82 L56.4169458,82 C56.7019199,82 56.9734518,81.8813051 57.1683634,81.6724017 C57.363947,81.4634983 57.4647633,81.1826996 57.4479606,80.8964749 C57.4372069,80.7228409 56.4324044,63.3146791 57.4452721,52.3336874 C57.7208367,49.35071 60.5389881,42.2059437 60.7930453,41.5683814 C65.294829,32.875831 65.0427882,22.4564363 60.1269856,13.9958501 C55.2837708,5.59155913 46.686157,0.367618548 37.1274277,0.0203506142 Z M58.9386975,40.648664 C58.9232391,40.6785074 58.9091247,40.7090289 58.8970269,40.7395505 C58.7666376,41.0644359 55.7038386,48.7280695 55.3892917,52.1403838 C54.5108457,61.6624435 55.1244808,75.8787245 55.3274578,79.9157142 L31.3338513,79.9157142 L31.3338513,71.1268513 C31.3338513,71.0413907 31.3237698,70.9559303 31.3029344,70.8725046 C30.7215604,68.52302 28.627942,66.8762103 26.228514,66.8789233 L26.2056624,66.8789233 C22.5460307,66.8945233 18.08659,66.9162275 17.6248513,66.9311491 C16.1462123,66.9745576 14.7139487,66.4116038 13.6533614,65.3711565 C12.5927738,64.3313875 11.9939252,62.9022985 11.9945972,61.4094533 L11.9945972,51.7151164 C11.9945972,51.1399539 11.5321865,50.6733125 10.9622384,50.6733125 L2.33303544,50.6733125 C2.24498917,50.6733125 2.16231976,50.629904 2.11191174,50.5559739 C2.06217561,50.4827222 2.05074981,50.3891226 2.08233896,50.3056968 L7.69847879,35.4599926 C7.74283787,35.3426541 7.76636171,35.2171765 7.76636171,35.0910204 C7.77173858,32.9395871 7.7878692,29.3882299 7.81004873,29.0111186 C8.63270971,13.9042853 21.0122788,2.08089737 36.0050064,2.08360946 C36.1105275,2.08360946 36.2180648,2.08360946 36.3242581,2.08564521 C36.5682334,2.08835825 36.8108646,2.09378431 37.0534959,2.10260161 C41.5183136,2.23689655 45.8668565,3.56628161 49.6555329,5.95442704 C61.2191622,13.3230185 65.2551746,28.4074693 58.9386975,40.648664 Z" fill="#0071DC" class="primary-fill-color"></path>
                                    <path d="M36.0003388,5 C24.9547587,4.99932235 16,13.9540813 16,24.9996612 C16,36.0452413 24.9540812,45 36.0003388,45 C47.0459188,45 56,36.0459188 56,24.9996612 C55.9878048,13.9595014 47.0411763,5.01219524 36.0003388,5 Z M46.8860247,39.2221243 L46.8860247,37.1705993 L49.2817292,34.8988804 C49.4883722,34.7024003 49.6055828,34.4293603 49.6055828,34.1441252 L49.6055828,32.1407037 C51.0453091,31.63392 51.9098224,30.1630279 51.6523655,28.6589374 C51.3949085,27.1548469 50.0913634,26.0545573 48.5649148,26.0545573 C47.0391437,26.0545573 45.7355986,27.1548469 45.4781416,28.6589374 C45.2206847,30.1630279 46.085198,31.63392 47.5242468,32.1407037 L47.5242468,33.6962856 L45.1292197,35.9680043 C44.9218992,36.1644846 44.8046886,36.4375244 44.8046886,36.723437 L44.8046886,40.6008741 C43.581768,41.2946527 42.2816104,41.8407326 40.9299616,42.228273 L40.9299616,34.1319297 L44.4855774,29.255831 C44.6156609,29.0783212 44.6854453,28.8635479 44.6854453,28.642677 L44.6854453,23.156134 C46.1251716,22.6493504 46.9890074,21.1784582 46.732228,19.6743679 C46.4747711,18.1702772 45.1712259,17.0706652 43.6447774,17.0706652 C42.119006,17.0706652 40.8147835,18.1702772 40.558004,19.6743679 C40.3005472,21.1784582 41.1650603,22.6493504 42.6041093,23.156134 L42.6041093,28.3039179 L39.0484935,33.1793392 C38.9190875,33.3575263 38.8486255,33.5722998 38.8486255,33.7924932 L38.8486255,42.6910178 C38.0024053,42.8265215 37.1473772,42.9010486 36.2896392,42.9145989 L36.2896392,31.5783635 L38.2612172,29.6067854 C38.4563424,29.4116601 38.5661005,29.147428 38.5661005,28.8710006 L38.5661005,15.1688714 C40.0051491,14.6620878 40.8696626,13.1911956 40.6122055,11.6871051 C40.3547487,10.1830146 39.0512034,9.08340255 37.5254324,9.08340255 C35.9989837,9.08340255 34.6954385,10.1830146 34.4379816,11.6871051 C34.1805247,13.1911956 35.045038,14.6620878 36.4847644,15.1688714 L36.4847644,28.440099 L34.5131862,30.4109995 C34.3180609,30.6068024 34.208303,30.8710344 34.208303,31.1474619 L34.208303,42.8299092 C33.8702214,42.7960332 33.5348498,42.7533497 33.2028658,42.7005032 L33.2028658,26.7971172 C33.2028658,26.5213673 33.093108,26.2564576 32.8973053,26.0613324 L30.031403,23.1961077 L30.031403,21.5653212 C31.4711294,21.0585376 32.3349649,19.5876455 32.0781857,18.0835548 C31.8207286,16.5794645 30.5171836,15.4798523 28.9907349,15.4798523 C27.4649637,15.4798523 26.1614186,16.5794645 25.9039617,18.0835548 C25.6465047,19.5876455 26.511018,21.0585376 27.9500668,21.5653212 L27.9500668,23.6263318 C27.9500668,23.9020818 28.0598249,24.1669913 28.2549501,24.3621165 L31.1215297,27.2280188 L31.1215297,42.2431783 C30.0381782,41.9362626 28.9873474,41.5270416 27.9819103,41.0209353 L27.9819103,33.1054897 C27.9819103,32.6813632 27.7244533,32.2992429 27.3308152,32.1407037 L24.4757532,30.9882451 L24.4757532,28.7334643 C25.914802,28.2260032 26.7793153,26.7557885 26.5218584,25.2516982 C26.2644014,23.7476075 24.9608563,22.6479955 23.4350852,22.6479955 C21.9093141,22.6479955 20.6050914,23.7476075 20.348312,25.2516982 C20.0908551,26.7557885 20.9553684,28.2260032 22.3944172,28.7334643 L22.3944172,31.6908317 C22.3944172,32.1156354 22.6518741,32.4970783 23.0455122,32.6562951 L25.9005741,33.8080761 L25.9005741,39.7939499 C19.4797337,35.4144719 16.6138314,27.3960434 18.8035704,19.9392774 C20.9939871,12.4825116 27.7413912,7.28730162 35.5098156,7.07523828 C43.2789173,6.86385259 50.298684,11.684395 52.8915465,19.0110775 C55.4844087,26.3377598 53.0588933,34.5004997 46.8860247,39.2221243 L46.8860247,39.2221243 Z M48.5649148,30.2409424 C47.9849591,30.2409424 47.5147616,29.7707448 47.5147616,29.1901117 C47.5147616,28.6101561 47.9849591,28.1399584 48.5655923,28.1399584 C49.1455479,28.1399584 49.6157457,28.6101561 49.6157457,29.1901117 C49.615068,29.7700673 49.1448704,30.2402649 48.5649148,30.2409424 L48.5649148,30.2409424 Z M43.6454548,21.2563729 C43.0648217,21.2563729 42.5946239,20.7861753 42.5946239,20.2062196 C42.5946239,19.6255866 43.0648217,19.1553888 43.6447774,19.1553888 C44.2254104,19.1553888 44.695608,19.6255866 44.695608,20.2055422 C44.6949305,20.7854978 44.224733,21.2556955 43.6454548,21.2563729 Z M37.5254324,13.2691103 C36.9447992,13.2691103 36.4746016,12.7989125 36.4746016,12.2189568 C36.4746016,11.6383238 36.9447992,11.1681262 37.5247548,11.1681262 C38.105388,11.1681262 38.5755857,11.6383238 38.5755857,12.2189568 C38.5749081,12.7989125 38.1047104,13.2684327 37.5254324,13.2691103 Z M28.9914123,19.6655615 C28.4114567,19.6662375 27.9412577,19.1953624 27.9412577,18.6154068 C27.9405817,18.0354512 28.4114567,17.564576 28.9914123,17.564576 C29.5713679,17.564576 30.0422432,18.0347735 30.0422432,18.6154068 C30.0415657,19.1953624 29.5713679,19.6655615 28.9907349,19.6655615 L28.9914123,19.6655615 Z M23.4357627,26.8330256 C22.8558071,26.8330256 22.3856094,26.3621505 22.3856094,25.7821948 C22.3856094,25.2022392 22.8558071,24.7313641 23.4364403,24.7313641 C24.0163959,24.7320416 24.4865935,25.2022392 24.4865935,25.7821948 C24.485916,26.3628281 24.0157183,26.8323482 23.4350852,26.8330256 L23.4357627,26.8330256 Z" fill="#FFC221" class="secondary-fill-color"></path>
                                </svg>
                            </div>
                            <div class="counter-item-02__content">
                                <span class="counter-item-02__count count" data-count="253085">0</span>
                                <p class="counter-item-02__text">@lang('user')</p>
                            </div>
                        </div>
                        <!-- Counter Item End -->

                    </div>
                    <div class="col-lg-4 col-sm-4" data-aos="fade-up" data-aos-duration="1000">

                        <!-- Counter Item Start -->
                        <div class="counter-item-02">
                            <div class="counter-item-02__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="80px" height="77px" viewBox="0 0 80 77">
                                    <path d="M55.5948498,40.4245494 L34.2719313,31.5464378 C34.2523605,31.5381974 34.2336481,31.5303004 34.2161373,31.5224034 C34.2333047,31.5145064 34.2523605,31.5064378 34.2719313,31.4983691 L55.5948498,22.6199142 C55.6672961,22.5898712 55.744206,22.5622318 55.8238627,22.536309 C54.7649785,22.191073 53.1251502,22.2187124 52.1613734,22.6199142 L30.8384549,31.4983691 C30.8188841,31.5064378 30.8001717,31.5145064 30.7826609,31.5224034 C30.7998283,31.5303004 30.8188841,31.5381974 30.8384549,31.5464378 L52.1613734,40.4245494 C53.1253219,40.8259227 54.7653219,40.8537339 55.8238627,40.5081545 C55.744206,40.4822318 55.6672961,40.4547639 55.5948498,40.4245494 L55.5948498,40.4245494 Z" fill="#D3E6FA"></path>
                                    <path d="M55.0995708,53.2494421 C52.1424893,50.5509013 47.6738197,46.4729614 42.8369099,46.4729614 L42.703691,46.4729614 L42.703691,38.7182833 L39.2702146,37.2887554 L39.2702146,46.4733047 L39.4034335,46.4733047 C44.2403433,46.4733047 48.7090129,50.5512446 51.6660944,53.2497854 C52.4777682,53.9903863 53.4686695,54.8947639 53.9179399,55.1505579 C54.2702146,54.9454077 54.9575966,54.3397425 55.6278112,53.7303004 C55.4482403,53.5675536 55.2700429,53.4048069 55.0995708,53.2494421 Z" fill="#D3E6FA"></path>
                                    <g fill="#0071DC" class="primary-fill-color">
                                        <path d="M5.96549356,76.104206 L44.4204292,76.104206 C47.2826183,76.1003679 49.7210976,74.0246707 50.1819742,71.1998283 C52.9966842,70.7296462 55.0604625,68.2957681 55.0642062,65.4420601 L55.0642062,56.2918455 C55.0642062,55.7229685 54.6030401,55.2618026 54.0341631,55.2618026 C53.4652861,55.2618026 53.0041202,55.7229685 53.0041202,56.2918455 L53.0041202,65.4420601 C53.001755,67.5269619 51.312198,69.2165189 49.2272961,69.2188841 L10.9440343,69.2188841 C8.85913249,69.2165189 7.16957548,67.5269619 7.1672103,65.4420601 L7.1672103,5.95587983 C7.16957548,3.87097799 8.85913249,2.18142097 10.9440343,2.17905579 L39.9569099,2.17905579 L39.9569099,10.984206 C39.9596536,13.4482023 41.9564329,15.4449816 44.4204292,15.4477253 L53.0041202,15.4477253 L53.0041202,20.9658369 C53.0041202,21.5347139 53.4652861,21.9958798 54.0341631,21.9958798 C54.6030401,21.9958798 55.0642062,21.5347139 55.0642062,20.9658369 L55.0642062,14.4176824 C55.0642062,14.3832827 55.0625097,14.348904 55.0590558,14.3146781 C55.0569957,14.2944206 55.0533906,14.2746781 55.0501288,14.2547639 C55.0480687,14.2417167 55.0466953,14.2284979 55.0441202,14.2154506 C55.0393133,14.1914163 55.0329614,14.1680687 55.0269528,14.1445494 C55.0245494,14.1359657 55.0228326,14.127382 55.0202575,14.1186266 C55.0130472,14.0949356 55.0044635,14.072103 54.9957082,14.0499571 C54.992618,14.0417167 54.9898712,14.0327897 54.9866094,14.0250644 C54.9778541,14.0037768 54.9677253,13.9833476 54.9574249,13.9627468 C54.9527897,13.9533047 54.9486695,13.9435193 54.943691,13.9340773 C54.9339056,13.9157082 54.9227468,13.8980258 54.9119313,13.8803433 C54.9052361,13.8695279 54.8992275,13.8583691 54.8921888,13.847897 C54.8817167,13.8319313 54.8698712,13.816824 54.8578541,13.8015451 C54.8492704,13.7900429 54.8406867,13.7783691 54.8319313,13.7672103 C54.8202575,13.7529614 54.8075536,13.7395708 54.7950215,13.7258369 C54.7860944,13.7158798 54.7778541,13.7054077 54.7682403,13.695794 L41.72103,0.427124464 L41.7174249,0.423862661 C41.703691,0.409957082 41.688927,0.397253219 41.6745064,0.384206009 C41.6640343,0.374935622 41.6540773,0.364806867 41.6432618,0.355879828 C41.6185408,0.335507868 41.5928469,0.316280401 41.5661803,0.298197425 L41.5634335,0.295965665 C41.4224204,0.200224686 41.2597302,0.141214806 41.0901288,0.124291845 C41.055794,0.120858369 41.0214592,0.118969957 40.9871245,0.118969957 L10.944206,0.118969957 C7.95728463,0.122700432 5.45373891,2.37785355 5.13905579,5.34815451 C2.26605055,5.76266032 0.132511685,8.22274335 0.128583691,11.1254936 L0.128583691,70.2671245 C0.132178708,73.4892983 2.74331984,76.1005162 5.96549356,76.104206 L5.96549356,76.104206 Z M42.0169957,10.984206 L42.0169957,3.6655794 L51.576824,13.3876395 L44.4204292,13.3876395 C43.0936379,13.3862202 42.018415,12.3109973 42.0169957,10.984206 Z M2.18866953,11.1254936 C2.19122056,9.37133752 3.39937433,7.84906377 5.10712446,7.44824034 L5.10712446,65.4420601 C5.11071966,68.664206 7.72188838,71.2753748 10.9440343,71.27897 L48.0583691,71.27897 C47.6023416,72.9117216 46.1156677,74.0416527 44.4204292,74.0439485 L5.96549356,74.0439485 C3.88059172,74.0415833 2.19103471,72.3520263 2.18866953,70.2671245 L2.18866953,11.1254936 Z"></path>
                                        <path d="M38.2401717,20.3320172 L22.1886695,20.3320172 C21.6197925,20.3320172 21.1586266,20.7931831 21.1586266,21.3620601 C21.1586266,21.9309371 21.6197925,22.392103 22.1886695,22.392103 L38.2401717,22.392103 C38.8090487,22.392103 39.2702146,21.9309371 39.2702146,21.3620601 C39.2702146,20.7931831 38.8090487,20.3320172 38.2401717,20.3320172 L38.2401717,20.3320172 Z"></path>
                                        <path d="M14.3392275,22.392103 L18.0381116,22.392103 C18.6069886,22.392103 19.0681545,21.9309371 19.0681545,21.3620601 C19.0681545,20.7931831 18.6069886,20.3320172 18.0381116,20.3320172 L14.3392275,20.3320172 C13.7703505,20.3320172 13.3091845,20.7931831 13.3091845,21.3620601 C13.3091845,21.9309371 13.7703505,22.392103 14.3392275,22.392103 L14.3392275,22.392103 Z"></path>
                                        <path d="M14.3392275,33.4660944 L24.5062661,33.4660944 C25.0751431,33.4660944 25.536309,33.0049285 25.536309,32.4360515 C25.536309,31.8671745 25.0751431,31.4060086 24.5062661,31.4060086 L14.3392275,31.4060086 C13.7703505,31.4060086 13.3091845,31.8671745 13.3091845,32.4360515 C13.3091845,33.0049285 13.7703505,33.4660944 14.3392275,33.4660944 Z"></path>
                                        <path d="M34.12,43.5103863 C34.12,42.9415093 33.6588341,42.4803433 33.0899571,42.4803433 L21.7967382,42.4803433 C21.2278612,42.4803433 20.7666953,42.9415093 20.7666953,43.5103863 C20.7666953,44.0792633 21.2278612,44.5404292 21.7967382,44.5404292 L33.0899571,44.5404292 C33.6588341,44.5404292 34.12,44.0792633 34.12,43.5103863 L34.12,43.5103863 Z"></path>
                                        <path d="M14.3392275,44.5404292 L17.671588,44.5404292 C18.240465,44.5404292 18.7016309,44.0792633 18.7016309,43.5103863 C18.7016309,42.9415093 18.240465,42.4803433 17.671588,42.4803433 L14.3392275,42.4803433 C13.7703505,42.4803433 13.3091845,42.9415093 13.3091845,43.5103863 C13.3091845,44.0792633 13.7703505,44.5404292 14.3392275,44.5404292 L14.3392275,44.5404292 Z"></path>
                                        <path d="M34.5006009,55.6145923 L38.2401717,55.6145923 C38.8090487,55.6145923 39.2702146,55.1534264 39.2702146,54.5845494 C39.2702146,54.0156724 38.8090487,53.5545064 38.2401717,53.5545064 L34.5006009,53.5545064 C33.9317239,53.5545064 33.4705579,54.0156724 33.4705579,54.5845494 C33.4705579,55.1534264 33.9317239,55.6145923 34.5006009,55.6145923 Z"></path>
                                        <path d="M14.3392275,55.6145923 L30.1217167,55.6145923 C30.6905937,55.6145923 31.1517597,55.1534264 31.1517597,54.5845494 C31.1517597,54.0156724 30.6905937,53.5545064 30.1217167,53.5545064 L14.3392275,53.5545064 C13.7703505,53.5545064 13.3091845,54.0156724 13.3091845,54.5845494 C13.3091845,55.1534264 13.7703505,55.6145923 14.3392275,55.6145923 L14.3392275,55.6145923 Z"></path>
                                    </g>
                                    <path d="M76.6951073,47.2648927 L76.6951073,34.0612876 L78.1675536,33.4482403 C79.5598283,32.8684979 79.7675536,31.9927897 79.7675536,31.5224034 C79.7675536,31.0520172 79.5598283,30.1761373 78.1675536,29.5965665 L56.8446352,20.7181116 C55.3091845,20.07897 52.9045494,20.07897 51.3694421,20.7181116 L30.0465236,29.5965665 C28.6542489,30.1761373 28.4463519,31.0518455 28.4463519,31.5224034 C28.4463519,31.9929614 28.6542489,32.8684979 30.0465236,33.4482403 L37.2101288,36.4309013 L37.2101288,47.5030043 C37.2101288,48.0718813 37.6712947,48.5330472 38.2401717,48.5330472 L39.4034335,48.5330472 C43.4417167,48.5330472 47.5553648,52.2870386 50.2774249,54.7711588 C52.1642918,56.4930472 53.0360515,57.2544206 53.9230901,57.2544206 C54.7986266,57.2544206 55.616309,56.5371674 57.5435193,54.7697854 C60.2521888,52.2861803 64.3452361,48.5330472 68.2590558,48.5330472 L69.4848069,48.5330472 C70.0536839,48.5330472 70.5148498,48.0718813 70.5148498,47.5030043 L70.5148498,36.6351931 L74.6350215,34.9198283 L74.6350215,47.1618884 C72.4318288,47.5751284 70.8862554,49.5713939 71.0379543,51.8078671 C71.1896531,54.0443404 72.990641,55.8136103 75.2294564,55.9255511 C77.4682717,56.0374919 79.4367629,54.4566959 79.8107947,52.2465092 C80.1848266,50.0363225 78.8460905,47.8958415 76.6951073,47.2648927 L76.6951073,47.2648927 Z M30.7826609,31.5224034 C30.7998283,31.5145064 30.8188841,31.5064378 30.8384549,31.4983691 L52.1613734,22.6199142 C53.1974249,22.1884979 55.0159657,22.1883262 56.0527039,22.6199142 L77.3756223,31.4983691 C77.3951931,31.5064378 77.4137339,31.5145064 77.4314163,31.5224034 C77.4142489,31.5303004 77.3951931,31.5381974 77.3756223,31.5464378 L56.0528755,40.4245494 C55.0164807,40.8559657 53.1977682,40.8559657 52.1613734,40.4245494 L30.8384549,31.5464378 C30.8188841,31.5381974 30.8001717,31.5303004 30.7826609,31.5224034 L30.7826609,31.5224034 Z M68.4547639,46.4729614 L68.2590558,46.4729614 C63.543691,46.4729614 59.0951073,50.552103 56.1512446,53.2515021 C55.3464378,53.9896996 54.3636052,54.8906438 53.9179399,55.1502146 C53.4686695,54.8944206 52.4777682,53.9900429 51.6660944,53.2494421 C48.7090129,50.5509013 44.2403433,46.4729614 39.4034335,46.4729614 L39.2702146,46.4729614 L39.2702146,37.288412 L51.3696137,42.3260086 C53.1386711,42.9650979 55.0755778,42.9650979 56.8446352,42.3260086 L68.4547639,37.4920172 L68.4547639,46.4729614 Z M75.4492704,53.8947639 C74.1726621,53.8885945 73.1294959,52.8739679 73.0879251,51.5980217 C73.0463544,50.3220755 74.0212645,49.2416992 75.2947639,49.1524464 C75.4916129,49.229866 75.7078328,49.2433798 75.9127897,49.191073 C77.1049094,49.435368 77.9197921,50.540825 77.8004573,51.751853 C77.6811224,52.9628809 76.6661441,53.8880232 75.4492704,53.8949356 L75.4492704,53.8947639 Z" fill="#FFC221" class="secondary-fill-color"></path>
                                </svg>
                            </div>
                            <div class="counter-item-02__content">
                                <span class="counter-item-02__count count"  data-count="1205">0</span>
                                <p class="counter-item-02__text">@lang('patient')</p>
                            </div>
                        </div>
                        <!-- Counter Item End -->

                    </div>
                    <div class="col-lg-4 col-sm-4" data-aos="fade-up" data-aos-duration="1000">

                        <!-- Counter Item Start -->
                        <div class="counter-item-02">
                            <div class="counter-item-02__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="80px" height="74px" viewBox="0 0 80 74">
                                    <path d="M11.4472881,61.5311864 C13.4932137,59.4400791 15.8065172,57.6285204 18.3271186,56.1435593 C20.9684746,62.5235593 25.1191525,67.7723729 30.5064407,71.4020339 C23.25808,70.2442888 16.5752082,66.7831901 11.4472881,61.5311864 L11.4472881,61.5311864 Z" fill="#D3E6FA"></path>
                                    <path d="M17.5877966,22.9491525 C16.0135593,27.3874576 15.1355932,32.2033898 15.0350847,37.6271186 L2.05084746,37.6271186 C2.28591981,30.0837483 5.11888136,22.8530117 10.070678,17.1576271 C12.3032017,19.4189076 14.8319263,21.3671505 17.5877966,22.9491525 L17.5877966,22.9491525 Z" fill="#D3E6FA"></path>
                                    <path d="M15.0350847,39.6610169 C15.1352542,44.9152542 16.0135593,49.8191525 17.5877966,54.2584746 C14.8308685,55.8544571 12.3022783,57.8157094 10.070678,60.0889831 C5.14692274,54.3929482 2.31732754,47.1854549 2.05084746,39.6610169 L15.0350847,39.6610169 Z" fill="#D3E6FA"></path>
                                    <path d="M30.5066102,5.72322034 C25.119322,9.35305085 20.9684746,14.6018644 18.3271186,20.9816949 C15.8065183,19.4967994 13.4932136,17.6852968 11.4472881,15.5942373 C16.575273,10.3421982 23.2581909,6.88104695 30.5066102,5.72322034 L30.5066102,5.72322034 Z" fill="#D3E6FA"></path>
                                    <path d="M36.0142373,73.8755932 C36.2645763,73.8755932 36.5138983,73.8710169 36.7628814,73.8661017 C36.8078232,73.8722242 36.853118,73.8755932 36.8984746,73.8755932 C36.9571028,73.8755932 37.0155693,73.8693206 37.0732203,73.8586441 C56.4435593,73.3071186 72.0284746,57.6864407 72.0284746,38.5623729 C72.0284746,37.1047458 71.9437288,33.8018644 71.7762712,32.4137288 L69.7569492,32.6577966 C69.9108475,33.9289831 69.9942373,37.2247458 69.9942373,38.5623729 C69.9903251,46.4964594 67.1047518,54.1590573 61.8742373,60.1249153 C59.6598591,57.8550749 57.1505809,55.8930071 54.4137288,54.2913559 C56.1057627,49.5488136 57.0038983,44.2454237 57.0038983,38.5625424 C57.0038983,37.5964407 56.9769492,36.6222034 56.9237288,35.6689831 C56.8924017,35.1082342 56.4124455,34.6790433 55.8516949,34.710339 C55.2838482,34.7610258 54.8591716,35.253954 54.8930508,35.8230508 C54.9254237,36.4049153 54.9466102,36.9489831 54.9586441,37.6269492 L36.9491525,37.6269492 L36.9491525,27.7859322 C40.4572595,27.6994527 43.9347292,27.1092383 47.2749153,26.0333898 C47.6066102,25.9259322 47.96,25.8130508 48.2850847,25.6971186 L47.4432203,23.9505085 C47.1367797,24.0598305 46.9562712,23.9969492 46.6433898,24.0983051 C43.5080125,25.1124805 40.2427723,25.6692268 36.9484746,25.7513559 L36.9484746,5.46152542 C40.4372802,7.14690807 43.5418592,9.53232971 46.0689831,12.469322 L47.6205085,11.130339 C45.8254267,9.06739484 43.7689264,7.24740945 41.5030508,5.71644068 C43.8586772,6.09085819 46.1688104,6.71002932 48.3959322,7.56389831 L48.5874576,7.63711864 L49.3272881,5.7420339 L49.1288136,5.66491525 C44.9424969,4.06078624 40.4963461,3.24207901 36.0132203,3.24977598 C16.1555932,3.24977598 0,19.0911864 0,38.5627119 C0,58.0342373 16.1559322,73.8755932 36.0142373,73.8755932 Z M11.4472881,61.5311864 C13.4932137,59.4400791 15.8065172,57.6285204 18.3271186,56.1435593 C20.9684746,62.5235593 25.1191525,67.7723729 30.5064407,71.4020339 C23.25808,70.2442888 16.5752082,66.7831901 11.4472881,61.5311864 L11.4472881,61.5311864 Z M17.5877966,22.9491525 C16.0135593,27.3874576 15.1355932,32.2033898 15.0350847,37.6271186 L2.05084746,37.6271186 C2.28591981,30.0837483 5.11888136,22.8530117 10.070678,17.1576271 C12.3032017,19.4189076 14.8319263,21.3671505 17.5877966,22.9491525 L17.5877966,22.9491525 Z M34.9152542,71.6650847 C28.3050847,68.3184746 23.0467797,62.5359322 20.0410169,55.1540678 C24.6570396,52.8054225 29.7380016,51.5137889 34.9152542,51.3728814 L34.9152542,71.6650847 Z M36.9491525,51.3740678 C42.1248951,51.5194788 47.2008651,52.8326362 51.7977966,55.2154237 C48.7888136,62.5677966 43.7288136,68.3277966 36.9491525,71.6650847 L36.9491525,51.3740678 Z M34.9152542,49.3389831 C29.5052556,49.5021517 24.1965247,50.8474128 19.3616949,53.280339 C17.9274576,49.1316949 17.1666102,44.5762712 17.069322,39.6610169 L34.9152542,39.6610169 L34.9152542,49.3389831 Z M15.0350847,39.6610169 C15.1352542,44.9152542 16.0135593,49.8191525 17.5877966,54.2584746 C14.8308685,55.8544571 12.3022783,57.8157094 10.070678,60.0889831 C5.14692274,54.3929482 2.31732754,47.1854549 2.05084746,39.6610169 L15.0350847,39.6610169 Z M60.4915254,61.6211864 C55.3747881,66.8231332 48.7272798,70.2506507 41.5220339,71.4020339 C46.8889831,67.7861017 51.0283051,62.5633898 53.6710169,56.2155932 C56.1708914,57.7117807 58.4639167,59.5291176 60.4915254,61.6211864 Z M54.959322,39.6610169 C54.8849507,44.3178959 54.0766612,48.9339148 52.5642373,53.3389831 C47.724815,50.8521051 42.3881993,49.485064 36.9491525,49.3389831 L36.9491525,39.6610169 L54.959322,39.6610169 Z M17.069322,37.6271186 C17.1666102,32.7118644 17.9274576,28.0750847 19.3616949,23.9271186 C24.202038,26.3344014 29.5110278,27.6519584 34.9152542,27.7871186 L34.9152542,37.6271186 L17.069322,37.6271186 Z M20.0410169,21.9711864 C23.0469492,14.5894915 28.3050847,8.80694915 34.9152542,5.46033898 L34.9152542,25.7518644 C29.7380305,25.6111882 24.6570546,24.3197248 20.0410169,21.9711864 L20.0410169,21.9711864 Z M30.5066102,5.72322034 C25.119322,9.35305085 20.9684746,14.6018644 18.3271186,20.9816949 C15.8065183,19.4967994 13.4932136,17.6852968 11.4472881,15.5942373 C16.575273,10.3421982 23.2581909,6.88104695 30.5066102,5.72322034 L30.5066102,5.72322034 Z" fill="#0071DC" class="primary-fill-color"></path>
                                    <path d="M74.5676271,5.07847458 C67.6567868,-1.66263363 56.6310098,-1.66263363 49.7201695,5.07847458 C46.549123,8.19013003 44.6295848,12.3568486 44.3252542,16.7891525 C44.1675155,19.2103273 44.5307056,21.6371814 45.390339,23.9061017 C46.2322034,26.1679661 47.6008475,28.2976271 49.4581356,30.2361017 L61.409322,42.710678 C61.6011409,42.9109402 61.8664214,43.024184 62.1437288,43.024184 C62.4210363,43.024184 62.6863167,42.9109402 62.8781356,42.710678 L74.8294915,30.2361017 C76.6864407,28.2977966 78.0549153,26.1683051 78.8972881,23.9062712 C79.7568589,21.6373985 80.1199354,19.2105889 79.9620339,16.7894915 C79.6578743,12.3571494 77.7385224,8.19032184 74.5676271,5.07847458 Z M76.9913559,23.1971186 C76.2455932,25.1971186 75.0252542,27.0925424 73.3610169,28.829661 L62.1440678,40.5377966 L50.9271186,28.829661 C49.2628814,27.0925424 48.0415254,25.1976271 47.2969492,23.1971186 C46.5384866,21.1989258 46.2173121,19.0613269 46.3550847,16.9284746 C46.6255491,12.9924173 48.3304737,9.29231295 51.1467797,6.52932203 C57.2660344,0.566841452 67.0221012,0.566841452 73.1413559,6.52932203 C75.9576357,9.29233141 77.6625554,12.9924252 77.9330508,16.9284746 C78.0706952,19.0610856 77.7495829,21.1984247 76.9913559,23.1964407 L76.9913559,23.1971186 Z" fill="#FFC221" class="secondary-fill-color"></path>
                                    <path d="M62.1440678,4.74576271 C55.6116949,4.74576271 50.2966102,10.090678 50.2966102,16.6610169 C50.2966102,23.2313559 55.6110169,28.5762712 62.1440678,28.5762712 C68.6771186,28.5762712 73.9915254,23.2313559 73.9915254,16.6610169 C73.9915254,10.090678 68.6762712,4.74576271 62.1440678,4.74576271 Z M62.1440678,26.5413559 C56.7333898,26.5413559 52.3305085,22.1088136 52.3305085,16.66 C52.3305085,11.2111864 56.7333898,6.77966102 62.1440678,6.77966102 C67.5547458,6.77966102 71.9576271,11.2122034 71.9576271,16.6610169 C71.9576271,22.1098305 67.5549153,26.5413559 62.1440678,26.5413559 Z" fill="#FFC221" class="secondary-fill-color"></path>
                                    <path d="M66.0681469,12.8891176 C66.582281,12.8891176 66.9990691,12.4662242 66.9990691,11.9445588 C66.9990691,11.4228934 66.582281,11 66.0681469,11 L58.9310773,11 C58.4169432,11 58.0001552,11.4228934 58.0001552,11.9445588 C58.0001552,12.4662242 58.4169432,12.8891176 58.9310773,12.8891176 L60.9732101,12.8891176 C61.8031819,12.8788413 62.5579928,13.3754728 62.8873412,14.1485294 L58.9309221,14.1485294 C58.416788,14.1485294 58,14.5714228 58,15.0930882 C58,15.6147536 58.416788,16.037647 58.9309221,16.037647 L62.8873412,16.037647 C62.4887293,16.7252172 61.7592246,17.1451667 60.973055,17.1396323 L58.9310773,17.1396323 C58.5447808,17.1573131 58.2054826,17.4054589 58.0668091,17.7717151 C57.9281355,18.1379712 58.0164199,18.5527881 58.2916889,18.828346 L63.3962453,23.7321805 C63.6355621,23.9692158 63.98207,24.0572556 64.3032395,23.9626274 C64.624409,23.8679991 64.870551,23.6053429 64.9475231,23.2751173 C65.0244953,22.9448918 64.920389,22.5981871 64.675022,22.3676079 L61.2616408,19.1142325 C63.0148775,18.9870319 64.4578068,17.6119117 64.8573276,16.037647 L66.0690779,16.037647 C66.583212,16.037647 67,15.6147536 67,15.0930882 C67,14.5714228 66.583212,14.1485294 66.0690779,14.1485294 L64.8565518,14.1485294 C64.7709356,13.6987841 64.5982821,13.2707265 64.3485786,12.8891176 L66.0681469,12.8891176 Z" fill="#FFC221" class="secondary-fill-color"></path>
                                </svg>
                            </div>
                            <div class="counter-item-02__content">
                                <span class="counter-item-02__count count" data-count="127">0</span>
                                <p class="counter-item-02__text">@lang('medical_case')</p>
                            </div>
                        </div>
                        <!-- Counter Item End -->

                    </div>
                </div>
            </div>
            <!-- Counter End -->

        </div>

        <div class="counter-section-02__shape-01" data-depth="0.7"></div>
        <div class="counter-section-02__shape-02" data-depth="0.9"></div>
        <div class="counter-section-02__shape-03" data-depth="-0.6"></div>
        <div class="counter-section-02__shape-04" data-depth="0.6"></div>
        <img class="counter-section-02__shape-05" data-depth="-0.8" src="frontend/assets/images/shape/edumall-shape-01.png" alt="Shape">
    </div>
    <!-- Counter End -->


    <!-- Testimonial Start -->
    <div class="testimonial-section bg-color-01 section-padding-01 scene">
        <div class="container">

            <!-- Section Title Start -->
            <div class="section-title text-center" data-aos="fade-up" data-aos-duration="1000">
                <h2 class="section-title__title-03"><mark>@lang('people_say_about_us')</mark></h2>
            </div>
            <!-- Section Title End -->

            <!-- Testimonial Start -->
            <div class="testimonial-active-02" data-aos="fade-up" data-aos-duration="1000">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">

                            <!-- Testimonial Item Start -->
                            <div class="testimonial-item bg-white">
                                <div class="testimonial-quote-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50px" height="40px" viewBox="0 0 50 40">
                                        <path d="M21.8750977,2.18046875 C22.4503906,2.18046875 22.9167969,1.7140625 22.9167969,1.13876953 C22.9167969,0.563476562 22.4503906,0.0970703125 21.8750977,0.0970703125 C9.79960938,0.110839844 0.0138671875,9.89658203 2.76635467e-06,21.9720703 L2.76635467e-06,28.2220703 C-0.01796875,34.56875 5.11230469,39.728418 11.4588867,39.7465793 C17.8055664,39.7645508 22.9652344,34.6342773 22.9833957,28.2876953 C23.0013672,21.9410156 17.8710938,16.7813477 11.5245117,16.7632813 C7.77705078,16.7526367 4.25966797,18.5698242 2.10009766,21.6325195 C2.29296875,10.8446289 11.0853516,2.19580078 21.8750977,2.18046875 Z"></path>
                                        <path d="M38.5416992,16.7638672 C34.8157227,16.7667969 31.3244141,18.5832031 29.1833984,21.6326172 C29.3763672,10.8446289 38.16875,2.19580078 48.9583984,2.18056641 C49.5336914,2.18056641 50.0000977,1.71416016 50.0000977,1.13886719 C50.0000977,0.563574219 49.5336914,0.0971679688 48.9583984,0.0971679688 C36.8829102,0.1109375 27.097168,9.89667969 27.0833984,21.972168 L27.0833984,28.222168 C27.0833984,34.5503906 32.2134766,39.6804687 38.5416992,39.6804687 C44.8699219,39.6804687 50.0000977,34.5503906 50.0000977,28.222168 C50.0000977,21.8939453 44.8700195,16.7638672 38.5416992,16.7638672 Z"></path>
                                    </svg>
                                </div>
                                <div class="testimonial-main-content">
                                    <div class="testimonial-caption">
                                        <h3 class="testimonial-caption__title">@lang('great_quality')</h3>
                                        <p>
                                            @lang('dummy_review_for_doctor')
                                        </p>
                                    </div>
                                    <div class="testimonial-info">
                                        <div class="testimonial-info__image">
                                            <img src="frontend/assets/images/avatar/avatar-01.jpg" alt="Avatar" width="60" height="60">
                                        </div>
                                        <div class="testimonial-info__caption">
                                            <h5 class="testimonial-info__name">@lang('ahmed_adel')</h5>
                                            <p class="testimonial-info__designation">/ @lang('Schizophrenic_patient')</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Item End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Testimonial Item Start -->
                            <div class="testimonial-item bg-white">
                                <div class="testimonial-quote-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50px" height="40px" viewBox="0 0 50 40">
                                        <path d="M21.8750977,2.18046875 C22.4503906,2.18046875 22.9167969,1.7140625 22.9167969,1.13876953 C22.9167969,0.563476562 22.4503906,0.0970703125 21.8750977,0.0970703125 C9.79960938,0.110839844 0.0138671875,9.89658203 2.76635467e-06,21.9720703 L2.76635467e-06,28.2220703 C-0.01796875,34.56875 5.11230469,39.728418 11.4588867,39.7465793 C17.8055664,39.7645508 22.9652344,34.6342773 22.9833957,28.2876953 C23.0013672,21.9410156 17.8710938,16.7813477 11.5245117,16.7632813 C7.77705078,16.7526367 4.25966797,18.5698242 2.10009766,21.6325195 C2.29296875,10.8446289 11.0853516,2.19580078 21.8750977,2.18046875 Z"></path>
                                        <path d="M38.5416992,16.7638672 C34.8157227,16.7667969 31.3244141,18.5832031 29.1833984,21.6326172 C29.3763672,10.8446289 38.16875,2.19580078 48.9583984,2.18056641 C49.5336914,2.18056641 50.0000977,1.71416016 50.0000977,1.13886719 C50.0000977,0.563574219 49.5336914,0.0971679688 48.9583984,0.0971679688 C36.8829102,0.1109375 27.097168,9.89667969 27.0833984,21.972168 L27.0833984,28.222168 C27.0833984,34.5503906 32.2134766,39.6804687 38.5416992,39.6804687 C44.8699219,39.6804687 50.0000977,34.5503906 50.0000977,28.222168 C50.0000977,21.8939453 44.8700195,16.7638672 38.5416992,16.7638672 Z"></path>
                                    </svg>
                                </div>
                                <div class="testimonial-main-content">
                                    <div class="testimonial-caption">
                                        <h3 class="testimonial-caption__title">@lang('great_quality')</h3>
                                        <p>
                                            @lang('dummy_review_for_doctor')
                                        </p>
                                    </div>
                                    <div class="testimonial-info">
                                        <div class="testimonial-info__image">
                                            <img src="frontend/assets/images/avatar/avatar-01.jpg" alt="Avatar" width="60" height="60">
                                        </div>
                                        <div class="testimonial-info__caption">
                                            <h5 class="testimonial-info__name">@lang('ahmed_adel')</h5>
                                            <p class="testimonial-info__designation">/ @lang('Schizophrenic_patient')</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Item End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Testimonial Item Start -->
                            <div class="testimonial-item bg-white">
                                <div class="testimonial-quote-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50px" height="40px" viewBox="0 0 50 40">
                                        <path d="M21.8750977,2.18046875 C22.4503906,2.18046875 22.9167969,1.7140625 22.9167969,1.13876953 C22.9167969,0.563476562 22.4503906,0.0970703125 21.8750977,0.0970703125 C9.79960938,0.110839844 0.0138671875,9.89658203 2.76635467e-06,21.9720703 L2.76635467e-06,28.2220703 C-0.01796875,34.56875 5.11230469,39.728418 11.4588867,39.7465793 C17.8055664,39.7645508 22.9652344,34.6342773 22.9833957,28.2876953 C23.0013672,21.9410156 17.8710938,16.7813477 11.5245117,16.7632813 C7.77705078,16.7526367 4.25966797,18.5698242 2.10009766,21.6325195 C2.29296875,10.8446289 11.0853516,2.19580078 21.8750977,2.18046875 Z"></path>
                                        <path d="M38.5416992,16.7638672 C34.8157227,16.7667969 31.3244141,18.5832031 29.1833984,21.6326172 C29.3763672,10.8446289 38.16875,2.19580078 48.9583984,2.18056641 C49.5336914,2.18056641 50.0000977,1.71416016 50.0000977,1.13886719 C50.0000977,0.563574219 49.5336914,0.0971679688 48.9583984,0.0971679688 C36.8829102,0.1109375 27.097168,9.89667969 27.0833984,21.972168 L27.0833984,28.222168 C27.0833984,34.5503906 32.2134766,39.6804687 38.5416992,39.6804687 C44.8699219,39.6804687 50.0000977,34.5503906 50.0000977,28.222168 C50.0000977,21.8939453 44.8700195,16.7638672 38.5416992,16.7638672 Z"></path>
                                    </svg>
                                </div>
                                <div class="testimonial-main-content">
                                    <div class="testimonial-caption">
                                        <h3 class="testimonial-caption__title">@lang('great_quality')</h3>
                                        <p>
                                            @lang('dummy_review_for_doctor')
                                        </p>
                                    </div>
                                    <div class="testimonial-info">
                                        <div class="testimonial-info__image">
                                            <img src="frontend/assets/images/avatar/avatar-01.jpg" alt="Avatar" width="60" height="60">
                                        </div>
                                        <div class="testimonial-info__caption">
                                            <h5 class="testimonial-info__name">@lang('ahmed_adel')</h5>
                                            <p class="testimonial-info__designation">/ @lang('Schizophrenic_patient')</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Item End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Testimonial Item Start -->
                            <div class="testimonial-item bg-white">
                                <div class="testimonial-quote-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50px" height="40px" viewBox="0 0 50 40">
                                        <path d="M21.8750977,2.18046875 C22.4503906,2.18046875 22.9167969,1.7140625 22.9167969,1.13876953 C22.9167969,0.563476562 22.4503906,0.0970703125 21.8750977,0.0970703125 C9.79960938,0.110839844 0.0138671875,9.89658203 2.76635467e-06,21.9720703 L2.76635467e-06,28.2220703 C-0.01796875,34.56875 5.11230469,39.728418 11.4588867,39.7465793 C17.8055664,39.7645508 22.9652344,34.6342773 22.9833957,28.2876953 C23.0013672,21.9410156 17.8710938,16.7813477 11.5245117,16.7632813 C7.77705078,16.7526367 4.25966797,18.5698242 2.10009766,21.6325195 C2.29296875,10.8446289 11.0853516,2.19580078 21.8750977,2.18046875 Z"></path>
                                        <path d="M38.5416992,16.7638672 C34.8157227,16.7667969 31.3244141,18.5832031 29.1833984,21.6326172 C29.3763672,10.8446289 38.16875,2.19580078 48.9583984,2.18056641 C49.5336914,2.18056641 50.0000977,1.71416016 50.0000977,1.13886719 C50.0000977,0.563574219 49.5336914,0.0971679688 48.9583984,0.0971679688 C36.8829102,0.1109375 27.097168,9.89667969 27.0833984,21.972168 L27.0833984,28.222168 C27.0833984,34.5503906 32.2134766,39.6804687 38.5416992,39.6804687 C44.8699219,39.6804687 50.0000977,34.5503906 50.0000977,28.222168 C50.0000977,21.8939453 44.8700195,16.7638672 38.5416992,16.7638672 Z"></path>
                                    </svg>
                                </div>
                                <div class="testimonial-main-content">
                                    <div class="testimonial-caption">
                                        <h3 class="testimonial-caption__title">@lang('great_quality')</h3>
                                        <p>
                                            @lang('dummy_review_for_doctor')
                                        </p>
                                    </div>
                                    <div class="testimonial-info">
                                        <div class="testimonial-info__image">
                                            <img src="frontend/assets/images/avatar/avatar-01.jpg" alt="Avatar" width="60" height="60">
                                        </div>
                                        <div class="testimonial-info__caption">
                                            <h5 class="testimonial-info__name">@lang('ahmed_adel')</h5>
                                            <p class="testimonial-info__designation">/ @lang('Schizophrenic_patient')</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Item End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Testimonial Item Start -->
                            <div class="testimonial-item bg-white">
                                <div class="testimonial-quote-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50px" height="40px" viewBox="0 0 50 40">
                                        <path d="M21.8750977,2.18046875 C22.4503906,2.18046875 22.9167969,1.7140625 22.9167969,1.13876953 C22.9167969,0.563476562 22.4503906,0.0970703125 21.8750977,0.0970703125 C9.79960938,0.110839844 0.0138671875,9.89658203 2.76635467e-06,21.9720703 L2.76635467e-06,28.2220703 C-0.01796875,34.56875 5.11230469,39.728418 11.4588867,39.7465793 C17.8055664,39.7645508 22.9652344,34.6342773 22.9833957,28.2876953 C23.0013672,21.9410156 17.8710938,16.7813477 11.5245117,16.7632813 C7.77705078,16.7526367 4.25966797,18.5698242 2.10009766,21.6325195 C2.29296875,10.8446289 11.0853516,2.19580078 21.8750977,2.18046875 Z"></path>
                                        <path d="M38.5416992,16.7638672 C34.8157227,16.7667969 31.3244141,18.5832031 29.1833984,21.6326172 C29.3763672,10.8446289 38.16875,2.19580078 48.9583984,2.18056641 C49.5336914,2.18056641 50.0000977,1.71416016 50.0000977,1.13886719 C50.0000977,0.563574219 49.5336914,0.0971679688 48.9583984,0.0971679688 C36.8829102,0.1109375 27.097168,9.89667969 27.0833984,21.972168 L27.0833984,28.222168 C27.0833984,34.5503906 32.2134766,39.6804687 38.5416992,39.6804687 C44.8699219,39.6804687 50.0000977,34.5503906 50.0000977,28.222168 C50.0000977,21.8939453 44.8700195,16.7638672 38.5416992,16.7638672 Z"></path>
                                    </svg>
                                </div>
                                <div class="testimonial-main-content">
                                    <div class="testimonial-caption">
                                        <h3 class="testimonial-caption__title">@lang('great_quality')</h3>
                                        <p>
                                            @lang('dummy_review_for_doctor')
                                        </p>
                                    </div>
                                    <div class="testimonial-info">
                                        <div class="testimonial-info__image">
                                            <img src="frontend/assets/images/avatar/avatar-01.jpg" alt="Avatar" width="60" height="60">
                                        </div>
                                        <div class="testimonial-info__caption">
                                            <h5 class="testimonial-info__name">@lang('ahmed_adel')</h5>
                                            <p class="testimonial-info__designation">/ @lang('Schizophrenic_patient')</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Item End -->

                        </div>

                    </div>
                </div>
            </div>
            <!-- Testimonial End -->

        </div>

        <div class="testimonial-section__shape-01" data-depth="-0.5"></div>
        <div class="testimonial-section__shape-02" data-depth="0.7"></div>
        <div class="testimonial-section__shape-03" data-depth="-0.5"></div>
        <img class="testimonial-section__shape-04" data-depth="0.7" src="frontend/assets/images/shape/edumall-shape-01.png" alt="Shape" width="179" height="178">

    </div>
    <!-- Testimonial End -->

    <!-- Partners Start -->
    <div class="partners-seaction section-padding-02">
        <div class="container">
            <div class="row gy-8 align-items-center">
                <div class="col-lg-4 col-md-6">
                    <!-- Section Title Start -->
                    <div class="section-title pe-xxl-2" data-aos="fade-up" data-aos-duration="1000">
                        <h2 class="section-title__title-02">
                            @lang('collaborate_with_n_hospitals',['num' => "<span>+15</span>"])
                        </h2>
                    </div>
                    <!-- Section Title End -->

                    <div class="section-btn" data-aos="fade-up" data-aos-duration="1000">
                        <a href="#" class="btn btn-light btn-hover-primary">@lang('v_all_partners')</a>
                    </div>
                </div>

                <div class="col-lg-8">

                    <!-- Partners Logo Wrapper Start -->
                    <div class="partner-logo-wrapper-02" data-aos="fade-up" data-aos-duration="1000">

                        <!-- Partners Logo Start -->
                        <div class="partner-logo">
                            <div class="partner-logo__logo">
                                <img src="{{asset('frontend/assets/images/partners-logo/client-logo-01.jpg')}}" alt="Logo" width="68" height="92">
                            </div>
                        </div>
                        <!-- Partners Logo End -->

                        <!-- Partners Logo Start -->
                        <div class="partner-logo">
                            <div class="partner-logo__logo">
                                <img src="{{asset('frontend/assets/images/partners-logo/client-logo-04.jpg')}}" alt="Logo" width="78" height="91">
                            </div>
                        </div>
                        <!-- Partners Logo End -->

                        <!-- Partners Logo Start -->
                        <div class="partner-logo">
                            <div class="partner-logo__logo">
                                <img src="{{asset('frontend/assets/images/partners-logo/client-logo-05.jpg')}}" alt="Logo" width="76" height="91">
                            </div>
                        </div>
                        <!-- Partners Logo End -->

                        <!-- Partners Logo Start -->
                        <div class="partner-logo">
                            <div class="partner-logo__logo">
                                <img src="{{asset('frontend/assets/images/partners-logo/client-logo-06.jpg')}}" alt="Logo" width="99" height="71">
                            </div>
                        </div>
                        <!-- Partners Logo End -->

                        <!-- Partners Logo Start -->
                        <div class="partner-logo">
                            <div class="partner-logo__logo">
                                <img src="{{asset('frontend/assets/images/partners-logo/client-logo-07.jpg')}}" alt="Logo" width="93" height="72">
                            </div>
                        </div>
                        <!-- Partners Logo End -->

                        <!-- Partners Logo Start -->
                        <div class="partner-logo">
                            <div class="partner-logo__logo">
                                <img src="{{asset('frontend/assets/images/partners-logo/client-logo-10.jpg')}}" alt="Logo" width="87" height="75">
                            </div>
                        </div>
                        <!-- Partners Logo End -->

                        <!-- Partners Logo Start -->
                        <div class="partner-logo">
                            <div class="partner-logo__logo">
                                <img src="{{asset('frontend/assets/images/partners-logo/client-logo-11.jpg')}}" alt="Logo" width="87" height="78">
                            </div>
                        </div>
                        <!-- Partners Logo End -->

                        <!-- Partners Logo Start -->
                        <div class="partner-logo">
                            <div class="partner-logo__logo">
                                <img src="{{asset('frontend/assets/images/partners-logo/client-logo-12.jpg')}}" alt="Logo" width="107" height="69">
                            </div>
                        </div>
                        <!-- Partners Logo End -->

                    </div>
                    <!-- Partners Logo Wrapper End -->

                </div>
            </div>
        </div>
    </div>
    <!-- Partners End -->

    <!-- Newsletter Start -->
    <x-newsletter />
    <!-- Newsletter End -->

    <!-- Footer Start -->

    <!-- Footer End -->

</x-clientside.layout>
