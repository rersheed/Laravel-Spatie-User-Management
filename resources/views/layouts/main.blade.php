<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title> {{ config('app.name', 'Laravel') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Shabab College Application portal" name="description" />
    <meta content="Haruna Saidu" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}">

    <!-- App css -->
    <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/css/theme.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">
        <div class="header-border"></div>
        @include('layouts.partials.header')

        <!-- ========== Left Sidebar Start ========== -->
        @include('layouts.partials.sidebar')
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18">@yield('page_name')</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a
                                                href="javascript: void(0);">{{ Config::get('app.name', 'Laravel Project') }}</a>
                                        </li>
                                        <li class="breadcrumb-item active">@yield('page_name')</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    @yield('content')

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            @include('layouts.partials.footer')

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Overlay-->
    <div class="menu-overlay"></div>


    <!-- jQuery  -->
    <script src="{{ asset('backend/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/metismenu.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/waves.js') }}"></script>
    <script src="{{ asset('backend/assets/js/simplebar.min.js') }}"></script>


    <!-- Sparkline Js-->
    <script src="{{ asset('backend/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Chart Js-->
    <script src="{{ asset('backend/plugins/jquery-knob/jquery.knob.min.js') }}"></script>

    <!-- Chart Custom Js-->
    <script src="{{ asset('backend/assets/pages/knob-chart-demo.js') }}"></script>


    <!-- Morris Js-->
    <script src="{{ asset('backend/plugins/morris-js/morris.min.js') }}"></script>

    <!-- Raphael Js-->
    <script src="{{ asset('backend/plugins/raphael/raphael.min.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ asset('backend/assets/pages/dashboard-demo.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('backend/assets/js/theme.js') }}"></script>

</body>

</html>
