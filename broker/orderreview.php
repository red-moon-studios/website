<?php 
$secret="6LfVcQsUAAAAAJuuFbfziMjBJWkSrhUljoqnQ9fm";
$response=$_POST["g-recaptcha-response"];
$verify=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secret}&response={$response}");
$captcha_success=json_decode($verify);
if ($captcha_success->success==false) {
    echo "<p>You forgot to click the box that says I'm not a robot. Click the back button in your browser, unless you are a robot?!</p>";
}
else if ($captcha_success->success==true) {
}

$username = $_COOKIE['ID_my_site']; 
$pass = $_COOKIE['Key_my_site']; 
if(isset($_COOKIE['ID_my_site']))
{ 
?>
<?php
@mysql_connect("localhost", "redmoons_broker", "8hSVGSlkcMcu") or die(mysql_error()); 
mysql_select_db("redmoons_broker") or die(mysql_error()); 

if (!get_magic_quotes_gpc()) {
$_POST['JobName'] = addslashes($_POST['JobName']);
}
$jobcheck = $_POST['JobName'];
$check = mysql_query("SELECT jobname FROM orders WHERE jobname = '$jobcheck'") 
or die(mysql_error());
$check2 = mysql_num_rows($check);
if ($check2 != 0) {
die('Sorry, there is already a job in our system with that name. Please use a different name. Click your browsers back button to return to the form.');
}
$date = date('D M j Y \- h\:i\:sa \C\S\T');
$import = "INSERT INTO orders (orderid,username,company,contact,email,phone,address1,address2,city,state,zip,shipname,shipphone,shipaddress1,shipaddress2,shipcity,shipstate,shipzip,shipmethod,shippayment,shipupsacct,prodgroup,prodtype,prodqty,prodstyle,jobname,comments,paymethod,paycardnum,paycardexp,paycardccv,jobstatus,trackingnum,date,redcomments)
VALUES ('', '".$_POST['username']."', '".$_POST['company']."', '".$_POST['contact']."', '".$_POST['email']."', '".$_POST['phone']."', '".$_POST['address1']."', '".$_POST['address2']."', '".$_POST['city']."', '".$_POST['state']."', '".$_POST['zip']."', '".$_POST['ShippingName']."', '".$_POST['ShippingPhone']."', '".$_POST['ShippingAddress']."', '".$_POST['ShippingAddress2']."', '".$_POST['ShippingCity']."', '".$_POST['ShippingState']."', '".$_POST['ShippingZip']."', '".$_POST['ShipMethod']."', '".$_POST['ShipPayment']."', '".$_POST['UPS_Acct1']."', '".$_POST['ProductGroup']."', '".$_POST['ProductType']."', '".$_POST['ProductQty']."', '".$_POST['ProductStyle']."', '".$_POST['JobName']."', '".$_POST['Comments']."', '".$_POST['PaymentMethod']."', '".$_POST['CardNum']."', '".$_POST['CardExp']."', '".$_POST['CardCVV']."', 'Order Processing', '', '$date', '')" or die(mysql_error());
mysql_query($import) or die(mysql_error());
mysql_close();
@mysql_connect("localhost", "redmoons_broker", "8hSVGSlkcMcu") or die(mysql_error()); 
mysql_select_db("redmoons_broker") or die(mysql_error()); 
$data = mysql_query("SELECT * FROM orders WHERE jobname = '".$_POST['JobName']."'") or die(mysql_error());
$info = mysql_fetch_array( $data );
mysql_close();
?>
<?php
$rec = $_POST['email'];
$name = $_POST['contact'];
$id = $info['orderid'];
$jobname = $_POST['JobName'];
$prodtype = $info['prodtype'];
$prodqty = $info['prodqty'];
$prodstyle = $info['prodstyle'];
$to = $rec;
$subject = 'Order ' . $id . " - Order Received";
$message = '
Order ' . $id . ' - Order Received

Thank you for your recent order, our ordering processing department has received your job and will review it along with your artwork to ensure a proper completed product.

Your Order Number is: ' . $id . '
Your Job Name is: ' . $jobname . '
Your Order Date is: ' . $date . '

Product Type: ' .$prodtype . '
Product Qty: ' .$prodqty . '
Product Style: ' .$prodstyle . '

You can check the status of your job online at any time 24/7 - Simply use this URL, http://www.redmoonstudios.net/orderdetail.php?orderid=' . $id . '

If you have any questions please feel free to contact us via e-mail at sales@redmoonstudios.net

-------------------------------------------------
NOTICE OF CONFIDENTIALITY
The information contained in this communication
and any accompanying document(s) is proprietary
and confidential and is intended solely for the
above-named individual or entity. If you are not
the intended receiver, recipient or entity, you
are advised that any distribution, copying,
disclosure or communication of this email is
strictly prohibited. If you have received this
email in error, please contact us at the
telephone number listed above.
=================================================
';
$headers .= 'From: Red Moon Studios <sales@redmoonstudios.net>' . "\r\n";
mail($to, $subject, $message, $headers, '-fsales@redmoonstudios.net');
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
<blockquote><br>
  <p><strong><font size="3" face="Verdana, Arial, Helvetica, sans-serif">Broker Order Form - 
    Confirmation</font></strong></p>
  <p><font size="2" face="Verdana, Arial, Helvetica, sans-serif">This is a confirmation of your order. Your order is now in our system and 
    will be processed momentarily. Your Order Number is <strong><?php echo $info['orderid']?></strong>. You can check the status of your order at anytime with this order number.</font></p>
  <p><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Please print this receipt for your records.<br>
    A copy was also sent to your default e-mail address, <?php echo $_POST['email']?></font></p>
  <p><font size="2" face="Verdana, Arial, Helvetica, sans-serif">You can now upload your artwork online, scroll below this receipt for information on how to upload. </font></p>
</blockquote>

      <div align="center">
        <table width="799" border="0" cellpadding="3" cellspacing="1">
          <tr align="left" valign="middle">
            <td colspan="2" bgcolor="#990000"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"><b>Billing Address</b><strong>:</strong></font></td>
          </tr>
          <tr align="left" valign="middle">
            <td width="27%" bgcolor="#003366"><div align="right"><font size="1"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">Company Name:</font></b></font></div></td>
            <td width="73%" bgcolor="#999999"><font size="2"><font color="#000000" size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $_POST['company']?></font></font></td>
          </tr>
          <tr align="left" valign="middle">
            <td width="27%" bgcolor="#003366"><div align="right"><font size="1"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"> Contact:</font></b></font></div></td>
            <td width="73%" bgcolor="#999999"><font size="2"><font color="#000000" size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $_POST['contact']?></font></font></td>
          </tr>
          <tr align="left" valign="middle">
            <td width="27%" bgcolor="#003366"><div align="right"><font size="1"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"> Email:</font></b></font></div></td>
            <td width="73%" bgcolor="#999999"><font size="2"><font color="#000000" size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $_POST['email']?></font></font></td>
          </tr>
          <tr align="left" valign="middle">
            <td width="27%" bgcolor="#003366"><div align="right"><font size="1"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"> Phone:</font></b></font></div></td>
            <td width="73%" bgcolor="#999999"><font size="2"><font color="#000000" size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $_POST['phone']?></font></font></td>
          </tr>
          <tr align="left" valign="middle">
            <td width="27%" bgcolor="#003366"><div align="right"><font size="1"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"> Address:</font></b></font></div></td>
            <td width="73%" bgcolor="#999999"><font size="2"><font color="#000000" size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $_POST['address1']?></font></font></td>
          </tr>
          <tr align="left" valign="middle">
            <td width="27%" bgcolor="#003366"><div align="right"><font size="1"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">Address (con't):</font></b></font></div></td>
            <td width="73%" bgcolor="#999999"><font size="2"><font color="#000000" size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $_POST['address2']?></font></font></td>
          </tr>
          <tr align="left" valign="middle">
            <td width="27%" bgcolor="#003366"><div align="right"><font size="1"><b>
            <font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">              City:</font></b></font></div></td>
            <td width="73%" bgcolor="#999999"><font size="2"><font color="#000000" size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $_POST['city']?></font></font></td>
          </tr>
          <tr align="left" valign="middle">
            <td width="27%" bgcolor="#003366"><div align="right"><font size="1"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"> State:</font></b></font></div></td>
            <td width="73%" bgcolor="#999999"><font size="2"><font color="#000000" size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $_POST['state']?></font></font></td>
          </tr>
          <tr align="left" valign="middle">
            <td width="27%" bgcolor="#003366"><div align="right"><font size="1"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"> Zip Code:</font></b></font></div></td>
            <td width="73%" bgcolor="#999999"><font size="2"><font color="#000000" size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $_POST['zip']?></font></font></td>
          </tr>
        </table>
      </div>
      <div align="center">
        <table width="799" border="0" cellpadding="3" cellspacing="1">
          <tr>
            <td colspan="2" bgcolor="#990000"><font color="#FFFFFF" size="2"><b><font face="Verdana, Arial, Helvetica, sans-serif">Shipping Address: </font> <font size="1" face="Verdana, Arial, Helvetica, sans-serif">(if different than Billing Address)</font></b></font></td>
          </tr>
          <tr>
            <td width="27%" bgcolor="#003366"><div align="right"><font size="1"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">Name:</font></b></font></div></td>
            <td width="73%" bgcolor="#999999" class="small"><font size="2"><font color="#000000" size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $_POST['ShippingName']?></font></font></td>
          </tr>
          <tr>
            <td width="27%" bgcolor="#003366"><div align="right"><font size="1"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">Phone:</font></b></font></div></td>
            <td width="73%" bgcolor="#999999" class="small"><font size="2"><font color="#000000" size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $_POST['ShippingPhone']?></font></font></td>
          </tr>
          <tr>
            <td width="27%" bgcolor="#003366"><div align="right"><font size="1"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">Address:</font></b></font></div></td>
            <td width="73%" bgcolor="#999999" class="small"><font size="2"><font color="#000000" size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $_POST['ShippingAddress']?></font></font></td>
          </tr>
          <tr>
            <td width="27%" bgcolor="#003366"><div align="right"><font size="1"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">Address:</font></b></font></div></td>
            <td width="73%" bgcolor="#999999" class="small"><font size="2"><font color="#000000" size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $_POST['ShippingAddress2']?></font></font></td>
          </tr>
          <tr>
            <td width="27%" bgcolor="#003366"><div align="right"><font size="1"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">City:</font></b></font></div></td>
            <td width="73%" bgcolor="#999999" class="small"><font size="2"><font color="#000000" size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $_POST['ShippingCity']?></font></font></td>
          </tr>
          <tr>
            <td width="27%" bgcolor="#003366"><div align="right"><font size="1"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">State:</font></b></font></div></td>
            <td width="73%" bgcolor="#999999" class="small"><font size="2"><font color="#000000" size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $_POST['ShippingState']?></font></font></td>
          </tr>
          <tr>
            <td bgcolor="#003366"><div align="right"><font size="1"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">Zip Code: </font></b></font></div></td>
            <td bgcolor="#999999" class="small"><font size="2"><font color="#000000" size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $_POST['ShippingZip']?></font></font></td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="#990000"><font face="Verdana, Arial, Helvetica, sans-serif" size="1"><b><font size="2" color="#FFFFFF">Shipping Information:</font></b></font></td>
          </tr>
          <tr>
            <td align="right" valign="top" bgcolor="#003366"><font size="2"><b><font color="#FFFFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif">Shipping Method:</font></b></font></td>
            <td align="left" valign="middle" bgcolor="#999999" class="small"><font size="2"><font color="#000000" size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $_POST['ShipMethod']?></font></font></td>
          </tr>
          <tr>
            <td align="right" valign="top" bgcolor="#003366"><font size="2"><b><font color="#FFFFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif">Shipping Payment: </font></b></font></td>
            <td align="left" valign="middle" bgcolor="#999999"><span class="small"><font size="2"><font color="#000000" size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $_POST['ShipPayment']?> <?php echo $_POST['UPS_Acct1']?></font></font></span></td>
          </tr>
        </table>
      </div>
      <div align="center">
        <table width="799" border="0" cellpadding="3" cellspacing="1">
          <tr>
            <td colspan="6" bgcolor="#990000"><font face="Verdana, Arial, Helvetica, sans-serif" size="1"><b><font size="2" color="#FFFFFF">Job Details: </font></b></font></td>
          </tr>
          <tr>
            <td width="207" bgcolor="#003366"><div align="right"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF"> Product Group:</font></b></font></div></td>
            <td colspan="5" bgcolor="#999999" class="small"><font size="2"><font color="#000000" size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $_POST['ProductGroup']?></font></font></td>
          </tr>
          <tr>
            <td width="207" bgcolor="#003366"><div align="right"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF"> Product Type:</font></b></font></div></td>
            <td colspan="5" bgcolor="#999999" class="small"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $_POST['ProductType']?></font></td>
          </tr>
          <tr>
            <td width="207" bgcolor="#003366"><div align="right"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF"> Quantity:</font></b></font></div></td>
            <td colspan="5" bgcolor="#999999" class="small"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $_POST['ProductQty']?></font></td>
          </tr>
          <tr>
            <td width="207" bgcolor="#003366"><div align="right"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF"> Product Style:</font></b></font></div></td>
            <td colspan="5" bgcolor="#999999" class="small"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $_POST['ProductStyle']?></font></td>
          </tr>
          <tr>
            <td width="207" bgcolor="#003366"><div align="right"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font color="#FFFFFF"> Job Name:</font></b></font></div></td>
            <td colspan="5" bgcolor="#999999"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
              <label><span class="small"><?php echo $_POST['JobName']?></span></label>
            </font></td>
          </tr>
          <tr>
            <td width="207" align="right" valign="top" bgcolor="#003366"><font color="#FFFFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b>Instructions &amp; Comments:</b></font></td>
            <td colspan="5" bgcolor="#999999"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><span class="small"><?php echo $_POST['Comments']?></span></font></td>
          </tr>
          <tr>
            <td colspan="6" bgcolor="#990000"><font face="Verdana, Arial, Helvetica, sans-serif" size="1"><b><font size="2" color="#FFFFFF">Billing Details:</font></b></font></td>
          </tr>
          <tr>
            <td align="right" valign="top" bgcolor="#003366" class="style7"><font size="2"><b><font color="#FFFFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif">Payment Method:</font></b></font></td>
            <td colspan="5" bgcolor="#999999"><span class="small"><font size="2"><font color="#000000" size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $_POST['PaymentMethod']?></font></font></span></td>
          </tr>
          <tr>
            <td bgcolor="#003366"><div align="right"><font color="#FFFFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b>Credit Card Number:</b></font></div></td>
            <td width="139" bgcolor="#999999"><span class="small"><font size="2"><font color="#000000" size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $_POST['CardNum']?></font></font></span></td>
            <td width="132" bgcolor="#003366"><div align="right"><font color="#FFFFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b>Expiration Date :</b></font></div></td>
            <td width="63" bgcolor="#999999"><span class="small"><font size="2"><font color="#000000" size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $_POST['CardExp']?></font></font></span></td>
            <td width="84" bgcolor="#003366"><div align="right"><font color="#FFFFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b>CVV Code: </b></font></div></td>
            <td width="131" bgcolor="#999999"><span class="small"><font size="2"><font color="#000000" size="1" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $_POST['CardCVV']?></font></font></span></td>
          </tr>
        </table>
        <p ALIGN="CENTER"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><b>File Submission Process<br>
          </b></font><font face="Verdana, Arial, Helvetica, sans-serif" size="1">Once 
            you are sure you have prepared your file according to our <a href="javascript:faq_window('faq.htm')">FAQ</a>, 
            the next step will be to upload your print ready files.<br>
            Be sure to put all associated 
            files (artwork, layout, fonts, etc) for your job into a single folder.<br>
        <br>
            PLEASE USE A COMPRESSION UTILITY SUCH AS STUFFIT DELUXE (<a href="http://www.aladdinsys.com">http://www.aladdinsys.com</a>) 
            OR<br>
            WINZIP (<a href="http://www.winzip.com">http://www.winzip.com</a>) TO COMPRESS 
            YOUR JOB FOLDER FOR SUBMISSION.<br>
        <br>
          </font><b><font face="Verdana" size="1">You 
            can upload your files to our servers conveniently through our website. Simply 
            browse for your file then click on the &quot;Send File!&quot; button.<br>
        <br>
        <font size="2"> Be sure 
          to name your file accordingly with your order (JOBNAME-TYPE-QTY-COATING).<br>
          ie: DAVIS-BC-2500-SPOT.zip</font></font></b></p>
        <form action="http://www.redmoonstudios.net/cgi-bin/upload.cgi" method="post" enctype="multipart/form-data">
          <p ALIGN="CENTER"><b><font face="Verdana" size="1">File:</font></b>
              <input type="File" name="FILE1" size="20">
              <br>
              <br>
              <input name="submit" type="submit" value="Send File!">
            &nbsp; <br>
            <b><font face="Verdana, Arial, Helvetica, sans-serif" size="1">PLEASE 
              DO NOT CLICK SEND MORE THAN ONCE. LARGE FILES WILL TAKE LONGER TO SEND.<br>
            <font size="2"><br>
              YOU CAN ALSO FTP UPLOAD YOUR FILES USING THE FOLLOWING SERVER:<br>
              <br>
            </font></font></b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><strong>host: </strong>ftp.redmooonstudios.net<b><br>
              username: </b>files@redmoonstudios.net<b><strong><br>
                password: </strong></b>files2ftp </font></p>
        </form>
        <p ALIGN="CENTER"><font face="Verdana, Arial, Helvetica, sans-serif" size="1">If 
          you have any problems sending your files to us, please contact our order fulfillment 
          department at 888-780-1115</font></p>
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

//if the cookie does not exist, they are taken to the login screen 
{ 
header("Location: index.php"); 
} 
?> 
