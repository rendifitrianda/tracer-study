<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TRACER STUDY</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('public') }}/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ url('public') }}/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="{{ url('public') }}/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ url('public') }}/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link
        rel="stylesheet href="{{ url('public') }}/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ url('public') }}/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ url('public') }}/assets/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('public') }}/assets/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ url('public') }}/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="{{ url('public') }}/assets/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ url('public') }}/assets/plugins/summernote/summernote-bs4.min.css">
    <style>
        .card-info {
            display: grid;
            column-gap: 12px;
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
        }

        @media screen and (max-width: 600px) {
            .card-info {
                display: grid;
                column-gap: 12px;
                row-gap: 12px;
                grid-template-columns: 1fr;
            }

        }

        @media screen and (max-width: 800px) {
            .card-info {
                display: grid;
                column-gap: 12px;
                row-gap: 12px;
                grid-template-columns: 1fr 1fr;
            }

        }

        .card-info .box {
            display: flex;
            align-items: center;
            background: white;
            padding: 12px;
            border-radius: 10px;
            box-shadow: 0 0 4px rgba(0, 0, 0, 0.2);
        }

        .card-info .box .icons {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            margin-right: 12px;
            border-radius: 5px;
        }



        .card-info .box .info-container h2 {
            display: block;
            padding: 0;
            margin: 0;
            font-size: 16px;
            font-weight: 500;
        }

        .card-info .box .info-container span {
            display: block;
            padding: 0;
            margin: 0;
            font-size: 25px;
            font-weight: 500;
        }

        .card-info .box.info-primary .icons {
            background: #3b82f6;
            color: rgba(0, 0, 0, 0.5);
        }

        .card-info .box.info-success .icons {
            background: #22c55e;
            color: rgba(0, 0, 0, 0.5);
        }

        .card-info .box.info-warning .icons {
            background: #fbbf24;
            color: rgba(0, 0, 0, 0.5);
        }

        .card-info .box.info-danger .icons {
            background: #ef4444;
            color: rgba(0, 0, 0, 0.5);
        }

        .card-info .box.info-info .icons {
            background: #6366f1;
            color: rgba(0, 0, 0, 0.5);
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        {{-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60"
                width="60">
        </div> --}}

        <!-- Navbar -->
        <x-layout.navbar />
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <x-layout.sidebar />

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <x-layout.notifikasi />
            {{ $slot }}
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; <a href="#">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ url('public') }}/assets/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ url('public') }}/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ url('public') }}/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="{{ url('public') }}/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ url('public') }}/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ url('public') }}/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ url('public') }}/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- ChartJS -->
    <script src="{{ url('public') }}/assets/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="{{ url('public') }}/assets/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="{{ url('public') }}/assets/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="{{ url('public') }}/assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ url('public') }}/assets/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="{{ url('public') }}/assets/plugins/moment/moment.min.js"></script>
    <script src="{{ url('public') }}/assets/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ url('public') }}/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js">
    </script>
    <!-- Summernote -->
    <script src="{{ url('public') }}/assets/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="{{ url('public') }}/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ url('public') }}/assets/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ url('public') }}/assets/dist/js/demo.js"></script>

    <script>
        $(function() {
            // $("#example1").DataTable({
            //     "responsive": true,
            //     "lengthChange": false,
            //     "autoWidth": false,
            //     "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            // }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('.dataTable').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": false,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>

</html>
