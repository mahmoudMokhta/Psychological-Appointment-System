<x-clientside.layout active="active" title="Contact Us">

    <x-page-banner
        breadcrumb_start="home"
        breadcrumb_end="contact_us"
        banner_title="about"
        page_type="no_banner"
    />
    <!-- Contact us Section Start -->
    <div class="contact-section">
        <div class="container custom-container">

            <!-- Contact Title Start -->
            <div class="contact-title text-center section-padding-02" data-aos="fade-up" data-aos-duration="1000">
                <h2 class="contact-title__title">@lang('always_eager_to_hear_from_you')</h2>
                <p>
                    @lang('long_dummy_text_in_arabic')
                </p>
            </div>
            <!-- Contact Title End -->

            <!-- Contact Info Start -->
            <div class="contact-info section-padding-02">
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6">
                        <!-- Contact Info Start -->
                        <div class="contact-info__item" data-aos="fade-up" data-aos-duration="1000">
                            <div class="contact-info__icon">
                                <i class="fas  fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-info__content">
                                <h3 class="contact-info__title">@lang('location')</h3>
                                <p>1800 Abbot Kinney Blvd. Unit <br> D & E Venice</p>
                            </div>
                        </div>
                        <!-- Contact Info End -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!-- Contact Info Start -->
                        <div class="contact-info__item" data-aos="fade-up" data-aos-duration="1000">
                            <div class="contact-info__icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="contact-info__content">
                                <h3 class="contact-info__title">@lang('contact')</h3>
                                <p>@lang('mobile'): <strong> (+88) - 1990 - 6886</strong></p>
                                <p>@lang('fax'): <strong>1800 - 1102</strong></p>
                                <p>@lang('email'): contact@edumall.com</p>
                            </div>
                        </div>
                        <!-- Contact Info End -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!-- Contact Info Start -->
                        <div class="contact-info__item" data-aos="fade-up" data-aos-duration="1000">
                            <div class="contact-info__icon">
                                <i class="fas  fa-clock"></i>
                            </div>
                            <div class="contact-info__content">
                                <h3 class="contact-info__title">@lang('hours_of_work')</h3>
                                <p>@lang('sun_thu'): 09:00 - 20:00</p>
                                <p>@lang('sun_thu'): 10:30 - 22:00</p>
                            </div>
                        </div>
                        <!-- Contact Info End -->
                    </div>
                </div>
            </div>
            <!-- Contact Info End -->

            <!-- Contact Map Start -->
            <div class="contact-map section-padding-02" data-aos="fade-up" data-aos-duration="1000">
                <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Mission%20District%2C%20San%20Francisco%2C%20CA%2C%20USA&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
            </div>
            <!-- Contact Map End -->

            <!-- Contact Form Start -->
            <div class="contact-form section-padding-01">

                <!-- Section Title Start -->
                <div class="section-title text-center" data-aos="fade-up" data-aos-duration="1000">
                    <h2 class="section-title__title">@lang('fill_the_form_below')</h2>
                </div>
                <!-- Section Title End -->

                <!-- Contact Form Wrapper Start -->
                <div class="contact-form__wrapper" data-aos="fade-up" data-aos-duration="1000">
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="contact-form__input">
                                <input class="form-control" type="text" placeholder="@lang('your_name')">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-form__input">
                                <input class="form-control" type="email" placeholder="@lang('your_email')">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="contact-form__input">
                                <textarea class="form-control" placeholder="@lang('message')"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="contact-form__input text-center">
                                <button class="btn btn-primary btn-hover-secondary">@lang('submit')</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Contact Form Wrapper End -->

            </div>
            <!-- Contact Form End -->

        </div>
    </div>
    <!-- Contact us Section End -->

    <!-- Footer Start -->
    <x-newsletter />
    <!-- Footer End -->

</x-clientside.layout>
