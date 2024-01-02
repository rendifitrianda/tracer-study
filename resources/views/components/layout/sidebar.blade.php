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
        <x-layout.sidebar-user src="{{ url('public') }}/{{ $user->foto }}" name="{{ $user->nama }}" />

        <!-- Sidebar Menu -->
        <x-layout.sidebar-nav>
            <x-button.sidebarbtn url="admin/dashboard" icons="fa-th-large" title="DASHBOARD" />
            <x-button.sidebarbtn url="admin/prodi" icons="fa-home" title="DATA PRODI" />
            <x-button.sidebarbtn url="admin/alumni" icons="fa-users" title="DATA ALUMNI" />
            <x-button.sidebarbtn url="admin/tracer" icons="fa-users" title="TRACER STUDY" />
            <x-button.sidebarbtn url="admin/kuisioner" icons="fa-list" title="KUISIONER" />
            <x-button.sidebarbtn url="admin/guest" icons="fa-list" title="GUEST" />
            <x-button.sidebarbtn url="admin/profile/{{ $user->id }}" icons="fa-user" title="PROFILE" />
            <x-button.sidebarbtn url="admin/logout" icons="fa-power-off" title="LOGOUT"
                onclick="return confirm('Yakin ingin logout ?!');" />
        </x-layout.sidebar-nav>

    </div>

</aside>
