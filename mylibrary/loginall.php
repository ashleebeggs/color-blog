<?php
function login()
{
    $mysqli = mysqli_connect("localhost", "root", "", "moods");
if (mysqli_connect_errno($mysqli)) {
    echo "Failed to connect to database: " . mysqli_connect_error();
}
    
}
?>