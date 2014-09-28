<?php


if (isset($_SESSION['valid_color_user']))
{


$therapistpassword = $_POST['therapistpassword'];

$therapistemail = $_POST['therapistemail'];



if (get_magic_quotes_gpc())
   {
    
    $therapistemail = stripslashes($therapistemail);
      $therapistpassword = stripslashes($therapistpassword);
      
}
 
$therapistemail = mysql_real_escape_string($therapistemail);
   $therapistpassword = mysql_real_escape_string($therapistpassword);
  

$query = "SELECT userid from users where userid = '$userid'";
$result = mysql_query($query)or die("could not get userid");
$row = mysql_fetch_array($result, MYSQL_ASSOC);    
    
    $baduser = 0;

   if (trim($email) == '')
      $baduser = 1;

   if (trim($password) == '')
      $baduser = 2;

   
   if ($baduser == 0)
   {
       $query = "INSERT into users (userid, password, fullname, email, picture)"." VALUES ('$userid', PASSWORD('$password'), '$fullname', '$email', '$thumbnail')";

      $result=mysql_query($query);

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
      }
      else
      {
         echo "<h2>Sorry, I could not process your form at this time</h2>\n";
      }
   } else
   {
      switch($baduser)
      {
         case(1):
            echo "<h2>Please enter an e-mail address</h2>\n";
            break;
         case(2):
            echo "<h2>Please enter a password</h2>\n";
            break;
         
       }
       echo "<a href=\"color-blog.php?content=thregister\">Try again</a>\n";
   }
}
else{
    echo ("You are not logged in"); 
}

?>

