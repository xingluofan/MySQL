<?php
include_once  "include/conn.php";
session_chk('ad_name','main.php');
if($_GET){
    $sql = "select * from web_admin where id='$_GET[id]'";

    $res = mysql_query ($sql,$conn) or die("数据库查询错误:".mysql_errno().'----'.mysql_error());
    $row = mysql_fetch_assoc ($res);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="admin_edit_chk.php" method="post" >
    管理员名称: <input type="text" name="ad_name" value="<?=$row['ad_name']?>"><br>
管理员级别: <select name="ad_level" id="">
        <option value="">---请选择---</option>
        <?php
        //在web_ad_level中遍历
        //在数据库中查找对应的值
        $sql_lv = "select * from web_ad_level";
        $res_lv = mysql_query ($sql_lv,$conn) or die("数据库查询错误:".mysql_errno().'----'.mysql_error());
while($row_lv = mysql_fetch_assoc ($res_lv)) {
    if ( $row[ 'id' ] = $row_lv[ 'id' ] ) {
        $sl = "selected";
    } else {

        $sl = "";

    }
    ?>
    <option value = "<?= $row_lv[ 'id' ] ?>" <?= $sl ?> ><?= $row_lv[ 'lv_name' ] ?></option>
<?php
}
?>
</select><br>
    <input type="hidden" name="action" value="edit">
    <input type="hidden" name="id" value="<?=$row['id']?>">
    <input type="submit" name="sub" value="提交">
    <input type="reset" name="res" value="取消">
</form>
</body>
</html>