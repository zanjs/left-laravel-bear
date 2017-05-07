@foreach($items as $index=>$menu_item)
<div class="cell-sm-4 cell-md-2 cell-md-push-{{$index+1}} offset-top-44 offset-md-top-0">
    <div>
        <p class="text-uppercase text-bold font-accent text-spacing-50 text-mine-shaft">
            {{ $menu_item->title }}
        </p>
    </div>
    <div class="reveal-inline-block offset-top-15 offset-md-top-30">
        <ul class="list-marked text-extra-small text-bold p text-left">
            @foreach($menu_item->children as $key=>$child)
                @if ($key == 0)
                <li>
                    <a target="{{$child->target}}" href="{{$child->url}}" class="text-primary">
                        {{$child->title}}
                    </a>
                </li>
                @else
                    <li class="offset-top-10">
                        <a href="{{$child->url}}" class="text-primary">
                            {{$child->title}}
                        </a>
                    </li>
                @endif
                @endforeach
            {{--<li class="offset-top-10"><a href="contacts.html" class="text-primary">Locations</a></li>--}}
            {{--<li class="offset-top-10"><a href="team.html" class="text-primary">Our team</a></li>--}}
        </ul>
    </div>
</div>
@endforeach