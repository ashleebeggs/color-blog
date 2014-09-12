<?php
function login()
{
   $con = mysql_connect("localhost", "root", "") or die('Could not connect to server'.mysql_error());
   mysql_select_db("moods", $con) or die('Could not connect to database');
}
?>