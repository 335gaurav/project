<?php
include("./controllers/LoginController.php");

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


