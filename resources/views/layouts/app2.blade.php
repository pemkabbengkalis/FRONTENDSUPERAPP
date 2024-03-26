<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Vesperr Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('') }}assets2/img/favicon.png" rel="icon">
    <link href="{{ asset('') }}assets2/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('') }}assets2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets2/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets2/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ asset('') }}assets2/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets2/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets2/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="{{ asset('') }}assets2/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('') }}assets2/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Vesperr - v2.3.0
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    @include('partials.home2.header')
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    @include('partials.home2.slider')
    <!-- End Hero -->

    @yield('content')

    <!-- ======= Footer ======= -->
    @include('partials.home2.footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('') }}assets2/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('') }}assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('') }}assets2/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="{{ asset('') }}assets2/vendor/php-email-form/validate.js"></script>
    <script src="{{ asset('') }}assets2/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="{{ asset('') }}assets2/vendor/counterup/counterup.min.js"></script>
    <script src="{{ asset('') }}assets2/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="{{ asset('') }}assets2/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('') }}assets2/vendor/venobox/venobox.min.js"></script>
    <script src="{{ asset('') }}assets2/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('') }}assets2/js/main.js"></script>

    <script>
        $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        autoplay:true, // Mengaktifkan autoplay
        autoplayTimeout:4000, // Durasi setiap slide (dalam milidetik)
        autoplayHoverPause:true, // Jeda autoplay saat kursor berada di atas carousel
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })
    </script>

</body>

</html>
