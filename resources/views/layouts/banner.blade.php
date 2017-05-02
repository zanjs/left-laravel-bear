<div data-height="" data-min-height="300px" data-simulate-touch="false" data-slide-effect="fade" class="swiper-container swiper-slider">
    <div class="swiper-wrapper">
        @foreach($banners as $banner)
            <div data-slide-bg="{{asset('storage/'.$banner->image)}}" class="swiper-slide"></div>
        @endforeach
    </div>
    <div class="swiper-caption-absolute">
        <div class="shell">
            <div class="range range-xs-center">
                <div class="cell-sm-10 cell-lg-8">
                    <div>
                        <div class="text-extra-big font-accent text-bold text-spacing-inverse-50 text-capitalize text-white">
                            Explore. Discover. Live
                        </div>
                    </div>
                    <div class="offset-top-15 offset-md-top-0">
                        <h5 class="text-spacing-75 text-white">Yachts for sale & charters</h5>
                    </div>
                    <div class="btns-both-lines group group-sm offset-top-25">
                        {{--<a href="" style="min-width:205px;" class="btn btn-primary">sailing yachts</a>--}}
                        <a href="" style="min-width:205px;" class="btn btn-white">yacht charters</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="height:33px;" class="swiper-bottom-panel">
        <div class="swiper-bottom-panel-svg-wrap">
            <svg width="104" height="33">
                <path style="fill:#ffffff;fill-opacity:1" d="m 0.01291655,16.605668 0,-16.62382923 5.25000005,0.439007 C 12.962198,1.0646618 18.007648,4.7929098 22.364223,13.057557 c 6.80539,12.91018 16.468604,19.152403 29.648693,19.152403 13.180088,0 22.843308,-6.242223 29.648698,-19.152403 4.35657,-8.2646472 9.40202,-11.9928952 17.1013,-12.63671123 l 5.250006,-0.439007 0,16.62382923 0,16.62383 -52.000004,0 -51.99999945,0 0,-16.62383 z"></path>
            </svg>
            <span data-custom-scroll-to="sec" class="icon material-icons-ico material-icons-expand_more text-white"></span>
        </div>
    </div>
</div>