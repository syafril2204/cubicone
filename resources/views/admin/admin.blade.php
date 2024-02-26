<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>

    <link rel="stylesheet" href="{{asset('admins/css/styles.min.css')}}" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div>
            <div class="brand-logo d-flex align-items-center justify-content-between">
                <a href="#" class="sidebar-link">
                    <!-- <img src="./assets/images/logo.png" width="180" alt="" /> -->
                    <h1 style="font-weight: bold">Admin</h1>
                </a>
                <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                    <i class="ti ti-x fs-8"></i>
                </div>

            </div>
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                <ul id="sidebarnav">
                    <a href="?page=home" class="btn btn-outline-primary"><i class="ti ti-arrow-left"></i> View site</a>
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Main</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="/admin" aria-expanded="false">
                            <span>
                                <i class="ti ti-layout-dashboard"></i>
                            </span>
                            <span class="hide-menu">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Home</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="/admin/home" aria-expanded="false">
                            <span>
                                <i class="ti ti-home"></i>
                            </span>
                            <span class="hide-menu">Homepage</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="?proses=undangan_admin" aria-expanded="false">
                            <span>
                                <i class="ti ti-book-2"></i>
                            </span>
                            <span class="hide-menu">Room & Facilities</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="?proses=admin_tentang" aria-expanded="false">
                            <span>
                                <i class="ti ti-robot"></i>
                            </span>
                            <span class="hide-menu">Tentang Kami</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="?proses=blog_admin" aria-expanded="false">
                            <span>
                                <i class="ti ti-article"></i>
                            </span>
                            <span class="hide-menu">Blog</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="?proses=hubungi_admin" aria-expanded="false">
                            <span>
                                <i class="ti ti-brand-hipchat"></i>
                            </span>
                            <span class="hide-menu">Hubungi</span>
                        </a>
                    </li>




                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Other</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{route('actionlogout')}}" aria-expanded="false">
                            <span>
                                <i class="ti ti-login"></i>
                            </span>
                            <span class="hide-menu">Logout</span>
                        </a>
                    </li>


                </ul>

            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <div class="body-wrapper">

        <header class="app-header">
            <nav class="navbar navbar-expand-lg navbar-light">
                <ul class="navbar-nav">
                    <li class="nav-item d-block d-xl-none">
                        <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                            <i class="ti ti-menu-2"></i>
                        </a>
                    </li>
                    <li class="nav-item">

                    </li>
                </ul>
                <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                    <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">

                        <li class="nav-item dropdown">
                            <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset('admins/images/profile/user-1.jpg')}}" alt="" width="35" height="35" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                                <div class="message-body">
                                    {{-- <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                        <i class="ti ti-user fs-6"></i>
                                        <p class="mb-0 fs-3">My Profile</p>
                                    </a> --}}

                                    <a href="{{route('actionlogout')}}" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
    @yield('content')

    </div>

    </div>


    <script src="{{asset('admins/libs/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('admins/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('admins/js/sidebarmenu.js')}}"></script>
<script src="{{asset('admins/js/app.min.js')}}"></script>
<script src="./assets/admins/libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="./assets/admin/libs/simplebar/dist/simplebar.js"></script>
<script src="./assets/admin/js/dashboard.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>
