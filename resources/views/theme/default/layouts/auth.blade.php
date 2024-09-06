@extends('theme.default.layouts.app')

@section('content')
    <!-- login page start-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-7 order-1"><img class="bg-img-cover bg-center" src="{{ asset('theme') }}/assets/images/login/1.jpg"
                    alt="looginpage"></div>
            <div class="col-xl-5 p-0">
                <div class="login-card login-dark">
                    <div>
                        <div><a class="logo text-start" href="index.html"><img class="img-fluid for-dark"
                                    src="{{ asset('theme') }}/assets/images/logo/logo.png" alt="looginpage"><img class="img-fluid for-light"
                                    src="{{ asset('theme') }}/assets/images/logo/logo_dark.png" alt="looginpage"></a></div>
                        <div class="login-main">
                            @yield('auth-content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- latest jquery-->
        <script src="{{ asset('theme') }}/assets/js/jquery.min.js"></script>
        <!-- Bootstrap js-->
        <script src="{{ asset('theme') }}/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
        <!-- feather icon js-->
        <script src="{{ asset('theme') }}/assets/js/icons/feather-icon/feather.min.js"></script>
        <script src="{{ asset('theme') }}/assets/js/icons/feather-icon/feather-icon.js"></script>
        <!-- scrollbar js-->
        <!-- Sidebar jquery-->
        <script src="{{ asset('theme') }}/assets/js/config.js"></script>
        <!-- Plugins JS start-->
        <!-- calendar js-->
        <!-- Plugins JS Ends-->
        <!-- Theme js-->
        <script src="{{ asset('theme') }}/assets/js/script.js"></script>
    </div>
@endsection
