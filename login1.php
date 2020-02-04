<html>
<head></head>
<body>
<?php

$username = $_POST["username"];
$password = $_POST["password"];

$con = mysql_connect("localhost","root","");
if(! $con)
{
    die('Connection Failed'.mysql_error());
}
mysql_select_db("my",$con);

$result = mysql_query("SELECT username,password FROM login");

$row = mysql_fetch_array($result);

if($row["username"]==$username && $row["password"]==$password)
    echo"You are a validated user.";
	
else
{
    echo"Sorry, your credentials are not valid, Please try again.";
	}
	
?>
</body>
</html>