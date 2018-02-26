<?
header('Access-Control-Allow-Origin:*');
header('Content-Type:*');
require('../conn.php');
$admin=$_GET['admin'];
$password=$_GET['password'];
$sql="select * from admins where admin='$admin' and password='$password'";
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
	'admin'=>$admin,
	'password'=>$password,
	// 与下面的urldecode用于解决中文因为json格式输出变成编码的问题\u9ec4\u98de\u71d5
	'admin_name'=>urlencode($row['admin_name']),
	'tel'=>$row['tel']
	);
	$data_json = urldecode(json_encode($data));
	header('Content-type:text/json');
	echo $data_json;
}
?>
