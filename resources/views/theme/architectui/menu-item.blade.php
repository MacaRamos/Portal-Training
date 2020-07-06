@if ($item["submenu"] == [])
<li>
    <a href="{{url($item['url'])}}">
        <i class="metismenu-icon {{$item["icono"]}}"></i>
        <p id="{{$item["id"]}}">
            {{$item["nombre"]}}
        </p>
    </a>
</li>
@else
@if ($item['menu_anterior'] != 0)
<li>
    <a href="#">
        <i class="metismenu-icon {{$item["icono"]}}"></i>
        <p id="{{$item["id"]}}">
            {{$item["nombre"]}}
        </p>
        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
    </a>
    <ul class="mm-collapse">
        @foreach ($item["submenu"] as $submenu)
        @include("theme.$theme.menu-item", ["item"=> $submenu])
        @endforeach
    </ul>
</li>
@else
<li class="app-sidebar__heading">
    <p id="{{$item["id"]}}">
        {{$item["nombre"]}}
    </p>
</li>
@foreach ($item["submenu"] as $submenu)
@include("theme.$theme.menu-item", ["item"=> $submenu])
@endforeach
@endif

@endif