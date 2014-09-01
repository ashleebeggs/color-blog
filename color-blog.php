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

    <title>A day in the life with color</title>
    
    
 <link rel="stylesheet" type="text/css" href="style.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,300,900' rel='stylesheet' type='text/css'>
   
  <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.13.2/TweenMax.min.js"></script>  
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <script src="jquery.nouislider.full.min.js"></script>
      <link rel="stylesheet" href="jquery.nouislider.css">
    
    <script src="js/bootstrap.min.js"></script>
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
    var num = document.getElementsByClassName('num');
    var sliderstep = document.getElementById('slider-step');
 
var currwidth = $('.day').width();
    var currheight = $('.day').height();

    TweenLite.defaultEase = Power1.easeInOut;
 var daywidth = new TimelineMax({paused:true});

function myday() {
    
     
daywidth.play();
TweenLite.to(elems, .5, {width:"100%", ease:Power2.easeOut}, 0.5);
    TweenLite.to(descriptions, .5, {opacity:1, ease:Power2.easeOut});
    TweenLite.to(dot, .5, {opacity:1, ease:Power2.easeOut});
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
    TweenLite.to(dot, .5, {opacity:0, ease:Power2.easeOut});
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
        right:"10%", 
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
        right:"2%", 
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
    
 /*   function hexFromRGB(r, g, b) {
  var hex = [
    r.toString( 16 ),
    g.toString( 16 ),
    b.toString( 16 )
  ];
  $.each( hex, function( nr, val ) {
    if ( val.length === 1 ) {
      hex[ nr ] = "0" + val;
    }
  });
  return hex.join( "" ).toUpperCase();
}
    
    
 function refreshjoin() {
    TweenMax.to("#jred", 1, {borderRadius:"25px"});
    TweenMax.to("#jgreen", 1, {borderRadius:"25px"});
    TweenMax.to("#jblue", 1, {borderRadius:"25px"});
    TweenMax.to(".ui-slider-handle", .1, {borderRadius:"50%"});
    
  var red = $( "#jred" ).slider( "value" ),
      green = $( "#jgreen" ).slider( "value" ),
      blue = $( "#jblue" ).slider( "value" ),
      hex = hexFromRGB( red, green, blue );
   
  $( "body" ).css( "background-color", "#" + hex );       
 }

$(function() {
  $( "#jred, #jgreen, #jblue" ).slider({
    orientation: "horizontal",
    range: "min",
    min: 50,
    max: 190,
    value: 127,
    slide: refreshjoin,
    change: refreshjoin
  });
  $( "#jred" ).slider( "value", 26 );
  $( "#jgreen" ).slider( "value", 183 );
  $( "#jblue" ).slider( "value", 234 );
});
     
  
$('#slider-input').change( function() {
    var val = $(this).val();
    var valRounded = Math.round( val * 10 ) / 10;
    var mid = $(this).attr('max')/2;
   
});*/
    
    function checkwidth(){
var prevWidth = $('.day').width(); 
        var prevHeight = $('.day').height(); 
  currwidth = prevWidth;
        currheight = prevHeight;
        console.log(currwidth, currheight);
}
    
    function hexFromRGB(r, g, b) {
  var hex = [
    r.toString( 16 ),
    g.toString( 16 ),
    b.toString( 16 )
  ];
  $.each( hex, function( nr, val ) {
    if ( val.length === 1 ) {
      hex[ nr ] = "0" + val;
    }
  });
  return hex.join( "" ).toUpperCase();
        console.log(hex);
}

//alert( rgbToHex(0, 51, 255) ); // #0033ff
    
    function hexFromRGB(r, g, b) {
  var rgb = b | (g << 8) | (r << 16);
        return (0x1000000 | rgb).toString(16).substring(1);
        
        
        console.log(rgb);
}
    
   
function setColor(){
       
    var rr =  $('.sliderr').val(),
    gg =  $('.sliderg').val(),
    bb =  $('.sliderb').val(),
    hex = hexFromRGB( rr, gg, bb );  
    
    
   console.log(hex); 
	// Fill the color box.
	$("#newcont").css({
		backgroundColor: "#" + hex
	});
    
    document.getElementById('coloredvalue').value = hex;
    
}
    
    function setValue(){
        $("#SIval").Link('lower').to($('#trackSI'));
         $("#SHval").Link('lower').to($('#trackSH'));
         $("#SDval").Link('lower').to($('#trackSD'));
         $("#ISOval").Link('lower').to($('#trackISO'));
        $("#ANXval").Link('lower').to($('#trackANX'));
         $("#SADval").Link('lower').to($('#trackSAD'));
         $("#ANGval").Link('lower').to($('#trackANG'));
         $("#GSHval").Link('lower').to($('#trackGSH'));
        $("#HHval").Link('lower').to($('#trackHH'));
         $("#INSval").Link('lower').to($('#trackINS'));
         $("#LONval").Link('lower').to($('#trackLON'));
         $("#JOYval").Link('lower').to($('#trackJOY'));
        $("#SCval").Link('lower').to($('#trackSC'));
         $("#NWval").Link('lower').to($('#trackNW'));
         $("#NBval").Link('lower').to($('#trackNB'));
         $("#RUMval").Link('lower').to($('#trackRUM'));
        $("#POWval").Link('lower').to($('#trackPOW'));
         $("#RTval").Link('lower').to($('#trackRT'));
         $("#OBval").Link('lower').to($('#trackOB'));
    }
            
            
    $.getJSON('nouislider.jquery.json', function(data) {
                
    console.log("working");
        

        
});
    
    $('.sliders').noUiSlider({
	start: 127,
	connect: "lower",
	orientation: "horizontal",
	range: {
		'min': 0,
		'max': 255
	},
	format: wNumb({
		decimals: 0
	})
});

// Bind the color changing function
// to the slide event.
$('.sliders').on('slide', setColor);
        
        $('.slider-step').noUiSlider({
	start: [ 0 ],
    connect: "lower",
	step: 1,
	range: {
		'min': [  0 ],
		'max': [ 10 ]
	}
});
        $('.slider-step').on('slide', setValue);
        
        
    </script>

</body>
</html>
