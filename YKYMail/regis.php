
<html>
<head>
<?php 
if(isset($_POST['save']))
{

	$n=$_POST['n'];
	$e=$_POST['e'];
	$p=$_POST['p'];
	$m=$_POST['m'];
	$a=$_POST['a'];
	$sn=$_POST['sn'];
	if(!strpos("User_Data/$e","@ykymail.com",0))
	{
		$msg="<font color='red' face='cursive'>  Invalid Email id,only 'ykymail.com' allowed!!</font>";
	}
	else if(file_exists("User_Data/$e"))
	{
	$msg="<font color='green' face='cursive'>User Already Exists, Choose a Different email id or Sign in Now</font>";
	}
	else
	{
	mkdir("User_Data/$e");
	mkdir("User_Data/$e/inbox");
	mkdir("User_Data/$e/sent");
	mkdir("User_Data/$e/draft");
	mkdir("User_Data/$e/trash");
	//mkdir("User_Data/$e/password");
	move_uploaded_file($_FILES['img']['tmp_name'],"User_Data/$e/profilepic.jpg");
	$fo=fopen("User_Data/$e/password","w");
	$fo1=fopen("User_Data/$e/profile","w");
	$fm=fopen("User_Data/$e/$m","w");
	$mm=fopen("User_Data/$e/$sn","w");
	$name=fopen("User_Data/$e/uname","w");
	$ftheme = fopen("User_Data/$e/theme","w");
	fwrite($ftheme,"default.jpg");
	fwrite($fo,"$p");
	fwrite($name,"$n");
	fwrite($fo1,"Name:$n\tEmail:$e\tMobile:$m\tAddress:$a");
	$msg="<font color='green' face='cursive'>Congratulations, You have successfully Registered!</font>";
	}
}

?>
<link rel="stylesheet" type="text/css" href="style.css"/>
<style>
input[type=submit]{width:100px}
input[type=reset]{width:100px}
td{font-size:14px; padding:1px; font-family:Kristen ITC}
</style>
</head>
<body>
	<table border="0" align="center" cellpadding="3">
	<caption><h3 style="color:#4422aa">Not Registered Yet! Register Now!!</h3></caption>
		<form method="post" enctype="multipart/form-data">
			<tr>
				<td colspan="2" align="center"><?php echo @$msg;?></td>
			</tr>
			<tr>
				<td>Name :</td>
				<td><input type="text" placeholder="Name" name="n"></td>
			</tr>
			<tr>
				<td>Email Id :</td>
				<td><input type="email" placeholder="xyz@ykymail.com" name="e"></td>
			</tr>
			<tr>
				<td>Password :</td>
                <td><input type="password" placeholder="******" name="p"></td>
            </tr> 
            <tr>
                <td>Mobile Number :</td>
                <td><input type="text" placeholder="1234567890" name="m"></td>
            </tr>
			<tr>
                <td>Security Number :</td>
                <td><input type="text" placeholder="1234" name="sn"></td>
            </tr>
            <tr>
                <td>Your Address :</td>
                <td><textarea placeholder="Address" name="a"></textarea></td>
            </tr>
			<tr>
                <td>Upload Your Profile Pic :</td>
                <td><input type="file" value="" name="img"/></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Save" name="save">
                                               <input type="reset" value="Reset"></td>
            </tr>
        </form>
    </table>
</body>
</html>