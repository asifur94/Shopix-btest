</div>
<!-- END layout-wrapper -->



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

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    </script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
    integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- JAVASCRIPT -->
<script src="{{ asset('admin/') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('admin/') }}/assets/libs/simplebar/simplebar.min.js"></script>
<script src="{{ asset('admin/') }}/assets/js/plugins.js"></script>

<!-- apexcharts -->
<script src="{{ asset('admin/') }}/assets/libs/apexcharts/apexcharts.min.js"></script>
<!--dashboard learning init js-->
<script src="{{ asset('admin/') }}/assets/js/pages/dashboard-learning.init.js"></script>
<!-- Echarts -->
<script src="{{ asset('admin/') }}/assets/libs/echarts/echarts.min.js"></script>

<!-- Vector map-->
<script src="{{ asset('admin/') }}/assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
<script src="{{ asset('admin/') }}/assets/libs/jsvectormap/maps/world-merc.js"></script>

<script src="{{ asset('admin/') }}/assets/libs/list.js/list.min.js"></script>


<!-- dashboard-analytics init js -->
<script src="{{ asset('admin/') }}/assets/js/pages/dashboard-analytics.init.js"></script>
<!-- learning instructors list-->
<script src="{{ asset('admin/') }}/assets/js/pages/learning-instructors-list.init.js"></script>

    <!-- list.js min js -->
    <script src="{{ asset('admin/') }}/assets/libs/list.js/list.min.js"></script>
    <script src="{{ asset('admin/') }}/assets/libs/list.pagination.js/list.pagination.min.js"></script>

<!-- App js -->
<script src="{{ asset('admin/') }}/assets/js/app.js"></script>

<script type="text/javascript">
    $('.summernote').summernote({
        placeholder: 'This is discription..',
        tabsize: 2,
        height: 300
    });
</script>




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
{{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
{{-- <script src="{{ asset('admin/assets2/assets/plugins/jquery/jquery.min.js') }}"></script> --}}

<script src="{{ asset('admin/assets2/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('admin/assets2/assets/js/adminlte.min.js?v=3.2.0') }}"></script>
<!-- Summernote -->
<script src="{{ asset('admin/assets2/assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- Dropzone -->
<script src="{{ asset('admin/assets/plugins/dropzone/dropzone.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"
    integrity="sha512-U2WE1ktpMTuRBPoCFDzomoIorbOyUv0sP8B+INA3EzNAhehbzED1rOJg6bCqPf/Tuposxb5ja/MAUnC8THSbLQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Dropzone -->
<script src="{{ asset('admin/assets/plugins/dropzone/dropzone.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"
    integrity="sha512-U2WE1ktpMTuRBPoCFDzomoIorbOyUv0sP8B+INA3EzNAhehbzED1rOJg6bCqPf/Tuposxb5ja/MAUnC8THSbLQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@yield('extraJs')

</body>

</html>
