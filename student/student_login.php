<?
header('Access-Control-Allow-Origin:*');
header('Content-Type:*');
require('../conn.php');
$student_id=$_GET['student_id'];
$password=$_GET['password'];
$sql="select * from students where student_id='$student_id' and password='$password'";
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
	'id'=>$row['id'],
	'student_id'=>$student_id,
	'password'=>$password,
	'student_name'=>$row['student_name'],
	'class'=>$row['class'],
	'tel'=>$row['tel']
	);
	// urldecode用于解决中文因为json格式输出变成编码的问题\u9ec4\u98de\u71d5
	$data_json = urldecode(json_encode($data));
	header('Content-type:text/json');
	echo $data_json;
}
?>
