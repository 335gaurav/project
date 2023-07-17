<?php
include("./config/app.php");

class attendanceController
{
  public $conn;

  public function __construct()
  {
    $db = new DatabaseConnect;
    $this->conn = $db->conn;
  }
  public function getUserAttendance($userid)
  {
    $getUserQuery = "SELECT * FROM `attendance` WHERE `user_id`=$userid AND `date`=CURDATE()";
    $result = $this->conn->query($getUserQuery);
    $data = $result->fetch_all(MYSQLI_ASSOC);  
    return $data;
    
  }
  public function updateAttendance($attendance_id){
    $updateQuery = "UPDATE `attendance` SET `last_action`='out' WHERE `id`=$attendance_id";
    return $this->conn->query($updateQuery);
  }

  public function insertAttendance($user_id){
    $insertQuery = "INSERT INTO `attendance`(`user_id`, `last_action`) VALUES ('$user_id','in')";
    return $this->conn->query($insertQuery);
  }
}