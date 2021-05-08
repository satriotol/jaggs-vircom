<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>JAGGS ADMIN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    @yield('css')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @if (Auth::check())
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{route('admin.index')}}" class="nav-link">Home</a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{route('admin.index')}}" class="brand-link">
                <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">JAGGS Admin</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{Auth::user()->name}}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="{{route('admin.index')}}"
                                class="nav-link {{ Request::routeIs('admin.index') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li
                            class="nav-item has-treeview {{Request::routeIs('lomba.create','lomba.edit','lomba.index','lomba.show') ? 'menu-open' : ''}}">
                            <a href="#"
                                class="nav-link {{Request::routeIs('lomba.create','lomba.edit','lomba.index','lomba.show') ? 'active' : ''}}">
                                <i class="nav-icon fas fa-running"></i>
                                <p>
                                    Lomba
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('lomba.index')}}"
                                        class="nav-link {{Request::routeIs('lomba.index') ? 'active' : ''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>List Lomba</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('lomba.create')}}"
                                        class="nav-link {{Request::routeIs('lomba.create','lomba.edit') ? 'active' : ''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tambah Lomba</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li
                            class="nav-item has-treeview {{Request::routeIs('kategori.create','kategori.show','kategori.edit','kategori.index') ? 'menu-open' : ''}}">
                            <a href="#"
                                class="nav-link {{Request::routeIs('kategori.create','kategori.show','kategori.edit','kategori.index') ? 'active' : ''}}">
                                <i class="nav-icon fa fa-server"></i>
                                <p>
                                    Kategori
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('kategori.index')}}"
                                        class="nav-link {{Request::routeIs('kategori.index','kategori.show') ? 'active' : ''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>List Kategori</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('kategori.create')}}"
                                        class="nav-link {{Request::routeIs('kategori.create','kategori.edit') ? 'active' : ''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tambah Kategori</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li
                            class="nav-item has-treeview {{Request::routeIs('subkategori.create','subkategori.edit','subkategori.index') ? 'menu-open' : ''}}">
                            <a href="#"
                                class="nav-link {{Request::routeIs('subkategori.create','subkategori.edit','subkategori.index') ? 'active' : ''}}">
                                <i class="nav-icon fa fa-server"></i>
                                <p>
                                    Sub Kategori
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('subkategori.index')}}"
                                        class="nav-link {{Request::routeIs('subkategori.index') ? 'active' : ''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>List Sub Kategori</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('subkategori.create')}}"
                                        class="nav-link {{Request::routeIs('subkategori.create','subkategori.edit') ? 'active' : ''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tambah Sub Kategori</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li
                            class="nav-item has-treeview {{Request::routeIs('jenjang.create','jenjang.edit','jenjang.index') ? 'menu-open' : ''}}">
                            <a href="#"
                                class="nav-link {{Request::routeIs('jenjang.create','jenjang.edit','jenjang.index') ? 'active' : ''}}">
                                <i class="nav-icon fas fa-list-alt"></i>
                                <p>
                                    Jenjang
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('jenjang.index')}}"
                                        class="nav-link {{Request::routeIs('jenjang.index') ? 'active' : ''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>List Jenjang</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('jenjang.create')}}"
                                        class="nav-link {{Request::routeIs('jenjang.create','jenjang.edit') ? 'active' : ''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tambah Jenjang</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-header">COMPANY</li>
                        <li
                            class="nav-item has-treeview {{Request::routeIs('company.menu','company.beranda','company.tentang','company.sosialmedia') ? 'menu-open' : ''}}">
                            <a href="#"
                                class="nav-link {{Request::routeIs('company.menu','company.beranda','company.tentang','company.sosialmedia') ? 'active' : ''}}">
                                <i class="nav-icon fas fa-industry"></i>
                                <p>
                                    Company
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('company.menu',1)}}"
                                        class="nav-link {{Request::routeIs('company.menu') ? 'active' : ''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Menu Utama</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('company.beranda',1)}}"
                                        class="nav-link {{Request::routeIs('company.beranda') ? 'active' : ''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Beranda</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('company.tentang',1)}}"
                                        class="nav-link {{Request::routeIs('company.tentang') ? 'active' : ''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tentang</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('company.sosialmedia',1)}}"
                                        class="nav-link {{Request::routeIs('company.sosialmedia') ? 'active' : ''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Sosial Media</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li
                            class="nav-item has-treeview {{Request::routeIs('team.create','team.edit','team.index') ? 'menu-open' : ''}}">
                            <a href="#"
                                class="nav-link {{Request::routeIs('team.create','team.edit','team.index') ? 'active' : ''}}">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Team
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('team.index')}}"
                                        class="nav-link {{Request::routeIs('team.index') ? 'active' : ''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>List Team</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('team.create')}}"
                                        class="nav-link {{Request::routeIs('team.create','team.edit') ? 'active' : ''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tambah Team</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li
                            class="nav-item has-treeview {{Request::routeIs('tatacara.create','tatacara.edit','tatacara.index') ? 'menu-open' : ''}}">
                            <a href="#"
                                class="nav-link {{Request::routeIs('tatacara.create','tatacara.edit','tatacara.index') ? 'active' : ''}}">
                                <i class="nav-icon fas fa-arrow-right"></i>
                                <p>
                                    Tata Cara
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('tatacara.index')}}"
                                        class="nav-link {{Request::routeIs('tatacara.index') ? 'active' : ''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>List Tata Cara</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('tatacara.create')}}"
                                        class="nav-link {{Request::routeIs('tatacara.create','tatacara.edit') ? 'active' : ''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tambah Tata Cara</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li
                            class="nav-item has-treeview {{Request::routeIs('faq.create','faq.edit','faq.index') ? 'menu-open' : ''}}">
                            <a href="#"
                                class="nav-link {{Request::routeIs('faq.create','faq.edit','faq.index') ? 'active' : ''}}">
                                <i class="nav-icon fas fa-question-circle"></i>
                                <p>
                                    FAQ
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('faq.index')}}"
                                        class="nav-link {{Request::routeIs('faq.index') ? 'active' : ''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>List FAQ</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('faq.create')}}"
                                        class="nav-link {{Request::routeIs('faq.create','faq.edit') ? 'active' : ''}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tambah FAQ</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-header">KELUAR</li>
                        <li class="nav-item">
                            <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                <i class="nav-icon fas fa-door-open"></i>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                                <p>
                                    Log Out
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        @endif
        @yield('content')
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; {{ now()->year }} <a href="#">JAGGS.id</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.0.5
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
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)

    </script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- ChartJS -->
    <script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
    <!-- Sparkline -->
    <script src="{{asset('plugins/sparklines/sparkline.js')}}"></script>
    <!-- JQVMap -->
    {{-- <script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script> --}}
    <!-- jQuery Knob Chart -->
    <script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
    <!-- daterangepicker -->
    <script src="{{asset('plugins/moment/moment.min.js')}}"></script>
    <script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <!-- Summernote -->
    <script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
    <!-- overlayScrollbars -->
    <script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dist/js/adminlte.js')}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    {{-- <script src="{{asset('dist/js/pages/dashboard.js')}}"></script> --}}
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('dist/js/demo.js')}}"></script>
    @yield('script')
</body>

</html>
