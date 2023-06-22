<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dasboard-Admin</title>
    <!-- loader-->
    <link href="{{ asset('/assets/admin/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('/assets/admin/js/pace.min.js') }}"></script>
    <!--favicon-->
    <link rel="icon" href="{{ asset('/assets/admin/images/favicon.ico') }}" type="image/x-icon" />
    <!-- simplebar CSS-->
    <link href="{{ asset('/assets/admin/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="{{ asset('/assets/admin/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="{{ asset('/assets/admin/css/animate.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="{{ asset('/assets/admin/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <!-- Sidebar CSS-->
    <link href="{{ asset('/assets/admin/css/sidebar-menu.css') }}" rel="stylesheet" />
    <!-- Custom Style-->
    <link href="{{ asset('/assets/admin/css/app-style.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body class="bg-theme bg-theme1">
    <!-- Start wrapper-->
    <div id="wrapper">
        <!--Start sidebar-wrapper-->
        <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
            <div class="brand-logo">
                <a href="/">
                    <img src="{{ asset('/assets/admin/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
                    <h5 class="logo-text">Dhaharan.id</h5>
                </a>
            </div>
            <ul class="sidebar-menu do-nicescrol">
                <li class="sidebar-header">MENU</li>
                @if(Auth::check() && Auth::user()->role === '1')
                <li>
                    <a href="/dashboard">
                        <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#dropdownadmin" aria-expanded="false"
                        aria-controls="ui-basic">
                        <i class="zmdi zmdi-account-box"></i></span>
                        <span class="menu-title">Administrator</span>
                        <i class="zmdi zmdi-chevron-down" style="float:right; margin-right:10px"></i>
                    </a>
                    <div class="collapse" id="dropdownadmin">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="/users">User</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/approves">Approve</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="/activities">
                        <i class="zmdi zmdi-view-web"></i> <span>Activity</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#dropdownmaps" aria-expanded="false"
                        aria-controls="ui-basic">
                        <i class="zmdi zmdi-map"></i></span>
                        <span class="menu-title">Maps</span>
                        <i class="zmdi zmdi-chevron-down" style="float:right; margin-right:10px"></i>
                    </a>
                    <div class="collapse" id="dropdownmaps">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="/categories">Category </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/places">Place</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#dropdownfinance" aria-expanded="false"
                        aria-controls="ui-basic">
                        <i class="zmdi zmdi-money-box"></i></span>
                        <span class="menu-title">Finance</span>
                        <i class="zmdi zmdi-chevron-down" style="float:right; margin-right:10px"></i>
                    </a>
                    <div class="collapse" id="dropdownfinance">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="/finance_donations">Finance <span
                                        class="badge bg-secondary">Donation</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/finance_expenses">Finance <span
                                        class="badge bg-secondary">Expanse</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/finance_recapitulations">Finance <span
                                        class="badge bg-secondary">Recapitulation</span></a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="calendar.html">
                        <i class="zmdi zmdi-calendar-check"></i> <span>Calendar</span>
                    </a>
                </li>
                <li>
                    <a href="profile.html">
                        <i class="zmdi zmdi-face"></i> <span>Profile</span>
                    </a>
                </li>
                <li class="sidebar-header">MORE INFO</li>
                <li>
                    <a href="javaScript:void();"><i class="zmdi zmdi-print text-success"></i>
                        <span>Print</span></a>
                </li>
            </ul>
            @else
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#dropdownmaps" aria-expanded="false"
                    aria-controls="ui-basic">
                    <i class="zmdi zmdi-map"></i></span>
                    <span class="menu-title">Maps</span>
                    <i class="zmdi zmdi-chevron-down" style="float:right; margin-right:10px"></i>
                </a>
                <div class="collapse" id="dropdownmaps">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="/categories">Category </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/places">Place</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="profile.html">
                    <i class="zmdi zmdi-face"></i> <span>Profile</span>
                </a>
            </li>
            <li class="sidebar-header">MORE INFO</li>
            <li>
                <a href="javaScript:void();"><i class="zmdi zmdi-print text-success"></i>
                    <span>Print</span></a>
            </li>
            @endif
            </ul>
        </div>
        <!--End sidebar-wrapper-->

        <!--Start topbar header-->
        <header class="topbar-nav">
            <nav class="navbar navbar-expand fixed-top">
                <ul class="navbar-nav mr-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link toggle-menu" href="javascript:void();">
                            <i class="icon-menu menu-icon"></i>
                        </a>
                    </li>
                </ul>

                <ul class="navbar-nav align-items-center right-nav-link">
                    <li class="nav-item dropdown-lg">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                            href="javascript:void();">
                            <i class="fa fa-bell-o"></i></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
                            <span class="user-profile"><img src="{{ asset('/assets/admin/images/man.png') }}"
                                    class="img-circle" alt="user avatar" /></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item user-details">
                                <a href="javaScript:void();">
                                    <div class="media">
                                        <div class="avatar">
                                            <img class="align-self-start mr-3"
                                                src="{{ asset('/assets/admin/images/man.png') }}" alt="user avatar" />
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-2 user-title">{{ Auth::user()->name }}</h6>
                                            <p class="user-subtitle">{{ Auth::user()->email }}</p>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item">
                                {{-- <a class="icon-power mr-2" href="{{ route('logout') }}"> Logout</a> --}}
                                <a class="dropdown-item icon-power mr-2" href="{{ route('logout') }}" onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>

                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
        <!--End topbar header-->

        <div class="clearfix"></div>

        <div class="content-wrapper">
            <div class="container-fluid">
                <!--Start Dashboard Content-->
                @yield('content')
                <!--End Dashboard Content-->
                <!--start overlay-->
                <div class="overlay toggle-menu"></div>
                <!--end overlay-->
            </div>
            <!-- End container-fluid-->
        </div>
        <!--End content-wrapper-->
        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i>
        </a>
        <!--End Back To Top Button-->

        <!--Start footer-->
        <footer class="footer">
            <div class="container">
                <div class="text-center">Copyright © 2023 Dhaharan.id</div>
            </div>
        </footer>
        <!--End footer-->

        <!--start color switcher-->
        <div class="right-sidebar">
            <div class="switcher-icon">
                <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
            </div>
            <div class="right-sidebar-content">
                <p class="mb-0">Gaussion Texture</p>
                <hr />

                <ul class="switcher">
                    <li id="theme1"></li>
                    <li id="theme2"></li>
                    <li id="theme3"></li>
                    <li id="theme4"></li>
                    <li id="theme5"></li>
                    <li id="theme6"></li>
                </ul>

                <p class="mb-0">Gradient Background</p>
                <hr />

                <ul class="switcher">
                    <li id="theme7"></li>
                    <li id="theme8"></li>
                    <li id="theme9"></li>
                    <li id="theme10"></li>
                    <li id="theme11"></li>
                    <li id="theme12"></li>
                    <li id="theme13"></li>
                    <li id="theme14"></li>
                    <li id="theme15"></li>
                </ul>
            </div>
        </div>
        <!--end color switcher-->
    </div>
    <!--End wrapper-->

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('/assets/admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/assets/admin/js/popper.min.js') }}"></script>
    <script src="{{ asset('/assets/admin/js/bootstrap.min.js') }}"></script>

    <!-- simplebar js -->
    <script src="{{ asset('/assets/admin/plugins/simplebar/js/simplebar.js') }}"></script>
    <!-- sidebar-menu js -->
    <script src="{{ asset('/assets/admin/js/sidebar-menu.js') }}"></script>
    <!-- Custom scripts -->
    <script src="{{ asset('/assets/admin/js/app-script.js') }}"></script>
    {{-- <script src="{{ asset('/assets/admin/plugins/Chart.js/Chart.min.js') }}"></script> --}}

    <!-- Index js -->
    <script src="{{ asset('/assets/admin/js/index.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


    <script>
        //message with toastr
    @if(session()->has('success'))
    
        toastr.success('{{ session('success') }}', 'BERHASIL!'); 
  
    @elseif(session()->has('error'))
  
        toastr.error('{{ session('error') }}', 'GAGAL!'); 
        
    @endif
    </script>
</body>

</html>