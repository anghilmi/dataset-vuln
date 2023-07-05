<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    {{-- <a href="admin/home" class="brand-link"> --}}
    {{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
    {{-- <span class="brand-text font-weight-light">admin</span>
  </a> --}}
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-header">Go Motor</li>

            <li class="nav-item">
                <a href="/user" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                        Data User
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="/gejala" class="nav-link">
                    <i class="nav-icon fas fa-bolt"></i>
                    <p>
                        Data Gejala
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/kerusakan" class="nav-link">
                    <i class="nav-icon fas fa-cogs"></i>
                    <p>
                        Data Kerusakan
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/aturan" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                        Data Aturan
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <div class="nav-link">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <input type="submit" class="btn btn-danger" value="Logout">
                    </form>
                </div>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

@vite(['resources/sass/app.scss', 'resources/js/app.js'])
