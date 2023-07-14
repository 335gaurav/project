<?php
session_start();

define('DB_SERVER', 'localhost');
define('DB_HOST', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'attendance-manager');

define('SITE_URL', 'http://localhost/project(oop)/');

include_once("./config/database_connect.php");
$db = new DatabaseConnect;
include("./codes/authentication_code.php");

function base_url($slug)
{
  echo SITE_URL.$slug;
}

function redirect($message, $page)
{
  $redirectTo = SITE_URL.$page;
  $_SESSION['message'] = "$message";
  header("Location: $redirectTo");
  exit(0);
}

function validateInput($db_conn, $input)
{
  return mysqli_real_escape_string($db_conn, $input);
}