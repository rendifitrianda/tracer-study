<li class="nav-item">
    <a href="{{ url($url) }}" class="nav-link {{ request()->is($url . '*') ? 'active' : '' }}">
        <i class="nav-icon fa {{ $icons }}"></i>
        <p>{{ $title }}</p>
    </a>
</li>
