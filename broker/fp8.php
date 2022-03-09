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
    <font face="Verdana, Arial, Helvetica, sans-serif" size="2"><b><font size="3"><img src="../images/foldedicon.jpg" width="360" height="80"></font></b></font></p>
        <p><font size="3" face="Arial, Helvetica, sans-serif"><strong><font face="Verdana, Arial, Helvetica, sans-serif">11&quot; x 17 &quot; Right Angle (1/4) Fold <br />
        100# Gloss Book </font></strong></font><font face="Verdana, Arial, Helvetica, sans-serif"><br />
        <font size="2">Folded products are printed on 100# Gloss Book, after   printing they are then folded to meet your requirements. This 11x17, is basically folded in 1/2 and then in half again. Folding down to a   8.5&quot;x5.5&quot; (1/2 page) folded product. This is called a right angle fold, or 1/4   fold. This 8 panel product is printed on 100lb gloss book. It's important to   submit a folded mockup with the data files to assure proper front panel to back   panel folding. Please add bleed only to the exterior (outside edges) of this   printed product.</font></font></p>
        <table width="75%" border="0" align="center" cellpadding="3" cellspacing="1">
          <tr> 
            <td class="ColorwayFont" bgcolor="#999999" width="130" > 
            <div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">Colorway</font></b></font></div>            </td>
            <td bgcolor="#003366" class="expressFont"> 
            <div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF">500</font></div>            </td>
            <td bgcolor="#003366" class="valueFont"> 
            <div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF">1,000</font></div>            </td>
            <td bgcolor="#003366" class="valueFont"> 
            <div align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="1" color="#FFFFFF">2,500</font></div>            </td>
            <td bgcolor="#003366" class="valueFont"> 
            <div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF">5,000</font></div>            </td>
            <td bgcolor="#003366" class="valueFont"> 
            <div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF">10,000</font></div>            </td>
          
          <tr>
            <td  class="ColorwayFont" bgcolor="#999999"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">4/4</font></b></font></div></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$419.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$453.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$618.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$856.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$1,339.00</font></td>
          </tr>
          <tr>
            <td class="ColorwayFont" bgcolor="#999999" ><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">Colorway</font></b></font></div></td>
            <td bgcolor="#003366" class="expressFont"><div align="center"><font color="#FFFFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif">20,000</font></div></td>
            <td bgcolor="#003366" class="valueFont"><div align="center"><font color="#FFFFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif">30,000</font></div></td>
            <td bgcolor="#003366" class="valueFont"><div align="center"></div></td>
            <td bgcolor="#003366" class="valueFont"><div align="center"></div></td>
            <td bgcolor="#003366" class="valueFont"><div align="center"></div></td>
          </tr>
          <tr>
            <td  class="ColorwayFont" bgcolor="#999999"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">4/4</font></b></font></div></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$2,623.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$3,945.00</font></td>
            <td  class="PriceFont">&nbsp;</td>
            <td  class="PriceFont">&nbsp;</td>
            <td  class="PriceFont">&nbsp;</td>
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