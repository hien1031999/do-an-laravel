<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Stexo - Responsive Admin & Dashboard Template | Themesdesign</title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta content="Themesdesign" name="author" />
    <link rel="shortcut icon" href="{!! asset('assets/images/favicon.ico') !!}">

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="{!! asset('../plugins/morris/morris.css') !!}">

    <link href="{!! asset('assets/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('assets/css/metismenu.min.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('assets/css/icons.css') !!}" rel="stylesheet" type="text/css">
    <link href="{!! asset('assets/css/style.css') !!}" rel="stylesheet" type="text/css">

</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="index.html" class="logo">
                    <span class="logo-light">
                            <i class="mdi mdi-camera-control"></i> Stexo
                        </span>
                    <span class="logo-sm">
                            <i class="mdi mdi-camera-control"></i>
                        </span>
                </a>
            </div>

         @include('admin.theme.nav')
        </div>
        <!-- Top Bar End -->

        <!-- ========== Left Sidebar Start ========== -->
       @include('admin.theme.sidebar')
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        @include('admin.theme.content')
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- jQuery  -->
    <script src="{!! asset('assets/js/jquery.min.js') !!}"></script>
    <script src="{!! asset('assets/js/bootstrap.bundle.min.js') !!}"></script>
    <script src="{!! asset('assets/js/metismenu.min.js') !!}"></script>
    <script src="{!! asset('assets/js/jquery.slimscroll.js') !!}"></script>
    <script src="{!! asset('assets/js/waves.min.js') !!}"></script>

    <!--Morris Chart-->
    <script src="{!! asset('../plugins/morris/morris.min.js') !!}"></script>
    <script src="{!! asset('../plugins/raphael/raphael.min.js') !!}"></script>

    <script src="{!! asset('assets/pages/dashboard.init.js') !!}"></script>

    <!-- App js -->
    <script src="{!! asset('assets/js/app.js') !!}"></script>

</body>

</html>