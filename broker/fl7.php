<?php 
@mysql_connect("localhost", "redmoons_broker", "8hSVGSlkcMcu") or die(mysql_error()); 
mysql_select_db("redmoons_broker") or die(mysql_error()); 
if(isset($_COOKIE['ID_my_site'])) 
{ 
$username = $_COOKIE['ID_my_site']; 
$pass = $_COOKIE['Key_my_site']; 
$check = mysql_query("SELECT * FROM users WHERE username = '$username'")or die(mysql_error());
while($info = mysql_fetch_array( $check )) 
{ 
if ($pass != $info['password']) 
{ header("Location: index.php"); 
} 
else { 
mysql_close();
?>
<blockquote> 
  <p><br>
    <font face="Verdana, Arial, Helvetica, sans-serif" size="2"><b><font size="3">	<img src="../images/flyericon.jpg" width="360" height="80"></font></b></font></p>
  <p><strong><font face="verdana" size="2"><font size="3" face="Verdana, Arial, Helvetica, sans-serif">4&quot; x 6&quot; Postcard (USPS Approved) </font></font></strong><br />
    <font face="verdana" size="2">Our flyers are printed on a heavy 
    16pt coated 2 side card stock. After printing, a high gloss UV coating 
    is applied to both sides. By UV coating both sides this allows for more 
  protection of the printed design. <strong>For no extra charge you can now choose Gloss UV, Matte Coating or UV 1-Side.</strong></font></p>
 <p><font color="#FF0000" size="1" face="Verdana, Arial, Helvetica, sans-serif">Please e-mail <a href="mailto:sales@redmoonstudios.net">sales@redmoonstudios.net</a> for pricing and availability.</font></p>
</blockquote>
<?php
} 
} 
} 
else 

//if the cookie does not exist, they are taken to the login screen 
{ 
header("Location: index.php"); 
} 
?> 