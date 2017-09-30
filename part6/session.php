<html>
<body>
<?php
session_start();

$_SESSION["ID"] = "1234567";
if(isset($_SESSION['count']))
{
	$_SESSION["count"] = $_SESSION["count"] + 1;
}
else
{
	$_SESSION["count"] = 1;
}

print_r($_SESSION);
?>
<a href="destory.php ">Destory session</a><br>
</body>
</html>