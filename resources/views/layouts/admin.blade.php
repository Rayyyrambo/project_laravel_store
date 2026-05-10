<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Custom fonts for this template-->
    @include('layouts.partials.admin.styless')
    <!-- Custom styles for this template-->
    

</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        @include('layouts.partials.admin.sidebar')
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                @include('layouts.partials.admin.topbar')
                @yield('content')     
            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            @include('layouts.partials.admin.footerss')
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
        @include('layouts.partials.admin.modal')
    {{-- end modal --}}
    
    <!-- Bootstrap core JavaScript-->
   @include('layouts.partials.admin.scriptss')

    <!-- Core plugin JavaScript-->

    <!-- Custom scripts for all pages-->

</body>

</html>
