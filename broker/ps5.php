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
    <font face="Verdana, Arial, Helvetica, sans-serif" size="2"><b><font size="3"><img src="../images/postericon.jpg" width="360" height="80"></font></b></font></p>
        <p><font size="3" face="Arial, Helvetica, sans-serif"><strong><font face="Verdana, Arial, Helvetica, sans-serif">18&quot; x 24&quot; Poster </font></strong></font><font face="Verdana, Arial, Helvetica, sans-serif"><br />
  </font><font face="Verdana, Arial, Helvetica, sans-serif" size="2">Our posters are printed on a thick 100# gloss book stock.</font></p>
        <table width="75%" border="0" align="center" cellpadding="3" cellspacing="1">
          <tr> 
            <td class="ColorwayFont" bgcolor="#999999" width="130" > 
            <div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">Colorway</font></b></font></div>            </td>
            <td bgcolor="#003366" class="expressFont"> 
            <div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF">1,000</font></div>            </td>
            <td bgcolor="#003366" class="valueFont"> 
            <div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF">2,500</font></div>            </td>
            <td bgcolor="#003366" class="valueFont"> 
            <div align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="1" color="#FFFFFF">5,000</font></div>            </td>
            <td bgcolor="#003366" class="valueFont"> 
            <div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF">10,000</font></div>            </td>
          <tr> 
            <td  class="ColorwayFont" bgcolor="#999999" width="130"> 
            <div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">4/0</font></b></font></div>            </td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$415.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$675.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$820.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$1,125.00</font></td>
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
