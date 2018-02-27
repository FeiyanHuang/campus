<?
header('Access-Control-Allow-Origin:*');
header('Content-Type:*');
require('../conn.php');
$company_name=$_GET['company_name'];
$password=$_GET['password'];
$sql="select * from companys where company_name='$company_name' and password='$password'";
$result=$db->query($sql);
if($result->rowCount()==0){
	// 获取当前状态码，并设置新的状态码
	var_dump(http_response_code(404));
	//获取新的状态码
	var_dump(http_response_code());
	 exit();
}else{
	$row=$result->fetch(1);
	// echo $row['disable'];
	if($row['disable']== 0){
		$data =array(
		'id'=>$row['id'],
		'company_name'=>$company_name,
		'password'=>$password,
		'boss'=>$row['boss'],
		'tel'=>$row['tel'],
		'email'=>$row['email'],
		'address'=>$row['address'],
		'type'=>$row['type'],
		'content'=>$row['content'],
		'disable'=>$row['disable']
		);
		// urldecode用于解决中文因为json格式输出变成编码的问题\u9ec4\u98de\u71d5
		$data_json = urldecode(json_encode($data));
		header('Content-type:text/json');
		echo $data_json;
		exit();
	} else {
		// 获取当前状态码，并设置新的状态码
		var_dump(http_response_code(404));
		//获取新的状态码
		var_dump(http_response_code());
		 exit();
	}
}
?>
