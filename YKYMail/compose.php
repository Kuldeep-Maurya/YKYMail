<?php
$user=$_SESSION['user'];
if(isset($_POST['send']))
{
	$to=$_POST['to'];
	$sub=$_POST['sub'];
	$msg=$_POST['msg'];
	if(file_exists("User_Data/$to"))
	{
	//for recever
	$subj=$user." ".$sub;
	$fo=fopen("User_Data/$to/inbox/$subj","w");
	fwrite($fo,$msg);
	//for sender
	$subj1=$to." ".$sub;
	$fo1=fopen("User_Data/$user/sent/$subj1","w");
	fwrite($fo1,$msg);
	$err="<font color='green'>Message Successfully Sent</font>";
	}
	else
	{
	// for recever
	$subj=$to." ".$sub."Message Failed";
	$fo=fopen("User_Data/$user/inbox/$subj","w");
	fwrite($fo,$msg);
	// for sender
	$subj1=$to." ".$sub;
	$fo1=fopen("User_Data/$user/sent/$subj1","w");
	fwrite($fo1,$msg);
	$err="<font color='red'>Message Failed</font>";
	}
}
if(isset($_POST['save']))
{
	$err="<font color='blue'>Message Successfully Saved???</font>";
	$sub=$_POST['sub'];
	$msg=$_POST['msg'];
	$subj=$user." ".$sub;
	$fo=fopen("User_Data/$user/draft/$subj","w");
	fwrite($fo,$msg);
	$err="<font color='blue'>Message Successfully Save</font>";
}
?>
<html>
<head>
<title>YKYmail</title>
<style>
input{width:500px;border-radius:10px;background-color:#FFffFF;color:#000000}
textarea{border-radius:10px;background-color:#ffffff;color:#000000}
input[type=submit]{width:100px;background:#44ddbb}
input[type=reset]{width:100px;background:#b3dd44}
input[type=submit]:hover{color:#ffffff; background:#1a1aff}
input[type=reset]:hover{color:#ffffff; background:#dd4466}
</style>
</head>
<body>
<table border="0" width="100%" height="100%" align="center" bgcolor="#d0e4f7">
<form method="post">
			<tr>
				<td colspan="2" align="center"><?php echo @$err;?></td>
			</tr>
			<tr>
				<td width="57">To :</td>
				<td width="447"><input type="email" placeholder="abc@ykymail.com" name="to"  required/></td>
			</tr>
			<tr>
				<td>Subject :</td>
				<td><input type="text" name="sub" required/></td>
			</tr>
			<tr>
				<td>Message :</td>
				<td><textarea rows="25" cols="70" name="msg" required/></textarea></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
				<input type="submit" value="Send" name="send"/>				
				<input type="reset" value="Clear"/>
				<input type="submit" value="Save" name="save"/>
				</td>
			</tr>
</form>
</table>			
</body>
</html>
