@props(['banner_title',
'breadcrumb_start' => __('home'), 'breadcrumb_end'
,'breadcrumb_start_link' => route('home'),
'page_type' => 'banner',
'about' => false,
])
<!-- Page Banner Section Start -->
<div class="page-banner bg-color-05">
    <div class="page-banner__wrapper">
        <div class="container">

            <!-- Page Breadcrumb Start -->
            <div class="page-breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">{{__($breadcrumb_start)}}</a></li>
                    <li class="breadcrumb-item active">{{__($breadcrumb_end)}}</li>
                </ul>
            </div>
            <!-- Page Breadcrumb End -->

            <!-- Page Banner Caption Start -->
            <div
                @class([
        'd-none' => $page_type == 'no_banner',
        "page-banner__caption",
         "text-center"

            ])

            >

                <h2 class="page-banner__main-title">{{__($banner_title)}}</h2>
            </div>
            <!-- Page Banner Caption End -->
            @if($about)
                <!-- About Banner Caption Start -->
                <div class="about-banner-caption">
                    <h2 class="about-banner-caption__main-title"><strong>Improving Lives</strong> Through Learning </h2>
                </div>
                <!-- About Banner Caption End -->
            @endif

        </div>
    </div>
</div>
<!-- Page Banner Section End -->
