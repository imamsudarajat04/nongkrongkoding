<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('user.includes.style')
</head>
<body>
@include('sweetalert::alert')
    <div class="layout-wrapper layout-content-navbar">

        <div class="layout-container">

            @include('user.components.sidebar')

            <div class="layout-page">

                @include('user.components.navbar')

                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">@yield('breadOld') /</span> @yield('breadNow')</h4>
                        @yield('userContent')
                    </div>

                    @include('user.components.footer')

                </div>
            </div>
        </div>
    </div>

    @include('user.includes.script')
</body>

</html>