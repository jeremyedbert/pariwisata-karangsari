<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.header_admin')
    {{-- <style>
        .hover-notif {
            cursor: pointer;
        }
    </style> --}}
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
</head>

<body onload="initialize()">
    <script src={{ url('assets/admin/js/core/jquery.3.2.1.min.js') }}></script>
    <script src={{ url('assets/admin/js/core/popper.min.js') }}></script>
    <script src={{ url('assets/admin/js/core/bootstrap.min.js') }}></script>

    <!-- jQuery UI -->
    <script src={{ url('assets/admin/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}></script>
    <script src={{ url('assets/admin/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}></script>

    <!-- jQuery Scrollbar -->
    <script src={{ url('assets/admin/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}></script>

    <!-- Moment JS -->
    <script src={{ url('assets/admin/js/plugin/moment/moment.min.js') }}></script>

    <!-- Chart JS -->
    <script src={{ url('assets/admin/js/plugin/chart.js/chart.min.js') }}></script>

    <!-- jQuery Sparkline -->
    <script type="text/javascript" src={{ url('assets/admin/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}>
    </script>

    <!-- Chart Circle -->
    <script src={{ url('assets/admin/js/plugin/chart-circle/circles.min.js') }}></script>

    <!-- Datatables -->
    <script type="text/javascript" src={{ url('assets/admin/js/plugin/datatables/datatables.min.js') }}></script>

    <!-- Bootstrap Notify -->
    <script src={{ url('assets/admin/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}></script>

    <!-- Bootstrap Toggle -->
    <script src={{ url('assets/admin/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js') }}></script>

    <!-- jQuery Vector Maps -->
    <script src={{ url('assets/admin/js/plugin/jqvmap/jquery.vmap.min.js') }}></script>
    <script src={{ url('assets/admin/js/plugin/jqvmap/maps/jquery.vmap.world.js') }}></script>

    <!-- Google Maps Plugin -->
    <script src={{ url('assets/admin/js/plugin/gmaps/gmaps.js') }}></script>

    <!-- Sweet Alert -->
    <script src={{ url('assets/admin/js/plugin/sweetalert/sweetalert.min.js') }}></script>

    <!-- Azzara JS -->
    <script src={{ url('assets/admin/js/ready.min.js') }}></script>

    <!-- Filepond -->
    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>

    <div class="wrapper">
        <!--
   Tip 1: You can change the background color of the main header using: data-background-color="blue | purple | light-blue | green | orange | red"
  -->
        @include('partials.navbar_admin')

        <!-- Sidebar -->
        @include('partials.sidebar_admin')
        <!-- End Sidebar -->

        @yield('content')
    </div>
    </div>

</body>

</html>
