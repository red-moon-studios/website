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
    <font face="Verdana, Arial, Helvetica, sans-serif" size="2"><b><font size="3"><img src="../images/foldericon.jpg" width="360" height="80"></font></b></font></p>
        <p><font size="3" face="Arial, Helvetica, sans-serif"><strong><font face="Verdana, Arial, Helvetica, sans-serif">9&quot; x 12&quot;  Presentation Folder <br />
        12pt - UV 1 Side Gloss</font></strong></font><font face="Verdana, Arial, Helvetica, sans-serif"><br />
        <font size="2">The 9&rdquo;x12&rdquo; presentation folder is the most popular folder used today. Designed   to contain 8.5&rdquo;x11&rdquo; insert sheets and catalogs, there are many applications for   this product. The presentation folder can be ordered (3) pocket ways and (2)   business card holding ways. The size of the pockets are 4&rdquo;x9&rdquo; inches. You can   order just a right hand pocket or left hand pocket (this is determined when the   folder is open and looking inside). Or, you can have (2) pockets for each side.   We also provide business card &ldquo;slits&rdquo; for holding a standard 3.5&rdquo;x2&rdquo; landscape   card. UV Gloss on outside of folder and pockets inside for both the 16pt   cardstock &amp; 12pt c/1/s cardstock.</font></font></p>
        <table width="75%" border="0" align="center" cellpadding="3" cellspacing="1">
          <tr> 
            <td class="ColorwayFont" bgcolor="#999999" width="130" > 
            <div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">Colorway</font></b></font></div>            </td>
            <td bgcolor="#003366" class="expressFont"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF">500</font></div></td>
            <td bgcolor="#003366" class="expressFont"> 
            <div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF">1,000</font></div>            </td>
            <td bgcolor="#003366" class="valueFont"> 
            <div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF">2,500</font></div>            </td>
            <td bgcolor="#003366" class="valueFont"> 
            <div align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="1" color="#FFFFFF">5,000</font></div>            </td>
          <tr>
            <td  class="ColorwayFont" bgcolor="#999999"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">4/0</font></b></font></div></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$736.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$934.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$1,512.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$2,994.00</font></td>
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