<x-frontend.links_header />

<body>

    <main class="main-wrapper">


        <x-frontend.nav_header />



        @yield('content_frontend')

        <x-frontend.footer />

        <!--Back To Start-->
        <button id="backBtn" class="back-to-top backBtn">
            <i class="arrow-top fas fa-arrow-up"></i>
            <i class="arrow-bottom fas fa-arrow-up"></i>
        </button>
        <!--Back To End-->


    </main>

    <x-frontend.login_model />

    <x-frontend.register_model />



    <!-- Edumall Demo Option Start -->
    {{-- <div class="edumall-demo-option">

        <div class="edumall-demo-option__toolbar">
            <button class="toolbar-action demo-open" data-bs-tooltip="tooltip" data-bs-placement="left"
                title="Select Demo"><i class="fas fa-pencil-ruler"></i></button>
            <a class="toolbar-action" href="https://hasthemes.com/contact-us/" data-bs-tooltip="tooltip"
                data-bs-placement="left" title="Support Channel"><i class="far fa-life-ring"></i></a>
            <a class="toolbar-action" href="https://1.envato.market/qnL5nL" data-bs-tooltip="tooltip"
                data-bs-placement="left" title="Purchase EduMall"><i class="fas fa-shopping-basket"></i></a>
        </div>

        <div class="edumall-demo-option__panel">

            <div class="edumall-demo-option__header">
                <h5 class="edumall-demo-option__title">EduMall - Professional LMS Education Center HTML Template</h5>
                <a class="edumall-demo-option__btn btn btn-primary btn-hover-secondary"
                    href="https://1.envato.market/qnL5nL"><i class="fas fa-shopping-basket"></i> Buy Now</a>
            </div>

            <div class="edumall-demo-option__body">
                <!-- <div class="edumall-demo-option-item">
                <a href="" data-bs-tooltip="tooltip" data-bs-placement="top" title="Landing Page">
                    <img src="assets/images/demo/landing.jpg" alt="">
                </a>
            </div> -->
                <div class="edumall-demo-option-item">
                    <a href="index.html" data-bs-tooltip="tooltip" data-bs-placement="top" title="Main Demo">
                        <img src="assets/images/demo/home-01.jpg" alt="Home" width="130" height="158">
                    </a>
                </div>
                <div class="edumall-demo-option-item">
                    <a href="index-course-hub.html" data-bs-tooltip="tooltip" data-bs-placement="top"
                        title="Course Hub">
                        <img src="assets/images/demo/home-02.jpg" alt="Home" width="130" height="158">
                    </a>
                </div>
                <div class="edumall-demo-option-item">
                    <a href="index-online-academy.html" data-bs-tooltip="tooltip" data-bs-placement="top"
                        title="Online Academy">
                        <img src="assets/images/demo/home-03.jpg" alt="Home" width="130" height="158">
                    </a>
                </div>
                <div class="edumall-demo-option-item">
                    <a href="index-education-center.html" data-bs-tooltip="tooltip" data-bs-placement="top"
                        title="Education Center">
                        <img src="assets/images/demo/home-04.jpg" alt="Home" width="130" height="158">
                    </a>
                </div>
                <div class="edumall-demo-option-item">
                    <a href="index-university.html" data-bs-tooltip="tooltip" data-bs-placement="top"
                        title="University">
                        <img src="assets/images/demo/home-05.jpg" alt="Home" width="130" height="158">
                    </a>
                </div>
                <div class="edumall-demo-option-item">
                    <a href="index-language-academic.html" data-bs-tooltip="tooltip" data-bs-placement="top"
                        title="Language Academic">
                        <img src="assets/images/demo/home-06.jpg" alt="Home" width="130" height="158">
                    </a>
                </div>
                <div class="edumall-demo-option-item">
                    <a href="index-single-instructor.html" data-bs-tooltip="tooltip" data-bs-placement="top"
                        title="Single Instructor">
                        <img src="assets/images/demo/home-07.jpg" alt="Home" width="130" height="158">
                    </a>
                </div>
                <div class="edumall-demo-option-item">
                    <a href="index-dev.html" data-bs-tooltip="tooltip" data-bs-placement="top" title="Dev">
                        <img src="assets/images/demo/home-08.jpg" alt="Home" width="130" height="158">
                    </a>
                </div>
                <div class="edumall-demo-option-item">
                    <a href="index-online-art.html" data-bs-tooltip="tooltip" data-bs-placement="top"
                        title="Online Art">
                        <img src="assets/images/demo/home-09.jpg" alt="Home" width="130" height="158">
                    </a>
                </div>
            </div>

        </div>

    </div> --}}
    <!-- Edumall Demo Option End -->




    <x-frontend.links_footer />