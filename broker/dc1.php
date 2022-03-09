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
    <font face="Verdana, Arial, Helvetica, sans-serif" size="2"><b><font size="3">	<img src="../images/diecuticon.jpg" width="360" height="80"></font></b></font></p>
  <p><font size="3" face="Arial, Helvetica, sans-serif"><strong><font face="Verdana, Arial, Helvetica, sans-serif">4.25&quot; x 11&quot; Half Page Long Door Hanger </font></strong></font><font face="Verdana, Arial, Helvetica, sans-serif"><br />
      <font size="2">The 1/2 page wide doorhanger (11&quot; x 4.25&quot;) is a popular promotional tool. Diecut   with a 1.25&quot; circle near the top &amp; slit (larger holes are available please   specify.) When designing your doorhanger, the circle hole is 3/4&quot; from the top.   The slit is one the left side of the hole. If you think of a clock... the slit   is at the 10 O'clock position. Printed on 14pt heavy cardstock with UV gloss on   both sides.</font></font></p>
  <table width="75%" border="0" align="center" cellpadding="3" cellspacing="1">
          <tr> 
            <td class="ColorwayFont" bgcolor="#999999" width="129" > 
            <div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">Colorway</font></b></font></div>            </td>
            <td class="valueFont" bgcolor="#003366"> 
            <div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF">2,500</font></div>            </td>
            <td class="valueFont" bgcolor="#003366"> 
            <div align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="1" color="#FFFFFF">5,000</font></div>            </td>
            <td class="valueFont" bgcolor="#003366"> 
            <div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF">10,000</font></div>            </td>
            <td class="valueFont" bgcolor="#003366"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF">15,000</font></div></td>
            <td class="valueFont" bgcolor="#003366"> 
            <div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF">20,000</font></div>            </td>
          <tr> 
            <td  class="ColorwayFont" bgcolor="#999999" width="129"> 
              <div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">4/4 
            - Flood UV</font></b></font></div>            </td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$300.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$475.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$945.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$1,410.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$1,870.00</font></td>
          </tr>
          <tr> 
            <td  class="ColorwayFont" bgcolor="#999999" width="129"> 
              <div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">4/4 
            - Spot UV</font></b></font></div>            </td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$325.00</font></td>

            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$500.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$965.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$1,430.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$1,890.00</font></td>
          </tr>
          <tr> 
            <td class="ColorwayFont" bgcolor="#999999" width="129" > 
            <div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">Colorway</font></b></font></div>            </td>
            <td class="valueFont" bgcolor="#003366"> 
            <div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF">25,000</font></div>            </td>
            <td class="valueFont" bgcolor="#003366"> 
            <div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF">30,000</font></div>            </td>
            <td class="valueFont" bgcolor="#003366"> 
            <div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF">35,000</font></div>            </td>
            <td class="valueFont" bgcolor="#003366"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF">40,000</font></div></td>
            <td class="valueFont" bgcolor="#003366"> 
            <div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF">45,000</font></div>            </td>
          <tr> 
            <td  class="ColorwayFont" bgcolor="#999999" width="129"> 
              <div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">4/4 
            - Flood UV</font></b></font></div>            </td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$2,325.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$2,775.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$3,220.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$3,660.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$4,095.00</font></td>
          </tr>
          <tr> 
            <td  class="ColorwayFont" bgcolor="#999999" width="129"> 
              <div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">4/4 
            - Spot UV</font></b></font></div>            </td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$2,345.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$2,795.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$3,240.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$3,680.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$4,115.00</font></td>
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