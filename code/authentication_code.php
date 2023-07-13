<?php
include("./controllers/LoginController.php");

$user = new LoginController;

if(isset($_POST['logout-btn'])) {
  $checkedLoggedout = $user->logout();
  if($checkedLoggedout) {
    redirect("Logout Successfully", "login.php");
  }
  else
  {
    return false;
  }
}
if (isset($_POST['login-btn'])) {
  $email = validateInput($db->conn, $_POST['email']);
  $password = validateinput($db->conn, $_POST['password']);



  $checkLogin = $user->userLogin($email, $password);
  if ($checkLogin) {
    redirect("Login Successfully", "database.php");
  } else {
    redirect("*Invalid Email or Password", "login.php");
  }
}
