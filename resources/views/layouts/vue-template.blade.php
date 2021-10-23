<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{asset('tem/img/logo/logo.png')}}" rel="icon">
    <title>RuangAdmin - Dashboard</title>
    <link href="{{asset('tem/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('tem/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('tem/css/ruang-admin.min.css')}}" rel="stylesheet">


</head>
<body id="page-top">
<div id="app">
        @auth
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
            <router-link class="sidebar-brand d-flex align-items-center justify-content-center" to="/">
                <div class="sidebar-brand-icon">
                    <img src="{{asset('tem/img/logo/logo2.png')}}">
                </div>
                <div class="sidebar-brand-text mx-3">RuangAdmin</div>
            </router-link>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <router-link to="/" class="nav-link">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></router-link>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Features
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
                   aria-expanded="true" aria-controls="collapseBootstrap">
                    <i class="far fa-fw fa-window-maximize"></i>
                    <span>Management</span>
                </a>
                <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap"
                     data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">crm</h6>
                        <router-link to="/employee" class="collapse-item" href="alerts.html">Employee</router-link>
                        <router-link to="/customer" class="collapse-item" href="buttons.html">Customer</router-link>
                        <router-link to="/prospect" class="collapse-item" href="dropdowns.html">Prospect</router-link>
                        <router-link class="collapse-item" to="/employeeProspect">Employee Prospect</router-link>
                        <router-link class="collapse-item" to="/customerEmployee">Customer Employee</router-link>
                    </div>
                </div>
            </li>

            <hr class="sidebar-divider">
            <div class="version" id="version-ruangadmin">Version 1.1</div>
        </ul>
        <!-- Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- TopBar -->
                <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
                    <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="img-profile rounded-circle" src="{{asset('tem/img/boy.png')}}"
                                     style="max-width: 60px">

                                <span class="ml-2 d-none d-lg-inline text-white small">{{Auth::user()->name}}</span>

                            </a>

                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                 aria-labelledby="userDropdown">

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ url('/logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>

                    </ul>
                </nav>
            @endauth
                <!-- Topbar -->

                <!-- Container Fluid-->
                <div id="app">
                    @yield('vue-resources')
                </div>
                <!---Container Fluid-->
            </div>
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
            <span>copyright © 2021 - developed by
              <b><a href="https://indrijunanda.gitlab.io/" target="_blank">indrijunanda</a></b>
            </span>
                    </div>
                </div>
            </footer>
            <!-- Footer -->
        </div>
    </div>


</div>

<script src="{{asset('js/app.js')}}"></script>


</body>
</html>
