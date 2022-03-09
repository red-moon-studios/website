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
  <p><strong><font face="verdana" size="2"><font size="3" face="Verdana, Arial, Helvetica, sans-serif">Full Page Cardstock Flyer - 8.5&quot; x 11&quot; </font></font></strong><br />
    <font face="verdana" size="2">Our flyers are printed on a heavy 
    14pt coated 2 side card stock. After printing, a high gloss UV coating 
    is applied to both sides. By UV coating both sides this allows for more 
  protection of the printed design.</font></p>
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
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$270.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$385.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$570.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$1,100.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$1,650.00</font></td>
          </tr>
          <tr> 
            <td  class="ColorwayFont" bgcolor="#999999" width="129"> 
              <div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">4/4 
            - Spot UV</font></b></font></div>            </td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$350.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$410.00</font></td>

            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$575.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$1,140.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$1,705.00</font></td>
          </tr>
          <tr> 
            <td class="ColorwayFont" bgcolor="#999999" width="129" > 
            <div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">Colorway</font></b></font></div>            </td>
            <td class="valueFont" bgcolor="#003366"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF">20,000</font></div></td>
            <td class="valueFont" bgcolor="#003366"> 
            <div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF">25,000</font></div>            </td>
            <td class="valueFont" bgcolor="#003366"> 
            <div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF">30,000</font></div>            </td>
            <td class="valueFont" bgcolor="#003366"> 
            <div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF">35,000</font></div>            </td>
            <td class="valueFont" bgcolor="#003366"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF">40,000</font></div></td>
          <tr> 
            <td  class="ColorwayFont" bgcolor="#999999" width="129"> 
              <div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">4/4 
            - Flood UV</font></b></font></div>            </td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$2,200.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$2,750.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$3,300.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$3,850.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$4,350.00</font></td>
          </tr>
          <tr> 
            <td  class="ColorwayFont" bgcolor="#999999" width="129"> 
              <div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">4/4 
            - Spot UV</font></b></font></div>            </td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$2,270.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$2,835.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$3,400.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$3,965.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$4,530.00</font></td>
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