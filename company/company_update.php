<?php
header('Access-Control-Allow-Origin:*');
header('Content-Type:*');
require('../conn.php');
$id=$_GET['id'];
$password=$_GET['password'];
$boss=$_GET['boss'];
$tel=$_GET['tel'];
$email=$_GET['email'];
$address=$_GET['address'];
$type=$_GET['type'];
$content=$_GET['content'];
$sql="select * from companys where id='$id'";
$result=$db->query($sql);
if($result->rowCount()==0){
	// 获取当前状态码，并设置新的状态码
	var_dump(http_response_code(404));
	//获取新的状态码
	var_dump(http_response_code());
	 exit();
}else{
  $row=$result->fetch(1);
  $sql="Update companys Set password='$password', boss='$boss',tel='$tel',email='$email',address='$address',type='$type',c_content='$content',disable='0' where id='$id'";
  $result=$db->query($sql);
}
?>
