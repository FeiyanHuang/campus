<?php
header('Access-Control-Allow-Origin:*');
header('Content-Type:*');
#解决PHP 5.1.0开始当对使用date()等函数时，如果timezone设置不正确，在每一次调用时间函数时，都会产生E_NOTICE 或者 E_WARNING 信息
ini_set('date.timezone','Asia/Shanghai');
require('../conn.php');
$id=$_GET['id'];
$price=$_GET['price'];
$content=$_GET['content'];
$persons=$_GET['persons'];
$disable=null;
$education=$_GET['education'];
$j_address=$_GET['j_address'];
$date_time=date('Y-m-d H:i:s');
$sql="select * from jobs where id='$id'";
$result=$db->query($sql);
if($result->rowCount()==0){
	// 获取当前状态码，并设置新的状态码
	var_dump(http_response_code(404));
	//获取新的状态码
	var_dump(http_response_code());
	 exit();
}else{
  $row=$result->fetch(1);
  $sql="Update jobs Set price='$price', j_content='$content',persons='$persons',education='$education',j_address='$j_address',date_time='$date_time',status=Null where id='$id'";
  $result=$db->query($sql);
}
?>
