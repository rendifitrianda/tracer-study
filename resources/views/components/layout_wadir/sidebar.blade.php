@php
    $user = Auth::guard('admin')->user();
@endphp
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link d-flex justify-content-center">

        <span class="brand-text text-cnter font-weight-light">TRACER STUDI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <x-layout_wadir.sidebar-user src="{{ url('public') }}/{{ $user->foto }}" name="{{ $user->nama }}" />

        <!-- Sidebar Menu -->
        <x-layout_wadir.sidebar-nav>
            <x-button.sidebarbtn url="wadir/dashboard" icons="fa-th-large" title="DASHBOARD" />
            <x-button.sidebarbtn url="wadir/prodi" icons="fa-home" title="DATA PRODI" />
            <x-button.sidebarbtn url="wadir/alumni" icons="fa-users" title="DATA ALUMNI" />
            <x-button.sidebarbtn url="wadir/tracer" icons="fa-users" title="TRACER STUDY" />
            <x-button.sidebarbtn url="wadir/kuisioner" icons="fa-list" title="KUISIONER" />
            <x-button.sidebarbtn url="wadir/guest" icons="fa-list" title="GUEST" />
            <x-button.sidebarbtn url="wadir/profile/{{ $user->id }}" icons="fa-user" title="PROFILE" />
            <x-button.sidebarbtn url="wadir/logout" icons="fa-power-off" title="LOGOUT"
                onclick="return confirm('Yakin ingin logout ?!');" />
        </x-layout_wadir.sidebar-nav>

    </div>

</aside>
