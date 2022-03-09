<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<?php 
// Connects to your Database 
@mysql_connect("localhost", "redmoons_broker", "8hSVGSlkcMcu") or die(mysql_error()); 
mysql_select_db("redmoons_broker") or die(mysql_error()); 

//This code runs if the form has been submitted
if (isset($_POST['submit'])) { 

//This makes sure they did not leave any fields blank
if (!$_POST['username'] | !$_POST['pass'] | !$_POST['pass2'] | !$_POST['company'] | !$_POST['contact'] | !$_POST['email'] | !$_POST['address1'] | !$_POST['phone'] | !$_POST['city'] | !$_POST['state'] | !$_POST['zip'] ) {
die('You did not complete all of the required fields');
}

// checks if the username is in use
if (!get_magic_quotes_gpc()) {
$_POST['username'] = addslashes($_POST['username']);
}
$usercheck = $_POST['username'];
$check = mysql_query("SELECT username FROM users WHERE username = '$usercheck'") 
or die(mysql_error());
$check2 = mysql_num_rows($check);

//if the name exists it gives an error
if ($check2 != 0) {
die('Sorry, the username '.$_POST['username'].' is already in use.');
}

// this makes sure both passwords entered match
if ($_POST['pass'] != $_POST['pass2']) {
die('Your passwords did not match.');
}

// here we encrypt the password and add slashes if needed
$_POST['pass'] = md5($_POST['pass']);
if (!get_magic_quotes_gpc()) {
$_POST['pass'] = addslashes($_POST['pass']);
$_POST['username'] = addslashes($_POST['username']);
}

// now we insert it into the database
$insert = "INSERT INTO users (username, password, company, contact, email, address1, address2, phone, city, state, zip)
VALUES ('".$_POST['username']."', '".$_POST['pass']."', '".$_POST['company']."', '".$_POST['contact']."', '".$_POST['email']."', '".$_POST['address1']."', '".$_POST['address2']."', '".$_POST['phone']."', '".$_POST['city']."', '".$_POST['state']."', '".$_POST['zip']."')";
$add_member = mysql_query($insert);
mysql_close();
?>


<h1>Registered</h1>
<p>Thank you, you have registered - you may now login</a>.</p>
<?php 
} 
else 
{	
?>

<!-- This is what they see before they have registered -->
<form action="<?php echo $_SERVER['../PHP_SELF']; ?>" method="post">
<table border="0">
<tr><td>Username:</td><td>
<input type="text" name="username" maxlength="60">
</td></tr>
<tr><td>Password:</td><td>
<input type="password" name="pass" maxlength="10">
</td></tr>
<tr>
  <td>Password (again): </td>
  <td><input name="pass2" type="password" id="pass2" maxlength="10" />
  </td>
</tr>
<tr>
  <td>Company Name:</td>
  <td><input name="company" type="text" id="company" maxlength="60" />  </td>
</tr>
<tr>
  <td>Contact:</td>
  <td><input name="contact" type="text" id="contact" maxlength="60" />  </td>
</tr>
<tr>
  <td>E-Mail:</td>
  <td><input name="email" type="text" id="email" maxlength="60" />  </td>
</tr>
<tr>
  <td>Phone: </td>
  <td><input name="phone" type="text" id="phone" maxlength="12" />  </td>
</tr>
<tr>
  <td>Address:</td>
  <td><input name="address1" type="text" id="address1" maxlength="60" />  </td>
</tr>
<tr>
  <td>Address (con't): </td>
  <td><input name="address2" type="text" id="address2" maxlength="60" />  </td>
</tr>
<tr>
  <td>City:</td>
  <td><input name="city" type="text" id="city" maxlength="60" />  </td>
</tr>
<tr>
  <td>State:</td>
  <td><input name="state" type="text" id="state" maxlength="2" />  </td>
</tr>
<tr>
  <td>Zip:</td>
  <td><input name="zip" type="text" id="zip" maxlength="10" />  </td>
</tr>
<tr><th colspan=2><input type="submit" name="submit" value="Register"></th></tr> </table>
</form>

<?php 
} 
?>
</body>
</html>
