<?php
header('Access-Control-Allow-Origin:*');
header('Content-Type:*');
require('../conn.php');
$id=$_GET['id'];
$disable=$_GET['disable'];
$sql="select * from companys where id='$id'";
$result=$db->query($sql);
if($result->rowCount()==0){
	// 获取当前状态码，并设置新的状态码
	var_dump(http_response_code(404));
	//获取新的状态码
	var_dump(http_response_code());
	 exit();
}else{
	if($disable==1){
		$disable=0;
	}else{
		$disable=1;
	}
	// echo $disable;
  $sql="Update companys Set disable='$disable' where id='$id'";
  $result=$db->query($sql);
}
?>
