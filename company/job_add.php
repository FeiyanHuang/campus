<?
header('Access-Control-Allow-Origin:*');
header('Content-Type:*');
#解决PHP 5.1.0开始当对使用date()等函数时，如果timezone设置不正确，在每一次调用时间函数时，都会产生E_NOTICE 或者 E_WARNING 信息
ini_set('date.timezone','Asia/Shanghai');
$job_name=$_GET['job_name'];
$price=$_GET['price'];
$content=$_GET['content'];
$persons=$_GET['persons'];
$c_name=$_GET['c_name'];
$education=$_GET['education'];
$j_address=$_GET['j_address'];
$date_time=date('Y-m-d H:i:s');
// echo $date_time;
require('../conn.php');
$sql="insert into jobs(job_name,price,j_content,persons,c_name,education,j_address,date_time) values(?,?,?,?,?,?,?,?)";
$stmt=$db->prepare($sql);
$stmt->bindParam(1,$job_name);$stmt->bindParam(2,$price);
$stmt->bindParam(3,$content);$stmt->bindParam(4,$persons);$stmt->bindParam(5,$c_name);
$stmt->bindParam(6,$education);$stmt->bindParam(7,$j_address);
$stmt->bindParam(8,$date_time);
$stmt->execute();
?>
