<?php

if (!isset($_SESSION['valid_color_user']))


{
    include("login.inc.php");

} else


{
    

    $userid = $_SESSION['valid_color_user'];
    
?>


<script>
console.log("logged in");
</script>

<?php


$con = mysql_connect("localhost", "root", "") or die('Sorry, could not connect to database server');  

    
mysql_select_db("moods", $con) or die('Sorry, could not connect to database');
    
    

$query = "SELECT userid from users where userid = '$userid'";


$result = mysql_query($query);


$row = mysql_fetch_array($result, MYSQL_ASSOC);


if ($row['userid'] == $userid)


{

$query = "SELECT count(colorid) from color where username = '$userid'";


$result = mysql_query($query);


$row=mysql_fetch_array($result);

if ($row[0] == 0)


{

   echo "No days posted yet.&nbsp;&nbsp;\n";

}else{

$totrecords = $row[0];


if (!isset($_GET['page']))


      $thispage = 1;


   else
   

      $thispage = $_GET['page'];


   $recordsperpage = 31;


   $offset = ($thispage - 1) * $recordsperpage;
$totpages = ceil($totrecords / $recordsperpage);
    
    
 $user = "$userid";   
    
  $query = "SELECT colorid, colordate, shortdesc, colorhex, colortext, trackSI, trackSH, trackSD, trackISO, trackANX, trackSAD, trackANG, trackGSH, trackHH, trackINS, trackISO, trackLON, trackJOY, trackSC, trackNW, trackNB, trackRUM, trackPOW, trackRT, trackOB, skillSI, skillSH, skillSD, skillISO, skillANX, skillSAD, skillANG, skillGSH, skillHH, skillINS, skillLON, skillJOY, skillSC, skillNW, skillNB, skillRUM, skillPOW, skillRT, skillOB from color where username = '$user' order by colorid desc limit $offset, $recordsperpage";

   $result = mysql_query($query) or die('Could not retrieve comments: ' . mysql_error());

 while($row = mysql_fetch_array($result, MYSQL_ASSOC))


   {


      $colorid = $row['colorid'];
      $colordate = $row['colordate'];
      $shortdesc = $row['shortdesc'];
       $colorhex = $row['colorhex'];
      $colortext = $row['colortext'];
       $trackSI = $row['trackSI'];
       $trackSH = $row['trackSH'];
       $trackSD = $row['trackSD'];
       $trackISO = $row['trackISO'];
       $trackANX = $row['trackANX'];
       $trackSAD = $row['trackSAD'];
       $trackANG = $row['trackANG'];
       $trackGSH = $row['trackGSH'];
       $trackHH = $row['trackHH'];
       $trackINS = $row['trackINS'];
       $trackLON = $row['trackLON'];
       $trackJOY = $row['trackJOY'];
       $trackSC = $row['trackSC'];
       $trackNW = $row['trackNW'];
       $trackNB = $row['trackNB'];
       $trackRUM = $row['trackRUM'];
       $trackPOW = $row['trackPOW'];
       $trackRT = $row['trackRT'];
       $trackOB = $row['trackOB'];
     
       $skillSI = $row['skillSI'];
       $skillSH = $row['skillSH'];
     $skillSD = $row['skillSD'];
     $skillISO = $row['skillISO'];
     $skillANX = $row['skillANX'];
     $skillSAD = $row['skillSAD'];
     $skillANG = $row['skillANG'];
     $skillGSH = $row['skillGSH'];
     $skillHH = $row['skillHH'];
     $skillINS = $row['skillINS'];
       $skillLON = $row['skillLON'];
     $skillJOY = $row['skillJOY'];
     $skillSC = $row['skillSC'];
     $skillNW = $row['skillNW'];
     $skillNB = $row['skillNB'];
     $skillRUM = $row['skillRUM'];
     $skillPOW = $row['skillPOW'];
     $skillRT = $row['skillRT'];
     $skillOB = $row['skillOB'];
?>



     
<div class="day" style="color: <?php echo $colortext ?>; background-color: <?php echo $colorhex ?>; position: relative">
<div class="content">
<div class="bars">
  <ul>
<div class="containter animate">
    <div class="trackSI bar" style="width: <?php echo $trackSI ?>0%;">
            <div class="labels">SI</div>
        
    </div> 
        <?php if ($skillSI != ""){ ?>
                <div class="dot" title= "<?php echo $skillSI ?>"><div class="skilllabels"><?php echo $skillSI ?></div></div>
        <?php
         }
            else { } 
    ?>
      </div>
  <div class="containter animate">   
        <div  class="trackSH bar" style="width: <?php echo $trackSH ?>0%;">
            <div class="labels">SH</div></div>
       <?php if ($skillSH != ""){ ?>
                <div class="dot" title= "<?php echo $skillSH ?>"><div class="skilllabels"><?php echo $skillSH ?></div></div>
        <?php
         }
     else { } 
    ?>
      </div>
      
<div class="containter animate">      
    <div  class="trackSD bar" style="width: <?php echo $trackSD ?>0%;">
            <div class="labels">Self Destruction</div></div>
       <?php if ($skillSD != ""){ ?>
                <div class="dot" title= "<?php echo $skillSD ?>"><div class="skilllabels"><?php echo $skillSD ?></div></div>
        <?php
         }
     else { } 
    ?>
    </div>
      
<div class="containter animate">
    <div class="trackISO bar" style="width: <?php echo $trackISO ?>0%;">
        <div class="labels">Isolation</div></div>
       <?php if ($skillISO != ""){ ?>
                <div class="dot" title= "<?php echo $skillISO ?>"><div class="skilllabels"><?php echo $skillISO ?></div></div>
        <?php
         }
     else { } 
    ?>
    </div>
      
<div class="containter animate">
    <div  class="trackANX bar" style="width: <?php echo $trackANX ?>0%;">
        <div class="labels">Fear/Anxiety</div></div>
       <?php if ($skillANX != ""){ ?>
                <div class="dot" title= "<?php echo $skillANX ?>"><div class="skilllabels"><?php echo $skillANX ?></div></div>
    <?php
         }
     else { } 
    ?>
    </div>
      
<div class="containter animate">      
    <div class="trackSAD bar" style="width: <?php echo $trackSAD ?>0%;">
        <div class="labels">Sadness</div></div>
       <?php if ($skillSAD != ""){ ?>
                <div class="dot" title= "<?php echo $skillSAD ?>"><div class="skilllabels"><?php echo $skillSAD ?></div></div>
        <?php
         }
     else { } 
    ?>
    </div>
      
<div class="containter animate">      
    <div  class="trackANG bar" style="width: <?php echo $trackANG ?>0%;">
        <div class="labels">Anger</div></div>
       <?php if ($skillANG != ""){ ?>
                <div class="dot" title= "<?php echo $skillANG ?>"><div class="skilllabels"><?php echo $skillANG ?></div></div>
        <?php
         }
     else { } 
    ?>
    </div>
      
<div class="containter animate">      
    <div class="trackGSH bar" style="width: <?php echo $trackGSH ?>0%;">
        <div class="labels">Guilt/Shame</div></div>
       <?php if ($skillGSH != ""){ ?>
                <div class="dot" title= "<?php echo $skillGSH ?>"><div class="skilllabels"><?php echo $skillGSH ?></div></div>
    <?php
         }
     else { } 
    ?>
    </div>
      
<div class="containter animate">      
    <div class="trackHH bar" style="width: <?php echo $trackHH ?>0%;">
        <div class="labels">Hopeless/Helpless</div></div>
       <?php if ($skillHH != ""){ ?>
                <div class="dot" title= "<?php echo $skillHH ?>"><div class="skilllabels"><?php echo $skillHH ?></div></div>
        <?php
         }
     else { } 
    ?>
    </div>
      
<div class="containter animate">      
    <div  class="trackINS bar" style="width: <?php echo $trackINS ?>0%;">
        <div class="labels">Insecure</div></div>
      <?php if ($skillINS != ""){ ?>
                <div class="dot" title= "<?php echo $skillINS ?>"><div class="skilllabels"><?php echo $skillINS ?></div></div>
        <?php
         }
     else { } 
    ?>
    </div>
      
<div class="containter animate">      
    <div class="trackLON bar" style="width: <?php echo $trackLON ?>0%;">
        <div class="labels">Lonely</div></div>
      <?php if ($skillLON != ""){ ?>
                <div class="dot" title= "<?php echo $skillLON ?>"><div class="skilllabels"><?php echo $skillLON ?></div></div>
        <?php
         }
     else { } 
    ?>
    </div>
      
<div class="containter animate">      
    <div  class="trackJOY bar" style="width: <?php echo $trackJOY ?>0%;">
        <div class="labels">Joyful</div></div>
      <?php if ($skillJOY != ""){ ?>
                <div class="dot" title= "<?php echo $skillJOY ?>"><div class="skilllabels"><?php echo $skillJOY ?></div></div>
        <?php
         }
     else { } 
    ?>
    </div>
      
<div class="containter animate">      
    <div class="trackSC bar" style="width: <?php echo $trackSC ?>0%;">
        <div class="labels">Self Critical</div></div>
      <?php if ($skillSC != ""){ ?>
                <div class="dot" title= "<?php echo $skillSC ?>"><div class="skilllabels"><?php echo $skillSC ?></div></div>
        <?php
         }
     else { } 
    ?>
    </div>
      
<div class="containter animate">      
    <div  class="trackNW bar" style="width: <?php echo $trackNW ?>0%;">
        <div class="labels">Not Worthy</div></div>
      <?php if ($skillNW != ""){ ?>
                <div class="dot" title= "<?php echo $skillNW ?>"><div class="skilllabels"><?php echo $skillNW ?></div></div>
        <?php
         }
     else { } 
    ?>
    </div>
      
<div class="containter animate">      
    <div class="trackNB bar" style="width: <?php echo $trackNB ?>0%;">
        <div class="labels">Negative Beliefs</div></div>
      <?php if ($skillNB != ""){ ?>
                <div class="dot" title= "<?php echo $skillNB ?>"><div class="skilllabels"><?php echo $skillNB ?></div></div>
        <?php
         }
     else { } 
    ?>
    </div>
      
<div class="containter animate">      
    <div  class="trackRUM bar" style="width: <?php echo $trackRUM ?>0%;">
        <div class="labels">Ruminating</div></div>
      <?php if ($skillRUM != ""){ ?>
                <div class="dot" title= "<?php echo $skillRUM ?>"><div class="skilllabels"><?php echo $skillRUM ?></div></div>
        <?php
         }
     else { } 
    ?>
    </div>
      
<div class="containter animate">      
    <div class="trackPOW bar" style="width: <?php echo $trackPOW ?>0%;">
        <div class="labels">Powerless</div></div>
      <?php if ($skillPOW != ""){ ?>
                <div class="dot" title= "<?php echo $skillPOW ?>"><div class="skilllabels"><?php echo $skillPOW ?></div></div>
        <?php
         }
     else { } 
    ?>
    </div>
      
<div class="containter animate">      
    <div  class="trackRT bar" style="width: <?php echo $trackRT ?>0%;">
        <div class="labels">Racing Thoughts</div></div>
      <?php if ($skillRT != ""){ ?>
                <div class="dot" title= "<?php echo $skillRT ?>"><div class="skilllabels"><?php echo $skillRT ?></div></div>
        <?php
         }
     else { } 
    ?>
    </div>
      
<div class="containter animate">      
    <div  class="trackOB bar" style="width: <?php echo $trackOB ?>0%;">
        <div class="labels">Obsessions</div></div>
      <?php if ($skillOB != ""){ ?>
                <div class="dot" title= "<?php echo $skillOB ?>"><div class="skilllabels"><?php echo $skillOB ?></div></div>
        <?php
         }
     else { } 
    ?>
    </div>
</div>

  
    
    <div class="dow" style="color: <?php echo $colortext ?>;">
        <?php
       echo "$colordate</a><br>\n";
    
    ?>
        </div>

       <div class = "desc" style="color: <?php echo $colortext ?>;">
           <?php 
                echo"$shortdesc<br><br>\n";
   
            ?>
       </div>
    
    </div>

    </div>

<?php

   }
}

?>
<div id="paging">
<?php
   if ($thispage > 1)


   {


      $page = $thispage - 1;


      $prevpage = "<a href=\"color-blog.php?page=$page\">Prev</a>";


   } else


   {


      $prevpage = "";


   }


  $bar = '';


   if ($totpages > 1)


   { 


      for($page = 1; $page <= $totpages; $page++)


      {


         if ($page == $thispage)      


         {


            $bar .= " $page ";


         } else


         {


            $bar .= " <a href=\"color-blog.php?page=$page\">$page</a> ";


         }


      }


   }


   if ($thispage < $totpages)


   {


      $page = $thispage + 1;


      $nextpage = " <a href=\"color-blog.php?page=$page\">Next</a>";


   } else


   {


      $nextpage = "";


   }


   echo $prevpage . $bar . $nextpage;




}
}
?>
  


</div>
<div class="backdrop"></div>