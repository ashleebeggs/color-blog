

<div id="menu_wrapper" class="grey">
			<div class="left"></div>
			<ul id="menu">
                <li class="item" id="leftmenu"><a href="color-blog.php?">HOME</a></li>
				<li class="item" onclick="myday()"><a href="#">DAY</a></li>
				<li class="item" onclick="myweek()"> <a href="#">WEEK</a></li>
				<li class="item" onclick="mymonth()"><a href="#">MONTH</a></li>
				<!--<li class="item"><a href="autho.php?">DETAIL</a></li>-->
                
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
                
   <li class="new"><a href="color-blog.php?content=logout"><?php echo $userid ?> LOGOUT</a></li>
                <?php
        }
        } 
else
        {?>
     <li class="new"><a href="color-blog.php?content=login">LOGIN</a></li>
                <?php
        }
                ?>
                
                <li><a class="newday" href="color-blog.php?content=newday"><div id="plus">+</div></a></li>
			</ul>
</div>