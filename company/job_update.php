<?php
header('Access-Control-Allow-Origin:*');
header('Content-Type:*');
require('../conn.php');
$id=$_GET['id'];
$price=$_GET['price'];
$content=$_GET['content'];
$persons=$_GET['persons'];
$disable=null;
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
	// $data =array(
  //     'id'=>$row['id'],
  //     'job_name'=>$row['job_name'],
  //     'price'=>$row['price'],
  //     'content'=>$row['content'],
  //     'persons'=>$row['persons'],
  //     'c_name'=>$row['c_name'],
  // 		'status'=>$row['status']
	// );
	// $data_json = urldecode(json_encode($data));
	// header('Content-type:text/json');
	// echo $data_json;
  $sql="Update jobs Set price='$price', j_content='$content',persons='$persons',status=Null where id='$id'";
  $result=$db->query($sql);
}
?>
