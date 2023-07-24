<?php
include("./controllers/LoginController.php");
include_once ("./controllers/dashboardController.php"); 

$user = new LoginController;

if (isset($_POST['login-btn'])) {
  $email = validateInput($db->conn, $_POST['email']);
  $password = validateinput($db->conn, $_POST['password']);

  $checkLogin = $user->userLogin($email, $password);
  if ($checkLogin) {
    redirect("*Login Successfully", "dashboard.php");
  } else {
    redirect("*Invalid Email or Password", "login.php");
  }
}

$info = new DashboardController();

$usersInfo = $info->userData();
// echo "<pre>"; print_r($usersInfo); echo "</pre>";
if($usersInfo)
{
  return true;
}
else
{
  redirect("*No Data Found !!", "dashboard.php");
}

$schedule = new WorkSchedule('12:09:09', '17:09:49');

if(isset($_POST['punch-out']))
{
$workingHours = $schedule->getWorkingHours();
echo $workingHours;
} else {
  echo "N/A";
}
