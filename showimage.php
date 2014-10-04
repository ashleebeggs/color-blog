<?php
   header("Content-type: image/jpeg");
$userid = $_GET['id'];

$mysqli = mysqli_connect("huuuecom.ipowermysql.com", "ashleebeggs", "ayso13", "moods");
                if (mysqli_connect_errno($mysqli)) {
    echo "Failed to connect to database: " . mysqli_connect_error();
                }


$res = mysqli_query($mysqli, "SELECT picture from users WHERE userid = '$userid'");
$row = mysqli_fetch_assoc($res);
   $picture = $row['picture'];
   echo $picture;
?>