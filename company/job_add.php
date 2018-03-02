<?
header('Access-Control-Allow-Origin:*');
header('Content-Type:*');
$job_name=$_GET['job_name'];
$price=$_GET['price'];
$content=$_GET['content'];
$persons=$_GET['persons'];
$c_name=$_GET['c_name'];
require('../conn.php');
$sql="insert into jobs(job_name,price,j_content,persons,c_name) values(?,?,?,?,?)";
$stmt=$db->prepare($sql);
$stmt->bindParam(1,$job_name);$stmt->bindParam(2,$price);
$stmt->bindParam(3,$content);$stmt->bindParam(4,$persons);$stmt->bindParam(5,$c_name);
$stmt->execute();
?>
