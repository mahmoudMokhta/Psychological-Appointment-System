
<x-clientside.layout active="active" title="Booking With Doctor">

    <x-page-banner
        breadcrumb_start="home"
        breadcrumb_end="booking"
        banner_title="doctors"
        page_type="no_banner"  />
    <!-- event Details Start -->
    <div class="event-section section-padding-01">
        <div class="container custom-container">

            <!-- event Dtails Start -->
            <div class="event-details">

                <!-- event Dtails Header Start -->
                <div class="event-details__header">
                    <h3 class="event-details__title">@lang('David_Charl_samhon')</h3>
                    <div class="event-details__meta">
                        <span class="meta-action"><i class="fas fa-map-marker-alt"></i> <span class="meta-action__value">United States</span></span>
                        <span class="meta-action"><i class="fas fa-calendar"></i> <span class="meta-action__value">December 4, 2020 - June 30, 2021</span></span>
                        <span class="meta-action"><i class="fas  fa-clock"></i> <span class="meta-action__value">1:30 pm - 3:30 pm</span></span>
                    </div>
                </div>
                <!-- event Dtails Header End -->

                <!-- event Dtails Thumbnail Start -->
                <div class="event-details__thumbnail">
                    <img src="{{asset('frontend/assets/images/event/event-details.jpg')}}" alt="Event" width="1170" height="350">
                </div>
                <!-- event Dtails Thumbnail End -->

                <!-- event Dtails Summary Start -->
                <div class="event-details__summary">

                    <!-- event Dtails Conent Start -->
                    <div class="event-details__content">
                        <div class="row gy-6">
                            <div class="col-lg-8">
                                <h3 class="event-details__heading mb-3">@lang('about_doctor')</h3>


                                <p>مؤتمر خلق المستقبل من خلال التكنولوجيا - تتم رعاية مركز محمود منصور التقني بشكل مشترك من قبل مجلس كلية مجتمع ميسيسيبي ومجلس جامعات ميسيسيبي بهدف تعزيز التعاون بالإضافة إلى تحويل التدريس والتعلم في حرم الجامعات.</p>

                                <p>احتفالاً بالذكرى السنوية العشرين لتأسيسنا هذا العام على ساحل الخليج، تم تصميم المؤتمر السنوي ليكون المكان الرئيسي الذي يجتمع فيه أعضاء هيئة التدريس والإداريون ومتخصصو تكنولوجيا المعلومات في التعليم العالي لتبادل استراتيجياتهم وأساليبهم وأفضل الممارسات مع بعضهم البعض. الزملاء المعلمين.</p>

                                <p>مع موضوع إعادة تشكيل المستقبل: الذكاء الاصطناعي والواقع الافتراضي والواقع المعزز، ينصب التركيز الأساسي للمؤتمر على تكنولوجيا التعليم، ولكن هناك أيضًا جلسات حول الشبكات وأمن البيانات وما إلى ذلك.</p>

                                <p>هذه فرصة تسويقية ممتازة للوصول إلى المسؤولين على مستوى C-Suite والمعلمين المؤثرين. قد تظل بعض مساحات العرض والرعاية المحدودة متاحة مع فترات التحدث لعروض البائعين/الجلسات الفرعية.</p>
                            </div>
                            <div class="col-lg-4">

                                <!-- event Dtails Conent Start -->
                                <div class="event-details__booking-info">
                                    <ul class="event-details__info-meta">
                                        <li class="meta-info meta-price">
                                                <span class="meta-label">
                                                <i class="fas fa-money-bill-wave"></i>
                                                @lang('trail') :
                                            </span>
                                            <span class="meta-value">@lang('free')</span>
                                        </li>
                                        <li class="meta-info">
                                                <span class="meta-label">
                                                <i class="fas fa-user"></i>
                                                @lang('individual') :
                                            </span>
                                            <span class="meta-value">$68</span>
                                        </li>
                                        <li class="meta-info">
                                                <span class="meta-label">
                                                <i class="fas fa-user-friends"></i>
                                                @lang('family') :
                                            </span>
                                            <span class="meta-value">$3</span>
                                        </li>
                                    </ul>
                                    <p class="event-details__notice">@lang('no_available_appointments_for_this_doctor')</p>
                                    <div class="event-details__share">
                                        <a href="https://twitter.com/" target="_blank" data-bs-tooltip="tooltip" data-bs-placement="top" title="Twitter">
                                            <div class="fab fa-twitter"></div>
                                        </a>
                                        <a href="https://www.facebook.com/" target="_blank" data-bs-tooltip="tooltip" data-bs-placement="top" title="Facebook">
                                            <div class="fab fa-facebook-f"></div>
                                        </a>
                                        <a href="https://www.linkedin.com/" target="_blank" data-bs-tooltip="tooltip" data-bs-placement="top" title="Linkedin">
                                            <div class="fab fa-linkedin"></div>
                                        </a>
                                        <a href="https://www.tumblr.com/" target="_blank" data-bs-tooltip="tooltip" data-bs-placement="top" title="Tumblr">
                                            <div class="fab fa-tumblr-square"></div>
                                        </a>
                                        <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" title="Email">
                                            <div class="fas fa-envelope"></div>
                                        </a>
                                    </div>
                                </div>
                                <!-- event Dtails Conent End -->

                            </div>
                        </div>
                    </div>
                    <!-- event Dtails Conent End -->

                    <!-- event Dtails Location Start -->
                    <div class="event-details__location">
                        <h3 class="event-details__heading">@lang('location')</h3>

                        <div class="row gy-6">
                            <div class="col-lg-8">
                                <div class="event-details__map">
                                    <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Mission%20District%2C%20San%20Francisco%2C%20CA%2C%20USA&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
                                </div>
                            </div>
                            <div class="col-lg-4">

                                <div class="event-details__location-info">
                                    <p class="location-info-heading">The Palace of Fine Arts</p>
                                    <div class="location-info-address">
                                        <p>3601 Lyon St San Francisco, CA 94123 United States</p>
                                        <a class="location-info-link" href="https://www.google.com/maps/search/?api=1&amp;query=3601%20Lyon%20St%20San%20Francisco,%20CA%2094123%20United%20States">+ Google Map</a>
                                    </div>

                                    <div class="location-info">
                                        <span class="meta-label">@lang('phone_number')</span>
                                        <span class="meta-value">(+1) 234 567 890</span>
                                    </div>
                                    <div class="location-info">
                                        <span class="meta-label">@lang('website')</span>
                                        <span class="meta-value">edumall.hasthemes.com</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- event Dtails Location End -->

                    <!-- event Dtails Speakers Start -->
                    <div class="event-details__speakers">
                        <h3 class="event-details__heading">@lang('related_doctors')</h3>

                        <div class="speaker-active">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <!-- Speakers Item Start -->
                                        <div class="speaker-item text-center">
                                            <div class="speaker-item__thumbnail">
                                                <img src="{{asset('frontend/assets/images/dummy_person.jpg')}}" alt="Speaker" width="170" height="170">
                                            </div>
                                            <div class="speaker-item__content">
                                                <h6 class="speaker-item__name">Emerson</h6>
                                                <p class="speaker-item__designation">/ Developer</p>
                                            </div>
                                        </div>
                                        <!-- Speakers Item End -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Speakers Item Start -->
                                        <div class="speaker-item text-center">
                                            <div class="speaker-item__thumbnail">
                                                <img src="{{asset('frontend/assets/images/speaker/speaker-02.jpg')}}" alt="Speaker" width="170" height="170">
                                            </div>
                                            <div class="speaker-item__content">
                                                <h6 class="speaker-item__name">Lilybelle</h6>
                                                <p class="speaker-item__designation">@lang('dummy_doctor_description')</p>
                                            </div>
                                        </div>
                                        <!-- Speakers Item End -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Speakers Item Start -->
                                        <div class="speaker-item text-center">
                                            <div class="speaker-item__thumbnail">
                                                <img src="{{asset('frontend/assets/images/dummy_person.jpg')}}" alt="Speaker" width="170" height="170">
                                            </div>
                                            <div class="speaker-item__content">
                                                <h6 class="speaker-item__name">Lucinda</h6>
                                                <p class="speaker-item__designation">@lang('dummy_doctor_description')</p>
                                            </div>
                                        </div>
                                        <!-- Speakers Item End -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Speakers Item Start -->
                                        <div class="speaker-item text-center">
                                            <div class="speaker-item__thumbnail">
                                                <img src="{{asset('frontend/assets/images/dummy_person.jpg')}}" alt="Speaker" width="170" height="170">
                                            </div>
                                            <div class="speaker-item__content">
                                                <h6 class="speaker-item__name">Marabel</h6>
                                                <p class="speaker-item__designation">@lang('dummy_doctor_description')</p>
                                            </div>
                                        </div>
                                        <!-- Speakers Item End -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Speakers Item Start -->
                                        <div class="speaker-item text-center">
                                            <div class="speaker-item__thumbnail">
                                                <img src="{{asset('frontend/assets/images/dummy_person.jpg')}}" alt="Speaker" width="170" height="170">
                                            </div>
                                            <div class="speaker-item__content">
                                                <h6 class="speaker-item__name">Orabelle</h6>
                                                <p class="speaker-item__designation">@lang('dummy_doctor_description')</p>
                                            </div>
                                        </div>
                                        <!-- Speakers Item End -->
                                    </div>
                                    <div class="swiper-slide">
                                        <!-- Speakers Item Start -->
                                        <div class="speaker-item text-center">
                                            <div class="speaker-item__thumbnail">
                                                <img src="{{asset('frontend/assets/images/dummy_person.jpg')}}" alt="Speaker" width="170" height="170">
                                            </div>
                                            <div class="speaker-item__content">
                                                <h6 class="speaker-item__name">Solomon</h6>
                                                <p class="speaker-item__designation">@lang('dummy_doctor_description')</p>
                                            </div>
                                        </div>
                                        <!-- Speakers Item End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- event Dtails Speakers End -->

                    <!-- event Dtails Comment Start -->
                    <div class="event-details__comment">
                        <h3 class="event-details__heading">@lang('did_you_face_problem')</h3>

                        <div class="row gy-6">
                            <div class="col-lg-8">
                                <!-- Comment Form Start -->
                                <div class="comment-form">
                                    <form action="#">
                                        <div class="row gy-4">
                                            <div class="col-md-6">
                                                <div class="comment-form__input">
                                                    <input type="text" class="form-control" placeholder="@lang('your_name')">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="comment-form__input">
                                                    <input type="email" class="form-control" placeholder="@lang('your_email')">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="comment-form__input">
                                                    <textarea class="form-control" placeholder="@lang('what_is_your_problem')"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="comment-form__input form-check">
                                                    <input type="checkbox" id="save">
                                                    <label for="save">@lang('i_accepted_the_terms_and_conditions')</label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="comment-form__input">
                                                    <button class="btn btn-primary btn-hover-secondary">@lang('submit')</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- Comment Form End -->
                            </div>
                            <div class="col-lg-4">
                                <!-- Comment Help Start -->
                                <div class="comment-help">
                                    <p class="comment-help__title">@lang('always_eager_to_help')</p>
                                    <p class="comment-help__description">
                                        @lang('if_the_problem_is_not_listed')
                                    </p>

                                    <p class="comment-help__link"><a href="mailto://contact@edumall.com">mssmahmoud4@gmail.com</a></p>
                                </div>
                                <!-- Comment Help End -->
                            </div>
                        </div>
                    </div>
                    <!-- event Dtails Comment End -->

                </div>
                <!-- event Dtails Summary End -->

            </div>
            <!-- event Dtails End -->

        </div>
    </div>
    <!-- event Details End -->

    <!-- Footer Start -->
    <x-newsletter />
    <!-- Footer End -->

</x-clientside.layout>

