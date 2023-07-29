@extends('admin.layoutsMain.adminapp')

@section('content')
    <div class="main-content">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <form action="" method="post" name="createServiceFrom" id="createServiceFrom">
                    <div class="card">
                        <div class="card-header">{{ __('Blog Create') }}</div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <br>
                                    <a name="" id="" class="btn btn-primary" href="{{ route('admin.blog.index') }}" role="button">Back</a>
                                </div>
                                <div class="col-md-8"></div>
                            </div>
                        </div>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder=""
                                    aria-describedby="helpId">
                                <p class="text-danger error name-error"></p>
                            </div>
                            <div class="form-group">
                                <label for="">Catagory</label>
                                <select class="form-control" name="blog_catagory_id" id="blog_catagory_id" >
                                    {{-- @dd($category) --}}
                                    @if (!empty($blogcategory))
                                        @foreach ($blogcategory as $blogcategorys)
                                            <option value="{{ $blogcategorys->blog_catagories_id }}">{{ $blogcategorys->name }}
                                            </option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea name="description" id="summernote" class="summernote" cols="30" rows="10"></textarea>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" id="image_id" name="image_id" value="">
                                    <label for=""><b>Image</b></label><br>
                                    <div id="image" class="dropzone dz-clickable">
                                        <div class="dz-message needsclick">
                                            <br>Drop files here or click to upload.
                                            <br><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for=""><b>Short Description</b></label><br>
                                    <textarea name="short_description" id="short_description" class="form-control" cols="30" rows="8"></textarea>
                                </div>
                            </div>
                            <div class="from-group">
                                <label for="status">Status</label>
                                <select name="status" id="status1" class="form-control">
                                    <option value="1">Active</option>
                                    <option value="0">Block</option>
                                </select>
                            </div>
                            <br>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
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
            url: "{{ route('admin.heroslider.temp') }}",
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

        $("#createServiceFrom").submit(function(event) {
            event.preventDefault();

            $.ajax({
                url: '{{ route("admin.blog.save") }}',
                type: 'POST',
                dataType: 'json',
                data: $("#createServiceFrom").serializeArray(),
                success: function(response) {


                    if (response.status == 200) {


                        //location.replace('/admin/services/list');


                    } else {
                        $('.name-error').html(response.errors.name);

                    }
                }
                ,
                statusCode: {
                    200: function() {
                        window.location.href = '{{ route('admin.blog.index') }}';
                        // location.reload();

                    }
                }
            });

        });
    </script>
@endsection
