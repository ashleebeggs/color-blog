<div id="skillmain">
    <div id="skillmaincontent">
<?php


    $userid = $_SESSION['valid_admin'];
    

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
  <div class="skill modals" id="myModals">
    <div class="skillcontent" >
        <div class="catlabel" style="display:none;"><?php echo "$skillcat"?></div>
  <?php if ($skillcat == "Interpersonal effectivness"){?>
       
        <div class="ip-singleskill">
           <div class="skillcopy">
                <div class="skillnames"><?php echo "$skillname"?></div>
                <div class="skilldesc"><?php echo "$skilldesc"?></div>
               </div>
        </div>
<?php }?><!--ip cat--> 
        <?php if ($skillcat == "Distress tolerance"){?>
       
        <div class="dt-singleskill">
            <div class="skillcopy">
                <div class="skillnames"><?php echo "$skillname"?></div>
                <div class="skilldesc"><?php echo "$skilldesc"?></div>
                </div>
        </div>
<?php }?>
    </div><!--content-->

  </div><!-- day-->

        <?php

} //<!--while loop-->
            ?>
        
 
</div><!--skillmain-->
    </div>

<script>
          
        $('.modals').on('click', function () {
            var thisname = document.getElementsByClassName('skillnames');
            var thisdata = $(this).find(thisname);
            var thisdesc = document.getElementsByClassName('skilldesc');
            var thisdescdata = $(this).find(thisdesc);
            
            var thiscat = document.getElementsByClassName('catlabel');
            var thiscatdata = $(this).find(thiscat);
            var modcat = $.trim($(thiscatdata).text());
            
            console.log(modcat);
            if (modcat == 'Interpersonal effectivness'){
                $(".modal-header").css('background-color', '#1C9FDB');
                
            }
            else if (modcat == 'Distress tolerance'){
                $(".modal-header").css('background-color', '#FF6165');
            }else{
                console.log("not it");
            }
             var modtitle = $(thisdata).text();
            var moddesc = $(thisdescdata).text();
                
            $( ".modal-title" ).text( modtitle );
             $( ".modal-body" ).text( moddesc );
          
            $('#myModal').modal('show');
            console.log("showing");
           
            
    })
            
    </script>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="overflow:hidden;">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
         <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body">
        ...
      </div>
    </div>
  </div>
</div> 
    