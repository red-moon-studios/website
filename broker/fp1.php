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
        <p><font size="3" face="Arial, Helvetica, sans-serif"><strong><font face="Verdana, Arial, Helvetica, sans-serif">5.5&quot; x 8.5&quot; Bi-Fold <br />
        100# Gloss Book </font></strong></font><font face="Verdana, Arial, Helvetica, sans-serif"><br />
        <font size="2">Folded products are printed on 100# Gloss Book, after   printing they are then folded to meet your requirements. A very popular promotional brochure. This 4 page brochure is an 8.5x5.5 folded   in half along the 5.5&quot; side. This bi-fold is printed on 100lb gloss book. Each   panel should be 4.25x5.5 - Please add bleed around all edges (.125 - 1/8&quot; OK).</font></font></p>
        <table width="75%" border="0" align="center" cellpadding="3" cellspacing="1">
          <tr> 
            <td class="ColorwayFont" bgcolor="#999999" width="130" > 
            <div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">Colorway</font></b></font></div>            </td>
            <td bgcolor="#003366" class="valueFont"><div align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="1" color="#FFFFFF">500</font></div></td>
            <td bgcolor="#003366" class="valueFont"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF">1,000</font></div></td>
            <td bgcolor="#003366" class="valueFont"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF">2,500</font></div></td>
            <td bgcolor="#003366" class="expressFont"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF">5,000</font></div></td>
          <td bgcolor="#003366" class="valueFont"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF">10,000</font></div></td>          
          <tr>
            <td  class="ColorwayFont" bgcolor="#999999"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">4/4</font></b></font></div></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$149.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$170.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$223.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$365.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$507.00</font></td>
          </tr>
          <tr>
            <td class="ColorwayFont" bgcolor="#999999" ><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">Colorway</font></b></font></div></td>
            <td bgcolor="#003366" class="valueFont"><div align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="1" color="#FFFFFF">20,000</font></div></td>
            <td bgcolor="#003366" class="valueFont"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF">30,000</font></div></td>
            <td bgcolor="#003366" class="valueFont"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF">40,000</font></div></td>
            <td bgcolor="#003366" class="valueFont">&nbsp;</td>
            <td bgcolor="#003366" class="valueFont">&nbsp;</td>
          </tr>
          <tr>
            <td  class="ColorwayFont" bgcolor="#999999"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">4/4</font></b></font></div></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$964.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$1,439.00</font></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$1,912.00</font></td>
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