<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />

        <title>@yield('title') - {{$generalsetting->name}}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset($generalsetting->favicon)}}" />

        <!-- Bootstrap css -->
        <link href="{{asset('public/backEnd/')}}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- App css -->
        <link href="{{asset('public/backEnd/')}}/assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <!-- icons -->
        <link href="{{asset('public/backEnd/')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- toastr css -->
        <link rel="stylesheet" href="{{asset('public/backEnd/')}}/assets/css/toastr.min.css" />
        <!-- custom css -->
        <link href="{{asset('public/backEnd/')}}/assets/css/custom.css" rel="stylesheet" type="text/css" />
        <!-- Head js -->
        <link href="{{asset('public/backEnd')}}/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/backEnd')}}/assets/summernote-lite/summernote-lite.css" rel="stylesheet" type="text/css" />
        @yield('css')
        <script src="{{asset('public/backEnd/')}}/assets/js/head.js"></script>
    </head>

    <!-- body start -->
    <body data-layout-mode="default" data-theme="light" data-layout-width="fluid" data-topbar-color="dark" data-menu-position="fixed" data-leftbar-color="light" data-leftbar-size="default" data-sidebar-user="false">
        <!-- Begin page -->
        <div id="wrapper">
            <!-- Topbar Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <ul class="list-unstyled topnav-menu float-end mb-0">
                        <li class="d-none d-lg-inline-block">
                            <a class="nav-link arrow-none waves-effect waves-light" href="{{ route('home') }}" target="_blank">
                                <i class="fe-airplay noti-icon"></i>
                                Visit Site
                            </a>
                        </li>
                        <li class="d-none d-lg-block">
                            <form class="app-search">
                                <div class="app-search-box dropdown">
                                    <div class="input-group">
                                        <input type="search" class="form-control" placeholder="Search..." id="top-search" />
                                        <button class="btn input-group-text" type="submit">
                                            <i class="fe-search"></i>
                                        </button>
                                    </div>
                                    <div class="dropdown-menu dropdown-lg" id="search-dropdown">
                                        {{--
                                        <!-- item-->
                                        <div class="dropdown-header noti-title">
                                            <h5 class="text-overflow mb-2">Found 22 results</h5>
                                        </div>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="fe-home me-1"></i>
                                            <span>Analytics Report</span>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="fe-aperture me-1"></i>
                                            <span>How can I help you?</span>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="fe-settings me-1"></i>
                                            <span>User profile settings</span>
                                        </a>

                                        <!-- item-->
                                        <div class="dropdown-header noti-title">
                                            <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                                        </div>

                                        <div class="notification-list">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="d-flex align-items-start">
                                                    <img class="d-flex me-2 rounded-circle" src="{{asset('public/backEnd/')}}/assets/images/users/user-2.jpg" alt="Generic placeholder image" height="32" />
                                                    <div class="w-100">
                                                        <h5 class="m-0 font-14">Erwin E. Brown</h5>
                                                        <span class="font-12 mb-0">UI Designer</span>
                                                    </div>
                                                </div>
                                            </a>

                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="d-flex align-items-start">
                                                    <img class="d-flex me-2 rounded-circle" src="{{asset('public/backEnd/')}}/assets/images/users/user-5.jpg" alt="Generic placeholder image" height="32" />
                                                    <div class="w-100">
                                                        <h5 class="m-0 font-14">Jacob Deo</h5>
                                                        <span class="font-12 mb-0">Developer</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        --}}
                                    </div>
                                </div>
                            </form>
                        </li>

                        <li class="dropdown d-inline-block d-lg-none">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fe-search noti-icon"></i>
                            </a>
                            <div class="dropdown-menu dropdown-lg dropdown-menu-end p-0">
                                <form class="p-3">
                                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username" />
                                </form>
                            </div>
                        </li>

                        <li class="dropdown d-none d-lg-inline-block">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="fullscreen" href="#">
                                <i class="fe-maximize noti-icon"></i>
                            </a>
                        </li>

                        <li class="dropdown d-none d-lg-inline-block topbar-dropdown">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fe-grid noti-icon"></i>
                            </a>
                            <div class="dropdown-menu dropdown-lg dropdown-menu-end">
                                <div class="p-lg-1">
                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{asset('public/backEnd/')}}/assets/images/brands/slack.png" alt="slack" />
                                                <span>Slack</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{asset('public/backEnd/')}}/assets/images/brands/github.png" alt="Github" />
                                                <span>GitHub</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{asset('public/backEnd/')}}/assets/images/brands/dribbble.png" alt="dribbble" />
                                                <span>Dribbble</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{asset('public/backEnd/')}}/assets/images/brands/bitbucket.png" alt="bitbucket" />
                                                <span>Bitbucket</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{asset('public/backEnd/')}}/assets/images/brands/dropbox.png" alt="dropbox" />
                                                <span>Dropbox</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{asset('public/backEnd/')}}/assets/images/brands/g-suite.png" alt="G Suite" />
                                                <span>G Suite</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        {{-- 
                        <li class="dropdown d-none d-lg-inline-block topbar-dropdown">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="{{asset('public/backEnd/')}}/assets/images/flags/us.jpg" alt="user-image" height="16" />
                            </a> 
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <img src="{{asset('public/backEnd/')}}/assets/images/flags/us.jpg" alt="user-image" class="me-1" height="12" /> <span class="align-middle">English</span>
                                </a>
                            </div>
                        </li>
                        --}}

                        {{--
                        <li class="dropdown notification-list topbar-dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fe-bell noti-icon"></i>
                                <span class="badge bg-danger rounded-circle noti-icon-badge">9</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-lg">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="m-0">
                                        <span class="float-end">
                                            <a href="#" class="text-dark">
                                                <small>Clear All</small>
                                            </a>
                                        </span>
                                        Notification
                                    </h5>
                                </div>

                                <div class="noti-scroll" data-simplebar>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                        <div class="notify-icon">
                                            <img src="{{asset('public/backEnd/')}}/assets/images/users/user-1.jpg" class="img-fluid rounded-circle" alt="" />
                                        </div>
                                        <p class="notify-details">Cristina Pride</p>
                                        <p class="text-muted mb-0 user-msg">
                                            <small>Hi, How are you? What about our next meeting</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                </div>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                    View all
                                    <i class="fe-arrow-right"></i>
                                </a>
                            </div>
                        </li>
                        --}}

                        <li class="dropdown notification-list topbar-dropdown">
                            <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="{{asset(Auth::user()->image)}}" alt="user-image" class="rounded-circle" />
                                <span class="pro-user-name ms-1"> {{Auth::user()->name}} <i class="mdi mdi-chevron-down"></i> </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end profile-dropdown">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>

                                <!-- item-->
                                <a href="{{route('dashboard')}};" class="dropdown-item notify-item">
                                    <i class="fe-user"></i>
                                    <span>Dashboard</span>
                                </a>

                                <!-- item-->
                                <a href="{{route('change_password')}}" class="dropdown-item notify-item">
                                    <i class="fe-settings"></i>
                                    <span>Change Password</span>
                                </a>

                                <!-- item-->
                                <a href="{{route('locked')}}" class="dropdown-item notify-item">
                                    <i class="fe-lock"></i>
                                    <span>Lock Screen</span>
                                </a>

                                <div class="dropdown-divider"></div>

                                <!-- item-->
                                <a
                                    href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"
                                    class="dropdown-item notify-item"
                                >
                                    <i class="fe-log-out me-1"></i>
                                    <span>Logout</span>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>

                        <li class="dropdown notification-list">
                            <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                                <i class="fe-settings noti-icon"></i>
                            </a>
                        </li>
                    </ul>

                    <!-- LOGO -->
                    <div class="logo-box">
                        <a href="{{url('admin/dashboard')}}" class="logo logo-dark text-center">
                            <span class="logo-sm">
                                <img src="{{asset('public/backEnd/')}}/assets/images/logo-sm.png" alt="" height="22" />
                                <!-- <span class="logo-lg-text-light">UBold</span> -->
                            </span>
                            <span class="logo-lg">
                                <img src="{{asset('public/backEnd/')}}/assets/images/logo-dark.png" alt="" height="20" />
                                <!-- <span class="logo-lg-text-light">U</span> -->
                            </span>
                        </a>

                        <a href="{{url('admin/dashboard')}}" class="logo logo-light text-center">
                            <span class="logo-sm">
                                <img src="{{asset($generalsetting->favicon)}}" alt="" height="22" />
                            </span>
                            <span class="logo-lg">
                                <img src="{{asset($generalsetting->white_logo)}}" alt="" height="20" />
                            </span>
                        </a>
                    </div>

                    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                        <li>
                            <button class="button-menu-mobile waves-effect waves-light">
                                <i class="fe-menu"></i>
                            </button>
                        </li>

                        <li>
                            <!-- Mobile menu toggle (Horizontal Layout)-->
                            <a class="navbar-toggle nav-link" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>
                        {{-- 
                        <li class="dropdown d-none d-xl-block">
                            <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                Create New
                                <i class="mdi mdi-chevron-down"></i>
                            </a>
                            <div class="dropdown-menu">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="fe-briefcase me-1"></i>
                                    <span>New Projects</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="fe-user me-1"></i>
                                    <span>Create Users</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="fe-bar-chart-line- me-1"></i>
                                    <span>Revenue Report</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="fe-settings me-1"></i>
                                    <span>Settings</span>
                                </a>

                                <div class="dropdown-divider"></div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="fe-headphones me-1"></i>
                                    <span>Help & Support</span>
                                </a>
                            </div>
                        </li>
                         --}}
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">
                <div class="h-100" data-simplebar>
                    <!-- User box -->
                    <div class="user-box text-center">
                        <img src="{{asset('public/backEnd/')}}/assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle avatar-md" />
                        <div class="dropdown">
                            <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block" data-bs-toggle="dropdown">{{Auth::user()->name}}</a>
                            <div class="dropdown-menu user-pro-dropdown">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-user me-1"></i>
                                    <span>My Account</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-settings me-1"></i>
                                    <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-lock me-1"></i>
                                    <span>Lock Screen</span>
                                </a>

                                <!-- item-->
                                <a
                                    href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"
                                    class="dropdown-item notify-item"
                                >
                                    <i class="fe-log-out me-1"></i>
                                    <span>Logout</span>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                        <p class="text-muted">Admin Head</p>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul id="side-menu">
                            <li>
                                <a href="{{url('admin/dashboard')}}" data-bs-toggle="collapse">
                                    <i data-feather="airplay"></i>
                                    <span> Dashboards </span>
                                </a>
                            </li>

                            <li class="menu-title mt-2">Apps</li>
                            <!-- nav items -->
                            <li>
                                <a href="#sidebar-users" data-bs-toggle="collapse">
                                    <i data-feather="user"></i>
                                    <span> Users </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebar-users">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{route('users.create')}}">New</a>
                                        </li>
                                        <li>
                                            <a href="{{route('users.index')}}">Manage</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- nav items -->
                            <li>
                                <a href="#siebar-roles" data-bs-toggle="collapse">
                                    <i data-feather="power"></i>
                                    <span> Roles </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="siebar-roles">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{route('roles.create')}}">New</a>
                                        </li>
                                        <li>
                                            <a href="{{route('roles.index')}}">Manage</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- nav items end -->
                            <li>
                                <a href="#siebar-permissions" data-bs-toggle="collapse">
                                    <i data-feather="lock"></i>
                                    <span> Permissions </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="siebar-permissions">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{route('permissions.create')}}">New</a>
                                        </li>
                                        <li>
                                            <a href="{{route('permissions.index')}}">Manage</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- nav items end -->
                           
                            

                           
                            <li>
                                <a href="#siebar-abouts" data-bs-toggle="collapse">
                                    <i data-feather="user-x"></i>
                                    <span> About </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="siebar-abouts">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{route('abouts.create')}}">Create</a>
                                        </li>
                                        <li>
                                            <a href="{{route('abouts.index')}}">Manage</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                           <!-- ============= -->
                           
                            <li>
                                <a href="#siebar-contact" data-bs-toggle="collapse">
                                    <i data-feather="headphones"></i>
                                    <span> Contact </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="siebar-contact">
                                    <ul class="nav-second-level">

                                        <li>
                                            <a href="{{route('contact.create')}}">Create</a>
                                        </li>
                                        <li>
                                            <a href="{{route('contact.index')}}">Manage</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                           <!-- ============= -->
                           
                            <li>
                                <a href="#siebar-socialmedias" data-bs-toggle="collapse">
                                    <i data-feather="file-plus"></i>
                                    <span> Social Medias </span>
                                    <span class="menu-arrow"></span>
                            </a>
                                <div class="collapse" id="siebar-socialmedias">
                                    <ul class="nav-second-level">

                                        <li>
                                            <a href="{{route('socialmedias.create')}}">Create</a>
                                        </li>
                                         <li>
                                            <a href="{{route('socialmedias.index')}}">Manage</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                           <!-- ============= -->
                            <li>
                                <a href="#siebar-counter" data-bs-toggle="collapse">
                                    <i data-feather="file-plus"></i>
                                    <span> Counter </span>
                                    <span class="menu-arrow"></span>
                            </a>
                                <div class="collapse" id="siebar-counter">
                                    <ul class="nav-second-level">

                                        <li>
                                            <a href="{{route('counter.create')}}">Create</a>
                                        </li>
                                         <li>
                                            <a href="{{route('counter.index')}}">Manage</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                           <!-- ============= -->
                            <li>
                                <a href="#siebar-skill" data-bs-toggle="collapse">
                                    <i data-feather="file-plus"></i>
                                    <span> Skill </span>
                                    <span class="menu-arrow"></span>
                            </a>
                                <div class="collapse" id="siebar-skill">
                                    <ul class="nav-second-level">

                                        <li>
                                            <a href="{{route('skill.create')}}">Create</a>
                                        </li>
                                         <li>
                                            <a href="{{route('skill.index')}}">Manage</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                           <!-- ============= -->
                            <li>
                                <a href="#siebar-experience" data-bs-toggle="collapse">
                                    <i data-feather="file-plus"></i>
                                    <span> Experience </span>
                                    <span class="menu-arrow"></span>
                            </a>
                                <div class="collapse" id="siebar-experience">
                                    <ul class="nav-second-level">

                                        <li>
                                            <a href="{{route('experience.create')}}">Create</a>
                                        </li>
                                         <li>
                                            <a href="{{route('experience.index')}}">Manage</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                           <!-- ============= -->

                            <li>
                                <a href="#siebar-project" data-bs-toggle="collapse">
                                    <i data-feather="file-plus"></i>
                                    <span> Portfolio </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="siebar-project">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{route('categories.index')}}">Category</a>
                                        </li>
                                        
                                        <li>
                                            <a href="{{route('portfolio.index')}}"> Portfolio</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- nav items end -->

                            <li>
                                <a href="#siebar-blog" data-bs-toggle="collapse">
                                    <i data-feather="file-plus"></i>
                                    <span> Blog </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="siebar-blog">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{route('blog.index')}}">Create</a>
                                        </li>
                                        
                                        <li>
                                            <a href="{{route('blog.index')}}"> Manage</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!-- nav items end -->
                            
                            <li class="menu-title mt-2">Website Setting</li>
                            <li>
                                <a href="#siebar-sitesetting" data-bs-toggle="collapse">
                                    <i data-feather="settings"></i>
                                    <span> Site Setting </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="siebar-sitesetting">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{route('settings.index')}}">General Setting</a>
                                        </li>
                                       
                                        
                                        
                                    </ul>
                                </div>
                            </li>
                            <!-- nav items end -->
                        </ul>
                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>
                </div>
                <!-- Sidebar -left -->
            </div>
            <!-- Left Sidebar End -->

            <div class="content-page">
                <div class="content">
                    @yield('content')
                </div>
                <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">&copy; {{$generalsetting->name}} Designed and Developed by <a href="https://websolutionit.com/">websolutionit.com</a></div>
                            <div class="col-md-6">
                               
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->
            </div>
        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-bordered nav-justified" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link py-2" data-bs-toggle="tab" href="#chat-tab" role="tab">
                            <i class="mdi mdi-message-text d-block font-22 my-1"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-2" data-bs-toggle="tab" href="#tasks-tab" role="tab">
                            <i class="mdi mdi-format-list-checkbox d-block font-22 my-1"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-2 active" data-bs-toggle="tab" href="#settings-tab" role="tab">
                            <i class="mdi mdi-cog-outline d-block font-22 my-1"></i>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content pt-0">
                    <div class="tab-pane" id="chat-tab" role="tabpanel">
                        <form class="search-bar p-3">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search..." />
                                <span class="mdi mdi-magnify"></span>
                            </div>
                        </form>
                    </div>

                    <div class="tab-pane" id="tasks-tab" role="tabpanel">
                        <h6 class="fw-medium p-3 m-0 text-uppercase">Working Tasks</h6>
                    </div>
                    <div class="tab-pane active" id="settings-tab" role="tabpanel">
                        <h6 class="fw-medium px-3 m-0 py-2 font-13 text-uppercase bg-light">
                            <span class="d-block py-1">Theme Settings</span>
                        </h6>

                        <div class="p-3">
                            <div class="alert alert-warning" role="alert"><strong>Customize </strong> the overall color scheme, sidebar menu, etc.</div>

                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Color Scheme</h6>
                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="layout-color" value="light" id="light-mode-check" checked />
                                <label class="form-check-label" for="light-mode-check">Light Mode</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="layout-color" value="dark" id="dark-mode-check" />
                                <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
                            </div>

                            <!-- Width -->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Width</h6>
                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="layout-width" value="fluid" id="fluid-check" checked />
                                <label class="form-check-label" for="fluid-check">Fluid</label>
                            </div>
                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="layout-width" value="boxed" id="boxed-check" />
                                <label class="form-check-label" for="boxed-check">Boxed</label>
                            </div>

                            <!-- Menu positions -->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Menus (Leftsidebar and Topbar) Positon</h6>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="menu-position" value="fixed" id="fixed-check" checked />
                                <label class="form-check-label" for="fixed-check">Fixed</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="menu-position" value="scrollable" id="scrollable-check" />
                                <label class="form-check-label" for="scrollable-check">Scrollable</label>
                            </div>

                            <!-- Left Sidebar-->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Left Sidebar Color</h6>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftbar-color" value="light" id="light-check" />
                                <label class="form-check-label" for="light-check">Light</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftbar-color" value="dark" id="dark-check" checked />
                                <label class="form-check-label" for="dark-check">Dark</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftbar-color" value="brand" id="brand-check" />
                                <label class="form-check-label" for="brand-check">Brand</label>
                            </div>

                            <div class="form-check form-switch mb-3">
                                <input type="checkbox" class="form-check-input" name="leftbar-color" value="gradient" id="gradient-check" />
                                <label class="form-check-label" for="gradient-check">Gradient</label>
                            </div>

                            <!-- size -->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Left Sidebar Size</h6>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftbar-size" value="default" id="default-size-check" checked />
                                <label class="form-check-label" for="default-size-check">Default</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftbar-size" value="condensed" id="condensed-check" />
                                <label class="form-check-label" for="condensed-check">Condensed <small>(Extra Small size)</small></label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftbar-size" value="compact" id="compact-check" />
                                <label class="form-check-label" for="compact-check">Compact <small>(Small size)</small></label>
                            </div>

                            <!-- User info -->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Sidebar User Info</h6>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="sidebar-user" value="fixed" id="sidebaruser-check" />
                                <label class="form-check-label" for="sidebaruser-check">Enable</label>
                            </div>

                            <!-- Topbar -->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Topbar</h6>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="topbar-color" value="dark" id="darktopbar-check" checked />
                                <label class="form-check-label" for="darktopbar-check">Dark</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="topbar-color" value="light" id="lighttopbar-check" />
                                <label class="form-check-label" for="lighttopbar-check">Light</label>
                            </div>
                            {{--
                            <div class="d-grid mt-4">
                                <button class="btn btn-primary" id="resetBtn">Reset to Default</button>
                                <a href="https://1.envato.market/uboldadmin" class="btn btn-danger mt-3" target="_blank"><i class="mdi mdi-basket me-1"></i> Purchase Now</a>
                            </div>
                            --}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="{{asset('public/backEnd/')}}/assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="{{asset('public/backEnd/')}}/assets/js/app.min.js"></script>
         <script src="{{asset('public/backEnd/')}}/assets/summernote-lite/summernote-lite.js"></script>
        <script src="{{asset('public/backEnd/')}}/assets/js/toastr.min.js"></script>
        {!! Toastr::message() !!}
        <script src="{{asset('public/backEnd/')}}/assets/js/sweetalert.min.js"></script>
        <script type="text/javascript">
            $(".delete-confirm").click(function (event) {
                var form = $(this).closest("form");
                event.preventDefault();
                swal({
                    title: `Are you sure you want to delete this record?`,
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
            });
            $(".change-confirm").click(function (event) {
                var form = $(this).closest("form");
                event.preventDefault();
                swal({
                    title: `Are you sure you want to change this record?`,
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
            });
        </script>
       
<!-- summernote -->
        <script>
              $('.summernote').summernote({
                height:250,
                callbacks: {
              // Clear all formatting of the pasted text
              onPaste: function (e) {
                var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
                e.preventDefault();
                setTimeout( function(){
                  document.execCommand( 'insertText', false, bufferText );
                }, 300 );

              }
            }
              });
            </script>

        @yield('script')
    </body>
</html>
