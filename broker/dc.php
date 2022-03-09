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
<body bgcolor="#FFFFFF" text="#000000" link="#FFFF00" vlink="#FFFF00" alink="#FFFF00" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0"><blockquote>
<p><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><b><font size="3"><br>
        <img src="../images/diecuticon.jpg" width="360" height="80"></font></b></font></p>
        <p><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Our flyers are printed on a heavy 
          14pt coated 2 side card stock. After printing, a high gloss UV coating 
          is applied to both sides. By UV coating both sides this allows for more 
          protection of the printed design. After coating they are then cut to an exact finish. Our most common diecut product is the door hanger, available in 4 different sizes. If you require custom diecutting please contact our sales department. <br>
          <br>
  Click on the product name for it's detailed pricing list. </font></p>
        <table width="75%" border="0" align="center" cellpadding="3" cellspacing="1">
          <tr>
            <td width="30%" bgcolor="#999999"><div align="center"><font size="1"><strong><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">Product</font></strong></font></div></td>
            <td width="52%" bgcolor="#003366"><div align="center"><font size="1"><strong><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">Dimensions</font></strong></font></div></td>
          </tr>
          <tr>
            <td width="30%" bgcolor="#999999"><div align="right"><font size="1"><strong><font face="Verdana, Arial, Helvetica, sans-serif"><a href="printing.php?product=dc1">1/2 Page Long Door Hanger</a> </font></strong></font></div></td>
            <td><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">4.25&quot; x 11&quot;            </font></div></td>
          </tr>
          <tr>
            <td width="30%" bgcolor="#999999"><div align="right"><font size="1"><strong><font face="Verdana, Arial, Helvetica, sans-serif"><a href="printing.php?product=dc2">1/2 Page Door Hanger </a></font> </strong></font></div></td>
            <td><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><font size="1">5.5&quot; x 8.5&quot; </font> </font></div></td>
          </tr>
          <tr>
            <td width="30%" bgcolor="#999999"><div align="right"><font size="1"><strong><font face="Verdana, Arial, Helvetica, sans-serif"><a href="printing.php?product=dc3">1/3rd Page Door Hanger</a></font></strong></font></div></td>
            <td><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">3.66&quot; x 8.5&quot; </font></div></td>
          </tr>
          <tr>
            <td width="30%" bgcolor="#999999"><div align="right"><font size="1"><strong><font face="Verdana, Arial, Helvetica, sans-serif"><a href="printing.php?product=dc4">4&quot; x 7&quot; Rack Door Hanger </a></font></strong></font></div></td>
            <td><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">4&quot; x 7&quot; </font></div></td>
          </tr>
        </table>
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