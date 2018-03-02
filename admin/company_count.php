<?
header('Access-Control-Allow-Origin:*');
header('Content-Type:*');
require('../conn.php');
$num_rec_per_page=3;   // 每页显示数量
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * $num_rec_per_page;
// $sql = "SELECT * FROM companys";
$sql="select count(*) as shuliang from companys";
$result=$db->query($sql);
$row=$result->fetch(1);
$count=$row['shuliang'];    //这个就是查询语句的条数
echo $count;
?>
