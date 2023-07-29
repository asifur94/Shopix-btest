@extends('admin.layoutsMain.adminapp')

@section('content')
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



                        </div><!--end row-->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row align-items-center g-2">
                                            <div class="col-lg-3 me-auto">
                                                <h6 class="card-title mb-0">Sms Template List <span class="badge bg-primary ms-1 align-baseline">235</span></h6>
                                            </div><!--end col-->
                                            <div class="col-xl-2 col-lg-3 col-sm-5">
                                                <div class="search-box">
                                                    <input type="text" class="form-control search" placeholder="Search for instructors, email, contact number or something...">
                                                    <i class="ri-search-line search-icon"></i>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-sm-auto">
                                                <div class="hstack gap-2">

                                                    <a href="#addInstructor" data-bs-toggle="modal" class="btn btn-secondary"><i class="bi bi-plus-circle align-baseline me-1"></i>+ Add Template</a>
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
                                                        <th scope="col" class="sort cursor-pointer" data-sort="instructor">Template Name</th>
                                                        <th scope="col" class="sort cursor-pointer" data-sort="courses_total">Template Type</th>
                                                        <th scope="col" class="sort cursor-pointer" data-sort="email">Template</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
                                                    <tr>

                                                        <td class="courses_total">001</td>

                                                        <td class="courses_total">Order Confrim Template</td>
                                                        <td class="courses_total">Default</td>
                                                        <td class="courses_total">Dear , মেহিদি হাসান স্যার আপনি আমাদের শপিক্স ডট কম থেকে একটি প্রোডাক্ট অর্ডার করেছেন
                                                            অর্ডারটি কনফার্ম করা হলো ।
                                                            থ্যাংক ইউ
                                                            শপিক্স ডট কম
                                                            ০১৮২৬-৪৬২২২৪
                                                            ০৯৬৩৯-৫০৫০১৪</td>




                                                        <!-- Switches Color -->





                                                        <td>
                                                            <ul class="d-flex gap-2 list-unstyled mb-0">

                                                                <li>
                                                                    <a href="#addInstructor" data-bs-toggle="modal" class="btn btn-subtle-secondary btn-icon btn-sm edit-item-btn"><i class="ph-pencil"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#deleteRecordModal" data-bs-toggle="modal" class="btn btn-subtle-danger btn-icon btn-sm remove-item-btn"><i class="ph-trash"></i></a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
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


            <!-- Modal -->
    <div class="modal fade" id="addInstructor" tabindex="-1" aria-labelledby="addInstructorModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content border-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="addInstructorModalLabel">Add SMS Template</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-addInstructorModal"></button>
                </div>

                <form class="tablelist-form" novalidate autocomplete="off">
                    <div class="modal-body">
                        <div id="alert-error-msg" class="d-none alert alert-danger py-2"></div>
                        <input type="hidden" id="id-field">
                        <input type="hidden" id="rating-field">

                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="instructor-name-input" class="form-label">Template Name<span class="text-danger">*</span></label>
                                <input type="text" id="instructor-name-input" class="form-control" placeholder="Enter Sms Template " required>
                            </div>
                        </div>




                        <div class="col-lg-12">
                            <div class="mb-3"></div>
                            <label for="address-input" class="form-label">Massage Template<span class="text-danger">*</span></label>
                            <textarea class="form-control" id="address-input" rows="3" placeholder="Enter sms template" required></textarea>
                        </div>
                        </div>









                    <div class="modal-footer">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-ghost-danger" data-bs-dismiss="modal"><i class="bi bi-x-lg align-baseline me-1"></i> Close</button>
                            <button type="submit" class="btn btn-primary" id="add-btn">Add Template</button>
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
                            <h4 class="mb-2">Are you sure ?</h4>
                            <p class="text-muted mx-3 mb-0">Are you sure you want to remove this record ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 pt-2 mb-2">
                        <button type="button" class="btn w-sm btn-light btn-hover" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn w-sm btn-danger btn-hover" id="delete-record">Yes, Delete It!</button>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /deleteRecordModal -->

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



@section('extraJs')
    <script type="text/javascript">
        Dropzone.autoDiscover = false;
        const dropzone = $("#image").dropzone({
            init: function() {
                this.on('addedfile', function(file) {
                    if (this.files.length > 1) {
                        this.removefile(this.file[0]);
                    }
                });
            },
            url: '{{ route('admin.heroslider.temp') }}',
            maxFiles: 1,
            addRemoveLinks: true,
            acceptedFiles: "image/jpeg,image/png,image/gif",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(file, respinse) {
                $("#image_id").val(respinse.id);
            }
        });

        $("#websitesetupfrom").submit(function(event) {
            event.preventDefault();

            $.ajax({
                url: '{{ route('admin.website.save') }}',
                type: 'POST',
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: $("#websitesetupfrom").serializeArray(),
                success: function(response) {


                    if (response.status == 200) {


                        // alert('Done');
                        // window.location.href = window.location.href;



                    } else {
                        $('.name-error').html(response.errors.name);

                    }
                },
                statusCode: {
                    200: function() {
                        // alert('Done');
                        // window.location.href = window.location.href;

                    }
                },
                error: function(e) {
                    // window.location.href = '{{ route('admin.product.index') }}';
                }
            });

        });

        $("#websitesetupfrom1").submit(function(event) {
            event.preventDefault();

            $.ajax({
                url: '{{ route('admin.website.save1') }}',
                type: 'POST',
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: $("#websitesetupfrom1").serializeArray(),
                success: function(response) {


                    if (response.status == 200) {


                        // alert('Done');
                        window.location.href = window.location.href;



                    } else {
                        $('.name-error').html(response.errors.name);

                    }
                },
                statusCode: {
                    200: function() {
                        // alert('Done');
                        window.location.href = window.location.href;

                    }
                },
                error: function(e) {
                    // window.location.href = '{{ route('admin.product.index') }}';
                }
            });

        });
    </script>
@endsection
