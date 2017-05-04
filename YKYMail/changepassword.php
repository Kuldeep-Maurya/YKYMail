<?php
if(isset($_POST['c']))
{
$user=$_SESSION['user'];
$op=$_POST['op'];
$np=$_POST['np'];
$cp=$_POST['cp'];
@$fo=fopen("User_Data/$user/password","r");
@$filesize=filesize("User_Data/$user/password");
@$oldp=fread($fo,$filesize);
	if(!strcmp($op,$oldp))
	{
		if($np==$cp)
		{
		$fo=fopen("User_Data/$user/password","w");
		fwrite($fo,$np);
		$err="<font color='blue'>Password Successfully Change</font>";		
		}
		else
		{
		$err="<font color='blue'>Confirm Password Does Not Match</font>";
		}
	}
	else
	{
	$err="<font color='red'>Old Password Does Not Match</font>";
	}
}
?>

<html>
<head>
<title>YKYmail:Change Password</title>
<style>
input{width:200px;border-radius:10px;background-color:#FFffFF;color:#000000}
input[type=submit]:hover{color:#ffffff;background:#1a1aff}
input[type=reset]:hover{color:#ffffff;background:#1a1aff}
input[type=submit]{width:100px;background:#44ddbb}
input[type=reset]{width:100px}
</style>
</head>
<body>
<form method="post">
<table width="400" border="0"><br><br><br><br>
  <caption><font color="#660066" face="cursive" size="+2">Change Password</font></caption>
  <tr>
    <td colspan="2" align="center"><?php echo @$err; ?></td>
  </tr>
  <tr>
    <td width="130">Old Password:</td>
    <td width="120"><input type="password" name="op"/></td>
  </tr>
  <tr>
    <td>New Password:</td>
    <td><input type="password"  name="np"/></td>
  </tr>
  <tr>
    <td>Confirm Password:</td>
    <td><input type="password" name="cp"/></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input  type="submit" value="OK" name="c"/></td>
  </tr>
</table>
</form>
</body>
</html>
