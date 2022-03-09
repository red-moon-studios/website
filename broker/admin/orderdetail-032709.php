<?php
@mysql_connect("localhost", "redmoons_broker", "8hSVGSlkcMcu") or die(mysql_error());
mysql_select_db("redmoons_broker") or die(mysql_error());
if (isset($_POST['submit'])) {
mysql_query("UPDATE orders SET jobstatus='".$_POST['jobstatus1']."', trackingnum='".$_POST['trackingnum1']."', fedex='".$_POST['fedex1']."', paysubtotal='".$_POST['paysubtotal1']."', payship='".$_POST['payship1']."', paytax='".$_POST['paytax1']."', paytotal='".$_POST['paytotal1']."', updatedate='".$_POST['updatedate1']."', redcomments='".$_POST['redcomments1']."' WHERE orderid='".$_POST['orderid1']."'");
mysql_close();
?>
<h1>Record Updated</h1>
<p>Thank you, you have updated this record.</p>
<p>[<a href="index.php">return home</a>]</p>
<?php
if (isset($_POST['sendemail'])) {
@mysql_connect("localhost", "redmoons_broker", "8hSVGSlkcMcu") or die(mysql_error());
mysql_select_db("redmoons_broker") or die(mysql_error());
$data = mysql_query("SELECT * FROM orders WHERE orderid = '".$_POST['orderid1']."'") or die(mysql_error());
$info = mysql_fetch_array( $data );
mysql_close();
$to = $info['email'];
$subject = 'Order ' . $info['orderid'] . ' Updated -- ' . $info['jobname'] . ' -- ' . $info['jobstatus'] . '';
$message = '
Your order has been recently updated by our staff.
Please review the status below, if you have any questions please feel free to contact us at 888-780-1115 or sales@redmoonstudios.net

You can check the status of your job online at any time 24/7 - Simply use this URL, http://www.redmoonstudios.net/orderdetail.php?orderid=' . $info['orderid'] . '

===============================================================================================================================================================

Order Information
=-=-=-=-=-=-=-=-=
Order Number: ' . $info['orderid'] . '
Job Name: ' . $info['jobname'] . '
Order Date: ' . $info['date'] . '

Order Status
=-=-=-=-=-=-
Job is currently: ' . $info['jobstatus'] . '
Tracking Number (if shipped): ' . $info['trackingnum'] . ' ' . $info['fedex'] . '

Job Information
=-=-=-=-=-=-=-=
Product Type: ' . $info['prodtype'] . '
Product Qty: ' . $info['prodqty'] . '
Product Style: ' . $info['prodstyle'] . '
Shipping Method: ' . $info['shipmethod'] . '

Payment Information
=-=-=-=-=-=-=-=-=-=
Payment Method: ' . $info['paymethod'] . '
Subtotal: ' . $info['paysubtotal'] . '
Shipping: ' . $info['payship'] . '
Sales Tax: ' . $info['paytax'] . '
Total Billed: ' . $info['paytotal'] . '

Billing Address
=-=-=-=-=-=-=-=
' . $info['company'] . '
' . $info['contact'] . '
' . $info['address1'] . '
' . $info['address2'] . '
' . $info['city'] . ', ' . $info['state'] . ' ' . $info['zip'] . '

Shipping Address
(if different from Billing Address)
=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
' . $info['shipname'] . '
' . $info['shipaddress1'] . '
' . $info['shipaddress2'] . '
' . $info['shipcity'] . ', ' . $info['shipstate'] . ' ' . $info['shipzip'] . '

===============================================================================================================================================================

-------------------------------------------------------------------------------
NOTICE OF CONFIDENTIALITY
The information contained in this communication and any accompanying document(s) is proprietary and confidential and is intended solely for the above-named individual or entity. If you are not the intended receiver, recipient or entity, you are advised that any distribution, copying, disclosure or communication of this email is strictly prohibited. If you have received this email in error, please contact us at the telephone number listed above.
===============================================================================
';
$headers  = 'To: ' . $info['contact'] . " <" . $info['email'] . ">" . "\r\n";
$headers .= 'From: Red Moon Studios <sales@redmoonstudios.net>' . "\r\n";
mail($to, $subject, $message, $headers);
}
?>
<?php
}
else
{
@mysql_connect("localhost", "redmoons_broker", "8hSVGSlkcMcu") or die(mysql_error());
mysql_select_db("redmoons_broker") or die(mysql_error());
$data = mysql_query("SELECT * FROM orders WHERE orderid = '".$_GET['orderid']."'") or die(mysql_error());
$info = mysql_fetch_array( $data );
mysql_close();
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
<BODY BGCOLOR=#FFFFFF LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0 text="#000000" link="#993333" vlink="#993333" alink="#993333" background="../../../images/watermark.jpg">
<TABLE WIDTH=800 BORDER=0 CELLPADDING=0 CELLSPACING=0 align="center"> <TR> <TD COLSPAN=3>
<IMG SRC="../../images/index_01.jpg" ALT="" width="121" height="25"></TD><TD COLSPAN=12>
<IMG SRC="../../images/spacer.gif" WIDTH=427 HEIGHT=25 ALT=""></TD><TD COLSPAN=7> <IMG SRC="../../images/index_03.jpg" ALT="" width="252" height="25"></TD><TD>
<IMG SRC="../../images/spacer.gif" WIDTH=1 HEIGHT=25 ALT=""></TD></TR> <TR> <TD COLSPAN=7 ROWSPAN=2>
<IMG SRC="../../images/index_04.jpg" ALT="" width="201" height="73"></TD><TD COLSPAN=10>
<IMG SRC="../../images/index_05.jpg" ALT="" width="363" height="20"></TD><TD COLSPAN=2 ROWSPAN=2>
<IMG SRC="../../images/index_06.jpg" ALT="" width="117" height="73"></TD><TD COLSPAN=3 ROWSPAN=2>
<IMG SRC="../../images/index_07.jpg" ALT="" width="119" height="73"></TD><TD> <IMG SRC="../../images/spacer.gif" WIDTH=1 HEIGHT=20 ALT=""></TD></TR>
<TR> <TD COLSPAN=2> <IMG SRC="../../images/index_08.jpg" ALT="" width="64" height="53"></TD><TD COLSPAN=3>
<IMG SRC="../../images/index_09.jpg" ALT="" width="154" height="53"></TD><TD COLSPAN=5>
<IMG SRC="../../images/index_10.jpg" ALT="" width="145" height="53"></TD><TD> <IMG SRC="../../images/spacer.gif" WIDTH=1 HEIGHT=53 ALT=""></TD></TR>
<TR> <TD COLSPAN=4> <IMG SRC="../../images/index_11.jpg" ALT="" width="132" height="69"></TD><TD COLSPAN=5>
<IMG SRC="../../images/index_12.jpg" ALT="" width="133" height="69"></TD><TD COLSPAN=3>
<IMG SRC="../../images/index_13.jpg" ALT="" width="154" height="69"></TD><TD COLSPAN=5>
<IMG SRC="../../images/index_14.jpg" ALT="" width="145" height="69"></TD><TD COLSPAN=2>
<IMG SRC="../../images/index_15.jpg" ALT="" width="117" height="69"></TD><TD COLSPAN=3>
<IMG SRC="../../images/index_16.jpg" ALT="" width="119" height="69"></TD><TD> <IMG SRC="../../images/spacer.gif" WIDTH=1 HEIGHT=69 ALT=""></TD></TR>
<TR> <td colspan="22"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">[<a href="index.php">pending orders</a>] [<a href="oldorders.php">completed orders</a>] [<a href="signup.php" target="_blank">add user</a>] [<a href="createorder.php">create job</a>]  [<a href="customers.php">customer center</a>] </font></td>
  <TD>
<IMG SRC="../../images/spacer.gif" WIDTH=1 HEIGHT=23 ALT=""></TD></TR> <TR> <TD COLSPAN=22 ROWSPAN=4 align="left" valign="top">
<blockquote><br>
  <strong><font size="3" face="Verdana, Arial, Helvetica, sans-serif">Detailed Order Status</font></strong>
  <p><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Order Number:  <strong><?php echo $info['orderid']?></strong></font><br>
    <font size="2" face="Verdana, Arial, Helvetica, sans-serif">Job Name: <strong><?php echo $info['jobname']?><br>
    </strong>Order Date: <strong><?php echo $info['date']?></strong></font><br>
    <font size="2" face="Verdana, Arial, Helvetica, sans-serif">Last Update : </font><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong><?php echo $info['updatedate']?></strong></font></p>
  <form action="<?php echo $_SERVER['../PHP_SELF']; ?>" method="post" name="orderupdate" id="orderupdate"><?php $date = date('D M j Y \- h\:i\:sa \C\S\T');?><input type="hidden" name="updatedate1" value="<?php echo $date?>">
    <font size="2" face="Verdana, Arial, Helvetica, sans-serif">Job Status:
    <label>
    <input name="jobstatus1" type="text" id="jobstatus" value="<?php echo $info['jobstatus']?>">
    </label>
    <br>
UPS Tracking Number:
<label>
<input name="trackingnum1" type="text" id="trackingnum" value="<?php echo $info['trackingnum']?>">
</label><br>
Fedex Tracking Number:
<label>
<input name="fedex1" type="text" id="fedex" value="<?php echo $info['fedex']?>">
</label><br>
Subtotal:
<label>
<input name="paysubtotal1" type="text" id="paysubtotal" value="<?php echo $info['paysubtotal']?>">
</label>
Shipping:
<label>
<input name="payship1" type="text" id="payship" value="<?php echo $info['payship']?>">
</label>
Tax:
<label>
<input name="paytax1" type="text" id="paytax" value="<?php echo $info['paytax']?>">
</label><br>
Total:
<label>
<input name="paytotal1" type="text" id="paytotal" value="<?php echo $info['paytotal']?>">
</label>
<br>
<br>
Internal Job Comments:<br>
<label>
<textarea name="redcomments1" cols="40" rows="5" id="redcomments1"><?php echo $info['redcomments']?></textarea>
</label>
<br>
<br>
<input name="sendemail" type="checkbox" id="sendemail" value="sendemail">
Email Update
<br>
<input name="submit" type="submit" id="submit" value="Update">
    </font>
    <input type="hidden" name="orderid1" value="<?php echo $info['orderid']?>">
  </form>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_new">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="billing@redmoonstudios.net">
<input type="hidden" name="item_name" value="Red Moon Studios Invoice">
<input type="hidden" name="item_number" value="<?php echo $info['orderid']?>">
<input type="hidden" name="amount" value="<?php echo $info['paytotal']?>">
<input type="hidden" name="page_style" value="Primary">
<input type="hidden" name="no_shipping" value="1">
<input type="hidden" name="no_note" value="1">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="bn" value="PP-BuyNowBF">
<input type="image" src="https://www.paypal.com/en_US/i/btn/x-click-but02.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
  </blockquote>

        <div align="center">
          <table width="799" border="0" cellpadding="3" cellspacing="1">
            <tr align="left" valign="middle">
              <td colspan="2" bgcolor="#990000"><font face="Verdana, Arial, Helvetica, sans-serif" size="3" color="#FFFFFF"><b>Billing Address</b><strong>:</strong></font></td>
            </tr>
            <tr align="left" valign="middle">
              <td width="27%" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">Company Name:</font></b></font></div></td>
              <td width="73%" bgcolor="#999999"><font size="2"><font color="#000000" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['company']?></font></font></td>
            </tr>
            <tr align="left" valign="middle">
              <td width="27%" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"> Contact:</font></b></font></div></td>
              <td width="73%" bgcolor="#999999"><font size="2"><font color="#000000" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['contact']?></font></font></td>
            </tr>
            <tr align="left" valign="middle">
              <td width="27%" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"> Email:</font></b></font></div></td>
              <td width="73%" bgcolor="#999999"><font size="2"><font color="#000000" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['email']?></font></font></td>
            </tr>
            <tr align="left" valign="middle">
              <td width="27%" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"> Phone:</font></b></font></div></td>
              <td width="73%" bgcolor="#999999"><font size="2"><font color="#000000" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['phone']?></font></font></td>
            </tr>
            <tr align="left" valign="middle">
              <td width="27%" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"> Address:</font></b></font></div></td>
              <td width="73%" bgcolor="#999999"><font size="2"><font color="#000000" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['address1']?></font></font></td>
            </tr>
            <tr align="left" valign="middle">
              <td width="27%" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">Address (con't):</font></b></font></div></td>
              <td width="73%" bgcolor="#999999"><font size="2"><font color="#000000" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['address2']?></font></font></td>
            </tr>
            <tr align="left" valign="middle">
              <td width="27%" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"> City:</font></b></font></div></td>
              <td width="73%" bgcolor="#999999"><font size="2"><font color="#000000" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['city']?></font></font></td>
            </tr>
            <tr align="left" valign="middle">
              <td width="27%" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"> State:</font></b></font></div></td>
              <td width="73%" bgcolor="#999999"><font size="2"><font color="#000000" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['state']?></font></font></td>
            </tr>
            <tr align="left" valign="middle">
              <td width="27%" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"> Zip Code:</font></b></font></div></td>
              <td width="73%" bgcolor="#999999"><font size="2"><font color="#000000" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['zip']?></font></font></td>
            </tr>
          </table>
        </div>
        <div align="center">
          <table width="799" border="0" cellpadding="3" cellspacing="1">
            <tr>
              <td colspan="2" bgcolor="#990000"><font color="#FFFFFF"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="3">Shipping Address: </font> <font face="Verdana, Arial, Helvetica, sans-serif" size="1">(if different than Billing Address)</font></b></font></td>
            </tr>
            <tr>
              <td width="27%" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">Name:</font></b></font></div></td>
              <td width="73%" bgcolor="#999999" class="small"><font size="2"><font color="#000000" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['shipname']?></font></font></td>
            </tr>
            <tr>
              <td width="27%" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">Phone:</font></b></font></div></td>
              <td width="73%" bgcolor="#999999" class="small"><font size="2"><font color="#000000" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['shipphone']?></font></font></td>
            </tr>
            <tr>
              <td width="27%" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">Address:</font></b></font></div></td>
              <td width="73%" bgcolor="#999999" class="small"><font size="2"><font color="#000000" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['shipaddress1']?></font></font></td>
            </tr>
            <tr>
              <td width="27%" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">Address:</font></b></font></div></td>
              <td width="73%" bgcolor="#999999" class="small"><font size="2"><font color="#000000" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['shipaddress2']?></font></font></td>
            </tr>
            <tr>
              <td width="27%" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">City:</font></b></font></div></td>
              <td width="73%" bgcolor="#999999" class="small"><font size="2"><font color="#000000" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['shipcity']?></font></font></td>
            </tr>
            <tr>
              <td width="27%" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">State:</font></b></font></div></td>
              <td width="73%" bgcolor="#999999" class="small"><font size="2"><font color="#000000" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['shipstate']?></font></font></td>
            </tr>
            <tr>
              <td bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">Zip Code: </font></b></font></div></td>
              <td bgcolor="#999999" class="small"><font size="2"><font color="#000000" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['shipzip']?></font></font></td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#990000"><font face="Verdana, Arial, Helvetica, sans-serif" size="1"><b><font size="3" color="#FFFFFF">Shipping Information:</font></b></font></td>
            </tr>
            <tr>
              <td align="right" valign="top" bgcolor="#003366"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">Shipping Method:</font></b></font></td>
              <td align="left" valign="middle" bgcolor="#999999" class="small"><font size="2"><font color="#000000" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['shipmethod']?></font></font></td>
            </tr>
            <tr>
              <td align="right" valign="top" bgcolor="#003366"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">Shipping Payment: </font></b></font></td>
              <td align="left" valign="middle" bgcolor="#999999"><font size="2"><font color="#000000" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['shippayment']?> </font><font size="2"><font color="#000000" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['shipupsacct']?></font></font></font></td>
            </tr>
          </table>
        </div>
        <div align="center">
          <table width="799" border="0" cellpadding="3" cellspacing="1">
            <tr>
              <td colspan="6" bgcolor="#990000"><font face="Verdana, Arial, Helvetica, sans-serif" size="1"><b><font size="3" color="#FFFFFF">Job Details: </font></b></font></td>
            </tr>
            <tr>
              <td width="207" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"> Product Group:</font></b></font></div></td>
              <td colspan="5" bgcolor="#999999" class="small"><font size="2"><font color="#000000" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['prodgroup']?></font></font></td>
            </tr>
            <tr>
              <td width="207" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"> Product Type:</font></b></font></div></td>
              <td colspan="5" bgcolor="#999999" class="small"><font size="2"><font color="#000000" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['prodtype']?></font></font></td>
            </tr>
            <tr>
              <td width="207" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"> Quantity:</font></b></font></div></td>
              <td colspan="5" bgcolor="#999999" class="small"><font size="2"><font color="#000000" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['prodqty']?></font></font></td>
            </tr>
            <tr>
              <td width="207" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"> Product Style:</font></b></font></div></td>
              <td colspan="5" bgcolor="#999999" class="small"><font size="2"><font color="#000000" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['prodstyle']?></font></font></td>
            </tr>
            <tr>
              <td width="207" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"> Job Name:</font></b></font></div></td>
              <td colspan="5" bgcolor="#999999"><label><font size="2"><font color="#000000" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['jobname']?></font></font></label></td>
            </tr>
            <tr>
              <td width="207" align="right" valign="top" bgcolor="#003366"><font color="#FFFFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font size="2">Instructions &amp; Comments:</font></b></font></td>
              <td colspan="5" bgcolor="#999999"><font size="2"><font color="#000000" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['comments']?></font></font></td>
            </tr>
            <tr>
              <td colspan="6" bgcolor="#990000"><font face="Verdana, Arial, Helvetica, sans-serif" size="1"><b><font size="3" color="#FFFFFF">Billing Details:</font></b></font></td>
            </tr>
            <tr>
              <td align="right" valign="top" bgcolor="#003366" class="style7"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">Payment Method:</font></b></font></td>
              <td colspan="5" bgcolor="#999999"><font size="2"><font color="#000000" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['paymethod']?></font></font></td>
            </tr>
            <tr>
              <td bgcolor="#003366"><div align="right"><font color="#FFFFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font size="2">Credit Card Number:</font></b></font></div></td>
              <td width="139" bgcolor="#999999"><font size="2"><font color="#000000" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['paycardnum']?></font></font></td>
              <td width="132" bgcolor="#003366"><div align="right"><font color="#FFFFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font size="2">Expiration Date :</font></b></font></div></td>
              <td width="63" bgcolor="#999999"><font size="2"><font color="#000000" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['paycardexp']?></font></font></td>
              <td width="84" bgcolor="#003366"><div align="right"><font color="#FFFFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font size="2">CVV Code: </font></b></font></div></td>
              <td width="131" bgcolor="#999999"><font size="2"><font color="#000000" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['paycardccv']?></font></font></td>
            </tr>
          </table>
      </div>
      </TD>
<TD>
<IMG SRC="../../images/spacer.gif" WIDTH=1 HEIGHT=50 ALT=""></TD></TR> <TR> <TD> <IMG SRC="../../images/spacer.gif" WIDTH=1 HEIGHT=158 ALT=""></TD></TR>
<TR> <TD> <IMG SRC="../../images/spacer.gif" WIDTH=1 HEIGHT=159 ALT=""></TD></TR> <TR>
<TD></TD></TR> <TR> <TD COLSPAN=2 ROWSPAN=3> <IMG SRC="../../images/index_35.jpg" ALT="" width="89" height="56"></TD><TD COLSPAN=20>
</TD><TD> <IMG SRC="../../images/spacer.gif" WIDTH=1 HEIGHT=21 ALT=""></TD></TR> <TR>
<TD COLSPAN=17 BGCOLOR=#FB0000> <font face="Verdana, Arial, Helvetica, sans-serif" size="1" color="#FFFFFF">&copy;
Copyright 2006 - All Rights Reserved<br> Red Moon Studios, L.L.C. :: San Diego,
CA 92109</font></TD><TD> <IMG SRC="../../images/index_38.jpg" ALT="" width="90" height="31"></TD><TD COLSPAN=2 BGCOLOR=#FB0000>
<IMG SRC="../../images/spacer.gif" WIDTH=29 HEIGHT=31 ALT=""></TD><TD> <IMG SRC="../../images/spacer.gif" WIDTH=1 HEIGHT=31 ALT=""></TD></TR>
<TR> <TD COLSPAN=17 ROWSPAN=2></TD><TD COLSPAN=3 ROWSPAN=2> <IMG SRC="../../images/index_41.jpg" ALT="" width="119" height="25"></TD><TD>
<IMG SRC="../../images/spacer.gif" WIDTH=1 HEIGHT=4 ALT=""></TD></TR> <TR> <TD COLSPAN=2>
</TD><TD> <IMG SRC="../../images/spacer.gif" WIDTH=1 HEIGHT=21 ALT=""></TD></TR> <TR>
<TD> <IMG SRC="../../images/spacer.gif" WIDTH=73 HEIGHT=1 ALT=""></TD><TD> <IMG SRC="../../images/spacer.gif" WIDTH=16 HEIGHT=1 ALT=""></TD><TD>
<IMG SRC="../../images/spacer.gif" WIDTH=32 HEIGHT=1 ALT=""></TD><TD> <IMG SRC="../../images/spacer.gif" WIDTH=11 HEIGHT=1 ALT=""></TD><TD>
<IMG SRC="../../images/spacer.gif" WIDTH=29 HEIGHT=1 ALT=""></TD><TD> <IMG SRC="../../images/spacer.gif" WIDTH=24 HEIGHT=1 ALT=""></TD><TD>
<IMG SRC="../../images/spacer.gif" WIDTH=16 HEIGHT=1 ALT=""></TD><TD> <IMG SRC="../../images/spacer.gif" WIDTH=36 HEIGHT=1 ALT=""></TD><TD>
<IMG SRC="../../images/spacer.gif" WIDTH=28 HEIGHT=1 ALT=""></TD><TD> <IMG SRC="../../images/spacer.gif" WIDTH=73 HEIGHT=1 ALT=""></TD><TD>
<IMG SRC="../../images/spacer.gif" WIDTH=27 HEIGHT=1 ALT=""></TD><TD> <IMG SRC="../../images/spacer.gif" WIDTH=54 HEIGHT=1 ALT=""></TD><TD>
<IMG SRC="../../images/spacer.gif" WIDTH=26 HEIGHT=1 ALT=""></TD><TD> <IMG SRC="../../images/spacer.gif" WIDTH=23 HEIGHT=1 ALT=""></TD><TD>
<IMG SRC="../../images/spacer.gif" WIDTH=80 HEIGHT=1 ALT=""></TD><TD> <IMG SRC="../../images/spacer.gif" WIDTH=3 HEIGHT=1 ALT=""></TD><TD>
<IMG SRC="../../images/spacer.gif" WIDTH=13 HEIGHT=1 ALT=""></TD><TD> <IMG SRC="../../images/spacer.gif" WIDTH=3 HEIGHT=1 ALT=""></TD><TD>
<IMG SRC="../../images/spacer.gif" WIDTH=114 HEIGHT=1 ALT=""></TD><TD> <IMG SRC="../../images/spacer.gif" WIDTH=90 HEIGHT=1 ALT=""></TD><TD>
<IMG SRC="../../images/spacer.gif" WIDTH=19 HEIGHT=1 ALT=""></TD><TD> <IMG SRC="../../images/spacer.gif" WIDTH=10 HEIGHT=1 ALT=""></TD><TD></TD></TR>
</TABLE>
<?php
}
?>
</BODY>
</HTML>
