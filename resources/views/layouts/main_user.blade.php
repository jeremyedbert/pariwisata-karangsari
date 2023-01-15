<!DOCTYPE html>
<html lang="en">

<head>
    <title>Vacation - Free Bootstrap 4 Template by Colorlib</title>
    @include('partials.header_user')
</head>

<body>
    {{-- NavBar --}}
    @include('partials.navbar_user')

    {{-- Content --}}
    @yield('content')

    {{-- Footer --}}
    @include('partials.footer_user')


    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg>
    </div>

    <script src={{ url('assets/user/js/jquery.min.js') }}></script>
    <script src={{ url('assets/user/js/jquery-migrate-3.0.1.min.js') }}></script>
    <script src={{ url('assets/user/js/popper.min.js') }}></script>
    <script src={{ url('assets/user/js/bootstrap.min.js') }}></script>
    <script src={{ url('assets/user/js/jquery.easing.1.3.js') }}></script>
    <script src={{ url('assets/user/js/jquery.waypoints.min.js') }}></script>
    <script src={{ url('assets/user/js/jquery.stellar.min.js') }}></script>
    <script src={{ url('assets/user/js/owl.carousel.min.js') }}></script>
    <script src={{ url('assets/user/js/jquery.magnific-popup.min.js') }}></script>
    <script src={{ url('assets/user/js/aos.js') }}></script>
    <script src={{ url('assets/user/js/jquery.animateNumber.min.js') }}></script>
    <script src={{ url('assets/user/js/bootstrap-datepicker.js') }}></script>
    <script src={{ url('assets/user/js/scrollax.min.js') }}></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src={{ url('assets/user/js/google-map.js') }}></script>
    <script src={{ url('assets/user/js/main.js') }}></script>

</body>

</html>
