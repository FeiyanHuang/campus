<?
session_start();
require('conn.php');
$admin=$_POST['admin'];
$password=$_POST['password'];
$sql="select * from admin where admin='$admin' and password='$password'";
$result=$db->query($sql);
if($result->rowCount()==0){
	unset($_SESSION['admin']);
	echo"<script>alert('登录失败');history.go(-1)</script>";
	exit();
	}else{
	$row=$result->fetch(1);
	$_SESSION['admin']=$row['user'];
	echo"<script>alert('登入成功');</script>";
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>
</body>
</html>
