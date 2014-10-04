<?php
$mysqli = mysqli_connect("huuuecom.ipowermysql.com", "ashleebeggs", "ayso13", "moods");
if (mysqli_connect_errno($mysqli)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

      

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


/*
if (trim($password) == '')


{


   echo "<h2>Sorry, you must enter a password.</h2><br>\n";


  

   $baduser = 1;


}
*/


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
     $res = mysqli_query($mysqli, "SELECT userid from users where userid = '$userid' and email = '$email'");
$result = mysqli_fetch_assoc($res);
  
 

if ($result == 0)


{


    echo "<h2 class='centermessage'>Sorry, your user credentials couldn't be validated.</h2><br>\n";


    echo "<a href=\"color-blog.php?content=login\">Try again</a><br>\n";



} else

{
    $PictName = $_FILES['picture']['name'];

      if ($PictName && $password != '' && $password2 != '')
      {
        $thumbnail = getThumb($_FILES['picture']);
         $thumbnail = mysql_real_escape_string($thumbnail); 
       
        $query = "UPDATE users SET password = PASSWORD('$password'), picture = '$thumbnail' WHERE userid = '$userid' and email = '$email'";
   
    }
    else if($password != '' && $password2 != ''){
       
        $query = "UPDATE users SET password = PASSWORD('$password') WHERE userid = '$userid' and email = '$email'";
    }
    else{
        $thumbnail = getThumb($_FILES['picture']);
         $thumbnail = mysql_real_escape_string($thumbnail); 
         
        $query = "UPDATE users SET picture = '$thumbnail' WHERE userid = '$userid' and email = '$email'";
    }
    
  $result = mysqli_query($mysqli, "UPDATE users SET password = PASSWORD('$password'), picture = '$thumbnail' WHERE userid = '$userid' and email = '$email'");
    
      if ($result)
      {
       ?>

<script>  window.location.reload('color-blog');</script>

<?php
      }
      else
      {
         echo "<h2>Sorry, your profile was not changed</h2>\n";
      }

 }
}


?>

