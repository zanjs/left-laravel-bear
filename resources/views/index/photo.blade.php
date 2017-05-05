<section>
    <div class="range range-condensed">
        @foreach($photos as $photo)
        <div class="cell-sm-6">
            <!-- Post Inspiration-->
            <div class="post-inspiration post-inspiration-img-auto-height">
                <div class="post-inspiration-img-wrap">
                    <img src="{{asset('storage/'.$photo->image)}}" width="962" height="491" alt="">
                </div>
                <div class="post-inspiration-body">
                    <div style="margin-bottom: 20px;" class="veil reveal-sm-inline-block text-bottom">
                        <img src="{{asset('anl')}}/images/divider-01-67x4.png" width="67" height="4" alt="" class="img-responsive center-block">
                    </div>
                    <div class="veil reveal-sm-inline-block">
                        <span class="icon icon-lg thin-ico thin-icon-anchor text-white">
                        </span>
                    </div>
                    <div style="margin-bottom: 20px;" class="veil reveal-sm-inline-block text-bottom">
                        <img src="{{asset('anl')}}/images/divider-01-67x4.png" width="67" height="4" alt="" class="img-responsive center-block">
                    </div>
                    <div class="offset-top-20">
                        <h5>{{$photo->title}}</h5>
                    </div>
                    <div class="offset-top-30">
                        <p>
                            {!! $photo->desc !!}
                        </p>
                    </div>

                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>