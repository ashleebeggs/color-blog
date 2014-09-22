<div id="skillmain">
<?php
if (isset($_SESSION['valid_color_user']))
{

     $session = $_SESSION['valid_color_user'];    
    
    $con = mysql_connect("localhost", "root", "") or die('Could not connect to server'.mysql_error());
           
            
        mysql_select_db("moods", $con) or die('Sorry, could not connect to database');
 
          $query = "SELECT skillid, skillname, skilldesc, skillcat from skills order by skillid desc";
        
           $result = mysql_query($query) or die('Could not retrieve comments: ' . mysql_error());

 while($row = mysql_fetch_array($result, MYSQL_ASSOC))
   {
      $skillid = $row['skillid'];
      $skillname = $row['skillname'];
      $skilldesc = $row['skilldesc'];
       $skillcat = $row['skillcat'];
     
     
?> 
  <div class="skill">
    <div class="content row">
  <?php if ($skillcat == "Interpersonal effectivness"){?>
       <div class="catlabel">
        <?php echo $skillcat; ?>
        </div>
        <div class="col-md-6 singleskill">
                <div class="skilllabel"><?php echo "$skillname<br>\n $skilldesc";
                 ?></div>
        </div>
<?php }?> 
        
    </div><!--content-->

  </div><!-- day-->

        <?php

} //<!--while loop-->
            ?>
        <div class="row" id="footer">
          <div class="col-md-12">
         
        
</div>
  </div><!--col 12-->
   <?php }else{
 echo ("you need to log in");   
}?>
    
</div><!--footer-->