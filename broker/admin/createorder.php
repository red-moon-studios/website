<?php
@mysql_connect("localhost", "redmoons_broker", "8hSVGSlkcMcu") or die(mysql_error());
mysql_select_db("redmoons_broker") or die(mysql_error());
if (isset($_POST['submit'])) {
$jobcheck = $_POST['jobname'];
$check = mysql_query("SELECT * FROM orders WHERE jobname = '$jobcheck'")or die(mysql_error());
$check2 = mysql_num_rows($check);
if ($check2 != 0) {
die('Sorry, there is already a job in our system with that name. $jobcheck Please use a different name. Click your browsers back button to return to the form.');
}
$date = date('D M j Y \- h\:i\:sa \C\S\T');
$import = "INSERT INTO orders (orderid,username,company,contact,email,phone,address1,address2,city,state,zip,shipname,shipphone,shipaddress1,shipaddress2,shipcity,shipstate,shipzip,shipmethod,shippayment,shipupsacct,prodgroup,prodtype,prodqty,prodstyle,jobname,comments,paymethod,paycardnum,paycardexp,paycardccv,jobstatus,trackingnum,date,redcomments)
VALUES ('', 'Manual Entry', '".$_POST['company']."', '".$_POST['contact']."', '".$_POST['email']."', '".$_POST['phone']."', '".$_POST['address1']."', '".$_POST['address2']."', '".$_POST['city']."', '".$_POST['state']."', '".$_POST['zip']."', '".$_POST['shipname']."', '".$_POST['shipphone']."', '".$_POST['shipaddress1']."', '".$_POST['shipaddress2']."', '".$_POST['shipcity']."', '".$_POST['shipstate']."', '".$_POST['shipzip']."', '".$_POST['shipmethod']."', '".$_POST['shippayment']."', '".$_POST['shipupsacct']."', '".$_POST['prodgroup']."', '".$_POST['prodtype']."', '".$_POST['prodqty']."', '".$_POST['prodstyle']."', '$jobcheck', '".$_POST['comments']."', '".$_POST['paymethod']."', '".$_POST['paycardnum']."', '".$_POST['paycardexp']."', '".$_POST['paycardcvv']."', 'Order Processing', '', '$date', '')" or die(mysql_error());
mysql_query($import) or die(mysql_error());
mysql_close();
?>
<?php
@mysql_connect("localhost", "redmoons_broker", "8hSVGSlkcMcu") or die(mysql_error());
mysql_select_db("redmoons_broker") or die(mysql_error());
$data = mysql_query("SELECT * FROM orders WHERE jobname = '$jobcheck'") or die(mysql_error());
$info = mysql_fetch_array( $data );
mysql_close();
?>
<h1>Order Created</h1>
<p>You have created this order.</p>
<p>Order ID: <?php echo $info['orderid']?></p>
<p>[<a href="index.php">return home</a>]</p>
<?php
$to = $info['email'];
$subject = 'Order ' . $info['orderid'] . " - Order Received";
$message = '
Order ' . $info['orderid'] . ' - Order Received

Thank you for your recent order, our ordering processing department has received your job and will review it along with your artwork to ensure a proper completed product.

Your Order Number is: ' . $info['orderid'] . '
Your Job Name is: ' . $info['jobname'] . '
Your Order Date is: ' . $info['date'] . '

Product Type: ' . $info['prodtype'] . '
Product Qty: ' . $info['prodqty'] . '
Product Style: ' . $info['prodstyle'] . '

You can check the status of your job online at any time 24/7 - Simply use this URL, http://www.redmoonstudios.net/orderdetail.php?orderid=' . $info['orderid'] . '

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
<?php
}
else
{
?>
<HTML>
<HEAD>
<TITLE>:: Red Moon Studios, Inc. - Graphic Design, Custom Web Work, Printing, Marketing and Consulting ::</TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<meta name="ICBM" content="32.79643, -117.24090">
<meta name="DC.title" content="Red Moon Studios, Inc. - Graphic Design, Custom Web Work, Printing, Marketing and Consulting">
<META name="description" contents="Red Moon Studios offers full service printing and design solutions. Our specialty is full color UV coated printed material, but we have the ability to print on almost any paper with any ink or coating. Our full service design staff can help you gain the exposure your company needs to succeed.">
<META name="keywords" content="design,printing,consulting,advertising,marketing,gang runs,full color press,full color printing,graphic design,web design,print broker,print,commercial printing,web press,offset printing,bar code printing,book printing,brochure printing,business card printing,catalog printing,cd printing,check printing,check printing software,commercial printing,custom web design,custom web site design,design,digital photo printing,digital printing,ecommerce web site design,government printing office,graphic design,logo design,offset printing,post card printing,poster printing,printing,printing company,printing job,printing photo,printing press,printing service,printing services,screen printing,screen printing equipment,t shirt printing,web design,web page design,web site design">
<meta name="Robots" content="ALL">
<meta name="rating" content="general">
<meta name="owner" content="sales@redmoonstudios.net">
<meta name="Revisit-after" content="15 days">
<script language="JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
<script language="javascript" src="../chainedselects.js">

/***********************************************
* Chained Selects script- By Xin Yang (http://www.yxscripts.com/)
* Script featured on/available at http://www.dynamicdrive.com/
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>
<script language="javascript" src="../orderconfig.js"></script>
</HEAD>
<BODY onLoad="initListGroup('products', document.forms[0].ProductGroup, document.forms[0].ProductType, document.forms[0].ProductQty, document.forms[0].ProductStyle, 'cs')" BGCOLOR=#FFFFFF LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0 text="#000000" link="#993333" vlink="#993333" alink="#993333" background="../../../images/watermark.jpg">
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
<blockquote>
  <p><strong><font size="3" face="Verdana, Arial, Helvetica, sans-serif"><br>
    Red Moon Studios - Sales Order Form <br>
  </font></strong><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FF0000">*Denotes a required field.</font></p>
  </blockquote><FORM ACTION="<?php echo $_SERVER['../PHP_SELF']; ?>" METHOD="POST" name="order" id="order" class="small" onSubmit="MM_validateForm('CompanyName','','R','realname','','R','email','','RisEmail','BillingPhone','','R','BillingAddress','','R','BillingCity','','R','BillingState','','R','BillingZip','','R','JobName','','R','Quantity','','R');return document.MM_returnValue">
      <div align="center">
        <table width="799" border="0" cellpadding="3" cellspacing="1">
          <tr align="left" valign="middle">
            <td colspan="2" bgcolor="#990000"><font face="Verdana, Arial, Helvetica, sans-serif" size="3" color="#FFFFFF"><b>Billing Address</b><strong>:</strong></font></td>
            </tr>
          <tr align="left" valign="middle">
            <td width="27%" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">Company Name:<font color="#FF0000">*</font></font></b></font></div></td>
            <td width="73%" bgcolor="#999999"><input type="text" name="company" size="30"></td>
          </tr>
          <tr align="left" valign="middle">
            <td width="27%" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"> Contact:<font color="#FF0000">*</font></font></b></font></div></td>
            <td width="73%" bgcolor="#999999"><input type="text" name="contact" size="30"></td>
          </tr>
          <tr align="left" valign="middle">
            <td width="27%" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"> Email:<font color="#FF0000">*</font></font></b></font></div></td>
            <td width="73%" bgcolor="#999999"><input type="text" name="email" size="30"></td>
          </tr>
          <tr align="left" valign="middle">
            <td width="27%" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"> Phone:<font color="#FF0000">*</font></font></b></font></div></td>
            <td width="73%" bgcolor="#999999"><input type="text" name="phone" size="30"></td>
          </tr>
          <tr align="left" valign="middle">
            <td width="27%" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"> Address:<font color="#FF0000">*</font></font></b></font></div></td>
            <td width="73%" bgcolor="#999999"><input type="text" name="address1" size="30"></td>
          </tr>
          <tr align="left" valign="middle">
            <td width="27%" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">Address (con't):</font></b></font></div></td>
            <td width="73%" bgcolor="#999999"><input type="text" name="address2" size="30"></td>
          </tr>
          <tr align="left" valign="middle">
            <td width="27%" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"> City:<font color="#FF0000">*</font></font></b></font></div></td>
            <td width="73%" bgcolor="#999999"><input type="text" name="city" size="30"></td>
          </tr>
          <tr align="left" valign="middle">
            <td width="27%" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"> State:<font color="#FF0000">*</font></font></b></font></div></td>
            <td width="73%" bgcolor="#999999"><select name="state">
              <option value="" selected>Select State</option>
              <option></option>
              <option value="AK">Alaska
                <option value="AL">Alabama
                  <option value="AR">Arkansas
                  <option value="AZ">Arizona
                  <option value="CA">California
                  <option value="CO">Colorado
                  <option value="CT">Connecticut
                  <option value="DC">Dist of Columbia
                  <option value="DE">Deleware
                  <option value="FL">Florida
                  <option value="GA">Georgia
                  <option value="HI">Hawaii
                  <option value="IA">Iowa
                  <option value="ID">Idaho
                  <option value="IL">Illinois
                  <option value="IN">Indiana
                  <option value="KS">Kansas
                  <option value="KY">Kentucky
                  <option value="LA">Louisiana
                  <option value="MA">Massachusetts
                  <option value="MD">Maryland
                  <option value="ME">Maine
                  <option value="MI">Michigan
                  <option value="MN">Minnesota
                  <option value="MO">Missouri
                  <option value="MS">Mississippi
                  <option value="MT">Montana
                  <option value="NC">North Carolina
                  <option value="ND">North Dakota
                  <option value="NE">Nebraska
                  <option value="NH">New Hampshire
                  <option value="NJ">New Jersey
                  <option value="NM">New Mexico
                  <option value="NV">Nevada
                  <option value="NY">New York
                  <option value="OH">Ohio
                  <option value="OK">Oklahoma
                  <option value="OR">Oregon
                  <option value="PA">Pennsylvania
                  <option value="PR">Puerto Rico
                  <option value="RI">Rhode Island
                  <option value="SC">South Carolina
                  <option value="SD">South Dakota
                  <option value="TN">Tennessee
                  <option value="TX">Texas
                  <option value="UT">Utah
                  <option value="VA">Virginia
                  <option value="VT">Vermont
                  <option value="WA">Washington
                  <option value="WI">Wisconsin
                  <option value="WV">West Virginia
                  <option value="WY">Wyoming
                  <option value="Other">Other
              </select></td>
          </tr>
          <tr align="left" valign="middle">
            <td width="27%" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"> Zip Code:<font color="#FF0000">*</font></font></b></font></div></td>
            <td width="73%" bgcolor="#999999"><input type="text" name="zip" size="10"></td>
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
            <td width="73%" bgcolor="#999999" class="small"><input type="text" name="shipname" size="30">          </td>
          </tr>
          <tr>
            <td width="27%" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">Phone:</font></b></font></div></td>
            <td width="73%" bgcolor="#999999" class="small"><input type="text" name="shipphone" size="30">          </td>
          </tr>
          <tr>
            <td width="27%" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">Address:</font></b></font></div></td>
            <td width="73%" bgcolor="#999999" class="small"><input type="text" name="shipaddress1" size="30">          </td>
          </tr>
          <tr>
            <td width="27%" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">Address:</font></b></font></div></td>
            <td width="73%" bgcolor="#999999" class="small"><input type="text" name="shipaddress2" size="30">          </td>
          </tr>
          <tr>
            <td width="27%" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">City:</font></b></font></div></td>
            <td width="73%" bgcolor="#999999" class="small"><input type="text" name="shipcity" size="30">          </td>
          </tr>
          <tr>
            <td width="27%" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">State:</font></b></font></div></td>
            <td width="73%" bgcolor="#999999" class="small"><select name="shipstate">
              <option value="" selected>Select State</option>
              <option></option>
              <option value="AK">Alaska
                <option value="AL">Alabama
                  <option value="AR">Arkansas
                  <option value="AZ">Arizona
                  <option value="CA">California
                  <option value="CO">Colorado
                  <option value="CT">Connecticut
                  <option value="DC">Dist of Columbia
                  <option value="DE">Deleware
                  <option value="FL">Florida
                  <option value="GA">Georgia
                  <option value="HI">Hawaii
                  <option value="IA">Iowa
                  <option value="ID">Idaho
                  <option value="IL">Illinois
                  <option value="IN">Indiana
                  <option value="KS">Kansas
                  <option value="KY">Kentucky
                  <option value="LA">Louisiana
                  <option value="MA">Massachusetts
                  <option value="MD">Maryland
                  <option value="ME">Maine
                  <option value="MI">Michigan
                  <option value="MN">Minnesota
                  <option value="MO">Missouri
                  <option value="MS">Mississippi
                  <option value="MT">Montana
                  <option value="NC">North Carolina
                  <option value="ND">North Dakota
                  <option value="NE">Nebraska
                  <option value="NH">New Hampshire
                  <option value="NJ">New Jersey
                  <option value="NM">New Mexico
                  <option value="NV">Nevada
                  <option value="NY">New York
                  <option value="OH">Ohio
                  <option value="OK">Oklahoma
                  <option value="OR">Oregon
                  <option value="PA">Pennsylvania
                  <option value="PR">Puerto Rico
                  <option value="RI">Rhode Island
                  <option value="SC">South Carolina
                  <option value="SD">South Dakota
                  <option value="TN">Tennessee
                  <option value="TX">Texas
                  <option value="UT">Utah
                  <option value="VA">Virginia
                  <option value="VT">Vermont
                  <option value="WA">Washington
                  <option value="WI">Wisconsin
                  <option value="WV">West Virginia
                  <option value="WY">Wyoming
                  <option value="Other">Other
              </select>          </td>
          </tr>
          <tr>
            <td bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">Zip Code: </font></b></font></div></td>
            <td bgcolor="#999999" class="small"><input type="text" name="shipzip" size="10">            </td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="#990000"><font face="Verdana, Arial, Helvetica, sans-serif" size="1"><b><font size="3" color="#FFFFFF">Shipping Information:</font></b></font></td>
            </tr>
          <tr>
            <td align="right" valign="top" bgcolor="#003366"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">Shipping Method:<font color="#FF0000">*</font></font></b></font></td>
            <td align="left" valign="middle" bgcolor="#999999" class="small"><select name="shipmethod" size="1">
                <OPTION SELECTED>Please Select</OPTION>
                <option value="Will-Call">Will-Call/Pickup</option>
                <option value="Contact Customer">Call For Shipping</option>
                <option value="Ground">UPS Ground</option>
                <option value="3_Day">UPS 3 Day</option>
                <option value="2_Day">UPS 2nd Day</option>
                <option value="2_Day_AM">UPS 2nd Day A.M.</option>
                <option value="Next_Saver">UPS Next Day Saver</option>
                <option value="Next">UPS Next Day</option>
                <option value="Next_AM">UPS Next Day A.M.</option>
                <option value="Courier">Trucking/Courier</option>
                <option value="Southwest">Southwest Collect</option>
                <option value="AmericaWest">AmericaWest Collect</option>
                <option value="Continental">Continental Collect</option>
                <option value="Delta">Delta Dash</option>
            </select></td>
          </tr>
          <tr>
            <td align="right" valign="top" bgcolor="#003366"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">Shipping Payment: </font></b></font></td>
            <td align="left" valign="middle" bgcolor="#999999"><span class="style12">
              <font size="2" face="Verdana, Arial, Helvetica, sans-serif">
<input type="radio" name="shippayment" value="Bill_Me">
Bill Me<br>
  <input type="radio" name="shippayment" value="UPS_Acct">
Use My UPS Account:
<input name="shipupsacct" type="text" id="shipupsacct" size="6" maxlength="6">
              </font></span></td>
          </tr>
          </table>
      </div>
      <div align="center">
        <table width="799" border="0" cellpadding="3" cellspacing="1">
          <tr>
            <td colspan="6" bgcolor="#990000"><font face="Verdana, Arial, Helvetica, sans-serif" size="1"><b><font size="3" color="#FFFFFF">Job Details: </font></b></font></td>
            </tr>
          <tr>
            <td width="207" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"> Product Group:<font color="#FF0000">*</font></font></b></font></div></td>
            <td colspan="5" bgcolor="#999999" class="small"><select name="prodgroup" id="ProductGroup">
            </select>            </td>
          </tr>
          <tr>
            <td width="207" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"> Product Type:<font color="#FF0000">*</font></font></b></font></div></td>
            <td colspan="5" bgcolor="#999999" class="small"><select name="prodtype" id="ProductType">
                        </select></td>
          </tr>
          <tr>
            <td width="207" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"> Quantity:<font color="#FF0000">*</font></font></b></font></div></td>
            <td colspan="5" bgcolor="#999999" class="small"><select name="prodqty" id="ProductQty">
                        </select></td>
          </tr>
          <tr>
            <td width="207" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"> Product Style:<font color="#FF0000">*</font></font></b></font></div></td>
            <td colspan="5" bgcolor="#999999" class="small"><select name="prodstyle" id="ProductStyle">
                        </select></td>
          </tr>
          <tr>
            <td width="207" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"> Job Name:<font color="#FF0000">*</font></font></b></font></div></td>
            <td colspan="5" bgcolor="#999999"><label>
              <input name="jobname" type="text" id="jobname">
            </label></td>
          </tr>
          <tr>
            <td width="207" align="right" valign="top" bgcolor="#003366"><font color="#FFFFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font size="2">Instructions &amp; Comments:</font></b></font></td>
            <td colspan="5" bgcolor="#999999"><textarea name="comments" cols="50" rows="3" wrap="VIRTUAL" class="small"></textarea>            </td>
          </tr>
<!--          <tr>
            <td colspan="6" bgcolor="#990000"><font face="Verdana, Arial, Helvetica, sans-serif" size="1"><b><font size="3" color="#FFFFFF">Billing Details:</font></b></font></td>
            </tr>
          <tr>
            <td align="right" valign="top" bgcolor="#003366" class="style7"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">Payment Method:<font color="#FF0000">*</font></font></b></font></td>
            <td colspan="5" bgcolor="#999999"><span class="style10"> <font size="2" face="Verdana, Arial, Helvetica, sans-serif">
              <input type="radio" name="paymethod" value="Credit Card">
              Credit Card<br>
              <input type="radio" name="paymethod" value="PayPal">
              PayPal<br>
              <input type="radio" name="paymethod" value="Terms">
              Terms</font></span></td>
          </tr>
          <tr>
            <td bgcolor="#003366"><div align="right"><font color="#FFFFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font size="2">Credit Card Number:</font></b></font></div></td>
            <td width="139" bgcolor="#999999"><input name="paycardnum" type="text" id="CardNum" size="16" maxlength="16"></td>
            <td width="132" bgcolor="#003366"><div align="right"><font color="#FFFFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font size="2">Expiration Date :</font></b></font></div></td>
            <td width="63" bgcolor="#999999"><input name="paycardexp" type="text" id="CardExp" size="5" maxlength="5"></td>
            <td width="84" bgcolor="#003366"><div align="right"><font color="#FFFFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font size="2">CVV Code: </font></b></font></div></td>
            <td width="131" bgcolor="#999999"><input name="paycardcvv" type="text" id="CardCVV" size="4" maxlength="4"></td>
          </tr> --!>
          </table>
      </div>
      <div align="center">
        <input name="submit" type="submit" id="submit" style="font-family: verdana; font-size: 10px" value="Submit Order">
        </div>
    </form></TD>
  <TD>
<IMG SRC="../../images/spacer.gif" WIDTH=1 HEIGHT=50 ALT=""></TD></TR> <TR> <TD></TD>
</TR>
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
