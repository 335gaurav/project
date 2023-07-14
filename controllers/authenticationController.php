<?php

include("./config/app.php");

class authenticationController
{
  public $conn;

  public function __construct()
  {

    $db = new DatabaseConnect;
    $this->conn = $db->conn;

    $this->checkIsLoggedIn();
  }

  public function checkIsLoggedIn()
  {
    if (!isset($_SESSION['authenticated'])) {
      redirect("Login to Access the page", 'login.php');
      return false;
    } else {
      return true;
    }
  }

}


$authenticate = new AuthenticationController;
