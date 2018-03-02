<?php
// header('Access-Control-Allow-Origin:*');
// header('Content-Type:*');
// require('../conn.php');
// $company_name=$_GET['company_name'];
// $sql="select * from jobs where c_name='$company_name'";
// $result=$db->query($sql);
// if($result->rowCount()==0){
// 	// 获取当前状态码，并设置新的状态码
// 	var_dump(http_response_code(404));
// 	//获取新的状态码
// 	var_dump(http_response_code());
// 	 exit();
// }else{
//   $note;$i=0; //初始化变量
//   while($row=$result->fetch(1)) {
//     $note['id']=$row['id'];
//     $note['job_name']=$row['job_name'];
//     $note['price']=$row['price'];
//     $note['content']=$row['j_content'];
//     $note['persons']=$row['persons'];
//     $note['c_name']=$row['c_name'];
// 		$note['status']=$row['status'];
//   //放到二维数组里
//     $notes[$i++]=$note;
//   }
//   echo urldecode(json_encode($notes));
// }

//增加分页
header('Access-Control-Allow-Origin:*');
header('Content-Type:*');
require('../conn.php');
$company_name=$_GET['company_name'];
$num_rec_per_page=10;   // 每页显示数量
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * $num_rec_per_page;
$sql = "SELECT * FROM jobs where c_name='$company_name' LIMIT $start_from, $num_rec_per_page";
// $rs_result = mysql_query ($sql); // 查询数据
$result=$db->query($sql);
if($result->rowCount()==0){
	// 获取当前状态码，并设置新的状态码
	var_dump(http_response_code(404));
	//获取新的状态码
	var_dump(http_response_code());
	 exit();
}else{
  $note;$i=0; //初始化变量
  while($row=$result->fetch(1)) {
		$note['id']=$row['id'];
		$note['job_name']=$row['job_name'];
		$note['price']=$row['price'];
		$note['content']=$row['j_content'];
		$note['persons']=$row['persons'];
		$note['c_name']=$row['c_name'];
		$note['status']=$row['status'];
  //放到二维数组里
    $notes[$i++]=$note;
  }
  $sql="select count(*) as shuliang from jobs where c_name='$company_name'";
  $result=$db->query($sql);
  $row=$result->fetch(1);
  $count=$row['shuliang'];    //这个就是查询语句的条数
  $notes=array(
    'count' =>$count ,
    'jobs' =>$notes ,
  );
  echo urldecode(json_encode($notes));
}
?>
