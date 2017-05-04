
<html>
<head>
<title>YKYMail</title>
<?php
if(isset($_POST['l']))
{
	$email=$_POST['e'];
	$pass=$_POST['p'];
	$fo=fopen("User_Data/$email/password","r");
	$filesize=filesize("User_Data/$email/password");
	$msg=fread($fo,$filesize);	
	if(file_exists("User_Data/$email") && !strcmp($pass,$msg))
	{
	$_SESSION['user']=$email;
	echo "<script>window.location='home.php?option=welcome'</script>";
	}
	else
	{
	echo "<h1 align='center'><font color='red' face='cursive'>Invalid User</font></h1>";
	}
	
}
@$ot=$_GET['fpassw'];
echo $ot;
switch($ot)
	{
	case 'fpass';
	include('forgot.php');
	break;
	}
?>
<link rel="stylesheet" type="text/css" href="style.css"/>
<style>
input[type=submit]:hover{color:#ffffff;background:#1a1aff}
input[type=reset]:hover{color:#ffffff;background:#1a1aff}
input[type=submit]{width:100px}
input[type=reset]{width:100px}
td{font-size:14px; padding:1px; font-family:Kristen ITC}
</style>
</head>
<body>
<form method="post" enctype="multipart/form-data">
<br>
<table width="403" border="0"cellspacing="10">
  <tr>
    <td width="147">Email Id:</td>
    <td width="222"><input type="email" placeholder="xyz@ykymail.com" name="e" required/></td>
  </tr>
  <tr>
    <td>Password:</td>
    <td><input type="password" name="p" required/></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" value="Login" name="l"/>
	<h5><a href="index.php?option=fpass" class=control3><font color="red">Forgot Password, Reset it!!</a></td></h5>
  </tr>
</table>
</form>
</body>
</html>
