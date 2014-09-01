
                
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
                            <li><a class="newday" href="color-blog.php?content=newday"><div id="plus">+</div></a></li>
                           
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
            <div class="row">
                <div class="col-md-8"></div>
                <div class="col-md-4">      
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
                                </div>
                            </li>
                        </ul>
                    </div><!--join wrapper-->
                </div><!--col-->
                </div><!--section-->
            
                <?php
    }
                ?>
                
            
	
