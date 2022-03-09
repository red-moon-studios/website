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
<body bgcolor="#FFFFFF" text="#000000" link="#FFFF00" vlink="#FFFF00" alink="#FFFF00" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">     <blockquote>
      <p><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><b><font size="3"><br>
        <img src="../images/catalogicon.jpg" width="360" height="80"></font></b></font></p>
        <p><font face="verdana" size="2">We offer a wide range of catalog products, all printed on 100# Gloss Book and finished  with saddle stitch binding these are the &quot;staple&quot; of the industry. Please call us for any<br>
          product not featured on our website. <br>
        <br>
        Click on the product name for it's detailed pricing list. </font></p>
        <table width="75%" border="0" align="center" cellpadding="3" cellspacing="1">
          <tr>
            <td width="30%" bgcolor="#999999"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><strong><font color="#FFFFFF">Product</font></strong></font></div></td>
            <td width="47%" bgcolor="#003366"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><strong><font color="#FFFFFF">Dimensions</font></strong></font></div></td>
          </tr>
          <tr>
            <td width="30%" bgcolor="#999999"><div align="right"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><strong><a href="printing.php?product=ct1">4 Page Catalog/Brochure </a></strong></font></div></td>
            <td><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">8.5&quot; x 11&quot; </font></div></td>
          </tr>
          <tr>
            <td width="30%" bgcolor="#999999"><div align="right"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><strong><a href="printing.php?product=ct2">8 Page Catalog/Brochure</a> </strong></font></div></td>
            <td><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">8.5&quot; x 11&quot;</font></div></td>
          </tr>
          <tr>
            <td width="30%" bgcolor="#999999"><div align="right"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><strong><a href="printing.php?product=ct3">12 Page Catalog/Brochure </a></strong></font></div></td>
            <td><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">8.5&quot; x 11&quot;</font></div></td>
          </tr>
          <tr>
            <td width="30%" bgcolor="#999999"><div align="right"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><strong><a href="printing.php?product=ct4">16 Page Catalog/Brochure</a> </strong></font></div></td>
            <td><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">8.5&quot; x 11&quot;</font></div></td>
          </tr>
          <tr>
            <td width="30%" bgcolor="#999999"><div align="right"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><strong><a href="printing.php?product=ct5">20 Page Catalog/Brochure</a> </strong></font></div></td>
            <td><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">8.5&quot; x 11&quot;</font></div></td>
          </tr>
          <tr>
            <td width="30%" bgcolor="#999999"><div align="right"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><strong><a href="printing.php?product=ct6">24 Page Catalog/Brochure</a> </strong></font></div></td>
            <td><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">8.5&quot; x 11&quot;</font></div></td>
          </tr>
          <tr>
            <td width="30%" bgcolor="#999999"><div align="right"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><strong><a href="printing.php?product=ct7">28 Page Catalog/Brochure </a></strong></font></div></td>
            <td><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">8.5&quot; x 11&quot;</font></div></td>
          </tr>
          <tr>
            <td width="30%" bgcolor="#999999"><div align="right"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><strong><a href="printing.php?product=ct8">32 Page Catalog/Brochure </a></strong></font></div></td>
            <td><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">8.5&quot; x 11&quot;</font></div></td>
          </tr>
          <tr>
            <td width="30%" bgcolor="#999999"><div align="right"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><strong><a href="printing.php?product=ct9">36 Page Catalog/Brochure</a> </strong></font></div></td>
            <td><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">8.5&quot; x 11&quot;</font></div></td>
          </tr>
          <tr>
            <td width="30%" bgcolor="#999999"><div align="right"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><strong><a href="printing.php?product=ct10">8 Page Catalog</a></strong></font></div></td>
            <td><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">5.5&quot; x 8.5&quot; </font></div></td>
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