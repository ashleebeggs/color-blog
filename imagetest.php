<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<title>Image Test</title>
<body>
<?php
$con = mysql_connect("localhost", "root", "") or die('');
   mysql_select_db("moods", $con);
$query = "SELECT userid, password from users";
$result = mysql_query($query) or die(mysql_error());

echo "<table width=\"50%\" cellpadding=\"1\" border=\"1\">\n";
echo "<tr><td>Product ID</td><td>Description</td><td>Image</td></tr>\n";
while($row=mysql_fetch_array($result, MYSQL_ASSOC))
{
   $userid = $row['userid'];
   $password = $row['password'];

   echo "<tr><td>$userid</td><td>$password</td>\n";
   echo "<td><img src=\"showimage.php?id=$userid\" width=\"80\" height=\"60\"></td></tr>\n";
}
echo "</table>\n";
?>
</body>
</html>