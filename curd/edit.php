<?php
session_start ();
@$conn = mysql_connect ( 'localhost' , 'root' , 'root' );
mysql_select_db ( 'yi' );
mysql_set_charset ( 'utf8' );

if ( $_GET ) {
    //先找到当前id的用户 用*找到所有数据
    $sql = "select * from user where id='$_GET[id]'";
    $res = mysql_query ( $sql , $conn );
    $row = mysql_fetch_assoc ( $res );
    //性别
    $male = $female = '';
    if ( $row[ 'sex' ] == 1 ) {
        $male = 'checked';
    } else {
        $female = 'checked';
    }
    //爱好
	$hobbyArr =array('smoke','drink','perm','sleep');
    $hArr = explode ('|',$row['hobby']);

	//学历
	$eduArr = array('primary','junior','senior','university');
}
?>
<!doctype html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <title>修改信息</title>
</head>
<body>
<h1>修改信息</h1>
<form action = "edit_chk.php" method = "post" enctype="multipart/form-data">
	<input type = "hidden" value="<?=$row['id']?>">
	用户名:
	<input type = "text" name = "username" value = "<?= $row['username'] ?>">
	<br>

	年龄: <input type = "text" name = "age" value = "<?= $row[ 'age' ] ?>"><br>
	性别: <input type = "radio" name = "sex" value = "1" <?=$male?>>男
	<input type = "radio" name = "sex" value = "2" <?=$female?>>女 <br>
	爱好:
	<?php
	foreach ($hobbyArr as $key=>$val) {
        if ( in_array ( $val , $hArr ) ) {
            $ck = "checked";
        } else {
            $ck = "";
        }
        ?>
		<input type = "checkbox" name = "hobby[]" value = "<?= $val ?>" <?= $ck ?>><?= $val ?>
        <?php
    }
	?>
<!--	<input type = "checkbox" name = "hobby[]" value = "smoke">smoke-->
<!--	<input type = "checkbox" name = "hobby[]" value = "drink">drink-->
<!--	<input type = "checkbox" name = "hobby[]" value = "perm">perm-->
<!--	<input type = "checkbox" name = "hobby[]" value = "sleep">sleep-->
	<br>
	学历:
	<select name = "edu" id = "">
		<?php
		foreach ($eduArr as $key=>$val) {
            if (  $val  == $row['edu']) {
                $sk = 'selected';
            }else{
            	$sk = '';
            }
            ?>
					<option value = "<?=$val?>" <?=$sk?>><?=$val?></option>
<!--					<option value = "primary" $ck>primary</option>-->
<!--					<option value = "junior" $ck>junior</option>-->
<!--					<option value = "senior" $ck>senior</option>-->
<!--					<option value = "university" $ck>university</option>-->
            <?php
        }
		?>
	</select>
	<br>
    	头像:
	<img src = "images/<?=$row['photo']?>" alt = "" width="50">
	<input type = "file" name = "file">
	<input type = "hidden" name = "filehid" value="<?=$row['photo']?>">
	<br>
	自我介绍:
	<textarea name = "intro" id = "" cols = "30" rows = "10"><?=$row['intro']?></textarea>
	<br>
	<input type = "hidden" name="id" value="<?=$row['id']?>">
	<input type = "submit" value = "提交" name = "sub">
	<input type = "submit" value = "取消">
</form>
</body>
</html>