<?php

 $con = mysql_connect("localhost", "root", "") or die('Could not connect to server'.mysql_error());
        mysql_select_db("moods", $con) or die('Could not connect to database');


$userid = $_POST['userid'];


$password = $_POST['password'];


$password2 = $_POST['password2'];

$email = $_POST['email'];



 
$baduser = 0;


// Check if userid was entered


if (trim($userid) == '')


{


   echo "<h2>Sorry, you must enter your username.</h2><br>\n";


  

   $baduser = 1;


}


//Check if password was entered


if (trim($password) == '')


{


   echo "<h2>Sorry, you must enter a password.</h2><br>\n";


  

   $baduser = 1;


}


//Check if password and confirm password match


if ($password != $password2)


{


   echo "<h2>Sorry, the passwords you entered did not match.</h2><br>\n";


   
   $baduser = 1;


}


//Check if userid is already in database



   //Everything passed, enter userid in database

 if ($baduser != 1)


{
  $query = "SELECT userid from users where userid = '$userid' and email = '$email'";


$result = mysql_query($query);


if (mysql_num_rows($result) == 0)


{


    echo "<h2 class='centermessage'>Sorry, your user account was not validated.</h2><br>\n";


    echo "<a href=\"color-blog.php?content=login\">Try again</a><br>\n";



} else

{
    $query = "UPDATE users SET password = PASSWORD('$password') WHERE userid = '$userid' and email = '$email'";
    $result = mysql_query($query);

   
?>



<script>
  console.log("working after session");  
    window.location.reload()

    
</script>
<?php
 }
}


?>

