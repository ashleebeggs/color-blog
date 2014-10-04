<?php 

if (isset($_SESSION['valid_color_user']))
    
{
$mysqli = mysqli_connect("huuuecom.ipowermysql.com", "ashleebeggs", "ayso13", "moods");
                if (mysqli_connect_errno($mysqli)) {
    echo "Failed to connect to database: " . mysqli_connect_error();
                }

     $session = $_SESSION['valid_color_user'];    
            $userid = "$session";
     $res = mysqli_query($mysqli, "SELECT userid, email from users where userid = '$userid'");

        while($row = mysqli_fetch_assoc($res))
   {
      $userid = $row['userid']; 
            $email = $row['email']; 
                ?>
<div id="changecont">

<div id="changeform">
<div class="headspadding"><?php echo $userid .'\'s profile' ?></div>


<form id="changepass" action="color-blog.php" enctype="multipart/form-data" method="post" role="form">
    
    <div class="row" style="padding-bottom:15px">
        <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-4 col-md-4 col-md-offset-4">
  <?php echo "<img src=\"showimage.php?id=$userid\" width=\"100\" height=\"100\" class='profilepicform'>"; ?>  
            </div>
        </div>
    
        <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-4 col-md-4 col-md-offset-4 form-group" style="text-align:center;">  
            <label for="pp" class="loginsub">Change profile pic</label>
            <input style="width:100%; padding-top:15px; margin-left:18%;" class="col-md-4" type="file" name="picture" id="pp"> 
        </div>
            </div>
        
    
    <div class="row">
    <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-4 col-md-4 col-md-offset-2 form-group">
     <label for="chpw"  class="loginsub">Change password</label>
    <input type="password" style="width:100%;" name="password" class="form-control" id="chpw">  
        </div>
     
        <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-4 col-md-4 col-md-offset-0 form-group">
     <label for="rtpw" class="loginsub">Retype password</label>
    <input type="password" style="width:100%;" name="password2" class="form-control" id="rtpw">
        </div>
        </div>

  <div class="row navbar-fixed-bottom hidden-sm hidden-md hidden-lg" id="navbottom">
          <div class="col-xs-12">                
             <button type="submit" class="subutton" value="Submit">Submit</button>
           </div>             
    </div>
    
    <div class="row">
      <div class=" col-sm-2 col-sm-offset-5 col-md-2 col-md-offset-5 hidden-xs">                
             <button type="submit" class="subutton" value="Submit">Submit</button>
           </div>  
        </div>
        <input type="hidden" name="MAX_FILE_SIZE" value="1024000">

<input type="hidden" name="userid" value="<?php echo $userid?>">
    <input type="hidden" name="email" value="<?php echo $email?>">

<input type="hidden" value="update" name="content">
</form>
    
  
</div>

    </div>
<?php
    
}
}
    else
    {
    echo "You are not logged in";

    }
?>