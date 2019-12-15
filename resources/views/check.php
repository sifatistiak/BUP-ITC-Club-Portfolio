<?php
session_start();
$_SESSION["msg"] = "green";
include('includes/config.php');
error_reporting(0);
if (strlen($_SESSION['login']) == 0) {
    header('location:index.php');
} else {
    $msg = "";


    if ($_GET['action'] == 'del') {
        $pid = intval($_GET['pid']);
        $query = mysqli_query($con, "Delete from requestedstudent where requestedStudentId='$pid'");
        $delmsg = 'Student Deleted';
    }

    if ($_GET['appid']) {
        $id = intval($_GET['appid']);
        $query = mysqli_query($con, "update requestedstudent set is_Active='1' where requestedStudentId='$id'");
        $msg = "Student approved";
    } ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- App title -->
        <title>Newsportal | Pending Students</title>

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="plugins/morris/morris.css">

        <!-- jvectormap -->
        <link href="../plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="plugins/switchery/switchery.min.css">

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <?php include('includes/topheader.php'); ?>

        <!-- ========== Left Sidebar Start ========== -->
        <?php include('includes/leftsidebar.php'); ?>


        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">


                    <div class="row">
                        <div class="col-xs-12">
                            <div class="page-title-box">
                                <h4 class="page-title">Pending Students </h4>
                                <ol class="breadcrumb p-0 m-0">
                                    <li>
                                        <a href="#">Admin</a>
                                    </li>
                                    <li>
                                        <a href="#">Students</a>
                                    </li>
                                    <li class="active">
                                        Pending Students
                                    </li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->


                    <div class="col-sm-6">

                        <?php if ($msg) { ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo $msg; ?>
                            </div>
                        <?php } ?>

                        <?php if ($delmsg) { ?>
                            <div class="alert alert-danger" role="alert">
                                <strong>Oh snap!</strong> <?php echo htmlentities($delmsg); ?></div>
                        <?php } ?>


                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box">


                                <div class="table-responsive">
                                    <table class="table table-colored table-centered table-inverse m-0">
                                        <thead>
                                        <tr>

                                            <th>Student ID</th>
                                            <th>Student Name</th>
                                            <th>University Name</th>
                                            <th>Semester</th>
                                            <th>Course Applied</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <?php
                                        $sql = "SELECT requestedstudent.id,requestedstudent.student_id,name,universityName,semester,courseCode
                                                FROM student_panel.requestedstudent,users,tbluniversity,tblcourse
                                                where requestedstudent.is_active= 0 
                                                and requestedstudent.student_id = users.student_id
                                                and users.university_id = tbluniversity.id
                                                and requestedstudent.course_id = tblcourse.id";

                                        $query = mysqli_query($con, $sql);
                                        $rowcount = mysqli_num_rows($query);
                                        if ($rowcount == 0) {
                                            ?>
                                            <tr>

                                                <td colspan="6" align="center">
                                                    <h3 style="color:red">Approved Student list is Empty.</h3>
                                                </td>
                                            <tr>
                                            <?php
                                        } else {
                                            while ($row = mysqli_fetch_array($query)) {
                                                ?>
                                                <tr>
                                                    <td><b><?php echo htmlentities($row['student_id']); ?></b></td>
                                                    <td><b><?php echo htmlentities($row['name']); ?></b></td>
                                                    <td><b><?php echo htmlentities($row['universityName']); ?></b></td>
                                                    <td><b><?php echo htmlentities($row['semester']); ?></b></td>
                                                    <td><b><?php echo htmlentities($row['courseCode']); ?></b></td>



                                                    <td><a href="edit-student.php?editid=<?php echo htmlentities($row['id']); ?>"><i class="fa fa-pencil" style="color: #296d98;"></i></a>
                                                        &nbsp;<a href="manage-students.php?pid=<?php echo htmlentities($row['id']); ?>&&action=del" onclick="return confirm('Do you reaaly want to delete ?')"> <i class="fa fa-trash-o" style="color: #f05050"></i></a> </td>
                                                </tr>
                                                <?php
                                            }
                                        } ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>



                </div> <!-- container -->

            </div> <!-- content -->

            <?php include('includes/footer.php'); ?>

        </div>


        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->



    <script>
        var resizefunc = [];
    </script>

    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/detect.js"></script>
    <script src="assets/js/fastclick.js"></script>
    <script src="assets/js/jquery.blockUI.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="plugins/switchery/switchery.min.js"></script>

    <!-- CounterUp  -->
    <script src="plugins/waypoints/jquery.waypoints.min.js"></script>
    <script src="plugins/counterup/jquery.counterup.min.js"></script>

    <!--Morris Chart-->
    <script src="plugins/morris/morris.min.js"></script>
    <script src="plugins/raphael/raphael-min.js"></script>

    <!-- Load page level scripts-->
    <script src="plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="plugins/jvectormap/gdp-data.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>


    <!-- Dashboard Init js -->
    <script src="assets/pages/jquery.blog-dashboard.js"></script>

    <!-- App js -->
    <script src="assets/js/jquery.core.js"></script>
    <script src="assets/js/jquery.app.js"></script>

    </body>

    </html>
    <?php
} ?>