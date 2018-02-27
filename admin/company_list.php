<?php
header('Access-Control-Allow-Origin:*');
header('Content-Type:*');
require('../conn.php');
$sql="select * from companys";
$result=$db->query($sql);
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
  $note['content']=$row['content'];
  $note['disable']=$row['disable'];
//放到二维数组里
  $notes[$i++]=$note;
}
echo urldecode(json_encode($notes));
?>
