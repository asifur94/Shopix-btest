@extends('admin.layoutsMain.loginadminapp')

@section('content')

    </div>

    <div class="">
        <section class="auth-page-wrapper py-5 position-relative d-flex align-items-center justify-content-center min-vh-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-11">
                        <div class="card mb-0">
                            <div class="row g-0 align-items-center">
                                <div class="col-xxl-5">
                                    <div class="card auth-card bg-secondary h-100 border-0 shadow-none d-none d-sm-block mb-0">
                                        <div class="card-body py-5 d-flex justify-content-between flex-column">
                                            <div class="text-center">
                                                <h3 class="text-white">Start your journey with us.</h3>
                                                <p class="text-white opacity-75 fs-base">It brings together your tasks,
                                                    projects, timelines, files and more</p>
                                            </div>

                                            <div
                                                class="auth-effect-main my-5 position-relative rounded-circle d-flex align-items-center justify-content-center mx-auto">
                                                <div
                                                    class="effect-circle-1 position-relative mx-auto rounded-circle d-flex align-items-center justify-content-center">
                                                    <div
                                                        class="effect-circle-2 position-relative mx-auto rounded-circle d-flex align-items-center justify-content-center">
                                                        <div
                                                            class="effect-circle-3 mx-auto rounded-circle position-relative text-white fs-4xl d-flex align-items-center justify-content-center">
                                                            Welcome to <span class="text-primary ms-1">Mobozone</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="auth-user-list list-unstyled">
                                                    <li>
                                                        <div class="avatar-sm d-inline-block">
                                                            <div
                                                                class="avatar-title bg-white shadow-lg overflow-hidden rounded-circle">
                                                                <img src="{{ asset('admin') }}/assets/images/users/avatar-1.jpg"
                                                                    alt="" class="img-fluid">
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="avatar-sm d-inline-block">
                                                            <div
                                                                class="avatar-title bg-white shadow-lg overflow-hidden rounded-circle">
                                                                <img src="{{ asset('admin') }}/assets/images/users/avatar-2.jpg"
                                                                    alt="" class="img-fluid">
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="avatar-sm d-inline-block">
                                                            <div
                                                                class="avatar-title bg-white shadow-lg overflow-hidden rounded-circle">
                                                                <img src="{{ asset('admin') }}/assets/images/users/avatar-3.jpg"
                                                                    alt="" class="img-fluid">
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="avatar-sm d-inline-block">
                                                            <div
                                                                class="avatar-title bg-white shadow-lg overflow-hidden rounded-circle">
                                                                <img src="{{ asset('admin') }}/assets/images/users/avatar-4.jpg"
                                                                    alt="" class="img-fluid">
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="avatar-sm d-inline-block">
                                                            <div
                                                                class="avatar-title bg-white shadow-lg overflow-hidden rounded-circle">
                                                                <img src="{{ asset('admin') }}/assets/images/users/avatar-5.jpg"
                                                                    alt="" class="img-fluid">
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-xxl-6 mx-auto">
                                    <div class="card mb-0 border-0 shadow-none mb-0">
                                        <div class="card-body p-sm-5 m-lg-4">
                                            <div class="text-center mt-5">
                                                <h5 class="fs-3xl">Welcome Back</h5>
                                                <p class="text-muted">Sign in to continue to Mobozone.</p>
                                            </div>
                                            <div class="p-2 mt-5">



                                                <form method="POST" action="{{ route('admin.login.store') }}">
                                                    @csrf

                                                    <!-- Email input -->
                                                    <div class="form-outline mb-4">
                                                        <input type="text" class="form-control  password-input"
                                                            name="email" id="username" placeholder="Enter username" required>

                                                    </div>

                                                    <!-- Password input -->
                                                    <div class="form-outline mb-3">


                                                        <div class="position-relative auth-pass-inputgroup mb-3">
                                                            <input type="password" class="form-control pe-5 password-input "
                                                                placeholder="Enter password" name="password" id="password-input"
                                                                required>
                                                            <button
                                                                class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                                                type="button" id="password-addon"><i
                                                                    class="ri-eye-fill align-middle"></i></button>
                                                        </div>
                                                    </div>

                                                    <div class="text-center text-lg-start mt-4 pt-2">
                                                        <div class="mt-4">
                                                            <button class="btn btn-primary w-100" type="submit">Sign
                                                                In</button>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="mb-3 ">
                                                        <div class="float-end text-center">
                                                            <a href="#" class="text-muted text-center">If Not have account Regiser.</a>
                                                        </div>

                                                    </div>

                                                </form>








                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
    </div>

@endsection

{{-- @section('extraJs')
    <script type="text/javascript">


                $("#AdminLoginFrom").submit(function(event) {
                    event.preventDefault();

                    $.ajax({
                        url: "{{ route('admin.login.store') }}",
                        type: 'POST',
                        dataType: 'json',
                        data: $("#AdminLoginFrom").serializeArray(),
                        success: function(response) {


                            if (response.status == 200) {


                                //location.replace('/admin/services/list');


                            } else {
                                // $('.room_no_for_class-error').html(response.errors.room_no_for_class);

                            }
                        }

                        // window.location.href = '{{ route('admin.dashbord.index') }}';

                    });

                });
    </script>
@endsection --}}
