<?php
@session_start();
include "../inc/koneksi.php";
include "../inc/function.php";

if (@$_SESSION['username'] =="")
{
    header("location:../inc/login.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>YkMaru</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets2/images/Zhafkiel.jpg" rel="icon">
  <link href="../assets2/images/Zhafkiel.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets2/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets2/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets2/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../assets2/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../assets2/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets2/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets2/css2/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="../assets2/images/Zhafkiel.jpg" alt="">
        <span class="d-none d-lg-block">YkMaru</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->


        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="../assets2/images/Kurumi.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['name']?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
            <h6>Kyle Zafebent Remara</h6>
              <span>Bank Mini</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="../wedding/index.php?id_undangan">
                <i class="bi bi-person"></i>
                <span>Wedding</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="../inc/logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>log Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
      
    <!-- End Forms Nav -->

      <li>
        <span>ID PENGGUNA</span>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="?page=Form">
          <i class="bi bi-layout-text-window-reverse"></i>
          <span>Data Undangan</span>
        </a>
      </li><!-- End invoice Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="?page=Update">
          <i class="bi bi-layout-text-window-reverse"></i>
          <span>Update Photo</span>
        </a>
      </li><!-- End invoice Nav -->
      
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">
  
  <?php include '../inc/menu.php'?>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>YkMaru</span></strong>. All Better
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets2/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets2/vendor/chart.js/chart.min.js"></script>
  <script src="../assets2/vendor/echarts/echarts.min.js"></script>
  <script src="../assets2/vendor/quill/quill.min.js"></script>
  <script src="../assets2/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../assets2/vendor/tinymce/tinymce.min.js"></script>
  <script src="../assets2/vendor/php-email-form/validate.js"></script>
  <script src="../assets2/js/print.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets2/js/main.js"></script>

</body>

</html>