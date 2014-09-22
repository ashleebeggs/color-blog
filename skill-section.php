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
   <script type="text/javascript" src="//use.typekit.net/nvl5jzc.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    
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
    include("adminnav.inc.php");
   ?>
   
</div>

<div id="main">
 
<?php
    include("getThumb.php");
 

               if (!isset($_REQUEST['content'])){
                   if (!isset($_SESSION['valid_admin']))
                      include("skilllog.inc.php");
                   else
                      include("skill.php");
                  
               }
               else

               {

                   $content = $_REQUEST['content'];

                   $nextpage = $content . ".inc.php";

                   include($nextpage);

               }

              ?>
    
    
    
</div>
    
</div>
    </body>
    </html>