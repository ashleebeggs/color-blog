
<?php 
$mysqli = mysqli_connect("huuuecom.ipowermysql.com", "ashleebeggs", "ayso13", "moods");
                if (mysqli_connect_errno($mysqli)) {
    echo "Failed to connect to database: " . mysqli_connect_error();
                }


if (isset($_SESSION['valid_color_user']))
{

     $session = $_SESSION['valid_color_user'];    
            $userid = "$session";
    $res = mysqli_query($mysqli, "SELECT userid from users where userid = '$userid'");
           
        while($row = mysqli_fetch_assoc($res))
   {
      $userid = $row['userid'];    
                ?>

            <nav class="navbar navbar-default" role="navigation">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                    <ul>
                 <a href="color-blog.php"><li class="logo"><?php include("logo.php"); ?></li></a>
                        </ul>
                </div>
    
            <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        
                     <ul class="nav navbar-nav navbar-right">   
                          <li class="hidden-xs hidden-sm"><a href="color-blog.php?content=newday"><div id="plus">+</div></a></li>
                          
                           
                                <li class="" onclick="myday()"><a href="#">Day</a></li>
                                <li class="" onclick="myweek()"><a href="#">Week</a></li>
                         <li class="hidden-md hidden-lg"><a href="color-blog.php?content=newday">Add a day</a></li>
                                <!--<li class="hidden-xs hidden-sm" onclick="mymonth()"><a href="#">Month</a></li>-->
                                <!--<li><a href="autho.php?">Details</a></li>-->
                        <li><div class="dropdown hidden-xs hidden-sm">
                            <?php echo "<img src=\"showimage.php?id=$userid\" width=\"40\" height=\"40\" class='profilepic dropdown-toggle' data-toggle='dropdown'>"; ?><span class="caret"></span>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="color-blog.php?content=changeprofile">My Profile</a> </li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="color-blog.php?content=logout">logout</a>                                </li>
                            </ul></div>
                        </li><!--dropdown li-->
                         <li class="hidden-md hidden-lg hidden-xl"><a role="menuitem" tabindex="-1" href="color-blog.php?content=changeprofile">My Profile</a> </li>
                         <li class="hidden-md hidden-lg hidden-xl"> <a href="color-blog.php?content=logout">logout</a></li>
                </ul><!--navbar right-->
                        
            </div><!--menu wrapper-->
                        </div>
                </nav>
                <?php
    
}
}
    else
    {
                ?>
<nav class="navbar navbar-default" role="navigation">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                 
                    <ul class="hidden-sm hidden-md hidden-lg">
                 <a href="color-blog.php"><li class="logo "><?php include("logo.php"); ?></li></a>
                        </ul>
                </div>
        
               
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar">
                    <a href="color-blog.php"><li class="logo"><?php include("logo.php"); ?></li></a>
                    </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <form class="navbar-form navbar-right" action="color-blog.php" method="post" target="_self">
                                <div class="form-group">
                                    <input type="text" size="20" name="userid" placeholder="Username">
                                    
                                    <div class="input-group input-group-sm" style="margin-right:10px; margin-top:-1px;">
                                            <input style="width:100%;" type="password" size="20" name="password" placeholder="Password">
                                                    <span class="input-group-btn">
                                                            <a href="color-blog.php?content=changepass"><button style="height:25px; padding:3px 12px;" class="btn btn-default" type="button">?</button></a>
                                                        </span>
                                        </div>
                                    
                                    <input type="hidden" value="validate" name="content">
                                </div>
                                <button type="submit" class="btn btn-default" value="Login">Login</button>
                            </form>
                            <li>
                               
                        </ul>
                    </div><!--collapse-->
               
                </nav>
            
                <?php
    }
                ?>
                
            
	
