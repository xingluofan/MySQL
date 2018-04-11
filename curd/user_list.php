<?php
session_start ();

@$conn = mysql_connect ( 'localhost' , 'root' , 'root' );
mysql_select_db ( 'yi' );
mysql_set_charset ( 'utf8' );

$sql = "select * from user";//获取元素个数
$res = mysql_query($sql,$conn) or die(mysql_error());//从$coon里查询$sql

?>

<!doctype html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <title>用户列表</title>
</head>
<style>
	td {
		border:1px solid;
		text-align: center;
	}
</style>
<body>
<?php
if($_SESSION['username']) {
?>
	欢迎: 会员 <?=$_SESSION['username']?> 回来 <a href="quit.php">注销</a>
	<hr>
<?php
}else{
?>
	欢迎: 游客 <?=rand(1000,9999)?></a> <a href = "login.php">登录</a> <a href = "register.php">注册</a>

<?php
}
?>

<?php
if($_SESSION['username']) {
?>

	<h1 align="center">用户列表</h1>
	<table align = "center" cellspacing = "0">
    <tr>
        <td>ID</td>
        <td>NAME</td>
        <td>AGE</td>
        <td>GENDER</td>
        <td>HOBBY</td>
        <td>EDU</td>
        <td>INTRO</td>
        <td>PHOTO</td>
        <td>TIME</td>
        <td>DO</td>
    </tr>
	<?php
	while($row = mysql_fetch_assoc ($res)) {
		if($row['sex'] == 1){
			$sex = '男';
		}else if($row['sex'] == 2){
            $sex = '女';
		}
        ?>
		<tr>
		<td><?=$row['id']?></td>
		<td><?=$row['username']?></td>
<!--		<td>--><?//=$row['password']?><!--</td>-->
		<td><?=$row['age']?></td>
		<td><?=$sex?></td>
		<td><?=$row['hobby']?></td>
		<td><?=$row['edu']?></td>
		<td><?=$row['intro']?></td>
		<td><img src = "images/<?=$row['photo']?>" alt = "" width="50"></td>
		<td><?=$row['timer']?></td>
		<td><a href = "edit.php?id=<?=$row['id']?>">编辑</a> <a href = "delete.php?id=<?=$row['id']?>">删除</a></td>
		</tr>
    <?php
    }
	?>
</table>
<?php
}
?>
</body>
</html>