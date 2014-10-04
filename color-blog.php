<?php
 session_start();
  

?>



<!doctype html>
<html>
<head>
<meta charset="UTF-8">
    <!-- Responsive and mobile friendly stuff -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Huuue</title>
   <link rel="stylesheet" type="text/css" href="MyFontsWebfontsKit.css">
    
 <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.13.2/TweenMax.min.js"></script>  
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <script src="jquery.nouislider.full.min.js"></script>
      <link rel="stylesheet" href="jquery.nouislider.css">
    
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
<div id="content">

<div id="nav"  style="z-index:100; top:0; position:fixed">

     <?php 
    include("mylibrary/loginall.php");
   login();
include("nav.inc.php");
   ?>
   
</div>

<div id="main">
 
<?php
    include("getThumb.php");
 

               if (!isset($_REQUEST['content'])){
                   if (!isset($_SESSION['valid_color_user']))
                      include("join.php");
                   else
                      include("main.inc.php");
               }
               else

               {

                   $content = $_REQUEST['content'];

                   $nextpage = $content . ".inc.php";

                   include($nextpage);

               }

              ?>
    
    
    
</div>
    
<script>
    
    var screenwidth = $(window).width();
    console.log("running");
    
   var label = document.getElementsByClassName('labels');
    var skilllabel = document.getElementsByClassName('skilllabels');
  
    var elems = document.getElementsByClassName('day');
    var days = document.getElementsByClassName('dow');
    var descriptions = document.getElementsByClassName('desc');
 var bars = document.getElementsByClassName('bars');
    var bar = document.getElementsByClassName('bar');
    var dot = document.getElementsByClassName('dot');
    var sliderstep = document.getElementsByClassName('slider-step');
 
    var currwidth = $('.day').width();
    var currheight = $('.day').height();

    TweenLite.defaultEase = Power1.easeInOut;
 var daywidth = new TimelineMax({paused:true});

function myday() {
    
     
daywidth.play();
     checkwidth();
    if (currwidth > 321 && currwidth < 641){
        TweenLite.to(elems, .5, {width:"100%", ease:Power2.easeOut}, 0.5);
            TweenLite.to(descriptions, .5, {opacity:1, ease:Power2.easeOut});
            TweenLite.to(dot, .5, {opacity:1, ease:Power2.easeOut});
        TweenLite.to(elems, 1, {display:"block", ease:Power2.easeOut});
        TweenLite.to(bars, 1,  {left:"4%"});
            TweenLite.to(days, 1,  {left:"4%"});
         $(days).css('font-size', '20px');
     }else if (currwidth > 640 && currwidth < 769){
         TweenLite.to(elems, .5, {width:"100%", ease:Power2.easeOut}, 0.5);
            TweenLite.to(descriptions, .5, {opacity:1, ease:Power2.easeOut});
            TweenLite.to(dot, .5, {opacity:1, ease:Power2.easeOut});
        TweenLite.to(elems, 1, {display:"block", ease:Power2.easeOut});
        TweenLite.to(bars, 1,  {left:"4%"});
            TweenLite.to(days, 1,  {left:"4%"});
         $(days).css('font-size', '26px');
     }else if (currwidth > 768){
         TweenLite.to(elems, .5, {width:"100%", ease:Power2.easeOut}, 0.5);
            TweenLite.to(descriptions, .5, {opacity:1, ease:Power2.easeOut});
            TweenLite.to(dot, .5, {opacity:1, ease:Power2.easeOut});
        TweenLite.to(elems, 1, {display:"block", ease:Power2.easeOut});
        TweenLite.to(bars, 1,  {left:"4%"});
            TweenLite.to(days, 1,  {left:"4%"});
         $(days).css('font-size', '30px');
     }else{
      TweenLite.to(elems, .5, {width:"100%", ease:Power2.easeOut}, 0.5);
            TweenLite.to(descriptions, .5, {opacity:1, ease:Power2.easeOut});
            TweenLite.to(dot, .5, {opacity:1, ease:Power2.easeOut});
        TweenLite.to(elems, 1, {display:"block", ease:Power2.easeOut});
        TweenLite.to(bars, 1,  {left:"4%"});
            TweenLite.to(days, 1,  {left:"4%"});
         $(days).css('font-size', '16px');   
     }
   
}
        

    
function myweek() { 
    checkwidth();

     daywidth.play();
    if (currwidth > 321 && currwidth < 641){
        daywidth.staggerTo(elems, 1, {width:"33.3%", ease:Power2.easeOut}, 0.2);
        TweenLite.to(descriptions, .5, {opacity:0, ease:Power2.easeOut});
            TweenLite.to(dot, .5, {opacity:0, ease:Power2.easeOut});
        TweenLite.to(elems, 1, {display:"inline-table", ease:Power2.easeOut});
        TweenLite.to(bars, 1,  {left:"0%"});
        TweenLite.to(days, 1,  {left:"5%"});
            TweenLite.to(elems, 1,  {marginLeft:"-4px"});
         $(days).css('font-size', '14px');    
    }else if (currwidth > 640 && currwidth < 769){
        daywidth.staggerTo(elems, 1, {width:"25%", ease:Power2.easeOut}, 0.2);
        TweenLite.to(descriptions, .5, {opacity:0, ease:Power2.easeOut});
            TweenLite.to(dot, .5, {opacity:0, ease:Power2.easeOut});
        TweenLite.to(elems, 1, {display:"inline-table", ease:Power2.easeOut});
        TweenLite.to(bars, 1,  {left:"0%"});
        TweenLite.to(days, 1,  {left:"5%"});
            TweenLite.to(elems, 1,  {marginLeft:"-4px"});
         $(days).css('font-size', '18px');
    }
    else if (currwidth > 768){
        daywidth.staggerTo(elems, 1, {width:"14.28%", ease:Power2.easeOut}, 0.2);
        TweenLite.to(descriptions, .5, {opacity:0, ease:Power2.easeOut});
            TweenLite.to(dot, .5, {opacity:0, ease:Power2.easeOut});
        TweenLite.to(elems, 1, {display:"inline-table", ease:Power2.easeOut});
        TweenLite.to(bars, 1,  {left:"0%"});
        TweenLite.to(days, 1,  {left:"5%"});
            TweenLite.to(elems, 1,  {marginLeft:"-4px"});
         $(days).css('font-size', '18px');    
    }else{
         daywidth.staggerTo(elems, 1, {width:"50%", ease:Power2.easeOut}, 0.2);
        TweenLite.to(descriptions, .5, {opacity:0, ease:Power2.easeOut});
            TweenLite.to(dot, .5, {opacity:0, ease:Power2.easeOut});
        TweenLite.to(elems, 1, {display:"inline-table", ease:Power2.easeOut});
        TweenLite.to(bars, 1,  {left:"0%"});
        TweenLite.to(days, 1,  {left:"5%"});
            TweenLite.to(elems, 1,  {marginLeft:"-4px"});
         $(days).css('font-size', '14px');    
    }
  
}


    
    
    function mymonth() {
    daywidth.play();
daywidth.staggerTo(elems, 1, {width:"14.28%", ease:Power2.easeOut}, 0.2);
TweenLite.to(descriptions, .5, {opacity:0, ease:Power2.easeOut});
    TweenLite.to(dot, .5, {opacity:0, ease:Power2.easeOut});
TweenLite.to(elems, 1, {display:"inline-table", ease:Power2.easeOut});
TweenLite.to(bars, 1,  {left:"0%", height:"150px"});
TweenLite.to(days, 1,  {opacity:0, ease:Power2.easeOut});
    TweenLite.to(elems, 1,  {marginLeft:"-4px", height:"150px" });
 $(days).css('font-size', '18px');   
    }   
    
    
    
    
    
 $('.animate').on('click', function () {
     if (screenwidth >= 321 && screenwidth <= 767){
  $(this).find(bar).animate({
    height: "25px",
  },200 );
     $(this).find(label).animate({
    opacity:1,
  },200 );    
     }
     else{
         $(this).find(bar).animate({
    height: "25px",
  },200 );
     $(this).find(dot).animate({
        right:"10%", 
     }, 200 );
     $(this).find(label).animate({
    opacity:1,
  },200 );
      $(this).find(skilllabel).animate({
    opacity:1,
  },200 );
     }
     
}).on('mouseout', function () {
      if ( screenwidth >= 321 && screenwidth <= 767){
   $(this).find(bar).animate({
    height: "8px",
  },200 );
     $(this).find(label).animate({
    opacity:0,
  },200 );
      }
     else if (screenwidth < 321){
       $(this).find(bar).animate({
    height: "8px",
  },200 );
     $(this).find(label).animate({
    opacity:0,
  },200 );    
         
     }
     else{
         $(this).find(bar).animate({
    height: "8px",
  },200 );
     $(this).find(dot).animate({
        right:"2%", 
     }, 200 );
     $(this).find(label).animate({
    opacity:0,
  },200 );
      $(this).find(skilllabel).animate({
    opacity:0,
  },200 );
     }
})
 
 

 

    

function trackbars() {
    console.log(currwidth);
    
   
     }
    
 
    
    function checkwidth(){
var prevWidth = $('.day').width(); 
        var prevHeight = $('.day').height(); 
  currwidth = prevWidth;
        currheight = prevHeight;
        console.log(currwidth, currheight);
}
   
        
        
    </script>

</body>
</html>
<!--<?php


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
        <div class="catlabel element-item"><p class="incat name"><?php echo "$skillcat"?></p></div>
  <?php if ($skillcat == "Interpersonal effectivness"){?>
       
        <div class="ip-singleskill">
           <div class="skillcopy">
                <div class="skillnames"><?php echo "$skillname"?></div>
                <div class="skilldesc"><?php echo "$skilldesc"?></div>
               </div>
        </div>
<?php }?>
        <?php if ($skillcat == "Distress tolerance"){?>
       
        <div class="dt-singleskill">
            <div class="skillcopy">
                <div class="skillnames"><?php echo "$skillname"?></div>
                <div class="skilldesc"><?php echo "$skilldesc"?></div>
                </div>
        </div>
<?php }?>
    </div>

  </div>
        <?php
} 
            ?>-->