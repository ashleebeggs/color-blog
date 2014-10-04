<?php
$mysqli = mysqli_connect("huuuecom.ipowermysql.com", "ashleebeggs", "ayso13", "moods");
                if (mysqli_connect_errno($mysqli)) {
    echo "Failed to connect to database: " . mysqli_connect_error();
                }

$userid = $_POST['userid'];


$password = $_POST['password'];

$res = mysqli_query($mysqli, "SELECT userid from users where userid = '$userid' and password = PASSWORD('$password')");
$row = mysqli_fetch_assoc($res);


if ($row == 0)


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
    window.location.reload('color-blog');  
</script>
<?php

}


?>