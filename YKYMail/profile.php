
<html>
<head>
<title>YKYMail</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
<style>
body{margin-top:-2px}
table{margin:auto}
button:hover{padding:4px;}
h1{font-size:20px; padding:0px; font-family:Kristen ITC}
input[type=submit]:hover{color:#ffffff;background:#1a1aff}
input[type=submit]{width:100px}
img{margin-top:-1px;margin-bottom:0px}
</style>
<?php
if(isset($_POST['save']))
{
$user=$_SESSION['user'];
$target_dir = 'User_Data/'.$user.'/';
$target_file = $target_dir . basename($_FILES['img1']['name']);
if(move_uploaded_file($_FILES['img1']['tmp_name'],'User_Data/'.$user.'/profilepic.jpg'))
		{
      //  $msg="<font color='green' face='cursive' align=center>Congratulations!!</font>";
    } 
	else {
       $msg="<font color='red' face='cursive'>Sorry, there was an error uploading your file.!</font>";
    }
}
?>
</head>
<body>
<form method="post" enctype="multipart/form-data">
<table border="0" align="center" style="border-color=transparent">
<br>
<tr><td colspan="5" align="center"> <?php echo $msg; ?> </td> </tr>
<td>
<br><br>
<span><?php echo "<img src='User_Data/$user/$img' height='300px'/>";?></span>
</td>
<td></td>
<td></td>
<td></td>
<td>
<br><br><br>
<h1 align=left>
<?php
		$fprofile=fopen("User_Data/$user/profile","r");
		while(!feof($fprofile))
		{
			$f=fgetc($fprofile);
			if($f=="\t")
			{
				?>
				<br/>
				<br/>
			<?php
			}
			else 
				echo $f;
		}
?>
</h1>
<br><br>
<h3>
Change Your Profile Pic :
<input type="file" value="" name="img1" id="img1"/>
<h3/>
</td>
<tr>
<td colspan="4" align="center"><input type="submit" value="Change Pic" name="save">
</td>
</tr>
</table>
</form>
</body>
</html>