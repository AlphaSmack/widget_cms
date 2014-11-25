<!DOCTYPE HTML>
<html>
<head>
    <title>Praktikum 4</title>
    <link rel="stylesheet" type="text/css" href="../mystyle.css">
</head>
<?php

$dbhost = 'localhost';
$dbuser = 'widget_cms';
$dbpass = 'password';
$dbname = 'widget_corp';

$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (mysqli_connect_errno()){
    echo die("Database connection failed: ") . mysqli_connect_error() . " (" . mysqli_connect_errno() . ").";
}

$query = "SELECT * FROM subjects";
$result = mysqli_query($con, $query);

?>
<body>
<?php

while ($subjects = mysqli_fetch_assoc($result)) {
    echo "<h1>" . $subjects['menu_name'] . "</h1>";
}
mysqli_free_result($result);

//second query//

$query = "SELECT * FROM pages";
$result = mysqli_query($con, $query);

echo "<br><hr><br>";

while ($pages = mysqli_fetch_assoc($result)) {
echo '<article class="page"><header class="page-header"><h1 class="post-title">';
echo $pages['menu_name'];
echo '</h1></header><div class="page-body">';
echo $pages['content'];
echo '</div></article>';
}
echo "<br><hr><br>";

mysqli_free_result($result);

//third query

$query = "SELECT * FROM pages WHERE subject_id = 2";
$result = mysqli_query($con, $query);

while ($subject_id2 = mysqli_fetch_assoc($result)) {
    echo '<article class="page"><header class="page-header"><h1 class="post-title">';
    echo $subject_id2['menu_name'];
    echo '</h1></header><div class="page-body">';
    echo $subject_id2['content'];
    echo '</div></article>';
}
echo "<br><hr><br>";

?>
</body>
</html>
<?php
mysqli_free_result($result);
?>