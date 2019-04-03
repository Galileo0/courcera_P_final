<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

//db_connect
$sql_user = 'galilio';
$pass = '$ilent';
$mysqli = new mysqli("localhost", $sql_user ,$pass, "ntl_project_final");

//db_check errors
if(mysqli_connect_errno())
{
    echo mysqli_connect_error(); 
}





?>