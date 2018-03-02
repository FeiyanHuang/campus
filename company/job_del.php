<?
header('Access-Control-Allow-Origin:*');
header('Content-Type:*');
$id=intval($_GET['id']);//获取index.php提交上来的id参数并转化为整形
require('../conn.php');
$sql="delete from jobs where id=$id";
$result=$db->query($sql);
// $sql="insert into jobs(job_name,price,content,persons,c_name) values(?,?,?,?,?)";
// $stmt=$db->prepare($sql);
// $stmt->bindParam(1,$job_name);$stmt->bindParam(2,$price);
// $stmt->bindParam(3,$content);$stmt->bindParam(4,$persons);$stmt->bindParam(5,$c_name);
// $stmt->execute();
?>
