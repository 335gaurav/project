<?php
include("./includes/header.php");
include("./includes/navbar.php");
?>


<aside id="sidebar" class="sidebar">
  <ul class="sidebar-nav" id="sidebar-nav">
    <li class="nav-item">
      <a class="nav-link collapsed active" href="index.html">
        <i class="bi bi-speedometer2"></i>
        <span>Dashboard</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#Attendance-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-menu-button-wide"></i><span>Attendance</span><i class="bi bi-chevron-right ms-auto"></i></a>
      <ul id="Attendance-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
          <a href="Attendance.html"> <i class="bi bi-circle"></i><span>Attendance(Admin)</span> </a>
        </li>
        <li>
          <a href="leaves(admin).html"> <i class="bi bi-circle"></i><span>Leaves(Admin)</span> </a>
        </li>
        <li>
          <a href="employee-leave.html"> <i class="bi bi-circle"></i><span>Employee leave</span> </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#Task-nav" data-bs-toggle="collapse" href="#"> <i class="bi-list-task"></i><span>Tasks</span><i class="bi bi-chevron-right ms-auto"></i></a>
      <ul id="Task-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
          <a href="Task-details.html"> <i class="bi bi-circle"></i><span> All Task</span> </a>
        </li>
        <li>
          <a href="Tasks.html"> <i class="bi bi-circle"></i><span>Task Details</span> </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#Employees-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-people"></i><span>Employees</span><i class="bi bi-chevron-right ms-auto"></i></a>
      <ul id="Employees-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
          <a href="#"> <i class="bi bi-circle"></i><span>All Employee</span> </a>
        </li>
        <li>
          <a href="#"> <i class="bi bi-circle"></i><span>Add Employee</span> </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#Projects-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-menu-button-wide"></i><span>Projects</span><i class="bi bi-chevron-right ms-auto"></i></a>
      <ul id="Projects-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
          <a href="#"> <i class="bi bi-circle"></i><span> All Projects</span> </a>
        </li>
        <li>
          <a href="#"> <i class="bi bi-circle"></i><span>Project Details</span> </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#Users-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-people-fill"></i><span>Users</span><i class="bi bi-chevron-right ms-auto"></i></a>
      <ul id="Users-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
          <a href=""> <i class="bi bi-circle"></i><span>Add Users</span> </a>
        </li>
        <li>
          <a href=""> <i class="bi bi-circle"></i><span>Profile</span> </a>
        </li>
      </ul>
    </li>
    <li class="nav-heading">Pages</li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="#">
        <i class="bi bi-gear"></i>
        <span>Settings</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="Sign In.html">
        <i class="bi bi-box-arrow-in-right"></i>
        <span>Sign In</span>
      </a>
    </li>
  </ul>
</aside>

<main id="main" class="main">
  <div class="pagetitle">
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