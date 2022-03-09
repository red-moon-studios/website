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
<!--//BEGIN Script
function faq_window(url) {
link = window.open(url,"faq","toolbar=0,location=0,directories=0,status=0,menubar=0,scrollbars=1,resizable=1,width=700,height=500");
}
function glossary_window(url) {
link = window.open(url,"glossary","toolbar=0,location=0,directories=0,status=0,menubar=0,scrollbars=1,resizable=1,width=700,height=500");
}
//END Script-->

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
<script language="javascript" src="chainedselects.js">

/***********************************************
* Chained Selects script- By Xin Yang (http://www.yxscripts.com/)
* Script featured on/available at http://www.dynamicdrive.com/
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>
<script language="javascript" src="orderconfig.js"></script>
</HEAD>
<BODY onLoad="initListGroup('products', document.forms[0].ProductGroup, document.forms[0].ProductType, document.forms[0].ProductQty, document.forms[0].ProductStyle, 'cs')" BGCOLOR=#FFFFFF LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0 text="#000000" link="#993333" vlink="#993333" alink="#993333" background="../../images/watermark.jpg">
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
<blockquote>
  <p><strong><font size="3" face="Verdana, Arial, Helvetica, sans-serif"><br>
    Broker Order Form </font></strong></p>
  <p><font face="Verdana, Arial, Helvetica, sans-serif" size="2">If you have any questions or do not understand a term used in the form below, please see our <a href="faq.htm" target="_blank">FAQ</a> section<br>
    or the <a href="glossary.htm" target="_blank">Glossary of Printing Terms and Resource listing</a> before emailing us any questions. </font> </p>
  <p><font face="Verdana, Arial, Helvetica, sans-serif" size="2">If you have still have questions please contact us at <a href="mailto:sales@redmoonstudios.net">sales@redmoonstudios.net</a></font></p>
  <p><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#FF0000">*Denotes a required field.</font></p>
  </blockquote><FORM ACTION="orderreview.php" METHOD="POST" name="order" id="order" class="small" onSubmit="MM_validateForm('CompanyName','','R','realname','','R','email','','RisEmail','BillingPhone','','R','BillingAddress','','R','BillingCity','','R','BillingState','','R','BillingZip','','R','JobName','','R','Quantity','','R');return document.MM_returnValue">
  <p>
    <input type=hidden name="username" value="<?php echo $username?>">
    <input type=hidden name="company" value="<?php echo $info['company']?>">
    <input type=hidden name="contact" value="<?php echo $info['contact']?>">
    <input type=hidden name="email" value="<?php echo $info['email']?>">
    <input type=hidden name="phone" value="<?php echo $info['phone']?>">
    <input type=hidden name="address1" value="<?php echo $info['address1']?>">
    <input type=hidden name="address2" value="<?php echo $info['address2']?>">
    <input type=hidden name="city" value="<?php echo $info['city']?>">
    <input type=hidden name="state" value="<?php echo $info['state']?>">
    <input type=hidden name="zip" value="<?php echo $info['zip']?>">
    </p>
      <div align="center"></div>
      <div align="center">
        <table width="799" border="0" cellpadding="3" cellspacing="1">
          <tr align="left" valign="middle">
            <td colspan="2" bgcolor="#990000"><font face="Verdana, Arial, Helvetica, sans-serif" size="3" color="#FFFFFF"><b>Billing Address</b><strong>:</strong></font><font face="Verdana, Arial, Helvetica, sans-serif"><span class="style5"> <font color="#FFFFFF" size="2">[<a href="userview.php"><font color="#FFFF00">edit profile</font></a>]</font></span></font></td>
            </tr>
          <tr align="left" valign="middle">
            <td width="27%" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">Company Name:<font color="#FF0000">*</font></font></b></font></div></td>
            <td width="73%" bgcolor="#999999"><font size="2"><font color="#000000" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['company']?></font></font></td>
          </tr>
          <tr align="left" valign="middle">
            <td width="27%" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"> Contact:<font color="#FF0000">*</font></font></b></font></div></td>
            <td width="73%" bgcolor="#999999"><font size="2"><font color="#000000" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['contact']?></font></font></td>
          </tr>
          <tr align="left" valign="middle">
            <td width="27%" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"> Email:<font color="#FF0000">*</font></font></b></font></div></td>
            <td width="73%" bgcolor="#999999"><font size="2"><font color="#000000" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['email']?></font></font></td>
          </tr>
          <tr align="left" valign="middle">
            <td width="27%" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"> Phone:<font color="#FF0000">*</font></font></b></font></div></td>
            <td width="73%" bgcolor="#999999"><font size="2"><font color="#000000" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['phone']?></font></font></td>
          </tr>
          <tr align="left" valign="middle">
            <td width="27%" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"> Address:<font color="#FF0000">*</font></font></b></font></div></td>
            <td width="73%" bgcolor="#999999"><font size="2"><font color="#000000" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['address1']?></font></font></td>
          </tr>
          <tr align="left" valign="middle">
            <td width="27%" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">Address (con't):</font></b></font></div></td>
            <td width="73%" bgcolor="#999999"><font size="2"><font color="#000000" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['address2']?></font></font></td>
          </tr>
          <tr align="left" valign="middle">
            <td width="27%" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"> City:<font color="#FF0000">*</font></font></b></font></div></td>
            <td width="73%" bgcolor="#999999"><font size="2"><font color="#000000" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['city']?></font></font></td>
          </tr>
          <tr align="left" valign="middle">
            <td width="27%" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"> State:<font color="#FF0000">*</font></font></b></font></div></td>
            <td width="73%" bgcolor="#999999"><font size="2"><font color="#000000" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $info['state']?></font></font></td>
          </tr>
          <tr align="left" valign="middle">
            <td width="27%" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"> Zip Code:<font color="#FF0000">*</font></font></b></font></div></td>
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
            <td width="73%" bgcolor="#999999" class="small"><input type="text" name="ShippingName" size="30">          </td>
          </tr>
          <tr>
            <td width="27%" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">Phone:</font></b></font></div></td>
            <td width="73%" bgcolor="#999999" class="small"><input type="text" name="ShippingPhone" size="30">          </td>
          </tr>
          <tr>
            <td width="27%" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">Address:</font></b></font></div></td>
            <td width="73%" bgcolor="#999999" class="small"><input type="text" name="ShippingAddress" size="30">          </td>
          </tr>
          <tr>
            <td width="27%" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">Address:</font></b></font></div></td>
            <td width="73%" bgcolor="#999999" class="small"><input type="text" name="ShippingAddress2" size="30">          </td>
          </tr>
          <tr>
            <td width="27%" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">City:</font></b></font></div></td>
            <td width="73%" bgcolor="#999999" class="small"><input type="text" name="ShippingCity" size="30">          </td>
          </tr>
          <tr>
            <td width="27%" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">State:</font></b></font></div></td>
            <td width="73%" bgcolor="#999999" class="small"><select name="ShippingState">
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
            <td bgcolor="#999999" class="small"><input type="text" name="ShippingZip" size="10">            </td>
          </tr>
          <tr>
            <td colspan="2" bgcolor="#990000"><font face="Verdana, Arial, Helvetica, sans-serif" size="1"><b><font size="3" color="#FFFFFF">Shipping Information:</font></b></font></td>
            </tr>
          <tr>
            <td align="right" valign="top" bgcolor="#003366"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">Shipping Method:<font color="#FF0000">*</font></font></b></font></td>
            <td align="left" valign="middle" bgcolor="#999999" class="small"><select name="ShipMethod" size="1">
                <OPTION SELECTED>Please Select</OPTION>
                <option value="Ground">UPS Ground</option>
                <option value="3_Day">UPS 3 Day</option>
                <option value="2_Day">UPS 2nd Day</option>
                <option value="2_Day_AM">UPS 2nd Day A.M.</option>
                <option value="Next_Saver">UPS Next Day Saver</option>
                <option value="Next">UPS Next Day</option>
                <option value="Next_AM">UPS Next Day Early A.M.</option>
            </select></td>
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
            <td colspan="5" bgcolor="#999999" class="small"><select name="ProductGroup" id="ProductGroup">
            </select>            </td>
          </tr>
          <tr>
            <td width="207" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"> Product Type:<font color="#FF0000">*</font></font></b></font></div></td>
            <td colspan="5" bgcolor="#999999" class="small"><select name="ProductType" id="ProductType">
                        </select></td>
          </tr>
          <tr>
            <td width="207" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"> Quantity:<font color="#FF0000">*</font></font></b></font></div></td>
            <td colspan="5" bgcolor="#999999" class="small"><select name="ProductQty" id="ProductQty">
                        </select></td>
          </tr>
          <tr>
            <td width="207" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"> Product Style:<font color="#FF0000">*</font></font></b></font></div></td>
            <td colspan="5" bgcolor="#999999" class="small"><select name="ProductStyle" id="ProductStyle">
                        </select></td>
          </tr>
          <tr>
            <td width="207" bgcolor="#003366"><div align="right"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"> Job Name:<font color="#FF0000">*</font></font></b></font></div></td>
            <td colspan="5" bgcolor="#999999"><label>
              <input name="JobName" type="text" id="JobName">
            </label></td>
          </tr>
          <tr>
            <td width="207" align="right" valign="top" bgcolor="#003366"><font color="#FFFFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font size="2">Instructions &amp; Comments:</font></b></font></td>
            <td colspan="5" bgcolor="#999999"><textarea name="Comments" cols="50" rows="3" wrap="VIRTUAL" class="small"></textarea>            </td>
          </tr>
<!--          <tr>
            <td colspan="6" bgcolor="#990000"><font face="Verdana, Arial, Helvetica, sans-serif" size="1"><b><font size="3" color="#FFFFFF">Billing Details:</font></b></font></td>
            </tr>
          <tr>
            <td align="right" valign="top" bgcolor="#003366" class="style7"><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif">Payment Method:<font color="#FF0000">*</font></font></b></font></td>
            <td colspan="5" bgcolor="#999999"><span class="style10"> <font size="2" face="Verdana, Arial, Helvetica, sans-serif">
              <input type="radio" name="PaymentMethod" value="VISA">
              Visa 
              <input type="radio" name="PaymentMethod" value="MC">
              Master Card               
              <input type="radio" name="PaymentMethod" value="DISC">
            Discover</font></span></td>
          </tr>
          <tr>
            <td bgcolor="#003366"><div align="right"><font color="#FFFFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font size="2">Credit Card Number:</font></b></font><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"><font color="#FF0000">*</font></font></b></font></div></td>
            <td width="139" bgcolor="#999999"><input name="CardNum" type="text" id="CardNum" size="16" maxlength="16"></td>
            <td width="132" bgcolor="#003366"><div align="right"><font color="#FFFFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font size="2">Expiration Date (mm/yy) :</font></b></font><font size="2"><b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"><font color="#FF0000">*</font></font></b></font></div></td>
            <td width="63" bgcolor="#999999"><input name="CardExp" type="text" id="CardExp" size="5" maxlength="5"></td>
            <td width="84" bgcolor="#003366"><div align="right"><font color="#FFFFFF" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b><font size="2">CVV Code:<b><font color="#FFFFFF" face="Verdana, Arial, Helvetica, sans-serif"><font color="#FF0000">*</font></font></b> </font></b></font></div></td>
            <td width="131" bgcolor="#999999"><input name="CardCVV" type="text" id="CardCVV" size="4" maxlength="4"></td>
          </tr> --!>
          </table>
      </div>
      <div align="center">
        <table width="100%" border="0" cellpadding="3" cellspacing="1">
          <tr>
            <td width="27"><table width="775" border="0" align="center" cellpadding="3" cellspacing="1">
              <tr>
                <td valign="top" bgcolor="#FFFFFF"><font size="1" face="Verdana, Arial, Helvetica, sans-serif"><strong>CUSTOMERS</strong>: If you are placing this order in the name of a company, you must be legally authorized to place this order for the company. <strong>PRICING &amp; QUOTATIONS</strong>: Prices published on the Red Moon Studios Broker website are subject to change without notice. Every effort will be made to notify clients of the price increases in advance. Quotations, either emailed or faxed, will be honored for up to 30 days after the quote date. Published prices on the Red Moon Studios Broker website are based on clients supplying digital files prepared according to the guidelines on the Red Moon Studios website. Failure to setup files according to these guidelines may result in additional charges. Changes made by Red Moon Studios to client supplied files can be subject to extra charges. <strong>TERMS OF SALE</strong>: Red Moon Studios accepts cash, personal and company checks, money orders, Visa, MasterCard, American Express and Discover. In the event that a check is returned for non-sufficient funds, the Client will be required to pay a $25.00 NSF fee to Red Moon Studios. In the event of non-payments that lead to dispute and/or litigation, the Client agrees to pay all legal and collection fees incurred by Red Moon Studios. <strong>SALES TAX</strong>: All California orders are subject to sales tax. If customer is tax exempt, exemption certificate must be sent or faxed to us with your first job. <strong>PRODUCTION &amp; TURNAROUND</strong>: Order being ONLY after they have been &quot;received&quot; and successfully completed our initial processing. Orders are considered &quot;received&quot; and are put into production ONLY when the following three conditions have been met: (1) an ORDER FORM has been completely filled out and it accurately describes your project, (2) all files have been correctly submitted, (3) payment has been made (unless you have terms.) Normal turnaround time for printed product is 2-4 business days, if received before 9am PST. Rush Next-Day service available upon request for an additional fee.<strong>PROOFING, COLOR MATCHING &amp; PRINT QUALITY</strong>: Most products ordered through Red Moon Studios are &quot;gang printed.&quot; Red Moon Studios will reproduce color from digital files as closely as possible, but may not exactly match color and density due to limitations in the proofing and printing process, as well as neighboring image ink requirements. A reasonable</font></td>
                <td valign="top" bgcolor="#FFFFFF"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">variation in color between original materials, proofs and the completed order, will be considered acceptable print quality. Clients must provide high resolution images suited to the offset printing process. Red Moon Studios is not liable for images printing poorly due to the Client providing low resolution images. Clients must provide all full color printing images in CMYK format. Red Moon Studios is not responsible for any color shift that occurs in conversions from RGB to CMYK color modes. Full color jobs that contain large solid areas of black ink should have the black set up as Rich Black (see FAQ section of website). Red Moon Studios will not be responsible for printing a consistent, solid and rich black if the Client has not set up their files accordingly. <strong>COMPLAINTS</strong>: All complaints must be made within 10 business days of receipt of the job. Orders with manufacturing errors and/or defects will be rerun on the next available print run at no charge to the client, at the discretion of Red Moon Studios. Red Moon Studios' sole liability shall be limited to reprinting of the order. <strong>ERRORS AND OMISSIONS</strong>: Red Moon Studios is not responsible for errors and omissions approved by the Client. The Client is solely responsible for errors missed during the proofing process of either artwork supplied by the client or artwork created by Red Moon Studios. <strong>INDEMNIFICATION</strong>: The client will indemnify and hold harmless Red Moon Studios from any loss, expense, and damages arising out of violation of copyright or trademark laws from the illegal use of images, photographs, slogans, trademarks, or graphical work supplied by the Client. <strong>DELIVERY &amp; SHIPPING</strong>: All posted transaction times are approximate and although Red Moon Studios will make every effort to meet these delivery times, Red Moon Studios will not be liable for any costs or damages resulting from deliveries made later than expected to the Client. Delays or damages during shipping are the sole responsibility of the carrier providing shipping services. Red Moon Studios is not responsible for delays or damage caused during shipping.</font></td>
              </tr>
              <tr>
                <td colspan="2" align="center" valign="top" bgcolor="#FFFFFF"><font color="#FF0000" size="2" face="Verdana, Arial, Helvetica, sans-serif">By placing an order, you are forming a legally binding contract with<br>
                  Red Moon Studios,
                  for products and services, and you agree<br>
                  to be bound by these Terms and Conditions.<br><br></font>
                  </td>
              </tr>
              </table></td>
            </tr>
          </table>
        <b><font face="Verdana, Arial, Helvetica, sans-serif" size="1">Please click only once.</font></b><br>
        <input type="submit" value="Submit Order Securely" style="font-family: verdana; font-size: 10px">
        </div>
    </form></TD>
  <TD> 
<IMG SRC="../images/spacer.gif" WIDTH=1 HEIGHT=50 ALT=""></TD></TR> <TR> <TD> <IMG SRC="../images/spacer.gif" WIDTH=1 HEIGHT=158 ALT=""></TD></TR> 
<TR> <TD> <IMG SRC="../images/spacer.gif" WIDTH=1 HEIGHT=159 ALT=""></TD></TR> <TR> 
<TD>&nbsp;</TD></TR> <TR> <TD COLSPAN=2 ROWSPAN=3> <IMG SRC="../images/index_35.jpg" ALT="" width="89" height="56"></TD><TD COLSPAN=20>&nbsp; 
</TD><TD> <IMG SRC="../images/spacer.gif" WIDTH=1 HEIGHT=21 ALT=""></TD></TR> <TR> 
<TD COLSPAN=17 BGCOLOR=#FB0000> <font face="Verdana, Arial, Helvetica, sans-serif" size="1" color="#FFFFFF">&copy; 
Copyright 2013 - All Rights Reserved<br> Red Moon Studios, L.L.C. :: San Diego, 
CA 92109</font></TD><TD> <IMG SRC="../images/index_38.jpg" ALT="" width="90" height="31"></TD><TD COLSPAN=2 BGCOLOR=#FB0000> 
<IMG SRC="../images/spacer.gif" WIDTH=29 HEIGHT=31 ALT=""></TD><TD> <IMG SRC="../images/spacer.gif" WIDTH=1 HEIGHT=31 ALT=""></TD></TR> 
<TR> <TD COLSPAN=17 ROWSPAN=2>&nbsp; </TD><TD COLSPAN=3 ROWSPAN=2> <IMG SRC="../images/index_41.jpg" ALT="" width="119" height="25"></TD><TD> 
<IMG SRC="../images/spacer.gif" WIDTH=1 HEIGHT=4 ALT=""></TD></TR> <TR> <TD COLSPAN=2>&nbsp; 
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
} 
} 
else 

//if the cookie does not exist, they are taken to the login screen 
{ 
header("Location: index.php"); 
} 
?> 
