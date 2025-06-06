<!-- Navbar Start -->
<nav class="navbar" id="navbar">
    <div class="container flex flex-wrap items-center justify-end">
        <a class="navbar-brand" href="{{ url('/') }}">
            <span class="inline-block dark:hidden">
                <img src="{{ asset('assets/images/logo-dark.png') }}" class="l-dark" alt="">
                <img src="{{ asset('assets/images/logo-light.png') }}" class="l-light" alt="">
            </span>
            <img src="{{ asset('assets/images/logo-light.png') }}" class="hidden dark:inline-block" alt="">
        </a>

        <div class="nav-icons flex items-center lg_992:order-2 ms-auto">
            <!-- Navbar Button -->
            <ul class="list-none menu-social mb-0">
                <li class="inline">
                    <a href="">
                        <span class="login-btn-primary"><span class="btn btn-sm btn-icon rounded-full bg-orange-600 hover:bg-orange-700 border-orange-600 hover:border-orange-700 text-white"><i class="uil uil-github"></i></span></span>
                        <span class="login-btn-light"><span class="btn btn-sm btn-icon rounded-full bg-gray-50 hover:bg-gray-200 text-slate-900 dark:text-white dark:bg-slate-900 dark:hover:bg-gray-700 hover:border-gray-100 dark:border-gray-700 dark:hover:border-gray-700"><i class="uil uil-github"></i></span></span>
                    </a>
                </li>
                <li class="inline">
                    <a href="">
                        <span class="login-btn-primary"><span class="btn btn-sm btn-icon rounded-full bg-orange-600 hover:bg-orange-700 border-orange-600 hover:border-orange-700 text-white"><i class="uil uil-twitter"></i></span></span>
                        <span class="login-btn-light"><span class="btn btn-sm btn-icon rounded-full bg-gray-50 hover:bg-gray-200 text-slate-900 dark:text-white dark:bg-slate-900 dark:hover:bg-gray-700 hover:border-gray-100 dark:border-gray-700 dark:hover:border-gray-700"><i class="uil uil-twitter"></i></span></span>
                    </a>
                </li>
                <li class="inline">
                    <a href="">
                        <span class="login-btn-primary"><span class="btn btn-sm btn-icon rounded-full bg-orange-600 hover:bg-orange-700 border-orange-600 hover:border-orange-700 text-white"><i class="uil uil-instagram"></i></span></span>
                        <span class="login-btn-light"><span class="btn btn-sm btn-icon rounded-full bg-gray-50 hover:bg-gray-200 text-slate-900 dark:text-white dark:bg-slate-900 dark:hover:bg-gray-700 hover:border-gray-100 dark:border-gray-700 dark:hover:border-gray-700"><i class="uil uil-instagram"></i></span></span>
                    </a>
                </li>
            </ul>
            <!-- Navbar Collapse Manu Button -->
            <button data-collapse="menu-collapse" type="button" class="collapse-btn inline-flex items-center ms-3 text-dark dark:text-white lg_992:hidden" aria-controls="menu-collapse" aria-expanded="false">
                <span class="sr-only">Navigation Menu</span>
                <i class="mdi mdi-menu mdi-24px"></i>
            </button>
        </div>

        <!-- Navbar Manu -->
        <div class="navigation lg_992:order-1 lg_992:flex hidden" id="menu-collapse">
            <ul class="navbar-nav nav-light" id="navbar-navlist">
                <li class="nav-item">
                    <a class="nav-link active" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#features">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#portfolio">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#testi">Review</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#pricing">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact us</a>
                </li>                       
            </ul>
        </div>
    </div>
</nav>
<!-- Navbar End -->