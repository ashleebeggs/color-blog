<?php
if (isset($_SESSION['valid_admin']))
{
   unset($_SESSION['valid_admin']);
    
   echo '<META HTTP-EQUIV="Refresh" Content="0; URL=color-blog.php">';  
} 
else
{
   echo "<h2 class='centermessage'>Sorry, you are not currently logged in</h2>\n";
}
?>