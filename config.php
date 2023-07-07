<?php

class Users
{
  protected $conn;

  public function __construct()
  {
    $this->conn = mysqli_connect("localhost", "root", "", "attendance-manager");
    if (mysqli_connect_error()) {
      echo "Not connected" . mysqli_connect_error($this->conn);
    }
  }

  public function runQuery($sql)
  {
    $runQuery = mysqli_query($this->conn, $sql);
    if ($runQuery) {
      return $runQuery;
    } else {
      echo mysqli_error($this->conn);
    }
  }

  public function loginData($data)
  {
    $query = "SELECT * FROM `users` WHERE `email`='" . $data['email'] . "' AND `password`='" . $data['password'] . "'";
    $response = $this->runQuery($query);
    $loginData = mysqli_fetch_all($response, MYSQLI_ASSOC);
    return $loginData;
  }
}

class Session
{

  public function __construct()
  {
    session_start();
  }

  public function get($key)
  {
    return $_SESSION[$key] ?? null;
  }

  public function set($key, $value)
  {
    $_SESSION[$key] = $value;
  }

  public function destroy()
  {
    session_unset();
    session_destroy();
  }
}

class UserValidator
{
  public $data;
  private $errors = [];
  private static $fields = ['email', 'password'];

  public function __construct($post_data)
  {
    $this->data = $post_data;
  }

  public function validateForm()
  {
    foreach (self::$fields as $field) {
      if (!array_key_exists($field, $this->data)) {
        trigger_error("$field is not present in data");
        return;
      }
    }

    $this->validateEmail();
    $this->validatePassword();
    return $this->errors;
  }

  public function validateEmail()
  {
    $val = trim($this->data['email']);

    if (empty($val)) {
      $this->addError('email', '*Email cannot be empty');
    } 
    elseif (!filter_var($val, FILTER_VALIDATE_EMAIL)) {
      $this->addError('email', '*Email must be a valid email');
    }
  }

  public function validatePassword()
  {
    $val = trim($this->data['password']);

    if (empty($val)) {
      $this->addError('password', '*Password cannot be empty');
    } 
    elseif (strlen($val) < 8 || strlen($val) > 20) {
      $this->addError('password', '*Password must be less than 8 characters');
    }
  }
  public function addError($key, $val)
  {
    $this->errors[$key] = $val;
  }
}


