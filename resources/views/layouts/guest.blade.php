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

    <div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center min-vh-100">
                        <div class="w-100 d-block bg-white shadow-lg rounded my-5">
                            <div class="row">
                                <div class="col-lg-5 d-none d-lg-block bg-login rounded-left"></div>
                                <div class="col-lg-7">
                                    @yield('content')
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                        </div> <!-- end .w-100 -->
                    </div> <!-- end .d-flex -->
                </div> <!-- end col-->
            </div> <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <!-- jQuery  -->
    <script src="{{ asset('backend/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/metismenu.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/waves.js') }}"></script>
    <script src="{{ asset('backend/assets/js/simplebar.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('backend/assets/js/theme.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#country_id').change(function() {
                let country_id = this.value;
                $.get("/get_states?country=" + country_id,
                    function(data) {
                        $('#state_id').html(data);
                        console.log(data);
                    }
                );
            });

            $('#state_id').change(function() {
                let state_id = this.value;
                $.get("/get_lgas?state=" + state_id,
                    function(data) {
                        $('#lga_id').html(data);
                    }
                );
            });
        });
    </script>

</body>

</html>
