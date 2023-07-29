@extends('admin.layoutsMain.adminapp')

@section('content')
    <div class=" main-content">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <form action="" method="post" name="editstudentFrom" id="editstudentFrom">
                    <div class="card">
                        <div class="card-header">{{ __('Student Edit') }}</div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <br>
                                    <a name="" id="" class="btn btn-primary" href="{{ route('admin.editor.index') }}" role="button">Back</a>
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
                                <label for=""> Editor Name</label>
                                <input value="{{ $editor->name }}" type="text" name="name" id="name" class="form-control" placeholder=""
                                    aria-describedby="helpId">
                                <p class="text-danger error name-error"></p>
                            </div>

                            <div class="form-group">
                                <label for="">Editor Email</label>
                                <input value="{{ $editor->email }}" type="email" name="email" id="email" class="form-control" placeholder=""
                                    aria-describedby="helpId">
                                <p class="text-danger error email-error"></p>
                            </div>


                            <div class="row">
                                <div class="col-md-12">
                                    <input type="hidden" id="image_id" name="image_id" value="">
                                    <label for=""><b>Image</b></label><br>
                                    <div id="image" class="dropzone dz-clickable">
                                        <div class="dz-message needsclick">
                                            <br>Drop files here or click to upload.
                                            <br><br>
                                        </div>
                                    </div>
                                    <img class="img-thumbnail mt-4 " src="{{ asset('uploads/editor/thumb/small/'.$editor->img) }}" width="300" alt="">

                                </div>
                            </div>
                            <div class="from-group">
                                <label for="status">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="1" {{ ($editor->status == 1) ? 'selected' : '' }}>Editor</option>
                                    <option value="0" {{ ($editor->status == 0) ? 'selected' : '' }}>Block</option>
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
        $("#editstudentFrom").submit(function(event) {
            event.preventDefault();

            $.ajax({
                url: "{{ route('admin.editor.update',$editor->id) }}",
                type: 'POST',
                dataType: 'json',
                data: $("#editstudentFrom").serializeArray(),
                success: function(response) {


                    if (response.status == 302) {

                    // window.location.href = '#';
                        //location.replace('/admin/services/list');

            window.location.href = '{{ route('admin.editor.index') }}';



                    } else {
                        $('.name-error').html(response.errors.name);
                        $('.email-error').html(response.errors.email);
                        $('.cgpa-error').html(response.errors.cgpa);
                        $('.credit-error').html(response.errors.credit);
                        $('.semester_no-error').html(response.errors.semester_no);

                    }

                },
                error: function (e) {
                    window.location.href = '{{ route('admin.editor.index') }}';
                }
            });


        });
    </script>
@endsection
