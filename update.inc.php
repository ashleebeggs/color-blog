<?php




$userid = $_POST['userid'];


$password = $_POST['password'];


$password2 = $_POST['password2'];


$email = $_POST['email'];



if (get_magic_quotes_gpc())
   {
    $userid = stripslashes($userid);
    $fullname = stripslashes($fullname);
    $email = stripslashes($email);
}
 $userid = mysql_real_escape_string($userid);
$fullname = mysql_real_escape_string($fullname);
$email = mysql_real_escape_string($email);

 
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


   $query = "UPDATE users SET password = PASSWORD('$password') WHERE userid = '$userid' and email = '$email'";


   $result = mysql_query($query) or die('Sorry, we are unable to process your request.');


   if ($result)


   {


      $_SESSION['valid_color_user'] = $userid;
?>

     <script>
  console.log("working adding");  
    window.location.reload('color-blog');
</script>
<?php
      exit;


   } else


   {


      echo "<h2>Sorry, there was a problem processing your change</h2><br>\n";


    



   }





?>

