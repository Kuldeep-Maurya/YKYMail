<?php
error_reporting(0);
if(isset($_POST['rp']))
{
	$email=$_POST['e'];
	$sn=$_POST['sn'];
	$mobile=$_POST['m'];
    $newp=$_POST['np'];
	$conp=$_POST['cp'];

	
	if(file_exists("User_Data/$email"))
	{
	
		if(file_exists("User_Data/$email/$sn") && file_exists("User_Data/$email/$mobile"))
		{
			if($newp==$conp)
			{
			$fo=fopen("User_Data/$email/password","w");
			fwrite($fo,$newp);	
			$msg="<font color='green'>Password Successfully Reset</font>";
			}
			else
			{
			$msg="<font color='blue' face='cursive'>Confirm Password Does Not Match</font>";
			}
		}
		else
		{
		$msg="<font color='red' face='cursive'>Incorrect Security Number or Mobile Number</font>";
		}
	}
	else
		{
		$msg="<font color='red' face='cursive'>Invalid Email ID</font>";
		}		
}
?>
<html>
<head>
<title>YKYmail:Forgot Password</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
<style>
h2{font-size:20px; padding:0px; font-family:Kristen ITC}
td{font-size:14px; padding:0px; font-family:Kristen ITC}
input[type=submit]:hover{color:#ffffff;background:#1a1aff}
input[type=reset]:hover{color:#ffffff;background:#1a1aff}
input[type=submit]{width:100px}
input[type=reset]{width:100px}
</style>
</head>
<body>
<table border="0">
	<caption><h2 style="color:#123456">Password Recovery</h2>
	</caption>
		<form method="post" enctype="multipart/form-data">
			<tr>
				<td colspan="2"><?php echo @$msg;?></td>
			</tr>
			<tr>
				<td width="173">Email Id:</td>
			  <td width="145"><input type="email" placeholder="" name="e"></td>
			</tr>
			<tr>
				<td>Security Number:</td>
                <td><input type="text" placeholder="" name="sn"></td>
            </tr> 
            <tr>
                <td>Mobile Number</td>
                <td><input type="number" name="m"/></td>
            </tr>
			<tr>
                <td>New Password</td>
                <td><input type="password" name="np"/></td>
            </tr>
			<tr>
                <td>Your Confirm Password</td>
                <td><input type="password"  name="cp"/></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Reset" name="rp"></td>
            </tr>
  </form>
</table>          
</body>
</html>
