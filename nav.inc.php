
                
                <?php
if (isset($_SESSION['valid_color_user']))
   
{
    $con = mysql_connect("localhost", "root", "") or die('Sorry, could not connect to database server');
    mysql_select_db("moods", $con) or die('Sorry, could not connect to database');
        $session = $_SESSION['valid_color_user'];    
            $userid = "$session";
            $query = "SELECT userid from users where userid = '$userid'";
            $result = mysql_query($query);
        while($row = mysql_fetch_array($result, MYSQL_ASSOC))
   {
      $userid = $row['userid'];    
                ?>
        <div id="menu_wrapper" class="grey">
			<div class="left"></div>
			 <ul id="menu">
                 <li><a class="newday" href="color-blog.php?content=newday"><div id="plus">+</div></a></li>
                <li class="item" id="leftmenu"><a href="color-blog.php?">HOME</a></li>
				<li class="item" onclick="myday()"><a href="#">DAY</a></li>
				<li class="item" onclick="myweek()"> <a href="#">WEEK</a></li>
				<li class="item" onclick="mymonth()"><a href="#">MONTH</a></li>
				<!--<li class="item"><a href="autho.php?">DETAIL</a></li>-->
                <li class="new"><a href="color-blog.php?content=logout"><?php echo $userid ?> LOGOUT</a></li>
        
            </ul>
            
                <?php
    }
    
} 
    else
        {
                ?>
            
            
            <div class="section group">
                <div class="col span_8_of_12"></div>
                <div class="col span_4_of_12">
<div id="joinmenu_wrapper">
	
<ul id="joinmenu">
     <li>
                <div id="loginform">

<form id="loginsheet" action="color-blog.php" method="post" target="_self">

<div id="usern">

<input type="text" size="20" name="userid" placeholder="Username"><br>

</div>

<div id="userp">


    <input type="password" size="20" name="password" placeholder="Password">
</div>
    <div id="usersub">
<input type="submit" value="Login">
</div>

<input type="hidden" value="validate" name="content">


</form>
</div></li>
                 </ul>
    </div>
       </div>
            </div>
            
            
                <?php
        }
                ?>
                
            
			
