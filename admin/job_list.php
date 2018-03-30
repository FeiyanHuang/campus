<?php
// header('Access-Control-Allow-Origin:*');
// header('Content-Type:*');
// require('../conn.php');
// $sql="select * from jobs";
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
//     $note['status']=$row['status'];
//   //放到二维数组里
//     $notes[$i++]=$note;
//   }
//   echo urldecode(json_encode($notes));
// }

//增加分页
header('Access-Control-Allow-Origin:*');
header('Content-Type:*');
require('../conn.php');
$num_rec_per_page=10;   // 每页显示数量
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * $num_rec_per_page;
$sql = "SELECT * FROM jobs LIMIT $start_from, $num_rec_per_page";
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
		$note['date_time']=$row['date_time'];
		$note['status']=$row['status'];
  //放到二维数组里
    $notes[$i++]=$note;
  }
	// $notes=rsort($notes['date_time']);
	# 我们转成时间戳。方便后面比较（如果查出已经是那就不用转换了）
	// foreach ($data as $k=>$v){
  //   $data[$k]['time'] = strtotime($v['date']);
	// }
	//
	# 把需要根据排序字段的值，放入一个数组中
	foreach ($notes as $k=>$v){
    	$id[$k]   = $v['id'];
    	$time[$k] = $v['time'];
		}

	# 按时间降序排序（time字段）
	array_multisort($time,SORT_NUMERIC,SORT_DESC,$id,SORT_NUMERIC,SORT_DESC,$notes);
  $sql="select count(*) as shuliang from jobs";
  $result=$db->query($sql);
  $row=$result->fetch(1);
  $count=$row['shuliang'];    //这个就是查询语句的条数
  $notes=array(
    'count' =>$count ,
		// 'jobs' =>$notes,
    'jobs' =>$notes,
  );
  echo urldecode(json_encode($notes));
}
?>
