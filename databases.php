<?php

$dbhost = 'localhost';
$dbuser = 'widget_cms';
$dbpass = 'secretpassword';
$dbname = 'widget_corp';

$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (mysqli_connect_errno()){
    echo die("Database connection failed: ") . mysqli_connect_error() . " (" . mysqli_connect_errno() . ").";
}

mysqli_close($con);