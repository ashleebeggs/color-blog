<?php
 session_start();
  

?>
<script>
console.log("session starting");
    
    
</script>




<!doctype html>
<html>
<head>
<meta charset="UTF-8">
    <!-- Responsive and mobile friendly stuff -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>A day in the life with color</title>
    
    
 <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="html5reset.css">
    <link rel="stylesheet" href="css/col.css" media="all">
	<link rel="stylesheet" href="css/2cols.css" media="all">
	<link rel="stylesheet" href="css/3cols.css" media="all">
	<link rel="stylesheet" href="css/4cols.css" media="all">
	<link rel="stylesheet" href="css/5cols.css" media="all">
	<link rel="stylesheet" href="css/6cols.css" media="all">
	<link rel="stylesheet" href="css/7cols.css" media="all">
	<link rel="stylesheet" href="css/8cols.css" media="all">
	<link rel="stylesheet" href="css/9cols.css" media="all">
	<link rel="stylesheet" href="css/10cols.css" media="all">
	<link rel="stylesheet" href="css/11cols.css" media="all">
	<link rel="stylesheet" href="css/12cols.css" media="all">

<link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,300,900' rel='stylesheet' type='text/css'>
    
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="colorwidget.js"></script>
    <script src="responsivegridsystem.js"></script>
    <script src="selectivizr-min.js"></script>
    <script src="modernizr-2.5.3-min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.13.1/TweenMax.min.js"></script>
    
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/smoothness/jquery-ui.css" />
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
</head>

<body>
<div id="content">

<div id="nav"  style="z-index:100; top:0; position:fixed">

     <?php include("nav.inc.php"); ?>
   
</div>

<div id="main">





       <?php

               if (!isset($_REQUEST['content']))

                   include("main.inc.php");
                
               else

               {

                   $content = $_REQUEST['content'];

                   $nextpage = $content . ".inc.php";

                   include($nextpage);

               }

              ?>
    
    
    
</div>
    
<script>
    
    
    console.log("running");
    
   var label = document.getElementsByClassName('labels');
    var skilllabel = document.getElementsByClassName('skilllabels');
  
    var elems = document.getElementsByClassName('day');
    var days = document.getElementsByClassName('dow');
    var descriptions = document.getElementsByClassName('desc');
 var bars = document.getElementsByClassName('bars');
    var bar = document.getElementsByClassName('bar');
    var dot = document.getElementsByClassName('dot');
 
var currwidth = $('.day').width();
    var currheight = $('.day').height();

    TweenLite.defaultEase = Power1.easeInOut;
 var daywidth = new TimelineMax({paused:true});

function myday() {
    
     
daywidth.play();
TweenLite.to(elems, .5, {width:"100%", ease:Power2.easeOut}, 0.5);
    TweenLite.to(descriptions, .5, {opacity:1, ease:Power2.easeOut});
TweenLite.to(elems, 1, {display:"block", ease:Power2.easeOut});
TweenLite.to(bars, 1,  {left:"4%"});
    TweenLite.to(days, 1,  {left:"4%"});
 $(days).css('font-size', '30px');
        
    checkwidth();
}
        

    
function myweek() { 
    
     daywidth.play();
daywidth.staggerTo(elems, 1, {width:"14.28%", ease:Power2.easeOut}, 0.2);
TweenLite.to(descriptions, .5, {opacity:0, ease:Power2.easeOut});
TweenLite.to(elems, 1, {display:"inline-table", ease:Power2.easeOut});
TweenLite.to(bars, 1,  {left:"10%"});
TweenLite.to(days, 1,  {left:"10%"});
    TweenLite.to(elems, 1,  {marginLeft:"-4px"});
 $(days).css('font-size', '18px');    
    
  
}


    
    
    function mymonth() {
   
    }   
    
 $('.animate').on('click', function () {
  $(this).find(bar).animate({
    height: "25px",
  },200 );
     $(this).find(dot).animate({
        margin:"-18px 0 0 95%", 
     }, 200 );
     $(this).find(label).animate({
    opacity:1,
  },200 );
      $(this).find(skilllabel).animate({
    opacity:1,
  },200 );
}).on('mouseout', function () {
   $(this).find(bar).animate({
    height: "8px",
  },200 );
     $(this).find(dot).animate({
        margin:"-18px 0 0 100%", 
     }, 200 );
     $(this).find(label).animate({
    opacity:0,
  },200 );
      $(this).find(skilllabel).animate({
    opacity:0,
  },200 );
})
 
 
 

    

function trackbars() {
    console.log(currwidth);
    
   
     }



$('#slider-input').change( function() {
    var val = $(this).val();
    var valRounded = Math.round( val * 10 ) / 10;
    var mid = $(this).attr('max')/2;
   
});
    
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
