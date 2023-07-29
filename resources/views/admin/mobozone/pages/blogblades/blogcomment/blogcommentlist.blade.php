@extends('admin.layoutsMain.adminapp')

@section('content')



    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->

                <!-- end page title -->

                <div id="instructorList">


                    <!--Start row-->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center g-2">
                                        <div class="col-lg-3 me-auto">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h6 class="card-title mb-0">Blog Comment List <span
                                                            class="badge bg-primary ms-1 align-baseline">
                                                            @if (!empty($totalblogcomments))
                                                                {{ $totalblogcomments }}
                                                            @else
                                                                0
                                                            @endif
                                                        </span></h6>
                                                </div>


                                            </div>

                                        </div>
                                        <!--end col-->

                                        <div class="col-xl-2 col-lg-3 col-sm-5">

                                            <form action="" method="GET">

                                                <div class="search-box">
                                                    <input type="text" name="keyword" class="form-control search">
                                                    <i class="ri-search-line search-icon"></i>
                                                </div>
                                            </form>

                                        </div>
                                        <!--end col-->

                                    </div>
                                </div>
                                <div class="card-body mt-3">
                                    @if (Session::has('success'))
                                        <div class="alert alert-success" role="alert">
                                            {{ Session::get('success') }}

                                        </div>
                                    @elseif (Session::has('errors'))
                                        <div class="alert alert-danger" role="alert">
                                            {{ Session::get('danger') }}

                                        </div>
                                    @endif
                                    <br>

                                    <div class="table-responsive table-card">
                                        <table
                                            class="table table-centered align-middle table-custom-effect table-nowrap mb-0">
                                            <thead class="table-light">
                                                <tr>

                                                    <th scope="col" class="sort cursor-pointer">Id</th>
                                                    <th scope="col" class="sort cursor-pointer">Title</th>
                                                    <th scope="col" class="sort cursor-pointer">Created At</th>
                                                    <th scope="col" class="sort cursor-pointer">Status</th>
                                                    <th scope="col">Action</th>

                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                                <tr>
                                                    @if (!empty($blogcomment))
                                                        @foreach ($blogcomment as $blogcomments)
                                                <tr>
                                                    <td>{{ $blogcomments->blog_comments_id }}</td>

                                                    {{-- <td>{{ $users->name }}</td> --}}
                                                    <td>{{ $blogcomments->name }}</td>
                                                    <td>{{ date('d/m/Y', strtotime($blogcomments->created_at)) }}</td>
                                                    <td>
                                                        @if ($blogcomments->status == 1)
                                                            <span class="badge bg-success">Active</span>
                                                        @else
                                                            <span class="badge bg-danger">Block</span>
                                                        @endif
                                                    </td>
                                                    {{-- <td>
                                                        <span>
                                                            <a href="{{ route('admin.blogcomment.edit', $blogcomments->id) }}"><img
                                                                    src="{{ asset('admin/assets/myImages/edit-property-24.png') }}"
                                                                    alt=""></a>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('admin.blogcomment.delete', $blogcomments->id) }}"><img
                                                                src="{{ asset('admin/assets/myImages/delete-24.png') }}"
                                                                alt=""></a>
                                                    </td> --}}

                                                    <td>
                                                        <ul class="d-flex gap-2 list-unstyled mb-0">
                                                            <li>
                                                                <a href="{{ route('admin.blog.comment.edit', $blogcomments->blog_comments_id) }}"
                                                                    class="btn btn-subtle-secondary btn-icon btn-sm edit-item-btn"><i
                                                                        class="ph-pencil"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ route('admin.blog.comment.delete', $blogcomments->blog_comments_id) }}"
                                                                    class="btn btn-subtle-danger btn-icon btn-sm remove-item-btn"><i
                                                                        class="ph-trash"></i></a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="6">
                                                        The row is empty
                                                    </td>
                                                </tr>
                                                @endif


                                                </tr>
                                            </tbody><!-- end tbody -->
                                        </table><!-- end table -->
                                    </div>
                                    <div class="pt-5 row">
                                        @if (!empty($blogcomment))
                                            {{ $blogcomment->links('pagination::bootstrap-4') }}
                                        @endif
                                    </div>
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
    </div>



@endsection
