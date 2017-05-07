
<section class="context-dark">
    <!-- RD Parallax-->
    <div data-on="false" data-md-on="true" class="rd-parallax">
        <?php
            $image = 'anl/images/backgrounds/background-05-1920x950.jpg?v2';
            $newImage = $pageTenFour->image;
            if($newImage){
                $image = 'storage/'.$newImage;
            }
        ?>
        <div data-speed="0.25" data-type="media" data-url="{{asset($image)}}" class="rd-parallax-layer">
        </div>
        <div data-speed="0" data-type="html" data-md-fade="false" class="rd-parallax-layer">
            <div class="shell section-75 section-md-top-103 section-md-bottom-110">
                <div class="range range-xs-center">
                    <div class="cell-sm-10">

                        <div class="offset-top-15 offset-md-top-30">
                            <h1 class="text-spacing-0">
                                {{$pageTenFour->title}}
                            </h1>
                            <div class="offset-top-20 offset-md-top-44">
                                <p class="h5 text-spacing-inverse-25 text-transform-none">
                                    {{$pageTenFour->excerpt}}
                                </p>
                            </div>
                            <div class="offset-top-30 offset-md-top-60">
                                <a href="{{URL::route('page',$pageTenFour->id)}}" style="min-width:263px;" class="btn btn-calypso">
                                    more
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

