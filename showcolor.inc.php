<?php



$con = mysql_connect("localhost", "root", "") or die('Sorry, could not connect to database server');
  


mysql_select_db("moods", $con) or die('Sorry, could not connect to database');


$colorid = $_GET['id'];
/*$colorcontainer = $_GET('colorhex'); 
 post_class($colorcontainer);*/

$query = "SELECT shortdesc, colordate, colorhex from color where colorid = $colorid";


$result = mysql_query($query) or die('Sorry, could not find recipe requested');


$row = mysql_fetch_array($result, MYSQL_ASSOC) or die('No records retrieved');




$shortdesc = $row['shortdesc'];


$colordate = $row['colordate'];


$colorhex = $row['colorhex'];


$shortdesc = nl2br($shortdesc);

?>

<div class="day" style="width:100%; background-color: <?php echo $colorhex ?>">
    <?php

echo "$shortdesc<br><br>\n";


echo "$colordate<br><br>\n";



echo "$colorhex";


echo "<br><br>\n";
?>
    </div>



