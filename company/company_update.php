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
// $price=$_GET['price'];
// $content=$_GET['content'];
// $persons=$_GET['persons'];
// $disable=null;
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
  // $data =array(
  //   'id'=>$row['id'],
  //   'company_name'=>$row['company_name'],
  //   'password'=>$row['password'],
  //   'boss'=>$row['boss'],
  //   'tel'=>$row['tel'],
  //   'email'=>$row['email'],
  //   'address'=>$row['address'],
  //   'type'=>$row['type'],
  //   'content'=>$row['content'],
  //   'disable'=>$row['disable']
  // );
	// $data_json = urldecode(json_encode($data));
	// header('Content-type:text/json');
	// echo $data_json;
  $sql="Update companys Set password='$password', boss='$boss',tel='$tel',email='$email',address='$address',type='$type',c_content='$content',disable='0' where id='$id'";
  $result=$db->query($sql);
}
?>
