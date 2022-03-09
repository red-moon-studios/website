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
    <TD colspan="22"><a href="home.php"><img src="../images/brokerhome2.jpg" width="102" height="23" border="0"></a><img src="../images/spacer.gif" width="25" height="23"><a href="printing.php"><img src="../images/pricing.jpg" width="58" height="23" border="0"></a><img src="../images/spacer.gif" width="25" height="23"><a href="recorders.php"><img src="../images/orders.jpg" width="58" height="23" border="0"></a><a href="userview.php"></a><img src="../images/spacer.gif" width="25" height="23"><a href="userview.php"><img src="../images/profile.jpg" width="58" height="23" border="0"></a><img src="../images/spacer.gif" width="25" height="23"><a href="logout.php"><img src="../images/logout.jpg" width="58" height="23" border="0"></a><img src="../images/spacer.gif" width="25" height="23"><a href="order.php"><img src="../images/ordernow.jpg" width="102" height="23" border="0"></a></TD>
    <TD> <IMG SRC="../images/spacer.gif" WIDTH=1 HEIGHT=23 ALT=""></TD>
  </TR>
  <TR> 
    <TD COLSPAN=22 ROWSPAN=4 valign="top" background="recorders.php"><p><br>
      
          <font size="2" face="Verdana, Arial, Helvetica, sans-serif"><B>Welcome, <?php echo $info['contact']?> from <?php echo $info['company']?></B></font><br>
        <font size="2" face="Verdana, Arial, Helvetica, sans-serif">You have successfully logged in. Select an option to get prices, review orders or update your account.</font><br>
        <br>
        <font size="2" face="Verdana, Arial, Helvetica, sans-serif">Need to re-upload your artwork? <a href="orderconf.php">Click here</a></font> 
      <hr>
		    <strong><font size="3" face="Verdana, Arial, Helvetica, sans-serif">		    Pending Orders</font></strong><br>
		    <font size="2" face="Verdana, Arial, Helvetica, sans-serif">Click on the Order Number for more detailed information about your order.</font><br>
		    <?
@mysql_connect("localhost", "redmoons_broker", "8hSVGSlkcMcu") or die(mysql_error()); 
mysql_select_db("redmoons_broker") or die(mysql_error()); 
$matches = mysql_query("SELECT * FROM orders WHERE username = '$username' AND orders.jobstatus NOT LIKE '%Completed%' ORDER BY orders.orderid ASC")or die(mysql_error());
while ($row = mysql_fetch_array($matches)) { 
$id = $row['orderid'] ; 
$ad_jobname = $row['jobname'] ; 
$ad_status = $row['jobstatus'] ;
$ad_prodtype = $row['prodtype'] ;
$ad_prodqty = $row['prodqty'] ;
$ad_date= $row['updatedate'] ;
$display_block .= " 
        <tr>
          <td bgcolor=#999999><font color=\"#000000\" size=\"2\" face=\"Verdana\"><B><a href=\"orderdetail.php?orderid=$id\">$id</a></B></td>
          <td bgcolor=#999999><font color=\"#000000\" size=\"2\" face=\"Verdana\">$ad_jobname</font></td>
          <td bgcolor=#999999><font color=\"#000000\" size=\"2\" face=\"Verdana\">$ad_prodtype</font></td>
          <td bgcolor=#999999><font color=\"#000000\" size=\"2\" face=\"Verdana\">$ad_prodqty</font></td>
          <td bgcolor=#999999><font color=\"#000000\" size=\"2\" face=\"Verdana\">$ad_date</font></td>
          <td bgcolor=#999999><font color=\"#000000\" size=\"2\" face=\"Verdana\"><a href=$ad_status target=\"_new\">Check Status Live</a></font></td>
        </tr>";
}
mysql_close();
?> 
        </p>
      </blockquote>
      <table width="799" border="0" align="center" cellpadding="3" cellspacing="1">
        <tr>
          <td width="70" bgcolor="#003366"><strong><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif"><span class="style4">Order</span></font></strong></td>
            <td bgcolor="#003366"><strong><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif"><span class="style4">Job Name</span></font></strong></td>
            <td bgcolor="#003366"><strong><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif"><span class="style4">Product Type</span></font></strong></td>
            <td bgcolor="#003366"><strong><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif"><span class="style4">Quantity</span></font></strong></td>
            <td bgcolor="#003366"><strong><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif"><span class="style4">Last Update</span></font></strong></td>
            <td bgcolor="#003366"><strong><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif"><span class="style4">Order Status</span></font></strong></td>
        </tr>
  <? //open a php block to populate the table 
echo "$display_block" ; 
//close the php block and then the table 
?> 
      </table>      
      <p><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><b><font size="3">Last 5 Completed Orders</font></b></font><br>
        <font size="2" face="Verdana, Arial, Helvetica, sans-serif">Click on the Order Number for more detailed information about your order.<br>
        <a href="recorders.php">Click here to view your last 50 orders.</a> <br>
        </font>
        <?
@mysql_connect("localhost", "redmoons_broker", "8hSVGSlkcMcu") or die(mysql_error()); 
mysql_select_db("redmoons_broker") or die(mysql_error()); 
$matches1 = mysql_query("SELECT * FROM orders WHERE username = '$username' AND orders.jobstatus LIKE '%Completed%' ORDER BY orders.orderid DESC LIMIT 0,5")or die(mysql_error());
while ($row1 = mysql_fetch_array($matches1)) { 
$id1 = $row1['orderid'] ; 
$ad_jobname1 = $row1['jobname'] ; 
$ad_update1 = $row1['updatedate'] ;
$ad_prodtype1 = $row1['prodtype'] ;
$ad_date1 = $row1['updatedate'] ;
$ad_tracking1 = $row1['trackingnum'] ;
$ad_fedex1 = $row1['fedex'] ;
$display_block1 .= " 
        <tr>
          <td bgcolor=#999999><font color=\"#000000\" size=\"2\" face=\"Verdana\"><B><a href=\"orderdetail.php?orderid=$id1\">$id1</a></B></font></td>
          <td bgcolor=#999999><font color=\"#000000\" size=\"2\" face=\"Verdana\">$ad_jobname1</font></td>
          <td bgcolor=#999999><font color=\"#000000\" size=\"2\" face=\"Verdana\">$ad_prodtype1</font></td>
          <td bgcolor=#999999><font color=\"#000000\" size=\"2\" face=\"Verdana\">$ad_date1</font></td>
          <td bgcolor=#999999><font color=\"#000000\" size=\"2\" face=\"Verdana\"><a href=\"http://wwwapps.ups.com/WebTracking/processInputRequest?sort_by=status&tracknums_displayed=1&TypeOfInquiryNumber=T&loc=en_US&InquiryNumber1=$ad_tracking1&track.x=0&track.y=0\" target=\"_new\">$ad_tracking1</a><a href=\"http://www.fedex.com/Tracking?language=english&cntry_code=us&tracknumbers=$ad_fedex1\" target=\"_new\">$ad_fedex1</a></font></td>
        </tr>";
}
mysql_close();
?> 
      </p>
        <table width="799" border="0" align="center" cellpadding="3" cellspacing="1">
        <tr>
          <td width="70" bgcolor="#003366"><strong><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif"><span class="style4">Order</span></font></strong></td>
            <td bgcolor="#003366"><strong><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif"><span class="style4">Job Name</span></font></strong></td>
            <td bgcolor="#003366"><strong><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif"><span class="style4">Product Type</span></font></strong></td>
            <td bgcolor="#003366"><strong><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif"><span class="style4">Completed Date</span></font></strong></td>
            <td bgcolor="#003366"><strong><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif"><span class="style4">Tracking Number</span></font></strong></td>
        </tr>
  <? //open a php block to populate the table 
echo "$display_block1" ; 
//close the php block and then the table 
?> 
      </table>    <hr>
    <font size="2" face="Verdana, Arial, Helvetica, sans-serif">For sales or technical assistance please e-mail <a href="mailto:broker@redmoonstudios.net">broker@redmoonstudios.net</a></font></TD>
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