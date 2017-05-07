<footer class="page-footer bg-white section-75 section-md-top-103 section-md-bottom-55 text-md-left">
    <div class="shell">
        <div class="range range-xs-center range-lg-justify">
            <div class="cell-sm-4 cell-md-3">
                <a href="/">
                    <img width="164" height="29" src="{{asset('storage/'.Voyager::setting('logo-footer'))}}" alt="">
                </a>
            </div>
            <div class="cell-sm-5 cell-md-3 cell-md-push-4 offset-top-20 offset-sm-top-0">
                <ul class="list-inline list-inline-0 list-calypso">
                    @foreach($socials as $social)
                    <li class="text-center">
                        <a href="{{$social->url}}"
                           target="{{$social->target}}"
                           class="icon icon-xxs fa {{$social->icon_class}} text-turquoise"
                           title="{{$social->title}}"></a>
                    </li>
                    @endforeach
                </ul>
            </div>
            {{--footer menu--}}
            {!! Menu::display('footer','menu.footer') !!}
            {{--footer menu end--}}
        </div>
        <div class="offset-top-60">
            <div class="hr bg-gray-lighter"></div>
        </div>
        <div class="offset-top-50">
            <p class="text-extra-small text-gray-light">{{Voyager::setting('title')}} &#169;
                <span id="copyright-year"></span>
            </p>
        </div>
    </div>
</footer>