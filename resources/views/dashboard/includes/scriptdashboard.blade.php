<!-- JAVASCRIPT -->
<script src="{!! asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
<script src="{!! asset('admin/assets/libs/simplebar/simplebar.min.js') !!}"></script>
<script src="{!! asset('admin/assets/libs/node-waves/waves.min.js') !!}"></script>
<script src="{!! asset('admin/assets/libs/feather-icons/feather.min.js') !!}"></script>
<script src="{!! asset('admin/assets/js/pages/plugins/lord-icon-2.1.0.js') !!}"></script>
<script src="{!! asset('admin/assets/js/plugins.js') !!}"></script>

<!-- apexcharts -->
<script src="{!! asset('admin/assets/libs/apexcharts/apexcharts.min.js') !!}"></script>

<!-- Vector map-->
<script src="{!! asset('admin/assets/libs/jsvectormap/js/jsvectormap.min.js') !!}"></script>
<script src="{{ asset('admin/assets/libs/jsvectormap/maps/world-merc.js') }}"></script>

<!--Swiper slider js-->
<script src="{{ asset('admin/assets/libs/swiper/swiper-bundle.min.js') }}"></script>

<!-- Datatables -->
<script type="text/javascript" src="{{ asset('admin/assets/vendor/DataTables/datatables.min.js') }}"></script>

<!-- App js -->
<script src="{{ asset('admin/assets/js/app.js') }}"></script>
<script src="{{ asset('admin/assets/js/pace.min.js') }}"></script>

@stack('customJs')