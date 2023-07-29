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

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">

                            </div><!-- end card header -->
                            <div class="card-body form-steps">


                                <form class="vertical-navs-step" action="{{ route('admin.website.save') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row gy-5">
                                        <div class="col-lg-3">
                                            <div class="nav flex-column custom-nav nav-pills" role="tablist"
                                                aria-orientation="vertical">




                                            </div>
                                            <!-- end nav -->
                                        </div> <!-- end col-->
                                        <div class="col-lg-6">
                                            <div class="px-lg-4">
                                                <div class="tab-content">

                                                    <!-- end tab pane -->
                                                    <div class="tab-pane fade show active" id="v-pills-bill-address"
                                                        role="tabpanel" aria-labelledby="v-pills-bill-address-tab">


                                                        <div>
                                                            <div class="row g-3">
                                                                <div class="col-12">
                                                                    <label for="address" class="form-label">System
                                                                        Name</label>
                                                                    <input
                                                                        value="{{ !empty($websitedata->website_title) ? $websitedata->website_title : '' }}"
                                                                        type="text" class="form-control"
                                                                        name="website_title" id="website_title"
                                                                        placeholder="Shopix.com.bd">
                                                                        {{-- @dd($websitedata->website_title) --}}
                                                                </div>

                                                                <div class="col-12">
                                                                    <label for="theme_color" class="form-label">Website
                                                                        Theme Color</label>
                                                                    <input
                                                                        value="{{ !empty($websitedata->theme_color) ? $websitedata->theme_color : '' }}"
                                                                        type="text" class="form-control"
                                                                        name="theme_color" id="theme_color"
                                                                        placeholder="#FFFFFF">
                                                                </div>


                                                                <div class="col-12">
                                                                    <label for="system_logo" class="form-label">System
                                                                        Logo</label>
                                                                    <input class="form-control" type="file"
                                                                        id="system_logo" name="system_logo">

                                                                </div>
                                                                    @if (!empty($websitedata->system_logo) )
                                                                        <img width="150px" height="100px" src="{{ asset('uploads/logos/'. $websitedata->system_logo) }}" alt="">
                                                                    @else
                                                                    <div></div>
                                                                    @endif</div>



                                                                <div class="col-12">
                                                                    <label for="header_logo" class="form-label">Header
                                                                        Logo</label>
                                                                    <input class="form-control" type="file"
                                                                        id="header_logo" name="header_logo">
                                                                        <br>
                                                                        @if ( !empty($websitedata->header_logo))
                                                                            <img width="150px" height="100px" src="{{ asset('uploads/logos/'. $websitedata->header_logo) }}" alt="">
                                                                        @else
                                                                        <div></div>
                                                                        @endif
                                                                </div>


                                                                <div class="col-12">
                                                                    <label for="fabicon" class="form-label">Website
                                                                        Fevicon</label>
                                                                    <input width="150px" height="100px" class="form-control" type="file"
                                                                        id="fabicon" name="fabicon">
                                                                </div>

                                                                <br>
                                                                @if (!empty($websitedata->fabicon))
                                                                    <img src="{{ asset('uploads/logos/'. $websitedata->fabicon) }}" alt="">
                                                                @else
                                                                <div></div>
                                                                @endif

                                                            </div>






                                                        </div>
                                                        <div class="d-flex align-items-start gap-3 mt-4">

                                                            <button type="submit"
                                                                class="btn btn-success btn-label right ms-auto nexttab nexttab"
                                                                data-nexttab="v-pills-payment-tab"><i
                                                                    class="ri-arrow-right-line label-icon align-middle fs-lg ms-2"></i>Update</button>
                                                        </div>

                                </form>
                                <form class="vertical-navs-step" action="{{ route('admin.website.save1') }}" method="POST" enctype="multipart/form-data">

                                    @csrf

                                    <hr class="my-4 text-muted">
                                    <div>
                                        <div class="row g-3">

                                            <div class="col-12">
                                                <label for="invoice_logo" class="form-label">Invoice Logo</label>
                                                <input class="form-control" type="file" id="invoice_logo" name="invoice_logo">
                                                <br>
                                                @if (!empty($websitedata1->invoice_logo ))
                                                    <img width="150px" height="100px" src="{{ asset('uploads/logos/'. $websitedata1->invoice_logo) }}" alt="">
                                                @else
                                                <div></div>
                                                @endif
                                            </div>

                                            <div class="col-12">
                                                <label for="address" class="form-label">Address</label>
                                                <input  value="{{ !empty($websitedata1->address) ? $websitedata1->address : '' }}" type="text" class="form-control" id="address" name="address"
                                                    placeholder="10/14, Block F , Aziz Mohollah, Mohammadpur Dhaka 1207">
                                            </div>

                                            <div class="col-12">
                                                <label for="email" class="form-label">Email</label>
                                                <input  value="{{ !empty($websitedata1->email) ? $websitedata1->email : '' }}" type="text" class="form-control" id="email" name="email"
                                                    placeholder="shopix.com.bd@gmail.com">
                                            </div>

                                            <div class="col-12">
                                                <label for="phone" class="form-label">Phone</label>
                                                <input  value="{{ !empty($websitedata1->phone) ? $websitedata1->phone : '' }}" type="text" class="form-control" id="phone" name="phone"
                                                    placeholder="01674803314">
                                            </div>



                                        </div>






                                    </div>
                                    <div class="d-flex align-items-start gap-3 mt-4">

                                        <button type="submit"
                                            class="btn btn-success btn-label right ms-auto nexttab nexttab"
                                            data-nexttab="v-pills-payment-tab"><i
                                                class="ri-arrow-right-line label-icon align-middle fs-lg ms-2"></i>Update</button>
                                    </div>

                            </div>
                            <!-- end tab pane -->

                            <!-- end tab pane -->

                            <!-- end tab pane -->
                        </div>
                        <!-- end tab content -->
                    </div>
                </div>
                <!-- end col -->


            </div>
            <!-- end row -->
            </form>
        </div>
    </div>
    <!-- end -->
    </div>
    <!-- end col -->
    </div>
    <!-- end row -->
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
