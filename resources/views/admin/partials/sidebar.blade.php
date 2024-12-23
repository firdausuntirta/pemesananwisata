<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-plane"></i>
        </div>
        <div class="sidebar-brand-text mx-3">WISATA<sup>OK</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pengunjung -->
    <li class="nav-item 
        {{ request()->routeIs('admin.pengunjung.*') ? 'active' : '' }}">
        <a class="nav-link {{ request()->routeIs('admin.pengunjung.*') ? '' : 'collapsed' }}" href="#"
            data-toggle="collapse" data-target="#collapsePengunjung"
            aria-expanded="{{ request()->routeIs('admin.pengunjung.*') ? 'true' : 'false' }}"
            aria-controls="collapsePengunjung">
            <i class="fas fa-fw fa-user"></i>
            <span>Pengunjung</span>
        </a>
        <div id="collapsePengunjung" class="collapse {{ request()->routeIs('admin.pengunjung.*') ? 'show' : '' }}"
            aria-labelledby="headingPengunjung" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ request()->routeIs('admin.pengunjung.create') ? 'active' : '' }}"
                    href="{{ route('admin.pengunjung.create') }}">Tambah Pengunjung</a>
                <a class="collapse-item {{ request()->routeIs('admin.pengunjung.index') ? 'active' : '' }}"
                    href="{{ route('admin.pengunjung.index') }}">Daftar Pengunjung</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Tiket -->
    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTiket"
            aria-expanded="true" aria-controls="collapseTiket">
            <i class="fas fa-fw fa-ticket-alt"></i>
            <span>Tiket</span>
        </a>
        <div id="collapseTiket" class="collapse" aria-labelledby="headingTiket" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="tiket-tambah.html">Tambah Tiket</a>
                <a class="collapse-item" href="tiket-list.html">Daftar Tiket</a>
            </div>
        </div>
    </li> --}}

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Coming Soon -->
    <li class="nav-item">
        <a class="nav-link" href="coming-soon.html">
            <i class="fas fa-fw fa-hourglass-half"></i>
            <span>Coming Soon</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
