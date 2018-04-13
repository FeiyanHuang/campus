<?php
header('Access-Control-Allow-Origin:*');
header('Content-Type:*');
require('../conn.php');
$id=$_GET['id'];
$sql="Select * From companys, jobs where companys.company_name=jobs.c_name and jobs.id='$id'";
$result=$db->query($sql);
if($result->rowCount()==0){
	// 获取当前状态码，并设置新的状态码
	var_dump(http_response_code(404));
	//获取新的状态码
	var_dump(http_response_code());
	 exit();
}else{
  $row=$result->fetch(1);
  $data =array(
    'j_id'=>$id,
    'job_name'=>$row['job_name'],
    'price'=>$row['price'],
    'c_content'=>$row['c_content'],
    'j_content'=>$row['j_content'],
    'persons'=>$row['persons'],
		'education'=>$row['education'],
		'j_address'=>$row['j_address'],
		'c_name'=>$row['c_name'],
		'date_time'=>$row['date_time'],
    'status'=>$row['status'],
    'c_id'=>$row['id'],
    'company_name'=>$row['company_name'],
    'password'=>$row['password'],
    'boss'=>$row['boss'],
    'tel'=>$row['tel'],
    'email'=>$row['email'],
    'address'=>$row['address'],
    'type'=>$row['type'],
    'content'=>$row['content'],
    'disable'=>$row['disable']
  );
	$data_json = urldecode(json_encode($data));
	header('Content-type:text/json');
	echo $data_json;
}
?>
