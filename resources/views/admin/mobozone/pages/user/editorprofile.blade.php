@extends('faculty.layoutsMain.editorapp')

@section('content')
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Profile Settings</h4>


                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <!--end col-->
                    <div class="col-xxl-3">
                        <div class="card overflow-hidden">
                            <div>
                                <img src="{{ asset('adminmain') }}/assets/images/small/img-7.jpg" alt=""
                                    class="card-img-top profile-wid-img object-fit-cover" style="height: 200px;">
                                <div>
                                    <input id="profile-foreground-img-file-input" type="file"
                                        class="profile-foreground-img-file-input d-none">
                                    {{-- <label for="profile-foreground-img-file-input"
                                            class="profile-photo-edit btn btn-light btn-sm position-absolute end-0 top-0 m-3">
                                            <i class="ri-image-edit-line align-bottom me-1"></i> Edit Cover Images
                                        </label> --}}
                                </div>
                            </div>
                            <div class="card-body pt-0 mt-n5">
                                <div class="text-center">
                                    <div class="profile-user position-relative d-inline-block mx-auto">


                                        @if (!empty(Auth::guard('faculty')->user()->img))
                                            <img class="avatar-lg rounded-circle object-fit-cover border-0 img-thumbnail user-profile-image"
                                                src="{{ asset('uploads/editor/thumb/small/' . Auth::guard('faculty')->user()->img) }}"
                                                alt="Header Avatar" width="150" height="150">
                                        @else
                                            <img class="avatar-lg rounded-circle object-fit-cover border-0 img-thumbnail user-profile-image"
                                                src="{{ asset('no_image/no_image_small.png') }}">
                                        @endif
                                        <div
                                            class="avatar-xs p-0 rounded-circle profile-photo-edit position-absolute end-0 bottom-0">
                                            <input id="profile-img-file-input" type="file"
                                                class="profile-img-file-input d-none">

                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <h5>{{ Auth::guard('faculty')->user()->name }} <i
                                                class="bi bi-patch-check-fill align-baseline text-info ms-1"></i></h5>
                                        <p class="text-muted">Editor</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xxl-9">
                        <div class="d-flex align-items-center flex-wrap gap-2 mb-4">
                            <ul class="nav nav-pills arrow-navtabs nav-secondary gap-2 flex-grow-1 order-2 order-lg-1"
                                role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab"
                                        aria-selected="true">
                                        Personal Details
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" data-bs-toggle="tab" href="#changePassword" role="tab"
                                        aria-selected="false" tabindex="-1">
                                        Changes Password
                                    </a>
                                </li>

                            </ul>
                            <div class="flex-shrink-0 ms-auto order-1 order-lg-2">
                                <a href="{{ route('editor.profile.index') }}" class="btn btn-secondary"><i
                                        class="bi bi-pencil-square align-baseline me-1"></i> Edit Profile</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="tab-content">

                                <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                    <div class="card-header">
                                        <h6 class="card-title mb-0">Personal Details</h6>
                                    </div>
                                    <div class="card-body">
                                        <form action="" method="post" id="personaldatachangefromid"
                                            name="personaldatachangefromid">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="firstnameInput" class="form-label">
                                                            Name</label>
                                                        <input value="{{ Auth::guard('faculty')->user()->name }}"
                                                            type="text" class="form-control" id="firstnameInput"
                                                            name="name" placeholder="Enter your firstname"
                                                            value="Richard">
                                                        <p class="text-danger error name-error"></p>

                                                    </div>
                                                </div>

                                                <!--end col-->
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="emailInput" class="form-label">Email
                                                            Address</label>
                                                        <input value="{{ Auth::guard('faculty')->user()->email }}"
                                                            type="email" class="form-control" id="emailInput"
                                                            placeholder="Enter your email" name="email">
                                                        <p class="text-danger error email-error"></p>

                                                    </div>
                                                </div>




                                                <!--end col-->
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <div class="from-group">
                                                            <label for="status">Status</label>
                                                            <select name="status" id="status" class="form-control">
                                                                <option value="1"
                                                                    {{ Auth::guard('faculty')->user()->status == 1 ? 'selected' : '' }}>
                                                                    admin</option>
                                                                <option value="0"
                                                                    {{ Auth::guard('faculty')->user()->status == 0 ? 'selected' : '' }}>
                                                                    Block</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end col-->

                                                <div class="col-lg-12">
                                                    <input type="hidden" id="image_id" name="image_id" value="">
                                                    <label for=""><b>Image</b></label><br>
                                                    <div id="image" class="dropzone dz-clickable">
                                                        <div class="dz-message needsclick">
                                                            <br>Drop files here or click to upload.
                                                            <br><br>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="col-lg-12">
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <br>
                                                        <button type="submit" class="btn btn-primary">Updates</button>

                                                    </div>
                                                </div>
                                                <!--end col-->

                                            </div>
                                            <!--end row-->
                                        </form>
                                    </div>
                                </div>
                                <!--end tab-pane-->
                                <div class="tab-pane" id="changePassword" role="tabpanel">
                                    <div class="card-header">
                                        <h6 class="card-title mb-0">Changes Password</h6>
                                    </div>
                                    <div class="card-body">

                                        @if (Session::has('success'))
                                            <div class="alert alert-success" role="alert">
                                                {{ Session::get('success') }}
                                            </div>
                                        @elseif (Session::has('errors'))
                                            <div class="alert alert-danger" role="alert">
                                                {{ Session::get('errors') }}
                                            </div>
                                        @endif
                                        <form action="" method="post" id="passwordchangefromid"
                                            name="passwordchangefromid">
                                            <div class="row g-2 justify-content-lg-between align-items-center">
                                                <div class="col-lg-4">
                                                    <div class="auth-pass-inputgroup">
                                                        <label for="oldpasswordInput" class="form-label">Old
                                                            Password*</label>
                                                        <div class="position-relative">
                                                            <input type="password" class="form-control password-input"
                                                                name="old_password" id="oldpasswordInput"
                                                                placeholder="Enter current password">
                                                            <button
                                                                class="btn btn-link position-absolute top-0 end-0 text-decoration-none text-muted password-addon"
                                                                type="button"><i
                                                                    class="ri-eye-fill align-middle"></i></button>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="auth-pass-inputgroup">
                                                        <label for="password-input" class="form-label">New
                                                            Password*</label>
                                                        <div class="position-relative">
                                                            <input onkeyup='passConfirm();' type="password"
                                                                name="new_password" class="form-control password-input"
                                                                id="password-input" onpaste="return false"
                                                                placeholder="Enter new password"
                                                                aria-describedby="passwordInput"
                                                                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                                                            <button
                                                                class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                                                type="button"><i
                                                                    class="ri-eye-fill align-middle"></i></button>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="auth-pass-inputgroup">
                                                        <label for="confirm-password-input" class="form-label">Confirm
                                                            Password*</label>
                                                        <div class="position-relative">
                                                            <input onkeyup='passConfirm();' type="password"
                                                                class="form-control password-input" onpaste="return false"
                                                                id="confirm-password-input1"
                                                                placeholder="Confirm password"
                                                                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                                                            <button
                                                                class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                                                type="button"><i
                                                                    class="ri-eye-fill align-middle"></i></button>
                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <a href="#" class="link-primary text-decoration-underline"></a>
                                                    <div class="">
                                                        <span id="Message"></span>
                                                        <br>
                                                        <button type="button" id="changepasswordbtntyp"
                                                            class="btn btn-success">Change
                                                            Password</button>
                                                    </div>
                                                </div>

                                                <!--end col-->

                                                <div class="col-lg-12">
                                                    <div class="card bg-light shadow-none passwd-bg"
                                                        id="password-contain">
                                                        <div class="card-body">
                                                            <div class="mb-4">
                                                                <h5 class="fs-sm">Password must contain:</h5>
                                                            </div>
                                                            <div class="">
                                                                <p id="pass-length" class="invalid fs-xs mb-2">Minimum
                                                                    <b>8 characters</b>
                                                                </p>
                                                                <p id="pass-lower" class="invalid fs-xs mb-2">At
                                                                    <b>lowercase</b> letter (a-z)
                                                                </p>
                                                                <p id="pass-upper" class="invalid fs-xs mb-2">At least
                                                                    <b>uppercase</b> letter (A-Z)
                                                                </p>
                                                                <p id="pass-number" class="invalid fs-xs mb-0">A least
                                                                    <b>number</b> (0-9)
                                                                </p>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!--end row-->
                                        </form>

                                    </div>
                                </div>
                                <!--end tab-pane-->

                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

            </div>
            <!-- container-fluid -->
        </div><!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © MoboZone.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by insomniacafe.org
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection

@section('extraJs')
    <script type="text/javascript">
        var passConfirm = function() {
            if (document.getElementById("password-input").value ==
                document.getElementById("confirm-password-input1").value) {
                document.getElementById("Message").style.color = "Green";
                document.getElementById("Message").innerHTML = "Passwords match!"
                document.getElementById("changepasswordbtntyp").setAttribute("type", "submit");
            } else {
                document.getElementById("Message").style.color = "Red";
                document.getElementById("Message").innerHTML = "Passwords do NOT match!"
                document.getElementById("changepasswordbtntyp").setAttribute("type", "button");

            }
        }

        Dropzone.autoDiscover = false;
        const dropzone = $("#image").dropzone({
            init: function() {
                this.on('addedfile', function(file) {
                    if (this.files.length > 1) {
                        this.removefile(this.file[0]);
                    }
                });
            },
            url: "{{ route('editor.heroslider.temp') }}",
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

        $("#personaldatachangefromid").submit(function(event) {
            event.preventDefault();



            var jqxhr = $.ajax({
                url: "{{ route('editor.profile.update') }}",
                type: 'POST',
                dataType: 'json',
                data: $("#personaldatachangefromid").serializeArray(),
                success: function(response) {


                    if (response.status == 200) {

                        //location.replace('/admin/services/list');

                        location.reload();



                    } else {
                        // window.location.href = '{{ route('editor.profile.index') }}';
                        $('.name-error').html(response.errors.name);
                        $('.email-error').html(response.errors.email);



                    }


                },
                error: function(e) {
                    // window.location.href = '{{ route('admin.admin.index') }}';
                },
                statusCode: {
                    200: function() {
                        // window.location.href = '{{ route('editor.profile.index') }}';
                        location.reload();

                    }
                },
                statusCode: {
                    0: function() {
                        // window.location.href = '{{ route('editor.profile.index') }}';
                        location.reload();

                    }
                }


            });
            jqxhr.always(function() {
                location.reload();

            });



        });

        $("#passwordchangefromid").submit(function(event) {
            event.preventDefault();

            var jqxhr = $.ajax({
                url: "{{ route('editor.chnagepass.save') }}",
                type: 'POST',
                dataType: 'json',
                data: $("#passwordchangefromid").serializeArray(),
                success: function(response) {


                    if (response.status == 200) {

                        //location.replace('/admin/services/list');

                        location.reload();



                    } else {
                        // window.location.href = '{{ route('editor.profile.index') }}';
                        location.reload();



                    }


                },
                error: function(e) {
                    // window.location.href = '{{ route('admin.admin.index') }}';
                },
                statusCode: {
                    200: function() {
                        // window.location.href = '{{ route('editor.profile.index') }}';
                        location.reload();

                    }
                },
                statusCode: {
                    0: function() {
                        // window.location.href = '{{ route('editor.profile.index') }}';
                        location.reload();

                    }
                },



            });

            jqxhr.always(function() {
                alert("second complete");
            });


        });
    </script>
@endsection
