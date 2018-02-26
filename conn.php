<?
//使用PHP5及以上提供的PDO接口
$dsn="mysql:host=localhost;dbname=campus";
$db=new PDO($dsn,'root','root123456');
$db->query('set names utf-8');
// 原始的连接数据库的代码
// $conn=mysql_connect("localhost","root","root123456");//连接数据库服务器
// mysql_query("set names 'utf-8'");//设置字符集
// mysql_select_db("guestbook",$conn);//选择数据库
?>
