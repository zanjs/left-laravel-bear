@extends('layouts.app')

@section('title', $category->name)

@section('content')

    <main class="page-content section-75 section-md-top-103 section-md-bottom-103">
        <!-- Events-->
        <section>
            <div class="shell">
                <div class="offset-top-55">
                    <h5 class="text-spacing-0">{{$category->name}}</h5>
                    <div class="range range-xs-center offset-top-40">
                        @foreach($news as $new)
                        <div class="cell-sm-6 cell-md-4 max-img">
                            <!-- Post Event-->
                            <div class="post-inspiration post-inspiration-visible post-inspiration-event">
                                <div class="post-inspiration-img-wrap">
                                    <img src="@if(empty($new->image)) /anl/images/blog/post-16-370x282.jpg @else {{ asset('storage/'.$new->image)}} @endif"
                                         width="370" height="282" alt="" />
                                </div>
                                <div class="post-inspiration-body">
                                    <div>
                                        <p class="font-accent text-bold text-spacing-inverse-25">
                                            {{$new->created_at->format('m/d Y')}}
                                        </p>
                                    </div>
                                    <div class="offset-top-4">
                                        <p style="font-size: 14px">{{$new->title}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="offset-top-20 offset-md-top-40">
                                <p class="text-spacing-0" style="font-size: 13px;">
                                    {{$new->description}}
                                </p>
                            </div>
                            <div class="btn-both-lines btn-both-lines-gray-lighter offset-top-15 offset-md-top-35">
                                <a href="{{URL::route('new', $new->id)}}" class="btn-link text-spacing-inverce-25 text-turquoise">
                                    read more
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection