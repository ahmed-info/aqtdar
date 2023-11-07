<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>تجمع اقتدار وطن</title>

    <!-- Stylesheets -->
    <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/responsive.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('asset/images/favicon.ico') }}" type="image/x-icon">

</head>

<!-- page wrapper -->

<body class="boxed_wrapper">


    <!-- .preloader -->
    {{-- <div class="preloader"></div> --}}
    <!-- /.preloader -->


    <!-- Main Header -->
    @include('layouts.navbar')
    <!-- End Main Header -->


    @yield('content')



    <!-- footer-bottom -->
    @include('layouts.footer')
    <!-- footer-bottom end -->



    <!--Scroll to top-->
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="fa fa-angle-up"></span>
    </button>



    <!-- jequery plugins -->
    <script src="{{ asset('asset/js/jquery.js') }}"></script>
    <script src="{{ asset('asset/js/popper.min.js') }}"></script>
    <script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('asset/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('asset/js/wow.js') }}"></script>
    <script src="{{ asset('asset/js/validation.js') }}"></script>
    <script src="{{ asset('asset/js/isotope.js') }}"></script>
    <script src="{{ asset('asset/js/html5lightbox/html5lightbox.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/SmoothScroll.js') }}"></script>

    <!-- map script -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBevTAR-V2fDy9gQsQn1xNHBPH2D36kck0"></script>
    <script src="{{ asset('asset/js/gmaps.js') }}"></script>
    <script src="{{ asset('asset/js/map-helper.js') }}"></script>

    <!-- main-js -->
    <script src="{{ asset('asset/js/script.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".btn-success").click(function() {
                var lsthmtl = $(".clone").html();
                $(".increment").after(lsthmtl);
            });
            $("body").on("click", ".btn-danger", function() {
                $(this).parents(".hdtuto").remove();
            });
        });
    </script>
</body><!-- End of .page_wrapper -->

</html>
