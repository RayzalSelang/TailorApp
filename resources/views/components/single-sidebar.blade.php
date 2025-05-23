@props(['routes' => [], 'icon', 'label', 'badge' => null, 'badgeText'])

<li class="nav-item">
    <a href="{{ is_array($routes) ? route($routes[0]) : route($routes) }}"
        class="nav-link {{ in_array(request()->route()->getName(), (array) $routes) ? ' active' : '' }}">
        <i class="nav-icon {{ $icon ?? '' }}"></i>
        <p>
            {{ $label ?? '' }}
            @if (!empty($badge))
                <span class="right badge badge-danger">{{ $badgeText ?? '' }}</span>
            @endif
        </p>
    </a>
</li>
