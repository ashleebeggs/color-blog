<?php


if (!isset($_SESSION['valid_color_user']))
{
$mysqli = mysqli_connect("huuuecom.ipowermysql.com", "ashleebeggs", "ayso13", "moods");
                if (mysqli_connect_errno($mysqli)) {
    echo "Failed to connect to database: " . mysqli_connect_error();
                }

$userid = $_POST['userid'];


$password = $_POST['password'];


$password2 = $_POST['password2'];


$fullname = $_POST['fullname'];


$email = $_POST['email'];



if (get_magic_quotes_gpc())
   {
    $userid = stripslashes($userid);
    $fullname = stripslashes($fullname);
    $email = stripslashes($email);
      $password = stripslashes($password);
      $password2 = stripslashes($password2);
}
 $userid = mysql_real_escape_string($userid);
$fullname = mysql_real_escape_string($fullname);
$email = mysql_real_escape_string($email);
   $password = mysql_real_escape_string($password);
   $password2 = mysql_real_escape_string($password2);

    $thumbnail = getThumb($_FILES['picture']);
   $thumbnail = mysql_real_escape_string($thumbnail);
    
$res = mysqli_query($mysqli, "SELECT userid from users where userid = '$userid'");
$row = mysqli_fetch_assoc($res);

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
       
       $query = "INSERT into users (userid, password, fullname, email, picture)"." VALUES ('$userid', PASSWORD('$password'), '$fullname', '$email', '$thumbnail')";

       $res = mysqli_query($mysqli, $query);

      if ($res)
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
}
else{
    echo ("You are already logged in"); 
}

?>

