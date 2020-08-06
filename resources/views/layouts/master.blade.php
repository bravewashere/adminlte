<!DOCTYPE html>
    <html>

    <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>{{ $title }}</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets/adminlte/plugins/fontawesome-free/css/all.min.css')}}" />

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />

    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet"
        href="{{asset('assets/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}" />

    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('assets/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}" />

    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('assets/adminlte/plugins/jqvmap/jqvmap.min.css')}}" />

    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('assets/adminlte/dist/css/adminlte.min.css')}}" />

    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('assets/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}" />

    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('assets/adminlte/plugins/daterangepicker/daterangepicker.css')}}" />

    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('assets/adminlte/plugins/summernote/summernote-bs4.css')}}" />

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet" />

    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('assets/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}" />

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{asset('assets/adminlte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}" />

    <!-- Toastr -->
    <link rel="stylesheet" href="{{asset('assets/adminlte/plugins/toastr/toastr.min.css')}}" />

    </head>

    <body class="sidebar-mini layout-fixed layout-footer-fixed accent-navy">
    <div class="wrapper">
        <!-- Navbar -->
        @include('layouts.nav')
        <!-- End-Navbar -->
        
        <!-- Main-Sidebar-Container -->
        @include('layouts.aside')
        <!-- End-Main-Sidebar-Container -->

        <!-- Content-Wrapper -->
        <div class="content-wrapper">
        <!-- Content-Header -->
            <section class="content-header">
                <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{ $title }}</h1>
                    </div>
                    <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard.html">{{ $title }}</a></li>
                    </ol>
                    </div>
                </div>
                </div>
            </section>
            <!-- End-Content-Header -->

            <!-- Main-Content -->
            <section class="content">
                @yield('content')
            </section>
            <!-- End-Main-Content -->
        </div>
        <!-- End-Content-Wrapper -->
        
        <!-- Footer -->
        @include('layouts.footer')
        <!-- End-Footer -->

        <!-- Control-Sidebar -->
        <aside class="control-sidebar control-sidebar-dark"></aside>
        <!-- End-Control-Sidebar -->
    </div>

    <!-- jQuery -->
    <script src="{{asset('assets/adminlte/plugins/jquery/jquery.min.js')}}"></script>

    <!-- jQuery UI 1.11.4 -->
    <script src="{{asset('assets/adminlte/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

    <!-- Bootstrap 4 -->
    <script src="{{asset('assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- ChartJS -->
    <script src="{{asset('assets/adminlte/plugins/chart.js/Chart.min.js')}}"></script>

    <!-- Sparkline -->
    <script src="{{asset('assets/adminlte/plugins/sparklines/sparkline.js')}}"></script>

    <!-- JQVMap -->
    <script src="{{asset('assets/adminlte/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('assets/adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>

    <!-- jQuery Knob Chart -->
    <script src="{{asset('assets/adminlte/plugins/jquery-knob/jquery.knob.min.js')}}"></script>

    <!-- daterangepicker -->
    <script src="{{asset('assets/adminlte/plugins/moment/moment.min.js')}}"></script>
    <script src="{{asset('assets/adminlte/plugins/daterangepicker/daterangepicker.js')}}"></script>

    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{asset('assets/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Summernote -->
    <script src="{{asset('assets/adminlte/plugins/summernote/summernote-bs4.min.js')}}"></script>

    <!-- overlayScrollbars -->
    <script src="{{asset('assets/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>

    <!-- AdminLTE App -->
    <script src="{{asset('assets/adminlte/dist/js/adminlte.js')}}"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('assets/adminlte/dist/js/demo.js')}}"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{asset('assets/adminlte/dist/js/pages/dashboard.js')}}"></script>

    @stack('script')
    </body>

    </html>