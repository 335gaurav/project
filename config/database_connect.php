<?php

class DatabaseConnect
{
  public $conn;

  public function __construct()
  {
    $conn = new mysqli(DB_SERVER, DB_HOST, DB_PASSWORD, DB_DATABASE);
    if (!$conn) {
      die("Database Connection Failed");
    }
    return $this->conn = $conn;
  }
}
