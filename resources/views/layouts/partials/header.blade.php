<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- Mirrored from themezhub.net/workstock-2/work-stocks/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Mar 2021 13:53:50 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>

    <!-- All Plugins Css -->
    <link href="{{asset('css/plugins.css')}}" rel="stylesheet">


    <!-- Custom CSS -->
    <link href="{{asset('css/styles.css')}}" rel="stylesheet">

    <!-- Custom Color -->
    <link href="{{asset('css/skin/default.css')}}" rel="stylesheet">
</head>

<body class="green-skin">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="Loader"></div>

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">

        <!-- ============================================================== -->
        <!-- Top header  -->
        <!-- ============================================================== -->
        <!-- Start Navigation -->
        <div class="header header-light">
            <div class="container-fluid">
                <nav id="navigation" class="navigation navigation-landscape">
                    <div class="nav-header">
                        <a class="nav-brand" href="#">
                            <img src="img/logo.png" class="logo" alt="" />
                        </a>
                        <div class="nav-toggle"></div>
                    </div>
                    <div class="nav-menus-wrapper" style="transition-property: none;">
                        <ul class="nav-menu">

                            <li class="active"><a href="#">Home<span class="submenu-indicator"></span></a>
                                <ul class="nav-dropdown nav-submenu" style="right: auto; display: none;">
                                    <li><a href="index.html" class="active">Home Style 1</a></li>
                                    <li><a href="home-2.html">Home Style 2</a></li>
                                    <li><a href="home-3.html">Home Style 3</a></li>
                                    <li><a href="home-4.html">Home Style 4</a></li>
                                    <li><a href="home-5.html">Home Style 5</a></li>
                                    <li><a href="home-6.html">Home Style 6</a></li>
                                    <li><a href="home-7.html">Home Style 7</a></li>
                                    <li><a href="home-8.html">Home Style 8</a></li>
                                </ul>
                            </li>

                            <li><a href="#">For Candidates<span class="submenu-indicator"></span></a>
                                <ul class="nav-dropdown nav-submenu" style="right: auto; display: none;">
                                    <li><a href="#">Search job Option<span class="submenu-indicator"></span></a>
                                        <ul class="nav-dropdown nav-submenu" style="display: none;">
                                            <li><a href="search-full-width.html">Search Job Full Width</a></li>
                                            <li><a href="search-with-sidebar.html">Search Job with Sidebar</a></li>
                                            <li><a href="search-with-sidebar-2.html">Search job with Sidebar 2</a></li>
                                            <li><a href="search-with-sidebar-3.html">Search Job with Sidebar 3</a></li>
                                            <li><a href="search-with-detail-job.html">Search job With Detail</a></li>
                                            <li><a href="search-with-sidebar-list.html">Search Jobs List</a></li>
                                            <li><a href="search-with-sidebar-list-2.html">Search jobs List 2</a></li>
                                            <li><a href="employers-list.html">Search Employers Sidebar</a></li>
                                            <li><a href="freelancer-detail.html">Employers Detail</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Map Option<span class="submenu-indicator"></span></a>
                                        <ul class="nav-dropdown nav-submenu" style="display: none;">
                                            <li><a href="half-map-grid.html">Find Job On Map</a></li>
                                            <li><a href="half-map-list.html">Fins Job On Map List</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Job Detail<span class="submenu-indicator"></span></a>
                                        <ul class="nav-dropdown nav-submenu" style="display: none;">
                                            <li><a href="job-detail.html">Single Job 1</a></li>
                                            <li><a href="job-detail-2.html">Single Job 2</a></li>
                                            <li><a href="job-detail-3.html">Single Job 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="candidate-dashboard.html">Candidate Dashboard</a></li>
                                </ul>
                            </li>

                            <li><a href="#">For Employers<span class="submenu-indicator"></span></a>
                                <ul class="nav-dropdown nav-submenu" style="right: auto; display: none;">
                                    <li><a href="candidate-grid.html">Browse Candidates Grid</a></li>
                                    <li><a href="candidate-list.html">Browse Candidates List</a></li>
                                    <li><a href="search-freelancers.html">Search Freelancers</a></li>
                                    <li><a href="search-freelancers-list.html">Search Freelancers List</a></li>
                                    <li><a href="freelancer-detail.html">Freelancer Detail</a></li>
                                    <li><a href="#">Search with Map<span class="submenu-indicator"></span></a>
                                        <ul class="nav-dropdown nav-submenu" style="display: none;">
                                            <li><a href="browse-candidates-with-map-grid.html">Search Candidate Grid</a>
                                            </li>
                                            <li><a href="browse-candidates-with-map.html">Search Candidate List</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="employer-dashboard.html">Employer Dashboard</a></li>
                                </ul>
                            </li>

                            <li><a href="#">Pages<span class="submenu-indicator"></span></a>
                                <ul class="nav-dropdown nav-submenu" style="right: auto; display: none;">
                                    <li><a href="blog.html">Blogs Page</a></li>
                                    <li><a href="blog-detail.html">Blog Detail</a></li>
                                    <li><a href="shortcodes.html">Shortcodes</a></li>
                                    <li><a href="pricing.html">Pricing</a></li>
                                    <li><a href="employers-full-width.html">Find Employers</a></li>
                                    <li><a href="all-jobs.html">Jobs Widgets</a></li>
                                    <li><a href="login.html">LogIn</a></li>
                                </ul>
                            </li>

                            <li><a href="contact.html">Contacts</a></li>

                        </ul>

                        <ul class="nav-menu nav-menu-social align-to-right">

                            <li>
                                <a href="#" data-toggle="modal" data-target="#login">
                                    <i class="ti-user mr-1"></i><span class="dn-lg">Login/Register</span>
                                </a>
                            </li>
                            <li class="add-listing theme-bg">
                                <a href="#">
                                    <i class="ti-plus"></i> Post Job
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- End Navigation -->
        <div class="clearfix"></div>
        <!-- ============================================================== -->
        <!-- Top header  -->
        <!-- ============================================================== -->
