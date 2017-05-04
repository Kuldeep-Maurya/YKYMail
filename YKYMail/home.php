<?php
session_start();
$user=$_SESSION['user'];
@$fp = fopen("User_Data/$user/uname","r");
@$fpr = fread($fp, filesize("User_Data/$user/uname"));
if($_SESSION['user']=="")
{
header('location:index.php');
}
else
{
error_reporting(0);
$pExt=array('jpg','png','jpeg','bmp','gif');
$sc=opendir("User_Data/$user");
while($file=readdir($sc))
{	
	if($file!='.' && $file!='..')
	{
		$filedata=pathinfo($file);
		if(in_array($filedata['extension'], $pExt))
		{
		$img=$filedata['basename'];
		}
		
	}
}



?>
<html>
<head>
<title>YKYMail - <?php echo $fpr ?> </title>
<style>
body{margin-top:-2px}
table{margin:auto}
td{font-size:14px; padding:1px; font-family:Kristen ITC}
button:hover{padding:4px;}
h1{font-size:25px; padding:0px; font-family:Kristen ITC}
h3{font-size:15px; padding:0px; font-family:Kristen ITC}
h2{font-size:18px; padding:0px; font-family:Kristen ITC}
a{border-radius:8px;text-decoration:none;margin-left:2%;font-size:16px}
a.control2{font-family:Kristen ITC; font-size:14px;}
a.control3{font-family:Tempus Sans ITC; font-size:18px; font-weight:bold}
a.control1:hover{color:#123456;padding:0px}
a.control2:hover{color:#fff9c4;padding:1px}
a.control3:hover{color:#ffffff;background:#1a1aff;padding:5px}
img{margin-top:-1px;margin-bottom:0px}
</style>
</head>

<body style="background-image:url('theme/<?php
		@$conTheme=$_REQUEST['thm'];
		if($conTheme)
		{
			$fo=fopen("User_Data/$user/theme","w");
			fwrite($fo,$conTheme);
		}
		@$f=fopen("User_Data/$user/theme","r");
		@$fr=fread($f, filesize("User_Data/$user/theme"));
		echo $fr;
		?>');
		">
<form method="post" enctype="multipart/form-data">
<table align ="center" width="80%" height="100%" border="0" bordercolor="#CCCCCC" cellpadding="0" cellspacing="0" align="left">
  <tr style="background-color:#662c58">
    <td height="30" colspan="2">
        <span style="color:#F0c419 "><?php echo $fpr?></span>
	</td>
  </tr>
  <tr>
    <td height="119" colspan="2" style="background-color:#ceaad8">
	<span><?php echo "<img src='User_Data/$user/$img' height='120px'/>";?></span>
	<span style="margin-left:30%">
	<a href="home.php?option=welcome" class=control2 >Getting Started</a>
	<a href="home.php?option=profile" class=control2 >Profile</a>
	<a href="home.php?option=pass" class=control2 >Change Password</a>
	<a href="home.php?option=theme" class=control2 >Change Background</a>
	<a href="logout.php" class=control2 >Logout</a>
	<br>
	</span>

	</td>
  </tr>
  <tr>
    <td width="198" align="center" valign="top" style="background-color:#00d8cc;padding:10px">
	<a href="home.php?option=compose" class=control3 >COMPOSE</a><br/><br/>
	<a href="home.php?option=inbox" class=control3 >INBOX</a><br/><br/>
	<a href="home.php?option=sent" class=control3 >SENT</a><br/><br/>
	<a href="home.php?option=draft" class=control3 >DRAFT</a><br/><br/>
	<a href="home.php?option=trash" class=control3 >TRASH</a><br/>
	</td>
	<td width="878" height="516" valign="top" style="background-color:#CCFFFF">
	<?php
	@$opt=$_GET['option'];
	switch($opt)
	{
	case 'pass';
	include('changepassword.php');
	break;
	case 'theme';
	include('changetheme.php');
	break;
	case 'compose';
	include('compose.php');
	break;
	case 'inbox';
	include('inbox.php');
	break;
	case 'sent';
	include('sent.php');
	break;
	case 'draft';
	include('draft.php');
	break;
	case 'welcome';
	include('welcome.php');
	break;
	case 'trash';
	include('trash.php');
	break;
	case 'profile';
	include('profile.php');
	break;
	}
	//for inbox
	$coninb=$_GET['coninb'];
		if(isset($coninb))
		{
		$fo=fopen("User_Data/$user/inbox/$coninb","r");
		$filesize=filesize("User_Data/$user/inbox/$coninb");
		$msg=fread($fo,$filesize);
		echo "Message:\t";
		echo $msg;
		}
	//for sent
		$consent=$_GET['consent'];
		if(isset($consent))
		{
		$fo=fopen("User_Data/$user/sent/$consent","r");
		$filesize=filesize("User_Data/$user/sent/$consent");
		$msg=fread($fo,$filesize);
		echo "Message:\t";
		echo $msg;
		}
		//for trash
		$contrsh=$_GET['contrs'];
		if(isset($contrsh))
		{
		$fo=fopen("User_Data/$user/trash/$contrsh","r");
		$filesize=filesize("User_Data/$user/trash/$contrsh");
		$msg=fread($fo,$filesize);
		echo "Message:\t";
		echo $msg;
		}
		//for trash
		$condrft=$_GET['condrft'];
		if(isset($condrft))
		{
		$fo=fopen("User_Data/$user/draft/$condrft","r");
		$filesize=filesize("User_Data/$user/draft/$condrft");
		$msg=fread($fo,$filesize);
		echo "Message:\t";
		echo $msg;
		}
	?>	</td>
  </tr>
  <tr>
    <td colspan="2" align="center" style="background-color:#6e44dd;" ><font color=white>Developers : Yamini, Kuldeep and Abhishek</td>
  </tr>
  </form>
</table>
</body>
</html>
<?php
}
?>
