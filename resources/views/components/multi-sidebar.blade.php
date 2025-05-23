@props(['route', 'label', 'icon', 'submenus'])

<li class="nav-item @if (in_array(request()->route()->getName(), eval("return $route;"))) menu-open @endif">
    <a href="#" class="nav-link @if (in_array(request()->route()->getName(), eval("return $route;"))) active @endif">
        <i class="nav-icon {{ $icon }}"></i>
        <p>
            {{ $label }}
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    @if (count($submenus) > 0)
        <ul class="nav nav-treeview">
            @foreach ($submenus as $submenu)
                <li class="nav-item">
                    <a href="{{ is_array($submenu['route']) ? generateMenuLink($submenu['route']) : route($submenu['route']) }}"
                        class="nav-link @if (is_array($submenu['route']) && in_array(request()->route()->getName(), $submenu['route'])) active @elseif(Route::is($submenu['route'])) active @endif">
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{ $submenu['label'] }}</p>
                    </a>
                </li>
            @endforeach
        </ul>
    @endif
</li>
