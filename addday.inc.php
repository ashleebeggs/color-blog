<?php

date_default_timezone_set('America/Los_Angeles');

$script_tz = date_default_timezone_get();

if (strcmp($script_tz, ini_get('date.timezone'))){
    echo 'Script timezone differs from ini-set timezone.';
} else {
    echo 'Script timezone and ini-set timezone match.';
}

$colorhex = $_POST['colorhex'];


$shortdesc = htmlspecialchars($_POST['shortdesc']);

$colordate = date('l F jS Y');

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

$con = mysql_connect("localhost", "root", "") or die('Sorry, could not connect to database server');  
    mysql_select_db("moods", $con) or die('Could not connect to database');
    
$session = $_SESSION['valid_color_user'];    
$username = "$session";

    $query = "INSERT INTO color ( colorhex, shortdesc, colordate, colortext, trackSI, trackSH, trackSD, trackISO, trackANX, trackSAD, trackANG, trackGSH, trackHH, trackINS, trackLON, trackJOY, trackSC, trackNW, trackNB, trackRUM, trackPOW, trackRT, trackOB, username, skillSI, skillSH, skillSD, skillISO, skillANX, skillSAD, skillANG, skillGSH, skillHH, skillINS, skillLON, skillJOY, skillSC, skillNW, skillNB, skillRUM, skillPOW, skillRT, skillOB) " .

" VALUES ('$colorhex', '$shortdesc', '$colordate',  '$colortext', '$trackSI', '$trackSH', '$trackSD', '$trackISO', '$trackANX', '$trackSAD', '$trackANG', '$trackGSH', '$trackHH', '$trackINS', '$trackLON', '$trackJOY', '$trackSC', '$trackNW', '$trackNB', '$trackRUM', '$trackPOW', '$trackRT', '$trackOB', '$username', '$skillSI', '$skillSH', '$skillSD', '$skillISO', '$skillANX', '$skillSAD', '$skillANG', '$skillGSH', '$skillHH', '$skillINS', '$skillLON', '$skillJOY', '$skillSC', '$skillNW', '$skillNB', '$skillRUM', '$skillPOW', '$skillRT', '$skillOB')";


    $result = mysql_query($query) or die('Sorry, we could not post your day to the database at this time');


    if ($result)


      header("Location: color-blog.php"); // redirects



    else


       echo "<h2>Sorry, there was a problem posting this day</h2>\n";


}


?>

