@extends('admin.layoutsMain.adminapp')

@section('content')



    <div id="layout-wrapper">
        <div class="">
            <div class="">

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
                                        <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?
                                        </p>
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

                <!-- ============================================================== -->
                <!-- Start right Content here -->
                <!-- ============================================================== -->
                <div class="main-content">

                    <div class="page-content">
                        <div class="container-fluid">

                            <!-- start page title -->

                            <!-- end page title -->

                            <div id="instructorList">



                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="row align-items-center g-2">
                                                    <div class="col-lg-3 me-auto">
                                                        <h6 class="card-title mb-0">ORDER PLACE List <span
                                                                class="badge bg-primary ms-1 align-baseline">
                                                                @if (!empty($totalorder))
                                                                    {{ $totalorder }}
                                                                @else
                                                                    0
                                                                @endif
                                                            </span></h6>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xl-2 col-lg-3 col-sm-5">
                                                        <div class="search-box">
                                                            <input type="text" class="form-control search"
                                                                placeholder="Search for instructors, email, contact number or something...">
                                                            <i class="ri-search-line search-icon"></i>
                                                        </div>
                                                    </div>
                                                    <!--end col-->

                                                </div>
                                            </div>
                                            <div class="card-body mt-3">
                                                <div class="table-responsive table-card">
                                                    <table
                                                        class="table table-centered align-middle table-custom-effect table-nowrap mb-0">
                                                        <thead class="table-light">
                                                            <tr>

                                                                <th scope="col" class="sort cursor-pointer"
                                                                    data-sort="instructor_id">SL</th>
                                                                <th scope="col" class="sort cursor-pointer"
                                                                    data-sort="instructor">DATE</th>
                                                                <th scope="col" class="sort cursor-pointer"
                                                                    data-sort="courses_total">ORDER ID</th>
                                                                <th scope="col" class="sort cursor-pointer"
                                                                    data-sort="email">CUSTOMAR NAME</th>
                                                                <th scope="col" class="sort cursor-pointer"
                                                                    data-sort="experience">PHONE</th>
                                                                <th scope="col" class="sort cursor-pointer"
                                                                    data-sort="students">AREA</th>
                                                                <th scope="col" class="sort cursor-pointer"
                                                                    data-sort="contact">PRODUCT NAME</th>
                                                                <th scope="col" class="sort cursor-pointer"
                                                                    data-sort="rating">PRICE</th>
                                                                <th scope="col" class="sort cursor-pointer"
                                                                    data-sort="rating">PAYMENT STATUS</th>
                                                                <th scope="col" class="sort cursor-pointer"
                                                                    data-sort="rating">ORDER STATUS</th>
                                                                <th scope="col">Action</th>
                                                            </tr>
                                                        </thead>
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
                                                                            @if ($orders->payment_status == 'Paid')
                                                                                <span
                                                                                    class="badge bg-success-subtle text-success">{{ $orders->payment_status }}</span>
                                                                            @else
                                                                                <span
                                                                                    class="badge bg-danger-subtle text-danger">{{ $orders->payment_status }}</span>
                                                                            @endif
                                                                        </td>
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
                                                                                    <button href="#addInstructor"
                                                                                        id="getorderdid"
                                                                                        value="{{ $orders->orders_id }}"
                                                                                        data-bs-toggle="modal"
                                                                                        class="btn btn-subtle-secondary btn-icon btn-sm edit-item-btn"><i
                                                                                            class="ph-pencil"></i></button>
                                                                                </li>
                                                                                <li>
                                                                                    <button href="#deleteRecordModal"
                                                                                        id="getorderdidfordelte"
                                                                                        value="{{ $orders->orders_id }}"
                                                                                        data-bs-toggle="modal"
                                                                                        class="btn btn-subtle-danger btn-icon btn-sm remove-item-btn"><i
                                                                                            class="ri-flutter-fill"></i></button>
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
                                                    </table><!-- end table -->

                                                </div>
                                                <div class="row align-items-center mt-4 pt-3" id="pagination-element">
                                                    <div class="col-sm">
                                                        <div class="text-muted text-center text-sm-start">
                                                            Showing <span class="fw-semibold">10</span> of <span
                                                                class="fw-semibold">15</span> Results
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-sm-auto mt-3 mt-sm-0">
                                                        <div class="pagination-wrap hstack justify-content-center gap-2">
                                                            <a class="page-item pagination-prev disabled"
                                                                href="javascript:void(0)">
                                                                Previous
                                                            </a>
                                                            <ul class="pagination listjs-pagination mb-0"></ul>
                                                            <a class="page-item pagination-next"
                                                                href="javascript:void(0)">
                                                                Next
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->

                            </div>

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

            </div>
            <!-- END layout-wrapper -->

            <!-- Modal -->
            <div class="modal fade" id="addInstructor" tabindex="-1" aria-labelledby="addInstructorModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content border-0">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addInstructorModalLabel">ORDER TRACKING ID- <input
                                    disabled="disabled" style="border: none;" id="orders_idmain"></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                id="close-addInstructorModal"></button>
                        </div>

                        <form class="tablelist-form" id="orderfromedit" novalidate autocomplete="off">
                            <div class="modal-body">
                                <div id="alert-error-msg" class="d-none alert alert-danger py-2"></div>
                                <input type="hidden" name="orders_id" id="orders_id">
                                {{-- <input type="hidden" id="rating-field"> --}}


                                <div class="row">

                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="customer_name" class="form-label">CUSTOMAR NAME</label>
                                            <input type="text" class="form-control" id="customer_name"
                                                name="customer_name" value="FARHANA TANJIN MONIKA">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="customer_phone" class="form-label">CUSTOMAR PHONE</label>
                                            <input type="text" class="form-control" id="customer_phone"
                                                name="customer_phone" value="01674803314">
                                        </div>
                                    </div>
                                    <!--end col-->



                                    <div class="col-lg-12">
                                        <div style="margin-top: 10px;" class="form-group">
                                            <label for="district">CUSTOMAR AREA <span>*</span></label>
                                            <select type="text" name="customer_area" id="customer_area"
                                                class="form-control select2">
                                                @foreach ($newdata as $newdatas)
                                                    {

                                                    <option value="{{ $newdatas->city_id }}">{{ $newdatas->city_name }}
                                                    </option>

                                                    }
                                                @endforeach
                                            </select>


                                        </div>
                                        <div class="">
                                            <input type="hidden" name="customer_area_change" id="customer_area_change">
                                        </div>
                                        <!-- form-group end -->
                                        <div style="margin-top: 10px;" class="form-group">
                                            <label for="district">CUSTOMAR ZONE <span>*</span></label>
                                            <select type="text" name="customer_zone" id="customer_zone"
                                                class="form-control select2">
                                                {{-- <option value="10">Select Option</option> --}}

                                            </select>


                                        </div>
                                        <div class="">
                                            <input type="hidden" name="customer_zone_change" id="customer_zone_change">
                                        </div>
                                        <!-- form-group end -->


                                        <div style="margin-top: 10px;" class="form-group">
                                            <label for="district">CUSTOMAR PARTICULAR ZONE <span>*</span></label>
                                            <select type="text" name="customer_particular_zone" disabled
                                                id="customer_particular_zone" class="form-control select2">
                                                {{-- <option value="">Select Option</option> --}}

                                            </select>


                                        </div>
                                        <div class="">
                                            <input type="hidden" name="customer_particular_zone_change" id="customer_particular_zone_change">
                                        </div>
                                        <!-- form-group end -->
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="customer_full_address" class="form-label">DELIVERY ADDRESS</label>
                                            <input type="text" class="form-control" id="customer_full_address"
                                                name="customer_full_address"
                                                value="10/14, BLOCK F, JOINT QUATER, AZIZ MOHOLLAH, MOHAMMADPUR DHAKA 1207">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="product_name" class="form-label">PRODUCT</label>
                                            <input type="text" class="form-control" id="product_name"
                                                name="product_name" value="Oil Wax Man Long Wallet">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="readonlyInput" class="form-label">Price</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">P</span>
                                                <input type="text" class="form-control" id="product_price"
                                                    name="product_price" value="1200">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="quantity" class="form-label">Quantity</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">Q</span>
                                                <input type="number" class="form-control" id="quantity"
                                                    name="quantity" placeholder="Q-N" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="discount" class="form-label">Discount</label>
                                            <input type="number" class="form-control" id="discount" name="discount"
                                                placeholder="Discount" required>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="total_bill" class="form-label">Total Bill</label>
                                            <input type="text" class="form-control" id="total_bill" name="total_bill"
                                                value="1200">
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="Advance" class="form-label">Advance</label>
                                            <input type="number" class="form-control" id="Advance" name="Advance"
                                                placeholder="Advance" required>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="cash_collection" class="form-label">Cash Collection</label>
                                            <input type="text" class="form-control" id="cash_collection"
                                                name="cash_collection" value="800">
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="order_status" class="form-label">Order Status<span
                                                    class="text-danger">*</span></label>

                                            <select class="form-select" id="order_status" name="order_status">
                                                <option value="PLACE ORDER">Selected Status</option>
                                                <option value="CONFRIM ORDER">Confirmed Order</option>
                                                <option value="REJECTED ORDER">Rejected Order</option>
                                                <option value="CANCELL ORDER">Cancelled Order</option>

                                            </select>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="payment_status" class="form-label">PAYMENT Status<span
                                                    class="text-danger">*</span></label>

                                            <select class="form-select" id="payment_status" name="payment_status">
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
                                            <input type="text" id="extra_note" name="extra_note" class="form-control"
                                                placeholder="Enter Any Note" required>
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

            <!-- deleteRecordModal -->
            <div id="deleteRecordModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" id="deleteRecord-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-md-5">
                            <div class="text-center">
                                <div class="text-danger">
                                    <i class="ri-flutter-fill display-5"></i>
                                </div>
                                <div class="mt-4">
                                    <h4 class="mb-2">Are you sure Order Is Fake ?</h4>
                                    <p class="text-muted mx-3 mb-0">Are you sure you want to remove fake order ?</p>
                                </div>
                            </div>
                            <div class="d-flex gap-2 justify-content-center mt-4 pt-2 mb-2">
                                <button type="button" class="btn w-sm btn-light btn-hover"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn w-sm btn-danger btn-hover" id="make_it_fake">Yes,
                                    It!</button>
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

                    <button type="button" class="btn-close btn-close-white ms-auto" id="customizerclose-btn"
                        data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body p-0">
                    <div data-simplebar class="h-100">
                        <div class="p-4">
                            <h6 class="fs-md mb-1">Layout</h6>
                            <p class="text-muted fs-sm">Choose your layout</p>

                            <div class="row">
                                <div class="col-4">
                                    <div class="form-check card-radio">
                                        <input id="customizer-layout01" name="data-layout" type="radio"
                                            value="vertical" class="form-check-input">
                                        <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout01">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span
                                                            class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
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
                                        <input id="customizer-layout02" name="data-layout" type="radio"
                                            value="horizontal" class="form-check-input">
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
                                        <input id="customizer-layout03" name="data-layout" type="radio"
                                            value="twocolumn" class="form-check-input">
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
                                        <input id="customizer-theme01" name="data-theme" type="radio" value="default"
                                            class="form-check-input">
                                        <label class="form-check-label p-0" for="customizer-theme01">
                                            <img src="assets/images/custom-theme/light-mode.png" alt=""
                                                class="img-fluid">
                                        </label>
                                    </div>
                                    <h5 class="fs-sm text-center fw-medium mt-2">Default</h5>
                                </div>
                                <div class="col-6">
                                    <div class="form-check card-radio">
                                        <input id="customizer-theme02" name="data-theme" type="radio" value="material"
                                            class="form-check-input">
                                        <label class="form-check-label p-0" for="customizer-theme02">
                                            <img src="assets/images/custom-theme/material.png" alt=""
                                                class="img-fluid">
                                        </label>
                                    </div>
                                    <h5 class="fs-sm text-center fw-medium mt-2">Material</h5>
                                </div>
                                <div class="col-6">
                                    <div class="form-check card-radio">
                                        <input id="customizer-theme03" name="data-theme" type="radio" value="creative"
                                            class="form-check-input">
                                        <label class="form-check-label p-0" for="customizer-theme03">
                                            <img src="assets/images/custom-theme/creative.png" alt=""
                                                class="img-fluid">
                                        </label>
                                    </div>
                                    <h5 class="fs-sm text-center fw-medium mt-2">Creative</h5>
                                </div>
                                <div class="col-6">
                                    <div class="form-check card-radio">
                                        <input id="customizer-theme04" name="data-theme" type="radio" value="minimal"
                                            class="form-check-input">
                                        <label class="form-check-label p-0" for="customizer-theme04">
                                            <img src="assets/images/custom-theme/minimal.png" alt=""
                                                class="img-fluid">
                                        </label>
                                    </div>
                                    <h5 class="fs-sm text-center fw-medium mt-2">Minimal</h5>
                                </div>
                                <div class="col-6">
                                    <div class="form-check card-radio">
                                        <input id="customizer-theme05" name="data-theme" type="radio" value="modern"
                                            class="form-check-input">
                                        <label class="form-check-label p-0" for="customizer-theme05">
                                            <img src="assets/images/custom-theme/modern.png" alt=""
                                                class="img-fluid">
                                        </label>
                                    </div>
                                    <h5 class="fs-sm text-center fw-medium mt-2">Modern</h5>
                                </div>
                                <!-- end col -->
                                <div class="col-6">
                                    <div class="form-check card-radio">
                                        <input id="customizer-theme06" name="data-theme" type="radio"
                                            value="interaction" class="form-check-input">
                                        <label class="form-check-label p-0" for="customizer-theme06">
                                            <img src="assets/images/custom-theme/interaction.png" alt=""
                                                class="img-fluid">
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
                                            <input class="form-check-input" type="radio" name="data-bs-theme"
                                                id="layout-mode-light" value="light">
                                            <label class="form-check-label p-0 bg-transparent" for="layout-mode-light">
                                                <img src="assets/images/custom-theme/light-mode.png" alt=""
                                                    class="img-fluid">
                                            </label>
                                        </div>
                                        <h5 class="fs-sm text-center fw-medium mt-2">Light</h5>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-check card-radio dark">
                                            <input class="form-check-input" type="radio" name="data-bs-theme"
                                                id="layout-mode-dark" value="dark">
                                            <label class="form-check-label p-0 bg-transparent" for="layout-mode-dark">
                                                <img src="assets/images/custom-theme/dark-mode.png" alt=""
                                                    class="img-fluid">
                                            </label>
                                        </div>
                                        <h5 class="fs-sm text-center fw-medium mt-2">Dark</h5>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-check card-radio brand">
                                            <input class="form-check-input" type="radio" name="data-bs-theme"
                                                id="layout-mode-brand" value="brand" disabled>
                                            <h6
                                                class="text-danger fs-18 lh-base text-center position-absolute top-50 start-50 translate-middle z-1 mb-0">
                                                Coming Soon</h6>
                                            <label class="form-check-label cursor-none p-0 bg-transparent opacity-75"
                                                for="layout-mode-brand">
                                                <img src="assets/images/custom-theme/brand-mode.png" alt=""
                                                    class="img-fluid">
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
                                            <input class="form-check-input" type="radio" name="data-layout-width"
                                                id="layout-width-fluid" value="fluid">
                                            <label class="form-check-label p-0 avatar-md w-100" for="layout-width-fluid">
                                                <span class="d-flex gap-1 h-100">
                                                    <span class="flex-shrink-0">
                                                        <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                            <span
                                                                class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
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
                                            <input class="form-check-input" type="radio" name="data-layout-width"
                                                id="layout-width-boxed" value="boxed">
                                            <label class="form-check-label p-0 avatar-md w-100 px-2"
                                                for="layout-width-boxed">
                                                <span class="d-flex gap-1 h-100 border-start border-end">
                                                    <span class="flex-shrink-0">
                                                        <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                            <span
                                                                class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
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
                                    <input type="radio" class="btn-check" name="data-layout-position"
                                        id="layout-position-fixed" value="fixed">
                                    <label class="btn btn-light w-sm" for="layout-position-fixed">Fixed</label>

                                    <input type="radio" class="btn-check" name="data-layout-position"
                                        id="layout-position-scrollable" value="scrollable">
                                    <label class="btn btn-light w-sm ms-0"
                                        for="layout-position-scrollable">Scrollable</label>
                                </div>
                            </div>

                            <h6 class="mt-4 fs-md mb-1">Topbar Color</h6>
                            <p class="text-muted fs-sm">Choose Light or Dark Topbar Color.</p>

                            <div class="row">
                                <div class="col-4">
                                    <div class="form-check card-radio">
                                        <input class="form-check-input" type="radio" name="data-topbar"
                                            id="topbar-color-light" value="light">
                                        <label class="form-check-label p-0 avatar-md w-100" for="topbar-color-light">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span
                                                            class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
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
                                        <input class="form-check-input" type="radio" name="data-topbar"
                                            id="topbar-color-dark" value="dark">
                                        <label class="form-check-label p-0 avatar-md w-100" for="topbar-color-dark">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span
                                                            class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
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
                                            <input class="form-check-input" type="radio" name="data-sidebar-size"
                                                id="sidebar-size-default" value="lg">
                                            <label class="form-check-label p-0 avatar-md w-100"
                                                for="sidebar-size-default">
                                                <span class="d-flex gap-1 h-100">
                                                    <span class="flex-shrink-0">
                                                        <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                            <span
                                                                class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
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
                                            <input class="form-check-input" type="radio" name="data-sidebar-size"
                                                id="sidebar-size-compact" value="md">
                                            <label class="form-check-label p-0 avatar-md w-100"
                                                for="sidebar-size-compact">
                                                <span class="d-flex gap-1 h-100">
                                                    <span class="flex-shrink-0">
                                                        <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                            <span
                                                                class="d-block p-1 bg-primary-subtle rounded mb-2"></span>
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
                                            <input class="form-check-input" type="radio" name="data-sidebar-size"
                                                id="sidebar-size-small" value="sm">
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
                                            <input class="form-check-input" type="radio" name="data-sidebar-size"
                                                id="sidebar-size-small-hover" value="sm-hover">
                                            <label class="form-check-label p-0 avatar-md w-100"
                                                for="sidebar-size-small-hover">
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
                                            <input class="form-check-input" type="radio" name="data-layout-style"
                                                id="sidebar-view-default" value="default">
                                            <label class="form-check-label p-0 avatar-md w-100"
                                                for="sidebar-view-default">
                                                <span class="d-flex gap-1 h-100">
                                                    <span class="flex-shrink-0">
                                                        <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                            <span
                                                                class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
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
                                            <input class="form-check-input" type="radio" name="data-layout-style"
                                                id="sidebar-view-detached" value="detached">
                                            <label class="form-check-label p-0 avatar-md w-100"
                                                for="sidebar-view-detached">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-flex p-1 gap-1 align-items-center px-2">
                                                        <span class="d-block p-1 bg-primary-subtle rounded me-1"></span>
                                                        <span
                                                            class="d-block p-1 pb-0 px-2 bg-primary-subtle ms-auto"></span>
                                                        <span class="d-block p-1 pb-0 px-2 bg-primary-subtle"></span>
                                                    </span>
                                                    <span class="d-flex gap-1 h-100 p-1 px-2">
                                                        <span class="flex-shrink-0">
                                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                                <span
                                                                    class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                                <span
                                                                    class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                                <span
                                                                    class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
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
                                        <div class="form-check sidebar-setting card-radio" data-bs-toggle="collapse"
                                            data-bs-target="#collapseBgGradient.show">
                                            <input class="form-check-input" type="radio" name="data-sidebar"
                                                id="sidebar-color-light" value="light">
                                            <label class="form-check-label p-0 avatar-md w-100"
                                                for="sidebar-color-light">
                                                <span class="d-flex gap-1 h-100">
                                                    <span class="flex-shrink-0">
                                                        <span
                                                            class="bg-white border-end d-flex h-100 flex-column gap-1 p-1">
                                                            <span
                                                                class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
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
                                        <div class="form-check sidebar-setting card-radio" data-bs-toggle="collapse"
                                            data-bs-target="#collapseBgGradient.show">
                                            <input class="form-check-input" type="radio" name="data-sidebar"
                                                id="sidebar-color-dark" value="dark">
                                            <label class="form-check-label p-0 avatar-md w-100"
                                                for="sidebar-color-dark">
                                                <span class="d-flex gap-1 h-100">
                                                    <span class="flex-shrink-0">
                                                        <span class="bg-primary d-flex h-100 flex-column gap-1 p-1">
                                                            <span
                                                                class="d-block p-1 px-2 bg-soft-light rounded mb-2"></span>
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
                                        <button class="btn btn-link avatar-md w-100 p-0 overflow-hidden border collapsed"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseBgGradient" aria-expanded="false"
                                            aria-controls="collapseBgGradient">
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
                                            <input class="form-check-input" type="radio" name="data-sidebar"
                                                id="sidebar-color-gradient" value="gradient">
                                            <label class="form-check-label p-0 avatar-xs rounded-circle"
                                                for="sidebar-color-gradient">
                                                <span class="avatar-title rounded-circle bg-vertical-gradient"></span>
                                            </label>
                                        </div>
                                        <div class="form-check sidebar-setting card-radio">
                                            <input class="form-check-input" type="radio" name="data-sidebar"
                                                id="sidebar-color-gradient-2" value="gradient-2">
                                            <label class="form-check-label p-0 avatar-xs rounded-circle"
                                                for="sidebar-color-gradient-2">
                                                <span class="avatar-title rounded-circle bg-vertical-gradient-2"></span>
                                            </label>
                                        </div>
                                        <div class="form-check sidebar-setting card-radio">
                                            <input class="form-check-input" type="radio" name="data-sidebar"
                                                id="sidebar-color-gradient-3" value="gradient-3">
                                            <label class="form-check-label p-0 avatar-xs rounded-circle"
                                                for="sidebar-color-gradient-3">
                                                <span class="avatar-title rounded-circle bg-vertical-gradient-3"></span>
                                            </label>
                                        </div>
                                        <div class="form-check sidebar-setting card-radio">
                                            <input class="form-check-input" type="radio" name="data-sidebar"
                                                id="sidebar-color-gradient-4" value="gradient-4">
                                            <label class="form-check-label p-0 avatar-xs rounded-circle"
                                                for="sidebar-color-gradient-4">
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
                                        <input class="form-check-input" type="radio" name="data-sidebar-image"
                                            id="sidebarimg-none" value="none">
                                        <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-none">
                                            <span
                                                class="avatar-md w-auto bg-light d-flex align-items-center justify-content-center">
                                                <i class="ri-close-fill fs-3xl"></i>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidebar-image"
                                            id="sidebarimg-01" value="img-1">
                                        <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-01">
                                            <img src="assets/images/sidebar/img-sm-1.jpg" alt=""
                                                class="avatar-md w-auto object-cover">
                                        </label>
                                    </div>

                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidebar-image"
                                            id="sidebarimg-02" value="img-2">
                                        <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-02">
                                            <img src="assets/images/sidebar/img-sm-2.jpg" alt=""
                                                class="avatar-md w-auto object-cover">
                                        </label>
                                    </div>
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidebar-image"
                                            id="sidebarimg-03" value="img-3">
                                        <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-03">
                                            <img src="assets/images/sidebar/img-sm-3.jpg" alt=""
                                                class="avatar-md w-auto object-cover">
                                        </label>
                                    </div>
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidebar-image"
                                            id="sidebarimg-04" value="img-4">
                                        <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-04">
                                            <img src="assets/images/sidebar/img-sm-4.jpg" alt=""
                                                class="avatar-md w-auto object-cover">
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
                                            <input class="form-check-input" type="radio" name="data-preloader"
                                                id="preloader-view-custom" value="enable">
                                            <label class="form-check-label p-0 avatar-md w-100"
                                                for="preloader-view-custom">
                                                <span class="d-flex gap-1 h-100">
                                                    <span class="flex-shrink-0">
                                                        <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                            <span
                                                                class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
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
                                                    <span class="spinner-border text-primary avatar-xxs m-auto"
                                                        role="status">
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
                                            <input class="form-check-input" type="radio" name="data-preloader"
                                                id="preloader-view-none" value="disable">
                                            <label class="form-check-label p-0 avatar-md w-100"
                                                for="preloader-view-none">
                                                <span class="d-flex gap-1 h-100">
                                                    <span class="flex-shrink-0">
                                                        <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                            <span
                                                                class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
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
            $(document).on('click', '#getorderdidfordelte', function() {
                var getorderid = $(this).val();

                // alert(getorderid);


                $(document).on('click', '#make_it_fake', function() {



                    $.ajax({
                        type: "POST",
                        url: "/admin/plaseorder/isfack/" + getorderid,
                        dataType: 'json',
                        data: getorderid,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
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


        $("#orderfromjustview").submit(function(event) {
            event.preventDefault();

            $.ajax({
                url: '{{ route('admin.plaseorder.save1') }}',
                type: 'POST',
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: $("#orderfromjustview").serializeArray(),
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


        $(document).ready(function() {
            // $("#customer_area").change(function(){
            $(document).on('change', '#customer_area', function() {

                var areavalue = $(this).val();
                // var zonetext = $(this).text();
                var areatext = $('#customer_area').find(":selected").text();
                // alert("I am here.");
                // console.log(zonevalue);
                $('#customer_area_change').val(areatext);

                console.log(areatext);

            });

            $(document).on('change', '#customer_zone', function() {

            var zonevalue = $(this).val();
            // var zonetext = $(this).text();
            var zonetext = $('#customer_zone').find(":selected").text();
            // alert("I am here.");
            // console.log(zonevalue);
            $('#customer_zone_change').val(zonetext);

            console.log(zonetext);

            });


            $(document).on('change', '#customer_particular_zone', function() {
            var pzonevalue = $(this).val();
            // var zonetext = $(this).text();
            var pzonetext = $('#customer_particular_zone').find(":selected").text();
            // alert("I am here.");
            // console.log(zonevalue);
            $('#customer_particular_zone_change').val(pzonetext);

            console.log(pzonetext);
            });







            // var orders_id = $('#orders_id').val();
            // var customer_name = $('#customer_name').val();
            // var customer_phone = $('#customer_phone').val();
            // var customer_area = $('#customer_area').val();
            // var customer_zone = $('#customer_zone').val();
            // var customer_particular_zone = pzonetext;
            // var customer_full_address = $('#customer_full_address').val();
            // var product_name = $('#product_name').val();
            // var quantity = $('#quantity').val();
            // var discount = $('#discount').val();
            // var total_bill = $('#total_bill').val();
            // var Advance = $('#Advance').val();
            // var cash_collection = $('#cash_collection').val();
            // var extra_note = $('#extra_note').val();
            // var payment_status = $('#payment_status').val();
            // var order_status = $('#order_status').val();

            // $datafrom = {
            //     'orders_id': orders_id,
            //     'customer_name': customer_name,
            //     'customer_phone': customer_phone,
            //     'customer_area': customer_area,
            //     'customer_zone': customer_zone,
            //     'customer_particular_zone': customer_particular_zone,
            //     'customer_full_address': customer_full_address,
            //     'product_name': product_name,
            //     'quantity': quantity,
            //     'discount': discount,
            //     'total_bill': total_bill,
            //     'Advance': Advance,
            //     'cash_collection': cash_collection,
            //     'extra_note': extra_note,
            //     'payment_status': payment_status,
            //     'order_status': order_status,
            // }









        });


        // console.log(datafrom);




        $("#orderfromedit").submit(function(event) {
                event.preventDefault();
                // add - btn

                $.ajax({
                    url: '{{ route('admin.plaseorder.save') }}',
                    type: 'POST',
                    dataType: 'json',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: $("#orderfromedit").serializeArray(),
                    // data: $datafrom,
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
        $(document).ready(function() {
            // $("#customer_area").change(function(){
















        });














        $(document).ready(function() {
            // $("#customer_area").change(function(){
            $(document).on('change', '#customer_area', function() {

                var city = $(this).val();
                // alert("I am here.");
                console.log(city);

                var $data = {
                    city: city
                }
                $.ajax({
                    type: "GET",
                    url: "{{ route('fontend.zone') }}",
                    data: $data,
                    success: function(response) {
                        console.log(response);
                        var zones = response;
                        // console.log(zones);


                        // console.log(id);

                        var html0 = '<option value="">Select Option</option>';
                        // if(zones.length > 0){
                        //     for(let i =0; i<zones.length; i++){
                        //         html += '<option value="' +  '">\
                        //                 '+'\
                        //                 ';
                        //     }
                        // }

                        for (i = 0; i < zones.length; i++) {
                            var id = zones[i]['zone_id'];
                            var val = zones[i]['zone_name'];
                            html0 += "<option value='" + id + "'>" + val + "</option>";
                        }
                        $("#customer_zone").append(html0);
                        $("#customer_zone").removeAttr("disabled");

                    }
                });



            });


        });





        $(document).ready(function() {
            // $("#customer_area").change(function(){
            $(document).on('change', '#customer_zone', function() {

                var zone = $(this).val();
                // alert(zone);
                console.log(zone);

                var $data = {
                    zone: zone
                }
                $.ajax({
                    type: "GET",
                    url: "{{ route('fontend.particularzone') }}",
                    data: $data,
                    success: function(response) {
                        console.log(response);
                        var pzones = response;
                        // console.log(zones);
                        // alert(pzones);


                        // console.log(id);

                        var html1 = '<option value="">Select Option</option>';

                        // var id = pzones['area_id'];
                        // console.log(id);

                        for (i = 0; i < pzones.length; i++) {
                            var id = pzones[i]['area_id'];
                            var val = pzones[i]['area_name'];
                            html1 += "<option value='" + id + "'>" + val + "</option>";
                        }
                        $("#customer_particular_zone").append(html1);
                        $("#customer_particular_zone").removeAttr("disabled");


                    }
                });



            });
        });
    </script>
@endsection
