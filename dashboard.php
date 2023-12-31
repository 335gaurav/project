<?php

include("./includes/header.php");
include("./includes/navbar.php");
include("./includes/asidebar.php");
include("./controllers/attendanceController.php");

$obj = new attendanceController();

$userAttendance = $obj->getUserAttendance($_SESSION['user']['user_id']);
// echo "<pre>"; print_r($userAttendance['id']['punch_out']); echo "</pre>";
if ($userAttendance) {
  if (end($userAttendance)["punch_out"] === NULL) {
    $isPunched = true;
  } else {
    $isPunched = false;
  }
} else {
  $isPunched = false;
}

if (isset($_POST['punch-btn'])) {
  if ($isPunched) {
    $obj->updateAttendance(end($userAttendance)["id"]);
    $isPunched = false;
  } else {
    $obj->insertAttendance($_SESSION['user']['user_id']);
    $isPunched = true;
  }
}


?>

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
      <div class="col-lg-4 mb-lg-0 mb-2">
        <div class="card punch-status">
          <div class="card-body">
            <h5 class="card-title mb-3 mt-2">
              Timesheet
              <small class="text-muted" id="date"></small>
            </h5>
            <div class="punch-info py-4">
              <div class="punch-hours">
                <span id="clock"></span>
              </div>
            </div>
            <div class="punch-btn-section">
              <form action="" method="post">
                <?php if ($isPunched) { ?>
                  <button type="submit" class="punch-btn" name="punch-btn">Punch Out</button>
                <?php } else { ?>
                  <button type="submit" class="punch-btn" name="punch-btn">Punch In</button>
                <?php } ?>
              </form>
            </div>
            <div class="Break-btn-section text-center my-3">
              <p class="mb-1">Break Time</p>
              <p class="mb-0">45 min</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card recent-activity">
          <div class="card-body card-title-color">
            <h5 class="card-title">Today Activity</h5>
            <ul class="res-activity-list">
              <li>
                <?php
                foreach ($userAttendance as $time) {
                  echo " <p class='mb-0'>Punch In at</p>
                <p class='res-activity-time'>
                  <i class='bi bi-clock me-2'></i>";
                  if ($time['punch_in']) {
                    echo $time['punch_in'];
                  } else {
                    echo "---";
                  }
                  echo "</p>
              </li>
              <li>
                <p class='mb-0'>Punch out at</p>
                <p class='res-activity-time'>
                  <i class='bi bi-clock me-2'></i>";
                  if ($time['punch_out']) {
                    $givenDateTime = $time['punch_out'];
                    $convertedDateTime = DateTime::createFromFormat('Y-m-d H:i:s', $givenDateTime);

                    $convertedTime = $convertedDateTime->format('H:i:s');
                    echo $convertedTime;
                    // echo ;
                    echo "<br>";
                  } else {
                    echo "---";
                  }
                }
                ?>
                </p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-sm-3">
        <div class="form-group">
          <input type="Date" id="Date" name="Date" class="form-control" placeholder="Start date" />
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group">
          <div class="select-field-form-changes mb-3">
            <select class="form-select" aria-label="Default select example">
              <option value="" disabled selected>select Month</option>
              <option value="2">Jan</option>
              <option value="2">Feb</option>
              <option value="2">March</option>
              <option value="2">April</option>
              <option value="2">May</option>
              <option value="2">June</option>
              <option value="2">July</option>
              <option value="2">August</option>
              <option value="2">September</option>
              <option value="2">october</option>
              <option value="2">November</option>
              <option value="2">December</option>
            </select>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="select-field-form-changes mb-3">
          <select class="form-select" aria-label="Default select example">
            <option value="" disabled selected>select Year</option>
            <option value="2">2010</option>
            <option value="2">2011</option>
            <option value="2">2012</option>
            <option value="2">2013</option>
            <option value="2">2014</option>
            <option value="2">2015</option>
            <option value="2">2016</option>
            <option value="2">2017</option>
            <option value="2">2018</option>
            <option value="2">2019</option>
            <option value="2">2020</option>
            <option value="2">2021</option>
          </select>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="cs-search-spacing">
          <a href="#" class="btn btn-success"> Search </a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="table-responsive cs-spacing">
          <table class="table table-bordered mb-0">
            <thead>
              <tr>
                <th>Date</th>
                <th>Punch In</th>
                <th>Punch Out</th>
                <th>Working Hours</th>
                <th>Break</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>

              <?php include_once("./codes/authentication_code.php");

              $data = $info->userData();
              foreach ($data as $data) {
                echo "<tr> <td> $data[date] </td>";
                echo "<td> $data[punch_in] </td>";
                echo "<td>". ltrim($data['punch_out'], date('Y-m-d')) ."</td>";
                echo "<td> $data[working_hours] </td>";
                echo "<td> $data[break] </td>";
                echo "<td> <div class='css-Present-color'>Present</div><br>
                      <div class='css-absent-color'>Absent</div>
                      </td> </tr>";
              }
              ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
</main>
<script>
  function updateTime() {
    var date = new Date();
    var hours = date.getHours();
    var minutes = date.getMinutes();
    var seconds = date.getSeconds();

    // Add leading zeros if needed
    hours = (hours < 10 ? "0" : "") + hours;
    minutes = (minutes < 10 ? "0" : "") + minutes;
    seconds = (seconds < 10 ? "0" : "") + seconds;

    var currentTime = hours + ":" + minutes + ":" + seconds;

    document.getElementById("clock").textContent = currentTime;
  }

  // Call updateTime() initially to avoid delay
  updateTime();

  // Refresh time every second
  setInterval(updateTime, 1000);

  function displayDate() {
    var currentDate = new Date(); // creates a new Date object

    // Extracting the date components
    var day = currentDate.getDate();
    var month = currentDate.getMonth(); // Months are zero-based, so we add 1
    var year = currentDate.getFullYear();

    const monthNames = [
      "January", "February", "March", "April",
      "May", "June", "July", "August",
      "September", "October", "November", "December"
    ];

    const monthName = monthNames[month];

    // Adding leading zeros if necessary
    month = month < 10 ? "0" + monthName : monthName;
    day = day < 10 ? "0" + day : day;

    // Displaying the date
    var dateString = day + "-" + monthName + "-" + year;
    document.getElementById("date").innerHTML = dateString;
  }

  // Updating the date every second (1000 milliseconds)
  setInterval(displayDate);
</script>
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