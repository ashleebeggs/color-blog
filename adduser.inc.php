<?php



$con = mysql_connect("localhost", "root", "") or die('Sorry, could not connect to database server');  

if (!$con)


{


   echo "<h2>Sorry, we cannot process your request at this time, please try again later</h2>\n";


   echo "<a href=\"color-blog.php?content=register\">Try again</a><br>\n";


   exit;


}


mysql_select_db("moods", $con) or die('Could not connect to the database');

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
}
 $userid = mysql_real_escape_string($userid);
$fullname = mysql_real_escape_string($fullname);
$email = mysql_real_escape_string($email);

 $thumbnail = getThumb($_FILES['picture']);
   $thumbnail = mysql_real_escape_string($thumbnail);

$baduser = 0;


// Check if userid was entered


if (trim($userid) == '')


{


   echo "<h2>Sorry, you must enter a user name.</h2><br>\n";


   echo "<a href=\"color-blog.php?content=register\">Try again</a><br>\n";



   $baduser = 1;


}


//Check if password was entered


if (trim($password) == '')


{


   echo "<h2>Sorry, you must enter a password.</h2><br>\n";


   echo "<a href=\"color-blog.php?content=register\">Try again</a><br>\n";


   $baduser = 1;


}


//Check if password and confirm password match


if ($password != $password2)


{


   echo "<h2>Sorry, the passwords you entered did not match.</h2><br>\n";


   echo "<a href=\"color-blog.php?content=register\">Try again</a><br>\n";


   $baduser = 1;


}


//Check if userid is already in database


$query = "SELECT userid from users where userid = '$userid'";


$result = mysql_query($query);


$row = mysql_fetch_array($result, MYSQL_ASSOC);


if ($row['userid'] == $userid)


{


   echo "<h2>Sorry, that user name is already taken.</h2><br>\n";


   echo "<a href=\"color-blog.php?content=register\">Try again</a><br>\n";


   $baduser = 1;


}


if ($baduser != 1)


{


   //Everything passed, enter userid in database


   $query = "INSERT into users (userid, password, fullname, email, picture)"." VALUES ('$userid', PASSWORD('$password'), '$fullname', '$email', '$thumbnail')";


   $result = mysql_query($query) or die('Sorry, we are unable to process your request.');


   if ($result)


   {


      $_SESSION['valid_color_user'] = $userid;
?>

     <script>
  console.log("working adding");  
    window.location.reload('color.blog');
</script>
<?php
      exit;


   } else


   {


      echo "<h2>Sorry, there was a problem processing your login request</h2><br>\n";


      echo "<a href=\"color-blog.php?content=register\">Try again</a><br>\n";



   }


}


?>

