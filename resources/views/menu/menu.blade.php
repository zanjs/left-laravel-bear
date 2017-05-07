@foreach($items as $menu_item)
    <li><a target="{{$menu_item->target}}" href="@if(empty($menu_item->url))# @else {{$menu_item->url }}@endif">{{ $menu_item->title }}</a>
    @if(count($menu_item->children) > 0)
        <ul class="rd-navbar-dropdown">
            @foreach($menu_item->children as $child)
            <li><a target="{{$child->target}}" href="{{$child->url}}">{{$child->title}}</a></li>
            @endforeach
        </ul>
    @endif
    </li>
@endforeach
