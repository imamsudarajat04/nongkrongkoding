<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.styleadmin')
</head>
<body>
@include('sweetalert::alert')
    <div class="layout-wrapper layout-content-navbar">

        <div class="layout-container">

            @include('components.adminside')

            <div class="layout-page">

                @include('components.adminnav')

                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">@yield('breadOld') /</span> @yield('breadNow')</h4>
                        @yield('adminContent')
                    </div>

                    @include('components.adminfooter')

                </div>
            </div>
        </div>
    </div>

    @include('includes.scriptadmin')
</body>

</html>