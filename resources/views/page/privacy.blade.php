@extends('layouts.app')

@section('title', $page->title)

@section('content')

    <main class="page-content">
        <!-- Privacy Policy-->
        <section class="section-75 section-md-top-115 section-md-bottom-103">
            <div class="shell">
                <h3>{{$page->title}}</h3>
                <div class="range range-xs-center offset-top-40">
                    <div class="cell-lg-10">
                        <!-- Accordion-->
                        <div id="accordion" role="tablist" aria-multiselectable="true" class="bootstrap-accordion-alternative panel-group">
                            <div class="panel max-img">
                                <div class="offset-top-20">

                                    {!! $page->excerpt !!}

                                </div>
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
    </main>

@endsection