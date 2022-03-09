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
<body bgcolor="#FFFFFF" text="#000000" link="#FFFF00" vlink="#FFFF00" alink="#FFFF00" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">      <blockquote>
      <p><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><b><font size="3"><br>
        <img src="../images/postericon.jpg" width="360" height="80"></font></b></font></p>
        <p><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Our posters are printed on a thick 100# gloss book stock.<br>
          <br>
        Click on the product name for it's detailed pricing list. </font></p>
        </blockquote>
      <table width="60%" height="" border="0" align="center" cellpadding="3" cellspacing="1">
      <tr>
        <th bgcolor="#999999" scope="col"><strong><font color="#FFFFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif">Product</font></strong></th>
        <td height="20" align="center" valign="bottom" bgcolor="#003366" class="ArialBlack10"><strong><font color="#FFFFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif">Dimensions</font></strong></td>
        </tr>
      <tr>
        <td width="34%" align="right" valign="top" nowrap="nowrap" bgcolor="#999999"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><strong><a href="printing.php?product=ps1">8.5x14 Posters</a></strong></font></td>
        <td valign="top" align="middle" width="66%"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">8.5&quot;x14&quot; </font></div></td>
      </tr>
      <tr>
        <td width="34%" align="right" valign="top" nowrap="nowrap" bgcolor="#999999"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><a href="printing.php?product=ps2">11x17 Posters</a></font></strong></td>
        <td valign="top" align="middle" width="66%"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">11&quot;x17&quot; </font></div></td>
      </tr>
      <tr>
        <td width="34%" align="right" valign="top" nowrap="nowrap" bgcolor="#999999"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><a href="printing.php?product=ps3">12x18 Poster</a></font></strong></td>
        <td valign="top" align="middle" width="66%"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">12&quot;x18&quot; </font></div></td>
      </tr>
      <tr>
        <td width="34%" align="right" valign="top" nowrap="nowrap" bgcolor="#999999"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><a href="printing.php?product=ps4">17x22 Poster</a></font></strong></td>
        <td valign="top" align="middle" width="66%"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">17&quot;x22&quot; </font></div></td>
      </tr>
      <tr>
        <td width="34%" align="right" valign="top" nowrap="nowrap" bgcolor="#999999"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><a href="printing.php?product=ps5">18x24 Poster</a></font></strong></td>
        <td valign="top" align="middle" width="66%"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">18&quot;x24&quot; </font></div></td>
      </tr>
      <tr>
        <td width="34%" align="right" valign="top" nowrap="nowrap" bgcolor="#999999"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><a href="printing.php?product=ps6">22x34 Poster</a></font></strong></td>
        <td valign="top" align="middle" width="66%"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">22&quot;x34&quot; </font></div></td>
      </tr>
      <tr>
        <td width="34%" align="right" valign="top" nowrap="nowrap" bgcolor="#999999"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><a href="printing.php?product=ps7">24x36 Poster</a></font></strong></td>
        <td valign="top" align="middle" width="66%"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">24&quot;x36&quot; </font></div></td>
      </tr>
      <tr>
        <td width="34%" align="right" valign="top" nowrap="nowrap" bgcolor="#999999"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><a href="printing.php?product=ps8">27x39 Poster</a></font></strong></td>
        <td valign="top" align="middle" width="66%"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">27&quot;x39&quot; </font></div></td>
      </tr>
</table>
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