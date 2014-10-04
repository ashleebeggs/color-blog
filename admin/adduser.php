<?php
if (!isset($_SESSION['valid_admin']))
{

$userid = $_POST['userid'];


$password = $_POST['password'];


$password2 = $_POST['password2'];

$email = $_POST['email'];



if (get_magic_quotes_gpc())
   {
    $userid = stripslashes($userid);
    $email = stripslashes($email);
      $password = stripslashes($password);
      $password2 = stripslashes($password2);
}
 $userid = mysql_real_escape_string($userid);
$email = mysql_real_escape_string($email);
   $password = mysql_real_escape_string($password);
   $password2 = mysql_real_escape_string($password2);

    $thumbnail = getThumb($_FILES['picture']);
   $thumbnail = mysql_real_escape_string($thumbnail);

$query = "SELECT userid from admin where userid = '$userid'";
$result = mysql_query($query)or die("could not get userid");
$row = mysql_fetch_array($result, MYSQL_ASSOC);    
    
    $baduser = 0;

   if (trim($email) == '')
      $baduser = 1;

   if (trim($password) == '')
      $baduser = 2;

   if ($password != $password2)
      $baduser = 3;
    
    if (trim($userid == ''))
      $baduser = 4;
    
    if ($row['userid'] == $userid)
      $baduser = 5;
    
/*
$query = "SELECT * from users where email = '$email'";
   $result = mysql_query($query);
   $rows = mysql_num_rows($result);

if ($rows != 0)
      $baduser = 6;
*/

   if ($baduser == 0)
   {
       $query = "INSERT into admin (userid, password, email, picture)"." VALUES ('$userid', PASSWORD('$password'), '$email', '$thumbnail')";

      $result=mysql_query($query);

      if ($result)
      {
        $_SESSION['valid_admin'] = $userid;
        ?>
            <script>
              console.log("working adding");  
                window.location.reload('skill-section.php');
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
         case(3):
            echo "<h2>Your passwords did not match!</h2>\n";
            break;
         case(4):
            echo "<h2>Please enter a useranme.</h2>\n";
         case(5):
            echo "<h2>I'm sorry, that username is taken.</h2>\n";
         /* case(6):
            echo "<h2>I'm sorry, that email is taken.</h2>\n";*/
       }
       echo "<a href=\"color-blog.php?content=register\">Try again</a>\n";
   }
}else{
    
echo("You're already logged in");
}

?>

