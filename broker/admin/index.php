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
<link href="../../CSS/Level2_Verdana_Forms.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style4 {color: #FFFFFF; font-weight: bold; }
-->
</style>
</HEAD>
<BODY BGCOLOR=#FFFFFF LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0 text="#000000" link="#993333" vlink="#993333" alink="#993333" background="../../images/watermark.jpg">
<TABLE WIDTH=800 BORDER=0 CELLPADDING=0 CELLSPACING=0 align="center">
  <TR> 
    <TD COLSPAN=3> <IMG SRC="../../images/index_01.jpg" WIDTH=121 HEIGHT=25 ALT=""></TD>
    <TD COLSPAN=12> <IMG SRC="../../images/spacer.gif" WIDTH=427 HEIGHT=25 ALT=""></TD>
    <TD COLSPAN=7> <img border="0" src="../../images/index_03.jpg" width="252" height="25"></TD>
    <TD> <IMG SRC="../../images/spacer.gif" WIDTH=1 HEIGHT=25 ALT=""></TD>
  </TR>
  <TR> 
    <TD COLSPAN=7 ROWSPAN=2> <IMG SRC="../../images/index_04.jpg" WIDTH=201 HEIGHT=73 ALT=""></TD>
    <TD COLSPAN=10> <IMG SRC="../../images/index_05.jpg" WIDTH=363 HEIGHT=20 ALT=""></TD>
    <TD COLSPAN=2 ROWSPAN=2> <img border="0" src="../../images/index_06.jpg" width="117" height="73"></TD>
    <TD COLSPAN=3 ROWSPAN=2> <img border="0" src="../../images/index_07.jpg" width="119" height="73"></TD>
    <TD> <IMG SRC="../../images/spacer.gif" WIDTH=1 HEIGHT=20 ALT=""></TD>
  </TR>
  <TR> 
    <TD COLSPAN=2> <IMG SRC="../../images/index_08.jpg" WIDTH=64 HEIGHT=53 ALT=""></TD>
    <TD COLSPAN=3> <IMG SRC="../../images/index_09.jpg" WIDTH=154 HEIGHT=53 ALT=""></TD>
    <TD COLSPAN=5> <IMG SRC="../../images/index_10.jpg" WIDTH=145 HEIGHT=53 ALT=""></TD>
    <TD> <IMG SRC="../../images/spacer.gif" WIDTH=1 HEIGHT=53 ALT=""></TD>
  </TR>
  <TR> 
    <TD COLSPAN=4> <IMG SRC="../../images/index_11.jpg" WIDTH=132 HEIGHT=69 ALT=""></TD>
    <TD COLSPAN=5> <IMG SRC="../../images/index_12.jpg" WIDTH=133 HEIGHT=69 ALT=""></TD>
    <TD COLSPAN=3> <IMG SRC="../../images/index_13.jpg" WIDTH=154 HEIGHT=69 ALT=""></TD>
    <TD COLSPAN=5> <IMG SRC="../../images/index_14.jpg" WIDTH=145 HEIGHT=69 ALT=""></TD>
    <TD COLSPAN=2> <IMG SRC="../../images/index_15.jpg" WIDTH=117 HEIGHT=69 ALT=""></TD>
    <TD COLSPAN=3> <IMG SRC="../../images/index_16.jpg" WIDTH=119 HEIGHT=69 ALT=""></TD>
    <TD> <IMG SRC="../../images/spacer.gif" WIDTH=1 HEIGHT=69 ALT=""></TD>
  </TR>
  <TR> 
    <TD colspan="22">[<a href="index.php">pending orders</a>] [<a href="oldorders.php">completed orders</a>] [<a href="signup.php" target="_blank">add user</a>] [<a href="createorder.php">create job</a>]  [<a href="customers.php">customer center</a>] </TD>
    <TD> <IMG SRC="../../images/spacer.gif" WIDTH=1 HEIGHT=23 ALT=""></TD>
  </TR>
  <TR> 
    <TD COLSPAN=22 ROWSPAN=4 valign="top"><br>
    <blockquote>
      <p><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><b><font size="3">Red Moon Studios -  Print Orders</font></b></font><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><br>
          </font>
        <?
@mysql_connect("localhost", "redmoons_broker", "8hSVGSlkcMcu") or die(mysql_error()); 
@mysql_select_db("redmoons_broker") or die(mysql_error()); 
mysql_query("DELETE FROM orders WHERE timestamp < (NOW() - INTERVAL 180 DAY)");
$matches = mysql_query("SELECT * FROM orders WHERE orders.jobstatus NOT LIKE '%Completed%' ORDER BY orders.orderid ASC")or die(mysql_error());
while ($row = mysql_fetch_array($matches)) { 
$id = $row['orderid'] ;
$ad_custid = $row['company'] ;
$ad_jobname = $row['jobname'] ; 
$ad_status = $row['jobstatus'] ;
$ad_prodtype = $row['prodtype'] ;
$ad_prodqty = $row['prodqty'] ;
$ad_prodstyle = $row['prodstyle'] ;
$ad_date= $row['date'] ;
if (strpos($ad_status, '"http') === 0) {
    $ad_status = "<a href=$ad_status target=\"_new\">View Job Status</a> ";
}
$display_block .= " 
        <tr>
          <td bgcolor=#999999><B><a href=\"orderdetail.php?orderid=$id\">$ad_jobname</a></B></td>
          <td bgcolor=#999999>$ad_custid</td>
          <td bgcolor=#999999>$ad_prodtype</td>
          <td bgcolor=#999999>$ad_prodqty</td>
          <td bgcolor=#999999>$ad_prodstyle</td>
          <td bgcolor=#999999>$ad_date</td>
          <td bgcolor=#999999>$ad_status</td>
        </tr>";
}
mysql_close();
?> 
        </p>
      </blockquote>
      <table width="799" border="0" align="center" cellpadding="3" cellspacing="1">
        <tr>
          <td width="70" bgcolor="#003366"><span class="style4">Job Name</span></td>
            <td bgcolor="#003366"><span class="style4">Customer</span></td>
            <td bgcolor="#003366"><span class="style4">Type</span></td>
            <td bgcolor="#003366"><span class="style4">Quantity</span></td>
            <td bgcolor="#003366"><span class="style4">Style</span></td>
            <td bgcolor="#003366"><span class="style4">Order Date</span></td>
            <td bgcolor="#003366"><span class="style4">Status</span></td>
        </tr>
  <? //open a php block to populate the table 
echo "$display_block" ; 
//close the php block and then the table 
?> 
      </table>      
    </TD><TD> <IMG SRC="../../images/spacer.gif" WIDTH=1 HEIGHT=50 ALT=""></TD>
  </TR>
  <TR> 
    <TD> <IMG SRC="../../images/spacer.gif" WIDTH=1 HEIGHT=158 ALT=""></TD>
  </TR>
  <TR> 
    <TD> <IMG SRC="../../images/spacer.gif" WIDTH=1 HEIGHT=159 ALT=""></TD>
  </TR>
  <TR> 
    <TD> <IMG SRC="../../images/spacer.gif" WIDTH=1 HEIGHT=166 ALT=""></TD>
  </TR>
  <TR> 
    <TD COLSPAN=2 ROWSPAN=3> <IMG SRC="../../images/index_35.jpg" WIDTH=89 HEIGHT=56 ALT=""></TD>
    <TD COLSPAN=20>&nbsp; </TD>
    <TD> <IMG SRC="../../images/spacer.gif" WIDTH=1 HEIGHT=21 ALT=""></TD>
  </TR>
  <TR> 
    <TD COLSPAN=17 BGCOLOR=#FB0000> <font face="Verdana, Arial, Helvetica, sans-serif" size="1" color="#FFFFFF">&copy; 
      Copyright 2006 - All Rights Reserved<br>
      Red Moon Studios, L.L.C. :: San Diego, CA 92109</font></TD>
    <TD> <IMG SRC="../../images/index_38.jpg" WIDTH=90 HEIGHT=31 ALT=""></TD>
    <TD COLSPAN=2 BGCOLOR=#FB0000> <IMG SRC="../../images/spacer.gif" WIDTH=29 HEIGHT=31 ALT=""></TD>
    <TD> <IMG SRC="../../images/spacer.gif" WIDTH=1 HEIGHT=31 ALT=""></TD>
  </TR>
  <TR> 
    <TD COLSPAN=17 ROWSPAN=2>&nbsp; </TD>
    <TD COLSPAN=3 ROWSPAN=2> <IMG SRC="../../images/index_41.jpg" WIDTH=119 HEIGHT=25 ALT=""></TD>
    <TD> <IMG SRC="../../images/spacer.gif" WIDTH=1 HEIGHT=4 ALT=""></TD>
  </TR>
  <TR> 
    <TD COLSPAN=2> <IMG SRC="../../images/spacer.gif" WIDTH=89 HEIGHT=21 ALT=""></TD>
    <TD> <IMG SRC="../../images/spacer.gif" WIDTH=1 HEIGHT=21 ALT=""></TD>
  </TR>
  <TR> 
    <TD> <IMG SRC="../../images/spacer.gif" WIDTH=73 HEIGHT=1 ALT=""></TD>
    <TD> <IMG SRC="../../images/spacer.gif" WIDTH=16 HEIGHT=1 ALT=""></TD>
    <TD> <IMG SRC="../../images/spacer.gif" WIDTH=32 HEIGHT=1 ALT=""></TD>
    <TD> <IMG SRC="../../images/spacer.gif" WIDTH=11 HEIGHT=1 ALT=""></TD>
    <TD> <IMG SRC="../../images/spacer.gif" WIDTH=29 HEIGHT=1 ALT=""></TD>
    <TD> <IMG SRC="../../images/spacer.gif" WIDTH=24 HEIGHT=1 ALT=""></TD>
    <TD> <IMG SRC="../../images/spacer.gif" WIDTH=16 HEIGHT=1 ALT=""></TD>
    <TD> <IMG SRC="../../images/spacer.gif" WIDTH=36 HEIGHT=1 ALT=""></TD>
    <TD> <IMG SRC="../../images/spacer.gif" WIDTH=28 HEIGHT=1 ALT=""></TD>
    <TD> <IMG SRC="../../images/spacer.gif" WIDTH=73 HEIGHT=1 ALT=""></TD>
    <TD> <IMG SRC="../../images/spacer.gif" WIDTH=27 HEIGHT=1 ALT=""></TD>
    <TD> <IMG SRC="../../images/spacer.gif" WIDTH=54 HEIGHT=1 ALT=""></TD>
    <TD> <IMG SRC="../../images/spacer.gif" WIDTH=26 HEIGHT=1 ALT=""></TD>
    <TD> <IMG SRC="../../images/spacer.gif" WIDTH=23 HEIGHT=1 ALT=""></TD>
    <TD> <IMG SRC="../../images/spacer.gif" WIDTH=80 HEIGHT=1 ALT=""></TD>
    <TD> <IMG SRC="../../images/spacer.gif" WIDTH=3 HEIGHT=1 ALT=""></TD>
    <TD> <IMG SRC="../../images/spacer.gif" WIDTH=13 HEIGHT=1 ALT=""></TD>
    <TD> <IMG SRC="../../images/spacer.gif" WIDTH=3 HEIGHT=1 ALT=""></TD>
    <TD> <IMG SRC="../../images/spacer.gif" WIDTH=114 HEIGHT=1 ALT=""></TD>
    <TD> <IMG SRC="../../images/spacer.gif" WIDTH=90 HEIGHT=1 ALT=""></TD>
    <TD> <IMG SRC="../../images/spacer.gif" WIDTH=19 HEIGHT=1 ALT=""></TD>
    <TD> <IMG SRC="../../images/spacer.gif" WIDTH=10 HEIGHT=1 ALT=""></TD>
    <TD></TD>
  </TR>
</TABLE>
</BODY>
</HTML>
