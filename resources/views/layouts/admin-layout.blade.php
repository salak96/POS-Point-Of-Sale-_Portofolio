<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<title>{{ $title ?? config('app.name') }}</title>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- manual icon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('/img/logo.png') }}">
    {{-- <link rel="icon" href="{{ url($setting->path_logo) }}" type="image/png"> --}}
   
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Custom fonts for this template-->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b95a244235.js" crossorigin="anonymous"></script>
    <style>
       .img-profile-circle-img-profil2{
            background-color: #fff;
            border-radius: 100%;
            height:30px;
            width: 30px;
          border-radius: 50%;
        }
        .img-profile-circle-img-profil{
            background-color: #fff;
            border-radius: 100%;
            height: 35px;
            width: 35px;
          border-radius: 50%;
        }
        </style>
    @stack('css')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('user.profil') }}">
                <div class="sidebar-brand-icon ">
                    <img class="img-profile-circle-img-profil2" src="{{ url(auth()->user()->foto ?? asset('img/undraw_profile.svg')) }}" alt="User Image" >

                </div>
                <div class="sidebar-brand-text mx-3"><sup></sup>
                    {{ auth()->user()->name }}</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route ('dashboard') }}">
                    <i class="fa-solid fa-house-user"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            @if (auth()->user()->level == '1')
    
            <!-- Heading -->
            <div class="sidebar-heading">
                Master
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('kategori.index') }}">
                    <i class="fa-solid fa-cubes"></i>
                    <span>Kategori</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('produk.index') }}">
                    <i class="fa-brands fa-product-hunt"></i>
                    <span>Produk</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route ('member.index') }}">
                    <i class="fa-solid fa-people-roof"></i>
                    <span>Member</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route ('supplier.index') }}">
                    <i class="fa-solid fa-truck-field"></i>
                    <span>Supplier</span></a>
            </li>


            <!-- Heading -->
            <div class="sidebar-heading">
                TRANSAKSI
            </div>
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route ('pengeluaran.index') }}">
                    <i class="fa-solid fa-box-open"></i>
                    <span>Pengeluaran</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route ('pembelian.index') }}">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span>Pembelian</span></a>
            </li>

            <!-- Heading -->
            <li class="nav-item">
                @if (auth()->user()->level == '1')            
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Penjualan</span>
                </a>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-black py-2 collapse-inner rounded">
                        <a class="nav-link" href="{{ route('transaksi.index') }}">
                            <i class="fa-solid fa-money-bill-trend-up"></i>
                            <span>Transaksi Lama</span></a>
                        <a class="nav-link" href="{{ route('transaksi.baru') }}">
                            <i class="fa-solid fa-money-bill-trend-up"></i>
                            <span>Transaksi Baru</span></a>
                    </div>
                </div>
                    <div class="sidebar-heading">
                     Report
                    </div>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('laporan.index') }}">
                            <i class="fa-brands fa-readme"></i>
                            <span>Laporan</span></a>
                    </li>
                    @endif
            <!-- usere -->
            <div class="sidebar-heading">
               Management User
               </div>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route ('user.index')}}">
                            <i class="fa-solid fa-users-gear"></i>
                            <span>User</span></a>
                    </li>
            <!-- Heading -->
            <div class="sidebar-heading">
                SYSTEM
            </div>
            <li class="nav-item">
                <a class="nav-link" href="{{ route ('setting.index') }}">
                    <i class="fa-solid fa-gear"></i>
                    <span>Setting</span></a>
            </li>
            @else
            <div class="bg-white py-2  col-l-3 collapse-inner rounded">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Penjualan</span>

                </a>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="nav-link" href="{{ route('transaksi.index') }}">
                            <i class="fa-solid fa-money-bill-trend-up"></i>
                            <span>Transaksi Lama</span></a>
                        <a class="nav-link" href="{{ route('transaksi.baru') }}">
                            <i class="fa-solid fa-money-bill-trend-up"></i>
                            <span>Transaksi Baru</span></a>
                    </div>
                    </div>
                </div>

            @endif
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                            aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                            aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                        placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>
                 
                    
                   

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information user -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle img-profil" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                {{ auth()->user()->name }}
                            </span>
                            {{-- <img class="img-profile rounded-circle" src="img/undraw_profile.svg"> --}}
                            <img class="img-profile-circle-img-profil" src="{{ url(auth()->user()->foto ?? asset('img/undraw_profile.svg')) }}" alt="User Image" width="40" height="20">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                {{ auth()->user()->email }}
                            </a>
                            <a class="dropdown-item" href="{{ route('user.profil') }}">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profil
                            </a>
                            <a class="dropdown-item" href="{{ route('setting.index') }}">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            <!-- 2Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    {{ __('Log Out') }}
                                </x-responsive-nav-link>
                            </form>

                    </li>

                </ul>

            </nav>

            <!-- End of Topbar -->


            <!-- Main Content -->

            <main>
                <div class="container-fluid">
                    <h1 class="h3 mb-0 text-gray-800">{{ $title ??"" }}</h1>
                    <br>
                    @yield('content')
                </div>
            </main>

            <!-- End of Main Content -->
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    {{-- <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="#"
                       onclick="document.getElementById('logoutModal').submit()">Logout</a>
                </div>
            </div>
        </div>
    </div> --}}




    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset ('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('js/demo/chart-pie-demo.js') }}"></script>


    <!-- Custom styles for this page -->
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css"') }}" rel="stylesheet">
       <!-- Custom scripts for all pages-->
       <script src="asset('js/sb-admin-2.min.js')"></script>

       <!-- Page level plugins -->
       <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>
   
       <!-- Page level custom scripts -->
       <script src="{{ asset ('js/demo/chart-area-demo.js') }}"></script>
       <script src="{{asset ('js/demo/chart-pie-demo.js"') }}"></script>
   

    <!-- Page level plugins -->
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>

    <!-- validator -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.js">
    <!--preview image-->
    <script>
    function preview(selector,temporaryFile,width=200) {
        $(selector).empty();
        $(selector).append(`<img src="${window.URL.createObjectURL(temporaryFile)}" width="${width}">`);
    }
    </script>

    @stack('scripts')
    
    @yield('footer')
        <!-- manual grafik -->
        <script src="https://code.highcharts.com/highcharts.js"></script>

</body>

</html>
