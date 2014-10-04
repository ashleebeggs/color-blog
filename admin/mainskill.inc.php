<div id="skillmain">
    <div id="hero">
  <div class="primary-content">
    <div class="demo">
         
      <div class="ui-group">
        <div class="sort-by button-group js-radio-button-group">
          <button class="button is-checked" data-sort-by="original-order">original order</button>
          <button class="button" data-sort-by="name">Category</button>
        <button class="button" data-sort-by="symbol">Alphabetical</button>
        </div>
      </div>

            <div id="skillmaincontent">
                <div class="isotope">
    
<?php


    $userid = $_SESSION['valid_admin'];
    

        $mysqli = mysqli_connect("huuuecom.ipowermysql.com", "ashleebeggs", "ayso13", "moods");
                if (mysqli_connect_errno($mysqli)) {
    echo "Failed to connect to database: " . mysqli_connect_error();
                }

           $res = mysqli_query($mysqli, "SELECT skillid, skillname, skilldesc, skillcat from skills order by skillid desc");
        
  while($row = mysqli_fetch_assoc($res))
   {
      $skillid = $row['skillid'];
      $skillname = $row['skillname'];
      $skilldesc = $row['skilldesc'];
       $skillcat = $row['skillcat'];   
?> 
  <div class="skill modals element-item" id="myModals">
    <div class="skillcontent" >
        <div style="display:none;">
            <h3 class="name catlabel"><?php echo "$skillcat"?></h3>
        </div>
  <?php if ($skillcat == "Interpersonal effectivness"){?>
       
        <div class="ip-singleskill">
           <div class="skillcopy">
                <div class="skillnames"><div class="symbol"><?php echo "$skillname"?></div></div>
                <div class="skilldesc"><?php echo "$skilldesc" ?></div>
               </div>
        </div>
<?php }?><!--ip cat--> 
        <?php if ($skillcat == "Distress tolerance"){?>
       
        <div class="dt-singleskill">
            <div class="skillcopy">
                <div class="skillnames symbol"><?php echo "$skillname"?></div>
                <div class="skilldesc"><?php echo nl2br("$skilldesc") ?></div>
                </div>
        </div>
<?php }?>
    </div><!--content-->

  </div><!-- skill-->
        <?php
} //<!--while loop-->
            ?>
</div><!--skillmain-->
    </div>
        </div>
    </div>


<script>
    $(document).ready ( function(){
   sorting(".catlabel");
        console.log("loaded");
});
    var tag = document.getElementsByClassName('catlabel');
          function sorting(tag) {
    var items = $('div.skill').sort(function(a, b) {
        var txt1 = $.trim($( tag, a).text()),
            txt2 = $.trim($(tag, b).text());
        if (txt1 > txt2) return 1;
        else return -1;
    });
    return items;
              console.log(tag);
}
    
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
                $(".modal-header").css('background-color', '#04bab9');
                
            }
            else if (modcat == 'Distress tolerance'){
                $(".modal-header").css('background-color', '#ed4736');
            }else{
                console.log("not it");
            }
             var modtitle = $(thisdata).text();
            var moddesc = $(thisdescdata).text();
                
            $( ".modal-title" ).text( modtitle );
             $( ".modal-body" ).html( moddesc );
          
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
      </div><!--modal header-->
      <div class="modal-body">
        ...
      </div> <!--modal body-->
    </div> <!--modal content-->
  </div><!--modal dialog-->
</div> <!--modal-->

 <!-- DEV MODE - including each .js file -->
  
     <script src="bower_components/classie/classie.js"></script>
  
    <script src="bower_components/eventie/eventie.js"></script>
  
    <script src="bower_components/doc-ready/doc-ready.js"></script>
  
    <script src="bower_components/get-style-property/get-style-property.js"></script>
  
    <script src="bower_components/get-size/get-size.js"></script>
  
    <script src="bower_components/eventEmitter/EventEmitter.js"></script>
  
    <script src="bower_components/imagesloaded/imagesloaded.js"></script>
  
    <script src="bower_components/jquery-bridget/jquery.bridget.js"></script>
  
    <script src="bower_components/matches-selector/matches-selector.js"></script>
  
    <script src="bower_components/outlayer/item.js"></script>
  
    <script src="bower_components/outlayer/outlayer.js"></script>
  
    <script src="bower_components/masonry/masonry.js"></script>
  
    <script src="bower_components/isotope/js/item.js"></script>
  
    <script src="bower_components/isotope/js/layout-mode.js"></script>
  
    <script src="bower_components/isotope/js/isotope.js"></script>
  
    <script src="bower_components/isotope/js/layout-modes/vertical.js"></script>
  
    <script src="bower_components/isotope/js/layout-modes/fit-rows.js"></script>
  
    <script src="bower_components/isotope/js/layout-modes/masonry.js"></script>
  
    <script src="bower_components/isotope-cells-by-column/cells-by-column.js"></script>
  
    <script src="bower_components/isotope-cells-by-row/cells-by-row.js"></script>
  
    <script src="bower_components/isotope-fit-columns/fit-columns.js"></script>
  
    <script src="bower_components/isotope-horizontal/horizontal.js"></script>
  
    <script src="bower_components/isotope-masonry-horizontal/masonry-horizontal.js"></script>
  
    <script src="bower_components/packery/js/rect.js"></script>
  
    <script src="bower_components/packery/js/packer.js"></script>
  
    <script src="bower_components/packery/js/item.js"></script>
  
    <script src="bower_components/packery/js/packery.js"></script>
  
    <script src="bower_components/isotope-packery/packery-mode.js"></script>
  
    <script src="js/vendor/highlight.pack.js"></script>
  
    <script src="js/controller.js"></script>
  
    <script src="js/pages/appendix.js"></script>
  
    <script src="js/pages/events.js"></script>
  
    <script src="js/pages/filtering.js"></script>
  
    <script src="js/pages/index.js"></script>
  
    <script src="js/pages/layout-modes.js"></script>
  
    <script src="js/pages/methods.js"></script>
  
    <script src="js/pages/sorting.js"></script>
  
    <script src="js/pages/vertical.js"></script>
