<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin 2 - Blank</title>
    <!-- Custom styles for this template-->
    <link href="{{ asset('./css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('./css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">  
                    <ul class="nav">
                        <li class="nav-item">
                          <a class="nav-link text-dark" href="#">Dashboard</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-dark" href="{{ route('barang')}}">Barang</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-dark" href="#">Transaksi</a>
                        </li>
                      </ul>             
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    @yield('main_content')

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('./js/app.js')}}"></script>

</body>

</html>