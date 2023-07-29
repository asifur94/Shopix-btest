@extends('admin.layoutsMain.adminapp')

@section('content')



    <div id="layout-wrapper">
        <div class="">
        <!-- ========== App Menu ========== -->

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
                                            <img src="assets/images/logo-sm.png" alt="" height="22">
                                        </span>
                                        <span class="logo-lg">
                                            <img src="assets/images/logo-dark.png" alt="" height="22">
                                        </span>
                                    </a>

                                    <a href="index.html" class="logo logo-light">
                                        <span class="logo-sm">
                                            <img src="assets/images/logo-sm.png" alt="" height="22">
                                        </span>
                                        <span class="logo-lg">
                                            <img src="assets/images/logo-light.png" alt="" height="22">
                                        </span>
                                    </a>
                                </div>

                                <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger shadow-none" id="topnav-hamburger-icon">
                                    <span class="hamburger-icon">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </span>
                                </button>

                                <form class="app-search d-none d-md-inline-flex">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Search..." autocomplete="off" id="search-options" value="">
                                        <span class="mdi mdi-magnify search-widget-icon"></span>
                                        <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none" id="search-close-options"></span>
                                    </div>
                                    <div class="dropdown-menu dropdown-menu-lg" id="search-dropdown">
                                        <div data-simplebar style="max-height: 320px;">
                                            <!-- item-->
                                            <div class="dropdown-header">
                                                <h6 class="text-overflow text-muted mb-0 text-uppercase">Recent Searches</h6>
                                            </div>

                                            <div class="dropdown-item bg-transparent text-wrap">
                                                <a href="index.html" class="btn btn-subtle-secondary btn-sm btn-rounded">how to setup <i class="mdi mdi-magnify ms-1"></i></a>
                                                <a href="index.html" class="btn btn-subtle-secondary btn-sm btn-rounded">buttons <i class="mdi mdi-magnify ms-1"></i></a>
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
                                                        <img src="assets/images/users/avatar-2.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                        <div class="flex-1">
                                                            <h6 class="m-0">Angela Bernier</h6>
                                                            <span class="fs-11 mb-0 text-muted">Manager</span>
                                                        </div>
                                                    </div>
                                                </a>
                                                <!-- item -->
                                                <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                                    <div class="d-flex">
                                                        <img src="assets/images/users/avatar-3.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                        <div class="flex-1">
                                                            <h6 class="m-0">David Grasso</h6>
                                                            <span class="fs-11 mb-0 text-muted">Web Designer</span>
                                                        </div>
                                                    </div>
                                                </a>
                                                <!-- item -->
                                                <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                                    <div class="d-flex">
                                                        <img src="assets/images/users/avatar-5.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                        <div class="flex-1">
                                                            <h6 class="m-0">Mike Bunch</h6>
                                                            <span class="fs-11 mb-0 text-muted">React Developer</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="text-center pt-3 pb-1">
                                            <a href="#" class="btn btn-primary btn-sm">View All Results <i class="ri-arrow-right-line ms-1"></i></a>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="d-flex align-items-center">











                                <div class="dropdown topbar-head-dropdown ms-1 header-item" id="notificationDropdown">
                                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle" id="page-header-notifications-dropdown" data-bs-toggle="dropdown"  data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                                        <i class='bi bi-bell fs-2xl'></i>
                                        <span class="position-absolute topbar-badge fs-3xs translate-middle badge rounded-pill bg-danger"><span class="notification-badge">4</span><span class="visually-hidden">unread messages</span></span>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">

                                        <div class="dropdown-head rounded-top">
                                            <div class="p-3 border-bottom border-bottom-dashed">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <h6 class="mb-0 fs-lg fw-semibold"> Notifications <span class="badge bg-danger-subtle text-danger fs-sm notification-badge"> 4</span></h6>
                                                        <p class="fs-md text-muted mt-1 mb-0">You have <span class="fw-semibold notification-unread">3</span> unread messages</p>
                                                    </div>
                                                    <div class="col-auto dropdown">
                                                        <a href="javascript:void(0);" data-bs-toggle="dropdown" class="link-secondary fs-md"><i class="bi bi-three-dots-vertical"></i></a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="#">All Clear</a></li>
                                                            <li><a class="dropdown-item" href="#">Mark all as read</a></li>
                                                            <li><a class="dropdown-item" href="#">Archive All</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="py-2 ps-2" id="notificationItemsTabContent">
                                            <div data-simplebar style="max-height: 300px;" class="pe-2">
                                                <h6 class="text-overflow text-muted fs-sm my-2 text-uppercase notification-title">New</h6>
                                                <div class="text-reset notification-item d-block dropdown-item position-relative unread-message">
                                                    <div class="d-flex">
                                                        <div class="avatar-xs me-3 flex-shrink-0">
                                                            <span class="avatar-title bg-info-subtle text-info rounded-circle fs-lg">
                                                                <i class="bx bx-badge-check"></i>
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <a href="#!" class="stretched-link">
                                                                <h6 class="mt-0 fs-md mb-2 lh-base">Your <b>Elite</b> author Graphic
                                                                    Optimization <span class="text-secondary">reward</span> is ready!
                                                                </h6>
                                                            </a>
                                                            <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                                <span><i class="mdi mdi-clock-outline"></i> Just 30 sec ago</span>
                                                            </p>
                                                        </div>
                                                        <div class="px-2 fs-base">
                                                            <div class="form-check notification-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="all-notification-check01">
                                                                <label class="form-check-label" for="all-notification-check01"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="text-reset notification-item d-block dropdown-item position-relative unread-message">
                                                    <div class="d-flex">
                                                        <div class="position-relative me-3 flex-shrink-0">
                                                            <img src="assets/images/users/32/avatar-2.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                                            <span class="active-badge position-absolute start-100 translate-middle p-1 bg-success rounded-circle">
                                                                <span class="visually-hidden">New alerts</span>
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <a href="#!" class="stretched-link">
                                                                <h6 class="mt-0 mb-1 fs-md fw-semibold">Angela Bernier</h6>
                                                            </a>
                                                            <div class="fs-sm text-muted">
                                                                <p class="mb-1">Answered to your comment on the cash flow forecast's graph 🔔.</p>
                                                            </div>
                                                            <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                                <span><i class="mdi mdi-clock-outline"></i> 48 min ago</span>
                                                            </p>
                                                        </div>
                                                        <div class="px-2 fs-base">
                                                            <div class="form-check notification-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="all-notification-check02">
                                                                <label class="form-check-label" for="all-notification-check02"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="text-reset notification-item d-block dropdown-item position-relative unread-message">
                                                    <div class="d-flex">
                                                        <div class="avatar-xs me-3 flex-shrink-0">
                                                            <span class="avatar-title bg-danger-subtle text-danger rounded-circle fs-lg">
                                                                <i class='bx bx-message-square-dots'></i>
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <a href="#!" class="stretched-link">
                                                                <h6 class="mt-0 mb-2 fs-md lh-base">You have received <b class="text-success">20</b> new messages in the conversation
                                                                </h6>
                                                            </a>
                                                            <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                                <span><i class="mdi mdi-clock-outline"></i> 2 hrs ago</span>
                                                            </p>
                                                        </div>
                                                        <div class="px-2 fs-base">
                                                            <div class="form-check notification-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="all-notification-check03">
                                                                <label class="form-check-label" for="all-notification-check03"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <h6 class="text-overflow text-muted fs-sm my-2 text-uppercase notification-title">Read Before</h6>

                                                <div class="text-reset notification-item d-block dropdown-item position-relative">
                                                    <div class="d-flex">

                                                        <div class="position-relative me-3 flex-shrink-0">
                                                            <img src="assets/images/users/32/avatar-8.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                                            <span class="active-badge position-absolute start-100 translate-middle p-1 bg-warning rounded-circle">
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
                                                                <input class="form-check-input" type="checkbox" value="" id="all-notification-check04">
                                                                <label class="form-check-label" for="all-notification-check04"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="notification-actions" id="notification-actions">
                                                <div class="d-flex text-muted justify-content-center align-items-center">
                                                    Select <div id="select-content" class="text-body fw-semibold px-1">0</div> Result <button type="button" class="btn btn-link link-danger p-0 ms-2" data-bs-toggle="modal" data-bs-target="#removeNotificationModal">Remove</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="dropdown ms-sm-3 header-item topbar-user">
                                    <button type="button" class="btn shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="d-flex align-items-center">
                                            <img class="rounded-circle header-profile-user" src="assets/images/users/32/avatar-1.jpg" alt="Header Avatar">
                                            <span class="text-start ms-xl-2">
                                                <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Richard Marshall</span>
                                                <span class="d-none d-xl-block ms-1 fs-sm user-name-sub-text">Founder</span>
                                            </span>
                                        </span>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->

                                        <a class="dropdown-item" href="profile.html"><i class="mdi mdi-account-circle text-muted fs-lg align-middle me-1"></i> <span class="align-middle">Profile</span></a>

                                        <a class="dropdown-item" href="auth-lockscreen.html"><i class="mdi mdi-lock text-muted fs-lg align-middle me-1"></i> <span class="align-middle">Lock screen</span></a>
                                        <a class="dropdown-item" href="auth-logout.html"><i class="mdi mdi-logout text-muted fs-lg align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
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
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
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
                                    <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
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
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-cartmodal"></button>
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
                                    <button type="button" class="btn w-sm btn-danger" id="remove-cartproduct">Yes, Delete It!</button>
                                </div>
                            </div>

                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <!-- ============================================================== -->
                <!-- Start right Content here -->
                <!-- ============================================================== -->
                <div class="main-content">

                    <div class="page-content">
                        <div class="container-fluid">

                            <!-- start page title -->

                            <!-- end page title -->

                            <div id="instructorList">


                                {{-- @foreach ($order as $lastdatas){
                                    <h1>{{ $lastdatas }}</h1>
                                } --}}

                                {{-- @endforeach --}}

                                {{-- @dd($order) --}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="row align-items-center g-2">
                                                    <div class="col-lg-3 me-auto">
                                                        <h6 class="card-title mb-0">Product In Tranisit List<span class="badge bg-primary ms-1 align-baseline">
                                                            @if (!empty($totalorder))
                                                                {{ $totalorder }}
                                                            @else
                                                            0
                                                            @endif
                                                        </span></h6>
                                                    </div><!--end col-->
                                                    <div class="col-xl-2 col-lg-3 col-sm-5">
                                                        <div class="search-box">
                                                            <input type="text" class="form-control search" placeholder="Search for instructors, email, contact number or something...">
                                                            <i class="ri-search-line search-icon"></i>
                                                        </div>
                                                    </div><!--end col-->

                                                </div>
                                            </div>
                                            <div class="card-body mt-3">
                                                <div class="table-responsive table-card">
                                                    <table class="table table-centered align-middle table-custom-effect table-nowrap mb-0">
                                                        <thead class="table-light">
                                                            <tr>

                                                                <th scope="col" class="sort cursor-pointer" data-sort="instructor_id">SL</th>
                                                                <th scope="col" class="sort cursor-pointer" data-sort="instructor">DATE</th>
                                                                <th scope="col" class="sort cursor-pointer" data-sort="courses_total">TRACK ID</th>
                                                                <th scope="col" class="sort cursor-pointer" data-sort="email">CUSTOMAR NAME</th>
                                                                <th scope="col" class="sort cursor-pointer" data-sort="experience">PHONE</th>
                                                                <th scope="col" class="sort cursor-pointer" data-sort="students">AREA</th>
                                                                <th scope="col" class="sort cursor-pointer" data-sort="contact">PRODUCT NAME</th>
                                                                <th scope="col" class="sort cursor-pointer" data-sort="rating">PRICE</th>
                                                                <th scope="col" class="sort cursor-pointer" data-sort="rating">PAYMENT STATUS</th>
                                                                <th scope="col" class="sort cursor-pointer" data-sort="rating">ORDER STATUS</th>
                                                                <th scope="col">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="list form-check-all">
                                                            @if (!empty($order))
                                                            @foreach ($order as $orders)
                                                                <tbody class="list form-check-all">
                                                                    <tr>
                                                                        <td class="courses_total">159</td>
                                                                        <td class="courses_total">
                                                                            {{ date('d M Y', strtotime($orders->created_at)) }}
                                                                        </td>
                                                                        <td class="instructor_id"><a href="#"
                                                                                class="fw-medium link-primary">{{ $orders->orders_id }}</a>
                                                                        </td>
                                                                        <td class="courses_total">
                                                                            {{ $orders->customer_name }}</td>
                                                                        <td class="courses_total">{{ $orders->phone }}</td>
                                                                        <td class="instructor_id"><a href="#"
                                                                                class="fw-medium link-primary">{{ $orders->customer_area }}</a>
                                                                        </td>
                                                                        <td class="instructor">
                                                                            <div class="d-flex gap-2 align-items-center">

                                                                                <div class="flex-grow-1">
                                                                                    <a href="#"
                                                                                        class="text-reset">{{ $orders->product_name }}</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="courses_total">
                                                                            {{ $orders->product_price }}</td>
                                                                        <td class="status">
                                                                            @if ($orders->payment_status == "Paid")
                                                                            <span class="badge bg-success-subtle text-success">{{ $orders->payment_status }}</span>

                                                                            @else
                                                                            <span class="badge bg-danger-subtle text-danger">{{ $orders->payment_status }}</span>

                                                                            @endif                                                                        </td>
                                                                        <td class="status"><span
                                                                                class="badge bg-success-subtle text-success">{{ $orders->order_status }}</span>
                                                                        </td>


                                                                        <td>
                                                                            <ul class="d-flex gap-2 list-unstyled mb-0">

                                                                                <li>
                                                                                    <button href="#justviewproduct"
                                                                                        id="getorderdidforview"
                                                                                        value="{{ $orders->orders_id }}"
                                                                                        data-bs-toggle="modal"
                                                                                        class="btn btn-subtle-secondary btn-icon btn-sm edit-item-btn"><i
                                                                                            class="ph-eye"></i></button>
                                                                                </li>
                                                                                <li>
                                                                                    {{-- <button href="#addInstructor"
                                                                                        id="getorderdid"
                                                                                        value="{{ $orders->orders_id }}"
                                                                                        data-bs-toggle="modal"
                                                                                        class="btn btn-subtle-secondary btn-icon btn-sm edit-item-btn"><i
                                                                                            class="ph-pencil"></i></button> --}}
                                                                                            <a href="{{ route('admin.conframorder.update',$orders->orders_id ) }}"  class="btn btn-subtle-secondary btn-icon btn-sm edit-item-btn"><i class="ri-download-2-line align-bottom me-1"></i></a>

                                                                                </li>
                                                                                <li>
                                                                                    {{-- <button href="#deleteRecordModal"
                                                                                        id="getorderdidfordelte"
                                                                                        value="{{ $orders->orders_id }}"
                                                                                        data-bs-toggle="modal"
                                                                                        class="btn btn-subtle-danger btn-icon btn-sm remove-item-btn"><i
                                                                                            class="ri-flutter-fill"></i></button> --}}

                                                                                            <a href="#addInstructor2" data-bs-toggle="modal" class="btn btn-subtle-danger btn-icon btn-sm remove-item-btn"><i class="ri-printer-line align-bottom me-1"></i></a>

                                                                                </li>
                                                                            </ul>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            @endforeach
                                                        @else
                                                            <div class="noresult">

                                                            </div>
                                                        @endif
                                                        </tbody><!-- end tbody -->
                                                    </table><!-- end table -->
                                                    <div class="noresult" style="display: none">
                                                        <div class="text-center py-4">
                                                            <i class="ph-magnifying-glass fs-1 text-primary"></i>
                                                            <h5 class="mt-2">Sorry! No Result Found</h5>
                                                            <p class="text-muted mb-0">We've searched more than 164+ instructors We did not find any instructors for you search.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center mt-4 pt-3" id="pagination-element">
                                                    <div class="col-sm">
                                                        <div class="text-muted text-center text-sm-start">
                                                            Showing <span class="fw-semibold">10</span> of <span class="fw-semibold">15</span> Results
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-sm-auto mt-3 mt-sm-0">
                                                        <div class="pagination-wrap hstack justify-content-center gap-2">
                                                            <a class="page-item pagination-prev disabled" href="javascript:void(0)">
                                                                Previous
                                                            </a>
                                                            <ul class="pagination listjs-pagination mb-0"></ul>
                                                            <a class="page-item pagination-next" href="javascript:void(0)">
                                                                Next
                                                            </a>
                                                        </div>
                                                    </div><!--end col-->
                                                </div><!--end row-->
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->

                            </div>

                        </div>
                        <!-- container-fluid -->
                    </div>
                    <!-- End Page-content -->

                    <footer class="footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6">
                                    <script>document.write(new Date().getFullYear())</script> © Steex.
                                </div>
                                <div class="col-sm-6">
                                    <div class="text-sm-end d-none d-sm-block">
                                        Design & Develop by Themesbrand
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
                <!-- end main content-->

            </div>
            <!-- END layout-wrapper -->


            <!-- Modal -->
            <div class="modal fade" id="justviewproduct" tabindex="-1" aria-labelledby="addInstructorModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content border-0">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addInstructorModalLabel">ORDER TRACKING ID- <input
                                    disabled="disabled" style="border: none;" id="orders_id1"></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                id="close-addInstructorModal"></button>
                        </div>

                        <form class="tablelist-form" id="orderfromjustview" novalidate autocomplete="off">
                            <div class="modal-body">
                                <div id="alert-error-msg" class="d-none alert alert-danger py-2"></div>
                                <input type="hidden" name="orders_id11" id="orders_id11">
                                {{-- <input type="hidden" id="rating-field"> --}}


                                <div class="row">

                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="customer_name" class="form-label">CUSTOMAR NAME</label>
                                            <input type="text" class="form-control" id="customer_name1"
                                                name="customer_name1" value="FARHANA TANJIN MONIKA" readonly>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="customer_phone" class="form-label">CUSTOMAR PHONE</label>
                                            <input type="text" class="form-control" id="customer_phone1"
                                                name="customer_phone1" value="01674803314" readonly>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="customer_area" class="form-label">CUSTOMAR AREA</label>
                                            <input type="text" class="form-control" id="customer_area1"
                                                name="customer_area1" value="DHAKA" readonly>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="customer_area" class="form-label">CUSTOMAR ZONE</label>
                                            <input type="text" class="form-control" id="customer_zone1"
                                                name="customer_zone1" value="DHAKA" readonly>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="customer_area" class="form-label">CUSTOMAR PARTICULAR ZONE</label>
                                            <input type="text" class="form-control" id="customer_particular_zone1"
                                                name="customer_particular_zone1" value="DHAKA" readonly>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="customer_full_address" class="form-label">DELIVERY ADDRESS</label>
                                            <input type="text" class="form-control" id="customer_full_address1"
                                                name="customer_full_address1"
                                                value="10/14, BLOCK F, JOINT QUATER, AZIZ MOHOLLAH, MOHAMMADPUR DHAKA 1207"
                                                readonly>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="product_name1" class="form-label">PRODUCT</label>
                                            <input type="text" class="form-control" id="product_name1"
                                                name="product_name1" value="Oil Wax Man Long Wallet" readonly>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="readonlyInput" class="form-label">Price</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">P</span>
                                                <input type="text" class="form-control" id="product_price1"
                                                    name="product_price1" value="1200" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="quantity" class="form-label">Quantity</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">Q</span>
                                                <input type="number" class="form-control" id="quantity1"
                                                    name="quantity1" placeholder="Q-N">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="discount" class="form-label">Discount</label>
                                            <input type="number" class="form-control" id="discount1" name="discount1"
                                                placeholder="Discount">
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="total_bill" class="form-label">Total Bill</label>
                                            <input type="text" class="form-control" id="total_bill1"
                                                name="total_bill1" value="1200" readonly>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="Advance" class="form-label">Advance</label>
                                            <input type="number" class="form-control" id="Advance1" name="Advance1"
                                                placeholder="Advance">
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="cash_collection" class="form-label">Cash Collection</label>
                                            <input type="text" class="form-control" id="cash_collection1"
                                                name="cash_collection1" value="800" readonly>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="order_status" class="form-label">Order Status<span
                                                    class="text-danger">*</span></label>

                                            <select class="form-select" id="order_status1" name="order_status1">
                                                <option value="PLACE ORDER">Selected Status</option>
                                                <option value="CONFRIM ORDER">Confirmed Order</option>
                                                <option value="REJECTED ORDER">Rejected Order</option>
                                                <option value="CANCELL ORDER">Cancelled Products</option>

                                            </select>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="payment_status1" class="form-label">PAYMENT Status<span
                                                    class="text-danger">*</span></label>

                                            <select class="form-select" id="payment_status1" name="payment_status1">
                                                <option value="">Selected Status</option>
                                                <option value="Paid">Paid</option>
                                                <option value="Unpaid">Unpaid</option>


                                            </select>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="extra_note" class="form-label">EXTRA NOTE</label>
                                            <input type="text" id="extra_note1" name="extra_note1"
                                                class="form-control" placeholder="Enter Any Note">
                                        </div>
                                    </div>










                                </div>
                                <!--end row-->
                            </div>
                            <div class="modal-footer">
                                <div class="hstack gap-2 justify-content-end">
                                    <button type="button" class="btn btn-ghost-danger" data-bs-dismiss="modal"><i
                                            class="bi bi-x-lg align-baseline me-1"></i> Close</button>
                                    <button type="submit" class="btn btn-primary" id="add-btn">Edit Order</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- modal-content -->
                </div>
            </div>
            <!--end modal-->




            <!-- Modal -->
            <div class="modal fade" id="addInstructor2" tabindex="-1" aria-labelledby="addInstructorModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content border-0">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addInstructorModalLabel">Invoice Overview</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-addInstructorModal"></button>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-xxl-11">
                                <div class="hstack gap-2 justify-content-end d-print-none mb-4">
                                    <a href="javascript:window.print()" class="btn btn-success"><i class="ri-printer-line align-bottom me-1"></i> Print</a>

                                </div>
                                <div class="card overflow-hidden" id="invoice">
                                    <div class="invoice-effect-top position-absolute start-0">
                                        <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 764 200" width="764" height="200">
                                            <title>&lt;Group&gt;</title>
                                            <g id="&lt;Group&gt;">
                                                <g id="&lt;Group&gt;">
                                                    <path id="&lt;Path&gt;" style="fill: var(--tb-light);" d="m-6.6 177.4c17.5 0.1 35.1 0 52.8-0.4 286.8-6.6 537.6-77.8 700.3-184.6h-753.1z" />
                                                </g>
                                                <g id="&lt;Group&gt;">
                                                    <path id="&lt;Path&gt;" style="fill: var(--tb-secondary);" d="m-6.6 132.8c43.5 2.1 87.9 2.7 132.9 1.7 246.9-5.6 467.1-59.2 627.4-142.1h-760.3z" />
                                                </g>

                                            </g>
                                        </svg>
                                    </div>

                                    <div class="card-body z-1 position-relative">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <img src="assets/images/logo-light.png" class="card-logo" alt="logo light" height="25">
                                            </div>
                                            <div class="flex-shrink-0 mt-sm-0 mt-3">

                                                <h6><span class="text-muted fw-normal">Email:</span> <span id="email">info@shopix.com.bd</span></h6>
                                                <h6><span class="text-muted fw-normal">Website:</span> <a href="#" class="link-primary" target="_blank" id="website">www.shopix.com.bd</a></h6>
                                                <h6 class="mb-0"><span class="text-muted fw-normal">Contact No: </span><span id="contact-no">09639505014</span></h6>
                                            </div>
                                        </div>

                                    </br>

                                        <div class="mt-5 pt-4">
                                            <div class="row g-3">
                                                <div class="col-lg col-6">
                                                    <p class="text-muted mb-2 text-uppercase">Invoice No</p>
                                                    <h5 class="fs-md mb-0">#TBS<span id="invoice-no">24301901</span></h5>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg col-6">
                                                    <p class="text-muted mb-2 text-uppercase">Date</p>
                                                    <h5 class="fs-md mb-0"><span id="invoice-date">10 April, 2023</span></h5>
                                                </div>

                                                <div class="col-lg col-6">
                                                    <p class="text-muted mb-2 text-uppercase">Payment Status</p>
                                                    <span class="badge bg-success-subtle text-success fs-xxs" id="payment-status">UnPaid</span>
                                                </div>
                                                <!--end col-->

                                                <!--end col-->
                                            </div><!--end row-->
                                        </div>

                                        <div class="mt-4 pt-2">
                                            <div class="row g-3">
                                                <div class="col-6">
                                                    <p class="text-muted text-uppercase">Billing Address</p>
                                                    <h6 class="fs-md" id="billing-name">Farhana Tanjin Monika</h6>
                                                    <p class="text-muted mb-1" id="billing-address-line-1">10/14, BLOCK F, JOINT QUATER, AZIZ MOHOLLAH, MOHAMMADPUR DHAKA 1207</p>
                                                    <p class="text-muted mb-1"><span>Phone: +</span><span id="billing-phone-no">01674-803314</span></p>

                                                </div>
                                                <!--end col-->

                                            </div><!--end row-->
                                        </div>
                                        <div class="table-responsive mt-4">
                                            <table class="table table-borderless text-center table-nowrap align-middle mb-0">
                                                <thead>
                                                    <tr class="table-light">
                                                        <th scope="col" style="width: 50px;">#</th>
                                                        <th scope="col">Product Details</th>
                                                        <th scope="col">Rate</th>
                                                        <th scope="col">Quantity</th>
                                                        <th scope="col" class="text-end">Amount</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="products-list">
                                                    <tr>
                                                        <th scope="row">01</th>
                                                        <td class="text-start">
                                                            <span class="fw-medium">Branded T-Shirts</span>

                                                        </td>
                                                        <td>$161.25</td>
                                                        <td>03</td>
                                                        <td class="text-end">$483.75</td>
                                                    </tr>

                                                </tbody>
                                            </table><!--end table-->
                                        </div>
                                        <div class="border-top border-top-dashed mt-2" id="products-list-total">
                                            <table class="table table-borderless table-nowrap align-middle mb-0 ms-auto" style="width:250px">
                                                <tbody>
                                                    <tr>
                                                        <td>Sub Total</td>
                                                        <td class="text-end">$2,272.95</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Estimated Tax <small class="text-muted">(18%)</small></td>
                                                        <td class="text-end">$409.13</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Discount <small class="text-muted">(STEEX30)</small></td>
                                                        <td class="text-end">-$681.88</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Shipping Charge</td>
                                                        <td class="text-end">$65.00</td>
                                                    </tr>
                                                    <tr class="border-top border-top-dashed fs-15">
                                                        <th scope="row">Total Amount</th>
                                                        <th class="text-end">$2,050.20</th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!--end table-->
                                        </div>
                                        <div class="mt-3">
                                            <h6 class="text-muted text-uppercase fw-semibold mb-3">Payment Details:</h6>
                                            <p class="text-muted mb-1">Payment Method: <span class="fw-medium" id="payment-method">Cash On Delivery</span></p>

                                        </div>
                                        <div class="mt-4 mb-4">
                                            <div class="alert alert-danger mb-0">
                                                <span class="fw-semibold">NOTES:</span>
                                                <span id="note">All accounts are to be paid within 7 days from receipt of invoice. To be paid by cheque or </span>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <!--end card-->
                            </div>
                            <!--end col-->
                        </div>

                    </div>
                    <!-- modal-content -->
                </div>
            </div><!--end modal-->

            <!-- Modal -->
            <div class="modal fade" id="addInstructor" tabindex="-1" aria-labelledby="addInstructorModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content border-0">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addInstructorModalLabel">ORDER TRACKING ID- SX159RFRRR001</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-addInstructorModal"></button>
                        </div>

                        <form class="tablelist-form" novalidate autocomplete="off">
                            <div class="modal-body">
                                <div id="alert-error-msg" class="d-none alert alert-danger py-2"></div>
                                <input type="hidden" id="id-field">
                                <input type="hidden" id="rating-field">


                            <div class="row">

                                <div class="col-lg-12">
                                    <div class="mb-3">
                                       <label for="readonlyInput" class="form-label">CUSTOMAR NAME</label>
                                       <input type="text" class="form-control" id="readonlyInput" value="FARHANA TANJIN MONIKA" readonly>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="readonlyInput" class="form-label">CUSTOMAR PHONE</label>
                                         <input type="text" class="form-control" id="readonlyInput" value="01674803314" readonly>
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="readonlyInput" class="form-label">CUSTOMAR AREA</label>
                                        <input type="text" class="form-control" id="readonlyInput" value="DHAKA" readonly>
                                    </div>
                                </div><!--end col-->

                                 <div class="col-lg-12">
                                    <div class="mb-3">
                                       <label for="readonlyInput" class="form-label">DELIVERY ADDRESS</label>
                                       <input type="text" class="form-control" id="readonlyInput" value="10/14, BLOCK F, JOINT QUATER, AZIZ MOHOLLAH, MOHAMMADPUR DHAKA 1207" readonly>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="mb-3">
                                       <label for="readonlyInput" class="form-label">PRODUCT</label>
                                       <input type="text" class="form-control" id="readonlyInput" value="Oil Wax Man Long Wallet" readonly>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="readonlyInput" class="form-label">Price</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">P</span>
                                            <input type="text" class="form-control" id="readonlyInput" value="1200" readonly>
                                        </div>
                                    </div>
                                </div>

                                 <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="readonlyInput" class="form-label">Quantity</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">Q</span>
                                            <input type="text" class="form-control" id="readonlyInput" value="2" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="readonlyInput" class="form-label">Discount</label>
                                        <input type="text" class="form-control" id="readonlyInput" value="200" readonly>
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="disabledInput" class="form-label">Total Bill</label>
                                         <input type="text" class="form-control" id="disabledInput" value="1200" disabled>
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="readonlyInput" class="form-label">Advance</label>
                                        <input type="text" class="form-control" id="readonlyInput" value="300" readonly>
                                    </div>
                                </div><!--end col-->

                                 <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="disabledInput" class="form-label">Cash Collection</label>
                                         <input type="text" class="form-control" id="disabledInput" value="800" disabled>
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="status-input" class="form-label">Order Status<span class="text-danger">*</span></label>

                                        <select class="form-select" id="status-input">

                                            <option value="CONFRIM ORDER">Confirmed Order</option>
                                            <option value="CANCELL ORDER">Prossing  Order</option>


                                        </select>
                                    </div>
                                </div><!--end col-->
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="status-input" class="form-label">PAYMENT Status<span class="text-danger">*</span></label>

                                        <select class="form-select" id="status-input">


                                            <option value="">Unpaid</option>


                                        </select>
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-12">
                                    <div class="mb-3">
                                       <label for="readonlyInput" class="form-label">EXTRA NOTE</label>
                                       <input type="text" class="form-control" id="readonlyInput" value="advance 300 tk last number 400" readonly>
                                    </div>
                                </div>










                            </div><!--end row-->
                            </div>
                            <div class="modal-footer">
                                <div class="hstack gap-2 justify-content-end">
                                    <button type="button" class="btn btn-ghost-danger" data-bs-dismiss="modal"><i class="bi bi-x-lg align-baseline me-1"></i> Close</button>
                                    <button type="submit" class="btn btn-primary" id="add-btn">Add Instructor</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- modal-content -->
                </div>
            </div><!--end modal-->














            <!-- deleteRecordModal -->
            <div id="deleteRecordModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" id="deleteRecord-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-md-5">
                            <div class="text-center">
                                <div class="text-danger">
                                    <i class="bi bi-trash display-5"></i>
                                </div>
                                <div class="mt-4">
                                    <h4 class="mb-2">Are you sure Order Is Fake ?</h4>
                                    <p class="text-muted mx-3 mb-0">Are you sure you want to remove fake order ?</p>
                                </div>
                            </div>
                            <div class="d-flex gap-2 justify-content-center mt-4 pt-2 mb-2">
                                <button type="button" class="btn w-sm btn-light btn-hover" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn w-sm btn-danger btn-hover" id="delete-record">Yes,  It!</button>
                            </div>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /deleteRecordModal -->

            <!--start back-to-top-->
            <button class="btn btn-dark btn-icon" id="back-to-top">
                <i class="bi bi-caret-up fs-3xl"></i>
            </button>
            <!--end back-to-top-->

            <!--preloader-->
            <div id="preloader">
                <div id="status">
                    <div class="spinner-border text-primary avatar-sm" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            </div>


            <!-- Theme Settings -->
            <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="theme-settings-offcanvas">
                <div class="d-flex align-items-center bg-primary bg-gradient p-3 offcanvas-header">
                    <div class="me-2">
                        <h5 class="mb-1 text-white">Steex Builder</h5>
                        <p class="text-white text-opacity-75 mb-0">Choose your themes & layouts etc.</p>
                    </div>

                    <button type="button" class="btn-close btn-close-white ms-auto" id="customizerclose-btn" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body p-0">
                    <div data-simplebar class="h-100">
                        <div class="p-4">
                            <h6 class="fs-md mb-1">Layout</h6>
                            <p class="text-muted fs-sm">Choose your layout</p>

                            <div class="row">
                                <div class="col-4">
                                    <div class="form-check card-radio">
                                        <input id="customizer-layout01" name="data-layout" type="radio" value="vertical" class="form-check-input">
                                        <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout01">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-sm text-center fw-medium mt-2">Vertical</h5>
                                </div>
                                <div class="col-4">
                                    <div class="form-check card-radio">
                                        <input id="customizer-layout02" name="data-layout" type="radio" value="horizontal" class="form-check-input">
                                        <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout02">
                                            <span class="d-flex h-100 flex-column gap-1">
                                                <span class="bg-light d-flex p-1 gap-1 align-items-center">
                                                    <span class="d-block p-1 bg-primary-subtle rounded me-1"></span>
                                                    <span class="d-block p-1 pb-0 px-2 bg-primary-subtle ms-auto"></span>
                                                    <span class="d-block p-1 pb-0 px-2 bg-primary-subtle"></span>
                                                </span>
                                                <span class="bg-light d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-sm text-center fw-medium mt-2">Horizontal</h5>
                                </div>
                                <div class="col-4">
                                    <div class="form-check card-radio">
                                        <input id="customizer-layout03" name="data-layout" type="radio" value="twocolumn" class="form-check-input">
                                        <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout03">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1">
                                                        <span class="d-block p-1 bg-primary-subtle mb-2"></span>
                                                        <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-sm text-center fw-medium mt-2">Two Column</h5>
                                </div>
                                <!-- end col -->
                            </div>

                            <h6 class="mt-4 fs-md mb-1">Theme</h6>
                            <p class="text-muted fs-sm">Choose your suitable Theme.</p>

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-check card-radio">
                                        <input id="customizer-theme01" name="data-theme" type="radio" value="default" class="form-check-input">
                                        <label class="form-check-label p-0" for="customizer-theme01">
                                            <img src="assets/images/custom-theme/light-mode.png" alt="" class="img-fluid">
                                        </label>
                                    </div>
                                    <h5 class="fs-sm text-center fw-medium mt-2">Default</h5>
                                </div>
                                <div class="col-6">
                                    <div class="form-check card-radio">
                                        <input id="customizer-theme02" name="data-theme" type="radio" value="material" class="form-check-input">
                                        <label class="form-check-label p-0" for="customizer-theme02">
                                            <img src="assets/images/custom-theme/material.png" alt="" class="img-fluid">
                                        </label>
                                    </div>
                                    <h5 class="fs-sm text-center fw-medium mt-2">Material</h5>
                                </div>
                                <div class="col-6">
                                    <div class="form-check card-radio">
                                        <input id="customizer-theme03" name="data-theme" type="radio" value="creative" class="form-check-input">
                                        <label class="form-check-label p-0" for="customizer-theme03">
                                            <img src="assets/images/custom-theme/creative.png" alt="" class="img-fluid">
                                        </label>
                                    </div>
                                    <h5 class="fs-sm text-center fw-medium mt-2">Creative</h5>
                                </div>
                                <div class="col-6">
                                    <div class="form-check card-radio">
                                        <input id="customizer-theme04" name="data-theme" type="radio" value="minimal" class="form-check-input">
                                        <label class="form-check-label p-0" for="customizer-theme04">
                                            <img src="assets/images/custom-theme/minimal.png" alt="" class="img-fluid">
                                        </label>
                                    </div>
                                    <h5 class="fs-sm text-center fw-medium mt-2">Minimal</h5>
                                </div>
                                <div class="col-6">
                                    <div class="form-check card-radio">
                                        <input id="customizer-theme05" name="data-theme" type="radio" value="modern" class="form-check-input">
                                        <label class="form-check-label p-0" for="customizer-theme05">
                                            <img src="assets/images/custom-theme/modern.png" alt="" class="img-fluid">
                                        </label>
                                    </div>
                                    <h5 class="fs-sm text-center fw-medium mt-2">Modern</h5>
                                </div>
                                <!-- end col -->
                                <div class="col-6">
                                    <div class="form-check card-radio">
                                        <input id="customizer-theme06" name="data-theme" type="radio" value="interaction" class="form-check-input">
                                        <label class="form-check-label p-0" for="customizer-theme06">
                                            <img src="assets/images/custom-theme/interaction.png" alt="" class="img-fluid">
                                        </label>
                                    </div>
                                    <h5 class="fs-sm text-center fw-medium mt-2">Interaction</h5>
                                </div><!-- end col -->
                            </div>

                            <h6 class="mt-4 fs-md mb-1">Color Scheme</h6>
                            <p class="text-muted fs-sm">Choose Light or Dark Scheme.</p>

                            <div class="colorscheme-cardradio">
                                <div class="row g-3">
                                    <div class="col-6">
                                        <div class="form-check card-radio">
                                            <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-mode-light" value="light">
                                            <label class="form-check-label p-0 bg-transparent" for="layout-mode-light">
                                                <img src="assets/images/custom-theme/light-mode.png" alt="" class="img-fluid">
                                            </label>
                                        </div>
                                        <h5 class="fs-sm text-center fw-medium mt-2">Light</h5>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-check card-radio dark">
                                            <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-mode-dark" value="dark">
                                            <label class="form-check-label p-0 bg-transparent" for="layout-mode-dark">
                                                <img src="assets/images/custom-theme/dark-mode.png" alt="" class="img-fluid">
                                            </label>
                                        </div>
                                        <h5 class="fs-sm text-center fw-medium mt-2">Dark</h5>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-check card-radio brand">
                                            <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-mode-brand" value="brand" disabled>
                                            <h6 class="text-danger fs-18 lh-base text-center position-absolute top-50 start-50 translate-middle z-1 mb-0">Coming Soon</h6>
                                            <label class="form-check-label cursor-none p-0 bg-transparent opacity-75" for="layout-mode-brand">
                                                <img src="assets/images/custom-theme/brand-mode.png" alt="" class="img-fluid">
                                            </label>
                                        </div>
                                        <h5 class="fs-sm text-center fw-medium mt-2">Brand</h5>
                                    </div>
                                </div>
                            </div>

                            <div id="layout-width">
                                <h6 class="mt-4 fs-md mb-1">Layout Width</h6>
                                <p class="text-muted fs-sm">Choose Fluid or Boxed layout.</p>

                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-check card-radio">
                                            <input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-fluid" value="fluid">
                                            <label class="form-check-label p-0 avatar-md w-100" for="layout-width-fluid">
                                                <span class="d-flex gap-1 h-100">
                                                    <span class="flex-shrink-0">
                                                        <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                            <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        </span>
                                                    </span>
                                                    <span class="flex-grow-1">
                                                        <span class="d-flex h-100 flex-column">
                                                            <span class="bg-light d-block p-1"></span>
                                                            <span class="bg-light d-block p-1 mt-auto"></span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </label>
                                        </div>
                                        <h5 class="fs-sm text-center fw-medium mt-2">Fluid</h5>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-check card-radio">
                                            <input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-boxed" value="boxed">
                                            <label class="form-check-label p-0 avatar-md w-100 px-2" for="layout-width-boxed">
                                                <span class="d-flex gap-1 h-100 border-start border-end">
                                                    <span class="flex-shrink-0">
                                                        <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                            <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        </span>
                                                    </span>
                                                    <span class="flex-grow-1">
                                                        <span class="d-flex h-100 flex-column">
                                                            <span class="bg-light d-block p-1"></span>
                                                            <span class="bg-light d-block p-1 mt-auto"></span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </label>
                                        </div>
                                        <h5 class="fs-sm text-center fw-medium mt-2">Boxed</h5>
                                    </div>
                                </div>
                            </div>

                            <div id="layout-position">
                                <h6 class="mt-4 fs-md mb-1">Layout Position</h6>
                                <p class="text-muted fs-sm">Choose Fixed or Scrollable Layout Position.</p>

                                <div class="btn-group radio" role="group">
                                    <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-fixed" value="fixed">
                                    <label class="btn btn-light w-sm" for="layout-position-fixed">Fixed</label>

                                    <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-scrollable" value="scrollable">
                                    <label class="btn btn-light w-sm ms-0" for="layout-position-scrollable">Scrollable</label>
                                </div>
                            </div>

                            <h6 class="mt-4 fs-md mb-1">Topbar Color</h6>
                            <p class="text-muted fs-sm">Choose Light or Dark Topbar Color.</p>

                            <div class="row">
                                <div class="col-4">
                                    <div class="form-check card-radio">
                                        <input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-light" value="light">
                                        <label class="form-check-label p-0 avatar-md w-100" for="topbar-color-light">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-sm text-center fw-medium mt-2">Light</h5>
                                </div>
                                <div class="col-4">
                                    <div class="form-check card-radio">
                                        <input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-dark" value="dark">
                                        <label class="form-check-label p-0 avatar-md w-100" for="topbar-color-dark">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-primary d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-sm text-center fw-medium mt-2">Dark</h5>
                                </div>
                            </div>

                            <div id="sidebar-size">
                                <h6 class="mt-4 fs-md mb-1">Sidebar Size</h6>
                                <p class="text-muted fs-sm">Choose a size of Sidebar.</p>

                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-check sidebar-setting card-radio">
                                            <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-default" value="lg">
                                            <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-default">
                                                <span class="d-flex gap-1 h-100">
                                                    <span class="flex-shrink-0">
                                                        <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                            <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        </span>
                                                    </span>
                                                    <span class="flex-grow-1">
                                                        <span class="d-flex h-100 flex-column">
                                                            <span class="bg-light d-block p-1"></span>
                                                            <span class="bg-light d-block p-1 mt-auto"></span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </label>
                                        </div>
                                        <h5 class="fs-sm text-center fw-medium mt-2">Default</h5>
                                    </div>

                                    <div class="col-4">
                                        <div class="form-check sidebar-setting card-radio">
                                            <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-compact" value="md">
                                            <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-compact">
                                                <span class="d-flex gap-1 h-100">
                                                    <span class="flex-shrink-0">
                                                        <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                            <span class="d-block p-1 bg-primary-subtle rounded mb-2"></span>
                                                            <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                            <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                            <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                        </span>
                                                    </span>
                                                    <span class="flex-grow-1">
                                                        <span class="d-flex h-100 flex-column">
                                                            <span class="bg-light d-block p-1"></span>
                                                            <span class="bg-light d-block p-1 mt-auto"></span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </label>
                                        </div>
                                        <h5 class="fs-sm text-center fw-medium mt-2">Compact</h5>
                                    </div>

                                    <div class="col-4">
                                        <div class="form-check sidebar-setting card-radio">
                                            <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-small" value="sm">
                                            <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-small">
                                                <span class="d-flex gap-1 h-100">
                                                    <span class="flex-shrink-0">
                                                        <span class="bg-light d-flex h-100 flex-column gap-1">
                                                            <span class="d-block p-1 bg-primary-subtle mb-2"></span>
                                                            <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                            <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                            <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                        </span>
                                                    </span>
                                                    <span class="flex-grow-1">
                                                        <span class="d-flex h-100 flex-column">
                                                            <span class="bg-light d-block p-1"></span>
                                                            <span class="bg-light d-block p-1 mt-auto"></span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </label>
                                        </div>
                                        <h5 class="fs-sm text-center fw-medium mt-2">Small (Icon View)</h5>
                                    </div>

                                    <div class="col-4">
                                        <div class="form-check sidebar-setting card-radio">
                                            <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-small-hover" value="sm-hover">
                                            <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-small-hover">
                                                <span class="d-flex gap-1 h-100">
                                                    <span class="flex-shrink-0">
                                                        <span class="bg-light d-flex h-100 flex-column gap-1">
                                                            <span class="d-block p-1 bg-primary-subtle mb-2"></span>
                                                            <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                            <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                            <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                        </span>
                                                    </span>
                                                    <span class="flex-grow-1">
                                                        <span class="d-flex h-100 flex-column">
                                                            <span class="bg-light d-block p-1"></span>
                                                            <span class="bg-light d-block p-1 mt-auto"></span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </label>
                                        </div>
                                        <h5 class="fs-sm text-center fw-medium mt-2">Small Hover View</h5>
                                    </div>
                                </div>
                            </div>

                            <div id="sidebar-view">
                                <h6 class="mt-4 fs-md mb-1">Sidebar View</h6>
                                <p class="text-muted fs-sm">Choose Default or Detached Sidebar view.</p>

                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-check sidebar-setting card-radio">
                                            <input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-default" value="default">
                                            <label class="form-check-label p-0 avatar-md w-100" for="sidebar-view-default">
                                                <span class="d-flex gap-1 h-100">
                                                    <span class="flex-shrink-0">
                                                        <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                            <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        </span>
                                                    </span>
                                                    <span class="flex-grow-1">
                                                        <span class="d-flex h-100 flex-column">
                                                            <span class="bg-light d-block p-1"></span>
                                                            <span class="bg-light d-block p-1 mt-auto"></span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </label>
                                        </div>
                                        <h5 class="fs-sm text-center fw-medium mt-2">Default</h5>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-check sidebar-setting card-radio">
                                            <input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-detached" value="detached">
                                            <label class="form-check-label p-0 avatar-md w-100" for="sidebar-view-detached">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-flex p-1 gap-1 align-items-center px-2">
                                                        <span class="d-block p-1 bg-primary-subtle rounded me-1"></span>
                                                        <span class="d-block p-1 pb-0 px-2 bg-primary-subtle ms-auto"></span>
                                                        <span class="d-block p-1 pb-0 px-2 bg-primary-subtle"></span>
                                                    </span>
                                                    <span class="d-flex gap-1 h-100 p-1 px-2">
                                                        <span class="flex-shrink-0">
                                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                            </span>
                                                        </span>
                                                    </span>
                                                    <span class="bg-light d-block p-1 mt-auto px-2"></span>
                                                </span>
                                            </label>
                                        </div>
                                        <h5 class="fs-sm text-center fw-medium mt-2">Detached</h5>
                                    </div>
                                </div>
                            </div>
                            <div id="sidebar-color">
                                <h6 class="mt-4 fs-md mb-1">Sidebar Color</h6>
                                <p class="text-muted fs-sm">Choose a color of Sidebar.</p>

                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-check sidebar-setting card-radio" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient.show">
                                            <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-light" value="light">
                                            <label class="form-check-label p-0 avatar-md w-100" for="sidebar-color-light">
                                                <span class="d-flex gap-1 h-100">
                                                    <span class="flex-shrink-0">
                                                        <span class="bg-white border-end d-flex h-100 flex-column gap-1 p-1">
                                                            <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        </span>
                                                    </span>
                                                    <span class="flex-grow-1">
                                                        <span class="d-flex h-100 flex-column">
                                                            <span class="bg-light d-block p-1"></span>
                                                            <span class="bg-light d-block p-1 mt-auto"></span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </label>
                                        </div>
                                        <h5 class="fs-sm text-center fw-medium mt-2">Light</h5>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-check sidebar-setting card-radio" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient.show">
                                            <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-dark" value="dark">
                                            <label class="form-check-label p-0 avatar-md w-100" for="sidebar-color-dark">
                                                <span class="d-flex gap-1 h-100">
                                                    <span class="flex-shrink-0">
                                                        <span class="bg-primary d-flex h-100 flex-column gap-1 p-1">
                                                            <span class="d-block p-1 px-2 bg-soft-light rounded mb-2"></span>
                                                            <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                            <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                            <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                        </span>
                                                    </span>
                                                    <span class="flex-grow-1">
                                                        <span class="d-flex h-100 flex-column">
                                                            <span class="bg-light d-block p-1"></span>
                                                            <span class="bg-light d-block p-1 mt-auto"></span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </label>
                                        </div>
                                        <h5 class="fs-sm text-center fw-medium mt-2">Dark</h5>
                                    </div>
                                    <div class="col-4">
                                        <button class="btn btn-link avatar-md w-100 p-0 overflow-hidden border collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient" aria-expanded="false" aria-controls="collapseBgGradient">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-vertical-gradient d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-soft-light rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </button>
                                        <h5 class="fs-sm text-center fw-medium mt-2">Gradient</h5>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="collapse" id="collapseBgGradient">
                                    <div class="d-flex gap-2 flex-wrap img-switch p-2 px-3 bg-light rounded">

                                        <div class="form-check sidebar-setting card-radio">
                                            <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient" value="gradient">
                                            <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient">
                                                <span class="avatar-title rounded-circle bg-vertical-gradient"></span>
                                            </label>
                                        </div>
                                        <div class="form-check sidebar-setting card-radio">
                                            <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-2" value="gradient-2">
                                            <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-2">
                                                <span class="avatar-title rounded-circle bg-vertical-gradient-2"></span>
                                            </label>
                                        </div>
                                        <div class="form-check sidebar-setting card-radio">
                                            <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-3" value="gradient-3">
                                            <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-3">
                                                <span class="avatar-title rounded-circle bg-vertical-gradient-3"></span>
                                            </label>
                                        </div>
                                        <div class="form-check sidebar-setting card-radio">
                                            <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-4" value="gradient-4">
                                            <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-4">
                                                <span class="avatar-title rounded-circle bg-vertical-gradient-4"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="sidebar-img">
                                <h6 class="mt-4 fw-semibold fs-base">Sidebar Images</h6>
                                <p class="text-muted fs-sm">Choose a image of Sidebar.</p>

                                <div class="d-flex gap-2 flex-wrap img-switch">
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-none" value="none">
                                        <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-none">
                                            <span class="avatar-md w-auto bg-light d-flex align-items-center justify-content-center">
                                                <i class="ri-close-fill fs-3xl"></i>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-01" value="img-1">
                                        <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-01">
                                            <img src="assets/images/sidebar/img-sm-1.jpg" alt="" class="avatar-md w-auto object-cover">
                                        </label>
                                    </div>

                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-02" value="img-2">
                                        <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-02">
                                            <img src="assets/images/sidebar/img-sm-2.jpg" alt="" class="avatar-md w-auto object-cover">
                                        </label>
                                    </div>
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-03" value="img-3">
                                        <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-03">
                                            <img src="assets/images/sidebar/img-sm-3.jpg" alt="" class="avatar-md w-auto object-cover">
                                        </label>
                                    </div>
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-04" value="img-4">
                                        <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-04">
                                            <img src="assets/images/sidebar/img-sm-4.jpg" alt="" class="avatar-md w-auto object-cover">
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div id="preloader-menu">
                                <h6 class="mt-4 fw-semibold fs-base">Preloader</h6>
                                <p class="text-muted fs-sm">Choose a preloader.</p>

                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-check sidebar-setting card-radio">
                                            <input class="form-check-input" type="radio" name="data-preloader" id="preloader-view-custom" value="enable">
                                            <label class="form-check-label p-0 avatar-md w-100" for="preloader-view-custom">
                                                <span class="d-flex gap-1 h-100">
                                                    <span class="flex-shrink-0">
                                                        <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                            <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        </span>
                                                    </span>
                                                    <span class="flex-grow-1">
                                                        <span class="d-flex h-100 flex-column">
                                                            <span class="bg-light d-block p-1"></span>
                                                            <span class="bg-light d-block p-1 mt-auto"></span>
                                                        </span>
                                                    </span>
                                                </span>
                                                <!-- <div id="preloader"> -->
                                                <span class="d-flex align-items-center justify-content-center">
                                                    <span class="spinner-border text-primary avatar-xxs m-auto" role="status">
                                                        <span class="visually-hidden">Loading...</span>
                                                    </span>
                                                </span>
                                                <!-- </div> -->
                                            </label>
                                        </div>
                                        <h5 class="fs-sm text-center fw-medium mt-2">Enable</h5>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-check sidebar-setting card-radio">
                                            <input class="form-check-input" type="radio" name="data-preloader" id="preloader-view-none" value="disable">
                                            <label class="form-check-label p-0 avatar-md w-100" for="preloader-view-none">
                                                <span class="d-flex gap-1 h-100">
                                                    <span class="flex-shrink-0">
                                                        <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                            <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        </span>
                                                    </span>
                                                    <span class="flex-grow-1">
                                                        <span class="d-flex h-100 flex-column">
                                                            <span class="bg-light d-block p-1"></span>
                                                            <span class="bg-light d-block p-1 mt-auto"></span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </label>
                                        </div>
                                        <h5 class="fs-sm text-center fw-medium mt-2">Disable</h5>
                                    </div>
                                </div>

                            </div><!-- end preloader-menu -->
                        </div>
                    </div>

                </div>
                <div class="offcanvas-footer border-top p-3 text-center">
                    <div class="row">
                        <div class="col-6">
                            <button type="button" class="btn btn-light w-100" id="reset-layout">Reset</button>
                        </div>
                        <div class="col-6">
                            <a href="#!" target="_blank" class="btn btn-primary w-100">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>



        </div>
        <!-- container-fluid -->
    </div>
    </div>
@endsection


@section('extraJs')
    <script type="text/javascript">
        $(document).ready(function() {
            $(document).on('click', '#getorderdid', function() {
                var getorderid = $(this).val();

                // alert(getorderid);

                $.ajax({
                    type: "GET",
                    url: "/admin/plaseorder/edit/" + getorderid,
                    success: function(response) {
                        console.log(response.singelorder.created_at);
                        $('#orders_id').val(response.singelorder.orders_id);
                        $('#orders_idmain').val(response.singelorder.orders_id);
                        $('#customer_name').val(response.singelorder.customer_name);
                        $('#customer_phone').val(response.singelorder.phone);
                        $('#customer_area').val(response.singelorder.customer_area);
                        $('#customer_full_address').val(response.singelorder
                            .customer_full_address);
                        $('#product_name').val(response.singelorder.product_name);
                        $('#product_price').val(response.singelorder.product_price);
                        $('#quantity').val(response.singelorder.quantity);
                        $('#discount').val(response.singelorder.discount);
                        // $totalbill = response.singelorder.total_bill + response.singelorder.product_price;
                        $('#total_bill').val(response.singelorder.total_bill);
                        $('#Advance').val(response.singelorder.Advance);
                        // $cash_collection = $totalbill - response.singelorder.Advance;
                        $('#cash_collection').val(response.singelorder.cash_collection);
                        $('#extra_note').val(response.singelorder.extra_note);
                        $('#payment_status').val(response.singelorder.payment_status);
                        $('#order_status').val(response.singelorder.order_status);
                    }
                });



            });
        });

        $(document).ready(function() {
            $(document).ready(function() {
            $(document).on('click', '#getorderdidforview', function() {
                var getorderid = $(this).val();

                // alert(getorderid);

                $.ajax({
                    type: "GET",
                    url: "/admin/plaseorder/edit/" + getorderid,
                    success: function(response) {
                        console.log(response.singelorder.created_at);
                        $('#orders_id11').val(response.singelorder.orders_id);
                        $('#orders_id1').val(response.singelorder.orders_id);
                        $('#orders_idmain1').val(response.singelorder.orders_id);
                        $('#customer_name1').val(response.singelorder.customer_name);
                        $('#customer_phone1').val(response.singelorder.phone);
                        $('#customer_area1').val(response.singelorder.customer_area);
                        $('#customer_zone1').val(response.singelorder.customer_zone);
                        $('#customer_particular_zone1').val(response.singelorder.customer_particular_zone);
                        $('#customer_full_address1').val(response.singelorder
                            .customer_full_address);
                        $('#product_name1').val(response.singelorder.product_name);
                        $('#product_price1').val(response.singelorder.product_price);
                        $('#quantity1').val(response.singelorder.quantity);
                        $('#discount1').val(response.singelorder.discount);
                        // $totalbill = response.singelorder.total_bill + response.singelorder.product_price;
                        $('#total_bill1').val(response.singelorder.total_bill);
                        $('#Advance1').val(response.singelorder.Advance);
                        // $cash_collection = $totalbill - response.singelorder.Advance;
                        $('#cash_collection1').val(response.singelorder.cash_collection);
                        $('#extra_note1').val(response.singelorder.extra_note);
                        $('#payment_status1').val(response.singelorder.payment_status);
                        $('#order_status1').val(response.singelorder.order_status);
                    }
                });



            });
        });
        });


        $(document).ready(function() {
            $(document).on('click', '#getorderdidfordelte', function() {
                var getorderid = $(this).val();

                // alert(getorderid);


                $(document).on('click', '#make_it_fake', function() {



                    $.ajax({
                        type: "POST",
                        url: "/admin/plaseorder/isfack/" + getorderid,
                        dataType: 'json',
                        data: getorderid,
                        success: function(response) {
                            // console.log(response.singelorder.created_at);

                        },
                        statusCode: {
                            200: function() {
                                location.reload();
                            }
                        },
                        error: function(e) {
                            // window.location.href = '{{ route('admin.product.index') }}';
                        }
                    });


                });


            });

        });








        $("#orderfromedit").submit(function(event) {
            event.preventDefault();

            $.ajax({
                url: '{{ route('admin.plaseorder.save') }}',
                type: 'POST',
                dataType: 'json',
                data: $("#orderfromedit").serializeArray(),
                success: function(response) {


                    if (response.status == 200) {


                        location.reload();


                    } else {

                    }
                },
                statusCode: {
                    200: function() {
                        location.reload();

                    }
                },
                error: function(e) {
                    // window.location.href = '{{ route('admin.product.index') }}';
                }
            });

        });
    </script>
@endsection
