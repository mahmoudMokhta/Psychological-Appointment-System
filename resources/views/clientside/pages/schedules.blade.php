<x-clientside.layout active="active" title="About Us">

    <x-page-banner
        breadcrumb_start="home"
        breadcrumb_end="appointments"
        banner_title="doctors"
        page_type="no_banner"
    />

    <!-- Event Start -->
    <div class="event-section section-padding-01">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-xl-9">

                    <!-- Archive Filter Bars Start -->
                    <div class="archive-filter-bars">

                        <div class="archive-filter-bar">
                            <p>@lang('we_found_num_doctors_available_for_you',['num' => 13])</p>
                        </div>

                        <div class="archive-filter-bar">

                            <div class="filter-bar-wrapper">
                                <div class="filter-select">
                                    <form action="#">
                                        <select class="edumall-nice-select" data-select="{&quot;fieldLabel&quot;:&quot;@lang('specialties'):&quot;}">
                                            <option value="" selected='selected'> @lang('all') </option>
                                            <option value="happening"> @lang('all_specialties')</option>
                                            <option value="upcoming"> @lang('all_specialties')</option>
                                            <option value="expired"> @lang('all_specialties')</option>
                                        </select>
                                        <input type="hidden" name="paged" value="1">
                                    </form>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- Archive Filter Bars End -->

                    <!-- Events list Wrapper Start -->
                    <div class="events-list-wrapper">

                        <!-- Event list Item Start -->
                        <div class="event-list-item" data-aos="fade-up" data-aos-duration="1000">
                            <div class="event-list-item__image">
                                <a href="event-details-layout-01.html"><img src="{{asset('frontend/assets/images/dummy_person.jpg')}}" alt="Event" width="270" height="171"></a>
                            </div>
                            <div class="event-list-item__content">
                                <div class="event-list-item__content-wrapper">
                                    <h3 class="event-list-item__title"><a href="event-details-layout-01.html">
                                            @lang('David_Charl_samhon')
                                        </a></h3>
                                    <div class="event-list-item__price">$99<span class="separator">.00</span></div>
                                    <div class="event-list-item__excerpt">
                                        <p>
                                            @lang('dummy_about_platform')
                                        </p>
                                    </div>
                                </div>
                                <div class="event-list-item__content-meta">
                                    <ul class="event-list-item__meta-items">
                                        <li class="event-list-item__meta-item">
                                            <span class="meta-label"><i class="meta-label-icon fas  fa-clock"></i></span>
                                            <span class="meta-value">9:30 am - 11:30 am</span>
                                        </li>
                                        <li class="event-list-item__meta-item">
                                            <span class="meta-label"><i class="meta-label-icon fas  fa-calendar"></i></span>
                                            <span class="meta-value">أغسطس 18, 2020</span>
                                        </li>
                                        <li class="event-list-item__meta-item">
                                            <span class="meta-label"><i class="meta-label-icon fas  fa-map-marker-alt"></i></span>
                                            <span class="meta-value">جمهورية مصر العربية , القاهرة</span>
                                        </li>
                                    </ul>
                                    <div class="event-list-item__btn">
                                        <a class="btn btn-primary btn-hover-secondary" href="#">@lang('book_now')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Event list Item End -->



                    </div>
                    <!-- Events list Wrapper End -->

                    <!-- Page Pagination Start -->
                    <div class="page-pagination">
                        <ul class="pagination justify-content-center">
                            <li><a class="active" href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">...</a></li>
                            <li><a href="#">7</a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                        </ul>
                    </div>
                    <!-- Page Pagination End -->

                </div>
                <div class="col-xl-3">
                    <!-- Sidebar Widget Start -->
                    <div class="sidebar-widget-weap-02 pe-xl-6">

                        <!-- Sidebar Widget Start -->
                        <div class="sidebar-widget-02">
                            <h4 class="sidebar-widget-02__title">@lang('find_your_doctor')</h4>

                            <!-- Sidebar Widget Search Start -->
                            <div class="sidebar-widget-02__find-events">
                                <form method="get" action="#">

                                    <div class="sidebar-widget-02__form">
                                        <input type="text" class="form-control filter_start_date" autocomplete="off" readonly="" placeholder="@lang('closest_appointment')">
                                        <span class="form-icon">
                                            <i class="fas fa-calendar"></i>
                                        </span>
                                    </div>

                                    <div class="sidebar-widget-02__form">
                                        <select class="form-control">
                                            <option value="0" selected="selected">@lang('all_specialties')</option>
                                            <option class="level-0" value="141">@lang('specialization')</option>
                                            <option class="level-0" value="142">@lang('specialization')</option>
                                            <option class="level-0" value="143">@lang('specialization')</option>
                                            <option class="level-0" value="144">@lang('specialization')</option>
                                        </select>
                                        <span class="form-icon">
                                            <i class="fas fa-chevron-down"></i>
                                        </span>
                                    </div>

                                    <div class="sidebar-widget-02__form">
                                        <input type="text" class="form-control" placeholder="@lang('location')">
                                        <span class="form-icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </span>
                                    </div>

                                    <div class="sidebar-widget-02__form">
                                        <input type="text" class="form-control" placeholder="@lang('keywords')">
                                        <span class="form-icon">
                                            <i class="fas fa-search"></i>
                                        </span>
                                    </div>

                                    <div class="sidebar-widget-02__form">
                                        <button class="btn btn-primary btn-hover-secondary">@lang('find_your_doctor')</button>
                                    </div>

                                </form>
                            </div>
                            <!-- Sidebar Widget Search End -->
                        </div>
                        <!-- Sidebar Widget End -->

                        <!-- Sidebar Widget End -->
                        <div class="sidebar-widget-02">
                            <h4 class="sidebar-widget-02__title">@lang('popular_doctors')</h4>

                            <ul class="sidebar-widget-02__event">
                                <li>
                                    <div class="sidebar-widget-02__event-item">
                                        <div class="sidebar-widget-02__event-thumbnail">
                                            <a href="#">
                                                <img src="{{asset('frontend/assets/images/dummy_person.jpg')}}" alt="Event" width="95" height="80">
                                            </a>
                                        </div>
                                        <div class="sidebar-widget-02__event-content">
                                            <h4 class="sidebar-widget-02__event-title"><a href="#">Creating Futures Through Technology Conference – MaxCoach Tech Center</a></h4>
                                            <p class="sidebar-widget-02__event-date">ديسمر 4, 2020 - يناير 30, 2021</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar-widget-02__event-item">
                                        <div class="sidebar-widget-02__event-thumbnail">
                                            <a href="#">
                                                <img src="{{asset('frontend/assets/images/dummy_person.jpg')}}" alt="Event" width="95" height="80">
                                            </a>
                                        </div>
                                        <div class="sidebar-widget-02__event-content">
                                            <h4 class="sidebar-widget-02__event-title"><a href="#">Creating Futures Through Technology Conference – MaxCoach Tech Center</a></h4>
                                            <p class="sidebar-widget-02__event-date">ديسمر 4, 2020 - يناير 30, 2021</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar-widget-02__event-item">
                                        <div class="sidebar-widget-02__event-thumbnail">
                                            <a href="#">
                                                <img src="{{asset('frontend/assets/images/dummy_person.jpg')}}" alt="Event" width="95" height="80">
                                            </a>
                                        </div>
                                        <div class="sidebar-widget-02__event-content">
                                            <h4 class="sidebar-widget-02__event-title"><a href="#">Creating Futures Through Technology Conference – MaxCoach Tech Center</a></h4>
                                            <p class="sidebar-widget-02__event-date">ديسمر 4, 2020 - يناير 30, 2021</p>
                                        </div>
                                    </div>
                                </li>


                            </ul>
                        </div>
                        <!-- Sidebar Widget End -->

                    </div>
                    <!-- Sidebar Widget End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Event End -->


    <!-- Footer Start -->
    <x-newsletter />
    <!-- Footer End -->

</x-clientside.layout>
