<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src="{{ asset('lte') }}/dist/img/gosadarilogo.png" alt="gosadari Logo"
            class="brand-image img-circle elevation-3" style="opacity:.8">
        <span class="brand-text font-weight-light">GOSADARI</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
        with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/admin" class="nav-link
        {{ $slug == 'dashboard' ? 'active' : '' }}">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <p>
                            Home
                        </p>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="/password" class="nav-link
        {{ $slug == 'password' ? 'active' : '' }}">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <p>
                            Ubah Password
                        </p>
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a href="/admin/biodata" class="nav-link
        {{ $slug == 'biodata' ? 'active' : '' }}">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <p>
                            Biodata Sadari
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/belumditangani" class="nav-link
        {{ $slug == 'belumditangani' ? 'active' : '' }}">
                        <i class="fa fa-folder" aria-hidden="true"></i>
                        <p>
                            Belum Tertangani
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/sudahditangani" class="nav-link
        {{ $slug == 'sudahditangani' ? 'active' : '' }}">
                        <i class="fa fa-folder" aria-hidden="true"></i>
                        <p>
                            Sudah Tertangani
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/laporan" class="nav-link
        {{ $slug == 'laporan' ? 'active' : '' }}">
                        <i class="fa fa-folder" aria-hidden="true"></i>
                        <p>
                            Lap.SADARI
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/home" class="nav-link
        {{ $slug == 'keluar' ? 'active' : '' }}">
                        <i class="fa fa-power-off" aria-hidden="true"></i>
                        <p>
                            Keluar
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
