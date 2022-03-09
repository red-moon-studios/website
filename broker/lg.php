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
    <font face="Verdana, Arial, Helvetica, sans-serif" size="2"><b><font size="3"><img src="../images/lrgformicon.jpg" width="360" height="80"></font></b></font></p>
        <table width="75%" border="0" align="center" cellpadding="3" cellspacing="1">
          <tr> 
            <td class="ColorwayFont" bgcolor="#999999" width="130" > 
            <div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">Stock</font></b></font></div>            </td>
            <td bgcolor="#003366" class="expressFont"> 
            <div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF">4/0 - Per Sq Foot </font></div>            </td>
          <tr>
            <td  class="ColorwayFont" bgcolor="#999999"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">13oz Scrim Vinyl<br />
            </font></b><font color="#FFFFFF">Perfect for Outdoors<br />
            Up to 150' Wide </font></font></div></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$3.00</font></td>
          </tr>
          <tr> 
            <td  class="ColorwayFont" bgcolor="#999999" width="130"> 
            <div align="center">
              <p><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">8mil Photo Gloss<br />
              </font></b><font color="#FFFFFF">Perfect Short Run Poster<br />
              Up to 96' Wide </font></font></p>
              </div>            </td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$4.00</font></td>
          </tr>
          <tr>
            <td  class="ColorwayFont" bgcolor="#999999"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">10mil Premium Vinyl<br />
            </font></b><font color="#FFFFFF">Perfect for Indoors<br />
            Up to 100' Wide </font></font></div></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$4.50</font></td>
          </tr>
          <tr> 
            <td  class="ColorwayFont" bgcolor="#999999" width="130"> 
            <div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">PVC Mesh Vinyl
            </font></b></font></div>            </td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$4.75</font></td>
          </tr><tr> 
            <td  class="ColorwayFont" bgcolor="#999999" width="130"> 
            <div align="center"><b><font color="#FFFFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif">3M Adhesive<br />
            </font></b><font color="#FFFFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif">Good for Vehicle Wraps</font> </div>            </td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$5.75</font></td>
          </tr>
  </table>
        <br />
        <table width="75%" border="0" align="center" cellpadding="3" cellspacing="1">
          <tr>
            <td class="ColorwayFont" bgcolor="#999999" width="154" ><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">Stock</font></b></font></div></td>
            <td width="488" bgcolor="#003366" class="expressFont"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF">4/0 or 4/4 - Per Sq Foot </font></div></td>
          </tr>
          <tr>
            <td width="154" align="center" bgcolor="#999999"  class="ColorwayFont"><div align="center"><b><font color="#FFFFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif">Coloplast - 4mm White<br />
            </font></b><font color="#FFFFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif">Perfect Real Estate Signs<br />
            Up to 8' Wide </font></div></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$2.75 (5 unit min.) </font></td>
          </tr>
          <tr>
            <td align="center" bgcolor="#999999"  class="ColorwayFont"><div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF">Foamcore - 3/16in. White<br />
            </font></b><font color="#FFFFFF">Up to 8' Wide</font> </font></div></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$5.00 (5 unit min.) </font></td>
          </tr>
          <tr>
            <td align="center" bgcolor="#999999"  class="ColorwayFont"><div align="center"><b><font color="#FFFFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif">Foamcore - 3/8in. White<br />
            </font></b><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><font color="#FFFFFF">Up to 8' Wide</font></font> </div></td>
            <td  class="PriceFont"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">$9.00 (5 unit min.) </font></td>
          </tr>
        </table>
        <p>&nbsp;</p>
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
