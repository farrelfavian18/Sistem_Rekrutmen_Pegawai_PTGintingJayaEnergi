<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>E-Rektrutmen - PT. GINTING JAYA ENERGI</title>
    <link rel="icon" type="image/x-icon" href="{{asset('dist/img/logo-ginting jaya energi.png')}}">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: #bcac3c">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="https://www.gj-energi.co.id/" class="nav-link" style="color:White">Beranda PT. Ginting Jaya Energi</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="http://wa.me/6282281939554" class="nav-link" style="color:White">Contact WhatsApp (082281939554)</a>
                </li>
                <li>
                    <a href="http://wa.me/6282281939554">
                    <img src="{{asset('dist/img/logo-whatsapp.png')}}" alt="LOGO WhatsApp"
                    class="brand-image img-circle elevation-2">
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #bcac3c">
            <!-- Brand Logo -->
            <a href="{{asset('index3.html')}}" class="brand-link">
                <img src="{{asset('dist/img/logo-ginting jaya energi.png')}}" alt="LOGO Ginting Jaya Energi"
                    class="brand-image img-circle elevation-3" >
                <span style="color:White" class="brand-text font-weight-light">PT. Ginting Jaya Energi</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar" style="background-color: #bcac3c">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    {{-- <div class="image">
                        <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
                    </div> --}}
                    {{-- <div class="info">
                        <a href="#" style="color:White" class="d-block">Farrel Favian</a>
                    </div> --}}
                        <div class="info" style="color:white">{{ Auth::user()->name }}</div>
                        <div class="ml-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    <div class="info">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
    
                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();" style="color:white">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a class="nav-link {{ Request::route()->getName() == 'dashboard' ? 'active' : '' }}" href="{{url('/dashboard')}}">
                                <i class="nav-icon fas fa-tachometer-alt" style="color:White"></i>
                                <p style="color:White">
                                    Alur Pendaftaran
                                </p>
                            </a>
                        </li>
                        {{-- @if (Auth::check() && Auth::user()->role == '1') --}}
                        <li class="nav-item">
                            <a class="nav-link {{ Request::route()->getName() == 'jabatan' ? 'active' : '' }}" href="{{url('/jabatan')}}">
                                <i class="nav-icon fas fa-table" style="color:White"></i>
                                <p style="color:White">
                                    Jabatan
                                </p>
                            </a>
                        </li>
                        {{-- @endif --}}
                        @if (Auth::check() && Auth::user()->role == '0')
                        <li class="nav-item">
                            <a class="nav-link {{ Request::route()->getName() == '/pelamar/form' ? 'active' : '' }}" href="{{url('/pelamar/form')}}" >
                                <i class="nav-icon fas fa-edit" style="color:White"></i>
                                <p style="color:White">
                                    Form Pendaftaran
                                </p>
                            </a>
                        </li>
                        @endif
                        @if (Auth::check() && Auth::user()->role == '1')
                        <li class="nav-item">
                            <a class="nav-link {{ Request::route()->getName() == 'pelamar' ? 'active' : '' }}" href="{{url('/pelamar')}}">
                                <i class="nav-icon fas fa-copy" style="color:White"></i>
                                <p style="color:White">
                                    Pendaftar
                                </p>
                            </a>
                        </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link {{ Request::route()->getName() == 'interview' ? 'active' : '' }}" href="{{url('/interview')}}">
                                <i class="nav-icon fas fa-book" style="color:White"></i>
                                <p style="color:White">
                                    Seleksi
                                </p>
                            </a>
                        </li>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>@yield('title')</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="https://www.gj-energi.co.id/id/home">Home</a></li>
                                <li class="breadcrumb-item active">@yield('title')</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!-- Default box -->
                            <div class="card">
                                {{-- <div class="card-header">
                                    <h3 class="card-title"></h3>
                                </div> --}}
                                <div class="card-body">
                                    @yield('content')
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    {{-- Footer --}}
                                </div>
                                <!-- /.card-footer-->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 1.0
            </div>
            <strong>Copyright &copy; <a href="https://www.gj-energi.co.id">PT. GINTING JAYA ENERGI</a>.</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- overlayScrollbars -->
    <script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    {{-- <script src="{{asset('dist/js/demo.js')}}"></script> --}}
    
    <script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{asset('plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{asset('plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
    <script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>

    {{-- Boostrap Datepicker --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    {{-- flatpicker --}}
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script>
        $(function () {
          $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
          }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
          $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
          });
        });
    </script>

    <script>
        $(function () {
          bsCustomFileInput.init();
        });
    </script>
    <script>
        config = {
            enableTime: true,
            dateFormat: "Y-m-d H:i",
        }
        flatpickr("input[type=datetime-local]", config);
    </script>
        </body>
        </html>

</body>

</html>
