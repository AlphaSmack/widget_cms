<!DOCTYPE HTML>
<html>
<head>
    <title>Praktikum 4</title>
</head>
<?php

$dbhost = 'localhost';
$dbuser = 'widget_cms';
$dbpass = 'password';
$dbname = 'widget_corp';

$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (mysqli_connect_errno()) {
    echo die("Database connection failed: ") . mysqli_connect_error() . " (" . mysqli_connect_errno() . ").";
}

?>

<body>

<?php
$query = "SELECT * FROM subjects";
$result = mysqli_query($con, $query);

while ($menuname = mysqli_fetch_assoc($result)){
    echo "<ul>".$menuname['menu_name']."</ul>";
}

?>


</body>
</html>