<style>
h1{font-size:40px; padding:0px; font-family:Kristen ITC}
</style>
<h1 align=center >Sent</h1><hr/>
<?php
$user=$_SESSION['user'];
$od=opendir("User_Data/$user/sent");
while($f=readdir($od))
	{
     if($f!="." && $f!="..")
	 {
	 echo "<form method='post'>";
	 echo "<input type='checkbox' name='chk[]' value='$f'>";
	 echo "<a href='home.php?consent=$f'>$f</a><hr/>";
	 }
	}
?>
</form>
<?php
if(isset($_POST['del']))
{
	header("location:home.php?option=sent");
   $cb=$_POST['chk'];
	foreach($cb as $v)
	{
	copy("User_Data/$user/sent/$v","User_Data/$user/trash/$v");
	unlink("User_Data/$user/sent/$v");
	}
}
?>
<button type="submit" style="background-color:transparent; border-color:transparent" name="del" value="Delete">
<img src="image/delete.png"; height="25px"; width="25px";>
</button>