<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <span class="brand-text font-weight-light item-right">GO SADARI</span>
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
                    <a href="/superAdmin" class="nav-link
        {{ $slug == 'home' ? 'active' : '' }}">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <p>
                            Home
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/setting" class="nav-link
        {{ $slug == 'setting' ? 'active' : '' }}">
                        <i class="fa fa-cog" aria-hidden="true"></i>
                        <p>
                            Setting
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/userAdmin" class="nav-link
                            {{ $slug == 'User Admin' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>User Admin</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/quisioners" class="nav-link
                            {{ $slug == 'Kuisioner' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kuisioner</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/keluhan" class="nav-link
                            {{ $slug == 'Keluhan' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Keluhan</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- <li class="nav-item"> --}}

                {{-- <a href="/password" class="nav-link
        {{ $slug == 'password' ? 'active' : '' }}">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <p>
                        Ubah Password
                    </p>
                </a> --}}
                {{-- </li> --}}
                <li class="nav-item">
                    <a href="/superAdmin/biodata" class="nav-link
        {{ $slug == 'biodata' ? 'active' : '' }}">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <p>
                            Biodata Sadari
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/superAdmin/belumditangani" class="nav-link
        {{ $slug == 'belumditangani' ? 'active' : '' }}">
                        <i class="fa fa-folder" aria-hidden="true"></i>
                        <p>
                            Belum Tertangani
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/superAdmin/sudahditangani" class="nav-link
        {{ $slug == 'sudahditangani' ? 'active' : '' }}">
                        <i class="fa fa-folder" aria-hidden="true"></i>
                        <p>
                            Sudah Tertangani
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/superAdmin/laporan" class="nav-link
        {{ $slug == 'laporan' ? 'active' : '' }}">
                        <i class="fa fa-folder" aria-hidden="true"></i>
                        <p>
                            Lap.SADARI
                        </p>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="/statistik" class="nav-link
        {{ $slug == 'statistik' ? 'active' : '' }}">
                        <i class="fa fa-signal" aria-hidden="true"></i>
                        <p>
                            Statistik
                        </p>
                    </a>
                </li> --}}
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
