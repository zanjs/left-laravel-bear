@foreach($items as $menu_item)
    <!-- muen-->
    <li>
        <a target="{{$menu_item->target}}" href="@if(empty($menu_item->url)) @else {{$menu_item->url }}@endif" class="block-inline">
            <div class="">
                {{ $menu_item->title }}
            </div>
            <div>
                {{ $menu_item->title_2 }}
            </div>
        </a>
    @if(count($menu_item->children) > 0)
        <ul class="rd-navbar-dropdown">
            @foreach($menu_item->children as $child)
            <li>
                <a target="{{$child->target}}" href="{{$child->url}}">
                    <div class="">
                        {{ $child->title }}
                    </div>
                    <div>
                        {{ $child->title_2 }}
                    </div>
                </a>
            </li>
            @endforeach
        </ul>
    @endif
    </li>
    <!-- muen end-->
@endforeach
