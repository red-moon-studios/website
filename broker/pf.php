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
<body bgcolor="#FFFFFF" text="#000000" link="#FF0000" vlink="#FF0000" alink="#FF0000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">    
<blockquote>
  <p><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><b><br>
  <font size="3"><img src="../images/foldericon.jpg" width="360" height="80"></font></b></font></p>
        <p><font face="Verdana, Arial, Helvetica, sans-serif" size="2">The 9&rdquo; x 12&rdquo; presentation folder is the most popular folder used today. Designed   to contain 8.5&rdquo;x11&rdquo; insert sheets and catalogs, there are many applications for   this product. The presentation folder can be ordered (3) pocket ways and (2)   business card holding ways. The size of the pockets are 4&rdquo;x9&rdquo; inches. You can   order just a right hand pocket or left hand pocket (this is determined when the   folder is open and looking inside). Or, you can have (2) pockets for each side.   We also provide business card &ldquo;slits&rdquo; for holding a standard 3.5&rdquo;x2&rdquo; landscape   card. UV Gloss is included on outside of folder and pockets inside for both the 16pt   cardstock &amp; 12pt c/1/s cardstock.<br>
          <br>
        Click on the Paper Stock for it's detailed pricing list. </font></p>
</blockquote>
      <table width="75%" border="0" align="center" cellpadding="3" cellspacing="1">
      <tr>
        <th width="43%" bgcolor="#999999" scope="col"><div align="center"><font color="#FFFFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif"><strong>Product</strong></font></div></th>
        <td height="20" align="center" valign="bottom" bgcolor="#003366" class="ArialBlack10"><div align="center"><font color="#FFFFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b>Paper Stock </b></font></div></td>
        <td height="20" align="center" valign="bottom" bgcolor="#003366" class="ArialBlack10"><div align="center"><font color="#FFFFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b>Paper Stock </b></font></div></td>
        </tr>
      <tr>
        <td align="right" valign="top" bgcolor="#999999"><strong><font color="#FFFFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif">9&quot; x 12&quot; Presentation Folder </font></strong></td>
        <td align="middle" valign="top"><div align="center"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><a href="printing.php?product=pf1">16pt C2S </a></font></strong></div></td>
        <td align="center" valign="top" class="GenevaBlack12"><div align="center"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><a href="printing.php?product=pf2">12pt C1S </a></font></strong></div></td>
        </tr>
      <tr>
        <td align="right" valign="top" bgcolor="#999999"><strong><font color="#FFFFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif">6&quot; x 9&quot; (mini) Presentation Folder</font></strong></td>
        <td align="middle" valign="top"><div align="center"><strong><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><a href="printing.php?product=pf3">16pt C2S </a></font></strong></div></td>
        <td align="center" valign="top" class="GenevaBlack12"><div align="center"></div></td>
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