<?php 
// Connects to your Database 
@mysql_connect("localhost", "redmoons_broker", "8hSVGSlkcMcu") or die(mysql_error()); 
mysql_select_db("redmoons_broker") or die(mysql_error()); 
$data = mysql_query("SELECT * FROM users")or die(mysql_error());
$info = mysql_fetch_array( $data );

//checks cookies to make sure they are logged in 
if(isset($_COOKIE['ID_my_site'])) 
{ 
$username = $_COOKIE['ID_my_site']; 
$pass = $_COOKIE['Key_my_site']; 
$check = mysql_query("SELECT * FROM users WHERE username = '$username'")or die(mysql_error());
while($info = mysql_fetch_array( $check )) 
{ 

//if the cookie has the wrong password, they are taken to the login page 
if ($pass != $info['password']) 
{ header("Location: index.php"); 
} 

//otherwise they are shown the admin area 
else { 
mysql_close();
?>

<HTML>
<HEAD>
<TITLE>:: Red Moon Studios, Inc. - Graphic Design, Custom Web Work, Printing, Marketing and Consulting ::</TITLE>
<meta name="ICBM" content="32.79643, -117.24090">
<meta name="DC.title" content="Red Moon Studios, Inc. - Graphic Design, Custom Web Work, Printing, Marketing and Consulting">
<META name="description" contents="Red Moon Studios offers full service printing and design solutions. Our specialty is full color UV coated printed material, but we have the ability to print on almost any paper with any ink or coating. Our full service design staff can help you gain the exposure your company needs to succeed.">
<META name="keywords" content="design,printing,consulting,advertising,marketing,gang runs,full color press,full color printing,graphic design,web design,print broker,print,commercial printing,web press,offset printing,bar code printing,book printing,brochure printing,business card printing,catalog printing,cd printing,check printing,check printing software,commercial printing,custom web design,custom web site design,design,digital photo printing,digital printing,ecommerce web site design,government printing office,graphic design,logo design,offset printing,post card printing,poster printing,printing,printing company,printing job,printing photo,printing press,printing service,printing services,screen printing,screen printing equipment,t shirt printing,web design,web page design,web site design">
<meta name="Robots" content="ALL">
<meta name="rating" content="general">
<meta name="owner" content="sales@redmoonstudios.net">
<meta name="Revisit-after" content="15 days">
<link href="../CSS/Level2_Verdana_Forms.css" rel="stylesheet" type="text/css">
</HEAD>
<BODY BGCOLOR=#FFFFFF LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0 text="#000000" link="#993333" vlink="#993333" alink="#993333" background="../images/watermark.jpg">

<TABLE WIDTH=800 BORDER=0 CELLPADDING=0 CELLSPACING=0 align="center">
  <TR> 
    <TD COLSPAN=3> <IMG SRC="../images/index_01.jpg" WIDTH=121 HEIGHT=25 ALT=""></TD>
    <TD COLSPAN=12> <IMG SRC="../images/spacer.gif" WIDTH=427 HEIGHT=25 ALT=""></TD>
    <TD COLSPAN=7> <img border="0" src="../images/index_03.jpg" width="252" height="25"></TD>
    <TD> <IMG SRC="../images/spacer.gif" WIDTH=1 HEIGHT=25 ALT=""></TD>
  </TR>
  <TR> 
    <TD COLSPAN=7 ROWSPAN=2> <IMG SRC="../images/index_04.jpg" WIDTH=201 HEIGHT=73 ALT=""></TD>
    <TD COLSPAN=10> <IMG SRC="../images/index_05.jpg" WIDTH=363 HEIGHT=20 ALT=""></TD>
    <TD COLSPAN=2 ROWSPAN=2> <img border="0" src="../images/index_06.jpg" width="117" height="73"></TD>
    <TD COLSPAN=3 ROWSPAN=2> <img border="0" src="../images/index_07.jpg" width="119" height="73"></TD>
    <TD> <IMG SRC="../images/spacer.gif" WIDTH=1 HEIGHT=20 ALT=""></TD>
  </TR>
  <TR> 
    <TD COLSPAN=2> <IMG SRC="../images/index_08.jpg" WIDTH=64 HEIGHT=53 ALT=""></TD>
    <TD COLSPAN=3> <IMG SRC="../images/index_09.jpg" WIDTH=154 HEIGHT=53 ALT=""></TD>
    <TD COLSPAN=5> <IMG SRC="../images/index_10.jpg" WIDTH=145 HEIGHT=53 ALT=""></TD>
    <TD> <IMG SRC="../images/spacer.gif" WIDTH=1 HEIGHT=53 ALT=""></TD>
  </TR>
  <TR> 
    <TD COLSPAN=4> <IMG SRC="../images/index_11.jpg" WIDTH=132 HEIGHT=69 ALT=""></TD>
    <TD COLSPAN=5> <IMG SRC="../images/index_12.jpg" WIDTH=133 HEIGHT=69 ALT=""></TD>
    <TD COLSPAN=3> <IMG SRC="../images/index_13.jpg" WIDTH=154 HEIGHT=69 ALT=""></TD>
    <TD COLSPAN=5> <IMG SRC="../images/index_14.jpg" WIDTH=145 HEIGHT=69 ALT=""></TD>
    <TD COLSPAN=2> <IMG SRC="../images/index_15.jpg" WIDTH=117 HEIGHT=69 ALT=""></TD>
    <TD COLSPAN=3> <IMG SRC="../images/index_16.jpg" WIDTH=119 HEIGHT=69 ALT=""></TD>
    <TD> <IMG SRC="../images/spacer.gif" WIDTH=1 HEIGHT=69 ALT=""></TD>
  </TR>
  <TR> 
    <TD colspan="22"><a href="../index.htm"></a><a href="home.php"><img src="../images/brokerhome2.jpg" width="102" height="23" border="0"></a><img src="../images/spacer.gif" width="25" height="23"><a href="printing.php"><img src="../images/pricing.jpg" width="58" height="23" border="0"></a><img src="../images/spacer.gif" width="25" height="23"><a href="recorders.php"><img src="../images/orders.jpg" width="58" height="23" border="0"></a><a href="userview.php"></a><img src="../images/spacer.gif" width="25" height="23"><a href="userview.php"><img src="../images/profile.jpg" width="58" height="23" border="0"></a><img src="../images/spacer.gif" width="25" height="23"><a href="logout.php"><img src="../images/logout.jpg" width="58" height="23" border="0"></a><img src="../images/spacer.gif" width="25" height="23"><a href="order.php"><img src="../images/ordernow.jpg" width="102" height="23" border="0"></a><a href="logout.php"></a></TD>
    <TD> <IMG SRC="../images/spacer.gif" WIDTH=1 HEIGHT=23 ALT=""></TD>
  </TR>
  <TR> 
    <TD COLSPAN=22 ROWSPAN=4 valign="top"><blockquote>
      <p><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><br>
          <b><font size="3">Print Broker - Account Management </font></b>
          <br>
        Keep us up to date with your latest contact information. </font></p>
      <p><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><a href="pwchange.php">Click here to change your password.</a></font></p>
    </blockquote>      
      <form action="useredit.php" method="post" name="useredit" id="useredit">
        <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
          <tr>
            <td width="40%" bgcolor="#003366" class="small"><div align="right"><strong><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif">Company Name: </font></strong></div></td>
            <td bgcolor="#999999" class="small"><div align="left"><font color="#FFFFFF"><font face="Verdana, Arial, Helvetica, sans-serif"><font size="2"><font color="#FFFFFF"><font face="Verdana, Arial, Helvetica, sans-serif"><font size="2"></font></font></font></font></font></font>
              <input name="company1" type="text" class="small" value="<?php echo $info['company']?>" size="30">
            </div></td>
          </tr>
          <tr>
            <td width="40%" bgcolor="#003366" class="small"><div align="right"><strong><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif">Company Contact: </font></strong></div></td>
            <td bgcolor="#999999" class="small"><div align="left"><font color="#FFFFFF"><font face="Verdana, Arial, Helvetica, sans-serif"><font size="2"><font color="#FFFFFF"><font face="Verdana, Arial, Helvetica, sans-serif"><font size="2"></font></font></font></font></font></font>
              <input name="contact1" type="text" class="small" value="<?php echo $info['contact']?>" size="30">
            </div></td>
          </tr>
          <tr>
            <td width="40%" bgcolor="#003366" class="small"><div align="right"><strong><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif">E-Mail Address: </font></strong></div></td>
            <td bgcolor="#999999" class="small"><div align="left"><font color="#FFFFFF"><font face="Verdana, Arial, Helvetica, sans-serif"><font size="2"><font color="#FFFFFF"><font face="Verdana, Arial, Helvetica, sans-serif"><font size="2"></font></font></font></font></font></font>
              <input name="email1" type="text" class="small" value="<?php echo $info['email']?>" size="30">
            </div></td>
          </tr>
          <tr>
            <td width="40%" bgcolor="#003366" class="small"><div align="right"><strong><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif">Phone Number: </font></strong></div></td>
            <td bgcolor="#999999" class="small"><div align="left"><font color="#FFFFFF"><font face="Verdana, Arial, Helvetica, sans-serif"><font size="2"><font color="#FFFFFF"><font face="Verdana, Arial, Helvetica, sans-serif"><font size="2"></font></font></font></font></font></font>
              <input name="phone1" type="text" class="small" value="<?php echo $info['phone']?>" size="30">
            </div></td>
          </tr>
          <tr>
            <td width="40%" bgcolor="#003366" class="small"><div align="right"><strong><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif">Address:</font></strong></div></td>
            <td bgcolor="#999999" class="small"><div align="left"><font color="#FFFFFF"><font face="Verdana, Arial, Helvetica, sans-serif"><font size="2"><font color="#FFFFFF"><font face="Verdana, Arial, Helvetica, sans-serif"><font size="2"></font></font></font></font></font></font>
              <input name="address11" type="text" class="small" value="<?php echo $info['address1']?>" size="30">
            </div></td>
          </tr>
          <tr>
            <td width="40%" bgcolor="#003366" class="small"><div align="right"><strong><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif">Address (con't): </font></strong></div></td>
            <td bgcolor="#999999" class="small"><div align="left"><font color="#FFFFFF"><font face="Verdana, Arial, Helvetica, sans-serif"><font size="2"><font color="#FFFFFF"><font face="Verdana, Arial, Helvetica, sans-serif"><font size="2"></font></font></font></font></font></font>
              <input name="address21" type="text" class="small" value="<?php echo $info['address2']?>" size="30">
            </div></td>
          </tr>
          <tr>
            <td width="40%" bgcolor="#003366" class="small"><div align="right"><strong><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif">City:</font></strong></div></td>
            <td bgcolor="#999999" class="small"><div align="left"><font color="#FFFFFF"><font face="Verdana, Arial, Helvetica, sans-serif"><font size="2"><font color="#FFFFFF"><font face="Verdana, Arial, Helvetica, sans-serif"><font size="2"></font></font></font></font></font></font>
              <input name="city1" type="text" class="small" value="<?php echo $info['city']?>" size="30">
            </div></td>
          </tr>
          <tr>
            <td width="40%" bgcolor="#003366" class="small"><div align="right"><strong><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif">State:</font></strong></div></td>
            <td bgcolor="#999999" class="small"><div align="left"><font color="#FFFFFF"><font face="Verdana, Arial, Helvetica, sans-serif"><font size="2"><font color="#FFFFFF"><font face="Verdana, Arial, Helvetica, sans-serif"><font size="2"></font></font></font></font></font></font>
              <INPUT NAME="state1" TYPE="text" class="small" id="BillingState" value="<?php echo $info['state']?>" SIZE="2" maxlength="2">
            </div></td>
          </tr>
          <tr>
            <td bgcolor="#003366" class="small"><div align="right"><strong><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif">Zip-Code:</font></strong></div></td>
            <td bgcolor="#999999" class="small"><div align="left"><font color="#FFFFFF"><font face="Verdana, Arial, Helvetica, sans-serif"><font size="2"><font color="#FFFFFF"><font face="Verdana, Arial, Helvetica, sans-serif"><font size="2"></font></font></font></font></font></font>
              <INPUT NAME="zip1" TYPE="text" class="small" value="<?php echo $info['zip']?>" SIZE="10">
            </div></td>
          </tr>
          <tr>
            <td colspan="2" class="small"><div align="center">
              <label>
              <input type="hidden" name="ud_id" value="<?php echo $info['ID']?>">
              <input name="Submit" type="submit" class="small" value="Update">
              </label>
            </div></td>
          </tr>
        </table>
      </form>
    <TD> <IMG SRC="../images/spacer.gif" WIDTH=1 HEIGHT=50 ALT=""></TD>
  </TR>
  <TR> 
    <TD> <IMG SRC="../images/spacer.gif" WIDTH=1 HEIGHT=158 ALT=""></TD>
  </TR>
  <TR> 
    <TD> <IMG SRC="../images/spacer.gif" WIDTH=1 HEIGHT=159 ALT=""></TD>
  </TR>
  <TR> 
    <TD> <IMG SRC="../images/spacer.gif" WIDTH=1 HEIGHT=166 ALT=""></TD>
  </TR>
  <TR> 
    <TD COLSPAN=2 ROWSPAN=3> <IMG SRC="../images/index_35.jpg" WIDTH=89 HEIGHT=56 ALT=""></TD>
    <TD COLSPAN=20>&nbsp; </TD>
    <TD> <IMG SRC="../images/spacer.gif" WIDTH=1 HEIGHT=21 ALT=""></TD>
  </TR>
  <TR> 
    <TD COLSPAN=17 BGCOLOR=#FB0000> <font face="Verdana, Arial, Helvetica, sans-serif" size="1" color="#FFFFFF">&copy; 
      Copyright 2013 - All Rights Reserved<br>
      Red Moon Studios, L.L.C. :: San Diego, CA 92109</font></TD>
    <TD> <IMG SRC="../images/index_38.jpg" WIDTH=90 HEIGHT=31 ALT=""></TD>
    <TD COLSPAN=2 BGCOLOR=#FB0000> <IMG SRC="../images/spacer.gif" WIDTH=29 HEIGHT=31 ALT=""></TD>
    <TD> <IMG SRC="../images/spacer.gif" WIDTH=1 HEIGHT=31 ALT=""></TD>
  </TR>
  <TR> 
    <TD COLSPAN=17 ROWSPAN=2>&nbsp; </TD>
    <TD COLSPAN=3 ROWSPAN=2> <IMG SRC="../images/index_41.jpg" WIDTH=119 HEIGHT=25 ALT=""></TD>
    <TD> <IMG SRC="../images/spacer.gif" WIDTH=1 HEIGHT=4 ALT=""></TD>
  </TR>
  <TR> 
    <TD COLSPAN=2> <IMG SRC="../images/spacer.gif" WIDTH=89 HEIGHT=21 ALT=""></TD>
    <TD> <IMG SRC="../images/spacer.gif" WIDTH=1 HEIGHT=21 ALT=""></TD>
  </TR>
  <TR> 
    <TD> <IMG SRC="../images/spacer.gif" WIDTH=73 HEIGHT=1 ALT=""></TD>
    <TD> <IMG SRC="../images/spacer.gif" WIDTH=16 HEIGHT=1 ALT=""></TD>
    <TD> <IMG SRC="../images/spacer.gif" WIDTH=32 HEIGHT=1 ALT=""></TD>
    <TD> <IMG SRC="../images/spacer.gif" WIDTH=11 HEIGHT=1 ALT=""></TD>
    <TD> <IMG SRC="../images/spacer.gif" WIDTH=29 HEIGHT=1 ALT=""></TD>
    <TD> <IMG SRC="../images/spacer.gif" WIDTH=24 HEIGHT=1 ALT=""></TD>
    <TD> <IMG SRC="../images/spacer.gif" WIDTH=16 HEIGHT=1 ALT=""></TD>
    <TD> <IMG SRC="../images/spacer.gif" WIDTH=36 HEIGHT=1 ALT=""></TD>
    <TD> <IMG SRC="../images/spacer.gif" WIDTH=28 HEIGHT=1 ALT=""></TD>
    <TD> <IMG SRC="../images/spacer.gif" WIDTH=73 HEIGHT=1 ALT=""></TD>
    <TD> <IMG SRC="../images/spacer.gif" WIDTH=27 HEIGHT=1 ALT=""></TD>
    <TD> <IMG SRC="../images/spacer.gif" WIDTH=54 HEIGHT=1 ALT=""></TD>
    <TD> <IMG SRC="../images/spacer.gif" WIDTH=26 HEIGHT=1 ALT=""></TD>
    <TD> <IMG SRC="../images/spacer.gif" WIDTH=23 HEIGHT=1 ALT=""></TD>
    <TD> <IMG SRC="../images/spacer.gif" WIDTH=80 HEIGHT=1 ALT=""></TD>
    <TD> <IMG SRC="../images/spacer.gif" WIDTH=3 HEIGHT=1 ALT=""></TD>
    <TD> <IMG SRC="../images/spacer.gif" WIDTH=13 HEIGHT=1 ALT=""></TD>
    <TD> <IMG SRC="../images/spacer.gif" WIDTH=3 HEIGHT=1 ALT=""></TD>
    <TD> <IMG SRC="../images/spacer.gif" WIDTH=114 HEIGHT=1 ALT=""></TD>
    <TD> <IMG SRC="../images/spacer.gif" WIDTH=90 HEIGHT=1 ALT=""></TD>
    <TD> <IMG SRC="../images/spacer.gif" WIDTH=19 HEIGHT=1 ALT=""></TD>
    <TD> <IMG SRC="../images/spacer.gif" WIDTH=10 HEIGHT=1 ALT=""></TD>
    <TD></TD>
  </TR>
</TABLE>
</BODY>
</HTML>

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