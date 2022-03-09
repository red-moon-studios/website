<?php 
$username = $_COOKIE['ID_my_site']; 
$pass = $_COOKIE['Key_my_site']; 
if(isset($_COOKIE['ID_my_site']))
{ 
?>

<HTML>
<HEAD>
<TITLE>:: Red Moon Studios, Inc. - Graphic Design, Custom Web Work, Printing, Marketing and Consulting ::</TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<meta name="ICBM" content="32.79643, -117.24090">
<meta name="DC.title" content="Red Moon Studios, Inc. - Graphic Design, Custom Web Work, Printing, Marketing and Consulting">
<META name="description" contents="Red Moon Studios offers full service printing and design solutions. Our specialty is full color UV coated printed UPSmaterial, but we have the ability to print on almost any paper with any ink or coating. Our full service design staff can help you gain the exposure your company needs to succeed.">
<META name="keywords" content="design,printing,consulting,advertising,marketing,gang runs,full color press,full color printing,graphic design,web design,print broker,print,commercial printing,web press,offset printing,bar code printing,book printing,brochure printing,business card printing,catalog printing,cd printing,check printing,check printing software,commercial printing,custom web design,custom web site design,design,digital photo printing,digital printing,ecommerce web site design,government printing office,graphic design,logo design,offset printing,post card printing,poster printing,printing,printing company,printing job,printing photo,printing press,printing service,printing services,screen printing,screen printing equipment,t shirt printing,web design,web page design,web site design">
<meta name="Robots" content="ALL">
<meta name="rating" content="general">
<meta name="owner" content="sales@redmoonstudios.net">
<meta name="Revisit-after" content="15 days">
</HEAD>
<BODY BGCOLOR=#FFFFFF LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0 text="#000000" link="#993333" vlink="#993333" alink="#993333" background="../../images/watermark.jpg">
<TABLE WIDTH=800 BORDER=0 CELLPADDING=0 CELLSPACING=0 align="center"> <TR> <TD COLSPAN=3> 
<IMG SRC="../images/index_01.jpg" ALT="" width="121" height="25"></TD><TD COLSPAN=12> 
<IMG SRC="../images/spacer.gif" WIDTH=427 HEIGHT=25 ALT=""></TD><TD COLSPAN=7> <IMG SRC="../images/index_03.jpg" ALT="" width="252" height="25"></TD><TD> 
<IMG SRC="../images/spacer.gif" WIDTH=1 HEIGHT=25 ALT=""></TD></TR> <TR> <TD COLSPAN=7 ROWSPAN=2> 
<IMG SRC="../images/index_04.jpg" ALT="" width="201" height="73"></TD><TD COLSPAN=10> 
<IMG SRC="../images/index_05.jpg" ALT="" width="363" height="20"></TD><TD COLSPAN=2 ROWSPAN=2> 
<IMG SRC="../images/index_06.jpg" ALT="" width="117" height="73"></TD><TD COLSPAN=3 ROWSPAN=2> 
<IMG SRC="../images/index_07.jpg" ALT="" width="119" height="73"></TD><TD> <IMG SRC="../images/spacer.gif" WIDTH=1 HEIGHT=20 ALT=""></TD></TR> 
<TR> <TD COLSPAN=2> <IMG SRC="../images/index_08.jpg" ALT="" width="64" height="53"></TD><TD COLSPAN=3> 
<IMG SRC="../images/index_09.jpg" ALT="" width="154" height="53"></TD><TD COLSPAN=5> 
<IMG SRC="../images/index_10.jpg" ALT="" width="145" height="53"></TD><TD> <IMG SRC="../images/spacer.gif" WIDTH=1 HEIGHT=53 ALT=""></TD></TR> 
<TR> <TD COLSPAN=4> <IMG SRC="../images/index_11.jpg" ALT="" width="132" height="69"></TD><TD COLSPAN=5> 
<IMG SRC="../images/index_12.jpg" ALT="" width="133" height="69"></TD><TD COLSPAN=3> 
<IMG SRC="../images/index_13.jpg" ALT="" width="154" height="69"></TD><TD COLSPAN=5> 
<IMG SRC="../images/index_14.jpg" ALT="" width="145" height="69"></TD><TD COLSPAN=2> 
<IMG SRC="../images/index_15.jpg" ALT="" width="117" height="69"></TD><TD COLSPAN=3> 
<IMG SRC="../images/index_16.jpg" ALT="" width="119" height="69"></TD><TD> <IMG SRC="../images/spacer.gif" WIDTH=1 HEIGHT=69 ALT=""></TD></TR> 
<TR> <td colspan="22"><a href="home.php"></a><a href="home.php"><img src="../images/brokerhome2.jpg" width="102" height="23" border="0"></a><img src="../images/spacer.gif" width="25" height="23"><a href="printing.php"><img src="../images/pricing.jpg" width="58" height="23" border="0"></a><img src="../images/spacer.gif" width="25" height="23"><a href="recorders.php"><img src="../images/orders.jpg" width="58" height="23" border="0"></a><a href="userview.php"></a><img src="../images/spacer.gif" width="25" height="23"><a href="userview.php"><img src="../images/profile.jpg" width="58" height="23" border="0"></a><img src="../images/spacer.gif" width="25" height="23"><a href="logout.php"><img src="../images/logout.jpg" width="58" height="23" border="0"></a><img src="../images/spacer.gif" width="25" height="23"><a href="order.php"><img src="../images/ordernow.jpg" width="102" height="23" border="0"></a><a href="ordercustom.php"></a><a href="logout.php"></a></td>
<TD> 
<IMG SRC="../images/spacer.gif" WIDTH=1 HEIGHT=23 ALT=""></TD></TR> <TR> <TD COLSPAN=22 ROWSPAN=4 align="left" valign="top">
<?php
@mysql_connect("localhost", "redmoons_broker", "8hSVGSlkcMcu") or die(mysql_error()); 
mysql_select_db("redmoons_broker") or die(mysql_error());
$data = mysql_query("SELECT * FROM orders WHERE orderid = '".$_GET['orderid']."'") or die(mysql_error());
$info = mysql_fetch_array( $data );
mysql_close();
?>
<blockquote><br>
  <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Welcome <?php echo $info['contact']?> from <?php echo $info['company']?></font>
  <p><strong><font size="3" face="Verdana, Arial, Helvetica, sans-serif">Detailed Order Status</font></strong></p>
  <p><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Order Number:  <strong><?php echo $info['orderid']?></strong></font><br>
    <font size="2" face="Verdana, Arial, Helvetica, sans-serif">Job Name: <strong><?php echo $info['jobname']?><br>
    </strong>Order Date : <strong><?php echo $info['date']?><br>
    </strong>Last Update : <strong><?php echo $info['updatedate']?><br><br>
    </strong>Shipping From : <strong><?php echo $info['shipfrom']?><br><br>
    </strong>Job Status: <strong><?php echo $info['jobstatus']?></strong><br>
    Tracking Number: <strong><a href="http://wwwapps.ups.com/WebTracking/processInputRequest?sort_by=status&tracknums_displayed=1&TypeOfInquiryNumber=T&loc=en_US&InquiryNumber1=<?php echo $info['trackingnum']?>&track.x=0&track.y=0" target="_new"><?php echo $info['trackingnum']?></a><a href="http://www.fedex.com/Tracking?language=english&cntry_code=us&tracknumbers=<?php echo $info['fedex']?>" target="_new"><?php echo $info['fedex']?></a></strong></font></p>
  </blockquote>

      <div align="center"></div>
      <div align="center">
        <table width="799" border="0" cellpadding="3" cellspacing="1">
          <tr>
            <td colspan="2" bgcolor="#990000"><font color="#FFFFFF" size="2"><b><font face="Verdana, Arial, Helvetica, sans-serif">Shipping Address: </font> <font size="1" face="Verdana, Arial, Helvetica, sans-serif">(if different than Billing Address)</font></b></font></td>
          </tr>
          <tr>
            <td bgcolor="#003366"><div align="right"><font size="1"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">Name:</font></b></font></div></td>
            <td bgcolor="#999999" class="small"><font size="2"><font color="#000000" size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['shipname']?></font></font></td>
          </tr>
          <tr>
            <td bgcolor="#003366"><div align="right"><font size="1"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">Phone:</font></b></font></div></td>
            <td bgcolor="#999999" class="small"><font size="2"><font color="#000000" size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['shipphone']?></font></font></td>
          </tr>
          <tr>
            <td bgcolor="#003366"><div align="right"><font size="1"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">Address:</font></b></font></div></td>
            <td bgcolor="#999999" class="small"><font size="2"><font color="#000000" size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['shipaddress1']?></font></font></td>
          </tr>
          <tr>
            <td bgcolor="#003366"><div align="right"><font size="1"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">Address:</font></b></font></div></td>
            <td bgcolor="#999999" class="small"><font size="2"><font color="#000000" size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['shipaddress2']?></font></font></td>
          </tr>
          <tr>
            <td bgcolor="#003366"><div align="right"><font size="1"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">City:</font></b></font></div></td>
            <td bgcolor="#999999" class="small"><font size="2"><font color="#000000" size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['shipcity']?></font></font></td>
          </tr>
          <tr>
            <td bgcolor="#003366"><div align="right"><font size="1"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">State:</font></b></font></div></td>
            <td bgcolor="#999999" class="small"><font size="2"><font color="#000000" size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['shipstate']?></font></font></td>
          </tr>
          <tr>
            <td bgcolor="#003366"><div align="right"><font size="1"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">Zip Code: </font></b></font></div></td>
            <td bgcolor="#999999" class="small"><font size="2"><font color="#000000" size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['shipzip']?></font></font></td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="#990000"><font face="Verdana, Arial, Helvetica, sans-serif" size="1"><b><font size="2" color="#FFFFFF">Shipping Information:</font></b></font></td>
          </tr>
          <tr>
            <td width="27%" align="right" valign="top" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif">Shipping Method:</font></b></font></div></td>
            <td width="73%" align="left" valign="middle" bgcolor="#999999" class="small"><font size="2"><font color="#000000" size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['shipmethod']?></font></font></td>
          </tr>
        </table>
      </div>
      <div align="center">
        <table width="799" border="0" cellpadding="3" cellspacing="1">
          <tr>
            <td colspan="6" bgcolor="#990000"><font face="Verdana, Arial, Helvetica, sans-serif" size="1"><b><font size="2" color="#FFFFFF">Job Details: </font></b></font></td>
          </tr>
          <tr>
            <td width="27%" bgcolor="#003366"><div align="right"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF"> Product Group:</font></b></font></div></td>
            <td width="73%" colspan="5" bgcolor="#999999" class="small"><font size="2"><font color="#000000" size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['prodgroup']?></font></font></td>
          </tr>
          <tr>
            <td width="27%" bgcolor="#003366"><div align="right"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF"> Product Type:</font></b></font></div></td>
            <td colspan="5" bgcolor="#999999" class="small"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['prodtype']?></font></td>
          </tr>
          <tr>
            <td width="27%" bgcolor="#003366"><div align="right"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF"> Quantity:</font></b></font></div></td>
            <td colspan="5" bgcolor="#999999" class="small"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['prodqty']?></font></td>
          </tr>
          <tr>
            <td width="27%" bgcolor="#003366"><div align="right"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF"> Product Style:</font></b></font></div></td>
            <td colspan="5" bgcolor="#999999" class="small"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['prodstyle']?></font></td>
          </tr>
          <tr>
            <td width="27%" bgcolor="#003366"><div align="right"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF"> Job Name:</font></b></font></div></td>
            <td colspan="5" bgcolor="#999999"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
              <label><span class="small"><?php echo $info['jobname']?></span></label>
            </font></td>
          </tr>
          <tr>
            <td align="right" valign="top" bgcolor="#003366"><div align="right"><font color="#FFFFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b>Customer Instructions:</b></font></div></td>
            <td colspan="5" bgcolor="#999999"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><span class="small"><?php echo $info['comments']?></span></font></td>
          </tr>
          <tr>
            <td colspan="6" bgcolor="#990000"><font face="Verdana, Arial, Helvetica, sans-serif" size="1"><b><font size="2" color="#FFFFFF">Payment Details:</font></b></font></td>
          </tr>
          <tr>
            <td align="right" valign="top" bgcolor="#003366" class="style7"><div align="right"><b><font color="#FFFFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif">Payment Method:</font></b></div></td>
            <td colspan="5" bgcolor="#999999"><span class="small"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['paymethod']?></font></span></td>
          </tr>
          <tr>
            <td align="right" valign="top" bgcolor="#003366" class="style7"><div align="right"><b><font color="#FFFFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif">Subtotal:</font></b></div></td>
            <td colspan="5" bgcolor="#999999"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['paysubtotal']?></font></td>
          </tr>
          <tr>
            <td align="right" valign="top" bgcolor="#003366" class="style7"><div align="right"><b><font color="#FFFFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif">Shipping:</font></b></div></td>
            <td colspan="5" bgcolor="#999999"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['payship']?></font></td>
          </tr>
          <tr>
            <td align="right" valign="top" bgcolor="#003366" class="style7"><div align="right"><b><font color="#FFFFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif">Tax:</font></b></div></td>
            <td colspan="5" bgcolor="#999999"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['paytax']?></font></td>
          </tr>
          <tr>
            <td align="right" valign="top" bgcolor="#003366" class="style7"><div align="right"><b><font color="#FFFFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif">Total Charged:</font></b></div></td>
            <td colspan="5" bgcolor="#999999"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['paytotal']?></font></td>
          </tr>
        </table>
        <br>
      </div>
      </TD>
<TD> 
<IMG SRC="../images/spacer.gif" WIDTH=1 HEIGHT=50 ALT=""></TD></TR> <TR> <TD> <IMG SRC="../images/spacer.gif" WIDTH=1 HEIGHT=158 ALT=""></TD></TR> 
<TR> <TD> <IMG SRC="../images/spacer.gif" WIDTH=1 HEIGHT=159 ALT=""></TD></TR> <TR> 
<TD></TD></TR> <TR> <TD COLSPAN=2 ROWSPAN=3> <IMG SRC="../images/index_35.jpg" ALT="" width="89" height="56"></TD><TD COLSPAN=20>
</TD><TD> <IMG SRC="../images/spacer.gif" WIDTH=1 HEIGHT=21 ALT=""></TD></TR> <TR> 
<TD COLSPAN=17 BGCOLOR=#FB0000> <font face="Verdana, Arial, Helvetica, sans-serif" size="1" color="#FFFFFF">&copy; 
Copyright 2013 - All Rights Reserved<br> Red Moon Studios, L.L.C. :: San Diego, 
CA 92109</font></TD><TD> <IMG SRC="../images/index_38.jpg" ALT="" width="90" height="31"></TD><TD COLSPAN=2 BGCOLOR=#FB0000> 
<IMG SRC="../images/spacer.gif" WIDTH=29 HEIGHT=31 ALT=""></TD><TD> <IMG SRC="../images/spacer.gif" WIDTH=1 HEIGHT=31 ALT=""></TD></TR> 
<TR> <TD COLSPAN=17 ROWSPAN=2></TD><TD COLSPAN=3 ROWSPAN=2> <IMG SRC="../images/index_41.jpg" ALT="" width="119" height="25"></TD><TD> 
<IMG SRC="../images/spacer.gif" WIDTH=1 HEIGHT=4 ALT=""></TD></TR> <TR> <TD COLSPAN=2> 
</TD><TD> <IMG SRC="../images/spacer.gif" WIDTH=1 HEIGHT=21 ALT=""></TD></TR> <TR> 
<TD> <IMG SRC="../images/spacer.gif" WIDTH=73 HEIGHT=1 ALT=""></TD><TD> <IMG SRC="../images/spacer.gif" WIDTH=16 HEIGHT=1 ALT=""></TD><TD> 
<IMG SRC="../images/spacer.gif" WIDTH=32 HEIGHT=1 ALT=""></TD><TD> <IMG SRC="../images/spacer.gif" WIDTH=11 HEIGHT=1 ALT=""></TD><TD> 
<IMG SRC="../images/spacer.gif" WIDTH=29 HEIGHT=1 ALT=""></TD><TD> <IMG SRC="../images/spacer.gif" WIDTH=24 HEIGHT=1 ALT=""></TD><TD> 
<IMG SRC="../images/spacer.gif" WIDTH=16 HEIGHT=1 ALT=""></TD><TD> <IMG SRC="../images/spacer.gif" WIDTH=36 HEIGHT=1 ALT=""></TD><TD> 
<IMG SRC="../images/spacer.gif" WIDTH=28 HEIGHT=1 ALT=""></TD><TD> <IMG SRC="../images/spacer.gif" WIDTH=73 HEIGHT=1 ALT=""></TD><TD> 
<IMG SRC="../images/spacer.gif" WIDTH=27 HEIGHT=1 ALT=""></TD><TD> <IMG SRC="../images/spacer.gif" WIDTH=54 HEIGHT=1 ALT=""></TD><TD> 
<IMG SRC="../images/spacer.gif" WIDTH=26 HEIGHT=1 ALT=""></TD><TD> <IMG SRC="../images/spacer.gif" WIDTH=23 HEIGHT=1 ALT=""></TD><TD> 
<IMG SRC="../images/spacer.gif" WIDTH=80 HEIGHT=1 ALT=""></TD><TD> <IMG SRC="../images/spacer.gif" WIDTH=3 HEIGHT=1 ALT=""></TD><TD> 
<IMG SRC="../images/spacer.gif" WIDTH=13 HEIGHT=1 ALT=""></TD><TD> <IMG SRC="../images/spacer.gif" WIDTH=3 HEIGHT=1 ALT=""></TD><TD> 
<IMG SRC="../images/spacer.gif" WIDTH=114 HEIGHT=1 ALT=""></TD><TD> <IMG SRC="../images/spacer.gif" WIDTH=90 HEIGHT=1 ALT=""></TD><TD> 
<IMG SRC="../images/spacer.gif" WIDTH=19 HEIGHT=1 ALT=""></TD><TD> <IMG SRC="../images/spacer.gif" WIDTH=10 HEIGHT=1 ALT=""></TD><TD></TD></TR> 
</TABLE>
</BODY>
</HTML>

<?php
} 
else 
{ 
header("Location: index.php"); 
} 
?> 
