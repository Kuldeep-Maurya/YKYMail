<?php session_start(); ?>
</center>

<html>
<head>
<title>YKYmail - Home</title>
<style>
body{margin-top:auto}
table{margin:auto;}
h1{font-family : AR Julian; font-size:40px; padding:0px; font-weight:bold;}
a.control3{font-family:Tempus Sans ITC; font-size:16px; font-weight:bold; font-style:italic}
a{border-radius:10px;text-decoration:none;margin-left:6%;font-family:Tempus Sans ITC; font-size:22px; font-weight:bold}
a:hover{color:#00004d;}
a.regis:hover{color:#00004d;}
h3{font-size:18px; padding:1px; font-family:Kristen ITC}
td{font-size:14px; padding:1px; font-family:Kristen ITC}
a.regis{font-size:18px; padding:1px; font-family:Kristen ITC}
</style>
</head>
<body>
<table width="100%" height="100%" border="0" >
  <tr>
    <td height="190" colspan="0" bgcolor="#665299" style="background-image:url(image/logo1.JPG)"></td>
  </tr>
  <tr>
    <td height="40" colspan="5" bgcolor=" #ffafee" align="center">
	<a href="index.php">HOME</a>
	<a href="index.php?option=registration">REGISTER NOW</a>
	<a href="index.php?option=login">SIGN IN</a>
	</td>
  </tr>
  <tr>
    <td width="801" height="400" valign="top" bgcolor="#AFC6FF" >
	<?php
	@$opt=$_GET['option'];
	//echo $opt;
	if($opt=="")
	{
	?>
		<br>
		<h1 align="center"><font color="#000080">Welcome to YKYmail.com</h1>
		<table width="95%" height="100%" border="0">
		<tr>
		<td>
		<div align='center'><?php echo "<img src='image/pic3.JPG'  height='300px'/>";?></div>
		<td/>
		<td>
		<h3 align="center"><font color="#000080" >Want to send your friend a post, but the postoffice is far??<br><br>Or are you too lazy to go to the post office next to your house??<br><br>Isn't sending post too slow?!!</h3><td/>
		<tr/>
		<tr><td><td/><td><td/><td><td/><tr/>
		<tr><td><td/><td><td/><td><td/><tr/>
		<tr><td><td/><td><td/><td><td/><tr/>
		<tr><td><td/><td><td/><td><td/><tr/>
		<tr><td><td/><td><td/><td><td/><tr/>
		<tr><td><td/><td><td/><td><td/><tr/>
		<tr>
		<td><h3 align="center"><font color="#000080" >How about a computer application which can make this job easier and way more faster?!!<br><br>A software which can send and recieve mail from any of your friends around the world?</h3><td/>
		<td>
		<div align='center'><?php echo "<img src='image/pic5 (1).JPG'  height='300px'/>";?></div>
		<td/>	
		<td>
		<div align='center'><?php echo "<img src='image/pic5 (2).JPG'  height='300px'/>";?></div>
		<td/>
		<tr/>
		<tr><td><td/><td><td/><td><td/><tr/>
		<tr><td><td/><td><td/><td><td/><tr/>
		<tr><td><td/><td><td/><td><td/><tr/>
		<tr><td><td/><td><td/><td><td/><tr/>
		<tr><td><td/><td><td/><td><td/><tr/>
		<tr><td><td/><td><td/><td><td/><tr/>
		<tr>
		<td>
		<div align='center'><?php echo "<img src='image/pic1.JPG'  height='300px'/>";?></div>
		<td/>
		<td><h3 align="center"><font color="#000080" >All these problems have just one solution!!!<br><br>YKYMail.com presents you all the above features under one roof!!<br><br>
		What are you waiting for??<h3/><a href="index.php?option=registration" class='regis'>Register Now!!</a><td/>
		<tr/>
		<tr><td><td/><td><td/><td><td/><tr/>
		<tr><td><td/><td><td/><td><td/><tr/>
		<tr><td><td/><td><td/><td><td/><tr/>
		<tr><td><td/><td><td/><td><td/><tr/>
		<tr><td><td/><td><td/><td><td/><tr/>
		<tr><td><td/><td><td/><td><td/><tr/>
		</table>
	<?php
	}
	else
	{
	switch($opt)
	{
	case 'login';
	include('login.php');
	break;
	case 'registration';
	include('regis.php');
	break;
	case 'fpass';
	include('forgotpass.php');
	break;
	}
	}
	?>
	</td>
  </tr>
  <tr>
    <td colspan="2" align="center" height="10" style="background-color:#6e44dd;" ><font color=white>Developers : Yamini, Kuldeep and Abhishek</td>
  </tr>
</table>
</body>
</html>
