<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    @include('layouts.admin.head')
    @yield('css')
</head>

<body>

    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

        <header class="topbar" data-navbarbg="skin5">
            @include('layouts.admin.navbar')
        </header>

        <aside class="left-sidebar" data-sidebarbg="skin5">
            @include('layouts.admin.aside')
        </aside>

        <div class="page-wrapper">
            <!-- Bread crumb -->
            @yield('bread-crumb')
            <!-- End Bread crumb -->

            <!-- Container fluid -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                @yield('content')
                <!-- End Page Content -->

            </div>
            <!-- End Container fluid -->

            <!-- footer -->
            <footer class="footer text-center">
                All Rights Reserved by Matrix-admin. Designed and Developed by
                <a href="https://www.wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- End footer -->

        </div>
        <!-- End Page wrapper -->
    </div>
    <!-- End Wrapper -->

    <!-- All Jquery -->
    <!-- ============================================================== -->
    @include('layouts.admin.scripts')
    @yield('js')
</body>

</html>
