<?php

date_default_timezone_set('America/Los_Angeles');

$script_tz = date_default_timezone_get();


$colorhex = $_POST['colorhex'];


$shortdesc = htmlspecialchars($_POST['shortdesc']);

$colordate = date('l M jS Y');

$colortext = $_POST['colortext']; 
$trackSI = $_POST['trackSI'];
$trackSH = $_POST['trackSH'];
$trackSD = $_POST['trackSD'];
$trackISO = $_POST['trackISO'];
$trackANX = $_POST['trackANX'];
$trackSAD = $_POST['trackSAD'];
$trackANG = $_POST['trackANG'];
$trackGSH = $_POST['trackGSH'];
$trackHH = $_POST['trackHH'];
$trackINS = $_POST['trackINS'];
$trackLON = $_POST['trackLON'];
$trackJOY = $_POST['trackJOY'];
$trackSC = $_POST['trackSC'];
$trackNW = $_POST['trackNW'];
$trackNB = $_POST['trackNB'];
$trackRUM = $_POST['trackRUM'];
$trackPOW = $_POST['trackPOW'];
$trackRT = $_POST['trackRT'];
$trackOB = $_POST['trackOB'];

$skillSI = $_POST['skillSI'];
$skillSH = $_POST['skillSH'];
$skillSD = $_POST['skillSD'];
$skillISO = $_POST['skillISO'];
$skillANX = $_POST['skillANX'];
$skillANG = $_POST['skillANG'];
$skillSAD = $_POST['skillSAD'];
$skillGSH = $_POST['skillGSH'];
$skillHH = $_POST['skillHH'];
$skillINS = $_POST['skillINS'];
$skillLON = $_POST['skillLON'];
$skillJOY = $_POST['skillJOY'];
$skillSC = $_POST['skillSC'];
$skillNW = $_POST['skillNW'];
$skillNB = $_POST['skillNB'];
$skillRUM = $_POST['skillRUM'];
$skillPOW = $_POST['skillPOW'];
$skillRT = $_POST['skillRT'];
$skillOB = $_POST['skillOB'];
if (trim($colorhex) == "")


{


    echo "<h2>Sorry, each day must have a color</h2>\n";


}else


{

if (get_magic_quotes_gpc())
   {
      $shortdesc = stripslashes($shortdesc);
   }
$shortdescval = mysql_real_escape_string($shortdesc);
    
 if (isset($_SESSION['valid_color_user']))
   {
$session = $_SESSION['valid_color_user'];    
$username = "$session";

    $query = "INSERT INTO color ( colorhex, shortdesc, colordate, colortext, trackSI, trackSH, trackSD, trackISO, trackANX, trackSAD, trackANG, trackGSH, trackHH, trackINS, trackLON, trackJOY, trackSC, trackNW, trackNB, trackRUM, trackPOW, trackRT, trackOB, username, skillSI, skillSH, skillSD, skillISO, skillANX, skillSAD, skillANG, skillGSH, skillHH, skillINS, skillLON, skillJOY, skillSC, skillNW, skillNB, skillRUM, skillPOW, skillRT, skillOB) " .

" VALUES ('$colorhex', '$shortdescval', '$colordate',  '$colortext', '$trackSI', '$trackSH', '$trackSD', '$trackISO', '$trackANX', '$trackSAD', '$trackANG', '$trackGSH', '$trackHH', '$trackINS', '$trackLON', '$trackJOY', '$trackSC', '$trackNW', '$trackNB', '$trackRUM', '$trackPOW', '$trackRT', '$trackOB', '$username', '$skillSI', '$skillSH', '$skillSD', '$skillISO', '$skillANX', '$skillSAD', '$skillANG', '$skillGSH', '$skillHH', '$skillINS', '$skillLON', '$skillJOY', '$skillSC', '$skillNW', '$skillNB', '$skillRUM', '$skillPOW', '$skillRT', '$skillOB')";


    $result = mysql_query($query) or die('Sorry, we could not post your day to the database at this time');


    if ($result)
    {

     ?>

     <script>
  console.log("working adding");  
    window.location.reload('color-blog');
</script>

<?php


    } else{


       echo "<h2>Sorry, there was a problem posting this day</h2>\n";


}
}
}

?>

