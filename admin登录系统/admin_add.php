<?php

include_once 'include/conn.php';
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
管理员添加页面
<form action="admin_add_chk.php" method="post">
    管理员名称: <input type="text" name="ad_name"><br>
    管理员密码: <input type="password" name="ad_pwd"><br>
    确认密码: <input type="password" name="ad_pwd_ag"><br>
    管理员级别: <select name="ad_level" id="">
        <option value="">---请选择---</option>
        <?php
        $sql = "select * from web_ad_level";
        $res = mysql_query($sql,$conn) or die("数据库查询错误:".mysql_errno().'----'.mysql_error());
        while($row = mysql_fetch_assoc($res)){
            ?>
            <option value="<?=$row['id']?>"><?=$row['lv_name']?></option>
            <?php
        }
        ?>
    </select><br>
    <input type="hidden" name="action" value="add">
    <input type="submit" name="sub" value="提交">
    <input type="reset" name="res" value="取消">
</form>
</body>
</html>