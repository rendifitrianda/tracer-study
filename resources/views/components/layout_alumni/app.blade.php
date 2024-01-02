<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ url('public') }}/assets_alumni/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="{{ url('public') }}/assets_alumni/css/style.css">
</head>

<body class="app">

    @php
        $user = Auth::guard('alumni')->user();
    @endphp

    <nav class="navbars">
        <button class="sidebar-toggle">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </nav>
    <aside class="sidebars">
        <div class="sidebar-nav">
            <span class="brand">TRACER STUDY</span>
            <button class="sidebar-toggle-closes">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
        <div class="sidebar-user d-flex align-items-center justify-content-center">
            <div class="user-image">
                @if ($user->foto != null)
                    <img src="{{ url('public') }}/{{ $user->foto }}" alt="Image ...">
                @else
                    <img src="{{ url('public') }}/assets_alumni/assets/dist/img/avatar.png" alt="Image ...">
                @endif

            </div>
            <div class="user-captions">
                <h2>{{ $user->nama }}</h2>
                <div class="status">
                    <span></span>
                    <p>{{ $user->nim }}</p>
                </div>
            </div>
        </div>
        <ul class="sidebar-menu">
            <x-layout_alumni.app.sidebar-tag class="{{ request()->is('alumni/dashboard' . '*') ? 'active' : '' }}"
                url="{{ url('alumni/dashboard') }}" iconName="home" label="Dashboard" />
            <x-layout_alumni.app.sidebar-tag class="{{ request()->is('alumni/tracer' . '*') ? 'active' : '' }}"
                url="{{ url('alumni/tracer') }}" iconName="home" label="Tracer Study" />
            <x-layout_alumni.app.sidebar-tag class="{{ request()->is('alumni/kuisioner' . '*') ? 'active' : '' }}"
                url="{{ url('alumni/kuisioner') }}" iconName="home" label="Kuisioner" />
            <x-layout_alumni.app.sidebar-tag class="{{ request()->is('alumni/profile' . '*') ? 'active' : '' }}"
                url="{{ url('alumni/profile') }}" iconName="person" label="Profile" />

        </ul>
    </aside>
    <section class="content">
        {{ $slot }}
    </section>

    <script src="{{ url('public') }}/assets_alumni/js/jquery.min.js"></script>
    <script src="{{ url('public') }}/assets_alumni/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('public') }}/assets_alumni/ionicons/dist/ionicons.js"></script>
    <script src="{{ url('public') }}/assets_alumni/js/app.js"></script>
    <script src="{{ url('public') }}/assets_alumni/js/step-form.js"></script>
</body>

</html>
