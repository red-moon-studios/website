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
        <img src="../images/flyericon.jpg" width="360" height="80"></font></b></font></p>
        <p><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Our flyers are printed on a heavy 
          14pt coated 2 side card stock. After printing, a high gloss UV coating 
          is applied to both sides. By UV coating both sides this allows for more 
          protection of the printed design.<br>
          <br>
          Click on the product name for it's detailed pricing list. </font></p>
        <table width="75%" border="0" align="center" cellpadding="3" cellspacing="1">
          <tr>
            <td width="30%" bgcolor="#999999"><div align="center"><font size="1"><strong><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">Product</font></strong></font></div></td>
            <td width="52%" bgcolor="#003366"><div align="center"><font size="1"><strong><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">Dimensions</font></strong></font></div></td>
          </tr>
          <tr>
            <td width="30%" bgcolor="#999999"><div align="right"><font size="1"><strong><font face="Verdana, Arial, Helvetica, sans-serif"><a href="printing.php?product=fl1">1/8th Page Flyer</a> </font></strong></font></div></td>
            <td><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">4.25&quot; x 2.75&quot;<br />
            (5.5&quot; x 2.125&quot; - Wide) </font></div></td>
          </tr>
          <tr>
            <td width="30%" bgcolor="#999999"><div align="right"><font size="1"><strong><font face="Verdana, Arial, Helvetica, sans-serif"><a href="printing.php?product=fl2">1/6th Page Flyer</a></font> </strong></font></div></td>
            <td><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">4.25&quot; x 3.66&quot;<br />
            (5.5&quot; x 2.83&quot; - Wide) </font></div></td>
          </tr>
          <tr>
            <td width="30%" bgcolor="#999999"><div align="right"><font size="1"><strong><font face="Verdana, Arial, Helvetica, sans-serif"><a href="printing.php?product=fl3">1/4 Page Flyer/Postcard</a></font></strong></font></div></td>
            <td><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">4.25&quot; x 5.5&quot;<br />
            (8.5&quot; x 2.75&quot; - Wide) </font></div></td>
          </tr>
          <tr>
            <td width="30%" bgcolor="#999999"><div align="right"><font size="1"><strong><font face="Verdana, Arial, Helvetica, sans-serif"><a href="printing.php?product=fl4">1/3 Page Flyer </a></font></strong></font></div></td>
            <td><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">8.5&quot; x 3.66&quot; </font></div></td>
          </tr>
          <tr>
            <td width="30%" bgcolor="#999999"><div align="right"><font size="1"><strong><font face="Verdana, Arial, Helvetica, sans-serif"><a href="printing.php?product=fl5">1/2 Page Flyer/Postcard </a></font></strong></font></div></td>
            <td><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">8.5&quot; x 5.5&quot;<br />
            (11&quot; x 4.25&quot; - Wide) </font></div></td>
          </tr>
          <tr>
            <td width="30%" bgcolor="#999999"><div align="right"><font size="1"><strong><font face="Verdana, Arial, Helvetica, sans-serif"><a href="printing.php?product=fl6">4&quot; x 9&quot; Rack Card</a> </font></strong></font></div></td>
            <td><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">9&quot; x 4&quot;  </font></div></td>
          </tr>
          <tr>
            <td bgcolor="#999999"><div align="right"><font size="1"><strong><font face="Verdana, Arial, Helvetica, sans-serif"><a href="printing.php?product=fl7">4&quot; x 6&quot; Postcard </a></font></strong></font></div></td>
            <td><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">4&quot; x 6&quot; </font></div></td>
          </tr>
          <tr>
            <td width="30%" bgcolor="#999999"><div align="right"><font size="1"><strong><font face="Verdana, Arial, Helvetica, sans-serif"><a href="printing.php?product=fl8">Full Page Flyer</a></font></strong></font></div></td>
            <td><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">8.5&quot; x 11&quot; </font></div></td>
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