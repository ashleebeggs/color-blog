<?php
$mysqli = mysqli_connect("huuuecom.ipowermysql.com", "ashleebeggs", "ayso13", "moods");
                if (mysqli_connect_errno($mysqli)) {
    echo "Failed to connect to database: " . mysqli_connect_error();
                }

$res = mysqli_query($mysqli, "SELECT email from users");

 while($row = mysqli_fetch_assoc($res))
   {
   
$to      = $row['email'];
$subject = 'Reminder';
$message = 'hey dont forget to add your day';
$headers = 'From: email@huuue.com' . "\r\n";
echo $to;
//mail($to, $subject, $message, $headers);
 }
?>