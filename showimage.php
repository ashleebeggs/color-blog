<?php
   header("Content-type: image/jpeg");
$userid = $_GET['id'];
   $con = mysql_connect("localhost", "root", "") or die('');
   mysql_select_db("moods", $con);

   $query = "SELECT picture from users WHERE userid = '$userid'";
   $result = mysql_query($query);
   $row = mysql_fetch_array($result, MYSQL_ASSOC);
   $picture = $row['picture'];
   echo $picture;
?>