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
<body bgcolor="#FFFFFF" text="#000000" link="#FFFF00" vlink="#FFFF00" alink="#FFFF00" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">    <blockquote><p><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><b><font size="3"><br>
        <img src="../images/foldedicon.jpg" width="360" height="80"></font></b></font></p>
        <p><font face="verdana" size="2">Folded products are printed on 100# Gloss Book, after printing they are then folded
          to meet your requirements. 
          <br>
          <br>
  Click on the product name for it's detailed pricing list. </font></p>
        </blockquote>
      <table width="75%" border="0" align="center" cellpadding="3" cellspacing="1">
      <tr>
        <th bgcolor="#999999" scope="col"><strong><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif">Product</font></strong></th>
        <td height="20" align="center" valign="bottom" bgcolor="#003366" class="ArialBlack10"><b><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif">Folded Dimensions</font></b></td>
        </tr>
      <tr>
        <td width="37%" align="right" valign="top" nowrap="nowrap" bgcolor="#999999"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><a href="printing.php?product=fp1">5.5&quot; x 8.5&quot; - Bi-fold</a></font></strong></td>
        <td valign="top" align="middle" width="63%"><div align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">4.25&quot; x 5.5&quot; </font></div></td>
      </tr>
      <tr>
        <td width="37%" align="right" valign="top" nowrap="nowrap" bgcolor="#999999"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><a href="printing.php?product=fp2">8.5&quot; x 11&quot; - Bi-fold</a></font></strong></td>
        <td valign="top" align="middle" width="63%"><div align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">5.5&quot; x 8.5&quot; </font></div></td>
      </tr>
      <tr>
        <td width="37%" align="right" valign="top" nowrap="nowrap" bgcolor="#999999"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><a href="printing.php?product=fp3">11&quot; x 17&quot; - Bi-fold</a></font></strong></td>
        <td valign="top" align="middle" width="63%"><div align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">8.5&quot; x 11&quot; </font></div></td>
      </tr>
      <tr>
        <td width="37%" align="right" valign="top" nowrap="nowrap" bgcolor="#999999"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><a href="printing.php?product=fp4">8.5&quot; x 11&quot; - Tri-fold</a></font></strong></td>
        <td valign="top" align="middle" width="63%"><div align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">3.66&quot; x 8.5&quot; </font></div></td>
      </tr>
      <tr>
        <td width="37%" align="right" valign="top" nowrap="nowrap" bgcolor="#999999"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><a href="printing.php?product=fp5">11&quot; x 17&quot; - Tri-fold</a></font></strong></td>
        <td valign="top" align="middle" width="63%"><div align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">5.66&quot; x 11&quot; </font></div></td>
      </tr>
      <tr>
        <td width="37%" align="right" valign="top" nowrap="nowrap" bgcolor="#999999"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><a href="printing.php?product=fp6">25.5&quot; x 11&quot; - Tri-fold</a></font></strong></td>
        <td valign="top" align="middle" width="63%"><div align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">8.5&quot; x 11&quot; </font></div></td>
      </tr>
      <tr>
        <td width="37%" align="right" valign="top" nowrap="nowrap" bgcolor="#999999"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><a href="printing.php?product=fp7">8.5&quot; x 14&quot; - Double Parallel Fold</a></font></strong></td>
        <td valign="top" align="middle" width="63%"><div align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">3.5&quot; x 8.5&quot; </font></div></td>
      </tr>
      <tr>
        <td width="37%" align="right" valign="top" nowrap="nowrap" bgcolor="#999999"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><a href="printing.php?product=fp8">11&quot; x 17&quot; - Right Angle (1/4) fold</a></font></strong></td>
        <td valign="top" align="middle" width="63%"><div align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">8.5&quot; x 5.5&quot; </font></div></td>
      </tr>
      <tr>
        <td width="37%" align="right" valign="top" nowrap="nowrap" bgcolor="#999999"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><a href="printing.php?product=fp9">11&quot; x 17&quot; - #10 Envelope Fold</a></font></strong></td>
        <td valign="top" align="middle" width="63%"><div align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">8.5&quot; x 3.66&quot; </font></div></td>
      </tr>
      <tr>
        <td width="37%" align="right" valign="top" nowrap="nowrap" bgcolor="#999999"><strong><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif"><a href="printing.php?product=fp10">8.5&quot; x 14&quot; - Tri-Fold</a></font></strong></td>
        <td valign="top" align="middle" width="63%"><div align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">4.66&quot; x 8.5&quot; </font></div></td>
      </tr>
      <tr>
        <td width="37%" align="right" valign="top" nowrap="nowrap" bgcolor="#999999"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><a href="printing.php?product=fp11">8.5&quot; x 14&quot; - 4 Panel Roll Fold</a></font></strong></td>
        <td valign="top" align="middle" width="63%"><div align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">3.5&quot; x 8.5&quot; </font></div></td>
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