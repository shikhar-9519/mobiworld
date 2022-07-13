<html>
<head>
<style>
body {
    background-image: url("z121.jpg");
    background-attachment: fixed;
   margin-left: 5em;
   margin-right: 5em;
   margin-top: 0.1em;
}
</style>
<title>Cancel Order</title>
</head>
<body  text="black" vlink="red" alink="red" link="white">
<center>
<IMG SRC="hlogo.png" width="1200" height="180"></center><br>
<hr size="3" color="purple"><br>
<center>
<form action="" method="post"style="font-size: 22;" >
Enter Order No:<input type="text" name="on" style="font-size: 20;">
<input type="submit" value="Click!" name="del" style="font-size: 20;">
</form><center>
<?php
$sn="localhost";
$un="root";
$pass="";
$db="mobiworld";
if(isset($_POST['del']))
{
	$con=Mysql_connect($sn,$un,$pass);
	mysql_select_db($db,$con);
	if($con)
	{
		dl();
	}
	else
	{
		echo "Connection Failed";
	}
}
function dl()
{
	$ono=$_POST['on'];
	if($ono)
	{
	  $ddata=mysql_query("delete from record where Ord_no=$ono");
	  if($ddata)
	   {
		 echo "<font size='6'>Your Order has been Cancelled.<br>Visit Again!!</font>";
	    }
	  }
	 else
	 {
	   echo "Please ! Enter order No.";
	 }
} 
?>
<br><br><br><br><br>
<center>
<a href="home.html"><img src="b1.png" height="80" width="350"></a></center>

</body>
</html>