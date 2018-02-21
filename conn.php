<?
$dsn="mysql:host=localhost;dbname=campus_recruitment";
$db=new PDO($dsn,'root','root123456');
$db->query('set names gb2312');
/*
锟斤拷锟斤拷锟角凤拷锟斤拷锟斤拷锟斤拷锟捷库：
$result=$db->query('select *from lyb');
$result->setFetchMode(PDO::FETCH_ASSOC);
print_r($row=$result->fetch(2)); */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>校园招聘</title>
</head>

<body>
</body>
</html>
