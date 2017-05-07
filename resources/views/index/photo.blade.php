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