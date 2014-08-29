<?php
if (isset($_SESSION['valid_color_user']))
{
   unset($_SESSION['valid_color_user']);
    
   echo '<META HTTP-EQUIV="Refresh" Content="0; URL=color-blog.php">';  
} 
else
{
   echo "<h2 class='centermessage'>Sorry, you are not currently logged in</h2>\n";
}
?>