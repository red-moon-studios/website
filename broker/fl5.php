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
  <p><strong><font face="verdana" size="2"><font size="3" face="Verdana, Arial, Helvetica, sans-serif">1/2 Page Flyers - </font></font><font size="3" face="Verdana, Arial, Helvetica, sans-serif">8.5&quot; x 5.5&quot;</font></strong> <strong><font size="3" face="Verdana, Arial, Helvetica, sans-serif">(11&quot; x 4.25&quot; - Wide)</font></strong><br />
    <font face="verdana" size="2">Our flyers are printed on a heavy 
    16pt coated 2 side card stock. After printing, a high gloss UV coating 
    is applied to both sides. By UV coating both sides this allows for more 
  protection of the printed design.</font><font face="verdana" size="2"><strong> For no extra charge you can now choose Gloss UV, Matte Coating or UV 1-Side.</strong><em> Call for quantities above 15,000. </em></font></p>
  <table width="75%" border="0" align="center" cellpadding="3" cellspacing="1">
          <tr> 
            <td class="ColorwayFont" bgcolor="#999999" width="129" > 
            <div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">Colorway</font></b></font></div>            </td>
            <td class="valueFont" bgcolor="#003366"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF">1,000</font></div></td>
            <td class="valueFont" bgcolor="#003366"> 
            <div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF">2,500</font></div>            </td>
            <td class="valueFont" bgcolor="#003366"> 
            <div align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="1" color="#FFFFFF">5,000</font></div>            </td>
            <td class="valueFont" bgcolor="#003366"> 
            <div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF">10,000</font></div>            </td>
            <td class="valueFont" bgcolor="#003366"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF">15,000</font></div></td>
          <tr> 
            <td  class="ColorwayFont" bgcolor="#999999" width="129"> 
              <div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">4/4 
            - Flood UV</font></b></font></div>            </td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$110.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$165.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$211.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$415.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$615.00</font></td>
          </tr>
          <tr>
            <td  class="ColorwayFont" bgcolor="#999999"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">4/4 
              - Spot UV</font></b></font></div></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$185.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$225.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$315.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$575.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$815.00</font></td>
          </tr>
          <tr>
            <td  class="ColorwayFont" bgcolor="#999999"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">4/4 - Metallic</font><font color="#FF0000" size="1" face="Verdana, Arial, Helvetica, sans-serif">*</font></b></font></div></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$210.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$270.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$415.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$795.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$1,155.00</font></td>
          </tr>
  </table>
  <p><font color="#FF0000" size="1" face="Verdana, Arial, Helvetica, sans-serif">*Metallic is an uncoated card with special coating on select areas to create the illusion of a metallic color.</font></p>
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