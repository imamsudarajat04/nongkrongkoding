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

                    @yield('adminContent')

                    @include('components.adminfooter')

                </div>
            </div>
        </div>
    </div>

    @include('includes.scriptadmin')
</body>

</html>