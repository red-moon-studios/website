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
<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	width:330px;
	height:35px;
	z-index:1;
	left: 274px;
	top: 910px;
}
-->
</style>
      <link href="../CSS/Level2_Verdana_Forms.css" rel="stylesheet" type="text/css" />
<blockquote> 
        <p>
          <font face="Verdana, Arial, Helvetica, sans-serif" size="2"><b><font size="3">Broker 
          Printing Price Guide</font></b></font><br>
          <font face="Verdana, Arial, Helvetica, sans-serif" size="2">Click on 
          the corresponding item to find detailed pricing.<br>
          Use the Order Now button for information on how to submit a 
          job to Red Moon Studios.</font></p>
</blockquote>
      <table width="100%" border="0" height="100%" cellpadding="5" cellspacing="5" align="center">
        <tr> 
          <td> 
            <div align="center"><a href="printing.php?product=bc"><img src="../images/bcicon.jpg" width="360" height="80" border="0"></a></div>          </td>
          <td> 
            <div align="center"><a href="printing.php?product=fl"><img src="../images/flyericon.jpg" width="360" height="80" border="0"></a></div>          </td>
        </tr>
        <tr> 
          <td> 
            <div align="center"><a href="printing.php?product=ps"><img src="../images/postericon.jpg" width="360" height="80" border="0"></a></div>          </td>
          <td> 
            <div align="center"><a href="printing.php?product=sh"><img src="../images/sheetsicon.jpg" width="360" height="80" border="0"></a></div>          </td>
        </tr>
        <tr> 
          <td> 
            <div align="center"><a href="printing.php?product=ct"><img src="../images/catalogicon.jpg" width="360" height="80" border="0"></a></div>          </td>
          <td> 
            <div align="center"><a href="printing.php?product=fp"><img src="../images/foldedicon.jpg" width="360" height="80" border="0"></a></div>          </td>
        </tr>
        <tr> 
          <td> 
            <div align="center"><a href="printing.php?product=pf"><img src="../images/foldericon.jpg" width="360" height="80" border="0"></a></div>          </td>
          <td> 
            <div align="center"><a href="printing.php?product=dc"><img src="../images/diecuticon.jpg" width="360" height="80" border="0"></a></div>          </td>
        </tr>
        <tr> 
          <td> 
            <div align="center"><a href="printing.php?product=lh"><img src="../images/stationaryicon.jpg" width="360" height="80" border="0"></a></div>          </td>
          <td><div align="center"><a href="printing.php?product=lg"><img src="../images/lrgformicon.jpg" width="360" height="80" border="0"></a></div></td>
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