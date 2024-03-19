<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Elisyam - Dashboard (Dark Version)</title>
    <meta name="description" content="Elisyam is a Web App and Admin Dashboard Template built with Bootstrap 4">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Google Fonts -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Montserrat:400,500,600,700","Noto+Sans:400,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('AdminAssets/img/apple-touch-icon.png')}}">
   <link rel="icon" type="image/png" sizes="16x16" href="{{asset('AdminAssets/img/favicon-16x16.png')}}">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('AdminAssets/vendors/css/base/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('AdminAssets/vendors/css/bootstrap-select/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('AdminAssets/vendors/css/base/elisyam-1.5-dark.min.css')}}">
    <link rel="stylesheet" href="{{asset('AdminAssets/css/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('AdminAssets/css/owl-carousel/owl.theme.min.css')}}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body id="page-top">

<div class="page">
    <!-- Begin Header -->
    <header class="header">
        <nav class="navbar fixed-top">
            <!-- Begin Search Box-->
            <div class="search-box">
                <button class="dismiss"><i class="ion-close-round"></i></button>
                <form id="searchForm" action="#" role="search">
                    <input type="search" placeholder="Search something ..." class="form-control">
                </form>
            </div>
            <!-- End Search Box-->
            <!-- Begin Topbar -->
            <div class="navbar-holder d-flex align-items-center align-middle justify-content-between">
                <!-- Begin Logo -->
                <div class="navbar-header">
                    <a href="db-default.html" class="navbar-brand">
                        <div class="brand-image brand-big">
                            <img src="{{asset('AdminAssets/img/logo-big-2.png')}}" alt="logo" class="logo-big">
                        </div>
                        <div class="brand-image brand-small">
                            <img src="{{asset('AdminAssets/img/logo-2.png')}}" alt="logo" class="logo-small">
                        </div>
                    </a>
                    <!-- Toggle Button -->
                    <a id="toggle-btn" href="#" class="menu-btn active">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                    <!-- End Toggle -->
                </div>
                <!-- End Logo -->
                <!-- Begin Navbar Menu -->
                <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center pull-right">
                    <!-- User -->
                    <li class="nav-item dropdown"><a id="user" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><img src="{{asset('AdminAssets/img/avatar/avatar-01.jpg')}}" alt="..." class="avatar rounded-circle"></a>
                        <ul aria-labelledby="user" class="user-size dropdown-menu">
                            <li class="welcome">
                                <a href="#" class="edit-profil"><i class="la la-gear"></i></a>
                                <img src="{{asset('AdminAssets/img/avatar/avatar-01.jpg')}}" alt="..." class="rounded-circle">
                            </li>
                            <li>
                                <a href="pages-profile.html" class="dropdown-item">
                                    Profile
                                </a>
                            </li>
                            <li>
                                <a href="app-mail.html" class="dropdown-item">
                                    Messages
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item no-padding-bottom">
                                    Settings
                                </a>
                            </li>
                            <li class="separator"></li>
                            <li>
                                <a href="pages-faq.html" class="dropdown-item no-padding-top">
                                    Faq
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="{{route('admin.logout')}}" class="dropdown-item logout text-center">
                                    <i class="fas fa-power-off">
                                    </i></a></li>
                        </ul>
                    </li>
                    <!-- End User -->
                </ul>
                <!-- End Navbar Menu -->
            </div>
            <!-- End Topbar -->
        </nav>
    </header>
    <!-- End Header -->


    <!-- Begin Page Content -->
    <div class="page-content d-flex align-items-stretch">
        <div class="default-sidebar">
            <!-- Begin Side Navbar -->
            <nav class="side-navbar box-scroll sidebar-scroll">
                <!-- Begin Main Navigation -->
                <ul class="list-styled">
                    <a href="{{route('admin.home')}}" aria-expanded="false" ><span>Dashboard</span></a>
                </ul>
                <span class="heading">Pages</span>
                <ul class="list-styled">
                    <li><a href="#dropdown-page" aria-expanded="false" data-toggle="collapse"><span>Pages</span></a>
                        <ul id="dropdown-page" class="collapse list-unstyled show pt-0">
                            <li><a href="{{route('admin.kidkinder.kidkinder')}}">KidKinder</a></li>
                            <li><a href="{{route('admin.facility.facility')}}">Facilities</a></li>
                            <li><a href="{{route('admin.course.course')}}">Courses</a></li>
                            <li><a href="{{route('admin.teacher.teacher')}}">Teacher</a></li>
                            <li><a href="{{route('admin.blog.blog')}}">Blogs</a></li>
                            <li><a href="{{route('admin.review.review')}}">Reviews</a></li>
                            <li><a href="{{route('admin.contact_us.contact_us')}}">Contact Us Form</a></li>
                        </ul>
                    </li>
                </ul>
                <span class="heading">Auth</span>
                <ul class="list-styled">
                    <li><a href="#dropdown-authentication" aria-expanded="false" data-toggle="collapse"><span>User</span></a>
                        <ul id="dropdown-authentication" class="collapse list-unstyled show pt-0">
                            <li><a href="{{route('admin.profile.profile')}}">Profile</a></li>
                            <li><a href="{{route('admin.facility.facility')}}">Admin</a></li>
                            <li><a href="{{route('admin.logout')}}">Logout</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- End Main Navigation -->


            </nav>
            <!-- End Side Navbar -->


        </div>
        <!-- End Left Sidebar -->


