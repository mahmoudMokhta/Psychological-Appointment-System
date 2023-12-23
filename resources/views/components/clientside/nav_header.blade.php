<!-- Header start -->
<div class="header-section header-sticky">

    <!-- Header Top Start -->
    <div class="header-top-03 d-none d-sm-block">
        <div class="container">

            <!-- Header Top Bar Wrapper Start -->
            <div class="header-top-bar-wrap d-sm-flex justify-content-between">

                <div class="header-top-bar-wrap__info">
                    <ul class="header-top-bar-wrap__info-list header-top-bar-wrap__info-list-02">
                        <li><a href="tel:+8819906886"><i class="fas fa-phone"></i> <span class="info-text">(+88) 1990 6886</span></a></li>
                        <li><a href="mailto:agency@example.com"><i class="far fa-envelope"></i> <span class="info-text">agency@example.com</span></a></li>
                    </ul>
                </div>

                <div class="header-top-bar-wrap__info d-sm-flex">

                    <div class="header-top-bar-wrap__language">
                        <a class="language-toggle" href="#">
                            <span>@lang(getLocale())</span>
                        </a>

                        <ul class="language-dropdown">
                            @foreach(listLanguages() as $key => $lang )
                                @continue(getLocale() == $key)
                            <li><a href="{{route('language',$key)}}">@lang($lang)</a></li>
                            @endforeach
                        </ul>



                    </div>

                    <ul class="header-top-bar-wrap__info-list header-top-bar-wrap__info-list-03 d-none d-lg-flex">
                        @auth

                            <li>
                                <form action="{{route('logout')}}" method="post">
                                    @csrf
                                    <button type="submit" class="link">@lang('logout')</button>
                                </form>

                            </li>
                        @endauth
                        @guest
                        <li><button data-bs-toggle="modal" data-bs-target="#loginModal">@lang('log_in')</button></li>
                        <li><button data-bs-toggle="modal" data-bs-target="#registerModal">@lang('register')</button></li>
                        @endguest
                    </ul>
                </div>

            </div>
            <!-- Header Top Bar Wrapper End -->

        </div>
    </div>
    <!-- Header Top End -->

    <!-- Header Main Start -->
    <div class="header-main-02">
        <div class="container">
            <!-- Header Main Wrapper Start -->
            <div class="header-main-wrapper">

                <!-- Header Logo Start -->
                <div class="header-logo">
                    <a class="header-logo__logo" href="{{route('home')}}"><img src="{{asset('frontend/assets/images/logo.png')}}" width="296" height="64" alt="Logo"></a>
                </div>
                <!-- Header Logo End -->

                <!-- Header Inner Start -->
                <div class="header-inner justify-content-between">

                    <!-- Header Navigation Start -->
                    <div class="header-navigation d-none d-xl-block">
                        <nav class="menu-primary">
                            <ul class="menu-primary__container">

                                <li><a class="{{setActive('home')}}" href="{{route('home')}}"><span>@lang('home')</span></a>

                                    <ul class="mega-menu">
                                        <li>
                                            <!-- Mega Menu Content Start -->
                                            <div class="mega-menu-content">
                                                <div class="row">
                                                    <div class="col-xl-3">
                                                        <div class="menu-content-list">
                                                            <a href="{{route('home')}}"
                                                               class="menu-content-list__link">@lang('home')
                                                                <span class="badge hot">@lang('hot')</span></a>
                                                            <a href="#" class="menu-content-list__link">@lang('menu_example')</a>
                                                            <a href="#" class="menu-content-list__link">@lang('menu_example')</a>
                                                            <a href="{{route('home')}}" class="menu-content-list__link">@lang('menu_example') <span class="badge hot">@lang('hot')</span></a>
                                                            <a href="{{route('home')}}" class="menu-content-list__link">@lang('menu_example') <span class="badge hot">@lang('hot')</span></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3">
                                                        <div class="menu-content-list">
                                                            <a href="#" class="menu-content-list__link">@lang('menu_example') <span class="badge new">@lang('new')</span></a>
                                                            <a href="#" class="menu-content-list__link">@lang('menu_example') <span class="badge new">@lang('new')</span></a>
                                                            <a href="#" class="menu-content-list__link">@lang('menu_example')</a>
                                                            <a href="#" class="menu-content-list__link">@lang('menu_example')</a>

                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="menu-content-banner" style="background-image: url(assets/images/home-megamenu-bg.jpg);">
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
                                    <a class="{{setActive('doctors')}}" href="{{route('doctors')}}">
                                        <span>@lang('doctors')</span>
                                    </a>
{{--                                    <ul class="sub-menu">--}}
{{--                                        <li><a href="course-grid-01.html"><span>Grid Basic Layout</span></a></li>--}}
{{--                                        <li><a href="course-grid-02.html"><span>Grid Modern Layout</span></a></li>--}}
{{--                                        <li><a href="course-grid-left-sidebar.html"><span>Grid Left Sidebar</span></a></li>--}}
{{--                                        <li><a href="course-grid-right-sidebar.html"><span>Grid Right Sidebar</span></a></li>--}}
{{--                                        <li><a href="course-list.html"><span>List Basic Layout</span></a></li>--}}
{{--                                        <li><a href="course-list-left-sidebar.html"><span>List Left Sidebar</span></a></li>--}}
{{--                                        <li><a href="course-list-right-sidebar.html"><span>List Right Sidebar</span></a></li>--}}
{{--                                        <li><a href="course-category.html"><span>Category Page</span></a></li>--}}
{{--                                        <li>--}}
{{--                                            <a href="#"><span>Single Layout</span></a>--}}
{{--                                            <ul class="sub-menu">--}}
{{--                                                <li><a href="course-single-layout-01.html"><span>Layout 01</span></a></li>--}}
{{--                                                <li><a href="course-single-layout-02.html"><span>Layout 02</span></a></li>--}}
{{--                                                <li><a href="course-single-layout-03.html"><span>Layout 03</span></a></li>--}}
{{--                                                <li><a href="course-single-layout-04.html"><span>Layout 04</span></a></li>--}}
{{--                                            </ul>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
                                </li>
                                <li>
                                    <a class="{{setActive('schedules')}}" href="{{route('schedules')}}"><span>@lang('appointments')</span></a>
                                </li>
                                <li>
                                    <a class="{{setActive('about-us')}}" href="{{route('about-us')}}"><span>@lang('about_us')</span></a>

                                </li>
                                <li>
                                    <a class="{{setActive('contact-us')}}" href="{{route('contact-us')}}"><span>@lang('contact_us')</span></a>

                                </li>

















                            </ul>
                        </nav>
                    </div>
                    <!-- Header Navigation End -->

                    <!-- Header Search Start -->
                    <div class="header-serach header-serach-02 order-md-3">
                        <form action="#">
                            <input type="text" class="header-serach__input header-serach-02__input" placeholder="@lang('easily_search')...">
                            <button class="header-serach__btn header-serach-02__btn"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <!-- Header Search End -->

                    <!-- Header Mini Cart Start -->
                    @roles(['admin','doctor'])

                    <div class="header-action header-action-02 order-md-2">

                        <a href="#" class="header-action__btn">
                            <i class="fas fa-solar-panel"></i>
                            {{--                            <span class="header-action__number">3</span>--}}
                        </a>


{{--                        <!-- Header Mini Cart Start -->--}}
{{--                        <div class="header-mini-cart">--}}

{{--                            <!-- Header Mini Cart Product List Start -->--}}
{{--                            <ul class="header-mini-cart__product-list ">--}}
{{--                                <li class="header-mini-cart__item">--}}
{{--                                    <a href="#" class="header-mini-cart__close"></a>--}}
{{--                                    <div class="header-mini-cart__thumbnail">--}}
{{--                                        <a href="shop-single-list-left-sidebar.html"><img src="assets/images/product/product-1.png" alt="Product" width="80" height="93"></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="header-mini-cart__caption">--}}
{{--                                        <h3 class="header-mini-cart__name"><a href="shop-single-list-left-sidebar.html">Awesome for Websites</a></h3>--}}
{{--                                        <span class="header-mini-cart__quantity">1 × <strong class="amount">$49</strong><span class="separator">.00</span></span>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="header-mini-cart__item">--}}
{{--                                    <a href="#" class="header-mini-cart__close"></a>--}}
{{--                                    <div class="header-mini-cart__thumbnail">--}}
{{--                                        <a href="shop-single-list-left-sidebar.html"><img src="assets/images/product/product-2.png" alt="Product" width="80" height="93"></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="header-mini-cart__caption">--}}
{{--                                        <h3 class="header-mini-cart__name"> <a href="shop-single-list-left-sidebar.html">Awesome for Websites</a></h3>--}}
{{--                                        <span class="header-mini-cart__quantity">1 × <strong class="amount">$49</strong><span class="separator">.00</span></span>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="header-mini-cart__item">--}}
{{--                                    <a href="#" class="header-mini-cart__close"></a>--}}
{{--                                    <div class="header-mini-cart__thumbnail">--}}
{{--                                        <a href="shop-single-list-left-sidebar.html"><img src="assets/images/product/product-3.png" alt="Product" width="80" height="93"></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="header-mini-cart__caption">--}}
{{--                                        <h3 class="header-mini-cart__name"> <a href="shop-single-list-left-sidebar.html">Awesome for Websites</a></h3>--}}
{{--                                        <span class="header-mini-cart__quantity">1 × <strong class="amount">$49</strong><span class="separator">.00</span></span>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                            <!-- Header Mini Cart Product List End -->--}}

{{--                            <div class="header-mini-cart__footer">--}}
{{--                                <div class="header-mini-cart__total">--}}
{{--                                    <p class="header-mini-cart__label">Total:</p>--}}
{{--                                    <p class="header-mini-cart__value">$445<span class="separator">.99</span></p>--}}
{{--                                </div>--}}
{{--                                <div class="header-mini-cart__btn">--}}
{{--                                    <a href="cart.html" class="btn btn-primary btn-hover-secondary">View cart</a>--}}
{{--                                    <a href="checkout.html" class="btn btn-primary btn-hover-secondary">Checkout</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                        <!-- Header Mini Cart End -->--}}

                    </div>
                    @endrole
                    @role('patient')

                    <div class="header-action header-action-02 order-md-2">

                        <a href="#" class="header-action__btn">
                            <i class="fas fa-solar-panel"></i>
                            {{--                            <span class="header-action__number">3</span>--}}
                        </a>



                        {{--                        <!-- Header Mini Cart Start -->--}}
                        {{--                        <div class="header-mini-cart">--}}

                        {{--                            <!-- Header Mini Cart Product List Start -->--}}
                        {{--                            <ul class="header-mini-cart__product-list ">--}}
                        {{--                                <li class="header-mini-cart__item">--}}
                        {{--                                    <a href="#" class="header-mini-cart__close"></a>--}}
                        {{--                                    <div class="header-mini-cart__thumbnail">--}}
                        {{--                                        <a href="shop-single-list-left-sidebar.html"><img src="assets/images/product/product-1.png" alt="Product" width="80" height="93"></a>--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="header-mini-cart__caption">--}}
                        {{--                                        <h3 class="header-mini-cart__name"><a href="shop-single-list-left-sidebar.html">Awesome for Websites</a></h3>--}}
                        {{--                                        <span class="header-mini-cart__quantity">1 × <strong class="amount">$49</strong><span class="separator">.00</span></span>--}}
                        {{--                                    </div>--}}
                        {{--                                </li>--}}
                        {{--                                <li class="header-mini-cart__item">--}}
                        {{--                                    <a href="#" class="header-mini-cart__close"></a>--}}
                        {{--                                    <div class="header-mini-cart__thumbnail">--}}
                        {{--                                        <a href="shop-single-list-left-sidebar.html"><img src="assets/images/product/product-2.png" alt="Product" width="80" height="93"></a>--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="header-mini-cart__caption">--}}
                        {{--                                        <h3 class="header-mini-cart__name"> <a href="shop-single-list-left-sidebar.html">Awesome for Websites</a></h3>--}}
                        {{--                                        <span class="header-mini-cart__quantity">1 × <strong class="amount">$49</strong><span class="separator">.00</span></span>--}}
                        {{--                                    </div>--}}
                        {{--                                </li>--}}
                        {{--                                <li class="header-mini-cart__item">--}}
                        {{--                                    <a href="#" class="header-mini-cart__close"></a>--}}
                        {{--                                    <div class="header-mini-cart__thumbnail">--}}
                        {{--                                        <a href="shop-single-list-left-sidebar.html"><img src="assets/images/product/product-3.png" alt="Product" width="80" height="93"></a>--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="header-mini-cart__caption">--}}
                        {{--                                        <h3 class="header-mini-cart__name"> <a href="shop-single-list-left-sidebar.html">Awesome for Websites</a></h3>--}}
                        {{--                                        <span class="header-mini-cart__quantity">1 × <strong class="amount">$49</strong><span class="separator">.00</span></span>--}}
                        {{--                                    </div>--}}
                        {{--                                </li>--}}
                        {{--                            </ul>--}}
                        {{--                            <!-- Header Mini Cart Product List End -->--}}

                        {{--                            <div class="header-mini-cart__footer">--}}
                        {{--                                <div class="header-mini-cart__total">--}}
                        {{--                                    <p class="header-mini-cart__label">Total:</p>--}}
                        {{--                                    <p class="header-mini-cart__value">$445<span class="separator">.99</span></p>--}}
                        {{--                                </div>--}}
                        {{--                                <div class="header-mini-cart__btn">--}}
                        {{--                                    <a href="cart.html" class="btn btn-primary btn-hover-secondary">View cart</a>--}}
                        {{--                                    <a href="checkout.html" class="btn btn-primary btn-hover-secondary">Checkout</a>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}

                        {{--                        </div>--}}
                        {{--                        <!-- Header Mini Cart End -->--}}

                    </div>

                    @endrole
                    <!-- Header Mini Cart End -->

                    <!-- Header Mobile Toggle Start -->
                    <div class="header-toggle header-toggle-02 order-md-4">
                        <button class="header-toggle__btn d-xl-none" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMobileMenu">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </button>
                        <button class="header-toggle__btn search-open d-flex d-md-none">
                            <span class="dots"></span>
                            <span class="dots"></span>
                            <span class="dots"></span>
                        </button>
                    </div>
                    <!-- Header Mobile Toggle End -->

                </div>
                <!-- Header Inner End -->

            </div>
            <!-- Header Main Wrapper End -->
        </div>
    </div>
    <!-- Header Main End -->

</div>
<!-- Header End -->
