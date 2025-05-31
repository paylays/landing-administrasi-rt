<!-- Navbar Start -->
<nav class="navbar" id="navbar">
    <div class="container flex flex-wrap items-center justify-between">
        <a class="navbar-brand" href="{{ url('/') }}">
            <span class="inline-block dark:hidden">
                <span class="l-dark text-xl font-semibold text-slate-900">Profile RT.36</span>
                <span class="l-light text-xl font-semibold text-slate-400">Profile RT.36</span>
            </span>
            <span class="hidden dark:inline-block text-xl font-semibold text-white">Profile RT.36</span>
        </a>
        <div class="nav-icons flex items-center lg_992:order-2">
            <!-- Navbar Button -->
            <ul class="list-none menu-social mb-0">
                <li class="inline">
                    <a href="{{ env('APP_DASHBOARD_URL') . '/login' }}" target="_blank">
                        <span class="login-btn-primary"><span class="btn rounded-md h-11 bg-orange-600 hover:bg-orange-700 border-orange-600 hover:border-orange-700 text-white">Login</span></span>
                        <span class="login-btn-light"><span class="btn rounded-md h-11 bg-gray-50 hover:bg-gray-200 text-slate-900 dark:text-white dark:bg-slate-900 dark:hover:bg-gray-700 hover:border-gray-100 dark:border-gray-700 dark:hover:border-gray-700">Login</span></span>
                    </a>
                </li>
            </ul>
            <!-- Navbar Collapse Manu Button -->
            <button data-collapse="menu-collapse" type="button" class="collapse-btn inline-flex items-center ms-3 text-slate-900 dark:text-white lg_992:hidden" aria-controls="menu-collapse" aria-expanded="false">
                <span class="sr-only">Navigation Menu</span>
                <i class="mdi mdi-menu mdi-24px"></i>
            </button>
        </div>

        <!-- Navbar Manu -->
        <div class="navigation lg_992:order-1 lg_992:flex hidden" id="menu-collapse">
            <ul class="navbar-nav nav-light" id="navbar-navlist">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/#tentang-kami') }}">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/#pengumuman') }}">Pengumuman</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/#hubungi-kami') }}">Hubungi</a>
                </li>                       
            </ul>
        </div>
    </div>
</nav>
<!-- Navbar End -->