
    <meta charset="utf-8" />
    <title>@yield('title', 'Dashboard')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="NongkrongKoding, Coding, Belajar Coding, Coding untuk indonesia" name="description" />
    <meta content="NongkrongKoding, nongkrongkoding" name="keywords">
    <meta content="NongkrongKoding" name="author" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{!! asset('admin/assets/images/favicon.ico') !!}">

    <!-- jsvectormap css -->
    <link href="{!! asset('admin/assets/libs/jsvectormap/css/jsvectormap.min.css') !!}" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="{!! asset('admin/assets/libs/swiper/swiper-bundle.min.css') !!}" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="{!! asset('admin/assets/js/layout.js') !!}"></script>
    <!-- Bootstrap Css -->
    <link href="{!! asset('admin/assets/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{!! asset('admin/assets/css/icons.min.css') !!}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{!! asset('admin/assets/css/app.min.css') !!}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{!! asset('admin/assets/css/custom.min.css') !!}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/vendor/datatables/datatables.min.css') }}" />
    <script src="{{ asset('admin/assets/vendor/jquery/jquery.min.js') }}"></script>
    <!-- Custom style Loading -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/loading.css') }}" />

    <!-- Custom Style -->
    @stack('customCss')
