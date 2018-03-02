<?php
//增加分页
header('Access-Control-Allow-Origin:*');
header('Content-Type:*');
require('../conn.php');
$num_rec_per_page=10;   // 每页显示数量
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * $num_rec_per_page;
$sql = "SELECT * FROM companys LIMIT $start_from, $num_rec_per_page";
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
    $note['company_name']=$row['company_name'];
    $note['password']=$row['password'];
    $note['boss']=$row['boss'];
    $note['tel']=$row['tel'];
    $note['email']=$row['email'];
    $note['address']=$row['address'];
    $note['type']=$row['type'];
    $note['content']=$row['c_content'];
    $note['disable']=$row['disable'];
  //放到二维数组里
    $notes[$i++]=$note;
  }
  // $num_rec_per_page=10;   // 每页显示数量
  // if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
  // $start_from = ($page-1) * $num_rec_per_page;
  // $sql = "SELECT * FROM companys";
  $sql="select count(*) as shuliang from companys";
  $result=$db->query($sql);
  $row=$result->fetch(1);
  $count=$row['shuliang'];    //这个就是查询语句的条数
  $notes=array(
    'count' =>$count ,
    'companys' =>$notes ,
  );
  echo urldecode(json_encode($notes));
}
?>
