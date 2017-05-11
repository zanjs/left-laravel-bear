<section class="section-75 section-md-top-95 section-md-bottom-110">
    <div class="shell">
        <h2 class="text-spacing-inverse-25">{{$pageFour->title}}</h2>
        <div class="range range-xs-center offset-top-20">
            <div class="cell-sm-10 cell-lg-8">
                <p class="text-spacint-0">
                    {{$pageFour->excerpt}}
                </p>
            </div>
        </div>
        <div class="max-img range range-xs-center offset-top-35 offset-lg-top-75">
            {!! $pageFour->body !!}
        </div>
        {{--<div class="btn-both-lines btn-both-lines-gray-lighter offset-top-40 offset-lg-top-70">--}}
            {{--<a href="" style="min-width: 240px;" class="btn btn-calypso">--}}
                {{--charter management--}}
            {{--</a>--}}
        {{--</div>--}}
    </div>
</section>