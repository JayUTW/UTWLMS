<?php 
session_start();
 if(empty($_SESSION['username']) or $_SESSION['username']==null){
     header('location:index.php');
 }
 include 'include/Connection.php';
?><!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UTW Admin Ver 1.0</title>

    <!-- Custom fonts for this template-->
    <link href="Assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="Assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="Assets/css/sb-admin-2.min.css" rel="stylesheet">
		<script src="http://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
		<script src="../Assets/ckeditor/ckeditor.js"></script>
		<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"> </script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="Dashboard.php">
                <div class="sidebar-brand-text mx-3">UTW Admin <sup>v 1.0</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="Dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                LMS Section
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#course"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Course</span>
                </a>
                <div id="course" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="viewcourse.php">View Courses</a>
                        <a class="collapse-item" href="addcourse.php">Add Courses</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#program"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Programs</span>
                </a>
                <div id="program" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="addprograms.php">Add Programs</a>
                        <a class="collapse-item" href="viewprograms.php">View Programs</a>
                    </div>
                </div>
            </li>
  <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#topic"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Topics</span>
                </a>
                <div id="topic" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="addtopic.php">Add Topic</a>
                        <a class="collapse-item" href="viewtopic.php">View Topic</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Exam"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Examination</span>
                </a>
                <div id="Exam" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="MockTest.php">Mock Test</a>
                        <a class="collapse-item" href="add_question.php">Add Question</a>
                        <a class="collapse-item" href="View_Question.php">View Question</a>
                        <a class="collapse-item" href="Result.php">Generate Result</a>
                        <a class="collapse-item" href="certificate.php">Certificate</a>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#StudentZone"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Student Zone</span>
                </a>
                <div id="StudentZone" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="NewStudent.php">New Student</a>
                        <a class="collapse-item" href="ContactQuery.php">Contact Query</a>
                        <a class="collapse-item" href="ViewStudents.php">View Student</a>
                        <a class="collapse-item" href="FeeDetails.php">Fee Details</a>
                        <a class="collapse-item" href="PendingFee.php">Pending Fee</a>
                        <a class="collapse-item" href="Invoice.php">Invoice</a>
                        <a class="collapse-item" href="FeeReport.php">Report</a>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider">

            <!-- Heading -->
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Website Setting</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Pages</h6>
                        <a class="collapse-item" href="home.php">Home Page</a>
                        <a class="collapse-item" href="aboutus.php">About Us</a>
                        <a class="collapse-item" href="gallary.php">Gallary</a>
                        <a class="collapse-item" href="slider.php">Slider</a>
                        <a class="collapse-item" href="contactus.php">Contact Us</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">API</h6>
                        <a class="collapse-item" href="payment_api.php">Payment</a>
                        <a class="collapse-item" href="sms_api.php">SMS API</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            
            <li class="nav-item">
                <a class="nav-link" href="Blogpage.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Blog</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="profile.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Profile</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>   
        </ul>
        <!-- End of Sidebar -->
