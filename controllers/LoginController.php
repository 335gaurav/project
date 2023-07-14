<?php
// include("./config/app.php"); 

class LoginController
{
  public $conn;

  public function __construct()
  {
    $db = new DatabaseConnect;
    $this->conn = $db->conn;
  }

  public function userLogin($email, $password)
  {
    $loginQuery = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'";
    $result = $this->conn->query($loginQuery);
    if ($result->num_rows > 0) {
      $data = $result->fetch_assoc();
      $this->userAuthentication($data);
      return true;
    } else {
      return  false;
    }
  }

  public function userAuthentication($data)
  {
    $_SESSION['authenticated'] === true;
    $_SESSION['user_role'] = $data['user_type'];
    $_SESSION['user'] = [
      'user_id' => $data['id'],
      'user_fname' => $data['first_name'],
      'user_lname' => $data['last_name'],
      'user_email' => $data['email'],
      'user_date' => $data['updated_at'],
      'user_img' => $data['images'],
      'user_skills' => $data['skills']
    ];
    echo "<pre>"; print_r($_SESSION['user']);
  }

  public function isLoggedIn()
  {
    if(isset($_SESSION['authenticated']) === true)
    {
      redirect("*You are Already Logged In", "dashborad.php");
    }
    else
    {
      return true;
    }
  }

  public function logout()
  {
    if(isset($_SESSION['authenticated']) === true)
    {
      unset($_SESSION['authenticated']);
      unset($_SESSION['user']);
      return true;
    }
    else
    {
      return false;
    }
  }
}
