<?php


$con = mysql_connect("localhost", "root", "") or die('Sorry, could not connect to database server');  


mysql_select_db("moods", $con) or die('Could not connect to database');


$userid = $_POST['userid'];


$password = $_POST['password'];


$query = "SELECT userid from users where userid = '$userid' and password = PASSWORD('$password')";


$result = mysql_query($query);


if (mysql_num_rows($result) == 0)


{


    echo "<h2 class='centermessage'>Sorry, your user account was not validated.</h2><br>\n";


    echo "<a href=\"color-blog.php?content=login\">Try again</a><br>\n";



} else


{   
?>
<script>
console.log("working before session");
</script>

<?php

    
   $_SESSION['valid_color_user'] = $userid;
   
?>

<script>
  console.log("working after session");  
    window.location.reload()

    
</script>
<?php

}


?>