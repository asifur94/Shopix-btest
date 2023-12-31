<!doctype html>
<html lang="en" data-layout="vertical" data-sidebar="dark" data-sidebar-size="lg" data-preloader="disable"
    data-theme="default" data-topbar="light" data-bs-theme="light">


<head>

    <meta charset="utf-8">
    <title>

        Dashbord
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Minimal Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- App favicon -->

    @if(!empty(getwebsitetopdata()->fabicon))
    <link rel="shortcut icon" href="{{ asset('uploads/logos/'.getwebsitetopdata()->fabicon) }}">

    @else
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    @endif

    <!-- Fonts css load -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link id="fontsLink" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- jsvectormap css -->
    <link href="assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css">

    <!-- Layout config Js -->
    <script src="{{ asset('admin/') }}assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css">
    <!-- custom Css-->
    <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css">


    <!-- Dropzone -->
    <link rel="stylesheet" href="{{ asset('admin/assets2/') }}/assets/plugins/dropzone/dropzone.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/basic.min.css"
        integrity="sha512-MeagJSJBgWB9n+Sggsr/vKMRFJWs+OUphiDV7TJiYu+TNQD9RtVJaPDYP8hA/PAjwRnkdvU+NsTncYTKlltgiw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('admin/assets2/') }}/admin/assets/css/custom.css">

    {{-- For summernote --}}
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>


    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('admin/assets2/assets/plugins/fontawesome-free/css/all.min.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('admin/assets2/assets/css/adminlte.min.css?v=3.2.0') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('admin/assets2/assets/plugins/summernote/summernote-bs4.min.css') }}"> --}}

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->

            @if (!empty(getwebsitetopdata()->header_logo))

                <div class="navbar-brand-box">
                    <a href="{{ route('admin.dashbord.index') }}" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{  asset('uploads/logos/'.getwebsitetopdata()->header_logo)  }}" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="{{  asset('uploads/logos/'.getwebsitetopdata()->header_logo)  }}" alt="" height="22">
                        </span>
                    </a>
                    <a href="{{ route('admin.dashbord.index') }}" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{  asset('uploads/logos/'.getwebsitetopdata()->header_logo)  }}" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="{{  asset('uploads/logos/'.getwebsitetopdata()->header_logo)  }}" alt="" height="22">
                        </span>
                    </a>
                    <button type="button" class="btn btn-sm p-0 fs-3xl header-item float-end btn-vertical-sm-hover"
                        id="vertical-hover">
                        <i class="ri-record-circle-line"></i>
                    </button>
                </div>
            @else
            <div class="navbar-brand-box">
                <a href="{{ route('admin.dashbord.index') }}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('admin/') }}/assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('admin/') }}/assets/images/logo-dark.png" alt="" height="22">
                    </span>
                </a>
                <a href="{{ route('admin.dashbord.index') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('admin/') }}/assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('admin/') }}/assets/images/logo-light.png" alt="" height="22">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-3xl header-item float-end btn-vertical-sm-hover"
                    id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>
            @endif


            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">

                        <li class="menu-title"><span data-key="t-menu">Menu</span></li>



                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ route('admin.dashbord.index') }}">
                                <i class="ph-gauge"></i> <span data-key="t-Dashboard">Dashboard</span>
                            </a>
                        </li>




                        <li class="nav-item">
                            <a class="nav-link menu-link collapsed " href="#sidebarLayouts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                                <i class="ph-layout"></i> <span data-key="t-layouts">Manage Orders</span> <span class="badge badge-pill bg-danger" data-key="t-hot">11</span>
                            </a>
                            <div class="collapse menu-dropdown  {{ Request::routeIs('admin.plaseorder.index') ? 'show' : '' }}
                                                                {{ Request::routeIs('admin.rejected.index') ? 'show' : '' }}
                                                                {{ Request::routeIs('admin.conframorder.index') ? 'show' : '' }}
                                                                {{ Request::routeIs('admin.porssising.index') ? 'show' : '' }}
                                                                {{ Request::routeIs('admin.transit.index') ? 'show' : '' }}
                                                                {{ Request::routeIs('admin.delivered.index') ? 'show' : '' }}
                                                                {{ Request::routeIs('admin.canceled.index') ? 'show' : '' }}
                                                                {{ Request::routeIs('admin.fakeorder.index') ? 'show' : '' }}
                            " id="sidebarLayouts">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ route('admin.plaseorder.index') }}"  class="nav-link  {{ Request::routeIs('admin.plaseorder.index') ? 'active' : '' }}" data-key="t-horizontal">PLACE ORDER</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('admin.rejected.index') }}"  class="nav-link  {{ Request::routeIs('admin.rejected.index') ? 'active' : '' }}" data-key="t-horizontal">ORDER REJECTED</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('admin.conframorder.index') }}"  class="nav-link   {{ Request::routeIs('admin.conframorder.index') ? 'active' : '' }}" data-key="t-horizontal">CONFRIMED ORDER</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('admin.porssising.index') }}"  class="nav-link {{ Request::routeIs('admin.porssising.index') ? 'active' : '' }}" data-key="t-horizontal">PRODUCTES PROCESSING</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('admin.transit.index') }}"  class="nav-link {{ Request::routeIs('admin.transit.index') ? 'active' : '' }}" data-key="t-horizontal">PRODUCTS IN TRANSIT</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('admin.delevery.index') }}"  class="nav-link  {{ Request::routeIs('admin.delevery.index') ? 'active' : '' }}" data-key="t-horizontal">DELIVERED ORDER</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('admin.canceled.index') }}"  class="nav-link  {{ Request::routeIs('admin.canceled.index') ? 'active' : '' }}" data-key="t-horizontal">CANCELED ORDER</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('admin.fakeorder.index') }}"  class="nav-link {{ Request::routeIs('admin.fakeorder.index') ? 'active' : '' }}" data-key="t-horizontal">FAKE ORDER</a>
                                    </li>


                                </ul>
                            </div>
                        </li>

                        <li class="menu-title"><i class="ri-product-hunt-fill"></i> <span data-key="t-apps">Apps</span></li>





                        <li class="nav-item">
                            <a href="{{ route('admin.productlist.index') }}" class="nav-link menu-link {{ Request::routeIs('admin.productlist.index') ? 'active' : '' }} {{ Request::routeIs('admin.product.create') ? 'active' : '' }}"> <i class="ph-envelope"></i> <span data-key="t-email">Manage Product</span> </a>
                        </li>

                        <li class="nav-item">
                            <a href="#sidebarEcommerce" class="nav-link menu-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarEcommerce">
                                <i class="ph-storefront"></i> <span data-key="t-ecommerce">Shipping</span>
                            </a>
                            <div class="collapse menu-dropdown {{ Request::routeIs('admin.shipping.create') ? 'show' : '' }}" id="sidebarEcommerce">
                                <ul class="nav nav-sm flex-column">
                                    {{-- <li class="nav-item">
                                        <a href="#" class="nav-link" data-key="t-products">Add Area</a>
                                    </li> --}}
                                    <li class="nav-item">
                                        <a href="{{ route('admin.shipping.create') }}" class="nav-link  {{ Request::routeIs('admin.shipping.create') ? 'active' : '' }}" data-key="t-products-grid">Manage Shipping</a>
                                    </li>






                                </ul>
                            </div>
                        </li>



                        <li class="nav-item">
                            <a href="#sidebarLearning" class="nav-link menu-link  collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLearning">
                                <i class="ph-graduation-cap"></i> <span data-key="t-learning">Website Setup</span>
                            </a>
                            <div class="collapse menu-dropdown  {{ Request::routeIs('admin.website.editindex') ? 'show' : '' }}" id="sidebarLearning">

                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ route('admin.website.editindex') }}" class="nav-link  {{ Request::routeIs('admin.website.editindex') ? 'active' : '' }}" data-key="t-overview">General Setting</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#sidebarStudent" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarStudent" data-key="t-students">Banners</a>
                                        <div class="collapse menu-dropdown" id="sidebarStudent">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link" data-key="t-my-subscriptions">Slider</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link" data-key="t-my-courses">Topbar Banner</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link" data-key="t-my-courses">Offer Notice</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link" data-key="t-my-courses">Website Banners</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link" data-key="t-my-courses">Banners Timers</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link" data-key="t-my-courses">Middle Banners</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#" class="nav-link" data-key="t-overview">Billing & Shipping</a>
                                    </li>
                                </ul>
                            </div>
                        </li>





                        <li class="nav-item">
                            <a href="#sidebarRealeEstate" class="nav-link menu-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarRealeEstate">
                                <i class="ph-buildings"></i> <span data-key="t-real-estate">Settings</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarRealeEstate">
                                <ul class="nav nav-sm flex-column">



                                    <li class="nav-item">
                                        <a href="{{ route('admin.logistics.index') }}" class="nav-link" data-key="t-property-overview">Logistics Setup</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#sidebarAgent" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAgent" data-key="t-agent">SMS Service</a>
                                        <div class="collapse menu-dropdown" id="sidebarAgent">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="{{ route('admin.smsconfig.index') }}" class="nav-link" data-key="t-list-view">SMS Configration</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="{{ route('admin.smstemplate.index') }}" class="nav-link" data-key="t-grid-view">SMS Template</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </li>



                                </ul>
                            </div>
                        </li>






                    </ul>
                </div>
                <!-- Sidebar -->
            </div>

            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>
        <header id="page-topbar">
            <div class="layout-width">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box horizontal-logo">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{ asset('admin/') }}/assets/images/logo-sm.png" alt=""
                                        height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('admin/') }}/assets/images/logo-dark.png" alt=""
                                        height="22">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{ asset('admin/') }}/assets/images/logo-sm.png" alt=""
                                        height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('admin/') }}/assets/images/logo-light.png" alt=""
                                        height="22">
                                </span>
                            </a>
                        </div>

                        <button type="button"
                            class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger shadow-none"
                            id="topnav-hamburger-icon">
                            <span class="hamburger-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>

                        <form class="app-search d-none d-md-inline-flex">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search..."
                                    autocomplete="off" id="search-options" value="">
                                <span class="mdi mdi-magnify search-widget-icon"></span>
                                <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none"
                                    id="search-close-options"></span>
                            </div>
                            <div class="dropdown-menu dropdown-menu-lg" id="search-dropdown">
                                <div data-simplebar style="max-height: 320px;">
                                    <!-- item-->
                                    <div class="dropdown-header">
                                        <h6 class="text-overflow text-muted mb-0 text-uppercase">Recent Searches</h6>
                                    </div>

                                    <div class="dropdown-item bg-transparent text-wrap">
                                        <a href="index.html" class="btn btn-subtle-secondary btn-sm btn-rounded">how
                                            to setup <i class="mdi mdi-magnify ms-1"></i></a>
                                        <a href="index.html"
                                            class="btn btn-subtle-secondary btn-sm btn-rounded">buttons <i
                                                class="mdi mdi-magnify ms-1"></i></a>
                                    </div>
                                    <!-- item-->
                                    <div class="dropdown-header mt-2">
                                        <h6 class="text-overflow text-muted mb-1 text-uppercase">Pages</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="ri-bubble-chart-line align-middle fs-18 text-muted me-2"></i>
                                        <span>Analytics Dashboard</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="ri-lifebuoy-line align-middle fs-18 text-muted me-2"></i>
                                        <span>Help Center</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="ri-user-settings-line align-middle fs-18 text-muted me-2"></i>
                                        <span>My account settings</span>
                                    </a>

                                    <!-- item-->
                                    <div class="dropdown-header mt-2">
                                        <h6 class="text-overflow text-muted mb-2 text-uppercase">Members</h6>
                                    </div>

                                    <div class="notification-list">
                                        <!-- item -->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                            <div class="d-flex">
                                                <img src="{{ asset('admin/') }}/assets/images/users/avatar-2.jpg"
                                                    class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                <div class="flex-1">
                                                    <h6 class="m-0">Angela Bernier</h6>
                                                    <span class="fs-11 mb-0 text-muted">Manager</span>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- item -->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                            <div class="d-flex">
                                                <img src="{{ asset('admin/') }}/assets/images/users/avatar-3.jpg"
                                                    class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                <div class="flex-1">
                                                    <h6 class="m-0">David Grasso</h6>
                                                    <span class="fs-11 mb-0 text-muted">Web Designer</span>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- item -->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                            <div class="d-flex">
                                                <img src="{{ asset('admin/') }}/assets/images/users/avatar-5.jpg"
                                                    class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                <div class="flex-1">
                                                    <h6 class="m-0">Mike Bunch</h6>
                                                    <span class="fs-11 mb-0 text-muted">React Developer</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="text-center pt-3 pb-1">
                                    <a href="#" class="btn btn-primary btn-sm">View All Results <i
                                            class="ri-arrow-right-line ms-1"></i></a>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="d-flex align-items-center">











                        <div class="dropdown topbar-head-dropdown ms-1 header-item" id="notificationDropdown">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle"
                                id="page-header-notifications-dropdown" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                                <i class='bi bi-bell fs-2xl'></i>
                                <span
                                    class="position-absolute topbar-badge fs-3xs translate-middle badge rounded-pill bg-danger"><span
                                        class="notification-badge">4</span><span class="visually-hidden">unread
                                        messages</span></span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-notifications-dropdown">

                                <div class="dropdown-head rounded-top">
                                    <div class="p-3 border-bottom border-bottom-dashed">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="mb-0 fs-lg fw-semibold"> Notifications <span
                                                        class="badge bg-danger-subtle text-danger fs-sm notification-badge">
                                                        4</span></h6>
                                                <p class="fs-md text-muted mt-1 mb-0">You have <span
                                                        class="fw-semibold notification-unread">3</span> unread
                                                    messages</p>
                                            </div>
                                            <div class="col-auto dropdown">
                                                <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                                    class="link-secondary fs-md"><i
                                                        class="bi bi-three-dots-vertical"></i></a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">All Clear</a></li>
                                                    <li><a class="dropdown-item" href="#">Mark all as read</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#">Archive All</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="py-2 ps-2" id="notificationItemsTabContent">
                                    <div data-simplebar style="max-height: 300px;" class="pe-2">
                                        <h6
                                            class="text-overflow text-muted fs-sm my-2 text-uppercase notification-title">
                                            New</h6>
                                        <div
                                            class="text-reset notification-item d-block dropdown-item position-relative unread-message">
                                            <div class="d-flex">
                                                <div class="avatar-xs me-3 flex-shrink-0">
                                                    <span
                                                        class="avatar-title bg-info-subtle text-info rounded-circle fs-lg">
                                                        <i class="bx bx-badge-check"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <a href="#!" class="stretched-link">
                                                        <h6 class="mt-0 fs-md mb-2 lh-base">Your <b>Elite</b> author
                                                            Graphic
                                                            Optimization <span class="text-secondary">reward</span> is
                                                            ready!
                                                        </h6>
                                                    </a>
                                                    <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                        <span><i class="mdi mdi-clock-outline"></i> Just 30 sec
                                                            ago</span>
                                                    </p>
                                                </div>
                                                <div class="px-2 fs-base">
                                                    <div class="form-check notification-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="all-notification-check01">
                                                        <label class="form-check-label"
                                                            for="all-notification-check01"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="text-reset notification-item d-block dropdown-item position-relative unread-message">
                                            <div class="d-flex">
                                                <div class="position-relative me-3 flex-shrink-0">
                                                    <img src="{{ asset('admin/') }}/assets/images/users/32/avatar-2.jpg"
                                                        class="rounded-circle avatar-xs" alt="user-pic">
                                                    <span
                                                        class="active-badge position-absolute start-100 translate-middle p-1 bg-success rounded-circle">
                                                        <span class="visually-hidden">New alerts</span>
                                                    </span>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <a href="#!" class="stretched-link">
                                                        <h6 class="mt-0 mb-1 fs-md fw-semibold">Angela Bernier</h6>
                                                    </a>
                                                    <div class="fs-sm text-muted">
                                                        <p class="mb-1">Answered to your comment on the cash flow
                                                            forecast's graph 🔔.</p>
                                                    </div>
                                                    <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                        <span><i class="mdi mdi-clock-outline"></i> 48 min ago</span>
                                                    </p>
                                                </div>
                                                <div class="px-2 fs-base">
                                                    <div class="form-check notification-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="all-notification-check02">
                                                        <label class="form-check-label"
                                                            for="all-notification-check02"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="text-reset notification-item d-block dropdown-item position-relative unread-message">
                                            <div class="d-flex">
                                                <div class="avatar-xs me-3 flex-shrink-0">
                                                    <span
                                                        class="avatar-title bg-danger-subtle text-danger rounded-circle fs-lg">
                                                        <i class='bx bx-message-square-dots'></i>
                                                    </span>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <a href="#!" class="stretched-link">
                                                        <h6 class="mt-0 mb-2 fs-md lh-base">You have received <b
                                                                class="text-success">20</b> new messages in the
                                                            conversation
                                                        </h6>
                                                    </a>
                                                    <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                        <span><i class="mdi mdi-clock-outline"></i> 2 hrs ago</span>
                                                    </p>
                                                </div>
                                                <div class="px-2 fs-base">
                                                    <div class="form-check notification-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="all-notification-check03">
                                                        <label class="form-check-label"
                                                            for="all-notification-check03"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <h6
                                            class="text-overflow text-muted fs-sm my-2 text-uppercase notification-title">
                                            Read Before</h6>

                                        <div
                                            class="text-reset notification-item d-block dropdown-item position-relative">
                                            <div class="d-flex">

                                                <div class="position-relative me-3 flex-shrink-0">
                                                    <img src="{{ asset('admin/') }}/assets/images/users/32/avatar-8.jpg"
                                                        class="rounded-circle avatar-xs" alt="user-pic">
                                                    <span
                                                        class="active-badge position-absolute start-100 translate-middle p-1 bg-warning rounded-circle">
                                                        <span class="visually-hidden">New alerts</span>
                                                    </span>
                                                </div>

                                                <div class="flex-grow-1">
                                                    <a href="#!" class="stretched-link">
                                                        <h6 class="mt-0 mb-1 fs-md fw-semibold">Maureen Gibson</h6>
                                                    </a>
                                                    <div class="fs-sm text-muted">
                                                        <p class="mb-1">We talked about a project on linkedin.</p>
                                                    </div>
                                                    <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                        <span><i class="mdi mdi-clock-outline"></i> 4 hrs ago</span>
                                                    </p>
                                                </div>
                                                <div class="px-2 fs-base">
                                                    <div class="form-check notification-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="all-notification-check04">
                                                        <label class="form-check-label"
                                                            for="all-notification-check04"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="notification-actions" id="notification-actions">
                                        <div class="d-flex text-muted justify-content-center align-items-center">
                                            Select <div id="select-content" class="text-body fw-semibold px-1">0</div>
                                            Result <button type="button" class="btn btn-link link-danger p-0 ms-2"
                                                data-bs-toggle="modal"
                                                data-bs-target="#removeNotificationModal">Remove</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown ms-sm-3 header-item topbar-user">
                            <button type="button" class="btn shadow-none" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <img class="rounded-circle header-profile-user"
                                        src="assets/images/users/32/avatar-1.jpg" alt="Header Avatar">
                                    <span class="text-start ms-xl-2">
                                        <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">{{Auth::guard('admin')->user()->name}}</span>
                                        <span class="d-none d-xl-block ms-1 fs-sm user-name-sub-text">Admin</span>
                                    </span>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->

                                <a class="dropdown-item" href="profile.html"><i
                                        class="mdi mdi-account-circle text-muted fs-lg align-middle me-1"></i> <span
                                        class="align-middle">Profile</span></a>

                                <a class="dropdown-item" href="{{ route('login.locked') }}"><i
                                        class="mdi mdi-lock text-muted fs-lg align-middle me-1"></i> <span
                                        class="align-middle">Lock screen</span></a>
                                <a onclick="event.preventDefault();
                                document.getElementById('logout-form-admin').submit();"
                                    class="dropdown-item" href="{{ route('admin.logout') }}"><i
                                        class="mdi mdi-logout text-muted fs-lg align-middle me-1"></i> <span
                                        class="align-middle" data-key="t-logout">Logout</span></a>




                                <form id="logout-form-admin" action="{{ route('admin.logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>



        <!-- removeNotificationModal -->
        <div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            id="NotificationModalbtn-close"></button>
                    </div>
                    <div class="modal-body p-md-5">
                        <div class="text-center">
                            <div class="text-danger">
                                <i class="bi bi-trash display-4"></i>
                            </div>
                            <div class="mt-4 fs-base">
                                <h4 class="mb-1">Are you sure ?</h4>
                                <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                            </div>
                        </div>
                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete
                                It!</button>
                        </div>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!-- removeCartModal -->
        <div id="removeCartModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            id="close-cartmodal"></button>
                    </div>
                    <div class="modal-body p-md-5">
                        <div class="text-center">
                            <div class="text-danger">
                                <i class="bi bi-trash display-5"></i>
                            </div>
                            <div class="mt-4">
                                <h4>Are you sure ?</h4>
                                <p class="text-muted mx-4 mb-0">Are you sure you want to remove this product ?</p>
                            </div>
                        </div>
                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn w-sm btn-danger" id="remove-cartproduct">Yes, Delete
                                It!</button>
                        </div>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- removeNotificationModal -->
        <div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            id="NotificationModalbtn-close"></button>
                    </div>
                    <div class="modal-body p-md-5">
                        <div class="text-center">
                            <div class="text-danger">
                                <i class="bi bi-trash display-4"></i>
                            </div>
                            <div class="mt-4 fs-base">
                                <h4 class="mb-1">Are you sure ?</h4>
                                <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                            </div>
                        </div>
                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete
                                It!</button>
                        </div>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!-- removeCartModal -->
        <div id="removeCartModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            id="close-cartmodal"></button>
                    </div>
                    <div class="modal-body p-md-5">
                        <div class="text-center">
                            <div class="text-danger">
                                <i class="bi bi-trash display-5"></i>
                            </div>
                            <div class="mt-4">
                                <h4>Are you sure ?</h4>
                                <p class="text-muted mx-4 mb-0">Are you sure you want to remove this product ?</p>
                            </div>
                        </div>
                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn w-sm btn-danger" id="remove-cartproduct">Yes, Delete
                                It!</button>
                        </div>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
