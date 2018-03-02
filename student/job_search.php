<?php
header('Access-Control-Allow-Origin:*');
header('Content-Type:*');
require('../conn.php');
$search=$_GET['search'];
$sql="Select * From jobs Where job_name like '%$search%' and status='1'";
$result=$db->query($sql);
// $row=$result->fetch(1);
if($result->rowCount()==0){
  // 获取当前状态码，并设置新的状态码
	var_dump(http_response_code(404));
	//获取新的状态码
	var_dump(http_response_code());
	exit();
}else {
  $note;$i=0; //初始化变量
  while($row=$result->fetch(1)) {
    $note['id']=$row['id'];
    $note['job_name']=$row['job_name'];
    $note['c_name']=$row['c_name'];
    $note['price']=$row['price'];
    $note['persons']=$row['persons'];
    $note['content']=$row['j_content'];
  //放到二维数组里
    $notes[$i++]=$note;
  }
  echo urldecode(json_encode($notes));
}
// $row=$result->fetch(1);

?>
