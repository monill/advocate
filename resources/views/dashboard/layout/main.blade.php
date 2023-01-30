<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template-starter">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard - @yield('subtitle')</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/favicon.ico" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" crossorigin rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"/>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Page CSS -->

    <!-- Helpers -->
{{--    <script src="../../assets/vendor/js/helpers.js"></script>--}}

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
{{--    <script src="../../assets/vendor/js/template-customizer.js"></script>--}}
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
{{--    <script src="../../assets/js/config.js"></script>--}}
</head>

<body>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <!-- Menu -->
        @include('dashboard.partials.sidebar')
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->
            @include('dashboard.partials.navbar')
            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">
                    @yield('content')
                </div>
                <!-- / Content -->

                <!-- Footer -->
                <footer class="content-footer footer bg-footer-theme">
                    <div class="container-xxl">
                        <div class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column">
                            <div>
                                ©
                                <script>document.write(new Date().getFullYear());</script>
                                , made with ❤️ by <a href="#" target="_blank" class="fw-semibold">Pixinvent</a>
                            </div>
                            <div>
                                <a href="#" target="_blank" class="footer-link me-4">Documentation</a>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
</div>
<!-- / Layout wrapper -->

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
{{--<script src="../../assets/vendor/libs/jquery/jquery.js"></script>--}}
{{--<script src="../../assets/vendor/libs/popper/popper.js"></script>--}}
{{--<script src="../../assets/vendor/js/bootstrap.js"></script>--}}
{{--<script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>--}}
{{--<script src="../../assets/vendor/libs/node-waves/node-waves.js"></script>--}}

{{--<script src="../../assets/vendor/libs/hammer/hammer.js"></script>--}}

{{--<script src="../../assets/vendor/js/menu.js"></script>--}}
<!-- endbuild -->

<!-- Vendors JS -->

<!-- Main JS -->
{{--<script src="../../assets/js/main.js"></script>--}}

<!-- Page JS -->
</body>
</html>
