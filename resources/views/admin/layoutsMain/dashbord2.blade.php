@extends('admin.layoutsMain.adminapp')



@section('content')

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">

                <div class="">

                    <!-- start page title -->

                    <!-- end page title -->

                    <div class="row">
                        <div class="col-xl-3 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted fs-lg"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Today</a>
                                            <a class="dropdown-item" href="#">Last Week</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                            <a class="dropdown-item" href="#">Current Year</a>
                                        </div>
                                    </div>
                                    <p class="fs-md text-muted mb-0">ORDER PLACE</p>

                                    <div class="row mt-4 align-items-end">
                                        <div class="col-lg-6">
                                            <h3 class="mb-4"><span class="counter-value" data-target="
                                                @if(!empty($plaseorder))
                                                {{ $plaseorder }}
                                                @else
                                                0
                                                @endif
                                                ">0</span> </h3>
                                            <p class="text-success mb-0"><i class="bi bi-arrow-up me-1"></i> 06.41% Last Month</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <div id="session_chart" data-colors='["--tb-primary", "--tb-secondary"]' class="apex-charts m-n3 mt-n4" dir="ltr"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->


                        <div class="col-xl-3 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted fs-lg"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Today</a>
                                            <a class="dropdown-item" href="#">Last Week</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                            <a class="dropdown-item" href="#">Current Year</a>
                                        </div>
                                    </div>
                                    <p class="fs-md text-muted mb-0">REJECTED ORDER</p>

                                    <div class="row mt-4 align-items-end">
                                        <div class="col-lg-6">
                                            <h3 class="mb-4"><span class="counter-value" data-target="
                                                @if(!empty($rejectorder))
                                                {{ $rejectorder }}
                                                @else
                                                0
                                                @endif
                                                ">0</span></h3>
                                            <p class="text-success mb-0"><i class="bi bi-arrow-up me-1"></i> 13% Last Month</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <div id="visti_duration_chart" data-colors='["--tb-primary", "--tb-secondary"]' class="apex-charts m-n3 mt-n4" dir="ltr"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-xl-3 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted fs-lg"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Today</a>
                                            <a class="dropdown-item" href="#">Last Week</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                            <a class="dropdown-item" href="#">Current Year</a>
                                        </div>
                                    </div>
                                    <p class="fs-md text-muted mb-0">CONFRIMED ORDER</p>

                                    <div class="row mt-4 align-items-end">
                                        <div class="col-lg-6">
                                            <h3 class="mb-4"><span class="counter-value" data-target="
                                                @if(!empty($confromrder))
                                                {{ $confromrder }}
                                                @else
                                                0
                                                @endif
                                                ">0</span></h3>
                                            <p class="text-danger mb-0"><i class="bi bi-arrow-down me-1"></i> 07.26% Last Week</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <div id="impressions_chart" data-colors='["--tb-secondary"]' class="apex-charts m-n3 mt-n4" dir="ltr"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-xl-3 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted fs-lg"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Today</a>
                                            <a class="dropdown-item" href="#">Last Week</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                            <a class="dropdown-item" href="#">Current Year</a>
                                        </div>
                                    </div>
                                    <p class="fs-md text-muted mb-0">PRODUCTS PROCESSING</p>

                                    <div class="row mt-4 align-items-end">
                                        <div class="col-lg-6">
                                            <h3 class="mb-4"><span class="counter-value" data-target="
                                                @if(!empty($prossaingorder))
                                                {{ $prossaingorder }}
                                                @else
                                                0
                                                @endif
                                                ">0</span></h3>
                                            <p class="text-success mb-0"><i class="bi bi-arrow-up me-1"></i> 13% Last Month</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <div id="visti_duration_chart1" data-colors='["--tb-primary"]' class="apex-charts m-n3 mt-n4" dir="ltr"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-xl-3 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted fs-lg"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Today</a>
                                            <a class="dropdown-item" href="#">Last Week</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                            <a class="dropdown-item" href="#">Current Year</a>
                                        </div>
                                    </div>
                                    <p class="fs-md text-muted mb-0">PRODUCTS IN TRANSIT</p>

                                    <div class="row mt-4 align-items-end">
                                        <div class="col-lg-6">
                                            <h3 class="mb-4"><span class="counter-value" data-target="
                                                @if(!empty($tranjenorder))
                                                {{ $tranjenorder }}
                                                @else
                                                0
                                                @endif
                                                ">0</span></h3>
                                            <p class="text-success mb-0"><i class="bi bi-arrow-up me-1"></i> 13% Last Month</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <div id="visti_duration_chart2" data-colors='["--tb-primary"]' class="apex-charts m-n3 mt-n4" dir="ltr"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-xl-3 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted fs-lg"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Today</a>
                                            <a class="dropdown-item" href="#">Last Week</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                            <a class="dropdown-item" href="#">Current Year</a>
                                        </div>
                                    </div>
                                    <p class="fs-md text-muted mb-0">DELIVERY ORDER</p>

                                    <div class="row mt-4 align-items-end">
                                        <div class="col-lg-6">
                                            <h3 class="mb-4"><span class="counter-value" data-target="
                                                @if(!empty($deliveryorder))
                                                {{ $deliveryorder }}
                                                @else
                                                0
                                                @endif
                                                ">0</span></h3>
                                            <p class="text-success mb-0"><i class="bi bi-arrow-up me-1"></i> 13% Last Month</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <div id="visti_duration_chart3" data-colors='["--tb-primary"]' class="apex-charts m-n3 mt-n4" dir="ltr"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-xl-3 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted fs-lg"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Today</a>
                                            <a class="dropdown-item" href="#">Last Week</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                            <a class="dropdown-item" href="#">Current Year</a>
                                        </div>
                                    </div>
                                    <p class="fs-md text-muted mb-0">CANCELL ORDER</p>

                                    <div class="row mt-4 align-items-end">
                                        <div class="col-lg-6">
                                            <h3 class="mb-4"><span class="counter-value" data-target="
                                                @if(!empty($cancalorder))
                                                {{ $cancalorder }}
                                                @else
                                                0
                                                @endif
                                                ">0</span></h3>
                                            <p class="text-success mb-0"><i class="bi bi-arrow-up me-1"></i> 13% Last Month</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <div id="visti_duration_chart4" data-colors='["--tb-primary"]' class="apex-charts m-n3 mt-n4" dir="ltr"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-xl-3 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted fs-lg"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Today</a>
                                            <a class="dropdown-item" href="#">Last Week</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                            <a class="dropdown-item" href="#">Current Year</a>
                                        </div>
                                    </div>
                                    <p class="fs-md text-muted mb-0">FAKE ORDER</p>

                                    <div class="row mt-4 align-items-end">
                                        <div class="col-lg-6">
                                            <h3 class="mb-4"><span class="counter-value" data-target="
                                                @if(!empty($fakeorder))
                                                {{ $fakeorder }}
                                                @else
                                                0
                                                @endif
                                                ">0</span> </h3>
                                            <p class="text-success mb-0"><i class="bi bi-arrow-up me-1"></i> 13% Last Month</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <div id="views_chart" data-colors='["--tb-primary"]' class="apex-charts m-n3 mt-n4" dir="ltr"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->

                    </div><!--end row-->

                    <div class="row">
                        <div class="col-xl-9">
                            <div class="card">
                                <div class="card-header d-flex align-items-center flex-wrap gap-3">
                                    <h5 class="card-title mb-0 flex-grow-1">Performance Overview</h5>
                                    <ul class="nav nav-pills flex-shrink-0" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#pageViews" role="tab" aria-selected="true">
                                                MONTH
                                            </a>
                                        </li>
										 <li class="nav-item" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#conversations" role="tab" aria-selected="false" tabindex="-1">
                                                DAYS
                                            </a>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#Clicks" role="tab" aria-selected="false" tabindex="-1">
                                                STROK HISTORY
                                            </a>
                                        </li>

                                    </ul>
                                </div><!--end card-header-->
                                <div class="card-body ps-0">
                                    <div class="tab-content text-muted">
                                        <div class="tab-pane active" id="pageViews" role="tabpanel">
                                            <div id="pageviews_overview" data-colors='["--tb-light", "--tb-primary", "--tb-secondary"]' class="apex-charts" dir="ltr"></div>
                                        </div><!--end tab-->
                                        <div class="tab-pane" id="Clicks" role="tabpanel">
                                            <div id="clicks_Chart" data-colors='["--tb-light", "--tb-secondary", "--tb-primary"]' class="apex-charts" dir="ltr"></div>
                                        </div><!--end tab-->
                                        <div class="tab-pane" id="conversations" role="tabpanel">
                                            <div id="column_distributed" data-colors='["--tb-primary-text-emphasis"]' class="apex-charts" dir="ltr"></div>
                                        </div><!--end tab-->
                                    </div><!--end tab-content-->
                                </div>
                            </div>
                        </div><!--end col-->

					     <div class="col-xxl-3">
                                    <div class="card card-height-100">
                                        <div class="card-header d-flex">
                                            <h5 class="card-title mb-0 flex-grow-1">Daily Progress</h5>
                                            <div class="flex-shrink-0">
                                                <div class="dropdown card-header-dropdown sortble-dropdown">
                                                    <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="text-muted dropdown-title">ORDER HISTORY</span> <i class="mdi mdi-chevron-down ms-1"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <button class="dropdown-item">Delivered</button>
                                                        <button class="dropdown-item">Cancelled</button>
                                                        <button id="rejectedordersr" class="dropdown-item">REJECTED</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body text-center">
                                            <div id="stroked_radialbar" data-colors='["--tb-primary"]' class="apex-charts" dir="ltr"></div> <br></br>
                                            <p class="text-muted mb-0">Very good, keep improving the quality of your learning</p>
                                        </div>
                                    </div>
                                </div><!--end col-->


                    </div><!--end row-->









                    <div class="row">
                        <div class="col-xxl col-sm-6">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="avatar-sm float-end">
                                        <div class="avatar-title bg-primary-subtle text-primary fs-3xl rounded">
                                            <i class="ph ph-briefcase"></i>
                                        </div>
                                    </div>
                                    <h4>$<span class="counter-value" data-target="368.24">0</span>M </h4>
                                    <p class="text-muted mb-4">TOTAL ORDER PLACE</p>
                                    <p class="text-muted mb-0"><span class="badge bg-success-subtle text-success"><i
                                                class="bi bi-arrow-up"></i> 4.65%</span> vs last month</p>
                                </div>
                                <div class="progress progress-sm rounded-0" role="progressbar" aria-valuenow="76"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: 76%"></div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-xxl col-sm-6">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="avatar-sm float-end">
                                        <div class="avatar-title bg-secondary-subtle text-secondary fs-3xl rounded">
                                            <i class="ph ph-wallet"></i>
                                        </div>
                                    </div>
                                    <h4>$<span class="counter-value" data-target="1454.71">0</span>k </h4>
                                    <p class="text-muted mb-4">TOTAL ORDER DELIVERED</p>
                                    <p class="text-muted mb-0"><span class="badge bg-success-subtle text-success"><i
                                                class="bi bi-arrow-up"></i> 1.33%</span> vs last month</p>
                                </div>
                                <div class="progress progress-sm rounded-0" role="progressbar" aria-valuenow="88"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-secondary" style="width: 88%"></div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-xxl col-sm-6">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="avatar-sm float-end">
                                        <div class="avatar-title bg-danger-subtle text-danger fs-3xl rounded">
                                            <i class="bi bi-broadcast"></i>
                                        </div>
                                    </div>
                                    <h4><span class="counter-value" data-target="33.37"></span>%</h4>
                                    <p class="text-muted mb-4">TOTAL CANCELLED</p>
                                    <p class="text-muted mb-0"><span class="badge bg-success-subtle text-success"><i
                                                class="bi bi-arrow-up"></i> 2.69%</span> vs last month</p>
                                </div>
                                <div class="progress progress-sm rounded-0" role="progressbar" aria-valuenow="18"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-danger" style="width: 18%"></div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-xxl col-sm-6">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="avatar-sm float-end">
                                        <div class="avatar-title bg-success-subtle text-success fs-3xl rounded">
                                            <i class="ph ph-rocket-launch"></i>
                                        </div>
                                    </div>
                                    <h4><span class="counter-value" data-target="648"></span></h4>
                                    <p class="text-muted mb-4">TOTAL REJECTED</p>
                                    <p class="text-muted mb-0"><span class="badge bg-danger-subtle text-danger"><i
                                                class="bi bi-arrow-down"></i> 0.78%</span> vs last month</p>
                                </div>
                                <div class="progress progress-sm rounded-0" role="progressbar" aria-valuenow="49"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-success" style="width: 49%"></div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-xxl">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="avatar-sm float-end">
                                        <div class="avatar-title bg-warning-subtle text-warning fs-3xl rounded">
                                            <i class="ph ph-heartbeat"></i>
                                        </div>
                                    </div>
                                    <h4><span class="counter-value" data-target="1742"></span></h4>
                                    <p class="text-muted mb-4">TOTAL STROK PRODUCT</p>
                                    <p class="text-muted mb-0"><span class="badge bg-success-subtle text-success"><i
                                                class="bi bi-arrow-up"></i> 7.93%</span> vs last month</p>
                                </div>
                                <div class="progress progress-sm rounded-0" role="progressbar" aria-valuenow="83"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-warning" style="width: 83%"></div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->


                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Steex.
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

@endsection
