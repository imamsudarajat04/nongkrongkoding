<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
<meta name="description" content="" />

<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
rel="stylesheet"
/>

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="shortcut icon" href="{{ asset('admin/assets/img/Logo/nongki.ico') }}" type="image/x-icon">

<link rel="stylesheet" href="{{ asset('admin/assets/vendor/fonts/boxicons.css') }}" />

<link rel="stylesheet" href="{{ asset('admin/assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
<link rel="stylesheet" href="{{ asset('admin/assets/css/demo.css') }}" />

<link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

<link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/apex-charts/apex-charts.css') }}" />

<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/vendor/DataTables/datatables.min.css') }}" />

<script src="{{ asset('admin/assets/vendor/js/helpers.js') }}"></script>

<script src="{{ asset('admin/assets/js/config.js') }}"></script>

<script src="{!! asset('admin/assets/vendor/jquery/jquery.min.js') !!}"></script>
{{-- <script type="text/javascript" src="{{ asset('admin/assets/vendor/DataTables/datatables.min.js') }}"></script> --}}

<title>@yield('adminTitle', 'Dashboard Admin')</title>