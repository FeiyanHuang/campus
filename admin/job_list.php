<?php
header('Access-Control-Allow-Origin:*');
header('Content-Type:*');
require('../conn.php');
$sql="select * from jobs";
$result=$db->query($sql);
$note;$i=0; //初始化变量
while($row=$result->fetch(1)) {
  $note['id']=$row['id'];
  $note['job_name']=$row['job_name'];
  $note['price']=$row['price'];
  $note['content']=$row['content'];
  $note['persons']=$row['persons'];
  $note['c_name']=$row['c_name'];
//放到二维数组里
  $notes[$i++]=$note;
}
echo urldecode(json_encode($notes));
?>
