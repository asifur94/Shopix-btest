<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>

        @if (!empty(getwebsitetopdata()->website_title))
        {{ getwebsitetopdata()->website_title }}
        @else
        Here The Website Title
        @endif
    </title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('fontend/assets/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/assets/css/custom.css') }}">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />






    {{-- Mobozone Strat --}}

    <link rel="stylesheet" href="{{ asset('fontend/mobozone') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('fontend/mobozone/') }}/assets/css/normalize.css">

    <link rel="stylesheet" href="{{ asset('fontend/mobozone/') }}/assets/fonts/fonts.css">
    <link rel="stylesheet" href="{{ asset('fontend/mobozone/') }}/assets/fonts/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('fontend/mobozone/') }}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('fontend/mobozone/') }}/assets/css/owl.theme.default.css">

    <link rel="stylesheet" href="{{ asset('fontend/mobozone/') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('fontend/mobozone/') }}/assets/pics/style.css">
    <link rel="stylesheet" href="{{ asset('fontend/mobozone/') }}/assets/css/responsive.css">

    <title>Shopix</title>
    @if (!empty(getwebsitetopdata()->fabicon))
    <link rel="shortcut icon" href="{{ asset('uploads/logos/'.getwebsitetopdata()->fabicon) }}" type="image/x-icon" />

    @else
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />

    @endif
    <!-- fot awesome -->
    <link rel="stylesheet" href="{{ asset('fontend/shopx/') }}/css/all.css" />
    <!-- core css -->
    <link rel="stylesheet" href="{{ asset('fontend/shopx/') }}/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('fontend/shopx/') }}/css/grt-youtube-popup.css" />
    <link rel="stylesheet" href="{{ asset('fontend/shopx/') }}/css/animate.css" />
    <link rel="stylesheet" href="{{ asset('fontend/shopx/') }}/css/anim.css" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{ asset('fontend/shopx/') }}/css/owl.theme.default.css">
    <link rel="stylesheet" href="{{ asset('fontend/shopx/') }}/css/owl.carousel.min.css">
    <!-- owl carousel -->
    <!-- light slider -->
    <link rel="stylesheet" href="{{ asset('fontend/shopx/') }}/css/select2.min.css">
    <link rel="stylesheet" href="{{ asset('fontend/shopx/') }}/css/lightslider.min.css">
    <!-- light slider -->
    <!-- common css -->
    <link rel="stylesheet" href="{{ asset('fontend/shopx/') }}/css/style.css" />
    <link rel="stylesheet" href="{{ asset('fontend/shopx/') }}/css/responsive.css" />
    <link rel="stylesheet" href="{{ asset('fontend/shopx/') }}/css/timer.css">
    <link rel="stylesheet" href="{{ asset('fontend/shopx/') }}/css/sticky.css">
    <link rel="stylesheet" href="{{ asset('fontend/shopx/') }}/css/review.css">

    <link rel="stylesheet" href="{{ asset('fontend/shopx/') }}/css/offertime.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.css" integrity="sha512-+1GzNJIJQ0SwHimHEEDQ0jbyQuglxEdmQmKsu8KI7QkMPAnyDrL9TAnVyLPEttcTxlnLVzaQgxv2FpLCLtli0A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js" integrity="sha512-Gfrxsz93rxFuB7KSYlln3wFqBaXUc1jtt3dGCp+2jTb563qYvnUBM/GP2ZUtRC27STN/zUamFtVFAIsRFoT6/w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/highlight.js/9.10.0/styles/github.min.css" />
    <link rel="stylesheet" href="https://printjs-4de6.kxcdn.com/print.min.css">
</head>
