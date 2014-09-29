<?php
$mysqli = mysqli_connect("localhost", "root", "", "moods");
if (mysqli_connect_errno($mysqli)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$skilldesc = htmlspecialchars($_POST['skilldesc']);
$skillname = $_POST['skillname'];
$skillcat = $_POST['skillcat'];
$skilltags = $_POST['skilltags'];
if ($skilldesc == "" || $skillname == "" || $skillcat == "" || $skilltags == "")


{
    echo "<h2>Enter all info</h2>\n";
}else
{

if (get_magic_quotes_gpc())
   {
      $skilldesc = stripslashes($skilldesc);
    $skillname = stripslashes($skillname);
    $skillcat = stripslashes($skillcat);
   }
    $skilldescval = mysql_real_escape_string($skilldesc);
    $skillnameval = mysql_real_escape_string($skillname);
    $skillcatval = mysql_real_escape_string($skillcat);
    
 if (isset($_SESSION['valid_admin']))
   {
$session = $_SESSION['valid_admin'];    

    $query = "INSERT INTO skills ( skillname, skilldesc, skillcat, skilltags) " .

" VALUES ('$skillnameval', '$skilldescval', '$skillcatval', '$skilltags')";


    $result = mysqli_query($mysqli, $query);;


    if ($result)
    {

     ?>

     <script>
  console.log("working adding");  
    window.location.reload('skill-section.php');
</script>

<?php


    } else{


       echo "<h2>Sorry, there was a problem posting this skill</h2>\n";


}
}
}

?>

