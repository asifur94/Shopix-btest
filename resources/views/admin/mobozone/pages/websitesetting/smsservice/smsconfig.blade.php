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
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">SMS Provider Information</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body">


                                        <form class="row g-3">
                                            <div class="col-md-4">
                                                <label for="validationDefault04" class="form-label"> Sms Provider </label>
                                                <select class="form-select" id="validationDefault04" required>
                                                    <option selected disabled value="">Choose...</option>
                                                    <option>Alpha Net</option>
                                                    <option>SSL Wirless</option>
                                                    <option>MetroNET</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="validationDefault02" class="form-label">Api Key</label>
                                                <input type="text" class="form-control" id="validationDefault02" value="****************************" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="validationDefault02" class="form-label">Api Secret OR Sid</label>
                                                <input type="text" class="form-control" id="validationDefault02" value="****************************" required>
                                            </div>


                                            <div class="col-md-4">
                                                <label for="iconrightInput" class="form-label">User Name</label>
                                                <div class="form-icon right">
                                                    <input type="user" class="form-control form-control-icon" id="iconrightInput" placeholder="example@gmail.com">
                                                    <i class=" ri-map-pin-user-line "></i>
                                                </div>
                                            </div>


                                            <div class="col-md-4">
                                                <label for="iconrightInput" class="form-label">Password</label>
                                                <div class="form-icon right">
                                                    <input type="email" class="form-control form-control-icon" id="iconrightInput" placeholder="****************************">
                                                    <i class=" ri-camera-lens-fill "></i>
                                                </div>
                                            </div>












                                            <div class="col-12">
                                                <button class="btn btn-primary" type="submit">Update</button>
                                            </div>
                                        </form>
                                    </div>


                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


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
