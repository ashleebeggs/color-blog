<?php


$con = mysql_connect("localhost", "root", "") or die('Sorry, could not connect to database server');


mysql_select_db("moods", $con) or die('Sorry, could not connect to database');


$query = "SELECT colorid, colordate, shortdesc, colorhex from color order by colorid desc";


$result = mysql_query($query) or die('Sorry, could not get recipes at this time ');

$lastWeek = date("Y-m-d", strtotime("-7 days"));
$today = date("Y-m-d");

if (mysql_num_rows($result) == 0)


{


   echo "<h3>Sorry, there are no recipes posted at this time, please try back later.</h3>";


} else


{


   while($row=mysql_fetch_array($result, MYSQL_ASSOC))


   {


       $colorid = $row['colorid'];


       $colordate = $row['colordate'];


       $shortdesc = $row['shortdesc'];
       
       $colorhex = $row['colorhex'];

                echo"$colordate<br><br>\n";
        
    
   }


}


?>