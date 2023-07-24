<?php

class DashboardController
{
  public $conn;

  public function __construct()
  {
    $db =  new DatabaseConnect();
    $this->conn = $db->conn;
  }

  public function userData()
  {
    $userDataquery = "SELECT * FROM `attendance` WHERE `date`=CURDATE()";
    $result = $this->conn->query($userDataquery);
    if($result->num_rows > 0)
    {
      $data = $result->fetch_all(MYSQLI_ASSOC);      
      return $data;
    }
    else
    {
      return false;
    }
  }
}

include_once "./codes/authentication_code.php";

class WorkSchedule {
  private $startHour;
  private $endHour;
  public $conn;

  public function __construct($startHour, $endHour) {
      $this->startHour = $startHour;
      $this->endHour = $endHour;

      $db = new DatabaseConnect();
      $this->conn = $db->conn;
  }

  public function getWorkingHours() {
      $start = new DateTime($this->startHour);
      $end = new DateTime($this->endHour);
      $diff = $end->diff($start);
      return $diff->format('%H:%I:%S');
  }

  public function insertTotalWorkHours()
  {
    $hours = $this->getWorkingHours();
    echo $hours;
    $insertQuery = "INSERT INTO `attendance` WHERE `working_hours` VALUES $hours";
    $result = $this->conn->query($insertQuery);
    return $result;
  }
}
  