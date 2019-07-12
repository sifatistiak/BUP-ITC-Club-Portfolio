<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">
    <!-- App title -->
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('admin/assets/plugins/morris/morris.css')}}">

    <!-- App css -->
    <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/css/core.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/css/components.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/css/pages.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/css/menu.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('admin/assets/plugins/switchery/switchery.min.css')}}'">
    <script src="{{asset('admin/assets/js/modernizr.min.js')}}"></script>
</head>


<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">

        <!-- LOGO -->
        <div class="topbar-left">
            <a href="index.html" class="logo"><span>NP<span>Admin</span></span><i class="mdi mdi-layers"></i></a>

        </div>

        <!-- Button mobile view to collapse sidebar menu -->
        @include('includes.admin_top')
    </div>
    <!-- Top Bar End -->


    <!-- ========== Left Sidebar Start ========== -->
    @include('includes.admin_left')
<!-- Left Sidebar End -->



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                @yield('content')
            </div>
        </div>
        @include('includes.admin_footer')
    </div>
</div>



<!-- jQuery  -->
<script src="{{asset('admin/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('admin/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/assets/js/detect.js')}}"></script>
<script src="{{asset('admin/assets/js/fastclick.js')}}"></script>
<script src="{{asset('admin/assets/js/jquery.blockUI.js')}}"></script>
<script src="{{asset('admin/assets/js/waves.js')}}"></script>
<script src="{{asset('admin/assets/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('admin/assets/js/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/switchery/switchery.min.js')}}"></script>

<!-- Counter js  -->
<script src="{{asset('admin/assets/plugins/waypoints/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/counterup/jquery.counterup.min.js')}}'"></script>

<!--Morris Chart-->
<script src="{{asset('admin/assets/plugins/morris/morris.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/raphael/raphael-min.js')}}"></script>

<!-- Dashboard init -->
<script src="{{asset('admin/assets/pages/jquery.dashboard.js')}}"></script>

<!-- App js -->
<script src="{{asset('admin/assets/js/jquery.core.js')}}"></script>
<script src="{{asset('admin/assets/js/jquery.app.js')}}"></script>
</body>
</html>
