
                
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
            <nav class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                    </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="newday"><a href="color-blog.php?content=newday"><div id="plus">+</div></a></li>
                           
                                <li id="navbar1" onclick="myday()"><a href="#">Day</a></li>
                                <li onclick="myweek()"><a href="#">Week</a></li>
                                <li onclick="myweek()"><a href="#">Month</a></li>
                                <li><a href="autho.php?">Details</a></li>
                              </ul>
                          
                     <ul class="nav navbar-nav navbar-right">   
                        <li class="new"><a href="color-blog.php?content=logout"><?php echo $userid ?> LOGOUT</a></li>
                     </ul>
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
                    <div class="container">  </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <form class="navbar-form navbar-right" action="color-blog.php" method="post" target="_self">
                                <div class="form-group">
                                    <input type="text" size="20" name="userid" placeholder="Username">
                                    <input type="password" size="20" name="password" placeholder="Password">
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
                
            
	
