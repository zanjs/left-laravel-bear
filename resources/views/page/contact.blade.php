@extends('layouts.app')

@section('title', $page->title)

@section('content')

    <main class="page-content">
        <!-- Privacy Policy-->
        <section class="section-75 section-md-top-90">
            <div class="shell">
                <h3>{{$page->title}}</h3>
                <div class="range range-xs-center offset-top-40">
                    <div class="cell-lg-10">
                        <!-- Accordion-->
                        <div id="accordion" role="tablist" aria-multiselectable="true" class="bootstrap-accordion-alternative panel-group">
                            <div class="panel max-img">

                                <div id="collapseOne" role="tabpanel" aria-labelledby="headingOne" class="panel-collapse collapse in">
                                    <div class="text-extra-small text-nobel">
                                        {!! $page->body !!}
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="">
            <div class="shell">
                <!--百度地图容器-->
                <div style="width:100%;height:550px;border:#ccc solid 1px;font-size:12px" id="map"></div>
            </div>
        </section>
    </main>
    @include('layouts.map')
@endsection