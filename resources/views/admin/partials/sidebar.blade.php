<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="index.html">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-heading">Pages</li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#Layanan-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Layanan</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="Layanan-nav" class="nav-content {{ request()->is('admin/Layanan*') ? 'show' : '' }} collapse "
                data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('Layanan.create') }}"
                        class="{{ request()->is('admin/Layanan/create') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Tambah Layanan</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('Layanan.index') }}"
                        class="{{ request()->is('admin/Layanan') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Data Layanan</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Layanan Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#Informasi-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Informasi</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="Informasi-nav" class="nav-content {{ request()->is('admin/Informasi*') ? 'show' : '' }} collapse "
                data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('Informasi.create') }}"
                        class="{{ request()->is('admin/Informasi/create') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Tambah Informasi</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('Informasi.index') }}"
                        class="{{ request()->is('admin/Informasi') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Data Informasi</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Informasi Nav -->


    </ul>

</aside>
