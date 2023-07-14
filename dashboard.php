<?php

// include("./controllers/authenticationController.php");

// $authenticate->checkIsLoggedin();
session_start();


include("./includes/header.php");
include("./includes/navbar.php");
// include("./includes/asidebar.php");

?>

<main id="main" class="main">
  <div class="pagetitle">
    <?php include("./message.php"); ?>
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div>

  <section class="section">
    <div class="row">
      <!-- Left side columns -->
      <div class="col-lg-4 mb-2 mb-lg-0">
        <div class="Attendance-sheet bg-white py-4 border border-dark-subtle">
          <div class="Dashboard-Attendance-title ps-2">
            <h5>
              Timesheet
              <small class="text-muted">11 Mar 2019</small>
            </h5>
          </div>
          <div class="punch-info">
            <div class="punch-hours">
              <span>3.45 hrs</span>
            </div>
          </div>
          <form action=""></form>
          <div class="punch-btn-section">
            <button type="submit" class="punch-btn">Punch Out</button>
          </div>
          <div class="Break-btn-section text-center">
            <p class="mb-1">Break Time</p>
            <p class="mb-0">Hours</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="cs-height overflow-auto">
          <table class="table table-bordered border border-dark-subtle">
            <tbody>
              <tr>
                <td colspan="2">
                  <h5 class="mb-0 fw-light">Today Activity</h5>
                </td>
              </tr>
              <tr>
                <td>
                  <p class="mb-1">Punch In at</p>
                  <p class="text-muted mb-0"><i class="bi bi-clock me-2"></i>10.00 AM.</p>
                </td>
                <td>
                  <p class="mb-1">Punch Out at</p>
                  <p class="text-muted mb-0"><i class="bi bi-clock me-2"></i>10.00 AM.</p>
                </td>
              </tr>
              <tr>
                <td>
                  <p class="mb-1">Punch In at</p>
                  <p class="text-muted mb-0"><i class="bi bi-clock me-2"></i>10.00 AM.</p>
                </td>
                <td>
                  <p class="mb-1">Punch Out at</p>
                  <p class="text-muted mb-0"><i class="bi bi-clock me-2"></i>10.00 AM.</p>
                </td>
              </tr>
              <tr>
                <td>
                  <p class="mb-1">Punch In at</p>
                  <p class="text-muted mb-0"><i class="bi bi-clock me-2"></i>10.00 AM.</p>
                </td>
                <td>
                  <p class="mb-1">Punch Out at</p>
                  <p class="text-muted mb-0"><i class="bi bi-clock me-2"></i>10.00 AM.</p>
                </td>
              </tr>
              <tr>
                <td>
                  <p class="mb-1">Punch In at</p>
                  <p class="text-muted mb-0"><i class="bi bi-clock me-2"></i>10.00 AM.</p>
                </td>
                <td>
                  <p class="mb-1">Punch Out at</p>
                  <p class="text-muted mb-0"><i class="bi bi-clock me-2"></i>10.00 AM.</p>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
</main>

<!-- Vendor JS Files -->
<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script> -->

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
</body>

</html>